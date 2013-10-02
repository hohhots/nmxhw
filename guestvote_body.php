<?php
  
                /***************************************************************************
		                                guestvote_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: guestvote_body.php.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [guestvote_body.php]<p>Designed by www.nm114.net');
	
}

//output display body variable
$nmxhwTemplate->loadTemplatefile($nmxhwTf['guestvote_body']);
	$nmxhwTemplate->setVariable(array(
		"notes" => $guestVotBody->notes,
		"back" => $nmxhwLang['vot_back'],
	));

$nmxhwTemplate->show();
?>