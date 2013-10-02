# phpMyAdmin MySQL-Dump
# version 2.3.0
# http://phpwizard.net/phpMyAdmin/
# http://www.phpmyadmin.net/ (download page)
#
# ����: localhost
# ��������: Jan 20, 2004 at 09:46 AM
# �ŷ����汾: 3.23.54
# PHP �汾: 4.2.2
# ���ݿ� : `nmxhw_wybs`
# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_administrator`
#

CREATE TABLE wybs_administrator (
  admin_id smallint(5) unsigned NOT NULL default '0',
  admin_name varchar(25) NOT NULL default '',
  sex enum('��','Ů') NOT NULL default '��',
  birthday year(4) NOT NULL default '0000',
  company varchar(100) NOT NULL default '',
  admin_level enum('��','��') NOT NULL default '��',
  user_pass varchar(6) NOT NULL default '',
  telephone varchar(30) NOT NULL default '',
  mobile varchar(30) default NULL,
  address varchar(255) NOT NULL default '',
  zip varchar(6) NOT NULL default '',
  PRIMARY KEY  (admin_id)
) TYPE=MyISAM;

#
# ������������ݿ����� `wybs_administrator`
#

# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_adminvote`
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
# ������������ݿ����� `wybs_adminvote`
#

# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_dboperation`
#

CREATE TABLE wybs_dboperation (
  optisestime int(11) unsigned NOT NULL default '0',
  optialltime int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (optisestime)
) TYPE=MyISAM;

#
# ������������ݿ����� `wybs_dboperation`
#

INSERT INTO wybs_dboperation VALUES (1074555569, 1074516990);
# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_fullvar`
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
# ������������ݿ����� `wybs_fullvar`
#

INSERT INTO wybs_fullvar VALUES (1, '2003-11-30', '2004-03-30', 3738, NULL, NULL, 'Y');
# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_guestvot`
#

CREATE TABLE wybs_guestvot (
  sessionval char(32) NOT NULL default '',
  user_id int(10) unsigned NOT NULL default '0',
  votetime int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (sessionval,user_id)
) TYPE=MyISAM;

#
# ������������ݿ����� `wybs_guestvot`
#

# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_passuser`
#

CREATE TABLE wybs_passuser (
  user_id int(10) unsigned NOT NULL default '0',
  user_name varchar(25) NOT NULL default '',
  sex enum('��','Ů') NOT NULL default '��',
  age smallint(5) unsigned NOT NULL default '0',
  gtype enum('��ѧ��','��ѧ��') NOT NULL default '��ѧ��',
  school varchar(100) NOT NULL default '',
  email varchar(30) default NULL,
  www varchar(30) default NULL,
  region enum('���ͺ�����','��ͷ��','������˹��','�����','ͨ����','���ױ�����','��������','�����׶���','���ֹ�����','�ں���','�����첼��','�˰���') NOT NULL default '���ͺ�����',
  prize enum('�صȽ�','һ�Ƚ�','���Ƚ�','���Ƚ�') default NULL,
  PRIMARY KEY  (user_id)
) TYPE=MyISAM;

#
# ������������ݿ����� `wybs_passuser`
#

# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_session`
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
# ������������ݿ����� `wybs_session`
#

INSERT INTO wybs_session VALUES (0, 'af409f5e74caf14f3abf55ed2bdafc63', 'G', NULL, 1074563132);
INSERT INTO wybs_session VALUES (0, '8db72293073d22a0e45870c3836aba3c', 'G', NULL, 1074562894);
# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_user`
#

CREATE TABLE wybs_user (
  user_id int(10) unsigned NOT NULL default '0',
  user_name varchar(25) NOT NULL default '',
  sex enum('��','Ů') NOT NULL default '��',
  age smallint(5) unsigned NOT NULL default '0',
  grouptype enum('��ѧ��','��ѧ��') NOT NULL default '��ѧ��',
  school varchar(100) NOT NULL default '',
  registdate date NOT NULL default '0000-00-00',
  beginupdate varchar(11) default NULL,
  telephone varchar(30) default NULL,
  mobile varchar(30) default NULL,
  email varchar(30) default NULL,
  www varchar(30) default NULL,
  user_pass varchar(6) NOT NULL default '',
  region enum('���ͺ�����','��ͷ��','������˹��','�����','ͨ����','���ױ�����','��������','�����׶���','���ֹ�����','�ں���','�����첼��','�˰���') NOT NULL default '���ͺ�����',
  address varchar(255) NOT NULL default '',
  zip varchar(6) NOT NULL default '',
  ip varchar(15) default NULL,
  logintime varchar(30) default NULL,
  checkall enum('Y','N') NOT NULL default 'N',
  vote_degree int(10) default NULL,
  PRIMARY KEY  (user_id)
) TYPE=MyISAM;

#
# ������������ݿ����� `wybs_user`
#

INSERT INTO wybs_user VALUES (11001, '��־��', '��', 22, '��ѧ��', '���ɹŲƾ�ѧԺ', '2003-12-10', NULL, '04716288482', '13947198182', 'jordan8009_cn@sina.com', 'http://xystudio.6to23.com', '110827', '���ͺ�����', '���ɹŲƾ�ѧԺ2000����ѧϵ', '010051', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11002, '����', '��', 22, '��ѧ��', '���ɹż����ר��ѧԺ', '2003-12-10', NULL, '04712244793', '13015108039', 'chcall1501@hotmail.com', 'fifacz.6to23.com', '1', '���ͺ�����', '���ɹ����������ͺ������Ļ�����12��Ժ5��¥2��Ԫ11��', '010020', 'da1585cc', '2004-01-10 12:43:34', 'N', NULL);
INSERT INTO wybs_user VALUES (11003, '����', '��', 22, '��ѧ��', '���ɹż����ר��ѧԺ', '2003-12-10', NULL, '04712244793', '13015108039', 'chcall1501@hotmail.com', '', '1', '���ͺ�����', '���ɹ����������ͺ������Ļ�����', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11004, '����', '��', 20, '��ѧ��', '���ɹ�ʦ����ѧ', '2003-12-10', NULL, '04715980012', '', 'mouse_610@163.com', '', '859708', '���ͺ�����', '���ɹ�ʦ����ѧ������ѧ�뼼��ѧԺ02���＼��--����', '010000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11005, '��Խ', '��', 20, '��ѧ��', '������˹�ж���', '2003-12-10', NULL, '04778529647', '', 'icyangelwolf@msn.com', 'http://wolf.aoaoao.net', '198501', '������˹��', '������˹�ж��и���14��', '017000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11006, '�۶�', 'Ů', 29, '��ѧ��', '���ɹŲƾ�ѧԺ', '2003-12-10', NULL, '6516397', '', 'dundun@public.hh.nm.cn', '', '211121', '���ͺ�����', '����·52��', '010051', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11007, '���Შ', '��', 19, '��ѧ��', '���ɹŹ�ҵѧУ', '2003-12-10', NULL, '5837576', '0471-5837576', 'jdjia@163.com', 'http://www.suibian.com.cn', 'jdjiaj', '���ͺ�����', '���ױ�·89����¥���粿', '010050', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11008, '�����', '��', 21, '��ѧ��', '���ɹŹ�ҵ��ѧ����ѧԺ��������ϵ', '2003-12-10', NULL, '04713600534', '', 'dick8262@sina.com', '', '836423', '���ͺ�����', '���ɹź��ͺ��ؽ𴨿���������ѧԺ����ϵ2002��2��', '010080', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11009, '����', 'Ů', 22, '��ѧ��', '���ɹŲƾ�ѧԺ', '2003-12-10', NULL, '04714341968', '13704759972', 'xiaoxiao5770@sina.com', '', '139047', '���ͺ�����', '���ɹŲƾ�ѧԺ2000�����ڣ�1����', '010051', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11010, '����', '��', 20, '��ѧ��', '���ɹ�ʦ����ѧ', '2003-12-10', NULL, '04714601835', '', 'cnam_155@hotmail.com', '', 'aming1', '���ͺ�����', '���ɹ�ʦ����ѧ�����ϵ02��4��', '010022', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11011, '�ھ���', '��', 23, '��ѧ��', '����ʦר', '2003-12-11', NULL, '04742257903', '', 'yujunpeng1981@yahoo.com.cn', '', 'yujunp', '�����첼��', '����ʦר�ߵ�ר��ѧУ��ѧϵ2001ũ��2��', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11014, '�����', '��', 28, '��ѧ��', '������ѧ����ϵ', '2003-12-11', NULL, '04788212396', '', 'small_9498@sina.com', 'small_9498@sina.com', '822898', '�����׶���', '���ɹ��ٺ�', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11013, '��ΰ', '��', 18, '��ѧ��', '���ɹź�������ܶ���ѧ0219��', '2003-12-11', NULL, '04784913225', '', 'hou_wei1234@163.com', '', '586490', '�����׶���', '���ɹź�������ܶ���ѧ0219��', '015400', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11015, '����ǰ', '��', 20, '��ѧ��', '���ɹŹ�ҵ��ѧ', '2003-12-12', NULL, '6576519', '126-5122955', 'xnini16@china.com.cn', 'xnini.zhibo.net', '840715', '���ͺ�����', '���ɹŹ�ҵ��ѧ��������324��', '010062', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11016, '�Ծ�', '��', 20, '��ѧ��', '���ɹ��ٺ�ˮУ', '2003-12-12', NULL, '04732040092', '126-5987059', 'lhzhaojun@126.com', '', 'zj2040', '�����׶���', '���ɹ��ٺ��а��ֹ���¥���µ���', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11017, '�⽨ΰ', '��', 22, '��ѧ��', '���ɹ���óְҵѧԺ', '2003-12-12', NULL, '04745903113', '', 'webmaster@7345.com', 'http://www.7345.com', '198228', '���ͺ�����', '���ɹŲ�����������32��2��', '013550', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11018, '�½���', '��', 17, '��ѧ��', '���ɹ���������һ��', '2003-12-12', NULL, '04745207258', '', 'hjj-009@163.com', 'http://www.hqnpc.com', 'fobjuf', '�����첼��', '���ɹ���������һ��', '011800', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11019, 'Ԭΰ', '��', 18, '��ѧ��', '���ɹ��ٺ��е�һְҵ��ר', '2003-12-12', NULL, '04788610578', '', 'fkeuping@sohu.com', '', '198602', '�����׶���', '���ɹ��ٺ��е�һְҵ��ר�ƶ�6��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11020, '�����', 'Ů', 23, '��ѧ��', '��ͷʦ��ѧԺ', '2003-12-12', NULL, '04723992721', '', 'damoxueying@sohu.com', '', '541890', '��ͷ��', '��ͷʦ��ѧԺ����ϵ2000����һ����', '014030', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11021, '��ï��', '��', 19, '��ѧ��', '���ɹ��ٺ���һ��', '2003-12-12', NULL, '04784531213', '', 'lxmhk_wra@sina.com', 'http://loveyftk.nease.net', '617449', '�����׶���', '���ɹ��ٺ���һ�и���16��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11022, '������', '��', 18, '��ѧ��', '���ɹŴ�ѧ', '2003-12-13', NULL, '04714685631', '13948431469', 'szwugx@163.com', 'www.shongzhewu.com', 'philip', '���ͺ�����', '���ɹź��ͺ�������������������԰A��һ��Ԫ201��', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11023, '����', '��', 26, '��ѧ��', '���ɹŴ�ѧ', '2003-12-13', NULL, '04713362050', '', 'changyi@zlinfo.com.cn', '', 'cy7712', '���ͺ�����', '���ɹź��ͺ����п����㳡88��', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11024, '������', '��', 21, '��ѧ��', '���ɹ�����ߵ�ר��ѧУ', '2003-12-13', NULL, '04838221385', '13947151943', 'smgib@yahoo.com.cn', 'http://smgib.zhibo.net', 'bingdi', '��������', '���ɹ�����ߵ�ר��ѧУ�����ϵ2000�����ư�', '010051', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11025, '�', '��', 21, '��ѧ��', '���ɹ�ҽҩר��ѧԺ', '2003-12-13', NULL, '13947109730', '', 'yixueyuan001@163.com', 'http://www.waxx.5888.com', 'woaini', '���ͺ�����', '���ɹź��ͺ������³�����̨ʲ·ҽҩר��ѧԺ����ҽ8��', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11026, '����', '��', 21, '��ѧ��', '���״�ѧ', '2003-12-13', NULL, '04788723478', '8822690', 'root@zmmiao.com', 'www.zmmiao.com', '8033', '�����׶���', '���״�ѧ2002������2��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11027, '����', '��', 18, '��ѧ��', '���п�����ѧ', '2003-12-13', NULL, '04776211986', '', 'myerdos@eyou.com', 'http://www.9xcn.com', '426753', '������˹��', '���ɹ� ������˹�� ���п�����ѧ ��153��', '016100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11028, '�ܽ���', '��', 18, '��ѧ��', '���� �ٺ��� ũ��У������ѧ', '2003-12-13', NULL, '04788327975', '', '1234569480691@sohu.com', '', 'zjx861', '�����׶���', '���� �ٺ��� ũ��У������ѧ  �߶�(1��)', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11029, '�˶���', '��', 17, '��ѧ��', '���ɹ���ԭ�ص�һ��ѧ', '2003-12-13', NULL, '04785227459', '', 'pandongsheng@eyou.com', 'http://heike.china-flower.com/', 'heike1', '�����׶���', '���ɹ���ԭ�ص�һ��ѧ231��', '015100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11030, '�����', '��', 18, '��ѧ��', '���ɹŹ�ҵ��ѧ', '2003-12-13', NULL, '04716593673', '', 'lixiangjun9981@163.com', 'http://lxj.myrice.com', '121230', '���ͺ�����', '���ɹŹ�ҵ��ѧ����2�ù�Ԣ213��', '010062', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11031, '��ҫ', '��', 18, '��ѧ��', '���ɹ���ԭһ�� 229��', '2003-12-13', NULL, '04785217105', '13947847169', 'liyao1985@eyou.com', 'http://liyao.upweb.net/', '198451', '�����׶���', '���ɹ���ԭһ�� 229�� ��ҫ', '015100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11032, '�����', '��', 18, '��ѧ��', '�����ٺ�ˮУ', '2003-12-14', NULL, '04788415739', '', 'ddzxwin@sian.com.cn', '', '219011', '�����׶���', '�����ٺ�ˮУ01�������', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11033, '��ΰΰ', 'Ů', 22, '��ѧ��', '���ɹŴ�ѧ', '2003-12-14', NULL, '04748271213', '0474-8881258', 'zhouweiwei@eyou.com', '', '801215', '�����첼��', '�����첼��', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11034, '�ϳ�', '��', 18, '��ѧ��', '���ɹź�������ܶ���ѧ', '2003-12-15', NULL, '04786634253', '', 'xingchao19860815@yahoo.com.cn', '', '198608', '�����׶���', '���ɹź�������ܶ���ѧ0311��', '015400', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11035, '�ʺ���', 'Ů', 15, '��ѧ��', '������ѧ', '2003-12-15', NULL, '2210198', '04788818185', 'Fairy.9@tom.com', '', '221019', '���ͺ�����', '�ٺ���', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11036, '�����', '��', 23, '��ѧ��', '���ɹ�ʦ����ѧ', '2003-12-15', NULL, '04714390450', '', 'liuhongbin81@163.com', '', 'wanglu', '���ͺ�����', '���ɹ�ʦ����ѧ�����ϵ2001��2��', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11037, 'κ��', '��', 20, '��ѧ��', '������ѧ', '2003-12-15', NULL, '04788230680', '', 'diexueemo@163.com', 'http://catboycat.cctvt.com', 'cat823', '�����׶���', '���ɹ��ٺ��н�Ŷ���6348����', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11038, '������', '��', 23, '��ѧ��', '��ѧ���ԣ����ɲƾ���ѧ��', '2003-12-15', NULL, '04716502022', '13611330800', 'xiangning@wu.com.cn', 'http://nmhappy.126.com', '136113', '���ͺ�����', '���ɹź��ͺ����е����������������������', '010050', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11039, '��С��', '��', 29, '��ѧ��', '���ɹŹ㲥���Ӵ�ѧ', '2003-12-15', NULL, '04788218797', '04788810268', 'bmzj2008@tom.com', 'http://bmzj.126.com', 'jun615', '�����׶���', '���ɹŰ����׶���ʵ��Сѧ������������ת��С����', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11040, '��ѩ��', '��', 21, '��ѧ��', '���ɹ�ʦ����ѧ', '2003-12-17', NULL, '04714392011', '', 'bxft@imnu.edu.cn', 'http://bxft.126.com', 'bxft20', '���ͺ�����', '���ɹ�ʦ����ѧ������Ϣ����', '010022', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11041, 'ε����', '��', 20, '��ѧ��', '���ɹŵ�����Ϣְҵ����ѧԺ', '2003-12-17', NULL, '07414601342', '', 'weipflove@163.com', '', 'wpf131', '���ͺ�����', '���ɹŵ�����Ϣְҵ����ѧԺ��0331��', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11042, '��ϲ��', '��', 23, '��ѧ��', '���ɹ�ʦ����ѧ', '2003-12-17', NULL, '04715835737', '04715835737', 'lxz150124@163.com', 'www.daxwanx.8u8.com', '258212', '���ͺ�����', '���ɹ�ʦ����ѧ�����ϵ2002��5��', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11043, '����', '��', 17, '��ѧ��', '�����ٺ�����', '2003-12-17', NULL, '04788218595', '', 'nuoman@126.com', '', 'nuoman', '�����׶���', '�����ٺӳǹ�������޼ѻ�ת', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11044, '��˳��', '��', 18, '��ѧ��', '���ɹ��ٺӵ�һְҵ��ר', '2003-12-17', NULL, '04733991331', '-', 'wsllovecfy@21cn.com', 'http://zsbt.35123.net', 'whxhnw', '�ں���', '���ɹ��ٺӵ�һְҵ��ר��������꼶�İ�', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11045, '����ƽ', '��', 23, '��ѧ��', '�����´�����ѧԺ���ɹŷ�Ժ', '2003-12-17', NULL, '04714954247', '13009524276', 'hhhtyzp@tom.com', '', '200181', '���ͺ�����', '���н𴨿��������������´�����ѧԺ���ɹŷ�Ժ', '010080', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11046, '�ͳ���', '��', 24, '��ѧ��', '����ʦ���ߵ�ר��ѧУ', '2003-12-17', NULL, '04748283501', '13999536439', ' gopl8@126.com', 'http://go163.ku.net', '152323', '�����첼��', '����ʦ���ߵ�ר��ѧУ����ϵ����ƽ[��ʦ��]ת�ͳ���', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11047, '����', '��', 22, '��ѧ��', '�й���ѧ������ѧ', '2003-12-18', NULL, '04763753750', '', 'yangmeng@mcoce.com', 'http://www.mcoce.com', 'yangxi', '�����', '���ɹų���п��������ɽ��ӱ�·�Ļ��ּ���¥2��Ԫ5¥ 252��', '014400', '3d8673b7', '2003-12-29 07:42:06', 'N', NULL);
INSERT INTO wybs_user VALUES (11048, '�����', '��', 22, '��ѧ��', '���ɹŵ�����Ϣְҵ����ѧԺ', '2003-12-18', NULL, '04714601384', '', 'lijinkun@mail.china.com', 'http://lx303.126.com', 'langli', '���ͺ�����', '���ɹŵ�����Ϣְҵ����ѧԺ��014��', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11049, '����', '��', 22, '��ѧ��', '���ױ���ѧԺ QQ:32488802', '2003-12-18', NULL, '04708336684', '13847009297', 'network@public.hh.nm.cn', 'viovi@126.com', 'compaq', '���ױ�����', '���ױ����к�������«έ·19�ţ������� ���� QQ:32488802', '010000', 'db9f1f23', '2004-01-06 19:34:18', 'N', NULL);
INSERT INTO wybs_user VALUES (11050, '������', '��', 23, '��ѧ��', '΢����Ȩ�����ɹţ�������������', '2003-12-18', NULL, '04712292664', '', 'bxiaofeng@163.com', 'www.etlw.com', '112111', '���ͺ�����', '���ɹŴ�ѧ�����102��2002��ƽ���', '010021', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11051, '���', '��', 20, '��ѧ��', '���ɹŹ�ҵ��ѧ', '2003-12-18', NULL, '04715951779', '', 'barry_sad@sina.com.cn', 'www.barrylee.533.net', '198304', '���ͺ�����', '���ͺ����ж�ë��С��50#����', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11052, '�ֽ�', '��', 18, '��ѧ��', '���ɹŵ�����Ϣְҵ����ѧԺ', '2003-12-19', NULL, '04714601943', '', 'lx303@qq.com', 'http://lx303.y365.com', 'lx1986', '���ͺ�����', '���ɹŵ�����Ϣְҵ����ѧԺ��014', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11053, '����', '��', 21, '��ѧ��', '���ɹ������������׶����ٺ�������ѧУ', '2003-12-19', NULL, '04788310351', '', 'xinyuanxinyuan@eyou.com', 'http://tymh.126.com', '831024', '�����׶���', '���ɹ������������׶���511��ַ1��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11054, '���', 'Ů', 21, '��ѧ��', '��ͷְҵ����ѧԺ', '2003-12-19', NULL, '04726941225', '13674726017', 'hainan1983@21cn.com', '', '198312', '��ͷ��', '��ͷְҵ����ѧԺ201134��', '014030', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11055, '����', '��', 15, '��ѧ��', '�ٺ�����', '2003-12-19', NULL, '04788412811', '', 'tank1300958.student@sina.com', '', 'zhaoyu', '�����׶���', '�ٺ��д�ѧ·����С��30��311��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11056, '������', '��', 22, '��ѧ��', '�ٺ��п���ҹУ', '2003-12-19', NULL, '04788824778', '', 'admin@linhe.net', 'http://www.linhe.net', 'abcx12', '�����׶���', '���ɹ��ٺӱ�����', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11057, '����', '��', 15, '��ѧ��', '�ٺ�����', '2003-12-20', NULL, '04788412811', '', 'zhaoyu12334.student@sina.com', '', 'zhaoyu', '�����׶���', '���ɹŰ����ٺ������񶫽�����С��30��3��Ԫ1¥1��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11058, '�����', 'Ů', 24, '��ѧ��', '���ɹ��������ƾ�ѧԺ', '2003-12-20', NULL, '04716265348', '13039508191', 'xzy3895@sina.com.cn', '', '197911', '���ͺ�����', '���ɹ���������Ͷ����������', '010200', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11059, '��ΰ', '��', 18, '��ѧ��', '���˵��', '2003-12-20', NULL, '4662294', '', 'fengxiaozi110@163.com', '', 'woaili', '�����׶���', '���˵���м�ʮ��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11060, '����ϼ', 'Ů', 19, '��ѧ��', 'ְ������', '2003-12-21', NULL, '04733012997', '13019581075', 'shenyubxia@yahoo.com.cn', 'www.shenyuexia', '198510', '�����׶���', '���˺���ְ�����ĵ�ʮһ��', '015400', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11061, '�Լ�', '��', 19, '��ѧ��', '���˵��', '2003-12-21', NULL, '04788414795', '', 'renke_530@163.com', '', 'wm7539', '�����׶���', '���˵���м�10��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11062, '���', 'Ů', 20, '��ѧ��', '���ɹŰ�����ѧ', '2003-12-21', NULL, '04788259595', '', 'mewyf520@eyou.com', '', '586912', '�����׶���', '���ɹŰ�����ѧ�߶�2�������', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11063, '�����', '��', 17, '��ѧ��', '��ԭ��', '2003-12-21', NULL, '04785215494', '', '13304786466@133165.com', '', '961880', '�����׶���', '��ԭ��һ�и�һ14��', '015100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11064, '������', '��', 18, '��ѧ��', '��������', '2003-12-21', NULL, '2212741', '', 'tlgdrn@yahoo.com.cn', '', '591885', '�����׶���', '123', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11065, '����', '��', 16, '��ѧ��', '��·��ѧ', '2003-12-21', NULL, '04782227192', '', 'yycs.wd@163.com', 'yycs.91i.net', '852719', '�����׶���', '���ɹ��ٺ�����·��ѧ189��', '015000', '3de93088', '2004-01-10 19:42:12', 'N', NULL);
INSERT INTO wybs_user VALUES (11066, '��Ұ', '��', 20, '��ѧ��', '���ɹŹ�ҵ��ѧ����ѧԺ', '2003-12-21', NULL, '04712298250', '', 'tianye198554@163.com', '', '198554', '���ͺ�����', '���ɹŹ�ҵ��ѧ����ѧԺ02�������ϵһ��', '010080', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11067, '����', '��', 23, '��ѧ��', '�����ʵ��ѧ', '2003-12-21', NULL, '04785913351', '', 'han666@etang.com', '', '520131', '�����׶���', '���ɹ��ʵ�ѧУ�����ͨ��0001', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11069, '�￡ΰ', '��', 19, '��ѧ��', '���ɹ��̶�������(��)��', '2003-12-22', NULL, '04747599004', '13847405972', 'sjwzyl@china.com.cn', 'sunjunwei.xilubbs.com', '198501', '�����첼��', '���ɹ��̶��ظ�������34��', '013450', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11070, '������', '��', 19, '��ѧ��', 'ʦ����', '2003-12-22', NULL, '04714392961', '', 'wjxlele@163.com', 'www.leer.co.tv', '596954', '���ͺ�����', '���ɹź��ͺ���ʦ����ѧ����¥13��¥2��Ԫ6��', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11071, '����', '��', 22, '��ѧ��', '���ױ���ѧԺ', '2003-12-23', NULL, '04748382515', '', 'zyjnqx@163.com', '', '200112', '�����첼��', '����������������13��', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11072, '�¹���', '��', 20, '��ѧ��', '��ԭ����', '2003-12-23', NULL, '5819839', '', 'haoguilong@vip.sina.com', 'http://glwww.126.com', 'qazwsx', '�����׶���', '���ɹ���ԭ����15��', '015100', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11073, '��ΰ', '��', 18, '��ѧ��', '���˵��', '2003-12-24', NULL, '04788414795', '', 'liwe2582525775@163.com', 'www.woailiwei520.go.nease.net', '097338', '�����׶���', '���˵���м�ʮ��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11074, '��ұ', '��', 18, '��ѧ��', '���ɹź��ױ���������Ӵ�ѧ', '2003-12-24', NULL, '04708631290', '', 'liyecn@vip.sina.com', 'http://liye.y365.com', '198521', '���ױ�����', '���ɹź��ױ���������ѵ����204��', '014010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11075, '���պ�', '��', 21, '��ѧ��', '���ױ���ѧԺ', '2003-12-24', NULL, '04708259423', '', 'szwdudu@sohu.com', '', '047052', '�����첼��', '���ױ���ѧԺ2001�������ϵ8��', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11076, '��ΰ', '��', 19, '��ѧ��', '���ɹŵ�����Ϣְҵ����ѧԺ', '2003-12-24', NULL, '04714601965', '', '0425lw@163.com', '', '811797', '���ͺ�����', '���ɹŵ�����Ϣְҵ����ѧԺ��014��', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11077, '������', '��', 19, '��ѧ��', '�ӱ�ʡ����һ��', '2003-12-25', NULL, '04747983342', '', 'hong-19854@163.com', 'guiao.nease.net', 'wzdwzd', '�����첼��', '�ӱ�ʡ����һ��', '013130', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11078, '����', '��', 16, '��ѧ��', '�ٺ�����·��ѧ', '2003-12-25', NULL, '04788242356', '', 'kerlybobo@163.com', '', 'kerlya', '�����׶���', '���ɹ��ٺ���������ָ�16��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11079, '��ΰ', '��', 18, '��ѧ��', '���˵��', '2003-12-25', NULL, '04784662294', '', 'han_ting_520@163.com', '', '097338', '�����׶���', '���˵���м�ʮ��', '015043', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11080, '����', '��', 22, '��ѧ��', '���ɹŴ�ѧ����ѧԺ', '2003-12-25', NULL, '04763771000', '13171407375', 'tuilu_0425@sina.com', '', '375123', '���ͺ�����', '���ɹŴ�ѧ����ѧԺ2000������ϵ��������רҵ046������', '010010', 'db9f07d6', '2004-01-01 09:01:01', 'N', NULL);
INSERT INTO wybs_user VALUES (11081, '�ܳ�', '��', 21, '��ѧ��', '���˵�У����רҵ', '2003-12-25', NULL, '04746286390', '', 'jncrc@crcoo.com', 'jndns.con.cn', 'wj8632', '�����첼��', '���ɹ����˲��Һ�����·ͨ�Ź���', '012400', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11082, '����', '��', 22, '��ѧ��', '��������', '2003-12-27', NULL, '04702322995', '04702322995', 'manda@eyou.com', 'www.manda.com/', '520520', '������˹��', '������', '017300', '3dec5506', '2003-12-27 07:06:33', 'N', NULL);
INSERT INTO wybs_user VALUES (11083, '�½���', '��', 16, '��ѧ��', '���ɹ���������һ��', '2003-12-27', NULL, '04745205153', '', 'hjj-009@163.com', '', 'fobjuf', '�����첼��', '���ɹ���������һ�и�һ10��', '011800', 'db9f3b1c', '2003-12-27 10:33:49', 'N', NULL);
INSERT INTO wybs_user VALUES (11084, 'κ��', '��', 20, '��ѧ��', '������ѧ', '2003-12-27', NULL, '04788230680', '13019580928', 'diexueemo@163.com', 'http://catboycat.cctvt.com', 'cat823', '�����׶���', '���ɹ��ٺ��н�Ŷ���6348����', '015000', 'db9f3719', '2004-01-03 14:05:07', 'N', NULL);
INSERT INTO wybs_user VALUES (11085, '����', '��', 18, '��ѧ��', '���п�����ѧ', '2003-12-27', NULL, '04776211986', '', 'info@9xcn.com', 'http://www.9xcn.com', '426753', '������˹��', '���ɹ� ������˹�� ���п�����ѧ ��153��', '016100', 'db9f30bf', '2004-01-04 12:44:35', 'N', NULL);
INSERT INTO wybs_user VALUES (11086, '������', '��', 23, '��ѧ��', '���ɹſƼ���ѧ', '2003-12-27', NULL, '04725950603', '013191483828', 'yujiaxiaoyue@163.com', '', '1981jm', '��ͷ��', '��ͷ���������������7#50#����', '014010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11087, '���', 'Ů', 18, '��ѧ��', '���ɹŰ�����ѧ', '2003-12-27', NULL, '04788259595', '', 'mywyf520@eyou.com', '', '586912', '�����׶���', '���ɹŰ�����ѧ�߶�2�������', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11095, '��ΰ', '��', 18, '��ѧ��', '���˵��', '2003-12-28', NULL, '04784662294', '', 'fengxiaozi110@163.com', '', 'l123', '�����׶���', '�����غ��춫����', '015043', 'db9f373d', '2003-12-28 11:55:08', 'N', NULL);
INSERT INTO wybs_user VALUES (11089, '������', '��', 22, '��ѧ��', '���ɹ�ʦ����ѧ', '2003-12-27', NULL, '04714390374', '', 'lyx_55.student@sina.com', '', '810525', '���ͺ�����', '���ɹ�ʦ����ѧ�����ϵ2001��5��', '010022', 'ca63ff3b', '2003-12-27 18:18:28', 'N', NULL);
INSERT INTO wybs_user VALUES (11090, '����', '��', 18, '��ѧ��', '���ɹ� �������� ��һ��ѧ', '2003-12-27', NULL, '13848475629', '', 'guxueyimeng@eyou.com', 'http://diyuzhadan.hangye.cn', '198611', '������˹��', '���ɹ� �������� ��һ��ѧ  �߶�<<3>>��  ����', '014300', 'ca63eeae', '2003-12-29 15:14:18', 'N', NULL);
INSERT INTO wybs_user VALUES (11091, '����', '��', 16, '��ѧ��', '��·��ѧ', '2003-12-28', NULL, '04782227192', '', 'yycs.wd@163.com', 'yycs.91i.net', '852719', '�����׶���', '���ɹ��ٺ�����·��ѧ189��', '015000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11092, '���ֺ�', '��', 21, '��ѧ��', '���ɹ�����ߵ�ר��ѧУ', '2003-12-28', NULL, '04716500254', '5731821', 'thecloud@163.com', '', '12c19', '���ͺ�����', '���ɹź��ͺ������黨���ʾ�359����', '010051', '3d8a408a', '2003-12-28 07:13:40', 'N', NULL);
INSERT INTO wybs_user VALUES (11093, '����', '��', 22, '��ѧ��', '���ɹż����ר��ѧԺ', '2003-12-28', '1072565692', '04716929422', '', 'chcall1501@hotmail.com', '', '1501', '���ͺ�����', '���ɹż����ר��ѧԺ', '010020', 'cacf9f9a', '2004-01-06 05:46:47', 'N', NULL);
INSERT INTO wybs_user VALUES (11094, '������', '��', 18, '��ѧ��', '�ٺ�����', '2003-12-28', NULL, '0478212478', '', 'tlgdrn@yahoo.com.cn', '', 'tlg103', '�����׶���', '�ٺ�����103', '015000', 'db9f33e1', '2003-12-28 09:27:06', 'N', NULL);
INSERT INTO wybs_user VALUES (11096, '��־��', '��', 22, '��ѧ��', '���ɹŲƾ�ѧԺ', '2003-12-28', NULL, '04716504066', '13948432607', 'nmsky@nmsky.com', 'http://www.nmsky.com', 'nmsky', '���ͺ�����', '���ɹŲƾ�ѧԺ����02�����Ӧ�ð�', '010070', 'd35d9b16', '2004-01-04 20:21:46', 'N', NULL);
INSERT INTO wybs_user VALUES (11097, 'Ԭ־��', '��', 23, '��ѧ��', '��ͷְҵ����ѧԺ', '2003-12-28', NULL, '04704214889', '13947255355', 'laseryzp@sohu.com', '', '1y0z9p', '��ͷ��', '���ɹŰ����칫����¥��ˮ��������ӡ��', '014030', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11098, '����', '��', 23, '��ѧ��', '�й��Ƽ���ѧ', '2003-12-28', NULL, '04763753750', '', 'yangmeng817@163.com', '', 'yangxi', '�����', '���ɹų���п��������Ļ��ּ���¥����Ԫ 252 ��', '010000', 'db9f2e8e', '2003-12-28 15:40:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11099, '�˶���', '��', 17, '��ѧ��', '���ɹ���ԭ�ص�һ��ѧ231��', '2003-12-29', '1074416982', '04785227459', '', 'pandongsheng@eyou.com', 'http;//heike.china-flower.com', '198512', '�����׶���', '���ɹ���ԭ�ص�һ��ѧ231��', '015100', 'db9f33a0', '2004-01-19 14:47:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11100, '��ǿ', '��', 20, '��ѧ��', '������ѧ', '2003-12-29', NULL, '04786632034', 'û��', 'lhlqi@eyou.com', 'lhlqi.upweb.net', '138456', '�����׶���', '���ɹź�������', '015000', 'db94af67', '2003-12-29 13:25:48', 'N', NULL);
INSERT INTO wybs_user VALUES (11101, '���', '��', 20, '��ѧ��', '���ɹŹ�ҵ��ѧ', '2003-12-29', NULL, '04715951779', '', 'barry_sad@sina.com', 'www.barrylee.533.net', '830412', '���ͺ�����', '���ͺ����ж�ë��С��50#����', '010020', 'da159281', '2003-12-29 15:36:39', 'N', NULL);
INSERT INTO wybs_user VALUES (11102, '���', '��', 19, '��ѧ��', '���ɹ�ҽѧԺ', '2003-12-30', NULL, '04788256566', '13171408785', 'lihao65@163.com', 'http://wind.web165.com', '6566', '���ͺ�����', '���ɹ�ҽѧԺ ����ҽѧ�� 2003�� �ٴ�10��', '010059', '3d8a6f4a', '2003-12-31 16:58:30', 'N', NULL);
INSERT INTO wybs_user VALUES (11103, '����', 'Ů', 20, '��ѧ��', '������Ϣ����ѧԺ', '2003-12-30', NULL, '04716553390', '', 'zhuyan_2002@163.com', '', '830826', '���ͺ�����', '���ͺ����к���·�ٻ��ⶫ�����ٻ�԰һ��¥3��Ԫ', '010010', '3d89aa3b', '2003-12-30 14:05:01', 'N', NULL);
INSERT INTO wybs_user VALUES (11104, '����', '��', 20, '��ѧ��', '��ԭһ��', '2003-12-30', NULL, '5216916', '', 'xiaojiao_2002@eyou.com', '', '123456', '�����׶���', '���ɹ���ԭһ��', '015100', 'ca63fb55', '2003-12-31 06:48:06', 'N', NULL);
INSERT INTO wybs_user VALUES (11105, '�￡ΰ', '��', 19, '��ѧ��', '���ɹ��̶�����', '2003-12-31', NULL, '04747599004', '13847405972', 'sjwzyl@china.com.cn', '', '840514', '�����첼��', '���ɹ��̶�С������34��', '013450', 'db9f3c9e', '2004-01-19 06:06:40', 'N', NULL);
INSERT INTO wybs_user VALUES (11106, '������', '��', 25, '��ѧ��', '���ɹŴ�ѧ', '2003-12-31', '1072824659', '04716610144', '', 'swd_czt@nmg.gov.cn', 'http://xuehome.myrice.com', 'xsjswd', '���ͺ�����', '�»����һ��7��¥410', '010055', 'cacf9f9a', '2004-01-06 05:42:09', 'N', NULL);
INSERT INTO wybs_user VALUES (11107, '���', 'Ů', 18, '��ѧ��', '������ѧ', '2003-12-31', NULL, '04788259595', '', 'mywyf520@eyou.com', '', '111222', '�����׶���', '���ɹ��ٺ��а�����ѧ�߶�2�������', '015000', 'db9f3749', '2004-01-01 11:12:45', 'N', NULL);
INSERT INTO wybs_user VALUES (11108, '������', '��', 17, '��ѧ��', '����һ��', '2003-12-31', NULL, '04836853629', '', 'xsx_boy@hotmail.com', '', '1987', '��������', '����һ�и߶�ʮ��', '014000', '3d8a5528', '2003-12-31 15:35:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11109, '������', '��', 18, '��ѧ��', '���ɹ�ͨ���пƶ�����������ѧ', '2004-01-01', NULL, '04757223290', '', 'heroming@126.com', '', '18528', '���ͺ�����', '���ɹ�ͨ���пƶ�����������ѧһ�꣨23����', '010000', 'da15e2da', '2004-01-01 08:38:49', 'N', NULL);
INSERT INTO wybs_user VALUES (11110, '��ԪԾ', '��', 22, '��ѧ��', '���ɹŲƾ�ѧԺ', '2004-01-01', NULL, '04714689714', '13948190513', '��һ1982wanyi@sina.com', '', '825122', '���ͺ�����', '���ɹŲƾ�ѧԺ��ְ�������Ӧ��һ��', '010010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11111, '����', 'Ů', 20, '��ѧ��', '�������ù����ѧ', '2004-01-01', NULL, '04788314343', '', 'yuena_8314343@163.com', '', '357468', '���ͺ�����', '�������ù����ѧ2002����������11��', '015000', 'ca672702', '2004-01-01 23:13:08', 'N', NULL);
INSERT INTO wybs_user VALUES (11112, '��ΰ', '��', 18, '��ѧ��', '���ɹź�������ܶ���ѧ', '2004-01-02', NULL, '04784913225', '', 'houwei_1314@163.com', 'http://0219.con.cn', '675544', '�����׶���', '���ɹź�������ܶ���ѧ0219�� ��ΰ��', '015400', 'da158645', '2004-01-02 06:33:31', 'N', NULL);
INSERT INTO wybs_user VALUES (11113, '֣ΰ��', '��', 22, '��ѧ��', '���ɹŴ�ѧ', '2004-01-02', NULL, '04714990139', '', 'zwhf370@sohu.com', 'http://longko.35123.net', '820411', '���ͺ�����', '���ɹŴ�ѧ������ѧѧԺ2001��̬�뻷����ѧϵ', '010021', 'cacf9885', '2004-01-02 12:31:06', 'N', NULL);
INSERT INTO wybs_user VALUES (11114, '�Լ�', '��', 19, '��ѧ��', '���˵��', '2004-01-03', NULL, '04788414795', '', 'renke_530@163.com', '', '753951', '�����׶���', '���˵���м�10��', '015000', 'db9f370b', '2004-01-03 06:11:38', 'N', NULL);
INSERT INTO wybs_user VALUES (11115, '����', '��', 19, '��ѧ��', '�㲥����ѧУ', '2004-01-03', NULL, '04715901571', '', 'ywstv@163.com', '', '11111', '���ͺ�����', '���ɹź��ͺ�����', '010031', 'db9f2808', '2004-01-03 10:39:36', 'N', NULL);
INSERT INTO wybs_user VALUES (11116, '�ͳ���', '��', 23, '��ѧ��', '����ʦר', '2004-01-03', NULL, '04748283651', '13999536439', 'gopl8@126.com', 'http://go163.ku.net', '152323', '�����첼��', '����ʦר����ϵ', '012000', 'da54475e', '2004-01-03 11:46:50', 'N', NULL);
INSERT INTO wybs_user VALUES (11117, '����', '��', 23, '��ѧ��', '���ɹŴ�ѧ', '2004-01-03', NULL, '04714990383', '13948129323', 'hairi@263.net', '', 'mother', '���ͺ�����', '���ɹŴ�ѧ2000�Źܣ�3����', '010021', 'db9f07fa', '2004-01-05 15:47:21', 'N', NULL);
INSERT INTO wybs_user VALUES (11118, '������', '��', 23, '��ѧ��', '���ɹŹ�ҵ��ѧ', '2004-01-04', NULL, '13500615297', '13500615297', 'simanhappy@sina.com', 'http://www.sheny.com', '1qaz', '���ͺ�����', '���ͺ����а���·221��', '010062', 'cacf17ab', '2004-01-04 12:58:36', 'N', NULL);
INSERT INTO wybs_user VALUES (11119, '���', '��', 16, '��ѧ��', '���ɹ����ֺ����е�����ѧ', '2004-01-04', NULL, '04798239139', '13604792752', 'maomao2517@sina.com', '', '2752', '���ֹ�����', '���ɹ����ֺ����е�����ѧ184��', '026000', 'db9f3e1b', '2004-01-15 12:16:24', 'N', NULL);
INSERT INTO wybs_user VALUES (11120, '������', '��', 19, '��ѧ��', '��ͷ��Ժ', '2004-01-04', NULL, '04726984514', '', 'changqingsg@otmail.com', '', '198555', '��ͷ��', '��ͷ��Ժ��ְ25������', '014010', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11121, '��־��', '��', 20, '��ѧ��', '����ʡ��ɽ�Ƽ���ѧ', '2004-01-05', NULL, '04125927684', '', 'wangzhijun_nmln@163.com', '', 'wzj123', '�����', '����ʡ��ɽ�Ƽ���ѧ��ְԺ����ϵ��ר013��', '114044', 'da18e5cc', '2004-01-05 05:44:12', 'N', NULL);
INSERT INTO wybs_user VALUES (11122, '�ܳ�', '��', 22, '��ѧ��', '���˵��', '2004-01-05', NULL, '04746201816', '04746286390', 'jncrc@crcoo.com', '', '8632', '�����첼��', '���ɹ����˲��Һ���������ͨ�Ź���', '012400', 'db9f3cf4', '2004-01-05 09:10:30', 'N', NULL);
INSERT INTO wybs_user VALUES (11123, '������', '��', 24, '��ѧ��', '���ɹ�ũҵ��ѧ', '2004-01-05', NULL, '04714318978', '13848114594', 'zyx1981@126.com', '', '123456', '���ͺ�����', '���ɹź��ͺ����д�̨ʲ·����С��', '010010', 'ddc785cf', '2004-01-05 12:26:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11124, '�ٺ�', '��', 22, '��ѧ��', '���ɹż����ר��ѧԺ', '2004-01-05', NULL, '04716929422', '13015108039', 'chcall1501@hotmail.com', 'fifacz.6to23.com', '305005', '���ͺ�����', '���ɹź��ͺ������Ļ�����12��Ժ5��¥2��Ԫ11��', '010020', 'da158605', '2004-01-08 10:38:58', 'N', NULL);
INSERT INTO wybs_user VALUES (11125, '������', '��', 20, '��ѧ��', '���ɹŵ���ѧУ�����03��', '2004-01-05', NULL, '04715896231', '', '81800304@163.com', 'http://xy5.7i24.com', '198411', '���ͺ�����', '���ͺ����ж���110����552�����̹ſƼ�԰��Ϣ��', '010070', '3d8a428a', '2004-01-05 13:57:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11126, '����', '��', 19, '��ѧ��', 'ͨ���е�����ѧ��2,11��', '2004-01-06', NULL, '04758266538', '', 'lengyu2003@sohu.com', '', '37488', 'ͨ����', 'ͨ���е�����ѧ��2,11��', '028000', 'ddc7b4ce', '2004-01-06 05:25:33', 'N', NULL);
INSERT INTO wybs_user VALUES (11127, 'ʯ��', '��', 20, '��ѧ��', '���ͺ��ص���ѧУ', '2004-01-06', NULL, '04797568292', '', 'shihao00010@163.com', '', '228540', '���ֹ�����', '��������', '026000', 'db9f3e05', '2004-01-08 10:20:28', 'N', NULL);
INSERT INTO wybs_user VALUES (11128, '������', '��', 29, '��ѧ��', '�������˽���ѧԺ', '2004-01-06', NULL, '04705853605', '', 'mlp_321654@163.com', '', '8848', '���ױ�����', '���ɹź��ױ����˶��״���ʺ���ҵ�ڶ���ѧ', '165419', 'db9f1d85', '2004-01-06 17:49:59', 'N', NULL);
INSERT INTO wybs_user VALUES (11129, '�����', '��', 19, '��ѧ��', '���ɹŹ�ҵ��ѧ', '2004-01-06', NULL, '04716593673', '04788810115', 'friendjuly@sina.com', 'http://lxj.myrice.com', '235689', '���ͺ�����', '���ɹŹ�ҵ��ѧ����2�Ź�Ԣ213��', '010062', 'cacf1f37', '2004-01-07 02:25:05', 'N', NULL);
INSERT INTO wybs_user VALUES (11130, '�Ծ�', '��', 22, '��ѧ��', '���ɹŲƾ�ѧԺ', '2004-01-07', NULL, '04778372070', '13904772859', 'zj-an007@163.com', '', '111111', '������˹��', '������˹�ж�ʤ����������·8�Žַ�9#', '017000', '3d8a7f9c', '2004-01-07 06:54:15', 'N', NULL);
INSERT INTO wybs_user VALUES (11131, '����', '��', 21, '��ѧ��', '���ɹź��ױ���ѧԺ', '2004-01-07', NULL, '04778682291', '13947794410', 'zswx520@tom.com', 'www.zswx163.com/bbs', '840601', '������˹��', '���ɹź��ױ���ѧԺ�������', '021008', '3d8a531c', '2004-01-07 09:36:52', 'N', NULL);
INSERT INTO wybs_user VALUES (11132, '����', '��', 26, '��ѧ��', '���ɹż���ʦ���ߵ�ר��ѧУ', '2004-01-07', NULL, '04748281594', '', 'shencl22@163.com', 'http://scl.5188.org', '2131', '�����첼��', '���ɹż���ʦ���ߵ�ר��ѧУ�������ϵ', '012000', '3d8676d0', '2004-01-08 07:26:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11133, '����Ȫ', '��', 22, '��ѧ��', '���ɹž���ְҵѧԺ', '2004-01-07', NULL, '04716589565', '13947109554', 'nline@china.com.cn', 'www.flowsand.com', '123456', '���ͺ�����', '���ɹž���ְҵѧԺ02���������', '010051', '3d8a4bb0', '2004-01-07 13:11:39', 'N', NULL);
INSERT INTO wybs_user VALUES (11134, '����', '��', 26, '��ѧ��', '�������ɹź���վ', '2004-01-07', NULL, '04788316626', '04788819161', 'yourwn@163.net', '', '2004', '�����׶���', '�ٺ���ʤ����·77�Ű���ͨ��ʵҵ��˾', '015000', 'db9f3447', '2004-01-07 19:47:29', 'N', NULL);
INSERT INTO wybs_user VALUES (11135, '������', '��', 16, '��ѧ��', '���ɹ��˺�һ��', '2004-01-08', NULL, '04747209686', '', 'wangyunlong168@263.sina.com', '', 'wylsxl', '�����첼��', '���ɹ��˺��ص�һ��ѧ��199����', '013650', 'db9f3bd2', '2004-01-08 08:08:10', 'N', NULL);
INSERT INTO wybs_user VALUES (11136, '��ΰ��', '��', 22, '��ѧ��', '���ױ���ѧԺ', '2004-01-08', '1073612923', '13847011429', '', 'aini_831@163.com', '8688.6to23.com', '23276', '���ױ�����', '���ױ���ѧԺ2002�������ϵ��ѧ����һ��', '021008', 'db9f3bb7', '2004-01-14 11:14:47', 'N', NULL);
INSERT INTO wybs_user VALUES (11137, '��ҫ', '��', 18, '��ѧ��', '���ɹ���ԭһ�� 229��', '2004-01-08', NULL, '04785217105', '', 'liyao1985@eyou.com', 'http://liyao.upweb.net', '198451', '�����׶���', '���ɹ���ԭһ�� 229��', '015100', 'db9f33a5', '2004-01-08 12:59:30', 'N', NULL);
INSERT INTO wybs_user VALUES (11138, '������', '��', 19, '��ѧ��', 'ʦ����', '2004-01-09', NULL, '04714392961', '', 'wjxlele@163.com', 'www.leer.co.tv', '569506', '���ͺ�����', '���ɹź��ͺ�����ʦ����ѧ����¥13��¥2��Ԫ6��', '010010', 'd35d9ff9', '2004-01-10 16:57:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11139, '�����', '��', 18, '��ѧ��', '���ͺ����е�ʮ����ѧ', '2004-01-10', NULL, '04716304445', '', 'ccdoit@vip.sina.com', '', '168169', '���ͺ�����', '���ͺ������Ļ�����18�ţ�2��', '010020', 'ddc7859f', '2004-01-10 07:24:03', 'N', NULL);
INSERT INTO wybs_user VALUES (11140, '�������', '��', 22, '��ѧ��', '5 ��', '2004-01-10', NULL, '04716929422', '13815067862', 'ZB@163.com', 'www.cctv.com', '159753', '���ֹ�����', '00000000000', '011110', 'db9f3e17', '2004-01-10 11:25:56', 'N', NULL);
INSERT INTO wybs_user VALUES (11141, '����', '��', 26, '��ѧ��', '�����ʵ��ѧ����ѧԺ���ɹź�����վ', '2004-01-10', NULL, '04788316626', '', 'wynmhao@163.net', '', '781115', '�����׶���', '���ɹ��ٺ���ʤ����·77�� ������ת', '015000', 'db9f36c3', '2004-01-10 11:44:36', 'N', NULL);
INSERT INTO wybs_user VALUES (11142, '��ұ', '��', 19, '��ѧ��', '������Ӵ�ѧ', '2004-01-10', NULL, '04708631290', '', 'liyecn@vip.sina.com', '', 'liye', '���ױ�����', '���ɹź��ױ���������ѵ����204��', '021122', 'db9f201c', '2004-01-10 20:57:31', 'N', NULL);
INSERT INTO wybs_user VALUES (11143, '�ͬŵ��', '��', 16, '��ѧ��', '�������е�����ѧ', '2004-01-11', NULL, '04706523092', '', 'a32d@tom.com', '', '138', '���ױ�����', '������������У԰��', '021410', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11144, '��������', '��', 16, '��ѧ��', '���ɹŶ�����������ѧ106��', '2004-01-12', NULL, '04797533168', '', 'wanghaicx@163.com', '', '990918', '���ֹ�����', '���ɹŶ�����������ѧ106��', '011100', 'ddc7bfd5', '2004-01-12 08:42:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11145, '�Խ�', '��', 21, '��ѧ��', '���ѧԺ', '2004-01-12', NULL, '04778530767', '13019572968', 'tansuanna@hotmail.com', 'http://cjcity.51.net', '198277', '������˹��', '���ɹ�����������г��ѧԺ315#����', '024000', '3d8a7f89', '2004-01-12 16:21:39', 'N', NULL);
INSERT INTO wybs_user VALUES (11146, '��־��', '��', 20, '��ѧ��', '�´����ʵ���ѧԺ���ɹŷ�Ժ', '2004-01-12', NULL, '04712298360', '', 'cycj2000@yahoo.com.cn', '', 'lzg', '������˹��', '�´����ʵ���ѧԺ���ɹŷ�Ժ03�������ϵ', '010080', '3d8a7f89', '2004-01-12 17:21:25', 'N', NULL);
INSERT INTO wybs_user VALUES (11147, '����', '��', 20, '��ѧ��', '���ױ���ѧԺ', '2004-01-13', NULL, '04708221947', '', 'baolei6220@163.com', '', '198427', '���ױ�����', '���ױ����к����������ױ���ѧԺ03�����̼���', '021008', 'db9f1f2c', '2004-01-13 14:07:26', 'N', NULL);
INSERT INTO wybs_user VALUES (11148, '����', '��', 21, '��ѧ��', 'nadmfadsfadf', '2004-01-13', '1073990843', '123123123', '', '1@11.com', '', '123123', '���ͺ�����', 'adfadf', '100021', 'ca6ab6b0', '2004-01-16 14:57:58', 'N', NULL);
INSERT INTO wybs_user VALUES (11149, '�׿�', '��', 20, '��ѧ��', '���ױ����й㲥���Ӵ�ѧ', '2004-01-14', NULL, '04708255330', '', 'hu_baijun@163.com', '', 'baijun', '���ױ�����', '���ױ����й㲥���Ӵ�ѧ2000���������', '021008', '3d8a4d8c', '2004-01-14 11:02:34', 'N', NULL);
INSERT INTO wybs_user VALUES (11150, '����', 'Ů', 19, '��ѧ��', '���ɹŹ㲥���Ӵ�ѧ���ױ�����У', '2004-01-14', NULL, '04708267525', '', 'machunyanliang@163.com', '', 'mayan', '���ͺ�����', '���ɹŹ㲥���Ӵ�ѧ���ױ�����У2000�������רҵ', '021008', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11151, '������ͼ', '��', 20, '��ѧ��', '���ɹ�ũҵ��ѧ', '2004-01-14', NULL, '04714302079', '', 'vanillasky625@sohu.com', '', '840124', '���ֹ�����', '���ɹ�ũҵ��ѧ����2��ѧ����Ԣ¥629����', '010030', 'db94bd43', '2004-01-14 12:45:16', 'N', NULL);
INSERT INTO wybs_user VALUES (11152, '��', '��', 21, '��ѧ��', '���۱����й㲥���Ӵ�ѧ', '2004-01-14', NULL, '04708237450', '', 'machaoaily@163.com', '', 'machao', '���ױ�����', '���۱����й㲥���Ӵ�ѧ2000���������', '201008', '3d8a4d8c', '2004-01-14 14:35:21', 'N', NULL);
INSERT INTO wybs_user VALUES (11153, '�׶���', '��', 21, '��ѧ��', '���ɹŰ�ͷ�ṤҵѧУ', '2004-01-14', NULL, '04705351828', '04725517050', 'wangzhong5845201@163.com', '', '123456', '���ױ�����', '���ɹŰ�ͷ�ṤҵѧУ', '014045', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11154, 'ţ��', '��', 21, '��ѧ��', '�������ѧУ', '2004-01-15', NULL, '04702227048', '13947019176', 'lywl2002@263.net', '', '512356', '���ױ�����', '���ɹź�������·111¥1��Ԫ8��', '021000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11155, '����', '��', 17, '��ѧ��', '���ɹź��ͺ��ص�����ѧ��һ1��', '2004-01-15', NULL, '04713955711', '', 'tree_tree1987@msn.com', '', '323810', '���ͺ�����', '���ɹź��ͺ��ع���·����С��142#����', '010050', '3d8a40bf', '2004-01-15 19:03:28', 'N', NULL);
INSERT INTO wybs_user VALUES (11156, '��Ө', 'Ů', 17, '��ѧ��', '��ʵ', '2004-01-15', '1074183402', '04716960486', '', 'zhong_linger@163.com', 'http://web.212.cn/pingyoushe', 'vsly', '���ͺ�����', '���ɹ�ũҵ��ѧ������ʵ��ѧ��һ����', '010000', 'db9f04db', '2004-01-16 00:16:05', 'N', NULL);
INSERT INTO wybs_user VALUES (11157, '����', '��', 22, '��ѧ��', '�������Ƽ�ѧԺ', '2004-01-16', NULL, '04708322167', '', 'wangxin_517@163.com', '', '832216', '���ױ�����', '�������ڶ���ѧ��һ������ ����', '021000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11158, '١��', '��', 16, '��ѧ��', '���ͺ����е�5��ѧ', '2004-01-16', NULL, '04716981396', '13948438217', 'a6981396@public.hh.nm.cn', '', 'txzm53', '���ͺ�����', '���ͺ����е�5��ѧ��1��3����', '010020', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11159, 'ţ��', '��', 16, '��ѧ��', '���ɹ��ں��к�������', '2004-01-16', NULL, '04735858313', '13848312850', 'niu_VIP@tom.com', 'http://t3100.5944.net/', 'niulei', '�ں���', '���ɹ��ں��к������� ������2���� ţ��', '016000', '3d8a623e', '2004-01-18 23:50:04', 'N', NULL);
INSERT INTO wybs_user VALUES (11160, '�ŷ�', '��', 18, '��ѧ��', '���ɹ�΢���Խ�������', '2004-01-16', NULL, '6682736', '', 'zhangfan@qixidi.com', '', 'zf3120', '���ͺ�����', '���ͺ��������������������������Ժ����¥9��¥5��Ԫ10��', '010010', '3d8a41a8', '2004-01-16 18:29:51', 'N', NULL);
INSERT INTO wybs_user VALUES (11161, '��ҫ', '��', 18, '��ѧ��', '���ɹ���ԭ�ص�һ��ѧ', '2004-01-17', '1074299687', '04785227459', '', 'liyao19851212@eyou.com', 'liyao.upweb.net', '000000', '�����׶���', '���ɹ���ԭ�ص�һ��ѧ229��', '015100', 'db9f33a0', '2004-01-19 08:42:29', 'N', NULL);
INSERT INTO wybs_user VALUES (11162, '�Ŵ�Ƽ', 'Ů', 42, '��ѧ��', '�����е��ѧ����', '2004-01-17', NULL, '04748850186', '', 'baixue252002@163.com', '', '741212', '�����첼��', '����ͨ�ŷֹ�˾', '012000', NULL, NULL, 'N', NULL);
INSERT INTO wybs_user VALUES (11163, '֣��', '��', 21, '��ѧ��', '��������ѧ', '2004-01-17', NULL, '04112171531', '13074171376', 'jiaoxue001@163.com', 'pchot.wx-e.com', '820817', '�ں���', '�����п�������ɽ��·31��3#531', '116600', 'da15f682', '2004-01-17 18:16:54', 'N', NULL);
INSERT INTO wybs_user VALUES (11164, '����', '��', 20, '��ѧ��', '�����ѧУ', '2004-01-17', NULL, '04708322826', '', 'lengfeng2008@xinhuanet.com', '', '123456', '���ױ�����', '���ɹź��ױ����к��������Ӷ�����С��5��¥', '021000', 'db9f1ce7', '2004-01-17 18:57:58', 'N', NULL);
INSERT INTO wybs_user VALUES (11165, '�����', '��', 25, '��ѧ��', '���ɹŹ㲥���Ӵ�ѧ', '2004-01-18', NULL, '04754210693', '13904751817', 'yanlinfei115@eyou.com', '', '618618', '���ͺ�����', '���ɹ�ͨ���пƶ��������ֺӴ��42��', '028001', '3dec2f71', '2004-01-18 04:25:00', 'N', NULL);
INSERT INTO wybs_user VALUES (11166, 'ţ��', '��', 16, '��ѧ��', '���ɹ��ں��п����г�����2����', '2004-01-18', '1074438818', '04735858313', '', 'niu_VIP@tom.com', '', 'niulei', '�ں���', '���ɹ��ں��������ҳ���޹�˾������ ţ����תţ�ڣ��գ�', '016000', '3d8a623e', '2004-01-18 23:11:32', 'N', NULL);
INSERT INTO wybs_user VALUES (11167, '��Ծ��', '��', 25, '��ѧ��', '���ױ���ѧԺ', '2004-01-19', NULL, '04707883506', '', 'wxf007@163.com', '', '123456', '���ױ�����', '���ױ���ѧԺͼ���', '021008', 'db9f2118', '2004-01-19 16:33:28', 'N', NULL);
INSERT INTO wybs_user VALUES (11168, '���', '��', 19, '��ѧ��', '���ɹż���һ��', '2004-01-19', NULL, '04743903292', '13948593291', 'wzlycz@163.com', 'http://www.nmgjnyz.com/wz', '123456', '�����첼��', '���ɹŲ���ǰ��긻��23��1��', '012200', 'db9f3c8e', '2004-01-19 18:15:50', 'N', NULL);

