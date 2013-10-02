<?php
  
                /***************************************************************************
		                                index.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: index.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
//all page must be displayed through index.php
	define ('IN_NMXHW', true);  
	error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables
	set_magic_quotes_runtime(0); // Disable magic_quotes_runtime 

//set all php files extension.
	include('includes/extension.inc');

//constant value used in program.
	include('includes/constants.' . $nmxhwEx);
	
//chinese languge constants.
	include('includes/langmain.' . $nmxhwEx);

//set template file program.
	include('includes/phptpl.' . $nmxhwEx);

//db variables and functions.
	include('includes/mysql.' . $nmxhwEx);

//common used classes to program.
	include('includes/common/clientinfo.' . $nmxhwEx);

//includes display head classes.
	include('includes/common/displayhead.' . $nmxhwEx);

//Begin to create object.
	$nmxhwSqlObj     = new MyyDb($sqlUser,$sqlPassword,$sqlServer,$sqlDbname);
	$nmxhwClientInfo = new NmxhwClassClientInfo($nmxhwEx,$nmxhwSqlObj,$nmxhwURL,$HTTP_GET_VARS,$HTTP_POST_VARS,$HTTP_COOKIE_VARS,$HTTP_SERVER_VARS,$HTTP_ENV_VARS,$REMOTE_ADDR,$nmxhwCookie,$nmxhwLang);
	$nmxhwTemplate   = new IntegratedTemplateExtension("template/");
	$displayHead     = new NmxhwClassDisplayHead($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang);
	
	switch($nmxhwClientInfo->HTTP_GET_VARS['target'])
	{
		case 1:
			include('includes/common/displayresult.' . $nmxhwEx);
			$displayResult = new NmxhwClassDisplayResult($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead);
			$tempbody = 'display_result';
			break;
		case 2:
			include('includes/common/displaybody.' . $nmxhwEx);
			$displayBody = new NmxhwClassDisplayBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead);
			$tempbody = 'display_body';
			break;
		case 3:
			include('includes/common/displayregbody.' . $nmxhwEx);
			$displayRegBody = new NmxhwClassDisplayRegBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang);
			$tempbody = 'regist_body';
			break;
		case 4:
			$tempbody = 'help_body';
			break;
		case 5:
			//$tempbody = 'sorry';
			$tempbody = 'login_body';
			break;
		case 6:
			include('includes/common/adminfilebody.' . $nmxhwEx);
			$adminFileBody = new NmxhwClassAdminFileBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead);
			$tempbody = 'adminfile/adminfile_body';
			break;
		case 7:
			include('includes/common/adminfilebody.' . $nmxhwEx);
			$adminFileBody = new NmxhwClassAdminFileBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead);
			$tempbody = 'adminfile/adminfile_body';
			break;
		case 8:
			include('includes/common/adminfilebody.' . $nmxhwEx);
			$adminFileBody = new NmxhwClassAdminFileBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead);
			$tempbody = 'adminfile/adminfile_body';
			break;
		case 9:
			include('includes/common/guestvotbody.' . $nmxhwEx);
			$guestVotBody = new NmxhwClassGuestVotBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang);
			$tempbody = 'guestvote_body';
			break;
		case 10:
			include('includes/common/adminvotbody.' . $nmxhwEx);
			$adminVotBody = new NmxhwClassAdminVotBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang);
			$tempbody = 'adminvote_body';
			break;
		case 11:
			include('includes/common/disuinfo.' . $nmxhwEx);
			$disUinfo = new NmxhwClassDisUserInfo($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang);
			$tempbody = 'disuinfo_body';
			break;
		case 12:
			include('includes/common/checkuser.' . $nmxhwEx);
			$checkuser = new NmxhwClassCheckUser($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead);
			break;
		case 20:
			$tempbody = 'nologin_body';
			break;
		case 21:
			$tempbody = 'errlogin_body';
			break;
		default:
			include('includes/common/displayresult.' . $nmxhwEx);
			$displayResult = new NmxhwClassDisplayResult($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead);
			$tempbody = 'display_result';
			break;
	}
	
	include('head.' . $nmxhwEx);
	include($tempbody . '.' . $nmxhwEx);
	include('foot.' . $nmxhwEx);
?>