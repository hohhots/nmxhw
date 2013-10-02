<?php
  
                /***************************************************************************
		                                disluinfo_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: disluinfo_body.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [disluinfo_body.php]<p>Designed by www.nm114.net');
	
}

//output display body variable
$nmxhwTemplate->loadTemplatefile($nmxhwTf['disluinfo_body']);
	$nmxhwTemplate->setVariable(array(
		
		"name"         => $nmxhwLang['disluser_name'],
		"utitle"       => $disluInfo->nmxhwdisluer['userid'] . '&nbsp;' . $nmxhwLang['disluser_utitle'],
		"sex"          => $nmxhwLang['disluser_sex'],
		"age"          => $nmxhwLang['disluser_age'],
		"school"       => $nmxhwLang['disluser_school'],
		"email"        => $nmxhwLang['disluser_email'],
		"www"          => $nmxhwLang['disluser_www'],
		"grouptype"    => $nmxhwLang['disluser_grouptype'],
		"prize"        => $nmxhwLang['disluser_prize'],
		"region"       => $nmxhwLang['disluser_region'],
		"nameval"      => $disluInfo->nmxhwdisluer['nameval'],
		"sexval"       => $disluInfo->nmxhwdisluer['sexval'],
		"ageval"       => $disluInfo->nmxhwdisluer['ageval'],
		"regionval"    => $disluInfo->nmxhwdisluer['regionval'],
		"grouptypeval" => $disluInfo->nmxhwdisluer['grouptypeval'],
		"schoolval"    => $disluInfo->nmxhwdisluer['schoolval'],
		"emailval"     => $disluInfo->nmxhwdisluer['emailval'],
		"wwwval"       => $disluInfo->nmxhwdisluer['wwwval'],
		"prizeval"     => $disluInfo->nmxhwdisluer['prizeval'],
		"back"         => $nmxhwLang['disluser_back'],
	));

$nmxhwTemplate->show();
?>