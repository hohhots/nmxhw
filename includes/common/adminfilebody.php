<?php
  
            		    /***************************************************************************
		                                adminfilebody.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: adminfilebody.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/
if ( !defined('IN_NMXHW') )
{
 	die('Sorry! This accessing is not valid! Try other URL. [adminfilebody.php]<p>Designed by www.nm114.net ');

}
class NmxhwClassAdminFileBody
{
	var $nmxhwClientInfo;
	var $nmxhwSqlObj;
	var $nmxhwLang;
	var $displayHead;
	
	var $upfile = array();  //dir,usedspace
	var $upstate = 0;
	
	var $baseDir;
	var $targetDir;
	var $userAction;
	
	var $adminfile = array();
	var $filename = array();   
	                           
	//*************************************************************************************
	function NmxhwClassAdminFileBody($nmxhwClientInfo,$nmxhwSqlObj,$nmxhwLang,$displayHead)
	{
		$this->nmxhwClientInfo = $nmxhwClientInfo;
		$this->nmxhwSqlObj     = $nmxhwSqlObj;
		$this->nmxhwLang       = $nmxhwLang;
		$this->displayHead     = $displayHead;
		
		$this->upfile['usedspace'] = 0;
		
		if($this->nmxhwClientInfo->nmxhwSessionVars['usertype'] != 'R')
		{
			$this->nmxhwClientInfo->nmxhwRedirection();
		}
		
		$this->baseDir = $this->displayHead->UserBaseUrl($this->nmxhwClientInfo->nmxhwSessionVars['userid']);
		
		//determin if the variable dir is legal
		if(isset($this->nmxhwClientInfo->HTTP_GET_VARS['dir']))
		{
			if(ereg("[.]",$this->nmxhwClientInfo->HTTP_GET_VARS['dir']))
			{
				
				$this->targetDir = '';
			}
			else
			{
				
				$this->targetDir = $this->nmxhwClientInfo->HTTP_GET_VARS['dir'];
			}
		}
		else
		{
			$this->targetDir = '';
		}
		
		if(ereg("^(delete|rename|create|upload)$",($this->nmxhwClientInfo->HTTP_GET_VARS['action'])))
		{
			$this->userAction = $this->nmxhwClientInfo->HTTP_GET_VARS['action'];
		}
		else
		{
			$this->userAction = 'display';
		}
		
		if($this->userAction == 'display')
		{
			$this->actionDisplay();
		}
		
		if($this->userAction == 'delete')
		{
			$this->actionDelete();
			$this->actionDisplay();
		}
		
		if($this->userAction == 'rename')
		{
			$this->actionRename();
			$this->actionDisplay();
		}
		
		if($this->userAction == 'create')
		{
			$this->actionCreate();
			$this->actionDisplay();
		}
		if($this->userAction == 'upload')
		{
			$this->actionUpload();
			$this->actionDisplay();
		}
	}
	//********************************************************
	function actionDisplay()
	{
		if(!file_exists($this->baseDir . $this->targetDir))
		{
			$this->targetDir = '';
		}
				
		if($this->targetDir == '')
		{
			$this->adminfile['notes'] = $this->nmxhwLang['a_notes'];
			$this->adminfile['display1'] = 'none';
			$this->adminfile['display2'] = '';
			$this->getAllFileName($this->targetDir);
			$this->adminfile['currentdir'] = $this->nmxhwLang['a_currentdir'] . '/';
		}
		else
		{
			$this->adminfile['firstdir'] = $this->nmxhwLang['a_firstdir'];
			$this->adminfile['parentsdir'] = $this->nmxhwLang['a_parentsdir'];
			$this->adminfile['parentsdirurl'] = 'index.php?target=6&dir=' . substr($this->targetDir,0,strrpos($this->targetDir,"/"));
			$this->adminfile['firstdirurl'] = 'index.php?target=6';
			$this->adminfile['display1'] = '';
			$this->adminfile['display2'] = 'none';
			$this->adminfile['selectedfile'] = $this->nmxhwLang['a_selectedfile'];
			$this->adminfile['delete'] = $this->nmxhwLang['a_delete'];
			$this->adminfile['renameto'] = $this->nmxhwLang['a_renameto'];
			$this->adminfile['ok1'] = $this->nmxhwLang['a_ok1'];
			$this->adminfile['createdir'] = $this->nmxhwLang['a_createdir'];
			$this->adminfile['ok2'] = $this->nmxhwLang['a_ok2'];
			$this->adminfile['upload'] = $this->nmxhwLang['a_upload'];
			$this->adminfile['ok3'] = $this->nmxhwLang['a_ok3'];
			
			$this->getAllFileName($this->targetDir);
			
			$this->adminfile['deleteaction'] = 'index.php?target=6&dir=' . $this->targetDir . '&action=delete';
			$this->adminfile['renameaction'] = 'index.php?target=6&dir=' . $this->targetDir . '&action=rename';
			$this->adminfile['createaction'] = 'index.php?target=6&dir=' . $this->targetDir . '&action=create';
			$this->adminfile['uploadaction'] = 'index.php?target=6&dir=' . $this->targetDir . '&action=upload';
			$this->adminfile['confirmdelete'] = $this->nmxhwLang['a_confirmdelete'];
			$this->adminfile['confirmrename'] = $this->nmxhwLang['a_confirmrename'];
			$this->adminfile['confirmcreate'] = $this->nmxhwLang['a_confirmcreate'];
			$this->adminfile['confirmupload'] = $this->nmxhwLang['a_confirmupload'];
			$this->adminfile['currentdir'] =  $this->targetDir . '/';			
		}
	}
	//********************************************************
	function actionDelete()
	{
		$this->commonCheck($this->nmxhwClientInfo->HTTP_POST_VARS['filename']);
		
		if((ereg("[\/\\]",$this->nmxhwClientInfo->HTTP_POST_VARS['filename'])) ||
			($this->nmxhwClientInfo->HTTP_POST_VARS['filename'] == ''))
		{
			return;
		}
		
		$filename = $this->baseDir . $this->targetDir . '/' . $this->nmxhwClientInfo->HTTP_POST_VARS['filename'];
		if(is_dir($filename))
		{
			@rmdir($filename);
		}
		else
		{
			@unlink($filename);
		}
		
		return;
	}
	//********************************************************
	function actionRename()
	{
		$this->commonCheck($this->nmxhwClientInfo->HTTP_POST_VARS['oldname']);
		
		if(ereg("[\/\\ ]",$this->nmxhwClientInfo->HTTP_POST_VARS['newname']) ||
			ereg("[\/\\ ]",$this->nmxhwClientInfo->HTTP_POST_VARS['oldname']) ||
			($this->nmxhwClientInfo->HTTP_POST_VARS['newname'] =='') ||
			($this->nmxhwClientInfo->HTTP_POST_VARS['oldname']) == '')
		{
			return;
		}
		
		$oldname = $this->baseDir . $this->targetDir . '/' . $this->nmxhwClientInfo->HTTP_POST_VARS['oldname'];
		$newname = $this->baseDir . $this->targetDir . '/' . $this->nmxhwClientInfo->HTTP_POST_VARS['newname'];
		
		if(file_exists($newname))
		{
			return;	
		}
		
		if(is_dir($oldname))
		{
			if(ereg("[[:punct:]]",$this->nmxhwClientInfo->HTTP_POST_VARS['newname']))
			{
				return;
			}
		}
		else
		{
			$tempend = substr($this->nmxhwClientInfo->HTTP_POST_VARS['newname'],strpos($this->nmxhwClientInfo->HTTP_POST_VARS['newname'],"."));
			if(!$this->determineFileType($tempend))
			{
				return;
			}
		}
		
		@rename($oldname,$newname);
		
		return;
	}
	//********************************************************
	function actionCreate()
	{
		$this->commonCheck($this->nmxhwClientInfo->HTTP_POST_VARS['create']);
				
		if((ereg("[\/\.\\ ]",$this->nmxhwClientInfo->HTTP_POST_VARS['create'])) ||
			($this->nmxhwClientInfo->HTTP_POST_VARS['create'] == ''))
		{
			return;
		}
		
		if(substr_count($this->targetDir,'/') > $this->nmxhwLang['total_subdir'])
		{
			return;
		}
		
		$tempnum = $this->countFileNum($this->baseDir . $this->targetDir);	
		if($tempnum > $this->nmxhwLang['total_filenum'])
		{
			return;
		}
		
		$createdir = $this->baseDir . $this->targetDir . '/' . $this->nmxhwClientInfo->HTTP_POST_VARS['create'];
		
		if(file_exists($createdir))
		{
			return;	
		}
		
		@mkdir($createdir,0777);
		
		return;
	}
	//********************************************************
	function actionUpload()
	{
		$this->upfile['dir'] = $this->baseDir . $this->targetDir . '/';
		
		if(ereg("[\\\/; ]",$_FILES['upfiles']['name']))
		{
			return;
		}
		
		$temp = substr($_FILES['upfiles']['name'],strpos($_FILES['upfiles']['name'],"."));
		if(!$this->determineFileType($temp))
		{
			return;
		}
		
		$tempnum = $this->countFileNum($this->baseDir . $this->targetDir);	
		if($tempnum > $this->nmxhwLang['total_filenum'])
		{
			return;
		}
		
		if(($_FILES['upfiles']['size'] / 1024) > ($this->nmxhwLang['total_space'] - $this->displayHead->nmxhwhead['usspaceall']))
		{
			return;
		}
		
		if(file_exists($this->upfile['dir'] . $_FILES['upfiles']['name']))
		{
			return;	
		}
		
		if(@copy($_FILES['upfiles']['tmp_name'],$this->upfile['dir'] . $_FILES['upfiles']['name']))
		{
			if($this->displayHead->nmxhwhead['dayremainstate'] == 0)
			{
				$sql =  "UPDATE " . $this->nmxhwLang['user_table'] . "
					SET beginupdate = '" . time() . "'
					WHERE user_id  = " . $this->nmxhwClientInfo->nmxhwSessionVars['userid'];
				if ( !($result = $this->nmxhwSqlObj->sql_Query($sql)) )
				{
					die('Error ocurs while insert beginupdate in user table.[adminfilebody.php 292]');
				}
			}
		}
		
		@unlink($_FILES['upfiles']['tmp_name']);
		
		return;
	}
	//********************************************************
	function commonCheck($tempname)
	{
		if($this->targetDir == '')
		{
			$this->actionDisplay();
		}
		if(!file_exists($this->baseDir . $this->targetDir))
		{
			$this->actionDisplay();
		}
		if(!file_exists($this->baseDir . $this->targetDir . '/' . $tempname))
		{
			$this->actionDisplay();
		}
	}
	//********************************************************
	function getAllFileName($targetdir)
	{
		$this->filename[0]['name'] = $this->nmxhwLang['a_nofile'];
		$this->filename[0]['size'] = '0';
		
		$dir = dir($this->baseDir . $targetdir);
		$dir->rewind();
		$i = 0;
		while($tempp[$i] = $dir->read())
		{
			if(is_dir($this->baseDir . $targetdir .  '/' . $tempp[$i]))
			{
				if(($tempp[$i] != '..')  &&  ($tempp[$i] != '.'))
				{
					if($targetdir != '')
					{
						$this->filename[$i]['name'] = '<a href=javascript:onclick=setvalue("' . $tempp[$i] . '")  title="点击进行编辑">' . $tempp[$i] . '</a>' .  '&nbsp; --- <a href="index.php?target=6&dir=' . $this->targetDir . '/' . $tempp[$i] . '" title="点击进入目录">&gt;&gt;</a>';
						$this->filename[$i]['size'] = $this->displayHead->getUsedSpace($this->baseDir . $targetdir . '/' . $tempp[$i]);
						$this->displayHead->nmxhwhead['tempspaceall'] = 0;
						$i++;
					}
					else
					{
						$this->filename[$i]['name'] = $tempp[$i]  .  '&nbsp; --- <a href="index.php?target=6&dir=/' . $tempp[$i] . '">&gt;&gt;</a>';
						$this->filename[$i]['size'] = $this->displayHead->getUsedSpace($this->baseDir . '/' . $tempp[$i]);
						$this->displayHead->nmxhwhead['tempspaceall'] = 0;
						$i++;
					}
					
				}
			}
			else
			{	
				$this->filename[$i]['name'] = '<a href=javascript:onclick=setvalue("' . $tempp[$i] . '")  title="点击进行编辑">' . $tempp[$i] . '</a>';
				
				$temp = filesize($this->baseDir . $targetdir . '/' . $tempp[$i]);
				$temp = ($temp / 1024) ;
				$this->filename[$i]['size'] = substr($temp,0,(strpos($temp,".") + 2));
				$i++;
			}
		}
		if($this->filename[0]['name']  == $this->nmxhwLang['a_nofile'])
		{
			$i = 1;
		} 
		$dir->close();
		$this->adminfile['filenum'] = $i;
	}
	//********************************************************
	function countFileNum($basedir)
	{
		$dir = dir($basedir);
		$dir->rewind();
		$i = 0;
		while($tempp = $dir->read())
		{
			if(($tempp != '..')  &&  ($tempp != '.'))
			{
				$i++;
			}
		}
		$dir->close();
		
		return $i;
	}
	//********************************************************
	function determineFileType($type)
	{
		$tempcount = count($this->nmxhwLang['allfiletype']);
		for($i = 0;$i < $tempcount;$i++)
		{
			if($type == $this->nmxhwLang['allfiletype'][$i])
			{
				return true;
			}
		}
		
		return false;
	}
}
//#################################################################################
?>