<?php 
                /***************************************************************************
		                                foot.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: foot.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [foot.php]<p>Designed by www.nm114.net');
	
}

$nmxhwTemplate->loadTemplatefile($nmxhwTf['foot']);
	$nmxhwTemplate->setVariable(array(
		"company" => $nmxhwLang['company'],
		"contact" => $nmxhwLang['contact'],
		"address" => $nmxhwLang['address'],
	));
	
$nmxhwTemplate->show();
?>