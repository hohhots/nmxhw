<?php
  
                /***************************************************************************
		                                disuinfo_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: disuinfo_body.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [disuinfo_body.php]<p>Designed by www.nm114.net');
	
}

//output display body variable

$nmxhwTemplate->loadTemplatefile($nmxhwTf['disuinfo_body']);
	$nmxhwTemplate->setVariable(array(
		"title"      => $disUinfo->title,
		"uinfo0"     => $disUinfo->disuinfobody['uinfo0'],
		"uinfo0val"  => $disUinfo->disuinfobody['uinfo0val'],
		"uinfo1"     => $disUinfo->disuinfobody['uinfo1'],
		"uinfo1val"  => $disUinfo->disuinfobody['uinfo1val'],
		"uinfo2"     => $disUinfo->disuinfobody['uinfo2'],
		"uinfo2val"  => $disUinfo->disuinfobody['uinfo2val'],
		"uinfo3"     => $disUinfo->disuinfobody['uinfo3'],
		"uinfo3val"  => $disUinfo->disuinfobody['uinfo3val'],
		"uinfo4"     => $disUinfo->disuinfobody['uinfo4'],
		"uinfo4val"  => $disUinfo->disuinfobody['uinfo4val'],
		"uinfo5"     => $disUinfo->disuinfobody['uinfo5'],
		"uinfo5val"  => $disUinfo->disuinfobody['uinfo5val'],
		"uinfo6"     => $disUinfo->disuinfobody['uinfo6'],
		"uinfo6val"  => $disUinfo->disuinfobody['uinfo6val'],
		"uinfo7"     => $disUinfo->disuinfobody['uinfo7'],
		"uinfo7val"  => $disUinfo->disuinfobody['uinfo7val'],
		"uinfo8"     => $disUinfo->disuinfobody['uinfo8'],
		"uinfo8val"  => $disUinfo->disuinfobody['uinfo8val'],
		"uinfo9"     => $disUinfo->disuinfobody['uinfo9'],
		"uinfo9val"  => $disUinfo->disuinfobody['uinfo9val'],
		"uinfo10"    => $disUinfo->disuinfobody['uinfo10'],
		"uinfo10val" => $disUinfo->disuinfobody['uinfo10val'],
		"uinfo11"    => $disUinfo->disuinfobody['uinfo11'],
		"uinfo11val" => $disUinfo->disuinfobody['uinfo11val'],
		"uinfo12"    => $disUinfo->disuinfobody['uinfo12'],
		"uinfo12val" => $disUinfo->disuinfobody['uinfo12val'],
		"uinfo13"    => $disUinfo->disuinfobody['uinfo13'],
		"uinfo13val" => $disUinfo->disuinfobody['uinfo13val'],
		"uinfo14"    => $disUinfo->disuinfobody['uinfo14'],
		"uinfo14val" => $disUinfo->disuinfobody['uinfo14val'],
		"uinfo15"    => $disUinfo->disuinfobody['uinfo15'],
		"uinfo15val" => $disUinfo->disuinfobody['uinfo15val'],
		"uinfo16"    => $disUinfo->disuinfobody['uinfo16'],
		"uinfo16val" => $disUinfo->disuinfobody['uinfo16val'],
		"uinfo17"    => $disUinfo->disuinfobody['uinfo17'],
		"uinfo17val" => $disUinfo->disuinfobody['uinfo17val'],
		"uinfo18"    => $disUinfo->disuinfobody['uinfo18'],
		"uinfo18val" => $disUinfo->disuinfobody['uinfo18val'],
	));
$nmxhwTemplate->show();
?>