/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : boke

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-04-30 11:20:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `author` varchar(30) CHARACTER SET utf8 NOT NULL,
  `t_id` tinyint(4) NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL,
  `liulan` int(11) NOT NULL DEFAULT '0',
  `img` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dianzan` int(11) NOT NULL DEFAULT '0',
  `caogao` tinyint(4) NOT NULL DEFAULT '0',
  `u_id` int(11) NOT NULL DEFAULT '0',
  `top` tinyint(4) NOT NULL DEFAULT '1',
  `sortop` tinyint(4) NOT NULL DEFAULT '1',
  `is_sel` tinyint(4) NOT NULL DEFAULT '0',
  `alias` text NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('4', 'rewfdsfdsfsdfd', '\r\n\r\nfsdfsdfsdfdsfsdf\r\n', '1111111', '3', '2016-04-27 10:28:55', '0', '', '0', '0', '1', '1', '1', '0', '', '');
INSERT INTO `article` VALUES ('5', 'rewfdsfdsfsdfd', '\r\n\r\nfsdfsdfsdfdsfsdf\r\n', '1111111', '2', '2016-04-27 10:28:55', '0', '', '0', '0', '1', '1', '1', '0', '', '');
INSERT INTO `article` VALUES ('6', '都是撒', '\r\n\r\nfsdfsdfsdfdsfsdf\r\n', '1111111', '1', '2016-04-27 10:28:55', '0', '', '0', '1', '1', '1', '1', '0', '', '');
INSERT INTO `article` VALUES ('7', '的撒打算', '\r\n\r\nfsdfsdfsdfdsfsdf\r\n', '1111111', '2', '2016-04-27 10:28:55', '0', '', '0', '1', '1', '1', '1', '0', '', '');
INSERT INTO `article` VALUES ('8', 'dsadsdsa', '<p>dsadasdasdasdsadasdascsac sda</p>\r\n\r\n<p>dsad</p>\r\n\r\n<p>as</p>\r\n\r\n<p>das</p>\r\n\r\n<p>das</p>\r\n\r\n<p>da</p>\r\n\r\n<p>sd</p>\r\n', '1111111', '3', '2016-04-27 10:28:55', '0', '', '0', '1', '0', '1', '1', '0', '', '');
INSERT INTO `article` VALUES ('9', '而梵蒂冈的归属感', '<p><img alt=\"\" src=\"/ck/data/images/311424_1433084922_obcTK8KtMwWQ_small.jpg\" style=\"height:137px; width:104px\" />方的的所发生的的故事地方</p>\r\n', '1111111', '3', '2016-04-27 10:28:55', '0', '', '0', '1', '0', '1', '1', '0', '', '');
INSERT INTO `article` VALUES ('10', '发生的发生地方出色的服务生发生的发生的佛挡杀佛', '<p>发生大幅度天文发生的gsdewd个说的个</p>\r\n', '1111111', '1', '2016-04-27 10:28:55', '0', '', '0', '1', '0', '1', '1', '0', '', '');

-- ----------------------------
-- Table structure for article_type
-- ----------------------------
DROP TABLE IF EXISTS `article_type`;
CREATE TABLE `article_type` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `asname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `miaoshu` varchar(200) CHARACTER SET utf8 NOT NULL,
  `is_show` tinyint(4) NOT NULL DEFAULT '0',
  `order` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of article_type
-- ----------------------------
INSERT INTO `article_type` VALUES ('1', 'php', 'php', 'php是最强大的语言', '1', '6');
INSERT INTO `article_type` VALUES ('2', 'ajax', 'ajax', 'AJAX 是一种用于创建快速动态网页的技术。', '1', '0');
INSERT INTO `article_type` VALUES ('3', 'cache', 'c', '系统缓存', '1', '8');
INSERT INTO `article_type` VALUES ('8', 'linux', 'li', 'Linux是一套免费使用和自由传播的类Unix操作系统，是一个基于POSIX和UNIX的多用户、多任务、支持多线程和多CPU的操作系统。它能运行主要的UNIX工具软件、应用程序和网络协议。它支持32位和64位硬件。Linux继承了Unix以网络为核心的设计思想，是一个性能稳定的多用户网络操作系统。', '1', '6');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `art_id` int(11) NOT NULL DEFAULT '0',
  `content` varchar(200) CHARACTER SET utf8 NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `order` tinyint(4) NOT NULL DEFAULT '0',
  `desc` varchar(200) CHARACTER SET utf8 NOT NULL,
  `is_show` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', 'http://baidu.com', '百度1', '1', '百度是一大的网站搜索1', '1');
INSERT INTO `link` VALUES ('2', 'http://www.antgroup.com/', '蚂蚁金服', '5', '蚂蚁金融服务集团（以下称“蚂蚁金服”）起步于2004年成立的支付宝。2013年3月，支付宝的母公司——浙江阿里巴巴电子商务有限公司，宣布将以其为主体筹建小微金融服务集团（以下称“小微金服”），', '1');
INSERT INTO `link` VALUES ('3', 'http://www.360.com/', '360', '6', '奇虎360是由周鸿祎于2005年9月创立的以主营360杀毒为代表的免费网络安全平台和拥有问答等独立业务的公司。该公司主要依靠在线广告、游戏、互联网和增值业务创收', '1');

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `url` varchar(50) CHARACTER SET utf8 NOT NULL,
  `is_show` tinyint(4) NOT NULL DEFAULT '0',
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `order` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('1', '首页', 'http://location/index.php', '1', '1', '6');
INSERT INTO `nav` VALUES ('2', '微语', '', '1', '0', '9');
INSERT INTO `nav` VALUES ('3', '登录', 'http://localhost/admin.php', '1', '1', '10');

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `com_id` int(11) NOT NULL DEFAULT '0',
  `content` varchar(200) CHARACTER SET utf8 NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of reply
-- ----------------------------

-- ----------------------------
-- Table structure for tag
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagname` varchar(30) DEFAULT NULL,
  `a_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('2', '标签2', '2,30');
INSERT INTO `tag` VALUES ('4', '安安', '4,30');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pwd` char(32) CHARACTER SET utf8 NOT NULL,
  `autograph` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '签名',
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `img` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `miaoshu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `zhiwei` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '1111111', '96e79218965eb72c92a549dd5a330112', '1234567', '张昕', './common/images/2e24a64ae2f058dc4b6f0466360c8da7.jpg', '929242886@qq.com', '', 'dhaskfshuif a s fia twik fg gdi  ', '1');
INSERT INTO `user` VALUES ('2', 'zhangxin', '96e79218965eb72c92a549dd5a330112', 'fdsfsfd', 'zhangxin', './common/images/2e24a64ae2f058dc4b6f0466360c8da7.jpg', '929242886@qq.com', '', '并改变改天不敢', '0');
INSERT INTO `user` VALUES ('5', '张昕', '96e79218965eb72c92a549dd5a330112', '', 'zhangxin', './common/images/3a69f862c4adefbb79687e1c58e5fb44.jpg', '929242886@qq.com', '', '喝凉水复合肥', '0');
INSERT INTO `user` VALUES ('7', 'xixi', '96e79218965eb72c92a549dd5a330112', '', 'xixi', './common/images/c17f043a7a8d758290a2623cc2704bff.jpg', '929242886@qq.com', '', '的撒打算', '0');

-- ----------------------------
-- Table structure for whisp
-- ----------------------------
DROP TABLE IF EXISTS `whisp`;
CREATE TABLE `whisp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of whisp
-- ----------------------------
