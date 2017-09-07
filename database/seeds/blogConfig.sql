

-- @desc   数据库文件SQL
-- @author FIGHTZERO
-- @date   2017-09-06


-- TODO:博客表
DROP TABLE IF EXISTS `blog_blogs`;
CREATE TABLE `blog_blogs` (
  `id`      int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '博客表',
  `title` 	char(100) 	COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '文章名称',
  `keywords`char(100) 	COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '关键字',
  `intro` 	text 		    COLLATE utf8_unicode_ci   COMMENT '介绍',
  `picture`	varchar(100)COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '图片',
  `images`  varchar(100)  COLLATE utf8_unicode_ci DEFAULT ''    COMMENT '图片集',
  `description` char(200) 	COLLATE utf8_unicode_ci DEFAULT ''	COMMENT '描述',
  `content` 	text 		  COLLATE utf8_unicode_ci   COMMENT '文章内容',
  `source` 		char(30) 	COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '网络-INTERNET，个人-MYSELF',
  `source_link` varchar(200)COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '来源网址',
  `tags` 	  char(20) 		COLLATE utf8_unicode_ci 	DEFAULT '' 		COMMENT '标签',
  `status` 	tinyint(2) 	DEFAULT '100' COMMENT '状态 100 未发布, 200 已发布',
  `sort_num`tinyint(2) 	DEFAULT '0' 	COMMENT '排序',
  `is_top` 	tinyint(2) 	DEFAULT '0' 	COMMENT '是否置顶',
  `author` 	char(30) 		COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '创建人',
  `mypoint` char(100) 	COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '我的描述',
  `publish_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP 	  COMMENT '发布时间',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `blogs_tags_index` (`tags`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- TODO: 文章表

DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `id` 		  int(10) 	unsigned NOT NULL AUTO_INCREMENT COMMENT '文章表',
  `title` 	char(100) 	COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '文章名称',
  `keywords`char(100) 	COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '关键字',
  `intro` 	text 		    COLLATE utf8_unicode_ci   COMMENT '介绍',
  `picture`	varchar(100)COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '图片',
  `images`  varchar(100)  COLLATE utf8_unicode_ci DEFAULT ''    COMMENT '图片集',
  `description` char(200) 	COLLATE utf8_unicode_ci DEFAULT ''	COMMENT '描述',
  `content` 	text 		  COLLATE utf8_unicode_ci   COMMENT '文章内容',
  `source` 		char(30) 	COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '网络-INTERNET，个人-MYSELF',
  `source_link` varchar(200)COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '来源网址',
  `tags` 	  char(20) 		COLLATE utf8_unicode_ci 	DEFAULT '' 		COMMENT '标签',
  `status` 	tinyint(2) 	DEFAULT '100' COMMENT '状态 100 未发布, 200 已发布',
  `sort_num`tinyint(2) 	DEFAULT '0' 	COMMENT '排序',
  `is_top` 	tinyint(2) 	DEFAULT '0' 	COMMENT '是否置顶',
  `author` 	char(30) 		COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '创建人',
  `mypoint` char(100) 	COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '我的描述',
  `publish_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP 	  COMMENT '发布时间',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `article_tags_index` (`tags`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- TODO:篮球赛
DROP TABLE IF EXISTS `blog_basketball`;
CREATE TABLE `blog_basketball` (
  `id` 	    int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '篮球集锦表',
  `title`   char(100) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '文章名称',
  `keywords`char(100) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '关键字',
  `intro`   text      COLLATE utf8_unicode_ci COMMENT '介绍',
  `picture` varchar(100)  COLLATE utf8_unicode_ci DEFAULT '' COMMENT '图片',
  `images`  varchar(100)  COLLATE utf8_unicode_ci DEFAULT '' COMMENT '图片集',
  `description` char(200) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '描述',
  `content` text  COLLATE utf8_unicode_ci NOT NULL COMMENT '文章内容',
  `source` 		char(30) 	COLLATE utf8_unicode_ci   DEFAULT '' 	  COMMENT '网络-INTERNET，个人-MYSELF',
  `source_link` varchar(200)COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '来源网址',
  `tags` 	  char(20) 		COLLATE utf8_unicode_ci 	DEFAULT '' 		COMMENT '标签',
  `status` 	tinyint(2) 	DEFAULT '100' COMMENT '状态 100 未发布, 200 已发布',
  `sort_num`tinyint(2) 	DEFAULT '0' 	COMMENT '排序',
  `is_top` 	tinyint(2) 	DEFAULT '0' 	COMMENT '是否置顶',
  `fee_intro` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '费用',
  `score`     varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '比分',
  `author` 	char(30) 		COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '创建人',
  `mypoint` char(100) 	COLLATE utf8_unicode_ci DEFAULT '' 	COMMENT '我的描述',
  `publish_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP 	  COMMENT '发布时间',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `basketball_type_id_index` (`tags`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- TODO: 球员表
DROP TABLE IF EXISTS `blog_basketuser`;
CREATE TABLE `blog_basketuser` (
  `id`  int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '比赛用户表',
  `uid` int(10) DEFAULT '0',
  `bid` int(10) DEFAULT '0' COMMENT   '比赛ID',
  `ranks`   char(20)      DEFAULT ''  COMMENT '队伍',
  `remark`  varchar(100)  DEFAULT ''  COMMENT '备注信息',
  `status`  tinyint(2)    DEFAULT '1' COMMENT '状态：1，2-缺席',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- TODO: 图片集
DROP TABLE IF EXISTS `blog_imgs`;
CREATE TABLE `blog_imgs` (
  `id`      int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imgkey`  char(20) DEFAULT '' COMMENT '资料类型',
  `imgval`  char(20) DEFAULT '' COMMENT '文件地址',
  `tags`    char(20) DEFAULT '' COMMENT '图片类型',
  `remark`  varchar(100) DEFAULT '' COMMENT '备注信息',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- TODO:标签-分类
DROP TABLE IF EXISTS `blog_tags`;
CREATE TABLE `blog_tags` (
  `id`      int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '标签表',
  `tags`    char(30)  COLLATE   utf8_unicode_ci DEFAULT '' COMMENT '标签 BASKET、XJS2017、XJLS2017',
  `tagname` char(30)  COLLATE   utf8_unicode_ci DEFAULT '' COMMENT '标签名称',
  `tagurl`  varchar(80) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '跳转链接',
  `groups`  char(20)  COLLATE utf8_unicode_ci   DEFAULT '' COMMENT '标签分组',
  `remark`  char(50)  COLLATE   utf8_unicode_ci DEFAULT '' COMMENT '备注',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态1-展示 2-不展示',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_created_at_index` (`tagname`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- TODO:用户表
DROP TABLE IF EXISTS `blog_user`;
CREATE TABLE `blog_user` (
  `id`        int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户表',
  `phone`     char(15) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '手机号',
  `name`      char(30) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '姓名',
  `nickname`  char(30)  COLLATE utf8_unicode_ci DEFAULT ''  COMMENT '昵称',
  `shortname` char(30)  COLLATE utf8_unicode_ci DEFAULT ''  COMMENT '名称首字母缩写',
  `jersey_no` char(20)  COLLATE utf8_unicode_ci DEFAULT ''  COMMENT '球衣号码',
  `intro`     text      COLLATE utf8_unicode_ci COMMENT '简介',
  `remark`    char(60)  COLLATE utf8_unicode_ci DEFAULT ''  COMMENT '备注',
  `sort`      tinyint(2)DEFAULT '0' COMMENT '排序：1-中-2大3-小4-后卫',
  `position`  char(50)  COLLATE utf8_unicode_ci DEFAULT ''  COMMENT '位置',
  `ranks`     char(20)  COLLATE utf8_unicode_ci DEFAULT ''  COMMENT '队伍',
  `tags`      char(20)  COLLATE utf8_unicode_ci DEFAULT 'BASKET' COMMENT '来源',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_created_at_index` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `blog_user` (`id`, `phone`, `name`, `nickname`, `shortname`, `jersey_no`, `intro`, `remark`, `sort`, `position`, `ranks`, `tags`, `created_at`, `updated_at`)
VALUES
	(1, '', '凌路', 'L.L', 'LL00', '00', '', '', NULL, '中锋', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(2, '', '陈晨', 'C.C', 'CC01', '01', '', '', NULL, '后卫', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(4, '', '陈学伟', 'C.X.W', 'CXW02', '02', '', '', NULL, '小前锋', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(5, '', '温磊', 'W.L', 'WL03', '03', '', '', NULL, '大前锋', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(6, '', '王政', 'W.Z', 'WZ04', '04', '', '', NULL, '后卫', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(7, '', '高磊', 'G.L', 'GL06', '06', '', '', NULL, '后卫', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(8, '', '张强', 'Z.Q', 'ZQ07', '07', '', '', NULL, '后卫', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(9, '', '郝鑫', 'H.X', 'HX08', '08', '', '', NULL, '后卫', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(10, '', '朱亚飞', 'Z.Y.F', 'ZYF09', '09', '', '', NULL, '后卫', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(11, '', '许超', 'X.C', 'XC10', '10', '', '', NULL, '小前锋', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(12, '', '王志鹏', 'W.Z.P', 'WZP11', '11', '', '', NULL, '中锋', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(13, '', '张新阳', 'Z.X.Y', 'ZXY12', '12', '', '', NULL, '大前锋', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(14, '', '张德利', 'Z.D.L', 'ZDL13', '13', '', '', NULL, '中锋', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(15, '', '王岩', 'W.Y', 'WY20', '20', '', '', NULL, '大前锋', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(16, '', '太建新', 'T.J.X', 'TJX21', '21', '', '', NULL, '大前锋', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(17, '', '连新兴', 'L.X.X', 'LXX23', '23', '', '', NULL, '小前锋', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(18, '', '赵峰', 'Z.F', 'ZF24', '24', '', '', NULL, '后卫', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(19, '', '于俊杰', 'Y.J.J', 'YJJ34', '34', '', '', NULL, '后卫', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(20, '', '石小杰', 'S.X.J', 'SXJ55', '55', '', '', NULL, '小前锋', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(21, '', '王新宇', 'W.X.Y', 'WXY96', '96', '', '', NULL, '后卫', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(22, '', '邹智睿', 'Z.Z.R', 'ZZR', '', '', '', NULL, '后卫', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(23, '', '田震', 'T.Z', 'TZ', '', '', '', NULL, '小前锋', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32'),
	(24, '', '王国昌', 'W.G.C', 'WGC', '', '', '', NULL, '后卫', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(25, '', '曹兴桦', 'C.X.H', 'CXH', '', '', '', NULL, '后卫', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(26, '', '张星远', 'Z.X.Y', 'ZXY12', '', '', '', NULL, '后卫', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(27, '', '王亮', 'W.L', 'WL', '', '', '', NULL, '中锋', 'XJS2017YD', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:14'),
	(28, '', '周辉', 'Z.H', 'ZH', '', '', '', NULL, '小前锋', 'XJS2017ED', 'BASKET', '2017-08-24 16:26:01', '2017-09-06 10:35:32');




