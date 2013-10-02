<?php
  
                /***************************************************************************
		                                regist.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: regist.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [regist.php]<p>Designed by www.nm114.net');
	
}

//output registbody variable
if(ereg("^[(1|2|3)]$",$nmxhwClientInfo->HTTP_GET_VARS['step']))
{
	$tempstep = $nmxhwClientInfo->HTTP_GET_VARS['step'];
}
else
{
	$tempstep = 1;
}

if($tempstep == 1)
{
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['registbody1']);
		$nmxhwTemplate->setVariable(array(
			"title1"       => $displayRegBody->nmxhwregbody['title1'],
			"text1"        => $displayRegBody->nmxhwregbody['text1'],
			"continue1"    => $displayRegBody->nmxhwregbody['continue1'],
			"exit1"        => $displayRegBody->nmxhwregbody['exit1'],
		));

	$nmxhwTemplate->show();
}

if($tempstep == 2)
{
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['registbody2']);
	$nmxhwTemplate->setVariable(array(
		"title2"      => $displayRegBody->nmxhwregbody['title2'],
		"name2"       => $displayRegBody->nmxhwregbody['name2'],
		"sex2"        => $displayRegBody->nmxhwregbody['sex2'],
		"sex21"       => $displayRegBody->nmxhwregbody['sex21'],
		"pass2"       => $displayRegBody->nmxhwregbody['pass2'],
		"vepass2"     => $displayRegBody->nmxhwregbody['vepass2'],
		"alpnum2"     => $displayRegBody->nmxhwregbody['alpnum2'],
		"region2"     => $displayRegBody->nmxhwregbody['region2'],
		"region21"    => $displayRegBody->nmxhwregbody['region21'],
		"grouptype2"     => $displayRegBody->nmxhwregbody['grouptype2'],
		"grouptype21"     => $displayRegBody->nmxhwregbody['grouptype21'],
		"school2"     => $displayRegBody->nmxhwregbody['school2'],
		"address2"    => $displayRegBody->nmxhwregbody['address2'],
		"zip2"        => $displayRegBody->nmxhwregbody['zip2'],
		"telephone2"  => $displayRegBody->nmxhwregbody['telephone2'],
		"regionnum2"  => $displayRegBody->nmxhwregbody['regionnum2'],
		"mobile2"     => $displayRegBody->nmxhwregbody['mobile2'],
		"email2"      => $displayRegBody->nmxhwregbody['email2'],
		"www2"        => $displayRegBody->nmxhwregbody['www2'],
		"age2"        => $displayRegBody->nmxhwregbody['age2'],
		"explain2"    => $displayRegBody->nmxhwregbody['explain2'],
		"required2"   => $displayRegBody->nmxhwregbody['required2'],
		"continue2"   => $displayRegBody->nmxhwregbody['continue2'],
		"reset2"      => $displayRegBody->nmxhwregbody['reset2'],
		"exit2"       => $displayRegBody->nmxhwregbody['exit2'],
	));
	
	$nmxhwTemplate->show();
}

if($tempstep == 3)
{
	if($displayRegBody->nmxhwPostWrong['state'] == 0)
	{
		$nmxhwTemplate->loadTemplatefile($nmxhwTf['registbody2']);
		$nmxhwTemplate->setVariable(array(
			"wrong2"       => $displayRegBody->nmxhwregbody['wrong2'],
			"title2"       => $displayRegBody->nmxhwregbody['title2'],
			"name2"        => $displayRegBody->nmxhwregbody['name2'],
			"sex2"         => $displayRegBody->nmxhwregbody['sex2'],
			"sex21"        => $displayRegBody->nmxhwregbody['sex21'],
			"pass2"        => $displayRegBody->nmxhwregbody['pass2'],
			"vepass2"      => $displayRegBody->nmxhwregbody['vepass2'],
			"alpnum2"      => $displayRegBody->nmxhwregbody['alpnum2'],
			"region2"      => $displayRegBody->nmxhwregbody['region2'],
			"region21"     => $displayRegBody->nmxhwregbody['region21'],
			"grouptype2"     => $displayRegBody->nmxhwregbody['grouptype2'],
			"grouptype21"     => $displayRegBody->nmxhwregbody['grouptype21'],
			"school2"      => $displayRegBody->nmxhwregbody['school2'],
			"address2"     => $displayRegBody->nmxhwregbody['address2'],
			"zip2"         => $displayRegBody->nmxhwregbody['zip2'],
			"telephone2"   => $displayRegBody->nmxhwregbody['telephone2'],
			"regionnum2"   => $displayRegBody->nmxhwregbody['regionnum2'],
			"mobile2"      => $displayRegBody->nmxhwregbody['mobile2'],
			"email2"       => $displayRegBody->nmxhwregbody['email2'],
			"www2"         => $displayRegBody->nmxhwregbody['www2'],
			"age2"         => $displayRegBody->nmxhwregbody['age2'],
			"explain2"     => $displayRegBody->nmxhwregbody['explain2'],
			"required2"    => $displayRegBody->nmxhwregbody['required2'],
			"continue2"    => $displayRegBody->nmxhwregbody['continue2'],
			"reset2"       => $displayRegBody->nmxhwregbody['reset2'],
			"exit2"        => $displayRegBody->nmxhwregbody['exit2'],
			
			"nameval"      => $displayRegBody->nmxhwregbody['nameval'],
			"ageval"       => $displayRegBody->nmxhwregbody['ageval'],
			"passval"      => $displayRegBody->nmxhwregbody['passval'],
			"vepassval"    => $displayRegBody->nmxhwregbody['vepassval'],
			"schoolval"    => $displayRegBody->nmxhwregbody['schoolval'],
			"addressval"   => $displayRegBody->nmxhwregbody['addressval'],
			"zipval"       => $displayRegBody->nmxhwregbody['zipval'],
			"telephoneval" => $displayRegBody->nmxhwregbody['telephoneval'],
			"mobileval"    => $displayRegBody->nmxhwregbody['mobileval'],
			"emailval"     => $displayRegBody->nmxhwregbody['emailval'],
			"wwwval"       => $displayRegBody->nmxhwregbody['wwwval'],
		));
		
		$nmxhwTemplate->show();
	}
	else
	{
		$nmxhwTemplate->loadTemplatefile($nmxhwTf['registbody3']);
		$nmxhwTemplate->setVariable(array(
			"text3"        => $displayRegBody->nmxhwregbody['text3'],
		));
			
		$nmxhwTemplate->show();
	}
	
}
?>