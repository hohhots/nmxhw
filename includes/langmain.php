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
 	 	
 	$nmxhwLang['title']      = '新华网内蒙古频道-内蒙古学生网页大赛';
 	$nmxhwLang['toptitle']   = '返回&nbsp;&nbsp;<a href="http://www.nmg.xinhuanet.com">新华网内蒙古频道</a>';
 	$nmxhwLang['currtime']   = '北京时间：';
 	$nmxhwLang['headuser']   = '登录用户:';
 	$nmxhwLang['registuser'] = '&nbsp;学生&nbsp;';
 	$nmxhwLang['adminuser1'] = '&nbsp;评委&nbsp;';
 	$nmxhwLang['adminuser2'] = '&nbsp;管理员&nbsp;';
 	$nmxhwLang['result']  = '统计信息';
 	$nmxhwLang['browse']     = '参赛作品';
 	$nmxhwLang['regist']     = '报名参赛';
 	$nmxhwLang['manual']     = '使用指南';
 	$nmxhwLang['login1']     = '<a href="index.php?target=5" onMouseOver="chbgcolor(\'tb5\',\'td5\',\'Y\')" onMouseOut="chbgcolor(\'tb5\',\'td5\',\'N\')">登录</a>';
 	$nmxhwLang['logout1']    = '<a href="index.php?target=5&action=logout" onMouseOver="chbgcolor(\'tb5\',\'td5\',\'Y\')" onMouseOut="chbgcolor(\'tb5\',\'td5\',\'N\')">注销</a>';
 	$nmxhwLang['info1']      = '届统计';
 	$nmxhwLang['info2']      = '报名人数:';
 	$nmxhwLang['info3']      = '实际参加:';
 	
 	$nmxhwLang['disres1']      = '15分钟内在线人数:';
 	$nmxhwLang['disres2']      = '注册人数统计:';
 	$nmxhwLang['disres3']      = '参赛人数统计:';
 	$nmxhwLang['disres4']      = '大 学 生 组:';
 	$nmxhwLang['disres5']      = '中 学 生 组:';
 	
 	$nmxhwLang['nologin'] = '请您在比赛进行期间报名参加！';
 	$nmxhwLang['errlogin'] = '您已注册过了。如果忘记了密码，<br>请把《用户名称》或《电子邮件地址》发送到brgd@nm114.net,并说明情况。<br>我们会很快帮你解决问题。';
 	
 	$nmxhwLang['adminfile']  = '[&nbsp;<a href="index.php?target=6">文件管理</a>&nbsp;]';
 	
 	$nmxhwLang['racenotes']       = '届已结束，下一届将在此处通知！';
 	$nmxhwLang['racebegin']       = '届开始时间:';
 	$nmxhwLang['racerunning']     = '届正在进行。';
 	
 	$nmxhwLang['loginuserid']     = '用户名称:';
 	$nmxhwLang['loginuserpass']   = '用户密码:';
 	$nmxhwLang['loginuseryype']   = '用户类型:';
 	$nmxhwLang['login']           = ' 登 录 ';
 	$nmxhwLang['sorry']           = '用户名,密码错误,或7天期限已到！请您别忘了正确选择《用户类型》！';
 	$nmxhwLang['forget']          = '忘记了密码！';
 	
 	$nmxhwLang['company']         = '中国网通集团内蒙古通信公司&nbsp;版权所有&nbsp;2003年';
 	$nmxhwLang['contact']         = '赛事联系电话：0471-6929422;6957173&nbsp;&nbsp;&nbsp;&nbsp;<br>电子邮箱：nmgxhw@xinhuanet.com';
 	$nmxhwLang['address']         = '&nbsp;&nbsp;&nbsp;&nbsp;感谢www.nm114.net的技术支持';
 	
 	$nmxhwLang['di']   	      = '第';
 	$nmxhwLang['zhi']  	      = '至';
 	$nmxhwLang['jie']  	      = '届';
 	                              
 	$nmxhwLang['year']            = '年';
 	$nmxhwLang['month']           = '月';
 	$nmxhwLang['day']             = '日';
 	
 	$nmxhwLang['reg_title1']      = '《内蒙古大中学生网页设计大赛》<br>报名须知';
 	$nmxhwLang['reg_text1']       = '<table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
  <tr> 
    <td colspan="2">一、遵守中华人民共和国有关法律、法规，承担一切因您的行为而直接或间接引起的法律责任。</td>
  </tr>
  <tr>
    <td colspan="2">二、内容请注意以下规定，若有违反，组委会有权删除。</td>
  </tr>
  <tr> 
    <td nowrap>&nbsp;&nbsp;&nbsp;</td>
    <td> <table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr> 
          <td width="20" align="right" valign="top">1、</td>
          <td>反对宪法所确定的基本原则的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">2、</td>
          <td>危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">3、</td>
          <td>损害国家荣誉和利益的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">4、</td>
          <td>煽动民族仇恨、民族歧视，破坏民族团结的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">5、</td>
          <td>破坏国家宗教政策，宣扬邪教和封建迷信的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">6、</td>
          <td>散布谣言，扰乱社会秩序，破坏社会稳定的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">7、</td>
          <td>散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">8、</td>
          <td>侮辱或者诽谤他人，侵害他人合法权益的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">9、</td>
          <td>含有法律、行政法规禁止的其他内容的；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">10、</td>
          <td>请勿张贴未经公开报道、未经证实的消息；亲身经历者请注明；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">11、</td>
          <td>请勿张贴宣扬种族歧视、破坏民族团结的言论和消息；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">12、</td>
          <td>请注意使用文明用语，任何人不得以任何原因使用对他人进行人身攻击、谩骂、诋毁的言论；</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">13、</td>
          <td>未经组委会同意，请勿张贴任何形式的广告；</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2">三、不将本赛事提供的服务作以下使用∶</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td> 
      <table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr>
          <td width="20" align="right" valign="top">1、</td>
          <td>上载、张贴、发送电子邮件或传送任何非法、有害、胁迫、滥用、骚扰、侵害、中伤、粗俗、猥亵、诽谤、侵害他人隐私、有种族歧视倾向的或道德上令人不快的内容。 
          </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">2、</td>
          <td> 以任何方式危害未成年人。</td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">3、</td>
          <td> 冒充任何人或机构。 </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">4、</td>
          <td> 操控识别资料，以伪装经由本服务传送之任何内容之来源。 </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">5、</td>
          <td> 将侵害任何人之任何专利、商标、商业秘密、著作权或其他专属权利之内容加以上载、张贴、发送电子邮件或以其他方式传送。 </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">6、</td>
          <td> 将任何广告信函、促销资料、垃圾邮件、连锁信件、直销或其他任何形式的劝诱资料加以上载、张贴、发送电子邮件或以其他方式传送。</td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">7、</td>
          <td> 将设计目的在於干扰、破坏或限制任何计算机软件、硬件或通讯设备功能之软件病毒或其他计算机代码、档案和程序之任何资料，加以上载、张贴、发送电子邮件或以其他方式传送。 
          </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">8、</td>
          <td>干扰或破坏本赛事或与本赛事相连线之服务器和网络，或不遵守於本赛事连线网络之规定、程序、政策或规范。 </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">9、</td>
          <td>“跟踪”或以其他方式骚扰他人。 </td>
        </tr>
        <tr>
          <td width="20" align="right" valign="top">10、</td>
          <td> 收集和储存其他使用者之个人资料。</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2">四、倘发现任何违反本服务条款之事件，请通知赛事组委会。 </td>
  </tr>
  <tr> 
    <td colspan="2">五、本条约最终解释权归属组委会。</td>
  </tr>
  <tr align="right"> 
    <td colspan="2">内蒙古大中学生网页设计大赛组委会</td>
  </tr>
</table>';
 	$nmxhwLang['reg_continue1']   = ' 我已阅读 ';
 	$nmxhwLang['reg_exit1']       = ' 退出 ';
 	
 	$nmxhwLang['reg_title2']      = '《内蒙古大中学生网页设计大赛》<br>报名单';
 	$nmxhwLang['reg_problem2']   = ' -- 有错误！';
 	$nmxhwLang['reg_continue2']   = '提交';
 	$nmxhwLang['reg_reset2']      = '重写';
 	$nmxhwLang['reg_exit2']       = '退出';
 	$nmxhwLang['reg_name2']       = '姓名:';
 	$nmxhwLang['reg_pass2']       = '输入密码:';
 	$nmxhwLang['reg_vepass2']     = '确认密码:';
 	$nmxhwLang['reg_passnotmatch2']  = '密码不匹配！';
 	$nmxhwLang['reg_alpnum2']     = '- 6位以内数字或大小写英文字母';
 	$nmxhwLang['reg_sex2']        = '性别:';
 	$nmxhwLang['reg_sex21']       = '<option  value="男"> 男 </option>';
 	$nmxhwLang['reg_sex22']       = '<option  value="男" selected> 男 </option>';
 	$nmxhwLang['reg_sex23']       = '<option value="女"> 女 </option>';
 	$nmxhwLang['reg_sex24']       = '<option value="女" selected> 女 </option>';
 	$nmxhwLang['reg_age2']        = '年龄:';
 	$nmxhwLang['reg_region2']     = '所在盟市:';
 	$nmxhwLang['region1']   = '呼和浩特市';
 	$nmxhwLang['region2']   = '包头市';
 	$nmxhwLang['region3']   = '鄂尔多斯市';
 	$nmxhwLang['region4']   = '赤峰市';
 	$nmxhwLang['region5']   = '通辽市';
 	$nmxhwLang['region6']   = '阿拉善盟';
 	$nmxhwLang['region7']   = '巴音淖尔盟';
 	$nmxhwLang['region8']   = '乌海市';
 	$nmxhwLang['region9']   = '兴安盟';
 	$nmxhwLang['region10']   = '呼伦贝尔市';
 	$nmxhwLang['region11']   = '锡林郭勒盟';
 	$nmxhwLang['region12']   = '乌兰察布盟';
 	$nmxhwLang['region13']   = '总计人数';
 	$nmxhwLang['region14']   = '男生人数';
 	$nmxhwLang['region15']   = '女生人数';
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
 	
 	$nmxhwLang['ugrouptype'] = '大学生';
 	$nmxhwLang['sgrouptype'] = '中学生';
 	$nmxhwLang['reg_grouptype2'] = '学生分组:';
 	$nmxhwLang['reg_grouptype21']       = '<option  value="' . $nmxhwLang['ugrouptype'] . '">' . $nmxhwLang['ugrouptype'] . '</option>';
 	$nmxhwLang['reg_grouptype22']       = '<option  value="' . $nmxhwLang['ugrouptype'] . '" selected>' . $nmxhwLang['ugrouptype'] . '</option>';
 	$nmxhwLang['reg_grouptype23']       = '<option value="' . $nmxhwLang['sgrouptype'] . '">' . $nmxhwLang['sgrouptype'] . '</option>';
 	$nmxhwLang['reg_grouptype24']       = '<option value="' . $nmxhwLang['sgrouptype'] . '" selected>' . $nmxhwLang['sgrouptype'] . '</option>';
 	
 	$nmxhwLang['reg_school2']     = '就读学校:';
 	$nmxhwLang['reg_address2']    = '通信地址:';
 	$nmxhwLang['reg_zip2']        = '邮政编码:';
 	$nmxhwLang['reg_telephone2']  = '固定电话:';
 	$nmxhwLang['reg_regionnum2']  = '- 必须把区号写在电话号码前面 04716929422';
 	$nmxhwLang['reg_mobile2']     = '移动电话:';
 	$nmxhwLang['reg_email2']      = '电子邮件:';
 	$nmxhwLang['reg_www2']        = '个人网址:';
 	$nmxhwLang['reg_explain2']    = '&nbsp;项必须填写！';
 	$nmxhwLang['reg_required2']   = '<font size="3" color="#ff0000">*</font>';
 	$nmxhwLang['reg_finished1']   = '您注册成功了。<br>系统已自动把《用户名称》和《用户密码》发送到您的电子信箱里，请查收并确认。<br>您的《用户名称》是：';
 	$nmxhwLang['reg_finished2']   = '您注册成功了。<br>您的《用户名称》和《用户密码》如下；<br>';
 	$nmxhwLang['mail_message1'] = '此信件由系统自动发送。\n您的在www.nmg.xinhuanet.com注册参加《内蒙古学生网页大赛》的用户名称和用户密码如下。\n';
 	$nmxhwLang['mail_message2'] = '\n有问题请查询网站www.nmg.xinhuanet.com或发电子邮件到gaoruixin@xinhuanet.com\n谢谢！';
 	 	
 	$nmxhwLang['dis_logo'] = '宣传图片';
 	$nmxhwLang['dis_userweb'] = '的作品预览';
 	$nmxhwLang['dis_showbatch1'] = ' -- 优秀作品';
 	$nmxhwLang['dis_showbatch2'] = ' -- 参赛作品';
 	$nmxhwLang['dis_showbatch3'] = ' -- 您还没有评分的作品';
 	$nmxhwLang['dis_showbatch4'] = ' -- 未验证的新作品';
 	$nmxhwLang['dis_reload']   = ' 另一页&nbsp;>>';
 	$nmxhwLang['dis_nofile'] = '暂时没有任何选手递交作品！';
 	$nmxhwLang['dis_nofile1'] = '暂时没有任何新作品或您已给所有的上传作品评分！';
 	$nmxhwLang['dis_nofile2'] = '暂时没有任何新作品或您检查了所有已完成作品！';
 	$nmxhwLang['dis_nmwt'] = '[内蒙网通]<br>';
 	$nmxhwLang['dis_nmtw'] = '[内蒙团委]<br>';
 	$nmxhwLang['dis_free'] = '[自由作品]<br>';
 	$nmxhwLang['dis_nmwturl'] = 'wt/';
 	$nmxhwLang['dis_nmtwurl'] = 'tw/';
 	$nmxhwLang['dis_nmfree'] = '[自由创造]<br>';
 	$nmxhwLang['dis_freeurl'] = 'free/';
 	$nmxhwLang['dis_allurl'] = 'index.html';
 	$nmxhwLang['dis_vote'] = '[投票]<br>';
 	$nmxhwLang['dis_adminvote'] = '[评分]<br>';
 	$nmxhwLang['dis_pass'] = '通过';
 	$nmxhwLang['dis_delete'] = '删除';
 	
 	$nmxhwLang['disuinfo_title'] = '&nbsp;选手的信息';
 	
 	$nmxhwLang['disuinfo_y'] = '通过';
 	$nmxhwLang['disuinfo_n'] = '未验证';
 	$nmxhwLang['disuinfo_c'] = '删除';
 	
 	$nmxhwLang['disuinfo_0'] = '姓名：';
 	$nmxhwLang['disuinfo_1'] = '性别：';
 	$nmxhwLang['disuinfo_2'] = '年龄：';
 	$nmxhwLang['disuinfo_3'] = '学校类别：';
 	$nmxhwLang['disuinfo_4'] = '所在学校：';
 	$nmxhwLang['disuinfo_5'] = '注册日期：';
 	$nmxhwLang['disuinfo_6'] = '开始上传：';
 	$nmxhwLang['disuinfo_7'] = '固定电话：';
 	$nmxhwLang['disuinfo_8'] = '移动电话：';
 	$nmxhwLang['disuinfo_9'] = '电子邮件：';
 	$nmxhwLang['disuinfo_10'] = '个人网址：';
 	$nmxhwLang['disuinfo_11'] = '密码：';
 	$nmxhwLang['disuinfo_12'] = '所在地区：';
 	$nmxhwLang['disuinfo_13'] = '联系地址：';
 	$nmxhwLang['disuinfo_14'] = '邮编：';
 	$nmxhwLang['disuinfo_15'] = '最近登陆IP：';
 	$nmxhwLang['disuinfo_16'] = '最近登陆时间：';
 	$nmxhwLang['disuinfo_17'] = '参赛状态：';
 	$nmxhwLang['disuinfo_18'] = '投票数：';
 	
 	$nmxhwLang['dis_script1'] ='<script language="JavaScript" type="text/JavaScript">
					function DeleteOrPass(dpstate,userid)
					{
					   	if(dpstate == "d"){
						    if (confirm("请确认是否真的要删除" + userid + "选手？如果确定，将删除该选手的所有已上传的作品！")) 
						 	{     
						 	   window.location.href="http://202.99.225.146/index.php?target=12&action=delete&userid=" + userid;
							}
						}
						if(dpstate == "p"){
						    if (confirm("请确认是否真的要让" + userid + "选手参赛？")) 
							{     
						 	   window.location.href="http://202.99.225.146/index.php?target=12&action=pass&userid=" + userid;
							}
						}
					}
					</script>';
 	
 	$nmxhwLang['vot_back'] = '<< 返回';
 	$nmxhwLang['vot_thank'] = '您对该选手的投票已被记录。<p>感谢您对内蒙古学生的鼓励和支持及对新华网的关注！';
 	$nmxhwLang['vot_sorry'] = '对不起！您对该选手已投过票了。<p>' . $nmxhwLang['title'];
 	
 	$nmxhwLang['degree'] = '分数范围 0 - 100:';
 	$nmxhwLang['adminnotes'] = '对不起！您是管理员，不能参加评分。<p>' . $nmxhwLang['title'];  
 	$nmxhwLang['adminsorry'] = '对不起！您对该选手已评分了，不能再次评分。<p>' . $nmxhwLang['title'];
 	$nmxhwLang['admindegree'] = '对不起！分数只能从0-100之间选择。<p>' . $nmxhwLang['title'];
 	$nmxhwLang['adminsuccess'] = '您对该用户的评分已被记录。谢谢！<p>' . $nmxhwLang['title'];
 	
 	$nmxhwLang['a_firstdir'] = '根目录';
 	$nmxhwLang['a_parentsdir'] = '上级目录';
 	$nmxhwLang['a_selectedfile'] = '点击的目录或文件：';
 	$nmxhwLang['a_delete'] = '删除';
 	$nmxhwLang['a_renameto'] = '重命名为：';
 	$nmxhwLang['a_ok1'] = '改名';
 	$nmxhwLang['a_createdir'] = '新建目录：';
 	$nmxhwLang['a_ok2'] = '建立';
 	$nmxhwLang['a_upload'] = '上传文件：';
 	$nmxhwLang['a_ok3'] = '上传';
 	$nmxhwLang['a_notes'] = 'free = 自由创造网页目录； wt = 网通形象页目录； tw = 团委形象页目录； logo = 个人形象图片目录；点击“>>”进入相应目录。';
 	$nmxhwLang['a_nofile'] = '空目录！';
 	$nmxhwLang['a_confirmdelete'] = '请确认是否真的要删除？';
 	$nmxhwLang['a_confirmrename'] = '请确认是否真的要重命名？';
 	$nmxhwLang['a_confirmupload'] = '请确认是否真的要上传此文件？';
 	$nmxhwLang['a_confirmcreate'] = '请确认是否真的要新建此目录？';
 	
 	$nmxhwLang['session_table']   = 'wybs_session';
 	$nmxhwLang['user_table']      = 'wybs_user';
 	$nmxhwLang['admin_table']     = 'wybs_administrator';
 	$nmxhwLang['fullvar_table']   = 'wybs_fullvar';
 	$nmxhwLang['operation_table'] = 'wybs_dboperation';
 	$nmxhwLang['adminvote_table'] = 'wybs_adminvote';
 	$nmxhwLang['guestvot_table']  = 'wybs_guestvot';
 	
 	$nmxhwLang['remaindate'] = '倒计时:';
 	$nmxhwLang['nocountdate'] = '未开始';
 	$nmxhwLang['remainday'] = '天';
 	$nmxhwLang['usspace'] = '已用空间';
 	$nmxhwLang['respace'] = '剩余';
 	$nmxhwLang['tempsorry'] = '下周举行完毕新闻发布会议后就可以上传了。敬请留意！<br>2003年12月21日';
 	
 	$nmxhwLang['helptext'] = '<table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
  <tr> 
    <td height="40" colspan="2" align="center"><font size="4">《使用指南》</font> <hr width="50%" size="1"></td>
  </tr>
  <tr> 
    <td colspan="2"><strong>一、网站浏览者：</strong></td>
  </tr>
  <tr> 
    <td width="10">&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr> 
          <td width="20" align="right" valign="top">1、</td>
          <td>选择《参赛作品》，浏览选手递交的已完成的网页作品，或给自己喜欢的作品投票。</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">2、</td>
          <td>选择《历届优秀作品》，浏览往届比赛的优秀作品。</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2"><strong>二、参加比赛者：</strong></td>
  </tr>
  <tr> 
    <td width="10">&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr> 
          <td width="20" align="right" valign="top">1、</td>
          <td>选择《报名参赛》，阅读《报名须知》，仔细填写报名表格（以后我们和选手主要通过电子邮件联系），最后记录本系统给您提供的《用户名称》和《用户密码》。</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">2、</td>
          <td>选择《登录》，填写自己的《用户名称》和《用户密码》，并选择《用户类型》为“学生“，登录以后选择《文件管理》上传和管理自己的作品。</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">3、</td>
          <td>《文件管理》里面点击文件名或目录名进行编辑，点击 &gt;&gt; 进入目录。</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">4、</td>
          <td>根据比赛规则，您的《用户名称》在您第一次上传一个文件开始计时，7天以后会自动失效。并且再经过一天的管理员审核期，本系统会自动把您的作品添加到《参赛作品》里面。因此选手最好把自己的作品准备好以后再递交，并在7天内必须修改完毕因上传而产生的错误。</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">5、</td>
          <td>特别注意的是在本系统内大赛《开始时间》和《结束时间》是第一位的。只要过了大赛规定的比赛时间，参赛选手的一切活动都会被禁止。</td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">6、</td>
          <td>选优标准：浏览者投票数+评委分数。</td>
        </tr>
        <tr> 
          <td colspan="2" valign="top"><strong><font color="#FF0000">注意事项：</font></strong></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">本系统环境为unix，因此严格区分所有的英文单词的大小写。如果您把作品上传以后出现图片丢失或链接错误的现象，请首先检查是否由大小写不一致而引起。</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">目录名、文件名和路径千万不要采用中文，可以转换成汉语拼音或英文。中文会在unix操作系统或dreamweaver等网页制作工具里产生一些错误。</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">可上传文件类型(.htm .html .js .jpg .gif .png .swf 
            .css)共8种，增加类型请给brgd@nm114.net发电子邮件说明情况。</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">非空目录无法删除。目录、文件名称不要采用任何常用符号，有可能无法操作。</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">您的每个参赛作品的首页名称必须是index.html。</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">logo目录下面必须包括一个宽80高100个像素的gif自创图片，主要作用是尽量吸引别人访问你的作品。</font></td>
        </tr>
        <tr> 
          <td align="right" valign="top"><font color="#FF0000">--</font></td>
          <td><font color="#FF0000">图片路径、链接路径等请采用相对路径，千万不要采用绝对路径。</font></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2"><strong>三、评委和管理员：</strong></td>
  </tr>
  <tr> 
    <td width="10">&nbsp;</td>
    <td>另行通知。</td>
  </tr>
  <tr> 
    <td colspan="2"><strong>四、常见问题：</strong></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="3" class="t3">
        <tr> 
          <td width="20" align="right" valign="top">1、</td>
          <td><p>问：为什么只能上传静态网页，能不能上传动态网页，比如php,asp,jsp等？<br>
              答：本届不行，下一届我们会设程序比赛项目。 </p></td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">2、</td>
          <td><p>问：音频和视频文件，能不能上传？<br>
              答：本届不行，这次我们作为组织者对参赛者的要求是网页在兼容性非常强的前提下具有实用性和观赏性。也许以后我们考虑设一个多媒体网页设计比赛组。</p></td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">3、</td>
          <td><p>问：.class文件，能不能上传？<br>
              答：本届不行，学生只使用applet对java语言是一种歪曲，对HTML语言也会缺乏了解。也有和问题2一样的理由。</p></td>
        </tr>
        <tr> 
          <td width="20" align="right" valign="top">4、</td>
          <td><p>问：为什么总登录不上去？<br>
              答：非常对不起！这是我们工作上的失误。我们在客户端没有明确提示密码必须在6位数以内，结果导致很多用户的密码（超过6位的）被截短到6位。所以请同学们输入你们密码的前6位登录。</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center"><hr width="70%" size="1">咨询电话：0471-6929422;6957173&nbsp;&nbsp;&nbsp;&nbsp; 技术支持：brgd@nm114.net</td>
  </tr>
</table>';
?>