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
	die('Sorry! This accessing is not valid! Try other URL. [displaybody.php]<p>Designed by www.nm114.net ');
	
}

class NmxhwClassDisplayBody
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	var $displayHead;
	
	var $nmxhwdisbody = array();//racebatch,usernum,loopnum
	var $nmxuserinfo = array();
	
	function NmxhwClassDisplayBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj     = $nmxhwSqlObj;
		$this->nmxhwLang       = $nmxhwLang;
		$this->displayHead     = $displayHead;
		
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] == 'R')
		{
			$this->nmxhwdisbody['displaystate1'] = '';
			$this->nmxhwdisbody['displaystate2'] = 'none';
			$this->nmxhwdisbody['displaystate3'] = 'none';
			$this->nmxhwdisbody['displaystate4'] = 'none';
			
			$this->nmxhwdisbody['loopnum'] = 1;
			$this->nmxhwdisbody['usernum'] = 1;
			
			$tempurl = $this->displayHead->UserBaseUrl($this->nmxhwClientInfo->nmxhwSessionVars['userid']);
			$this->nmxuserinfo[0]['userlogo'] = '<img src="' . $tempurl . '/logo/logo.gif" width="80" height="100" alt="' . $this->nmxhwClientInfo->nmxhwSessionVars['userid'] . $this->nmxhwLang['dis_logo'] . '">';
			$this->nmxuserinfo[0]['usertype'] = $this->nmxhwClientInfo->nmxhwSessionVars['userid'] . $this->nmxhwLang['dis_userweb'] . '<br>';
			$this->nmxuserinfo[0]['nmwt'] = '<a href="' . $tempurl . '/' . $this->nmxhwLang['dis_nmwturl'] . $this->nmxhwLang['dis_allurl'] . '" target="_blank">' . $this->nmxhwLang['dis_nmwt'] . '</a>';
			$this->nmxuserinfo[0]['nmtw'] =  '<a href="' . $tempurl . '/' . $this->nmxhwLang['dis_nmtwurl'] . $this->nmxhwLang['dis_allurl'] . '" target="_blank">' . $this->nmxhwLang['dis_nmtw'] . '</a>';
			$this->nmxuserinfo[0]['free'] = '<a href="' . $tempurl . '/' . $this->nmxhwLang['dis_freeurl'] . $this->nmxhwLang['dis_allurl'] . '" target="_blank">' . $this->nmxhwLang['dis_free'] . '</a>';
		}
		else
		{
			$sql = "SELECT MAX(run_id) FROM " . $nmxhwLang['fullvar_table'];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while select fullvar table.[displaybody.php 43]');
			}
			while($temp1[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			$sql = "SELECT * FROM " . $nmxhwLang['fullvar_table'] . " WHERE run_id = " . $temp1[0][0];
			if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
			{
				die('Error ocurs while select fullvar table.[displaybody.php 49]');
			}
			$tempnum = $this->nmxhwSqlObj->sql_Numrows($result);
			while($tempval[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
			
			if( (strpos($this->nmxhwClientInfo->HTTP_POST_VARS['selyear'],".")) || 
				($this->nmxhwClientInfo->HTTP_POST_VARS['selyear'] < 1) || 
				($this->nmxhwClientInfo->HTTP_POST_VARS['selyear'] > $tempval[0]['run_id'] ))
			{
				$this->nmxhwdisbody['racebatch'] = $tempval[0]['run_id'];
				if($tempval[0]['allstate'] == 'Y')
				{
					$this->nmxhwdisbody['racestate'] = 1;
				}
				else
				{
					$this->nmxhwdisbody['racestate'] = 0;
				}
			}
			else
			{
				$this->nmxhwdisbody['racebatch'] = $this->nmxhwClientInfo->HTTP_POST_VARS['selyear'];
				if($this->nmxhwClientInfo->HTTP_POST_VARS['selyear'] == $tempval[0]['run_id'])
				{
					if($tempval[0]['allstate'] == 'Y')
					{
						$this->nmxhwdisbody['racestate'] = 1;
					}
					else
					{
						$this->nmxhwdisbody['racestate'] = 0;
					}
				}
				else
				{
					$this->nmxhwdisbody['racestate'] = 0;
				}
			}
			if($this->nmxhwdisbody['racestate'] == 0)
			{
				$this->nmxhwUserDisplayBodyEND();
			}
			else
			{
				$this->nmxhwUserDisplayBodyRun();
			}
		}
	}
	//********************************************************
	function nmxhwUserDisplayBodyEnd()
	{
		$this->nmxhwdisbody['title'] = $this->nmxhwLang['di'] . $this->nmxhwdisbody['racebatch'] . $this->nmxhwLang['jie'] . $this->nmxhwLang['dis_showbatch1'];
		$this->nmxhwdisbody['displaystate1'] = '';
		$this->nmxhwdisbody['displaystate2'] = 'none';
		$this->nmxhwdisbody['displaystate3'] = 'none';
		$this->nmxhwdisbody['displaystate4'] = 'none';
		
		
		$tempdir = 'webfiles/' . $this->nmxhwdisbody['racebatch'];
		$opendir = dir($tempdir);
		
		$i = 0;
		while($tempname[$i] = $opendir->read())
		{
			if(($tempname[$i] != '..') && ($tempname[$i] != '.'))
			{
				if(is_dir($tempdir . '/' . $tempname[$i]))
				{
					$this->nmxuserinfo[$i]['userlogo'] = '<img src="' . $tempdir . '/' . $tempname[$i] . '/logo/logo.gif" width="80" height="100" alt="' . $this->nmxhwdisbody['racebatch'] . $tempname[$i] . $this->nmxhwLang['dis_logo'] . '">';
					$this->nmxuserinfo[$i]['userinfo'] = '<a href="index.php?target=11&id=' . $this->nmxhwdisbody['racebatch'] . $tempname[$i] . '">' . $this->nmxhwLang['dis_user'] . '</a>';
					$this->nmxuserinfo[$i]['nmwt'] =  '<a href="' . $tempdir . '/' . $tempname[$i] . '/' . $this->nmxhwLang['dis_nmwturl'] . $this->nmxhwLang['dis_allurl'] . '">' . $this->nmxhwLang['dis_nmwt'] . '</a>';
					$this->nmxuserinfo[$i]['nmtw'] =  '<a href="' . $tempdir . '/' . $tempname[$i] . '/' . $this->nmxhwLang['dis_nmtwurl'] . $this->nmxhwLang['dis_allurl'] . '">' . $this->nmxhwLang['dis_nmtw'] . '</a>';
					$this->nmxuserinfo[$i]['free'] = '<a href="' . $tempdir . '/' . $tempname[$i] . '/' . $this->nmxhwLang['dis_freeurl'] . $this->nmxhwLang['dis_allurl'] . '">' . $this->nmxhwLang['dis_free'] . '</a>';
				}
			++$i;
			}
		}
		$this->nmxhwdisbody['usernum'] = $i;
		(($this->nmxhwdisbody['usernum'] % 5) != 0) ? ($this->nmxhwdisbody['loopnum'] = ((($this->nmxhwdisbody['usernum'] - ($this->nmxhwdisbody['usernum'] % 5)) / 5) + 1)) : ($this->nmxhwdisbody['loopnum'] = ($this->nmxhwdisbody['usernum'] / 5));
		
	}
	//********************************************************
	function nmxhwUserDisplayBodyRun()
	{
		$this->nmxhwdisbody['title'] = $this->makeTitle($this->nmxhwClientInfo->nmxhwSessionVars['usertype']);
				
		$this->nmxhwdisbody['script1'] = $this->makeScript1($this->nmxhwClientInfo->nmxhwSessionVars['usertype']);
		
		$this->nmxhwdisbody['reload'] = $this->nmxhwLang['dis_reload'];
		
		$result = $this->makeSelectUser($this->nmxhwClientInfo->nmxhwSessionVars['usertype']);
		
		$this->nmxhwdisbody['usernum'] = $this->nmxhwSqlObj->sql_Numrows($result);
		if($this->nmxhwdisbody['usernum'] == 0)
		{
			$this->nmxhwdisbody['displaystate1'] = 'none';
			$this->nmxhwdisbody['displaystate2'] = '';
			if($this->nmxhwClientInfo->nmxhwSessionVars['usertype']  == 'A')
			{
				$this->nmxhwdisbody['nofile'] = $this->nmxhwLang['dis_nofile1'];
				return;
			}
			if($this->nmxhwClientInfo->nmxhwSessionVars['usertype']  == 'AA')
			{
				$this->nmxhwdisbody['nofile'] = $this->nmxhwLang['dis_nofile2'];
				return;
			}
			$this->nmxhwdisbody['nofile'] = $this->nmxhwLang['dis_nofile'];
			return;
		}
		(($this->nmxhwdisbody['usernum'] % 5) != 0) ? ($this->nmxhwdisbody['loopnum'] = ((($this->nmxhwdisbody['usernum'] - ($this->nmxhwdisbody['usernum'] % 5)) / 5) + 1)) : ($this->nmxhwdisbody['loopnum'] = ($this->nmxhwdisbody['usernum'] / 5));
		while($temp2[] = $this->nmxhwSqlObj->sql_Fetchrow($result));
		$this->nmxhwdisbody['displaystate1'] = '';
		$this->nmxhwdisbody['displaystate2'] = 'none';
		
		for($i = 0; $i < $this->nmxhwdisbody['usernum']; $i++)
		{
			$tempurl = $this->displayHead->UserBaseUrl($temp2[$i]['user_id']);
			
			if($this->nmxhwClientInfo->nmxhwSessionVars['usertype']  == 'AA')
			{
				$this->nmxuserinfo[$i]['passval'] = "'p','" . $temp2[$i]['user_id'] . "'";
				$this->nmxuserinfo[$i]['deleteval'] = "'d','" . $temp2[$i]['user_id'] . "'";
				$this->nmxuserinfo[$i]['usertype'] = '(<a href="index.php?target=11&userid=' . $temp2[$i]['user_id'] . '" target="_blank">' . $temp2[$i]['grouptype'] . '</a>)<br>';
			}
			else
			{
				$this->nmxuserinfo[$i]['usertype'] = '(' . $temp2[$i]['grouptype'] . ')<br>';
			}
			$this->nmxuserinfo[$i]['userlogo'] = '<img src="' . $tempurl . '/logo/logo.gif" width="80" height="100" alt="' . $temp2[$i]['user_id'] . $this->nmxhwLang['dis_logo'] . '">';
			$this->nmxuserinfo[$i]['nmwt'] = '<a href="' . $tempurl . '/' . $this->nmxhwLang['dis_nmwturl'] . $this->nmxhwLang['dis_allurl'] . '" target="_blank">' . $this->nmxhwLang['dis_nmwt'] . '</a>';
			$this->nmxuserinfo[$i]['nmtw'] =  '<a href="' . $tempurl . '/' . $this->nmxhwLang['dis_nmtwurl'] . $this->nmxhwLang['dis_allurl'] . '" target="_blank">' . $this->nmxhwLang['dis_nmtw'] . '</a>';
			$this->nmxuserinfo[$i]['free'] = '<a href="' . $tempurl . '/' . $this->nmxhwLang['dis_freeurl'] . $this->nmxhwLang['dis_allurl'] . '" target="_blank">' . $this->nmxhwLang['dis_free'] . '</a>';
			$this->nmxuserinfo[$i]['vote'] = $this->makeVote($this->nmxhwClientInfo->nmxhwSessionVars['userid'],$this->nmxhwClientInfo->nmxhwSessionVars['usertype'],$temp2[$i]['user_id']);
		}
	}
	//********************************************************
	function makeScript1($usertype)
	{
		if($usertype == 'AA')
		{
			$temp = $this->nmxhwLang['dis_script1'];
		}
		
		return $temp;
	}
	//********************************************************
	function makeTitle($title)
	{
		if($title  == 'G')
		{
			$this->nmxhwdisbody['displaystate4'] = 'none';
			$temp = $this->nmxhwLang['di'] . $this->nmxhwdisbody['racebatch'] . $this->nmxhwLang['jie'] . $this->nmxhwLang['dis_showbatch2'];
		}
		if($title  == 'A')
		{
			$this->nmxhwdisbody['displaystate4'] = 'none';
			$temp = $this->nmxhwLang['di'] . $this->nmxhwdisbody['racebatch'] . $this->nmxhwLang['jie'] . $this->nmxhwLang['dis_showbatch3'];
		}
		if($title  == 'AA')
		{
			$this->nmxhwdisbody['dis_pass'] = $this->nmxhwLang['dis_pass'];
			$this->nmxhwdisbody['dis_delete'] = $this->nmxhwLang['dis_delete'];
			$this->nmxhwdisbody['displaystate4'] = '';
			$displayBody->nmxhwdisbody['script1'] = $this->nmxhwLang['dis_script1'];
			$temp = $this->nmxhwLang['di'] . $this->nmxhwdisbody['racebatch'] . $this->nmxhwLang['jie'] . $this->nmxhwLang['dis_showbatch4'];
		}
		
		return $temp;
	}
	//********************************************************
	function makeSelectUser($usertype)
	{
		if($usertype  == 'G')
		{
			$sql = "SELECT user_id,grouptype FROM " . $this->nmxhwLang['user_table'] . " WHERE checkall = 'Y' ORDER BY RAND() LIMIT 20" ;
		}
		if($usertype  == 'A')
		{
			$sql = "DROP TABLE mytemp";
			@$this->nmxhwSqlObj->sql_Query($sql);
			$sql = "CREATE TEMPORARY TABLE mytemp SELECT user_id FROM " . $this->nmxhwLang['adminvote_table'] . " WHERE admin_id = " . $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
			if($this->nmxhwSqlObj->sql_Query($sql))
			{	
				$sql = "SELECT user.user_id,user.grouptype FROM " . $this->nmxhwLang['user_table'] . ' AS user LEFT JOIN mytemp ON ' . 
					" user.user_id = mytemp.user_id " .  
					" WHERE (mytemp.user_id IS NULL) AND ( user.checkall = 'Y') ORDER BY user.user_id LIMIT 20";
			}
			else
			{
				$sql = "SELECT user_id,grouptype FROM " . $this->nmxhwLang['user_table'] . 
					" WHERE checkall = 'Y' ORDER BY user_id LIMIT 20" ;
			}
		}
		if($usertype  == 'AA')
		{
			$temptime = time();
			$sql = "SELECT user_id,grouptype FROM " . $this->nmxhwLang['user_table'] . 
					" WHERE (beginupdate IS NOT NULL) AND (checkall = 'N') AND (($temptime - beginupdate) > 604800) ORDER BY user_id LIMIT 20" ;
		}
		if( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
		{	
			die('Error ocurs while select user table.[displaybody.php  makeSelectUser()1]');
		}
		return $result;
	}
	//********************************************************
	function makeVote($userid,$usertype,$userid1)
	{
		if($userid == 0)
		{
			$temp = '<a href="index.php?target=9&user=' . $userid1 . '">' . $this->nmxhwLang['dis_vote'] . '</a>';
		}
		if(($userid  != 0) && ($usertype == 'A'))
		{
			$temp = '<a href="index.php?target=10&user=' . $userid1 . '">' . $this->nmxhwLang['dis_adminvote'] . '</a>';
		}
		
		return $temp;
	}
}
?>