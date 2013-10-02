# phpMyAdmin MySQL-Dump
# version 2.3.0
# http://phpwizard.net/phpMyAdmin/
# http://www.phpmyadmin.net/ (download page)
#
# ����: localhost
# ��������: Jan 20, 2004 at 05:42 PM
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
# --------------------------------------------------------

#
# ���ݱ�Ľṹ `wybs_dboperation`
#

CREATE TABLE wybs_dboperation (
  optisestime int(11) unsigned NOT NULL default '0',
  optialltime int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (optisestime)
) TYPE=MyISAM;
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

