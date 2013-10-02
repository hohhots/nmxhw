<?php
 
                /***************************************************************************
		                                guestvotbody.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: guestvotbody.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	die('Sorry! This accessing is not valid! Try other URL. [guestvotbody.php]<p>Designed by www.nm114.net ');
	
}
class NmxhwClassGuestVotBody
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	
	var $notes;
	
	function NmxhwClassGuestVotBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj     = $nmxhwSqlObj;
		$this->nmxhwLang       = $nmxhwLang;
		
		$expiry_time = ($this->nmxhwClientInfo->currentTime - 3600);
		$sql = "DELETE FROM " . $this->nmxhwLang['guestvot_table'] . " 
			WHERE votetime < $expiry_time";
		if ( !($this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while clearing guestvote table.[guestvotbody.php  38]');
		}
		$tempSessionId = $this->nmxhwClientInfo->nmxhwSessionVars['sessionid'];
		
		if(($this->nmxhwClientInfo->nmxhwSessionVars['userid'] != 0) || ($this->nmxhwClientInfo->HTTP_GET_VARS['user'] == ''))
		{
			$this->nmxhwClientInfo->nmxhwRedirection('2');
		}
		
		$sql = "SELECT * FROM " . $this->nmxhwLang['guestvot_table'] . " WHERE sessionval = '$tempSessionId' AND user_id = " . $this->nmxhwClientInfo->HTTP_GET_VARS['user'];
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error occurs while selecting guestvote table.[guestvotbody.php  47]');
		}
		$tempum = $this->nmxhwSqlObj->sql_Numrows($result);
		if($tempum == 0)
		{
			$sql = "INSERT INTO " . $this->nmxhwLang['guestvot_table'] . " (sessionval,user_id,votetime) 
					VALUES ('$tempSessionId'," . $this->nmxhwClientInfo->HTTP_GET_VARS['user'] . "," . $this->nmxhwClientInfo->currentTime . ")";
			
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error occurs while insert into guestvot table.[guestvotbody.php  57]');
			}
			
			$sql = "SELECT vote_degree  FROM " . $this->nmxhwLang['user_table'] . " WHERE user_id = " . $this->nmxhwClientInfo->HTTP_GET_VARS['user'];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting user table.[guestvotbody.php  61]');
			}
			while($tempval[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			$sql = "UPDATE " . $this->nmxhwLang['user_table'] . " SET vote_degree = " . ($tempval[0]['vote_degree'] + 1) . "   
					WHERE user_id = " . $this->nmxhwClientInfo->HTTP_GET_VARS['user'];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error occurs while insert into guestvot table.[guestvotbody.php  69]');
			}
			
			$this->notes = $this->nmxhwLang['vot_thank'];
		}
		else
		{
			$this->notes = $this->nmxhwLang['vot_sorry'];
		}
	}
}
?>