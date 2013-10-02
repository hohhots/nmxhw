<?php
 
                /***************************************************************************
		                                checkuser.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: checkuser.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [checkuser.php ]<p>Designed by www.nm114.net ');
	
}

class NmxhwClassCheckUser
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	var $displayHead;	
	
	//*****************************************************
	function NmxhwClassCheckUser($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj = $nmxhwSqlObj;
		$this->nmxhwLang = $nmxhwLang;
		$this->displayHead = $displayHead;
		
		$this->authorize();
		
		if($this->nmxhwClientInfo->HTTP_GET_VARS['action'] == 'pass')
		{
			$this->letsUserPass($this->nmxhwClientInfo->HTTP_GET_VARS['userid']);
		}
		
		if($this->nmxhwClientInfo->HTTP_GET_VARS['action'] == 'delete')
		{
			$this->letsUserchecked($this->nmxhwClientInfo->HTTP_GET_VARS['userid']);
		}
		
		$this->nmxhwClientInfo->nmxhwRedirection('2');
	}
	//*****************************************************
	function authorize()
	{
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] != 'AA')
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
		
		if(($this->nmxhwClientInfo->HTTP_GET_VARS['action'] != 'delete') && ($this->nmxhwClientInfo->HTTP_GET_VARS['action'] != 'pass'))
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
		
		$sql = "SELECT beginupdate,checkall FROM " . $this->nmxhwLang['user_table'] . " WHERE user_id = " . $this->nmxhwClientInfo->HTTP_GET_VARS['userid'];
		if( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{	
			die('Error ocurs while select user table.[checkuser.php  authorize()1]');
		}
		while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		if($temp[0]['checkall'] != 'N')
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
		if((time() - $temp[0]['beginupdate']) < 604800)
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
	
	}
	//*****************************************************
	function letsUserPass($userid)//beginupdate,checkall FROM " . 
	{
		$sql = "UPDATE " . $this->nmxhwLang['user_table'] . " SET checkall = 'Y' WHERE user_id = " . $userid;
		if(!$this->nmxhwSqlObj->sql_Query($sql))
		{	
			die('Error ocurs while update user table.[checkuser.php  letsUserPass()1]');
		}
	}
	//*****************************************************
	function letsUserchecked($userid)
	{
		$sql = "UPDATE " . $this->nmxhwLang['user_table'] . " SET checkall = 'C' WHERE user_id = " . $userid;
		if(!$this->nmxhwSqlObj->sql_Query($sql))
		{	
			die('Error ocurs while update user table.[checkuser.php  letsUserchecked()1]');
		}
		
		$tempdir = $this->displayHead->UserBaseUrl($userid);
		$this->deleteUserDir($tempdir,$tempdir);
		@rmdir($tempdir);
	}
	//*****************************************************
	function deleteUserDir($tempdir,$userdir)
	{
		$dir = dir($tempdir);
		$dir->rewind();
		while($tempp = $dir->read())
		{
			
			if(is_dir($tempdir . '/' . $tempp))
			{
				if(($tempp != '..')  &&  ($tempp != '.'))
				{
					$this->deleteUserDir($tempdir . '/' . $tempp,$userdir);
				}
			}
			else
			{
				@unlink($tempdir . '/' . $tempp);
			}
		}
		if($tempdir != $userdir)
		{
			@rmdir($tempdir);
			$this->DeleteUserDir(substr($tempdir,0,strrpos($tempdir,'/')),$userdir);
		}
		$dir->close();
	}
}
?>