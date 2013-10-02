<?php
  
                /***************************************************************************
		                                nologin_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: nologin_body,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [nologin_body.php]<p>Designed by www.nm114.net');
	
}

//输出head信息
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['nologin_body']);
	
		$nmxhwTemplate->setVariable(array(
			"nologin" => $nmxhwLang['nologin'],
		));
			
	$nmxhwTemplate->show();
//输出head信息结束
?>