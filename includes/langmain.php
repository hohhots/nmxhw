<?php
 
                /***************************************************************************
		                                langmain.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: langmain.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

	if ( !defined('IN_NMXHW') )
	{
	 	die('Sorry! This accessing is not valid! Try other URL. [langmain.php]<p>Designed by www.nm114.net ');
	
	}
//Define used languge constants.
 	$nmxhwLang['allfiletype'] = array(".htm",".html",".js",".jpg",".gif",".png",".swf",".css");
 	$nmxhwLang['expireday'] = 7;
 	$nmxhwLang['expiredaysecond'] = 604800;
 	$nmxhwLang['remaindatesecond'] = 86400;
 	$nmxhwLang['total_subdir']    = 4;
 	$nmxhwLang['total_filenum']   = 100;
 	$nmxhwLang['total_space']     = 1024;
 	 	
 	$nmxhwLang['title']      = '�»������ɹ�Ƶ��-���ɹ�ѧ����ҳ����';
 	$nmxhwLang['toptitle']   = '����&nbsp;&nbsp;<a href="http://www.nmg.xinhuanet.com">�»������ɹ�Ƶ��</a>';
 	$nmxhwLang['currtime']   = '����ʱ�䣺';
 	$nmxhwLang['headuser']   = '��¼�û�:';
 	$nmxhwLang['registuser'] = '&nbsp;ѧ��&nbsp;';
 	$nmxhwLang['adminuser1'] = '&nbsp;��ί&nbsp;';
 	$nmxhwLang['adminuser2'] = '&nbsp;����Ա&nbsp;';
 	$nmxhwLang['result']  = 'ͳ����Ϣ';
 	$nmxhwLang['browse']     = '������Ʒ';
 	$nmxhwLang['regist']     = '��������';
 	$nmxhwLang['manual']     = 'ʹ��ָ��';
 	$nmxhwLang['login1']     = '<a href="index.php?target=5" onMouseOver="chbgcolor(\'tb5\',\'td5\',\'Y\')" onMouseOut="chbgcolor(\'tb5\',\'td5\',\'N\')">��¼</a>';
 	$nmxhwLang['logout1']    = '<a href="index.php?target=5&action=logout" onMouseOver="chbgcolor(\'tb5\',\'td5\',\'Y\')" onMouseOut="chbgcolor(\'tb5\',\'td5\',\'N\')">ע��</a>';
 	$nmxhwLang['info1']      = '��ͳ��';
 	$nmxhwLang['info2']      = '��������:';
 	$nmxhwLang['info3']      = 'ʵ�ʲμ�:';
 	
 	$nmxhwLang['disres1']      = '15��������������:';
 	$nmxhwLang['disres2']      = 'ע������ͳ��:';
 	$nmxhwLang['disres3']      = '��������ͳ��:';
 	$nmxhwLang['disres4']      = '�� ѧ �� ��:';
 	$nmxhwLang['disres5']      = '�� ѧ �� ��:';
 	
 	$nmxhwLang['nologin'] = '�����ڱ��������ڼ䱨���μӣ�';
 	$nmxhwLang['errlogin'] = '����ע����ˡ�������������룬<br>��ѡ��û����ơ��򡶵����ʼ���ַ�����͵�brgd@nm114.net,��˵�������<br>���ǻ�ܿ���������⡣';
 	
 	$nmxhwLang['adminfile']  = '[&nbsp;<a href="index.php?target=6">�ļ�����</a>&nbsp;]';
 	
 	$nmxhwLang['racenotes']       = '���ѽ�������һ�콫�ڴ˴�֪ͨ��';
 	$nmxhwLang['racebegin']       = '�쿪ʼʱ��:';
 	$nmxhwLang['racerunning']     = '�����ڽ��С�';
 	
 	$nmxhwLang['loginuserid']     = '�û�����:';
 	$nmxhwLang['loginuserpass']   = '�û�����:';
 	$nmxhwLang['loginuseryype']   = '�û�����:';
 	$nmxhwLang['login']           = ' �� ¼ ';
 	$nmxhwLang['sorry']           = '�û���,�������,��7�������ѵ���������������ȷѡ���û����͡���';
 	$nmxhwLang['forget']          = '���������룡';
 	
 	$nmxhwLang['company']         = '�й���ͨ�������ɹ�ͨ�Ź�˾&nbsp;��Ȩ����&nbsp;2003��';
 	$nmxhwLang['contact']         = '������ϵ�绰��0471-6929422;6957173&nbsp;&nbsp;&nbsp;&nbsp;<br>�������䣺nmgxhw@xinhuanet.com';
 	$nmxhwLang['address']         = '&nbsp;&nbsp;&nbsp;&nbsp;��лwww.nm114.net�ļ���֧��';
 	
 	$nmxhwLang['di']   	      = '��';
 	$nmxhwLang['zhi']  	      = '��';
 	$nmxhwLang['jie']  	      = '��';
 	                              
 	$nmxhwLang['year']            = '��';
 	$nmxhwLang['month']           = '��';
 	$nmxhwLang['day']             = '��';
 	
 	$nmxhwLang['reg_title1']      = '�����ɹŴ���ѧ����ҳ��ƴ�����<br>������֪';
 	$nmxhwLang['reg_text1']       = '<table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
  <tr> 
    <td colspan="2">һ�������л����񹲺͹��йط��ɡ����棬�е�һ����������Ϊ��ֱ�ӻ�������ķ������Ρ�</td>
  </tr>
  <tr>
    <td colspan="2">����������ע�����¹涨������Υ������ί����Ȩɾ����</td>
  </tr>
  <tr> 
    <td nowrap>&nbsp;&nbsp;&nbsp;</td>
    <td> <table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr> 
          <td width="20" align="right" valign="top">1��</td>
          <td>�����ܷ���ȷ���Ļ���ԭ��ģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">2��</td>
          <td>Σ�����Ұ�ȫ��й¶�������ܣ��߸�������Ȩ���ƻ�����ͳһ�ģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">3��</td>
          <td>�𺦹�������������ģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">4��</td>
          <td>ɿ�������ޡ��������ӣ��ƻ������Ž�ģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">5��</td>
          <td>�ƻ������ڽ����ߣ�����а�̺ͷ⽨���ŵģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">6��</td>
          <td>ɢ��ҥ�ԣ�������������ƻ�����ȶ��ģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">7��</td>
          <td>ɢ�����ࡢɫ�顢�Ĳ�����������ɱ���ֲ����߽�������ģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">8��</td>
          <td>������߷̰����ˣ��ֺ����˺Ϸ�Ȩ��ģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">9��</td>
          <td>���з��ɡ����������ֹ���������ݵģ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">10��</td>
          <td>��������δ������������δ��֤ʵ����Ϣ������������ע����</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">11��</td>
          <td>�������������������ӡ��ƻ������Ž�����ۺ���Ϣ��</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">12��</td>
          <td>��ע��ʹ����������κ��˲������κ�ԭ��ʹ�ö����˽�����������á�ڮ�ٵ����ۣ�</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">13��</td>
          <td>δ����ί��ͬ�⣬���������κ���ʽ�Ĺ�棻</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2">���������������ṩ�ķ���������ʹ�á�</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td> 
      <table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr>
          <td width="20" align="right" valign="top">1��</td>
          <td>���ء����������͵����ʼ������κηǷ����к���в�ȡ����á�ɧ�š��ֺ������ˡ����ס�������̰����ֺ�������˽����������������Ļ���������˲�������ݡ� 
          </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">2��</td>
          <td> ���κη�ʽΣ��δ�����ˡ�</td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">3��</td>
          <td> ð���κ��˻������ </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">4��</td>
          <td> �ٿ�ʶ�����ϣ���αװ���ɱ�������֮�κ�����֮��Դ�� </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">5��</td>
          <td> ���ֺ��κ���֮�κ�ר�����̱ꡢ��ҵ���ܡ�����Ȩ������ר��Ȩ��֮���ݼ������ء����������͵����ʼ�����������ʽ���͡� </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">6��</td>
          <td> ���κι���ź����������ϡ������ʼ��������ż���ֱ���������κ���ʽ��Ȱ�����ϼ������ء����������͵����ʼ�����������ʽ���͡�</td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">7��</td>
          <td> �����Ŀ����춸��š��ƻ��������κμ���������Ӳ����ͨѶ�豸����֮���������������������롢�����ͳ���֮�κ����ϣ��������ء����������͵����ʼ�����������ʽ���͡� 
          </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">8��</td>
          <td>���Ż��ƻ������»��뱾����������֮�����������磬������춱�������������֮�涨���������߻�淶�� </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">9��</td>
          <td>�����١�����������ʽɧ�����ˡ� </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">10��</td>
          <td> �ռ��ʹ�������ʹ����֮�������ϡ�</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2">�ġ��ȷ����κ�Υ������������֮�¼�����֪ͨ������ί�ᡣ </td>
  </tr>
  <tr> 
    <td colspan="2">�塢����Լ���ս���Ȩ������ί�ᡣ</td>
  </tr>
  <tr align="right"> 
    <td colspan="2">���ɹŴ���ѧ����ҳ��ƴ�����ί��</td>
  </tr>
</table>';
 	$nmxhwLang['reg_continue1']   = ' �����Ķ� ';
 	$nmxhwLang['reg_exit1']       = ' �˳� ';
 	
 	$nmxhwLang['reg_title2']      = '�����ɹŴ���ѧ����ҳ��ƴ�����<br>������';
 	$nmxhwLang['reg_problem2']   = ' -- �д���';
 	$nmxhwLang['reg_continue2']   = '�ύ';
 	$nmxhwLang['reg_reset2']      = '��д';
 	$nmxhwLang['reg_exit2']       = '�˳�';
 	$nmxhwLang['reg_name2']       = '����:';
 	$nmxhwLang['reg_pass2']       = '��������:';
 	$nmxhwLang['reg_vepass2']     = 'ȷ������:';
 	$nmxhwLang['reg_passnotmatch2']  = '���벻ƥ�䣡';
 	$nmxhwLang['reg_alpnum2']     = '- 6λ�������ֻ��СдӢ����ĸ';
 	$nmxhwLang['reg_sex2']        = '�Ա�:';
 	$nmxhwLang['reg_sex21']       = '<option  value="��"> �� </option>';
 	$nmxhwLang['reg_sex22']       = '<option  value="��" selected> �� </option>';
 	$nmxhwLang['reg_sex23']       = '<option value="Ů"> Ů </option>';
 	$nmxhwLang['reg_sex24']       = '<option value="Ů" selected> Ů </option>';
 	$nmxhwLang['reg_age2']        = '����:';
 	$nmxhwLang['reg_region2']     = '��������:';
 	$nmxhwLang['region1']   = '���ͺ�����';
 	$nmxhwLang['region2']   = '��ͷ��';
 	$nmxhwLang['region3']   = '������˹��';
 	$nmxhwLang['region4']   = '�����';
 	$nmxhwLang['region5']   = 'ͨ����';
 	$nmxhwLang['region6']   = '��������';
 	$nmxhwLang['region7']   = '�����׶���';
 	$nmxhwLang['region8']   = '�ں���';
 	$nmxhwLang['region9']   = '�˰���';
 	$nmxhwLang['region10']   = '���ױ�����';
 	$nmxhwLang['region11']   = '���ֹ�����';
 	$nmxhwLang['region12']   = '�����첼��';
 	$nmxhwLang['region13']   = '�ܼ�����';
 	$nmxhwLang['region14']   = '��������';
 	$nmxhwLang['region15']   = 'Ů������';
 	$nmxhwLang['reg_region2a1']   ='<option  value="' . $nmxhwLang['region1'] . '">' . $nmxhwLang['region1'] . '</option>';
 	$nmxhwLang['reg_region2a2']   ='<option  value="' . $nmxhwLang['region1'] . '" selected>' . $nmxhwLang['region1'] . '</option>';
 	$nmxhwLang['reg_region2b1']   ='<option  value="' . $nmxhwLang['region2'] . '">' . $nmxhwLang['region2'] . '</option>';
 	$nmxhwLang['reg_region2b2']   ='<option  value="' . $nmxhwLang['region2'] . '" selected>' . $nmxhwLang['region2'] . '</option>';
 	$nmxhwLang['reg_region2c1']   ='<option  value="' . $nmxhwLang['region3'] . '">' . $nmxhwLang['region3'] . '</option>';
 	$nmxhwLang['reg_region2c2']   ='<option  value="' . $nmxhwLang['region3'] . '" selected>' . $nmxhwLang['region3'] . '</option>';
 	$nmxhwLang['reg_region2d1']   ='<option  value="' . $nmxhwLang['region4'] . '">' . $nmxhwLang['region4'] . '</option>';
 	$nmxhwLang['reg_region2d2']   ='<option  value="' . $nmxhwLang['region4'] . '" selected>' . $nmxhwLang['region4'] . '</option>';
 	$nmxhwLang['reg_region2e1']   ='<option  value="' . $nmxhwLang['region5'] . '">' . $nmxhwLang['region5'] . '</option>';
 	$nmxhwLang['reg_region2e2']   ='<option  value="' . $nmxhwLang['region5'] . '" selected>' . $nmxhwLang['region5'] . '</option>';
 	$nmxhwLang['reg_region2f1']   ='<option  value="' . $nmxhwLang['region6'] . '">' . $nmxhwLang['region6'] . '</option>';
 	$nmxhwLang['reg_region2f2']   ='<option  value="' . $nmxhwLang['region6'] . '" selected>' . $nmxhwLang['region6'] . '</option>';
 	$nmxhwLang['reg_region2g1']   ='<option  value="' . $nmxhwLang['region7'] . '">' . $nmxhwLang['region7'] . '</option>';
 	$nmxhwLang['reg_region2g2']   ='<option  value="' . $nmxhwLang['region7'] . '" selected>' . $nmxhwLang['region7'] . '</option>';
 	$nmxhwLang['reg_region2h1']   ='<option  value="' . $nmxhwLang['region8'] . '">' . $nmxhwLang['region8'] . '</option>';
 	$nmxhwLang['reg_region2h2']   ='<option  value="' . $nmxhwLang['region8'] . '" selected>' . $nmxhwLang['region8'] . '</option>';
 	$nmxhwLang['reg_region2i1']   ='<option  value="' . $nmxhwLang['region9'] . '">' . $nmxhwLang['region9'] . '</option>';
 	$nmxhwLang['reg_region2i2']   ='<option  value="' . $nmxhwLang['region9'] . '" selected>' . $nmxhwLang['region9'] . '</option>';
 	$nmxhwLang['reg_region2j1']   ='<option  value="' . $nmxhwLang['region10'] . '">' . $nmxhwLang['region10'] . '</option>';
 	$nmxhwLang['reg_region2j2']   ='<option  value="' . $nmxhwLang['region10'] . '" selected>' . $nmxhwLang['region10'] . '</option>';
 	$nmxhwLang['reg_region2k1']   ='<option  value="' . $nmxhwLang['region11'] . '">' . $nmxhwLang['region11'] . '</option>';
 	$nmxhwLang['reg_region2k2']   ='<option  value="' . $nmxhwLang['region11'] . '" selected>' . $nmxhwLang['region11'] . '</option>';
 	$nmxhwLang['reg_region2l1']   ='<option  value="' . $nmxhwLang['region12'] . '">' . $nmxhwLang['region12'] . '</option>';
 	$nmxhwLang['reg_region2l2']   ='<option  value="' . $nmxhwLang['region12'] . '" selected>' . $nmxhwLang['region12'] . '</option>';
 	
 	$nmxhwLang['ugrouptype'] = '��ѧ��';
 	$nmxhwLang['sgrouptype'] = '��ѧ��';
 	$nmxhwLang['reg_grouptype2'] = 'ѧ������:';
 	$nmxhwLang['reg_grouptype21']       = '<option  value="' . $nmxhwLang['ugrouptype'] . '">' . $nmxhwLang['ugrouptype'] . '</option>';
 	$nmxhwLang['reg_grouptype22']       = '<option  value="' . $nmxhwLang['ugrouptype'] . '" selected>' . $nmxhwLang['ugrouptype'] . '</option>';
 	$nmxhwLang['reg_grouptype23']       = '<option value="' . $nmxhwLang['sgrouptype'] . '">' . $nmxhwLang['sgrouptype'] . '</option>';
 	$nmxhwLang['reg_grouptype24']       = '<option value="' . $nmxhwLang['sgrouptype'] . '" selected>' . $nmxhwLang['sgrouptype'] . '</option>';
 	
 	$nmxhwLang['reg_school2']     = '�Ͷ�ѧУ:';
 	$nmxhwLang['reg_address2']    = 'ͨ�ŵ�ַ:';
 	$nmxhwLang['reg_zip2']        = '��������:';
 	$nmxhwLang['reg_telephone2']  = '�̶��绰:';
 	$nmxhwLang['reg_regionnum2']  = '- ���������д�ڵ绰����ǰ�� 04716929422';
 	$nmxhwLang['reg_mobile2']     = '�ƶ��绰:';
 	$nmxhwLang['reg_email2']      = '�����ʼ�:';
 	$nmxhwLang['reg_www2']        = '������ַ:';
 	$nmxhwLang['reg_explain2']    = '&nbsp;�������д��';
 	$nmxhwLang['reg_required2']   = '<font size="3" color="#ff0000">*</font>';
 	$nmxhwLang['reg_finished1']   = '��ע��ɹ��ˡ�<br>ϵͳ���Զ��ѡ��û����ơ��͡��û����롷���͵����ĵ������������ղ�ȷ�ϡ�<br>���ġ��û����ơ��ǣ�';
 	$nmxhwLang['reg_finished2']   = '��ע��ɹ��ˡ�<br>���ġ��û����ơ��͡��û����롷���£�<br>';
 	$nmxhwLang['mail_message1'] = '���ż���ϵͳ�Զ����͡�\n������www.nmg.xinhuanet.comע��μӡ����ɹ�ѧ����ҳ���������û����ƺ��û��������¡�\n';
 	$nmxhwLang['mail_message2'] = '\n���������ѯ��վwww.nmg.xinhuanet.com�򷢵����ʼ���gaoruixin@xinhuanet.com\nлл��';
 	 	
 	$nmxhwLang['dis_logo'] = '����ͼƬ';
 	$nmxhwLang['dis_userweb'] = '����ƷԤ��';
 	$nmxhwLang['dis_showbatch1'] = ' -- ������Ʒ';
 	$nmxhwLang['dis_showbatch2'] = ' -- ������Ʒ';
 	$nmxhwLang['dis_showbatch3'] = ' -- ����û�����ֵ���Ʒ';
 	$nmxhwLang['dis_showbatch4'] = ' -- δ��֤������Ʒ';
 	$nmxhwLang['dis_reload']   = ' ��һҳ&nbsp;>>';
 	$nmxhwLang['dis_nofile'] = '��ʱû���κ�ѡ�ֵݽ���Ʒ��';
 	$nmxhwLang['dis_nofile1'] = '��ʱû���κ�����Ʒ�����Ѹ����е��ϴ���Ʒ���֣�';
 	$nmxhwLang['dis_nofile2'] = '��ʱû���κ�����Ʒ��������������������Ʒ��';
 	$nmxhwLang['dis_nmwt'] = '[������ͨ]<br>';
 	$nmxhwLang['dis_nmtw'] = '[������ί]<br>';
 	$nmxhwLang['dis_free'] = '[������Ʒ]<br>';
 	$nmxhwLang['dis_nmwturl'] = 'wt/';
 	$nmxhwLang['dis_nmtwurl'] = 'tw/';
 	$nmxhwLang['dis_nmfree'] = '[���ɴ���]<br>';
 	$nmxhwLang['dis_freeurl'] = 'free/';
 	$nmxhwLang['dis_allurl'] = 'index.html';
 	$nmxhwLang['dis_vote'] = '[ͶƱ]<br>';
 	$nmxhwLang['dis_adminvote'] = '[����]<br>';
 	$nmxhwLang['dis_pass'] = 'ͨ��';
 	$nmxhwLang['dis_delete'] = 'ɾ��';
 	
 	$nmxhwLang['disuinfo_title'] = '&nbsp;ѡ�ֵ���Ϣ';
 	
 	$nmxhwLang['disuinfo_y'] = 'ͨ��';
 	$nmxhwLang['disuinfo_n'] = 'δ��֤';
 	$nmxhwLang['disuinfo_c'] = 'ɾ��';
 	
 	$nmxhwLang['disuinfo_0'] = '������';
 	$nmxhwLang['disuinfo_1'] = '�Ա�';
 	$nmxhwLang['disuinfo_2'] = '���䣺';
 	$nmxhwLang['disuinfo_3'] = 'ѧУ���';
 	$nmxhwLang['disuinfo_4'] = '����ѧУ��';
 	$nmxhwLang['disuinfo_5'] = 'ע�����ڣ�';
 	$nmxhwLang['disuinfo_6'] = '��ʼ�ϴ���';
 	$nmxhwLang['disuinfo_7'] = '�̶��绰��';
 	$nmxhwLang['disuinfo_8'] = '�ƶ��绰��';
 	$nmxhwLang['disuinfo_9'] = '�����ʼ���';
 	$nmxhwLang['disuinfo_10'] = '������ַ��';
 	$nmxhwLang['disuinfo_11'] = '���룺';
 	$nmxhwLang['disuinfo_12'] = '���ڵ�����';
 	$nmxhwLang['disuinfo_13'] = '��ϵ��ַ��';
 	$nmxhwLang['disuinfo_14'] = '�ʱࣺ';
 	$nmxhwLang['disuinfo_15'] = '�����½IP��';
 	$nmxhwLang['disuinfo_16'] = '�����½ʱ�䣺';
 	$nmxhwLang['disuinfo_17'] = '����״̬��';
 	$nmxhwLang['disuinfo_18'] = 'ͶƱ����';
 	
 	$nmxhwLang['dis_script1'] ='<script language="JavaScript" type="text/JavaScript">
					function DeleteOrPass(dpstate,userid)
					{
					   	if(dpstate == "d"){
						    if (confirm("��ȷ���Ƿ����Ҫɾ��" + userid + "ѡ�֣����ȷ������ɾ����ѡ�ֵ��������ϴ�����Ʒ��")) 
						 	{     
						 	   window.location.href="http://202.99.225.146/index.php?target=12&action=delete&userid=" + userid;
							}
						}
						if(dpstate == "p"){
						    if (confirm("��ȷ���Ƿ����Ҫ��" + userid + "ѡ�ֲ�����")) 
							{     
						 	   window.location.href="http://202.99.225.146/index.php?target=12&action=pass&userid=" + userid;
							}
						}
					}
					</script>';
 	
 	$nmxhwLang['vot_back'] = '<< ����';
 	$nmxhwLang['vot_thank'] = '���Ը�ѡ�ֵ�ͶƱ�ѱ���¼��<p>��л�������ɹ�ѧ���Ĺ�����֧�ּ����»����Ĺ�ע��';
 	$nmxhwLang['vot_sorry'] = '�Բ������Ը�ѡ����Ͷ��Ʊ�ˡ�<p>' . $nmxhwLang['title'];
 	
 	$nmxhwLang['degree'] = '������Χ 0 - 100:';
 	$nmxhwLang['adminnotes'] = '�Բ������ǹ���Ա�����ܲμ����֡�<p>' . $nmxhwLang['title'];  
 	$nmxhwLang['adminsorry'] = '�Բ������Ը�ѡ���������ˣ������ٴ����֡�<p>' . $nmxhwLang['title'];
 	$nmxhwLang['admindegree'] = '�Բ��𣡷���ֻ�ܴ�0-100֮��ѡ��<p>' . $nmxhwLang['title'];
 	$nmxhwLang['adminsuccess'] = '���Ը��û��������ѱ���¼��лл��<p>' . $nmxhwLang['title'];
 	
 	$nmxhwLang['a_firstdir'] = '��Ŀ¼';
 	$nmxhwLang['a_parentsdir'] = '�ϼ�Ŀ¼';
 	$nmxhwLang['a_selectedfile'] = '�����Ŀ¼���ļ���';
 	$nmxhwLang['a_delete'] = 'ɾ��';
 	$nmxhwLang['a_renameto'] = '������Ϊ��';
 	$nmxhwLang['a_ok1'] = '����';
 	$nmxhwLang['a_createdir'] = '�½�Ŀ¼��';
 	$nmxhwLang['a_ok2'] = '����';
 	$nmxhwLang['a_upload'] = '�ϴ��ļ���';
 	$nmxhwLang['a_ok3'] = '�ϴ�';
 	$nmxhwLang['a_notes'] = 'free = ���ɴ�����ҳĿ¼�� wt = ��ͨ����ҳĿ¼�� tw = ��ί����ҳĿ¼�� logo = ��������ͼƬĿ¼�������>>��������ӦĿ¼��';
 	$nmxhwLang['a_nofile'] = '��Ŀ¼��';
 	$nmxhwLang['a_confirmdelete'] = '��ȷ���Ƿ����Ҫɾ����';
 	$nmxhwLang['a_confirmrename'] = '��ȷ���Ƿ����Ҫ��������';
 	$nmxhwLang['a_confirmupload'] = '��ȷ���Ƿ����Ҫ�ϴ����ļ���';
 	$nmxhwLang['a_confirmcreate'] = '��ȷ���Ƿ����Ҫ�½���Ŀ¼��';
 	
 	$nmxhwLang['session_table']   = 'wybs_session';
 	$nmxhwLang['user_table']      = 'wybs_user';
 	$nmxhwLang['admin_table']     = 'wybs_administrator';
 	$nmxhwLang['fullvar_table']   = 'wybs_fullvar';
 	$nmxhwLang['operation_table'] = 'wybs_dboperation';
 	$nmxhwLang['adminvote_table'] = 'wybs_adminvote';
 	$nmxhwLang['guestvot_table']  = 'wybs_guestvot';
 	
 	$nmxhwLang['remaindate'] = '����ʱ:';
 	$nmxhwLang['nocountdate'] = 'δ��ʼ';
 	$nmxhwLang['remainday'] = '��';
 	$nmxhwLang['usspace'] = '���ÿռ�';
 	$nmxhwLang['respace'] = 'ʣ��';
 	$nmxhwLang['tempsorry'] = '���ܾ���������ŷ��������Ϳ����ϴ��ˡ��������⣡<br>2003��12��21��';
 	
 	$nmxhwLang['helptext'] = '<table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
  <tr> 
    <td height="40" colspan="2" align="center"><font size="4">��ʹ��ָ�ϡ�</font> <hr width="50%" size="1"></td>
  </tr>
  <tr> 
    <td colspan="2"><strong>һ����վ����ߣ�</strong></td>
  </tr>
  <tr> 
    <td width="10">&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr> 
          <td width="20" align="right" valign="top">1��</td>
          <td>ѡ�񡶲�����Ʒ�������ѡ�ֵݽ�������ɵ���ҳ��Ʒ������Լ�ϲ������ƷͶƱ��</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">2��</td>
          <td>ѡ������������Ʒ����������������������Ʒ��</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2"><strong>�����μӱ����ߣ�</strong></td>
  </tr>
  <tr> 
    <td width="10">&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr> 
          <td width="20" align="right" valign="top">1��</td>
          <td>ѡ�񡶱������������Ķ���������֪������ϸ��д��������Ժ����Ǻ�ѡ����Ҫͨ�������ʼ���ϵ��������¼��ϵͳ�����ṩ�ġ��û����ơ��͡��û����롷��</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">2��</td>
          <td>ѡ�񡶵�¼������д�Լ��ġ��û����ơ��͡��û����롷����ѡ���û����͡�Ϊ��ѧ��������¼�Ժ�ѡ���ļ������ϴ��͹����Լ�����Ʒ��</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">3��</td>
          <td>���ļ������������ļ�����Ŀ¼�����б༭����� &gt;&gt; ����Ŀ¼��</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">4��</td>
          <td>���ݱ����������ġ��û����ơ�������һ���ϴ�һ���ļ���ʼ��ʱ��7���Ժ���Զ�ʧЧ�������پ���һ��Ĺ���Ա����ڣ���ϵͳ���Զ���������Ʒ��ӵ���������Ʒ�����档���ѡ����ð��Լ�����Ʒ׼�����Ժ��ٵݽ�������7���ڱ����޸�������ϴ��������Ĵ���</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">5��</td>
          <td>�ر�ע������ڱ�ϵͳ�ڴ�������ʼʱ�䡷�͡�����ʱ�䡷�ǵ�һλ�ġ�ֻҪ���˴����涨�ı���ʱ�䣬����ѡ�ֵ�һ�л���ᱻ��ֹ��</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">6��</td>
          <td>ѡ�ű�׼�������ͶƱ��+��ί������</td>
        </tr>
        <tr> 
          <td colspan="2" valign="top"><strong><font color="#FF0000">ע�����</font></strong></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">��ϵͳ����Ϊunix������ϸ��������е�Ӣ�ĵ��ʵĴ�Сд�����������Ʒ�ϴ��Ժ����ͼƬ��ʧ�����Ӵ�������������ȼ���Ƿ��ɴ�Сд��һ�¶�����</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">Ŀ¼�����ļ�����·��ǧ��Ҫ�������ģ�����ת���ɺ���ƴ����Ӣ�ġ����Ļ���unix����ϵͳ��dreamweaver����ҳ�������������һЩ����</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">���ϴ��ļ�����(.htm .html .js .jpg .gif .png .swf 
            .css)��8�֣������������brgd@nm114.net�������ʼ�˵�������</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">�ǿ�Ŀ¼�޷�ɾ����Ŀ¼���ļ����Ʋ�Ҫ�����κγ��÷��ţ��п����޷�������</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">����ÿ��������Ʒ����ҳ���Ʊ�����index.html��</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">logoĿ¼����������һ����80��100�����ص�gif�Դ�ͼƬ����Ҫ�����Ǿ����������˷��������Ʒ��</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">ͼƬ·��������·������������·����ǧ��Ҫ���þ���·����</font></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2"><strong>������ί�͹���Ա��</strong></td>
  </tr>
  <tr> 
    <td width="10">&nbsp;</td>
    <td>����֪ͨ��</td>
  </tr>
  <tr> 
    <td colspan="2"><strong>�ġ��������⣺</strong></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr> 
          <td width="20" align="right" valign="top">1��</td>
          <td><p>�ʣ�Ϊʲôֻ���ϴ���̬��ҳ���ܲ����ϴ���̬��ҳ������php,asp,jsp�ȣ�<br>
              �𣺱��첻�У���һ�����ǻ�����������Ŀ�� </p></td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">2��</td>
          <td><p>�ʣ���Ƶ����Ƶ�ļ����ܲ����ϴ���<br>
              �𣺱��첻�У����������Ϊ��֯�߶Բ����ߵ�Ҫ������ҳ�ڼ����Էǳ�ǿ��ǰ���¾���ʵ���Ժ͹����ԡ�Ҳ���Ժ����ǿ�����һ����ý����ҳ��Ʊ����顣</p></td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">3��</td>
          <td><p>�ʣ�.class�ļ����ܲ����ϴ���<br>
              �𣺱��첻�У�ѧ��ֻʹ��applet��java������һ����������HTML����Ҳ��ȱ���˽⡣Ҳ�к�����2һ�������ɡ�</p></td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">4��</td>
          <td><p>�ʣ�Ϊʲô�ܵ�¼����ȥ��<br>
              �𣺷ǳ��Բ����������ǹ����ϵ�ʧ�������ڿͻ���û����ȷ��ʾ���������6λ�����ڣ�������ºܶ��û������루����6λ�ģ����ض̵�6λ��������ͬѧ���������������ǰ6λ��¼��</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center"><hr width="70%" size="1">��ѯ�绰��0471-6929422;6957173&nbsp;&nbsp;&nbsp;&nbsp; ����֧�֣�brgd@nm114.net</td>
  </tr>
</table>';
?>