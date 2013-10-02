<?php
 
                /***************************************************************************
		                                displayhead.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: displayhead.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [displayhead.php]<p>Designed by www.nm114.net ');
	
}

class NmxhwClassDisplayHead
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	
	var $nmxhwhead = array();//title,currtime,runstate,registstate,systate,log,displayinfo,displayinfo1,loginuser,display1,spaceinfo,usspace,rmspace
				//dayremainstate,usspaceall,(used in adminfilebody.php)
	
	//********************************************************
	function NmxhwClassDisplayHead($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj  = $nmxhwSqlObj;
		$this->nmxhwLang    = $nmxhwLang;
	
		$this->nmxhwhead['title']    = $this->nmxhwLang['title'];
		$this->nmxhwhead['currtime'] = $this->nmxhwLang['currtime'] . date("Y" . $this->nmxhwLang['year'] . "m" . $this->nmxhwLang['month'] . "d" . $this->nmxhwLang['day']);
		
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] == 'G')
		{
			$this->nmxhwhead['log'] = $this->nmxhwLang['login1'];
		}
		else
		{
			$this->nmxhwhead['log']       = $this->nmxhwLang['logout1'];
			if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] == 'R')
			{
				$this->nmxhwhead['adminfile'] = $this->nmxhwLang['adminfile'];
			}
		}
		//determine race is running or not,and dispaly regist information
		unset($temp,$temp1,$temp2);
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
		
		if($temp1[0]['allstate'] == 'N')
		{
			$this->nmxhwhead['runstate'] = $this->nmxhwLang['di'] . $temp1[0]['run_id'] . $this->nmxhwLang['racenotes'];
			$this->nmxhwhead['registstate'] = 'N';
			$this->nmxhwhead['systate']     = 'N';
			$this->nmxhwDisplayInfo('INFINISH');
		}
		if($temp1[0]['allstate'] == 'Y')
		{
			$temptoday = date("Y-m-d");
			if($temptoday < $temp1[0]['begin_date'])
			{
				$this->nmxhwhead['runstate'] = $this->nmxhwLang['di'] . $temp1[0]['run_id'] . $this->nmxhwLang['racebegin'] . $temp1[0]['begin_date'];
				$this->nmxhwhead['registstate'] = 'N';
				$this->nmxhwhead['systate']     = 'N';
				$this->nmxhwDisplayInfo('LAST');
			}
			if(($temptoday >= $temp1[0]['begin_date']) && ($temptoday <= $temp1[0]['end_date']))
			{
				$this->nmxhwhead['runstate'] = $this->nmxhwLang['di'] . $temp1[0]['run_id'] . $this->nmxhwLang['racerunning'] . $temp1[0]['begin_date'] . $this->nmxhwLang['zhi'] . $temp1[0]['end_date'];
				$this->nmxhwhead['registstate'] = 'Y';
				$this->nmxhwhead['systate']     = 'Y';
				$this->nmxhwDisplayInfo('IN');
			}
			if($temptoday > $temp1[0]['end_date'])
			{
				$this->nmxhwhead['runstate'] = $this->nmxhwLang['di'] . $temp1[0]['run_id'] . $this->nmxhwLang['racenotes'];
				$this->nmxhwhead['registstate'] = 'N';
				$this->nmxhwhead['systate']     = 'Y';
				$this->nmxhwDisplayInfo('IN');
			}
		}
		
		//produce $this->nmxhwhead['selectorder']
		unset($temp,$temp1,$temp2);
		$sql = "SELECT * FROM " . $this->nmxhwLang['fullvar_table'] . " WHERE allstate = 'N'";
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while selecting fullvar table.[common.php]');
		}
		while($tempval[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		$tempnum = $this->nmxhwSqlObj->sql_Numrows($result);
		if($tempnum != 0)
		{
			for($i = 0; $i < $tempnum; $i++)
			{
				$temp = '<option value="' . $tempval[$i]['run_id'] . '">' . $this->nmxhwLang['di'] . $tempval[$i]['run_id'] .  $this->nmxhwLang['jie'] . '</option>';
				$this->nmxhwhead['selectorder'] = $this->nmxhwhead['selectorder'] . $temp;
			}
		}
		else
		{
			$this->nmxhwhead['display1'] = 'display:none'; 
		}
		//produce $this->nmxhwhead['loginuser']
		unset($temp,$temp1,$temp2);
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] == 'G')
		{
			$this->nmxhwhead['loginuser'] = '&nbsp;';
		}
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] == 'R')
		{
			$sql = "SELECT beginupdate FROM " . $this->nmxhwLang['user_table'] . " WHERE user_id = " . $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting user table.[displayhead.php 131]');
			}
			while($tempbudate[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			
			if($tempbudate[0]['beginupdate'] == '')
			{
				$this->nmxhwhead['dayremainstate'] = 0;
				$this->nmxhwhead['dayremain'] = $this->nmxhwLang['remaindate'] . $this->nmxhwLang['nocountdate'];
			}
			else
			{
				$this->nmxhwhead['dayremainstate'] = 1;
				$tempday = ((time() - $tempbudate[0]['beginupdate']) / $this->nmxhwLang['remaindatesecond']);
				if(strpos($tempday,".") == 0)
				{
					$this->nmxhwhead['dayremain'] = $this->nmxhwLang['remaindate'] . ($this->nmxhwLang['expireday'] - substr($tempday,0));
				}
				else
				{
					$this->nmxhwhead['dayremain'] = $this->nmxhwLang['remaindate'] . ($this->nmxhwLang['expireday'] - substr($tempday,0,strpos($tempday,".")));
				}
				$this->nmxhwhead['dayremain'] = $this->nmxhwhead['dayremain'] . $this->nmxhwLang['remainday'];
			}
			
			
			$this->nmxhwhead['loginuser'] = $this->nmxhwLang['headuser'] . $this->nmxhwLang['registuser'] . $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
			
			$tempusspace = $this->getUsedSpace($this->UserBaseUrl($this->nmxhwClientInfo->nmxhwSessionVars['userid']));
			$this->nmxhwhead['tempspaceall'] = 0;
			$this->nmxhwhead['usspaceall'] = $tempusspace;
			
			$this->nmxhwhead['rmspace'] = ' / ' . $this->nmxhwLang['respace'] . ($this->nmxhwLang['total_space'] - $this->nmxhwhead['usspaceall']) . 'KB';
			
			if($this->nmxhwhead['usspaceall'] != 0)
			{
				$this->nmxhwhead['usspace'] = $this->nmxhwLang['usspace'] . $tempusspace . 'KB';
			}
			else
			{
				$this->nmxhwhead['usspace'] = $this->nmxhwLang['usspace'] . '0KB';
			}
		}
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] == 'A')
		{
			$sql = "SELECT * FROM " . $this->nmxhwLang['admin_table'] . " WHERE admin_id = " . $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
			
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting admin table.[common.php 484]');
			}
			while($temp1[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			if($temp1[0]['admin_level'] == 'ÆÀ')
			{
				$this->nmxhwhead['loginuser'] = $this->nmxhwLang['headuser'] . $this->nmxhwLang['adminuser1'] . $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
			}
			if($temp1[0]['admin_level'] == '¹Ü')
			{
				$this->nmxhwhead['loginuser'] = $this->nmxhwLang['headuser'] . $this->nmxhwLang['adminuser2'] . $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
			}
		}
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] == 'AA')
		{
			$this->nmxhwhead['loginuser'] = $this->nmxhwLang['headuser'] . $this->nmxhwLang['adminuser2'] . $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
		}
	}
	//********************************************************
	function nmxhwDisplayInfo($tempinfo)
	{
		$sql = "SELECT MAX(run_id) FROM " . $this->nmxhwLang['fullvar_table'];
		if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{
			die('Error ocurs while selecting fullvar table.[common.php]');
		}
		while($temp[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		
		if($tempinfo == 'IN')
		{
			$temprunorder = $temp[0][0];
			
			//produce $this->nmxhwhead['diaplayinfo']
			$sql = "SELECT COUNT(*) FROM " . $this->nmxhwLang['user_table'];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting user table.[common.php]');
			}
			while($temp1[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		
			$sql = "SELECT COUNT(*) FROM " . $this->nmxhwLang['user_table'] . " WHERE checkall = 'Y'";
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting user table.[common.php]');
			}
			while($temp2[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			
			$this->nmxhwhead['displayinfo1'] = '&nbsp;&nbsp;&nbsp;&nbsp;' . $this->nmxhwLang['info2'] . $temp1[0][0] . '<br>&nbsp;&nbsp;&nbsp;&nbsp;' . $this->nmxhwLang['info3'] . $temp2[0][0];
		}
		if($tempinfo == 'LAST')
		{
			$temprunorder = $temp[0][0] - 1;
									
			$sql = "SELECT * FROM " . $this->nmxhwLang['fullvar_table'] . " WHERE run_id = " . $temprunorder;
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting fullvar table.[common.php]');
			}
			while($temp1[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			
			$this->nmxhwhead['displayinfo1'] = '&nbsp;&nbsp;&nbsp;&nbsp;' . $this->nmxhwLang['info2'] . $temp1[0]['reguser'] . '<br>&nbsp;&nbsp;&nbsp;&nbsp;' . $this->nmxhwLang['info3'] . $temp1[0]['payuser'];
		}
		if($tempinfo == 'INFINISH')
		{
			$temprunorder = $temp[0][0];
									
			$sql = "SELECT * FROM " . $this->nmxhwLang['fullvar_table'] . " WHERE run_id = " . $temprunorder;
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while selecting fullvar table.[common.php]');
			}
			while($temp1[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			
			$this->nmxhwhead['displayinfo1'] = '&nbsp;' . $this->nmxhwLang['info2'] . $temp1[0]['reguser'] . '<br>&nbsp;' . $this->nmxhwLang['info3'] . $temp1[0]['payuser'];
		}
		$this->nmxhwhead['displayinfo']  = $this->nmxhwLang['di'] . $temprunorder . $this->nmxhwLang['info1'];
	}
	//********************************************************
	function getUsedSpace($tempdir)
	{
		$dir = dir($tempdir);
		$dir->rewind();
		while($tempp = $dir->read())
		{
			if(is_dir($tempdir . '/' . $tempp))
			{
				if(($tempp != '..')  &&  ($tempp != '.'))
				{
					$this->getUsedSpace($tempdir . '/' . $tempp);
				}
			}
			else
			{
				$this->nmxhwhead['tempspaceall'] += filesize($tempdir . '/' . $tempp);
			}
		}
		$dir->close();
		
		$tempval = ($this->nmxhwhead['tempspaceall'] / 1024);
		if(strpos($tempval,"."))
		{
			$tempval = substr($tempval,0,(strpos($tempval,".") + 2));
		}
		
		return $tempval;
		
	}
	//********************************************************
	function UserBaseUrl($userid)//& used in adminfilebody.php
	{
		$tempbase = 'webfiles/' . substr($userid,0,1);
		if(!file_exists($tempbase))
		{
			mkdir($tempbase,0777);
			@mkdir($tempbase . '/a',0777);
			@mkdir($tempbase . '/b',0777);
			@mkdir($tempbase . '/c',0777);
			@mkdir($tempbase . '/d',0777);
			@mkdir($tempbase . '/e',0777);
			@mkdir($tempbase . '/f',0777);
			@mkdir($tempbase . '/g',0777);
			@mkdir($tempbase . '/h',0777);
			@mkdir($tempbase . '/i',0777);
			@mkdir($tempbase . '/j',0777);
			@mkdir($tempbase . '/k',0777);
			@mkdir($tempbase . '/l',0777);
			@mkdir($tempbase . '/m',0777);
			@mkdir($tempbase . '/n',0777);
			@mkdir($tempbase . '/o',0777);
			@mkdir($tempbase . '/p',0777);
			@mkdir($tempbase . '/q',0777);
			@mkdir($tempbase . '/r',0777);
			@mkdir($tempbase . '/s',0777);
			@mkdir($tempbase . '/t',0777);
			@mkdir($tempbase . '/u',0777);
			@mkdir($tempbase . '/v',0777);
			@mkdir($tempbase . '/w',0777);
			@mkdir($tempbase . '/x',0777);
			@mkdir($tempbase . '/y',0777);
			@mkdir($tempbase . '/z',0777);
		}
		$temp1 = (substr($userid,1) % 26);
		switch($temp1)
		{
			case 0:
				$tempurl = 'a';
				break;
			case 1:
				$tempurl = 'b';
				break;
			case 2:
				$tempurl = 'c';
				break;
			case 3:
				$tempurl = 'd';
				break;
			case 4:
				$tempurl = 'e';
				break;
			case 5:
				$tempurl = 'f';
				break;
			case 6:
				$tempurl = 'g';
				break;
			case 7:
				$tempurl = 'h';
				break;
			case 8:
				$tempurl = 'i';
				break;
			case 9:
				$tempurl = 'j';
				break;
			case 10:
				$tempurl = 'k';
				break;
			case 11:
				$tempurl = 'l';
				break;
			case 12:
				$tempurl = 'm';
				break;
			case 13:
				$tempurl = 'n';
				break;
			case 14:
				$tempurl = 'o';
				break;
			case 15:
				$tempurl = 'p';
				break;
			case 16:
				$tempurl = 'q';
				break;
			case 17:
				$tempurl = 'r';
				break;
			case 18:
				$tempurl = 's';
				break;
			case 19:
				$tempurl = 't';
				break;
			case 20:
				$tempurl = 'u';
				break;
			case 21:
				$tempurl = 'v';
				break;
			case 22:
				$tempurl = 'w';
				break;
			case 23:
				$tempurl = 'x';
				break;
			case 24:
				$tempurl = 'y';
				break;
			case 25:
				$tempurl = 'z';
				break;
		}
		$basedir = $tempbase . "/$tempurl/" . substr($userid,1);
		if(!file_exists($basedir))
		{
			@mkdir($basedir,0777);
			@mkdir($basedir . '/tw',0777);
			@mkdir($basedir . '/wt',0777);
			@mkdir($basedir . '/free',0777);
			@mkdir($basedir . '/logo',0777);
		}
		
		return $basedir;
	}
}
?>