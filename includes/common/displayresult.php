<?php
 
                /***************************************************************************
		                                displayresult.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: displayresult.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	die('Sorry! This accessing is not valid! Try other URL. [displayresult.php]<p>Designed by www.nm114.net ');
	
}

class NmxhwClassDisplayResult
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	var $displayHead;
	
	var $ureguser = array();
	var $sreguser = array();
	var $uracuser = array();
	var $sracuser = array();
	var $useronline;
	
	function NmxhwClassDisplayResult($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj     = $nmxhwSqlObj;
		$this->nmxhwLang       = $nmxhwLang;
		$this->displayHead     = $displayHead;
		
		for($i = 0; $i < 15; $i++)
		{
			$j = $i + 1;
			$this->ureguser[$i]['name'] = $this->nmxhwLang['region' . $j];
			$this->uracuser[$i]['name'] = $this->nmxhwLang['region' . $j];
			$this->sreguser[$i]['name'] = $this->nmxhwLang['region' . $j];
			$this->sracuser[$i]['name'] = $this->nmxhwLang['region' . $j];
		}
		for($i = 0; $i < 12; $i++)
		{
			
			$j = $i + 1;
			
			unset($temp);
			$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['user_table'] . ' WHERE grouptype = "' . $this->nmxhwLang['ugrouptype'] . '" AND region = "' . $this->nmxhwLang['region' . $j] . '"';
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while select user table.[displayresult.php 56]');
			}
			while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			$this->ureguser[$i]['value'] = $temp[0][0] . ' ��';
						
			unset($temp);
			$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['user_table'] . ' WHERE grouptype = "' . $this->nmxhwLang['ugrouptype'] . '" AND region = "' . $this->nmxhwLang['region' . $j] . '" AND checkall = "Y"';
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while select user table.[displayresult.php 65]');
			}
			while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			$this->uracuser[$i]['value'] = $temp[0][0] . ' ��';
			
			unset($temp);
			$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['user_table'] . ' WHERE grouptype = "' . $this->nmxhwLang['sgrouptype'] . '" AND region = "' . $this->nmxhwLang['region' . $j] . '"';
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while select user table.[displayresult.php 74]');
			}
			while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			$this->sreguser[$i]['value'] = $temp[0][0] . ' ��';
			
			unset($temp);
			$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['user_table'] . ' WHERE grouptype = "' . $this->nmxhwLang['sgrouptype'] . '" AND region = "' . $this->nmxhwLang['region' . $j] . '" AND checkall = "Y"';
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while select user table.[displayresult.php 83]');
			}
			while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			$this->sracuser[$i]['value'] = $temp[0][0] . ' ��';
		}
		 
		
		$this->ureguser[12]['value'] = $this->countAll($nmxhwLang['ugrouptype']) . ' ��';
		$this->ureguser[13]['value'] = $this->countSex($nmxhwLang['ugrouptype'],'��') . ' ��';
		$this->ureguser[14]['value'] = $this->countSex($nmxhwLang['ugrouptype'],'Ů') . ' ��';
		
		$this->uracuser[12]['value'] = $this->countAll($nmxhwLang['ugrouptype'],'Y') . ' ��';
		$this->uracuser[13]['value'] = $this->countSex($nmxhwLang['ugrouptype'],'��','Y') . ' ��';
		$this->uracuser[14]['value'] = $this->countSex($nmxhwLang['ugrouptype'],'Ů','Y') . ' ��';
		
		$this->sreguser[12]['value'] = $this->countAll($nmxhwLang['sgrouptype']) . ' ��';
		$this->sreguser[13]['value'] = $this->countSex($nmxhwLang['sgrouptype'],'��') . ' ��';
		$this->sreguser[14]['value'] = $this->countSex($nmxhwLang['sgrouptype'],'Ů') . ' ��';
		
		$this->sracuser[12]['value'] = $this->countAll($nmxhwLang['sgrouptype'],'Y') . ' ��';
		$this->sracuser[13]['value'] = $this->countSex($nmxhwLang['sgrouptype'],'��','Y') . ' ��';
		$this->sracuser[14]['value'] = $this->countSex($nmxhwLang['sgrouptype'],'Ů','Y') . ' ��';
		
		$this->countOnlUser();
	}
	//*********************************************
	function countOnlUser()
	{
		$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['session_table'] . ' WHERE sessionval <> 1';
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while select session table.[displayresult.php 115]');
		}
		while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		$this->useronline = $temp[0][0];
	}
	//*********************************************
	function countAll($type,$or = 'N')
	{
		unset($temp);
		if($or == 'N')
		{
			$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['user_table'] . ' WHERE grouptype = "' . $type . '"';
		}
		else
		{
			$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['user_table'] . ' WHERE grouptype = "' . $type . '" AND checkall = "Y"';
		}
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while select user table.[displayresult.php 120]');
		}
		while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		return $temp[0][0];
	}
	//********************************************
	function countSex($type,$sex,$or = 'N')
	{
		unset($temp);
		if($or == 'N')
		{
			$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['user_table'] . ' WHERE grouptype = "' . $type . '" AND sex = "'. $sex . '"';
		}
		else
		{
			$sql = 'SELECT COUNT(*) FROM ' . $this->nmxhwLang['user_table'] . ' WHERE grouptype = "' . $type . '" AND sex = "'. $sex . '"' . ' AND checkall = "Y"';
		}
		
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while select user table.[displayresult.php 139]');
		}
		while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		return $temp[0][0];
	}
}
?>