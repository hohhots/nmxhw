<?php
  
                /***************************************************************************
		                                display_body.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: display_body.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [display_body.php]<p>Designed by www.nm114.net');
	
}

//output display body variable

$nmxhwTemplate->loadTemplatefile($nmxhwTf['display_body']);
	$nmxhwTemplate->setVariable(array(
		"script1" =>  $displayBody->nmxhwdisbody['script1'],
		"title" =>  $displayBody->nmxhwdisbody['title'],
		"reload" =>  $displayBody->nmxhwdisbody['reload'],
		"displaystate1" => $displayBody->nmxhwdisbody['displaystate1'],
		"displaystate2" => $displayBody->nmxhwdisbody['displaystate2'],
		"displaystate3" => $displayBody->nmxhwdisbody['displaystate3'],
		"nofile" => $displayBody->nmxhwdisbody['nofile'],
	));
	
	$nmxhwTemplate->setCurrentBlock("rows");
		for($i = 0; $i < $displayBody->nmxhwdisbody['loopnum']; $i++)
		{
			$j = (5 * $i);
			(($j + 5) < $displayBody->nmxhwdisbody['usernum']) ? ($z = $j + 5) : ($z = $displayBody->nmxhwdisbody['usernum']);
			$nmxhwTemplate->setCurrentBlock("cols");
			for($j; $j < $z; $j++)
			{	
				$nmxhwTemplate->setVariable(array(
					"displaystate4" => $displayBody->nmxhwdisbody['displaystate4'],
					"pass" => $displayBody->nmxhwdisbody['dis_pass'],
					"passval" => $displayBody->nmxuserinfo[$j]['passval'],
					"delete" => $displayBody->nmxhwdisbody['dis_delete'],
					"deleteval" => $displayBody->nmxuserinfo[$j]['deleteval'],
					"userlogo" => $displayBody->nmxuserinfo[$j]['userlogo'],
					"usertype" => $displayBody->nmxuserinfo[$j]['usertype'],
					"userinfo" => $displayBody->nmxuserinfo[$j]['userinfo'],
					"nmwt" => $displayBody->nmxuserinfo[$j]['nmwt'] ,
					"nmtw" => $displayBody->nmxuserinfo[$j]['nmtw'],
					"free" => $displayBody->nmxuserinfo[$j]['free'],
					"vote" => $displayBody->nmxuserinfo[$j]['vote'],
				));
				$nmxhwTemplate->parse("cols");
			}
			$nmxhwTemplate->parse("rows");
		}

$nmxhwTemplate->show();
?>