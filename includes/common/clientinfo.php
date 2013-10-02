<?php
 
                /***************************************************************************
		                                clientinfo.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: clientinfo.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [clientinfo.php]<p>Designed by www.nm114.net ');
	
}

class NmxhwClassClientInfo
{
	var $nmxhwEx;
	var $nmxhwSqlObj;
	var $nmxhwURL;
	var $HTTP_GET_VARS    = array();
	var $HTTP_POST_VARS   = array();
	var $HTTP_COOKIE_VARS = array();
	var $HTTP_SERVER_VARS = array();
	var $HTTP_ENV_VARS    = array();
	var $REMOTE_ADDR      = array();
	var $nmxhwCookie       = array();
	var $nmxhwLang         = array();
	var $loginfail         = '';
	var $nmxhwSessionVars  = array();//sessionid,userip,userid,usertype
	var $currentTime;
	var $postuname;
	var $postupass;
	var $postutype;
		
	
	//*****************************************************
	function NmxhwClassClientInfo($nmxhwEx,$nmxhwSqlObj,$nmxhwURL,$HTTP_GET_VARS,$HTTP_POST_VARS,$HTTP_COOKIE_VARS,$HTTP_SERVER_VARS,$HTTP_ENV_VARS,$REMOTE_ADDR,$nmxhwCookie,$nmxhwLang)
	{
		$this->nmxhwEx = $nmxhwEx;
		$this->nmxhwSqlObj = $nmxhwSqlObj;
		$this->nmxhwURL = $nmxhwURL;
		$this->HTTP_GET_VARS = $HTTP_GET_VARS;
		$this->HTTP_POST_VARS = $HTTP_POST_VARS;
		$this->HTTP_COOKIE_VARS = $HTTP_COOKIE_VARS;
		$this->HTTP_SERVER_VARS = $HTTP_SERVER_VARS;
		$this->HTTP_ENV_VARS = $HTTP_ENV_VARS;
		$this->REMOTE_ADDR = $REMOTE_ADDR;
		$this->nmxhwCookie = $nmxhwCookie;
		$this->nmxhwLang = $nmxhwLang;
		$this->currentTime = time();
		
		if($this->HTTP_GET_VARS['fail'] == 1)
		{
			$this->loginfail = $this->nmxhwLang['sorry'];
		}
		for($i = 0; $i < 3; $i++)
		{
			if( !get_magic_quotes_gpc() )
			{
				switch($i)
				{
					case 0:
						$gpcvars = $this->HTTP_GET_VARS;
						break;
					case 1:
						$gpcvars = $this->HTTP_POST_VARS;
						break;
					case 2:
						$gpcvars = $this->HTTP_COOKIE_VARS;
						break;
				}
				if( is_array($gpcvars) )
				{
					while( list($k, $v) = each($gpcvars) )
					{
						if( is_array($gpcvars[$k]) )
						{
							while( list($k2, $v2) = each($gpcvars[$k]) )
							{
								$$gpcvars[$k][$k2] = addslashes($v2);
							}
							@reset($gpcvars[$k]);
						}
						else
						{
							$gpcvars[$k] = addslashes($v);
						}
					}
					@reset($gpcvars);
				}
				switch($i)
				{
					case 0:
						$this->HTTP_GET_VARS = $gpcvars;
						break;
					case 1:
						$this->HTTP_POST_VARS = $gpcvars;
						break;
					case 2:
						$this->HTTP_COOKIE_VARS = $gpcvars;
						break;
				}
			}
		}
		$this->nmxhwGetUserIp();
		$this->nmxhwSession();
	}
	//*******************************************************
   	function nmxhwRedirection($mode = 1)
	{
		header('Location: ' . $this->nmxhwURL . '?target=' . $mode);
		exit();
	}
	//*******************************************************
	function nmxhwGetUserIp()
	{
		if( getenv('HTTP_X_FORWARDED_FOR') != '' )
		{
			$client_ip = ( !empty($this->HTTP_SERVER_VARS['REMOTE_ADDR']) ) ? $this->HTTP_SERVER_VARS['REMOTE_ADDR'] : ( ( !empty($this->HTTP_ENV_VARS['REMOTE_ADDR']) ) ? $this->HTTP_ENV_VARS['REMOTE_ADDR'] : $this->REMOTE_ADDR );
			if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", getenv('HTTP_X_FORWARDED_FOR'), $ip_list) )
			{
				$private_ip = array('/^0\./', '/^127\.0\.0\.1/', '/^192\.168\..*/', '/^172\.16\..*/', '/^10.\.*/', '/^224.\.*/', '/^240.\.*/');
				$client_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);
			}
		}
		else
		{
			$client_ip = ( !empty($this->HTTP_SERVER_VARS['REMOTE_ADDR']) ) ? $this->HTTP_SERVER_VARS['REMOTE_ADDR'] : ( ( !empty($this->HTTP_ENV_VARS['REMOTE_ADDR']) ) ? $this->HTTP_ENV_VARS['REMOTE_ADDR'] : $this->REMOTE_ADDR );
		}
		$this->nmxhwSessionVars['userip'] = $this->nmxhwEncode_Ip($client_ip);
	}
	//*******************************************************
	function nmxhwEncode_Ip($dotquad_ip)
	{
		$ip_sep = explode('.', $dotquad_ip);
		return sprintf('%02x%02x%02x%02x', $ip_sep[0], $ip_sep[1], $ip_sep[2], $ip_sep[3]);
	}
	//*******************************************************
	function nmxhwDecode_Ip($int_ip)
	{
		$hexipbang = explode('.', chunk_split($int_ip, 2, '.'));
		return hexdec($hexipbang[0]). '.' . hexdec($hexipbang[1]) . '.' . hexdec($hexipbang[2]) . '.' . hexdec($hexipbang[3]);
	}
	//*******************************************************
	function nmxhwSession()
	{
		//delete expired session
		$expiry_time = (($this->currentTime) - ($this->nmxhwCookie['length']));
		$sql = "DELETE FROM " . $this->nmxhwLang['session_table'] . " 
			WHERE session_start < $expiry_time";
		if ( !($this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while clearing session table.[common.php  159]');
		}
		
		$this->postuname = (isset($this->HTTP_POST_VARS['username']) ? $this->HTTP_POST_VARS['username'] : '');
		$this->postupass = (isset($this->HTTP_POST_VARS['userpass']) ? $this->HTTP_POST_VARS['userpass'] : '');
		$this->postutype = (isset($this->HTTP_POST_VARS['usertype']) ? $this->HTTP_POST_VARS['usertype'] : 'G');
		
		$tempSessionId = (isset($this->HTTP_COOKIE_VARS[$this->nmxhwCookie['name']]) ? $this->HTTP_COOKIE_VARS[$this->nmxhwCookie['name']] : '');
		$this->nmxhwSessionVars['sessionid'] = $tempSessionId;
		
		if($tempSessionId  == '')
		{
			$this->nmxhwSessionBegin();
			return;
		}
		else
		{
			$sql = "SELECT * FROM " . $this->nmxhwLang['session_table'] . " WHERE sessionval = '$tempSessionId'";
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error occurs while selecting session table.[common.php  179]');
			}
			$tempallsessionnum = $this->nmxhwSqlObj->sql_Numrows($result);
			$tempallsessionval[] = $this->nmxhwSqlObj->sql_Fetchrow($result);
			
			if($tempallsessionnum == 0)
			{
				$this->nmxhwSessionBegin();
				return;
			}
			if($tempallsessionnum == 1)
			{
				if(($tempallsessionval[0]['user_id'] != 0) && ($this->HTTP_GET_VARS['target'] == 5)  && ($this->HTTP_GET_VARS['action'] != 'logout'))
				{
					$this->nmxhwRedirection();
				}
				$this->nmxhwSessionUpdate($tempallsessionval);
				return;
			}
		}
	}
	
	//*******************************************************
	function nmxhwSessionBegin()
	{
		$this->nmxhwSessionVars['sessionid'] = md5(uniqid($this->nmxhwSessionVars['userip'] . $this->currentTime));
		setcookie($this->nmxhwCookie['name'], $this->nmxhwSessionVars['sessionid'], 0, $this->nmxhwCookie['path'], $this->nmxhwCookie['domain'], $this->nmxhwCookie['secure']);
			
		//insert guest users session into session table
		$sql = "INSERT INTO " . $this->nmxhwLang['session_table'] . " (user_id, sessionval, usertype, session_start) 
				VALUES (0,'" . $this->nmxhwSessionVars['sessionid'] . "','G',$this->currentTime)";
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error occurs while insert sessions table.[common.php]');
		}
		$this->nmxhwSessionVars['usertype']  = 'G';
		$this->nmxhwSessionVars['userid']   = 0;
		
		$this->nmxhwCountVisit();
		$this->nmxhwOptimizeTables();
		$this->nmxhwRedirection();
		return;
	}
	//*******************************************************
	function nmxhwSessionUpdate($tempallsessionval)
	{
		if($this->HTTP_POST_VARS['loginaction'] == 1)
		{
			$sql = "SELECT MAX(run_id) FROM " . $this->nmxhwLang['fullvar_table'];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting fullvar table.[clientinfo.php 229]');
			}
			while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			
			$sql = "SELECT * FROM " . $this->nmxhwLang['fullvar_table'] . " WHERE run_id = " . $temp[0][0];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting fullvar table.[clientinfo.php 236]');
			}
			while($temp1[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
						
			$temptoday = date("Y-m-d");
			if(($temptoday < $temp1[0]['begin_date']) || ($temptoday > $temp1[0]['end_date']))
			{
				$this->nmxhwRedirection('5&fail=1');
			}
					
			if(!ereg("^[0-9]+$",$this->postuname) || ($this->postutype == '') || (!ereg("^[RA]$",$this->postutype)))
			{
				$this->nmxhwRedirection('5&fail=1');
			}
			else
			{
				if( $this->postutype == 'R')
				{
					$sql = "SELECT * FROM " . $this->nmxhwLang['user_table'] . " WHERE user_id = " . $this->postuname;
					if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
					{
						die('Error ocurs while selecting user table.[common.php 303]');
					}
					$tempnum = $this->nmxhwSqlObj->sql_Numrows($result);
					if($tempnum == 0)
					{
						$this->nmxhwRedirection('5&fail=1');
					}
					while($temprval[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
					
					if($temprval[0]['beginupdate'] != '')
					{
						if((time() - $temprval[0]['beginupdate']) > $this->nmxhwLang['expiredaysecond'])
						{
							$this->nmxhwRedirection('5&fail=1');
						}
					}
					
					$this->nmxhwSessionVars['userid']   = $temprval[0]['user_id'];
					if($temprval[0]['user_pass'] == ($this->postupass))
					{
						$userpasstrue = 1;
					}
					else
					{
						$this->nmxhwRedirection('5&fail=1');
					}
				}
				if($this->postutype == 'A')
				{
					$sql = "SELECT * FROM " . $this->nmxhwLang['admin_table'] . " WHERE admin_id = " . $this->postuname;
					if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
					{
						die('Error ocurs while selecting administrator table.[common.php 268]');
					}
					$tempnum = $this->nmxhwSqlObj->sql_Numrows($result);
					if($tempnum == 0)
					{
						$this->nmxhwRedirection('5&fail=1');
					}
					while($tempaval[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
					$this->nmxhwSessionVars['userid']   = $tempaval[0]['admin_id'];
					if($tempaval[0]['user_pass'] == ($this->postupass))
					{
						$userpasstrue = 1;
					}
					else
					{
						$this->nmxhwRedirection('5&fail=1');
					}
				}
				if($userpasstrue == 1)
				{
					$tempSessionId = $this->nmxhwSessionVars['sessionid'];
					
					if($this->postutype == 'R')
					{
						$sql =  "UPDATE " . $this->nmxhwLang['session_table'] . "
						SET user_id = $this->postuname,session_start = '$this->currentTime',usertype = 'R'
						WHERE sessionval  = '$tempSessionId'";
						if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
						{
							die('Error ocurs while insert sessions table.[clientinfo.php 318]');
						}
						
						$sql =  "UPDATE " . $this->nmxhwLang['user_table'] . "
						SET ip = '" . $this->nmxhwSessionVars['userip'] . "',logintime = NOW()
						WHERE user_id  = $this->postuname";
						if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
						{
							die('Error ocurs while insert ip and logintimein user table.[clientinfo.php 326]');
						}
						$this->nmxhwSessionVars['usertype']  = 'R';
					}
					if($this->postutype == 'A')
					{
						if($tempaval[0]['admin_level'] == 'ÆÀ')
						{
							$sql =  "UPDATE " . $this->nmxhwLang['session_table'] . "
							SET user_id = $this->postuname,session_start = '$this->currentTime',usertype = 'A'
							WHERE sessionval  = '$tempSessionId'";
							if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
							{
								die('Error ocurs while insert sessions table.[clientinfo.php 336]');
							}
							$this->nmxhwSessionVars['usertype']  = 'A';
						}
						if($tempaval[0]['admin_level'] == '¹Ü')
						{
							$sql =  "UPDATE " . $this->nmxhwLang['session_table'] . "
							SET user_id = $this->postuname,session_start = '$this->currentTime',usertype = 'AA'
							WHERE sessionval  = '$tempSessionId'";
							if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
							{
								die('Error ocurs while insert sessions table.[clientinfo.php 336]');
							}
							$this->nmxhwSessionVars['usertype']  = 'AA';
						}
						
					}
					
					$this->nmxhwSessionVars['userid']   = $tempallsessionval[0]['user_id'];
					$this->nmxhwRedirection();
					return;
				}
			}
		}
		
		if(($this->HTTP_GET_VARS['action'] == 'logout') && ($this->HTTP_GET_VARS['target'] == 5))
		{
			$this->nmxhwSessionEnd();
		}
		
		$tempSessionId = $this->nmxhwSessionVars['sessionid'];
		$sql =  "UPDATE " . $this->nmxhwLang['session_table'] . "
			SET session_start = $this->currentTime
			WHERE sessionval  = '$tempSessionId'";
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while updating session table.[common.php]');
		}
		
		$this->nmxhwSessionVars['usertype']  = $tempallsessionval[0]['usertype'];
		$this->nmxhwSessionVars['userid']   = $tempallsessionval[0]['user_id'];
		
		return;
	}       
	//*******************************************************
	function nmxhwCountVisit()
	{
		$sql = "SELECT MAX(run_id) FROM " . $this->nmxhwLang['fullvar_table'];
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while selecting fullvar table.[common.php]');
		}
		while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		
		$sql = "SELECT * FROM " . $this->nmxhwLang['fullvar_table'] . " WHERE run_id = " . $temp[0][0];
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while selecting fullvar table.[common.php]');
		}
		while($temp1[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		$temp2 = ++$temp1[0]['visitcou'];
		
		$sql =  "UPDATE " . $this->nmxhwLang['fullvar_table'] . "
			SET visitcou = $temp2
			WHERE run_id = " . $temp1[0]['run_id'];
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while updating fullvar table.[common.php]');
		}
	}
	//*******************************************************
	function nmxhwSessionEnd()
	{
		$sessionid = $this->nmxhwSessionVars['sessionid'];
		$sql =  "UPDATE " . $this->nmxhwLang['session_table'] . "
			SET user_id = 0,session_start = '$this->currentTime',usertype = 'G'
			WHERE sessionval  = '$sessionid'";
		
		if ( !$this->nmxhwSqlObj->sql_Query($sql) )
		{
			die('Error ocurs while changing session table record.[common.php]');
		}
			
		$this->nmxhwRedirection();
	}
	//*******************************************************
	function nmxhwOptimizeTables()
	{
		$sql = "SELECT * FROM " . $this->nmxhwLang['operation_table'];
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while selecting opration table.[common.php]');
		}
		$tempnum = $this->nmxhwSqlObj->sql_Numrows($result);
		if($tempnum == 0)
		{
			$sql = "INSERT INTO " . $this->nmxhwLang['operation_table'] . " (optisestime, optialltime) 
				VALUES ($this->currentTime,$this->currentTime)";
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error occurs while insert operation table.[common.php]');
			}
			$sql = "SELECT * FROM " . $this->nmxhwLang['opration_table'];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting opration table.[common.php]');
			}
		}
		while($temp1[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		if(($this->currentTime - $temp1[0]['optisestime']) > 15000)
		{
			$sql =  "OPTIMIZE TABLE " . $this->nmxhwLang['operation_table'];
			if ( !$this->nmxhwSqlObj->sql_Query($sql) )
			{
				die('Error ocurs while changing opration table record.[common.php  382]');
			}
			
			$sql =  "UPDATE " . $this->nmxhwLang['operation_table'] . 
				" SET optisestime = " . $this->currentTime . 
				" WHERE optisestime  = " . $temp1[0]['optisestime'];
			if ( !$this->nmxhwSqlObj->sql_Query($sql) )
			{
				die('Error ocurs while changing operation table record.[common.php 391]');
			}
		}
		
		if(($this->currentTime - $temp1[0]['optialltime']) > 86400)
		{
			$sql =  "OPTIMIZE TABLE " . $this->nmxhwLang['operation_table'] . "," .
				$this->nmxhwLang['fullvar_table'] . "," .
				$this->nmxhwLang['admin_table'] . "," .
				$this->nmxhwLang['user_table'] . "," .
				$this->nmxhwLang['adminvote_table'] . "," .
				$this->nmxhwLang['guestvot_table'];
			if ( !$this->nmxhwSqlObj->sql_Query($sql) )
			{
				die('Error ocurs while changing opration table record.[common.php  404]');
			}
			
			$sql =  "UPDATE " . $this->nmxhwLang['operation_table'] . 
				" SET optialltime = " . $this->currentTime . 
				" WHERE optialltime  = " . $temp1[0]['optialltime'];
		
			if ( !$this->nmxhwSqlObj->sql_Query($sql) )
			{
				die('Error ocurs while changing opration table record.[common.php  413]');
			}
		}
		
	}
}
?>