<?php
 
                /***************************************************************************
		                                disluinfo.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: disluinfo.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [disluinfo.php]<p>Designed by www.nm114.net ');
	
}

class NmxhwClassDisluInfo
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	
	var $nmxhwdisluer = array();
	
	function NmxhwClassDisluInfo($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj     = $nmxhwSqlObj;
		$this->nmxhwLang       = $nmxhwLang;
		
		$sql = "SELECT * FROM " . $this->nmxhwLang['passuser_table'] . " WHERE user_id = " . $this->nmxhwClientInfo->HTTP_GET_VARS['id'];
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
		$tempum = $this->nmxhwSqlObj->sql_Numrows($result);
		if($tempum == 0)
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
		else
		{
			while($tempval[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		}
		
		$this->nmxhwdisluer['userid']      = $tempval[0]['user_id'];
		$this->nmxhwdisluer['nameval']      = $tempval[0]['user_name'];
		$this->nmxhwdisluer['sexval']       = $tempval[0]['sex'];
		$this->nmxhwdisluer['ageval']       = $tempval[0]['age'];
		$this->nmxhwdisluer['regionval']    = $tempval[0]['region'];
		$this->nmxhwdisluer['grouptypeval'] = $tempval[0]['gtype'];
		$this->nmxhwdisluer['schoolval']    = $tempval[0]['school'];
		$this->nmxhwdisluer['emailval']     = $tempval[0]['email'];
		$this->nmxhwdisluer['wwwval']       = $tempval[0]['www'];
		$this->nmxhwdisluer['prizeval']     = $tempval[0]['prize'];
	}
	
}
?>