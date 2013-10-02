<?php
  
                /***************************************************************************
		                                help_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: help_body.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [help_body.php]<p>Designed by www.nm114.net');
	
}


$nmxhwTemplate->loadTemplatefile($nmxhwTf['help_body']);
	
	$nmxhwTemplate->setVariable(array(
		"helptext" => $nmxhwLang['helptext'],
	));
		
$nmxhwTemplate->show();

?>