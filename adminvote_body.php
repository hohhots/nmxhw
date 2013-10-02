<?php
  
                /***************************************************************************
		                                adminvote_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: adminvote_body.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [adminvote_body.php]<p>Designed by www.nm114.net');
	
}

//output display body variable
$tempallstep  = (isset($nmxhwClientInfo->HTTP_GET_VARS['step']) ? 2 : 1);

if($tempallstep == 1)
{
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['adminvote_body1']);
		$nmxhwTemplate->setVariable(array(
			"degree" => $adminVotBody->insertinto['degree'],
			"user" => $adminVotBody->insertinto['user'],
			"ok" => $nmxhwLang['reg_continue2'],
			"back" => $nmxhwLang['vot_back'],
		));
	$nmxhwTemplate->show();
}
else
{
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['adminvote_body2']);
		$nmxhwTemplate->setVariable(array(
			"notes" => $adminVotBody->insertinto['notes'],
			"back" => $nmxhwLang['vot_back'],
		));
	$nmxhwTemplate->show();
}
?>