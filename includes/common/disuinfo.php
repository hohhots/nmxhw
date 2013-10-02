<?php
 
                /***************************************************************************
		                                disuinfo.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: disuinfo.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	die('Sorry! This accessing is not valid! Try other URL. [disuinfo.php]<p>Designed by www.nm114.net ');
	
}

class NmxhwClassDisUserInfo
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	
	var $title;
	var $disuinfobody = array();
	
	function NmxhwClassDisUserInfo($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj = $nmxhwSqlObj;
		$this->nmxhwLang = $nmxhwLang;
		
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype']  != 'AA')
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
		
		$this->title = $this->nmxhwClientInfo->HTTP_GET_VARS['userid'] . $this->nmxhwLang['disuinfo_title'];
		
		$sql = "SELECT * FROM " . $this->nmxhwLang['user_table'] . " WHERE user_id = " . $this->nmxhwClientInfo->HTTP_GET_VARS['userid'];
		if( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{	
			die('Error ocurs while select user table.[disuinfo.php NmxhwClassDisUserInfo()1]');
		}
		while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		
		$this->disuinfobody['uinfo0']     = $this->nmxhwLang['disuinfo_0'];
		$this->disuinfobody['uinfo0val']  = $temp[0]['user_name'];
		$this->disuinfobody['uinfo1']     = $this->nmxhwLang['disuinfo_1'];
		$this->disuinfobody['uinfo1val']  = $temp[0]['sex'];
		$this->disuinfobody['uinfo2']     = $this->nmxhwLang['disuinfo_2'];
		$this->disuinfobody['uinfo2val']  = $temp[0]['age'];
		$this->disuinfobody['uinfo3']     = $this->nmxhwLang['disuinfo_3'];
		$this->disuinfobody['uinfo3val']  = $temp[0]['grouptype'];
		$this->disuinfobody['uinfo4']     = $this->nmxhwLang['disuinfo_4'];
		$this->disuinfobody['uinfo4val']  = $temp[0]['school'];
		$this->disuinfobody['uinfo5']     = $this->nmxhwLang['disuinfo_5'];
		$this->disuinfobody['uinfo5val']  = $temp[0]['registdate'];
		$this->disuinfobody['uinfo6']     = $this->nmxhwLang['disuinfo_6'];
		$this->disuinfobody['uinfo6val']  = $temp[0]['beginupdate'];
		$this->disuinfobody['uinfo7']     = $this->nmxhwLang['disuinfo_7'];
		$this->disuinfobody['uinfo7val']  = $temp[0]['telephone'];
		$this->disuinfobody['uinfo8']     = $this->nmxhwLang['disuinfo_8'];
		$this->disuinfobody['uinfo8val']  = $temp[0]['mobile'];
		$this->disuinfobody['uinfo9']     = $this->nmxhwLang['disuinfo_9'];
		$this->disuinfobody['uinfo9val']  = $temp[0]['email'];
		$this->disuinfobody['uinfo10']     = $this->nmxhwLang['disuinfo_10'];
		$this->disuinfobody['uinfo10val']  = $temp[0]['www'];
		$this->disuinfobody['uinfo11']     = $this->nmxhwLang['disuinfo_11'];
		$this->disuinfobody['uinfo11val']  = $temp[0]['user_pass'];
		$this->disuinfobody['uinfo12']     = $this->nmxhwLang['disuinfo_12'];
		$this->disuinfobody['uinfo12val']  = $temp[0]['region'];
		$this->disuinfobody['uinfo13']     = $this->nmxhwLang['disuinfo_13'];
		$this->disuinfobody['uinfo13val']  = $temp[0]['address'];
		$this->disuinfobody['uinfo14']     = $this->nmxhwLang['disuinfo_14'];
		$this->disuinfobody['uinfo14val']  = $temp[0]['zip'];
		$this->disuinfobody['uinfo15']     = $this->nmxhwLang['disuinfo_15'];
		$this->disuinfobody['uinfo15val']  = $this->nmxhwClientInfo->nmxhwDecode_Ip($temp[0]['ip']);
		$this->disuinfobody['uinfo16']     = $this->nmxhwLang['disuinfo_16'];
		$this->disuinfobody['uinfo16val']  = $temp[0]['logintime'];
		$this->disuinfobody['uinfo17']     = $this->nmxhwLang['disuinfo_17'];
		$this->disuinfobody['uinfo17val']  = $this->getState($temp[0]['checkall']);
		$this->disuinfobody['uinfo18']     = $this->nmxhwLang['disuinfo_18'];
		$this->disuinfobody['uinfo18val']  = $temp[0]['vote_degree'];
	}
	//***********************************************
	function getState($state)
	{
		if($state = 'N')
		{
			return $this->nmxhwLang['disuinfo_n'];
		}
		if($state = 'Y')
		{
			return $this->nmxhwLang['disuinfo_y'];
		}
		if($state = 'C')
		{
			return $this->nmxhwLang['disuinfo_c'];
		}
	}
}
?>