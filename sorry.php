<?php
  
                /***************************************************************************
		                                sorry.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: sorry.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [sorry.php]<p>Designed by www.nm114.net');
}

//输出head信息
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['sorry']);
	
		$nmxhwTemplate->setVariable(array(
			"sorry" => $nmxhwLang['tempsorry']
		));
			
	$nmxhwTemplate->show();
//输出head信息结束
?>