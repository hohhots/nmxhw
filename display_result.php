<?php
  
                /***************************************************************************
		                                display_result.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: display_result.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [display_result.php]<p>Designed by www.nm114.net');
	
}


$nmxhwTemplate->loadTemplatefile($nmxhwTf['display_result']);
                $nmxhwTemplate->setVariable(array(
			"useronline" => $nmxhwLang['disres1'] . '<font color="#ff0000">' . $displayResult->useronline . '</font>ÈË',
			"reguser" =>  $nmxhwLang['disres2'],
			"racuser" =>  $nmxhwLang['disres3'],
			"university" =>  $nmxhwLang['disres4'],
			"senior" =>  $nmxhwLang['disres5'],
		));
		
		$nmxhwTemplate->setCurrentBlock("row1");
		for($i = 0; $i < 15; $i++)
		{
			if(($i % 2) == 0)
			{
				$temp = '#eeeeee';
			}
			else
			{
				$temp = '#ffffff';
			}
			$nmxhwTemplate->setVariable(array(
				"name1" => $displayResult->ureguser[$i]['name'],
				"value1" => $displayResult->ureguser[$i]['value'],
				"bgcolor1" => $temp,
			));
			$nmxhwTemplate->parse("row1");
		}
		
		$nmxhwTemplate->setCurrentBlock("row2");
		for($i = 0; $i < 15; $i++)
		{
			if(($i % 2) == 0)
			{
				$temp = '#eeeeee';
			}
			else
			{
				$temp = '#ffffff';
			}
			$nmxhwTemplate->setVariable(array(
				"name2" => $displayResult->sreguser[$i]['name'],
				"value2" => $displayResult->sreguser[$i]['value'],
				"bgcolor2" => $temp,
			));
			$nmxhwTemplate->parse("row2");
		}
		
		$nmxhwTemplate->setCurrentBlock("row3");
		for($i = 0; $i < 15; $i++)
		{
			if(($i % 2) == 0)
			{
				$temp = '#eeeeee';
			}
			else
			{
				$temp = '#ffffff';
			}
			$nmxhwTemplate->setVariable(array(
				"name3" => $displayResult->uracuser[$i]['name'],
				"value3" => $displayResult->uracuser[$i]['value'],
				"bgcolor3" => $temp,
			));
			$nmxhwTemplate->parse("row3");
		}
		
		$nmxhwTemplate->setCurrentBlock("row4");
		for($i = 0; $i < 15; $i++)
		{
			if(($i % 2) == 0)
			{
				$temp = '#eeeeee';
			}
			else
			{
				$temp = '#ffffff';
			}
			$nmxhwTemplate->setVariable(array(
				"name4" => $displayResult->sracuser[$i]['name'],
				"value4" => $displayResult->sracuser[$i]['value'],
				"bgcolor4" => $temp,
			));
			$nmxhwTemplate->parse("row4");
		}
	
		
$nmxhwTemplate->show();
?>