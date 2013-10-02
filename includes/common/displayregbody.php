<?php
 
                /***************************************************************************
		                                displayregbody.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: displayregbody.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	die('Sorry! This accessing is not valid! Try other URL. [displayregbody.php]<p>Designed by www.nm114.net ');
	
}

class NmxhwClassDisplayRegBody
{
	var $nmxhwPostWrong = array();//state,name
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	
	var $nmxhwregbody = array();//title1,text1,continue1,exit1 etc.
	
	//********************************************************
	function NmxhwClassDisplayRegBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang)
	{
		$this->nmxhwPostWrong['state'] = 1;
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj     = $nmxhwSqlObj;
		$this->nmxhwLang       = $nmxhwLang;
		
		$sql = "SELECT * FROM " . $nmxhwLang['fullvar_table'] . " WHERE allstate = 'Y'";
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while select fullvar table.[displayregbody.php 40]');
		}
		$tempnum = $this->nmxhwSqlObj->sql_Numrows($result);
		if($tempnum == 0)
		{
			$this->nmxhwClientInfo->nmxhwRedirection('20');
		}
		$tempall[] = $this->nmxhwSqlObj->sql_Fetchrow($result);
		
		$tempbegin = str_replace("-","",$tempall[0]['begin_date']);
		$tempend    = str_replace("-","",$tempall[0]['end_date']);
		$tempnow   = date("Ymd");
		
		if(($tempnow < $tempbegin)  ||  ($tempnow > $tempend))
		{
			$this->nmxhwClientInfo->nmxhwRedirection('20');
		}
		
		$this->nmxhwregbody['user_id1'] = $tempall[0]['run_id'];
		
		unset($tempall);
		$sql = "SELECT * FROM " . $this->nmxhwLang['session_table'] . " WHERE sessionval = '" . $this->nmxhwClientInfo->nmxhwSessionVars['sessionid'] . "'";
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while select sessions table.[displayregbody.php 48]');
		}
		$tempall[] = $this->nmxhwSqlObj->sql_Fetchrow($result);
		if($tempall[0]['user_id'] != 0)
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
				
		if(ereg("^(1|2|3|4)$",$this->nmxhwClientInfo->HTTP_GET_VARS['step']))
		{
			$tempstep = $this->nmxhwClientInfo->HTTP_GET_VARS['step'];
		}
		else
		{
			$tempstep = 1;
		}
		
		if($tempstep == 1)
		{
			$temp1 = $this->ifRegistered();
			
			if($temp1 == 3)
			{
				$this->nmxhwClientInfo->nmxhwRedirection('21');
			}
			
			$sql =  "UPDATE " . $this->nmxhwLang['session_table'] . "
				SET registorder = 1 
				WHERE sessionval  = '" . $this->nmxhwClientInfo->nmxhwSessionVars['sessionid'] . "'";
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while update sessions table.[displayregbody.php 51]');
			}
			$this->nmxhwregbody['title1']    = $this->nmxhwLang['reg_title1'];
			$this->nmxhwregbody['text1']     = $this->nmxhwLang['reg_text1'];
			$this->nmxhwregbody['continue1'] = $this->nmxhwLang['reg_continue1'];
			$this->nmxhwregbody['exit1']     = $this->nmxhwLang['reg_exit1'];
		}
		
		if($tempstep == 2)
		{
			$temp2 = $this->ifRegistered();
			if($temp2 == 3)
			{
				$this->nmxhwClientInfo->nmxhwRedirection('21');
			}
			
			$sql = "SELECT * FROM " . $this->nmxhwLang['session_table'] . " WHERE sessionval = '" . $this->nmxhwClientInfo->nmxhwSessionVars['sessionid'] . "'";
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while select sessions table.[displayregbody.php 64]');
			}
			$temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result);
			if(!ereg("^[(1|2)]$",$temp[0]['registorder']))
			{
				$this->nmxhwClientInfo->nmxhwRedirection('3');
			}
			$sql =  "UPDATE " . $this->nmxhwLang['session_table'] . "
				SET registorder = 2 
				WHERE sessionval  = '" . $this->nmxhwClientInfo->nmxhwSessionVars['sessionid'] . "'";
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while update sessions table.[displayregbody.php 72]');
			}
			$this->setStep2Variable(2);
		}
		if($tempstep == 3)
		{
			$temp3 = $this->ifRegistered();
			
			if($temp3  == 2)
			{
				$this->checkAllData();
				if($this->nmxhwPostWrong['state'] == 1)
				{
					$sql = "SELECT MAX(user_id) FROM " . $this->nmxhwLang['user_table'];
					if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
					{
						die('Error ocurs while select user table.[displayregbody.php 129]');
					}
					$tempval[] = $this->nmxhwSqlObj->sql_Fetchrow($result);
					if($tempval[0][0] == '')
					{
						$this->nmxhwregbody['user_id2'] = 1001;
					}
					else
					{
						$this->nmxhwregbody['user_id2'] = substr($tempval[0][0],1) + 1;
					}
					
					$sql =  "INSERT INTO " . $this->nmxhwLang['user_table'] . "
					       (user_id,user_name,sex,age,grouptype,school,registdate,telephone,mobile,email,www,user_pass,region,address,zip) 
					        VALUES  (" . $this->nmxhwregbody['user_id1'] .$this->nmxhwregbody['user_id2'] . ",'" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['name'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['sex'] . "'," . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['age'] . ",'" .  
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['grouptype'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['school'] . "'," . 
					                       "now(),'" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['telephone'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['mobile'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['email'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['www'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['pass'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['region'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['address'] . "','" . 
					                       $this->nmxhwClientInfo->HTTP_POST_VARS['zip'] . "')";
					if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
					{
						die('Error ocurs while insert into user table.[displayregbody.php 160]');
					}
					
					$sql =  "UPDATE " . $this->nmxhwLang['session_table'] . "
					SET registorder = 3 
					WHERE sessionval  = '" . $this->nmxhwClientInfo->nmxhwSessionVars['sessionid'] . "'";
					if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
					{
						die('Error ocurs while update sessions table.[displayregbody.php 150]');
					}
					/****
					$mailto = $this->nmxhwClientInfo->HTTP_POST_VARS['email'] ;
					$mailsubject = $this->nmxhwLang['title'] ;
					$mailmessage = $this->nmxhwLang['mail_message1'] . 
						$this->nmxhwLang['loginuserid']  .  
						$this->nmxhwregbody['user_id1'] . 
						$this->nmxhwregbody['user_id2'] . "\n" . 
						$this->nmxhwLang['loginuserpass']  .  
						$this->nmxhwClientInfo->HTTP_POST_VARS['pass'] . "\n" . 
						$this->nmxhwLang['mail_message2'];
					$result = @mail($mailto,$mailsubject,$mailmessage);
					if($result)
					{
						$this->nmxhwregbody['text3']  = $this->nmxhwLang['reg_finished1'] . $this->nmxhwregbody['user_id1'] .$this->nmxhwregbody['user_id2'];
					}
					else
					{***/
						
						$this->nmxhwregbody['text3']  = $this->nmxhwLang['reg_finished2']  . $this->nmxhwLang['loginuserid'] . '<font color="#ff0000">' . $this->nmxhwregbody['user_id1'] .$this->nmxhwregbody['user_id2'] . '</font>' . "&nbsp;&nbsp;&nbsp;" .
										$this->nmxhwLang['loginuserpass'] . '<font color="#ff0000">' . $this->nmxhwClientInfo->HTTP_POST_VARS['pass'] . '</font>';
					/**}**/
				}
				else
				{
					$this->setStep2Variable(3);
				}
			}
			else
			{
				if($temp3 == '')
				{
					$this->nmxhwClientInfo->nmxhwRedirection('3');
				}
				if($temp3 == 1)
				{
					$this->nmxhwClientInfo->nmxhwRedirection('3');
				}
				if($temp3 == 3)
				{
					$this->nmxhwClientInfo->nmxhwRedirection('21');
				}
			}
		}
	}
	//********************************************************
	function checkAllData()
	{
		if((ereg("([[:punct:]]|[[:alnum:]])",$this->nmxhwClientInfo->HTTP_POST_VARS['name'])) || ($this->nmxhwClientInfo->HTTP_POST_VARS['name'] == ''))
		{
			$this->setWrongState('name');
			return;
		}
		if(!ereg("^(男|女)$",$this->nmxhwClientInfo->HTTP_POST_VARS['sex']))
		{
			$this->setWrongState('sex');
			return;
		}
		if(!ereg("^[[:digit:]]+$",$this->nmxhwClientInfo->HTTP_POST_VARS['age']))
		{
			$this->setWrongState('age');
			return;
		}
		if((!ereg("^[[:alnum:]]+$",$this->nmxhwClientInfo->HTTP_POST_VARS['pass'])) || 
			(strlen($this->nmxhwClientInfo->HTTP_POST_VARS['pass']) > 6))
		{
			$this->setWrongState('pass');
			return;
		}
		if($this->nmxhwClientInfo->HTTP_POST_VARS['vepass'] != $this->nmxhwClientInfo->HTTP_POST_VARS['pass'])
		{
			$this->setWrongState('passnotmatch');
			return;
		}
		if(!ereg("^(呼和浩特市|包头市|鄂尔多斯市|赤峰市|通辽市|呼伦贝尔市|阿拉善盟|巴音淖尔盟|锡林郭勒盟|乌海市|乌兰察布盟|兴安盟)$",$this->nmxhwClientInfo->HTTP_POST_VARS['region']))
		{
			$this->setWrongState('region');
			return;
		}
		if(!ereg("^(大学生|中学生)$",$this->nmxhwClientInfo->HTTP_POST_VARS['grouptype']))
		{
			$this->setWrongState('grouptype');
			return;
		}
		if($this->nmxhwClientInfo->HTTP_POST_VARS['school'] == '')
		{
			$this->setWrongState('school');
			return;
		}
		if($this->nmxhwClientInfo->HTTP_POST_VARS['address']  == '')
		{
			$this->setWrongState('address');
			return;
		}
		if(strlen($this->nmxhwClientInfo->HTTP_POST_VARS['zip']) != 6)
		{
			$this->setWrongState('zip');
			return;
		}
		if(!ereg("^[0-9]+$",$this->nmxhwClientInfo->HTTP_POST_VARS['telephone']))
		{
			$this->setWrongState('telephone');
			return;
		}
		if(!ereg("^.+@.+\\..+$",$this->nmxhwClientInfo->HTTP_POST_VARS['email']))
		{
			$this->setWrongState('email');
			return;
		}
	}
	
	//********************************************************
	function setWrongState($tempname)
	{
		$this->nmxhwPostWrong['state'] = 0;
		$this->nmxhwPostWrong['name'] = $tempname;
	}
	
	//********************************************************
	function setStep2Variable($tempstep)
	{
		$this->nmxhwregbody['title2']      = $this->nmxhwLang['reg_title2'];
		$this->nmxhwregbody['name2']       = $this->nmxhwLang['reg_name2'];
		$this->nmxhwregbody['sex2']        = $this->nmxhwLang['reg_sex2'];
		
		$this->nmxhwregbody['pass2']       = $this->nmxhwLang['reg_pass2'];
		$this->nmxhwregbody['vepass2']     = $this->nmxhwLang['reg_vepass2'];
		$this->nmxhwregbody['alpnum2']     = $this->nmxhwLang['reg_alpnum2'];
		$this->nmxhwregbody['region2']     = $this->nmxhwLang['reg_region2'];
		$this->nmxhwregbody['grouptype2']     = $this->nmxhwLang['reg_grouptype2'];
		
		$this->nmxhwregbody['school2']     = $this->nmxhwLang['reg_school2'];
		$this->nmxhwregbody['address2']    = $this->nmxhwLang['reg_address2'];
		$this->nmxhwregbody['zip2']        = $this->nmxhwLang['reg_zip2'];
		$this->nmxhwregbody['telephone2']  = $this->nmxhwLang['reg_telephone2'];
		$this->nmxhwregbody['regionnum2']  = $this->nmxhwLang['reg_regionnum2'];
		$this->nmxhwregbody['mobile2']     = $this->nmxhwLang['reg_mobile2'];
		$this->nmxhwregbody['email2']      = $this->nmxhwLang['reg_email2'];
		$this->nmxhwregbody['www2']        = $this->nmxhwLang['reg_www2'];
		$this->nmxhwregbody['age2']        = $this->nmxhwLang['reg_age2'];
		$this->nmxhwregbody['explain2']    = $this->nmxhwLang['reg_explain2'];
		$this->nmxhwregbody['required2']   = $this->nmxhwLang['reg_required2'];
		$this->nmxhwregbody['continue2']   = $this->nmxhwLang['reg_continue2'];
		$this->nmxhwregbody['reset2']      = $this->nmxhwLang['reg_reset2'];
		$this->nmxhwregbody['exit2']       = $this->nmxhwLang['reg_exit2'];
		
		if($tempstep == 2)
		{
			$this->nmxhwregbody['sex21']       = $this->nmxhwLang['reg_sex22'] . $this->nmxhwLang['reg_sex23'];
			$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a2'].
							     $this->nmxhwLang['reg_region2b1'].
							     $this->nmxhwLang['reg_region2c1'].
							     $this->nmxhwLang['reg_region2d1'].
							     $this->nmxhwLang['reg_region2e1'].
							     $this->nmxhwLang['reg_region2f1'].
							     $this->nmxhwLang['reg_region2g1'].
							     $this->nmxhwLang['reg_region2h1'].
							     $this->nmxhwLang['reg_region2i1'].
							     $this->nmxhwLang['reg_region2j1'].
							     $this->nmxhwLang['reg_region2k1'].
							     $this->nmxhwLang['reg_region2l1'];
			$this->nmxhwregbody['grouptype21']   = $this->nmxhwLang['reg_grouptype22'] . $this->nmxhwLang['reg_grouptype23'];
		}
		if($tempstep == 3)
		{
			$this->nmxhwregbody['nameval']       = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['name']);
			$this->nmxhwregbody['ageval']        = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['age']);
			$this->nmxhwregbody['passval']       = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['pass']);
			$this->nmxhwregbody['vepassval']     = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['vepass']);
			$this->nmxhwregbody['schoolval']     = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['school']);
			$this->nmxhwregbody['addressval']    = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['address']);
			$this->nmxhwregbody['zipval']        = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['zip']);
			$this->nmxhwregbody['telephoneval']  = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['telephone']);
			$this->nmxhwregbody['mobileval']     = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['mobile']);
			$this->nmxhwregbody['emailval']      = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['email']);
			$this->nmxhwregbody['wwwval']        = stripslashes($this->nmxhwClientInfo->HTTP_POST_VARS['www']);
			
			if($this->nmxhwClientInfo->HTTP_POST_VARS['sex'] == '男')
			{
				$this->nmxhwregbody['sex21'] = $this->nmxhwLang['reg_sex22']  . $this->nmxhwLang['reg_sex23'];
			}
			else
			{
				$this->nmxhwregbody['sex21'] = $this->nmxhwLang['reg_sex21']  . $this->nmxhwLang['reg_sex24'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['grouptype'] == '大学生')
			{
				$this->nmxhwregbody['grouptype21'] = $this->nmxhwLang['reg_grouptype22']  . $this->nmxhwLang['reg_grouptype23'];
			}
			else
			{
				$this->nmxhwregbody['grouptype21'] = $this->nmxhwLang['reg_grouptype21']  . $this->nmxhwLang['reg_grouptype24'];
			}
			
			if($this->nmxhwPostWrong['name'] == 'name')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_name2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'sex')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_sex2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'age')
			{
				$this->nmxhwregbody['wrong2'] = $this->nmxhwLang['reg_age2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'pass')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_pass2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'passnotmatch')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_passnotmatch2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'region')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_region2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'grouptype')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_grouptype2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'school')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_school2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'address')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_address2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'zip')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_zip2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'telephone')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_telephone2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'mobile')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_mobile2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'email')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_email2'] . $this->nmxhwLang['reg_problem2'] ;
			}
			if($this->nmxhwPostWrong['name'] == 'www')
			{
				$this->nmxhwregbody['wrong2'] =  $this->nmxhwLang['reg_www2'] . $this->nmxhwLang['reg_problem2'] ;
			}			
			
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '呼和浩特市')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a2'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '包头市')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b2'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '鄂尔多斯市')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c2'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '赤峰市')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d2'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '通辽市')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e2'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '阿拉善盟')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f2'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '巴音淖尔盟')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g2'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '乌海市')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h2'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '兴安盟')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i2'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '呼伦贝尔市')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j2'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '锡林郭勒盟')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k2'].
						     $this->nmxhwLang['reg_region2l1'];
			}
			if($this->nmxhwClientInfo->HTTP_POST_VARS['region'] == '乌兰察布盟')
			{
				$this->nmxhwregbody['region21']    = $this->nmxhwLang['reg_region2a1'].
						     $this->nmxhwLang['reg_region2b1'].
						     $this->nmxhwLang['reg_region2c1'].
						     $this->nmxhwLang['reg_region2d1'].
						     $this->nmxhwLang['reg_region2e1'].
						     $this->nmxhwLang['reg_region2f1'].
						     $this->nmxhwLang['reg_region2g1'].
						     $this->nmxhwLang['reg_region2h1'].
						     $this->nmxhwLang['reg_region2i1'].
						     $this->nmxhwLang['reg_region2j1'].
						     $this->nmxhwLang['reg_region2k1'].
						     $this->nmxhwLang['reg_region2l2'];
			}
		}
	}
	//********************************************************
	function ifRegistered()
	{
		$sql = "SELECT * FROM " . $this->nmxhwLang['session_table'] . " WHERE sessionval = '" . $this->nmxhwClientInfo->nmxhwSessionVars['sessionid'] . "'";
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while select sessions table.[displayregbody.php 580]');
		}
		$temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result);
		return  $temp[0]['registorder'];
	}
}
?>
