<?php
  
                /***************************************************************************
		                                head.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: head.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [head.php]<p>Designed by www.nm114.net');
	
}

header('Content-Type: text/html; charset=gb2312');

//output head variable
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['head']);
	
		$nmxhwTemplate->setVariable(array(
			"title"        => $displayHead->nmxhwhead['title'],
			"currtime"     => $displayHead->nmxhwhead['currtime'],
			"runstate"     => $displayHead->nmxhwhead['runstate'],
			"toptitle"     => $nmxhwLang['toptitle'],
			"introduce"    => $nmxhwLang['introduce'],
			"result"       => $nmxhwLang['result'],
			"browse"       => $nmxhwLang['browse'],
			"manual"       => $nmxhwLang['manual'],
 			"regist"       => $nmxhwLang['regist'],
 			"log"          => $displayHead->nmxhwhead['log'],
 			"displayinfo"  => $displayHead->nmxhwhead['displayinfo'],
 			"displayinfo1" => $displayHead->nmxhwhead['displayinfo1'],
 			"loginuser"    => $displayHead->nmxhwhead['loginuser'],
 			"adminfile"    => $displayHead->nmxhwhead['adminfile'],
 			"selectorder"  => $displayHead->nmxhwhead['selectorder'],
 			"spaceinfo"    => $displayHead->nmxhwhead['usspace'] . $displayHead->nmxhwhead['rmspace'],
 			"dayremain"    => $displayHead->nmxhwhead['dayremain'],
 			"display1"     => $displayHead->nmxhwhead['display1'],
		));
			
	$nmxhwTemplate->show();
?>