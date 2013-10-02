<?php
  
                /***************************************************************************
		                                photos.php
		                             -------------------
		    begin                : February Mon 4 2003
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@263.net
		
		    $Id: index.php,v 0.1 2003/05/05  brgd $
		
		 ***************************************************************************/

$nmxhwTemplate->loadTemplatefile($nmxhwTf['adminfile_body']);
$nmxhwTemplate->setVariable(array(
	"notes"   => $adminFileBody->adminfile['notes'],
	"firstdir"   => $adminFileBody->adminfile['firstdir'],
	"firstdirurl" => $adminFileBody->adminfile['firstdirurl'],
	"parentsdir"   => $adminFileBody->adminfile['parentsdir'],
	"parentsdirurl"   => $adminFileBody->adminfile['parentsdirurl'],
	"selectedfile" => $adminFileBody->adminfile['selectedfile'],
	"delete" => $adminFileBody->adminfile['delete'],
	"currentdir" => $adminFileBody->adminfile['currentdir'],
	"renameto" => $adminFileBody->adminfile['renameto'],
	"ok1" => $adminFileBody->adminfile['ok1'],
	"createdir" => $adminFileBody->adminfile['createdir'],
	"ok2" => $adminFileBody->adminfile['ok2'],
	"upload" => $adminFileBody->adminfile['upload'],
	"ok3" => $adminFileBody->adminfile['ok3'],
	"display1" => $adminFileBody->adminfile['display1'],
	"display2" => $adminFileBody->adminfile['display2'],
	"deleteaction" => $adminFileBody->adminfile['deleteaction'],
	"renameaction" => $adminFileBody->adminfile['renameaction'],
	"createaction" => $adminFileBody->adminfile['createaction'],
	"uploadaction" => $adminFileBody->adminfile['uploadaction'],
	"confirmdelete" => $adminFileBody->adminfile['confirmdelete'],
	"confirmrename" => $adminFileBody->adminfile['confirmrename'],
	"confirmcreate" => $adminFileBody->adminfile['confirmcreate'],
	"confirmupload" => $adminFileBody->adminfile['confirmupload'],
));

$nmxhwTemplate->setCurrentBlock("rows");
	$z = $adminFileBody->adminfile['filenum'];
	for($i = 0; $i < $z; $i++)
	{
		$nmxhwTemplate->setVariable(array(
				"filename" => $adminFileBody->filename[$i]['name'],
				"filesize" => $adminFileBody->filename[$i]['size'],
			));
		$nmxhwTemplate->parse("rows");
	}
$nmxhwTemplate->show();
?>