<?php
 
                /***************************************************************************
		                                adminvotbody.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: adminvotbody.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	die('Sorry! This accessing is not valid! Try other URL. [adminvotbody.php]<p>Designed by www.nm114.net ');
	
}
class NmxhwClassAdminVotBody
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	
	var $insertinto = array();
	function NmxhwClassAdminVotBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj     = $nmxhwSqlObj;
		$this->nmxhwLang       = $nmxhwLang;
		
		if(($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] != 'A') || 
			(!isset($this->nmxhwClientInfo->HTTP_GET_VARS['user']) && 
			 !isset($this->nmxhwClientInfo->HTTP_POST_VARS['user'])))
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
		
		$tempstep  = (isset($this->nmxhwClientInfo->HTTP_GET_VARS['step']) ? 2 : 1);
		if(isset($this->nmxhwClientInfo->HTTP_GET_VARS['user']))
		{
			$tempuser = $this->nmxhwClientInfo->HTTP_GET_VARS['user'];
		}
		if(isset($this->nmxhwClientInfo->HTTP_POST_VARS['user']))
		{
			$tempuser = $this->nmxhwClientInfo->HTTP_POST_VARS['user'];
		}
				
		if($tempstep == 1)
		{
			$this->insertinto['degree'] = $this->nmxhwLang['degree'];
			$this->insertinto['user'] = $tempuser;
		}
		else
		{
			if(($this->nmxhwClientInfo->HTTP_POST_VARS['degree'] == ''))
			{
				
			}
			if(!ereg("^[1-9]{1}[0-9]{0,2}$",$this->nmxhwClientInfo->HTTP_POST_VARS['degree']))
			{
				$this->insertinto['notes'] = $this->nmxhwLang['admindegree'];
				return;
			}
			$temp1 = $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
			
			$sql = "SELECT * FROM " . $this->nmxhwLang['admin_table'] . " WHERE admin_id = $temp1";
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting admin table.[adminvotbody.php  54]');
			}
			$tempnum = $this->nmxhwSqlObj->sql_Numrows($result);
			if($tempnum == 0)
			{
				$this->nmxhwClientInfo->nmxhwRedirection();
			}
			else
			{
				while($tempval[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
				if($tempval[0]['admin_level'] == '¹Ü')
				{
					$this->insertinto['notes'] = $this->nmxhwLang['adminnotes'];
					return;
				}
			}
			
			$sql = "SELECT * FROM " . $this->nmxhwLang['adminvote_table'] . " WHERE admin_id = $temp1 AND user_id = $tempuser";
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting admin table.[adminvotbody.php  83]');
			}
			$tempnum = $this->nmxhwSqlObj->sql_Numrows($result);
			if($tempnum != 0)
			{
				$this->insertinto['notes'] = $this->nmxhwLang['adminsorry'];
				return;
			}
			else
			{
				$sql = "SELECT MAX(vote_id) FROM " . $this->nmxhwLang['adminvote_table'];
				if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
				{
					die('Error occurs while select max adminvote table record.[adminvotbody.php  96]');
				}
				$tempmax[] = $this->nmxhwSqlObj->sql_Fetchrow($result);
				
				$sql = "INSERT INTO " . $this->nmxhwLang['adminvote_table'] . " (vote_id,user_id,admin_id,vote_date,degree) 
					VALUES (" . ($tempmax[0][0] + 1) . "," . $tempuser . ",$temp1,NOW()," . $this->nmxhwClientInfo->HTTP_POST_VARS['degree'] . ")";
				
				if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
				{
					die('Error occurs while insert into adminvote table.[adminvotbody.php  105]');
				}
				$this->insertinto['notes'] = $this->nmxhwLang['adminsuccess'];
			}
		}
	}
}
?>