<?php

//Don't touch this file which will modified by program.

                /***************************************************************************
		                                constants.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: constants.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [constants.php]<p>Designed by www.nm114.net');
	
}
//www.nm114.net

//www.nm114.net end
$nmxhwCookie['name']   = 'nmxhwnm114';
$nmxhwCookie['path']   = '';
$nmxhwCookie['domain'] = '';
$nmxhwCookie['secure'] = '0';
$nmxhwCookie['length'] = '600';

$nmxhwURL = 'http://202.99.225.146/index.php';

$nmxhwTf['head'] = 'overall_head' . $nmxhwTfEx;
$nmxhwTf['display_body'] = 'display_body' . $nmxhwTfEx;
$nmxhwTf['display_result'] = 'display_result' . $nmxhwTfEx;
$nmxhwTf['adminvote_body1'] = 'adminvote_body1' . $nmxhwTfEx;
$nmxhwTf['adminvote_body2'] = 'adminvote_body2' . $nmxhwTfEx;
$nmxhwTf['help_body'] = 'help_body' . $nmxhwTfEx;
$nmxhwTf['login_body'] = 'login_body' . $nmxhwTfEx;
$nmxhwTf['nologin_body'] = 'nologin_body' . $nmxhwTfEx;
$nmxhwTf['errlogin_body'] = 'errlogin_body' . $nmxhwTfEx;
$nmxhwTf['registbody1'] = 'regist_body1' . $nmxhwTfEx;
$nmxhwTf['registbody2'] = 'regist_body2' . $nmxhwTfEx;
$nmxhwTf['registbody3'] = 'regist_body3' . $nmxhwTfEx;
$nmxhwTf['guestvote_body'] = 'guestvote_body' . $nmxhwTfEx;
$nmxhwTf['disuinfo_body'] = 'disuinfo_body' . $nmxhwTfEx;
$nmxhwTf['adminfile_body'] = 'adminfile/adminfile_body' . $nmxhwTfEx;
$nmxhwTf['foot'] = 'overall_foot' . $nmxhwTfEx;
$nmxhwTf['sorry'] = 'sorry' . $nmxhwTfEx;

$sqlUser     = 'root';
$sqlPassword = 'a4f8u2o0';
$sqlServer   = 'localhost';
$sqlDbname   = 'nmxhw_wybs';
?>