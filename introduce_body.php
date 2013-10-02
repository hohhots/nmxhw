<?php
  
                /***************************************************************************
		                                introduce_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: introduce_body.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [introduce_body.php]<p>Designed by www.nm114.net');
	
}

include('template/introduce_body' . $nmxhwTfEx);
/*******************
//输出introduce_body信息
	$nmxhwTemplate->loadTemplatefile($nmxhwTf['introduce_body']);
	
		$nmxhwTemplate->setVariable(array(
			 
			
		));
			
	$nmxhwTemplate->show();
//输出head信息结束
*********************/
?>