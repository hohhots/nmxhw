<?php
  
                /***************************************************************************
		                                login_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: login_body,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [login_body.php]<p>Designed by www.nm114.net');
	
}

//输出head信息
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['login_body']);
	
		$nmxhwTemplate->setVariable(array(
			"username" => $nmxhwLang['loginuserid'],
			"userpass" => $nmxhwLang['loginuserpass'],
			"usertype" => $nmxhwLang['loginuseryype'],
			"users"     => $nmxhwLang['registuser'],
			"admin"    =>  $nmxhwLang['adminuser1'],
			"sorry"     => $nmxhwClientInfo->loginfail,
			"login"     => $nmxhwLang['login'],
				
		));
			
	$nmxhwTemplate->show();
//输出head信息结束
?>