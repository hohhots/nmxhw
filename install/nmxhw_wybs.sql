# phpMyAdmin MySQL-Dump
# version 2.3.0
# http://phpwizard.net/phpMyAdmin/
# http://www.phpmyadmin.net/ (download page)
#
# 主机: localhost
# 建立日期: Jan 20, 2004 at 09:46 AM
# 伺服机版本: 3.23.54
# PHP 版本: 4.2.2
# 数据库 : `nmxhw_wybs`
# --------------------------------------------------------

#
# 数据表的结构 `wybs_administrator`
#

CREATE TABLE wybs_administrator (
  admin_id smallint(5) unsigned NOT NULL default '0',
  admin_name varchar(25) NOT NULL default '',
  sex enum('男','女') NOT NULL default '男',
  birthday year(4) NOT NULL default '0000',
  company varchar(100) NOT NULL default '',
  admin_level enum('评','管') NOT NULL default '评',
  user_pass varchar(6) NOT NULL default '',
  telephone varchar(30) NOT NULL default '',
  mobile varchar(30) default NULL,
  address varchar(255) NOT NULL default '',
  zip varchar(6) NOT NULL default '',
  PRIMARY KEY  (admin_id)
) TYPE=MyISAM;

#
# 导出下面的数据库内容 `wybs_administrator`
#

# --------------------------------------------------------

#
# 数据表的结构 `wybs_adminvote`
#

CREATE TABLE wybs_adminvote (
  vote_id smallint(5) unsigned NOT NULL default '0',
  user_id int(10) unsigned NOT NULL default '0',
  admin_id smallint(5) unsigned NOT NULL default '0',
  vote_date date NOT NULL default '0000-00-00',
  degree smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (vote_id)
) TYPE=MyISAM;

#
# 导出下面的数据库内容 `wybs_adminvote`
#

# --------------------------------------------------------

#
# 数据表的结构 `wybs_dboperation`
#

CREATE TABLE wybs_dboperation (
  optisestime int(11) unsigned NOT NULL default '0',
  optialltime int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (optisestime)
) TYPE=MyISAM;

#
# 导出下面的数据库内容 `wybs_dboperation`
#

INSERT INTO wybs_dboperation VALUES (1074555569, 1074516990);
# --------------------------------------------------------

#
# 数据表的结构 `wybs_fullvar`
#

CREATE TABLE wybs_fullvar (
  run_id smallint(5) unsigned NOT NULL default '0',
  begin_date date NOT NULL default '0000-00-00',
  end_date date NOT NULL default '0000-00-00',
  visitcou int(10) unsigned NOT NULL default '0',
  reguser int(10) unsigned default NULL,
  payuser int(10) unsigned default NULL,
  allstate enum('Y','N') NOT NULL default 'Y',
  PRIMARY KEY  (run_id)
) TYPE=MyISAM;

#
# 导出下面的数据库内容 `wybs_fullvar`
#

INSERT INTO wybs_fullvar VALUES (1, '2003-11-30', '2004-03-30', 3738, NULL, NULL, 'Y');
# --------------------------------------------------------

#
# 数据表的结构 `wybs_guestvot`
#

CREATE TABLE wybs_guestvot (
  sessionval char(32) NOT NULL default '',
  user_id int(10) unsigned NOT NULL default '0',
  votetime int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (sessionval,user_id)
) TYPE=MyISAM;

#
# 导出下面的数据库内容 `wybs_guestvot`
#

# --------------------------------------------------------

#
# 数据表的结构 `wybs_passuser`
#

CREATE TABLE wybs_passuser (
  user_id int(10) unsigned NOT NULL default '0',
  user_name varchar(25) NOT NULL default '',
  sex enum('男','女') NOT NULL default '男',
  age smallint(5) unsigned NOT NULL default '0',
  gtype enum('中学生','大学生') NOT NULL default '中学生',
  school varchar(100) NOT NULL default '',
  email varchar(30) default NULL,
  www varchar(30) default NULL,
  region enum('呼和浩特市','包头市','鄂尔多斯市','赤峰市','通辽市','呼伦贝尔市','阿拉善盟','巴音淖尔盟','锡林郭勒盟','乌海市','乌兰察布盟','兴安盟') NOT NULL default '呼和浩特市',
  prize enum('特等奖','一等奖','二等奖','三等奖') default NULL,
  PRIMARY KEY  (user_id)
) TYPE=MyISAM;

#
# 导出下面的数据库内容 `wybs_passuser`
#

# --------------------------------------------------------

#
# 数据表的结构 `wybs_session`
#

CREATE TABLE wybs_session (
  user_id int(10) unsigned NOT NULL default '0',
  sessionval char(32) NOT NULL default '',
  usertype enum('G','R','A') NOT NULL default 'G',
  registorder enum('1','2','3') default NULL,
  session_start int(11) NOT NULL default '0',
  PRIMARY KEY  (user_id,sessionval)
) TYPE=MyISAM;

#
# 导出下面的数据库内容 `wybs_session`
#

INSERT INTO wybs_session VALUES (0, 'af409f5e74caf14f3abf55ed2bdafc63', 'G', NULL, 1074563132);
INSERT INTO wybs_session VALUES (0, '8db72293073d22a0e45870c3836aba3c', 'G', NULL, 1074562894);
# --------------------------------------------------------

#
# 数据表的结构 `wybs_user`
#

CREATE TABLE wybs_user (
  user_id int(10) unsigned NOT NULL default '0',
  user_name varchar(25) NOT NULL default '',
  sex enum('男','女') NOT NULL default '男',
  age smallint(5) unsigned NOT NULL default '0',
  grouptype enum('中学生','大学生') NOT NULL default '中学生',
  school varchar(100) NOT NULL default '',
  registdate date NOT NULL default '0000-00-00',
  beginupdate varchar(11) default NULL,
  telephone varchar(30) default NULL,
  mobile varchar(30) default NULL,
  email varchar(30) default NULL,
  www varchar(30) default NULL,
  user_pass varchar(6) NOT NULL default '',
  region enum('呼和浩特市','包头市','鄂尔多斯市','赤峰市','通辽市','呼伦贝尔市','阿拉善盟','巴音淖尔盟','锡林郭勒盟','乌海市','乌兰察布盟','兴安盟') NOT NULL default '呼和浩特市',
  address varchar(255) NOT NULL default '',
  zip varchar(6) NOT NULL default '',
  ip varchar(15) default NULL,
  logintime varchar(30) default NULL,
  checkall enum('Y','N') NOT NULL default 'N',
  vote_degree int(10) default NULL,
  PRIMARY KEY  (user_id)
) TYPE=MyISAM;

#
# 导出下面的数据库内容 `wybs_user`
#

INSERT INTO wybs_user VALUES (11001, '赵志宇', '男', 22, '大学生', '内蒙古财经学院', '2003-12-10', NULL, '04716288482', '13947198182', 'jordan8009_cn@sina.com', 'http://xystudio.6to23.com', '110827', '呼和浩特市', '内蒙古财经学院2000经济学系', '010051', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11002, '浩仔', '男', 22, '大学生', '内蒙古计算机专修学院', '2003-12-10', NULL, '04712244793', '13015108039', 'chcall1501@hotmail.com', 'fifacz.6to23.com', '1', '呼和浩特市', '内蒙古自治区呼和浩特市文化宫街12号院5号楼2单元11号', '010020', 'da1585cc', '2004-01-10 12:43:34', 'N', NULL);
INSERT INTO wybs_user VALUES (11003, '胖胖', '男', 22, '大学生', '内蒙古计算机专修学院', '2003-12-10', NULL, '04712244793', '13015108039', 'chcall1501@hotmail.com', '', '1', '呼和浩特市', '内蒙古自治区呼和浩特市文化宫街', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11004, '于涛', '男', 20, '大学生', '内蒙古师范大学', '2003-12-10', NULL, '04715980012', '', 'mouse_610@163.com', '', '859708', '呼和浩特市', '内蒙古师范大学生命科学与技术学院02生物技术--于涛', '010000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11005, '郭越', '男', 20, '中学生', '鄂尔多斯市二中', '2003-12-10', NULL, '04778529647', '', 'icyangelwolf@msn.com', 'http://wolf.aoaoao.net', '198501', '鄂尔多斯市', '鄂尔多斯市二中高三14班', '017000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11006, '钝钝', '女', 29, '大学生', '内蒙古财经学院', '2003-12-10', NULL, '6516397', '', 'dundun@public.hh.nm.cn', '', '211121', '呼和浩特市', '海东路52号', '010051', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11007, '姜丰波', '男', 19, '大学生', '内蒙古工业学校', '2003-12-10', NULL, '5837576', '0471-5837576', 'jdjia@163.com', 'http://www.suibian.com.cn', 'jdjiaj', '呼和浩特市', '呼伦北路89号六楼网络部', '010050', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11008, '付旭辉', '男', 21, '大学生', '内蒙古工业大学电力学院电力工程系', '2003-12-10', NULL, '04713600534', '', 'dick8262@sina.com', '', '836423', '呼和浩特市', '内蒙古呼和浩特金川开发区电力学院电力系2002（2）', '010080', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11009, '冯潇', '女', 22, '大学生', '内蒙古财经学院', '2003-12-10', NULL, '04714341968', '13704759972', 'xiaoxiao5770@sina.com', '', '139047', '呼和浩特市', '内蒙古财经学院2000级金融（1）班', '010051', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11010, '阿铭', '男', 20, '大学生', '内蒙古师范大学', '2003-12-10', NULL, '04714601835', '', 'cnam_155@hotmail.com', '', 'aming1', '呼和浩特市', '内蒙古师范大学计算机系02级4班', '010022', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11011, '于君鹏', '男', 23, '大学生', '集宁师专', '2003-12-11', NULL, '04742257903', '', 'yujunpeng1981@yahoo.com.cn', '', 'yujunp', '乌兰察布盟', '集宁师专高等专科学校化学系2001农艺2班', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11014, '大灰狼', '男', 28, '大学生', '北京大学心理系', '2003-12-11', NULL, '04788212396', '', 'small_9498@sina.com', 'small_9498@sina.com', '822898', '巴音淖尔盟', '内蒙古临河', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11013, '侯伟', '男', 18, '中学生', '内蒙古杭锦后旗奋斗中学0219班', '2003-12-11', NULL, '04784913225', '', 'hou_wei1234@163.com', '', '586490', '巴音淖尔盟', '内蒙古杭锦后旗奋斗中学0219班', '015400', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11015, '倪向前', '男', 20, '大学生', '内蒙古工业大学', '2003-12-12', NULL, '6576519', '126-5122955', 'xnini16@china.com.cn', 'xnini.zhibo.net', '840715', '呼和浩特市', '内蒙古工业大学东区六号324舍', '010062', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11016, '赵军', '男', 20, '中学生', '内蒙古临河水校', '2003-12-12', NULL, '04732040092', '126-5987059', 'lhzhaojun@126.com', '', 'zj2040', '巴音淖尔盟', '内蒙古临河市百乐宫二楼创新电子', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11017, '吴建伟', '男', 22, '大学生', '内蒙古商贸职业学院', '2003-12-12', NULL, '04745903113', '', 'webmaster@7345.com', 'http://www.7345.com', '198228', '呼和浩特市', '内蒙古察右中旗西街32号2＃', '013550', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11018, '郝健佳', '男', 17, '中学生', '内蒙古四子王旗一中', '2003-12-12', NULL, '04745207258', '', 'hjj-009@163.com', 'http://www.hqnpc.com', 'fobjuf', '乌兰察布盟', '内蒙古四子王旗一中', '011800', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11019, '袁伟', '男', 18, '中学生', '内蒙古临河市第一职业中专', '2003-12-12', NULL, '04788610578', '', 'fkeuping@sohu.com', '', '198602', '巴音淖尔盟', '内蒙古临河市第一职业中专计二6班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11020, '李红玉', '女', 23, '大学生', '包头师范学院', '2003-12-12', NULL, '04723992721', '', 'damoxueying@sohu.com', '', '541890', '包头市', '包头师范学院物理系2000级（一）班', '014030', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11021, '李茂熔', '男', 19, '中学生', '内蒙古临河市一中', '2003-12-12', NULL, '04784531213', '', 'lxmhk_wra@sina.com', 'http://loveyftk.nease.net', '617449', '巴音淖尔盟', '内蒙古临河市一中高三16班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11022, '宋哲武', '男', 18, '大学生', '内蒙古大学', '2003-12-13', NULL, '04714685631', '13948431469', 'szwugx@163.com', 'www.shongzhewu.com', 'philip', '呼和浩特市', '内蒙古呼和浩特市塞罕区华联名仕园A座一单元201室', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11023, '常屹', '男', 26, '大学生', '内蒙古大学', '2003-12-13', NULL, '04713362050', '', 'changyi@zlinfo.com.cn', '', 'cy7712', '呼和浩特市', '内蒙古呼和浩特市凯旋广场88号', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11024, '格勒娃', '男', 21, '大学生', '内蒙古民族高等专科学校', '2003-12-13', NULL, '04838221385', '13947151943', 'smgib@yahoo.com.cn', 'http://smgib.zhibo.net', 'bingdi', '阿拉善盟', '内蒙古民族高等专科学校计算机系2000级本科班', '010051', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11025, '李建', '男', 21, '大学生', '内蒙古医药专修学院', '2003-12-13', NULL, '13947109730', '', 'yixueyuan001@163.com', 'http://www.waxx.5888.com', 'woaini', '呼和浩特市', '内蒙古呼和浩特市新城区大台什路医药专修学院中西医8班', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11026, '张猛', '男', 21, '大学生', '河套大学', '2003-12-13', NULL, '04788723478', '8822690', 'root@zmmiao.com', 'www.zmmiao.com', '8033', '巴音淖尔盟', '河套大学2002届计算机2班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11027, '苗雨', '男', 18, '中学生', '鄂托克旗中学', '2003-12-13', NULL, '04776211986', '', 'myerdos@eyou.com', 'http://www.9xcn.com', '426753', '鄂尔多斯市', '内蒙古 鄂尔多斯市 鄂托克旗中学 高153班', '016100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11028, '周建新', '男', 18, '中学生', '内蒙 临河市 农机校北环中学', '2003-12-13', NULL, '04788327975', '', '1234569480691@sohu.com', '', 'zjx861', '巴音淖尔盟', '内蒙 临河市 农机校北环中学  高二(1班)', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11029, '潘东升', '男', 17, '中学生', '内蒙古五原县第一中学', '2003-12-13', NULL, '04785227459', '', 'pandongsheng@eyou.com', 'http://heike.china-flower.com/', 'heike1', '巴音淖尔盟', '内蒙古五原县第一中学231班', '015100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11030, '李相君', '男', 18, '大学生', '内蒙古工业大学', '2003-12-13', NULL, '04716593673', '', 'lixiangjun9981@163.com', 'http://lxj.myrice.com', '121230', '呼和浩特市', '内蒙古工业大学东区2好公寓213室', '010062', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11031, '李耀', '男', 18, '大学生', '内蒙古五原一中 229班', '2003-12-13', NULL, '04785217105', '13947847169', 'liyao1985@eyou.com', 'http://liyao.upweb.net/', '198451', '巴音淖尔盟', '内蒙古五原一中 229班 李耀', '015100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11032, '王贵飚', '男', 18, '中学生', '巴盟临河水校', '2003-12-14', NULL, '04788415739', '', 'ddzxwin@sian.com.cn', '', '219011', '巴音淖尔盟', '巴盟临河水校01级软件班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11033, '周伟伟', '女', 22, '大学生', '内蒙古大学', '2003-12-14', NULL, '04748271213', '0474-8881258', 'zhouweiwei@eyou.com', '', '801215', '乌兰察布盟', '乌兰察布盟', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11034, '邢超', '男', 18, '中学生', '内蒙古杭锦后旗奋斗中学', '2003-12-15', NULL, '04786634253', '', 'xingchao19860815@yahoo.com.cn', '', '198608', '巴音淖尔盟', '内蒙古杭锦后旗奋斗中学0311班', '015400', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11035, '彩虹雨', '女', 15, '中学生', '巴盟中学', '2003-12-15', NULL, '2210198', '04788818185', 'Fairy.9@tom.com', '', '221019', '呼和浩特市', '临河市', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11036, '刘宏斌', '男', 23, '大学生', '内蒙古师范大学', '2003-12-15', NULL, '04714390450', '', 'liuhongbin81@163.com', '', 'wanglu', '呼和浩特市', '内蒙古师范大学计算机系2001级2班', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11037, '魏新', '男', 20, '中学生', '巴盟中学', '2003-12-15', NULL, '04788230680', '', 'diexueemo@163.com', 'http://catboycat.cctvt.com', 'cat823', '巴音淖尔盟', '内蒙古临河市解放东街6348信箱', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11038, '吴湘宁', '男', 23, '大学生', '自学考试（内蒙财经大学）', '2003-12-15', NULL, '04716502022', '13611330800', 'xiangning@wu.com.cn', 'http://nmhappy.126.com', '136113', '呼和浩特市', '内蒙古呼和浩特市第五干休所（赛马场干休所）', '010050', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11039, '张小军', '男', 29, '大学生', '内蒙古广播电视大学', '2003-12-15', NULL, '04788218797', '04788810268', 'bmzj2008@tom.com', 'http://bmzj.126.com', 'jun615', '巴音淖尔盟', '内蒙古巴彦淖尔盟实验小学美术组王敏（转张小军）', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11040, '白雪冰', '男', 21, '大学生', '内蒙古师范大学', '2003-12-17', NULL, '04714392011', '', 'bxft@imnu.edu.cn', 'http://bxft.126.com', 'bxft20', '呼和浩特市', '内蒙古师范大学网络信息中心', '010022', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11041, '蔚鹏飞', '男', 20, '大学生', '内蒙古电子信息职业技术学院', '2003-12-17', NULL, '07414601342', '', 'weipflove@163.com', '', 'wpf131', '呼和浩特市', '内蒙古电子信息职业技术学院计0331班', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11042, '李喜在', '男', 23, '大学生', '内蒙古师范大学', '2003-12-17', NULL, '04715835737', '04715835737', 'lxz150124@163.com', 'www.daxwanx.8u8.com', '258212', '呼和浩特市', '内蒙古师范大学计算机系2002级5班', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11043, '丁健', '男', 17, '中学生', '内蒙临河三中', '2003-12-17', NULL, '04788218595', '', 'nuoman@126.com', '', 'nuoman', '巴音淖尔盟', '内蒙临河城关信用社崔佳慧转', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11044, '王顺来', '男', 18, '中学生', '内蒙古临河第一职业中专', '2003-12-17', NULL, '04733991331', '-', 'wsllovecfy@21cn.com', 'http://zsbt.35123.net', 'whxhnw', '乌海市', '内蒙古临河第一职业中专计算机二年级四班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11045, '云忠平', '男', 23, '大学生', '美国新创电脑学院内蒙古分院', '2003-12-17', NULL, '04714954247', '13009524276', 'hhhtyzp@tom.com', '', '200181', '呼和浩特市', '呼市金川开发区北区美国新创电脑学院内蒙古分院', '010080', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11046, '纪长军', '男', 24, '大学生', '集宁师范高等专科学校', '2003-12-17', NULL, '04748283501', '13999536439', ' gopl8@126.com', 'http://go163.ku.net', '152323', '乌兰察布盟', '集宁师范高等专科学校体育系王俊平[老师收]转纪长军', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11047, '杨勐', '男', 22, '大学生', '中国科学技术大学', '2003-12-18', NULL, '04763753750', '', 'yangmeng@mcoce.com', 'http://www.mcoce.com', 'yangxi', '赤峰市', '内蒙古赤峰市喀喇沁旗锦山镇河滨路文化局家属楼2单元5楼 252号', '014400', '3d8673b7', '2003-12-29 07:42:06', 'N', NULL);
INSERT INTO wybs_user VALUES (11048, '李锦坤', '男', 22, '中学生', '内蒙古电子信息职业技术学院', '2003-12-18', NULL, '04714601384', '', 'lijinkun@mail.china.com', 'http://lx303.126.com', 'langli', '呼和浩特市', '内蒙古电子信息职业技术学院计014班', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11049, '董磊', '男', 22, '大学生', '呼伦贝尔学院 QQ:32488802', '2003-12-18', NULL, '04708336684', '13847009297', 'network@public.hh.nm.cn', 'viovi@126.com', 'compaq', '呼伦贝尔市', '呼伦贝尔市海拉尔区芦苇路19号，环卫局 董磊 QQ:32488802', '010000', 'db9f1f23', '2004-01-06 19:34:18', 'N', NULL);
INSERT INTO wybs_user VALUES (11050, '包晓风', '男', 23, '大学生', '微软授权（内蒙古）教育考试中心', '2003-12-18', NULL, '04712292664', '', 'bxiaofeng@163.com', 'www.etlw.com', '112111', '呼和浩特市', '内蒙古大学文体馆102室2002级平面班', '010021', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11051, '李剑锋', '男', 20, '大学生', '内蒙古工业大学', '2003-12-18', NULL, '04715951779', '', 'barry_sad@sina.com.cn', 'www.barrylee.533.net', '198304', '呼和浩特市', '呼和浩特市二毛西小区50#信箱', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11052, '林杰', '男', 18, '大学生', '内蒙古电子信息职业技术学院', '2003-12-19', NULL, '04714601943', '', 'lx303@qq.com', 'http://lx303.y365.com', 'lx1986', '呼和浩特市', '内蒙古电子信息职业技术学院计014', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11053, '张毅', '男', 21, '中学生', '内蒙古自治区巴彦淖尔盟临河市卫生学校', '2003-12-19', NULL, '04788310351', '', 'xinyuanxinyuan@eyou.com', 'http://tymh.126.com', '831024', '巴音淖尔盟', '内蒙古自治区巴彦淖尔盟511地址1队', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11054, '海楠', '女', 21, '大学生', '包头职业技术学院', '2003-12-19', NULL, '04726941225', '13674726017', 'hainan1983@21cn.com', '', '198312', '包头市', '包头职业技术学院201134班', '014030', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11055, '赵宇', '男', 15, '中学生', '临河四中', '2003-12-19', NULL, '04788412811', '', 'tank1300958.student@sina.com', '', 'zhaoyu', '巴音淖尔盟', '临河市大学路育才小区30栋311号', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11056, '菅永明', '男', 22, '大学生', '临河市凯旋夜校', '2003-12-19', NULL, '04788824778', '', 'admin@linhe.net', 'http://www.linhe.net', 'abcx12', '巴音淖尔盟', '内蒙古临河北二街', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11057, '赵宇', '男', 15, '中学生', '临河四中', '2003-12-20', NULL, '04788412811', '', 'zhaoyu12334.student@sina.com', '', 'zhaoyu', '巴音淖尔盟', '内蒙古巴盟临河市利民东街育才小区30栋3单元1楼1号', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11058, '杨红瑞', '女', 24, '大学生', '内蒙古自治区财经学院', '2003-12-20', NULL, '04716265348', '13039508191', 'xzy3895@sina.com.cn', '', '197911', '呼和浩特市', '内蒙古自治区财投资评审心中', '010200', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11059, '李伟', '男', 18, '中学生', '吧盟电大', '2003-12-20', NULL, '4662294', '', 'fengxiaozi110@163.com', '', 'woaili', '巴音淖尔盟', '吧盟电大中计十班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11060, '申月霞', '女', 19, '中学生', '职教中心', '2003-12-21', NULL, '04733012997', '13019581075', 'shenyubxia@yahoo.com.cn', 'www.shenyuexia', '198510', '巴音淖尔盟', '巴盟杭后职教中心电十一班', '015400', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11061, '赵佳', '男', 19, '大学生', '巴盟电大', '2003-12-21', NULL, '04788414795', '', 'renke_530@163.com', '', 'wm7539', '巴音淖尔盟', '巴盟电大中计10班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11062, '田丰', '女', 20, '中学生', '内蒙古巴盟中学', '2003-12-21', NULL, '04788259595', '', 'mewyf520@eyou.com', '', '586912', '巴音淖尔盟', '内蒙古巴盟中学高二2班田丰收', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11063, '贾圃睿', '男', 17, '中学生', '五原县', '2003-12-21', NULL, '04785215494', '', '13304786466@133165.com', '', '961880', '巴音淖尔盟', '五原县一中高一14班', '015100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11064, '特力贡', '男', 18, '中学生', '巴盟蒙中', '2003-12-21', NULL, '2212741', '', 'tlgdrn@yahoo.com.cn', '', '591885', '巴音淖尔盟', '123', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11065, '杨洋', '男', 16, '中学生', '铁路中学', '2003-12-21', NULL, '04782227192', '', 'yycs.wd@163.com', 'yycs.91i.net', '852719', '巴音淖尔盟', '内蒙古临河市铁路中学189班', '015000', '3de93088', '2004-01-10 19:42:12', 'N', NULL);
INSERT INTO wybs_user VALUES (11066, '田野', '男', 20, '大学生', '内蒙古工业大学电力学院', '2003-12-21', NULL, '04712298250', '', 'tianye198554@163.com', '', '198554', '呼和浩特市', '内蒙古工业大学电力学院02级计算机系一班', '010080', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11067, '韩东', '男', 23, '大学生', '北京邮电大学', '2003-12-21', NULL, '04785913351', '', 'han666@etang.com', '', '520131', '巴音淖尔盟', '内蒙古邮电学校计算机通信0001', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11069, '孙俊伟', '男', 19, '中学生', '内蒙古商都二中理(三)班', '2003-12-22', NULL, '04747599004', '13847405972', 'sjwzyl@china.com.cn', 'sunjunwei.xilubbs.com', '198501', '乌兰察布盟', '内蒙古商都县高勿素乡34号', '013450', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11070, '王嘉锡', '男', 19, '中学生', '师大附中', '2003-12-22', NULL, '04714392961', '', 'wjxlele@163.com', 'www.leer.co.tv', '596954', '呼和浩特市', '内蒙古呼和浩特师范大学家属楼13号楼2单元6号', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11071, '周央', '男', 22, '大学生', '呼伦贝尔学院', '2003-12-23', NULL, '04748382515', '', 'zyjnqx@163.com', '', '200112', '乌兰察布盟', '集宁市桥西红旗巷13号', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11072, '郝贵龙', '男', 20, '中学生', '五原三中', '2003-12-23', NULL, '5819839', '', 'haoguilong@vip.sina.com', 'http://glwww.126.com', 'qazwsx', '巴音淖尔盟', '内蒙古五原三中15班', '015100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11073, '李伟', '男', 18, '中学生', '巴盟电大', '2003-12-24', NULL, '04788414795', '', 'liwe2582525775@163.com', 'www.woailiwei520.go.nease.net', '097338', '巴音淖尔盟', '巴盟电大中计十班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11074, '李冶', '男', 18, '大学生', '内蒙古呼伦贝尔大雁电视大学', '2003-12-24', NULL, '04708631290', '', 'liyecn@vip.sina.com', 'http://liye.y365.com', '198521', '呼伦贝尔市', '内蒙古呼伦贝尔大雁培训中心204室', '014010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11075, '杜苏和', '男', 21, '大学生', '呼伦贝尔学院', '2003-12-24', NULL, '04708259423', '', 'szwdudu@sohu.com', '', '047052', '乌兰察布盟', '呼伦贝尔学院2001级计算机系8班', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11076, '刘伟', '男', 19, '大学生', '内蒙古电子信息职业技术学院', '2003-12-24', NULL, '04714601965', '', '0425lw@163.com', '', '811797', '呼和浩特市', '内蒙古电子信息职业技术学院计014班', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11077, '王鸿宣', '男', 19, '中学生', '河北省康保一中', '2003-12-25', NULL, '04747983342', '', 'hong-19854@163.com', 'guiao.nease.net', 'wzdwzd', '乌兰察布盟', '河北省康保一中', '013130', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11078, '康乐', '男', 16, '中学生', '临河市铁路中学', '2003-12-25', NULL, '04788242356', '', 'kerlybobo@163.com', '', 'kerlya', '巴音淖尔盟', '内蒙古临河市曙光西街付16号', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11079, '李伟', '男', 18, '中学生', '巴盟电大', '2003-12-25', NULL, '04784662294', '', 'han_ting_520@163.com', '', '097338', '巴音淖尔盟', '巴盟电大中计十班', '015043', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11080, '苏宇', '男', 22, '大学生', '内蒙古大学艺术学院', '2003-12-25', NULL, '04763771000', '13171407375', 'tuilu_0425@sina.com', '', '375123', '呼和浩特市', '内蒙古大学艺术学院2000届美术系电脑美术专业046号信箱', '010010', 'db9f07d6', '2004-01-01 09:01:01', 'N', NULL);
INSERT INTO wybs_user VALUES (11081, '曹晨', '男', 21, '大学生', '乌盟党校法律专业', '2003-12-25', NULL, '04746286390', '', 'jncrc@crcoo.com', 'jndns.con.cn', 'wj8632', '乌兰察布盟', '内蒙古乌盟察右后旗铁路通信工区', '012400', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11082, '满达', '男', 22, '大学生', '鄂市蒙中', '2003-12-27', NULL, '04702322995', '04702322995', 'manda@eyou.com', 'www.manda.com/', '520520', '鄂尔多斯市', '大撒法', '017300', '3dec5506', '2003-12-27 07:06:33', 'N', NULL);
INSERT INTO wybs_user VALUES (11083, '郝健佳', '男', 16, '中学生', '内蒙古四子王旗一中', '2003-12-27', NULL, '04745205153', '', 'hjj-009@163.com', '', 'fobjuf', '乌兰察布盟', '内蒙古四子王旗一中高一10班', '011800', 'db9f3b1c', '2003-12-27 10:33:49', 'N', NULL);
INSERT INTO wybs_user VALUES (11084, '魏新', '男', 20, '中学生', '巴盟中学', '2003-12-27', NULL, '04788230680', '13019580928', 'diexueemo@163.com', 'http://catboycat.cctvt.com', 'cat823', '巴音淖尔盟', '内蒙古临河市解放东街6348信箱', '015000', 'db9f3719', '2004-01-03 14:05:07', 'N', NULL);
INSERT INTO wybs_user VALUES (11085, '苗雨', '男', 18, '中学生', '鄂托克旗中学', '2003-12-27', NULL, '04776211986', '', 'info@9xcn.com', 'http://www.9xcn.com', '426753', '鄂尔多斯市', '内蒙古 鄂尔多斯市 鄂托克旗中学 高153班', '016100', 'db9f30bf', '2004-01-04 12:44:35', 'N', NULL);
INSERT INTO wybs_user VALUES (11086, '翟钰鑫', '男', 23, '大学生', '内蒙古科技大学', '2003-12-27', NULL, '04725950603', '013191483828', 'yujiaxiaoyue@163.com', '', '1981jm', '包头市', '包头市昆区阿尔丁大街7#50#信箱', '014010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11087, '田丰', '女', 18, '中学生', '内蒙古巴盟中学', '2003-12-27', NULL, '04788259595', '', 'mywyf520@eyou.com', '', '586912', '巴音淖尔盟', '内蒙古巴盟中学高二2班田丰收', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11095, '李伟', '男', 18, '中学生', '巴盟电大', '2003-12-28', NULL, '04784662294', '', 'fengxiaozi110@163.com', '', 'l123', '巴音淖尔盟', '乌拉特后旗东升庙', '015043', 'db9f373d', '2003-12-28 11:55:08', 'N', NULL);
INSERT INTO wybs_user VALUES (11089, '刘永鑫', '男', 22, '大学生', '内蒙古师范大学', '2003-12-27', NULL, '04714390374', '', 'lyx_55.student@sina.com', '', '810525', '呼和浩特市', '内蒙古师范大学计算机系2001级5班', '010022', 'ca63ff3b', '2003-12-27 18:18:28', 'N', NULL);
INSERT INTO wybs_user VALUES (11090, '侯勇', '男', 18, '中学生', '内蒙古 达拉特旗 第一中学', '2003-12-27', NULL, '13848475629', '', 'guxueyimeng@eyou.com', 'http://diyuzhadan.hangye.cn', '198611', '鄂尔多斯市', '内蒙古 达拉特旗 第一中学  高二<<3>>班  侯勇', '014300', 'ca63eeae', '2003-12-29 15:14:18', 'N', NULL);
INSERT INTO wybs_user VALUES (11091, '杨洋', '男', 16, '中学生', '铁路中学', '2003-12-28', NULL, '04782227192', '', 'yycs.wd@163.com', 'yycs.91i.net', '852719', '巴音淖尔盟', '内蒙古临河市铁路中学189班', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11092, '锡林呼', '男', 21, '大学生', '内蒙古民族高等专科学校', '2003-12-28', NULL, '04716500254', '5731821', 'thecloud@163.com', '', '12c19', '呼和浩特市', '内蒙古呼和浩特市麻花板邮局359信箱', '010051', '3d8a408a', '2003-12-28 07:13:40', 'N', NULL);
INSERT INTO wybs_user VALUES (11093, '胖胖', '男', 22, '大学生', '内蒙古计算机专修学院', '2003-12-28', '1072565692', '04716929422', '', 'chcall1501@hotmail.com', '', '1501', '呼和浩特市', '内蒙古计算机专修学院', '010020', 'cacf9f9a', '2004-01-06 05:46:47', 'N', NULL);
INSERT INTO wybs_user VALUES (11094, '特力贡', '男', 18, '中学生', '临河蒙中', '2003-12-28', NULL, '0478212478', '', 'tlgdrn@yahoo.com.cn', '', 'tlg103', '巴音淖尔盟', '临河蒙中103', '015000', 'db9f33e1', '2003-12-28 09:27:06', 'N', NULL);
INSERT INTO wybs_user VALUES (11096, '徐志勇', '男', 22, '大学生', '内蒙古财经学院', '2003-12-28', NULL, '04716504066', '13948432607', 'nmsky@nmsky.com', 'http://www.nmsky.com', 'nmsky', '呼和浩特市', '内蒙古财经学院西区02计算机应用班', '010070', 'd35d9b16', '2004-01-04 20:21:46', 'N', NULL);
INSERT INTO wybs_user VALUES (11097, '袁志鹏', '男', 23, '大学生', '包头职业技术学院', '2003-12-28', NULL, '04704214889', '13947255355', 'laseryzp@sohu.com', '', '1y0z9p', '包头市', '内蒙古阿荣旗公安局楼下水利建华复印部', '014030', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11098, '杨勐', '男', 23, '大学生', '中国科技大学', '2003-12-28', NULL, '04763753750', '', 'yangmeng817@163.com', '', 'yangxi', '赤峰市', '内蒙古赤峰市喀喇沁旗文化局家属楼二单元 252 号', '010000', 'db9f2e8e', '2003-12-28 15:40:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11099, '潘东升', '男', 17, '中学生', '内蒙古五原县第一中学231班', '2003-12-29', '1074416982', '04785227459', '', 'pandongsheng@eyou.com', 'http;//heike.china-flower.com', '198512', '巴音淖尔盟', '内蒙古五原县第一中学231班', '015100', 'db9f33a0', '2004-01-19 14:47:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11100, '李强', '男', 20, '大学生', '现在退学', '2003-12-29', NULL, '04786632034', '没有', 'lhlqi@eyou.com', 'lhlqi.upweb.net', '138456', '巴音淖尔盟', '内蒙古杭锦后旗', '015000', 'db94af67', '2003-12-29 13:25:48', 'N', NULL);
INSERT INTO wybs_user VALUES (11101, '李剑锋', '男', 20, '大学生', '内蒙古工业大学', '2003-12-29', NULL, '04715951779', '', 'barry_sad@sina.com', 'www.barrylee.533.net', '830412', '呼和浩特市', '呼和浩特市二毛西小区50#信箱', '010020', 'da159281', '2003-12-29 15:36:39', 'N', NULL);
INSERT INTO wybs_user VALUES (11102, '李昊', '男', 19, '大学生', '内蒙古医学院', '2003-12-30', NULL, '04788256566', '13171408785', 'lihao65@163.com', 'http://wind.web165.com', '6566', '呼和浩特市', '内蒙古医学院 基础医学部 2003级 临床10班', '010059', '3d8a6f4a', '2003-12-31 16:58:30', 'N', NULL);
INSERT INTO wybs_user VALUES (11103, '朱艳', '女', 20, '大学生', '东软信息技术学院', '2003-12-30', NULL, '04716553390', '', 'zhuyan_2002@163.com', '', '830826', '呼和浩特市', '呼和浩特市海东路百货库东巷紫藤花园一号楼3单元', '010010', '3d89aa3b', '2003-12-30 14:05:01', 'N', NULL);
INSERT INTO wybs_user VALUES (11104, '张旋', '男', 20, '中学生', '五原一中', '2003-12-30', NULL, '5216916', '', 'xiaojiao_2002@eyou.com', '', '123456', '巴音淖尔盟', '内蒙古五原一中', '015100', 'ca63fb55', '2003-12-31 06:48:06', 'N', NULL);
INSERT INTO wybs_user VALUES (11105, '孙俊伟', '男', 19, '中学生', '内蒙古商都二中', '2003-12-31', NULL, '04747599004', '13847405972', 'sjwzyl@china.com.cn', '', '840514', '乌兰察布盟', '内蒙古商都小海子镇34号', '013450', 'db9f3c9e', '2004-01-19 06:06:40', 'N', NULL);
INSERT INTO wybs_user VALUES (11106, '孙卫冬', '男', 25, '大学生', '内蒙古大学', '2003-12-31', '1072824659', '04716610144', '', 'swd_czt@nmg.gov.cn', 'http://xuehome.myrice.com', 'xsjswd', '呼和浩特市', '新华大街一号7号楼410', '010055', 'cacf9f9a', '2004-01-06 05:42:09', 'N', NULL);
INSERT INTO wybs_user VALUES (11107, '田丰', '女', 18, '中学生', '巴盟中学', '2003-12-31', NULL, '04788259595', '', 'mywyf520@eyou.com', '', '111222', '巴音淖尔盟', '内蒙古临河市巴盟中学高二2班田丰收', '015000', 'db9f3749', '2004-01-01 11:12:45', 'N', NULL);
INSERT INTO wybs_user VALUES (11108, '徐世雄', '男', 17, '中学生', '阿盟一中', '2003-12-31', NULL, '04836853629', '', 'xsx_boy@hotmail.com', '', '1987', '阿拉善盟', '阿盟一中高二十班', '014000', '3d8a5528', '2003-12-31 15:35:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11109, '刘晓明', '男', 18, '中学生', '内蒙古通辽市科尔沁区第五中学', '2004-01-01', NULL, '04757223290', '', 'heroming@126.com', '', '18528', '呼和浩特市', '内蒙古通辽市科尔沁区第五中学一年（23）班', '010000', 'da15e2da', '2004-01-01 08:38:49', 'N', NULL);
INSERT INTO wybs_user VALUES (11110, '金元跃', '男', 22, '大学生', '内蒙古财经学院', '2004-01-01', NULL, '04714689714', '13948190513', '万一1982wanyi@sina.com', '', '825122', '呼和浩特市', '内蒙古财经学院高职部计算机应用一班', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11111, '岳娜', '女', 20, '大学生', '湖北经济管理大学', '2004-01-01', NULL, '04788314343', '', 'yuena_8314343@163.com', '', '357468', '呼和浩特市', '湖北经济管理大学2002级电子商务11班', '015000', 'ca672702', '2004-01-01 23:13:08', 'N', NULL);
INSERT INTO wybs_user VALUES (11112, '侯伟', '男', 18, '中学生', '内蒙古杭锦后旗奋斗中学', '2004-01-02', NULL, '04784913225', '', 'houwei_1314@163.com', 'http://0219.con.cn', '675544', '巴音淖尔盟', '内蒙古杭锦后旗奋斗中学0219班 侯伟收', '015400', 'da158645', '2004-01-02 06:33:31', 'N', NULL);
INSERT INTO wybs_user VALUES (11113, '郑伟华', '男', 22, '大学生', '内蒙古大学', '2004-01-02', NULL, '04714990139', '', 'zwhf370@sohu.com', 'http://longko.35123.net', '820411', '呼和浩特市', '内蒙古大学生命科学学院2001生态与环境科学系', '010021', 'cacf9885', '2004-01-02 12:31:06', 'N', NULL);
INSERT INTO wybs_user VALUES (11114, '赵佳', '男', 19, '大学生', '巴盟电大', '2004-01-03', NULL, '04788414795', '', 'renke_530@163.com', '', '753951', '巴音淖尔盟', '巴盟电大中计10班', '015000', 'db9f370b', '2004-01-03 06:11:38', 'N', NULL);
INSERT INTO wybs_user VALUES (11115, '李明', '男', 19, '大学生', '广播电视学校', '2004-01-03', NULL, '04715901571', '', 'ywstv@163.com', '', '11111', '呼和浩特市', '内蒙古呼和浩特市', '010031', 'db9f2808', '2004-01-03 10:39:36', 'N', NULL);
INSERT INTO wybs_user VALUES (11116, '纪长军', '男', 23, '大学生', '集宁师专', '2004-01-03', NULL, '04748283651', '13999536439', 'gopl8@126.com', 'http://go163.ku.net', '152323', '乌兰察布盟', '集宁师专体育系', '012000', 'da54475e', '2004-01-03 11:46:50', 'N', NULL);
INSERT INTO wybs_user VALUES (11117, '包文', '男', 23, '大学生', '内蒙古大学', '2004-01-03', NULL, '04714990383', '13948129323', 'hairi@263.net', '', 'mother', '呼和浩特市', '内蒙古大学2000信管（3）班', '010021', 'db9f07fa', '2004-01-05 15:47:21', 'N', NULL);
INSERT INTO wybs_user VALUES (11118, '王坤侠', '男', 23, '大学生', '内蒙古工业大学', '2004-01-04', NULL, '13500615297', '13500615297', 'simanhappy@sina.com', 'http://www.sheny.com', '1qaz', '呼和浩特市', '呼和浩特市爱民路221号', '010062', 'cacf17ab', '2004-01-04 12:58:36', 'N', NULL);
INSERT INTO wybs_user VALUES (11119, '张炜', '男', 16, '中学生', '内蒙古锡林浩特市第三中学', '2004-01-04', NULL, '04798239139', '13604792752', 'maomao2517@sina.com', '', '2752', '锡林郭勒盟', '内蒙古锡林浩特市第三中学184班', '026000', 'db9f3e1b', '2004-01-15 12:16:24', 'N', NULL);
INSERT INTO wybs_user VALUES (11120, '尹常青', '男', 19, '大学生', '包头钢院', '2004-01-04', NULL, '04726984514', '', 'changqingsg@otmail.com', '', '198555', '包头市', '包头钢院高职25号信箱', '014010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11121, '王志军', '男', 20, '大学生', '辽宁省鞍山科技大学', '2004-01-05', NULL, '04125927684', '', 'wangzhijun_nmln@163.com', '', 'wzj123', '赤峰市', '辽宁省鞍山科技大学高职院电气系计专013班', '114044', 'da18e5cc', '2004-01-05 05:44:12', 'N', NULL);
INSERT INTO wybs_user VALUES (11122, '曹晨', '男', 22, '大学生', '乌盟电大', '2004-01-05', NULL, '04746201816', '04746286390', 'jncrc@crcoo.com', '', '8632', '乌兰察布盟', '内蒙古乌盟察右后旗白音察干通信工区', '012400', 'db9f3cf4', '2004-01-05 09:10:30', 'N', NULL);
INSERT INTO wybs_user VALUES (11123, '张宇星', '男', 24, '大学生', '内蒙古农业大学', '2004-01-05', NULL, '04714318978', '13848114594', 'zyx1981@126.com', '', '123456', '呼和浩特市', '内蒙古呼和浩特市大台什路邮政小区', '010010', 'ddc785cf', '2004-01-05 12:26:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11124, '迟浩', '男', 22, '大学生', '内蒙古计算机专修学院', '2004-01-05', NULL, '04716929422', '13015108039', 'chcall1501@hotmail.com', 'fifacz.6to23.com', '305005', '呼和浩特市', '内蒙古呼和浩特市文化宫街12号院5号楼2单元11号', '010020', 'da158605', '2004-01-08 10:38:58', 'N', NULL);
INSERT INTO wybs_user VALUES (11125, '邢利君', '男', 20, '大学生', '内蒙古电力学校计算机03班', '2004-01-05', NULL, '04715896231', '', '81800304@163.com', 'http://xy5.7i24.com', '198411', '呼和浩特市', '呼和浩特市东郊110国道552公里盘古科技园信息部', '010070', '3d8a428a', '2004-01-05 13:57:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11126, '刘飞', '男', 19, '中学生', '通辽市第五中学高2,11班', '2004-01-06', NULL, '04758266538', '', 'lengyu2003@sohu.com', '', '37488', '通辽市', '通辽市第五中学高2,11班', '028000', 'ddc7b4ce', '2004-01-06 05:25:33', 'N', NULL);
INSERT INTO wybs_user VALUES (11127, '石浩', '男', 20, '中学生', '呼和浩特电力学校', '2004-01-06', NULL, '04797568292', '', 'shihao00010@163.com', '', '228540', '锡林郭勒盟', '二连浩特', '026000', 'db9f3e05', '2004-01-08 10:20:28', 'N', NULL);
INSERT INTO wybs_user VALUES (11128, '李云涛', '男', 29, '大学生', '哈理工成人教育学院', '2004-01-06', NULL, '04705853605', '', 'mlp_321654@163.com', '', '8848', '呼伦贝尔市', '内蒙古呼伦贝尔盟鄂伦春旗甘河林业第二中学', '165419', 'db9f1d85', '2004-01-06 17:49:59', 'N', NULL);
INSERT INTO wybs_user VALUES (11129, '李相君', '男', 19, '大学生', '内蒙古工业大学', '2004-01-06', NULL, '04716593673', '04788810115', 'friendjuly@sina.com', 'http://lxj.myrice.com', '235689', '呼和浩特市', '内蒙古工业大学东区2号公寓213室', '010062', 'cacf1f37', '2004-01-07 02:25:05', 'N', NULL);
INSERT INTO wybs_user VALUES (11130, '赵君', '男', 22, '大学生', '内蒙古财经学院', '2004-01-07', NULL, '04778372070', '13904772859', 'zj-an007@163.com', '', '111111', '鄂尔多斯市', '鄂尔多斯市东胜区吉劳庆南路8号街坊9#', '017000', '3d8a7f9c', '2004-01-07 06:54:15', 'N', NULL);
INSERT INTO wybs_user VALUES (11131, '李佩', '男', 21, '大学生', '内蒙古呼伦贝尔学院', '2004-01-07', NULL, '04778682291', '13947794410', 'zswx520@tom.com', 'www.zswx163.com/bbs', '840601', '鄂尔多斯市', '内蒙古呼伦贝尔学院网络二班', '021008', '3d8a531c', '2004-01-07 09:36:52', 'N', NULL);
INSERT INTO wybs_user VALUES (11132, '沈传龙', '男', 26, '大学生', '内蒙古集宁师范高等专科学校', '2004-01-07', NULL, '04748281594', '', 'shencl22@163.com', 'http://scl.5188.org', '2131', '乌兰察布盟', '内蒙古集宁师范高等专科学校、计算机系', '012000', '3d8676d0', '2004-01-08 07:26:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11133, '于鑫泉', '男', 22, '中学生', '内蒙古警察职业学院', '2004-01-07', NULL, '04716589565', '13947109554', 'nline@china.com.cn', 'www.flowsand.com', '123456', '呼和浩特市', '内蒙古警察职业学院02侦查三区队', '010051', '3d8a4bb0', '2004-01-07 13:11:39', 'N', NULL);
INSERT INTO wybs_user VALUES (11134, '王宁', '男', 26, '大学生', '北邮内蒙古函授站', '2004-01-07', NULL, '04788316626', '04788819161', 'yourwn@163.net', '', '2004', '巴音淖尔盟', '临河市胜利南路77号巴盟通信实业公司', '015000', 'db9f3447', '2004-01-07 19:47:29', 'N', NULL);
INSERT INTO wybs_user VALUES (11135, '王云龙', '男', 16, '中学生', '内蒙古兴和一中', '2004-01-08', NULL, '04747209686', '', 'wangyunlong168@263.sina.com', '', 'wylsxl', '乌兰察布盟', '内蒙古兴和县第一中学（199）班', '013650', 'db9f3bd2', '2004-01-08 08:08:10', 'N', NULL);
INSERT INTO wybs_user VALUES (11136, '李伟琪', '男', 22, '大学生', '呼伦贝尔学院', '2004-01-08', '1073612923', '13847011429', '', 'aini_831@163.com', '8688.6to23.com', '23276', '呼伦贝尔市', '呼伦贝尔学院2002级计算机系科学教育一班', '021008', 'db9f3bb7', '2004-01-14 11:14:47', 'N', NULL);
INSERT INTO wybs_user VALUES (11137, '李耀', '男', 18, '中学生', '内蒙古五原一中 229班', '2004-01-08', NULL, '04785217105', '', 'liyao1985@eyou.com', 'http://liyao.upweb.net', '198451', '巴音淖尔盟', '内蒙古五原一中 229班', '015100', 'db9f33a5', '2004-01-08 12:59:30', 'N', NULL);
INSERT INTO wybs_user VALUES (11138, '王嘉锡', '男', 19, '中学生', '师大附中', '2004-01-09', NULL, '04714392961', '', 'wjxlele@163.com', 'www.leer.co.tv', '569506', '呼和浩特市', '内蒙古呼和浩特市师范大学家属楼13号楼2单元6号', '010010', 'd35d9ff9', '2004-01-10 16:57:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11139, '向锦程', '男', 18, '中学生', '呼和浩特市第十八中学', '2004-01-10', NULL, '04716304445', '', 'ccdoit@vip.sina.com', '', '168169', '呼和浩特市', '呼和浩特市文化宫街18号（2）', '010020', 'ddc7859f', '2004-01-10 07:24:03', 'N', NULL);
INSERT INTO wybs_user VALUES (11140, '我是你巴', '男', 22, '大学生', '5 可', '2004-01-10', NULL, '04716929422', '13815067862', 'ZB@163.com', 'www.cctv.com', '159753', '锡林郭勒盟', '00000000000', '011110', 'db9f3e17', '2004-01-10 11:25:56', 'N', NULL);
INSERT INTO wybs_user VALUES (11141, '王宇', '男', 26, '大学生', '北京邮电大学函授学院内蒙古函授总站', '2004-01-10', NULL, '04788316626', '', 'wynmhao@163.net', '', '781115', '巴音淖尔盟', '内蒙古临河市胜利南路77号 王宁收转', '015000', 'db9f36c3', '2004-01-10 11:44:36', 'N', NULL);
INSERT INTO wybs_user VALUES (11142, '李冶', '男', 19, '大学生', '大雁电视大学', '2004-01-10', NULL, '04708631290', '', 'liyecn@vip.sina.com', '', 'liye', '呼伦贝尔市', '内蒙古呼伦贝尔大雁培训中心204室', '021122', 'db9f201c', '2004-01-10 20:57:31', 'N', NULL);
INSERT INTO wybs_user VALUES (11143, '姒同诺亚', '男', 16, '中学生', '满洲里市第七中学', '2004-01-11', NULL, '04706523092', '', 'a32d@tom.com', '', '138', '呼伦贝尔市', '满洲里市扎区校园街', '021410', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11144, '王海辰熙', '男', 16, '中学生', '内蒙古二连浩特市中学106班', '2004-01-12', NULL, '04797533168', '', 'wanghaicx@163.com', '', '990918', '锡林郭勒盟', '内蒙古二连浩特市中学106班', '011100', 'ddc7bfd5', '2004-01-12 08:42:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11145, '丛杰', '男', 21, '大学生', '赤峰学院', '2004-01-12', NULL, '04778530767', '13019572968', 'tansuanna@hotmail.com', 'http://cjcity.51.net', '198277', '鄂尔多斯市', '内蒙古自治区赤峰市赤峰学院315#信箱', '024000', '3d8a7f89', '2004-01-12 16:21:39', 'N', NULL);
INSERT INTO wybs_user VALUES (11146, '刘志刚', '男', 20, '大学生', '新创国际电脑学院内蒙古分院', '2004-01-12', NULL, '04712298360', '', 'cycj2000@yahoo.com.cn', '', 'lzg', '鄂尔多斯市', '新创国际电脑学院内蒙古分院03级计算机系', '010080', '3d8a7f89', '2004-01-12 17:21:25', 'N', NULL);
INSERT INTO wybs_user VALUES (11147, '包磊', '男', 20, '大学生', '呼伦贝尔学院', '2004-01-13', NULL, '04708221947', '', 'baolei6220@163.com', '', '198427', '呼伦贝尔市', '呼伦贝尔市海拉尔区呼伦贝尔学院03级工程监理', '021008', 'db9f1f2c', '2004-01-13 14:07:26', 'N', NULL);
INSERT INTO wybs_user VALUES (11148, '打算', '男', 21, '大学生', 'nadmfadsfadf', '2004-01-13', '1073990843', '123123123', '', '1@11.com', '', '123123', '呼和浩特市', 'adfadf', '100021', 'ca6ab6b0', '2004-01-16 14:57:58', 'N', NULL);
INSERT INTO wybs_user VALUES (11149, '白俊', '男', 20, '大学生', '呼伦贝尔市广播电视大学', '2004-01-14', NULL, '04708255330', '', 'hu_baijun@163.com', '', 'baijun', '呼伦贝尔市', '呼伦贝尔市广播电视大学2000级计算机班', '021008', '3d8a4d8c', '2004-01-14 11:02:34', 'N', NULL);
INSERT INTO wybs_user VALUES (11150, '马春艳', '女', 19, '大学生', '内蒙古广播电视大学呼伦贝尔分校', '2004-01-14', NULL, '04708267525', '', 'machunyanliang@163.com', '', 'mayan', '呼和浩特市', '内蒙古广播电视大学呼伦贝尔分校2000级计算机专业', '021008', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11151, '伊布勒图', '男', 20, '大学生', '内蒙古农业大学', '2004-01-14', NULL, '04714302079', '', 'vanillasky625@sohu.com', '', '840124', '锡林郭勒盟', '内蒙古农业大学西区2号学生公寓楼629寝室', '010030', 'db94bd43', '2004-01-14 12:45:16', 'N', NULL);
INSERT INTO wybs_user VALUES (11152, '马超', '男', 21, '大学生', '呼论贝尔市广播电视大学', '2004-01-14', NULL, '04708237450', '', 'machaoaily@163.com', '', 'machao', '呼伦贝尔市', '呼论贝尔市广播电视大学2000级计算机班', '201008', '3d8a4d8c', '2004-01-14 14:35:21', 'N', NULL);
INSERT INTO wybs_user VALUES (11153, '白恩和', '男', 21, '中学生', '内蒙古包头轻工业学校', '2004-01-14', NULL, '04705351828', '04725517050', 'wangzhong5845201@163.com', '', '123456', '呼伦贝尔市', '内蒙古包头轻工业学校', '014045', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11154, '牛宇', '男', 21, '中学生', '阳光电脑学校', '2004-01-15', NULL, '04702227048', '13947019176', 'lywl2002@263.net', '', '512356', '呼伦贝尔市', '内蒙古海拉尔铁路111楼1单元8号', '021000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11155, '白杨', '男', 17, '中学生', '内蒙古呼和浩特第六中学高一1班', '2004-01-15', NULL, '04713955711', '', 'tree_tree1987@msn.com', '', '323810', '呼和浩特市', '内蒙古呼和浩特光明路光明小区142#信箱', '010050', '3d8a40bf', '2004-01-15 19:03:28', 'N', NULL);
INSERT INTO wybs_user VALUES (11156, '李莹', '女', 17, '中学生', '秋实', '2004-01-15', '1074183402', '04716960486', '', 'zhong_linger@163.com', 'http://web.212.cn/pingyoushe', 'vsly', '呼和浩特市', '内蒙古农业大学附属秋实中学高一２班', '010000', 'db9f04db', '2004-01-16 00:16:05', 'N', NULL);
INSERT INTO wybs_user VALUES (11157, '王欣', '男', 22, '大学生', '黑龙江科技学院', '2004-01-16', NULL, '04708322167', '', 'wangxin_517@163.com', '', '832216', '呼伦贝尔市', '海拉尔第二中学高一语文组 王雁', '021000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11158, '佟鑫', '男', 16, '中学生', '呼和浩特市第5中学', '2004-01-16', NULL, '04716981396', '13948438217', 'a6981396@public.hh.nm.cn', '', 'txzm53', '呼和浩特市', '呼和浩特市第5中学高1（3）班', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11159, '牛磊', '男', 16, '中学生', '内蒙古乌海市海矿四中', '2004-01-16', NULL, '04735858313', '13848312850', 'niu_VIP@tom.com', 'http://t3100.5944.net/', 'niulei', '乌海市', '内蒙古乌海市海矿四中 初三（2）班 牛磊', '016000', '3d8a623e', '2004-01-18 23:50:04', 'N', NULL);
INSERT INTO wybs_user VALUES (11160, '张帆', '男', 18, '大学生', '内蒙古微软考试教育中心', '2004-01-16', NULL, '6682736', '', 'zhangfan@qixidi.com', '', 'zf3120', '呼和浩特市', '呼和浩特市赛罕区郊区政府北巷国勘院家属楼9号楼5单元10号', '010010', '3d8a41a8', '2004-01-16 18:29:51', 'N', NULL);
INSERT INTO wybs_user VALUES (11161, '李耀', '男', 18, '中学生', '内蒙古五原县第一中学', '2004-01-17', '1074299687', '04785227459', '', 'liyao19851212@eyou.com', 'liyao.upweb.net', '000000', '巴音淖尔盟', '内蒙古五原县第一中学229班', '015100', 'db9f33a0', '2004-01-19 08:42:29', 'N', NULL);
INSERT INTO wybs_user VALUES (11162, '张翠萍', '女', 42, '大学生', '北京有点大学函授', '2004-01-17', NULL, '04748850186', '', 'baixue252002@163.com', '', '741212', '乌兰察布盟', '乌盟通信分公司', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11163, '郑宇', '男', 21, '大学生', '大连理工大学', '2004-01-17', NULL, '04112171531', '13074171376', 'jiaoxue001@163.com', 'pchot.wx-e.com', '820817', '乌海市', '大连市开发区铁山西路31号3#531', '116600', 'da15f682', '2004-01-17 18:16:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11164, '巴特', '男', 20, '大学生', '计算机学校', '2004-01-17', NULL, '04708322826', '', 'lengfeng2008@xinhuanet.com', '', '123456', '呼伦贝尔市', '内蒙古呼伦贝尔市海拉尔区河东天信小区5号楼', '021000', 'db9f1ce7', '2004-01-17 18:57:58', 'N', NULL);
INSERT INTO wybs_user VALUES (11165, '闫麟飞', '男', 25, '大学生', '内蒙古广播电视大学', '2004-01-18', NULL, '04754210693', '13904751817', 'yanlinfei115@eyou.com', '', '618618', '呼和浩特市', '内蒙古通辽市科尔沁区霍林河大街42号', '028001', '3dec2f71', '2004-01-18 04:25:00', 'N', NULL);
INSERT INTO wybs_user VALUES (11166, '牛磊', '男', 16, '中学生', '内蒙古乌海市矿四中初三（2）班', '2004-01-18', '1074438818', '04735858313', '', 'niu_VIP@tom.com', '', 'niulei', '乌海市', '内蒙古乌海是五湖泵页有限公司保卫科 牛秀生转牛磊（收）', '016000', '3d8a623e', '2004-01-18 23:11:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11167, '崔跃华', '男', 25, '大学生', '呼伦贝尔学院', '2004-01-19', NULL, '04707883506', '', 'wxf007@163.com', '', '123456', '呼伦贝尔市', '呼伦贝尔学院图书馆', '021008', 'db9f2118', '2004-01-19 16:33:28', 'N', NULL);
INSERT INTO wybs_user VALUES (11168, '王峥', '男', 19, '中学生', '内蒙古集宁一中', '2004-01-19', NULL, '04743903292', '13948593291', 'wzlycz@163.com', 'http://www.nmgjnyz.com/wz', '123456', '乌兰察布盟', '内蒙古察右前旗宏富巷23排1号', '012200', 'db9f3c8e', '2004-01-19 18:15:50', 'N', NULL);

