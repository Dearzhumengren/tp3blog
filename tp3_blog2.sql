/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp3_blog2

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-08-26 17:37:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog_admin
-- ----------------------------
DROP TABLE IF EXISTS `blog_admin`;
CREATE TABLE `blog_admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` varchar(255) NOT NULL COMMENT '管理员名称',
  `password` char(255) NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_admin
-- ----------------------------
INSERT INTO `blog_admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `blog_admin` VALUES ('2', 'hello', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for blog_article
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '文章Id',
  `title` varchar(60) NOT NULL COMMENT '文章标题',
  `desc` varchar(255) NOT NULL COMMENT '文章描述',
  `pic` varchar(100) NOT NULL COMMENT '文章图片',
  `content` text NOT NULL COMMENT '文章内容',
  `cateid` mediumint(9) NOT NULL COMMENT '文章所属栏目ID',
  `time` int(12) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_article
-- ----------------------------
INSERT INTO `blog_article` VALUES ('1', '阿萨飒飒', '奥术大师多', '', '&lt;p&gt;阿萨德萨达所&amp;nbsp;&amp;nbsp;&lt;/p&gt;', '1', '0');
INSERT INTO `blog_article` VALUES ('2', 'PHP实战as', '阿达大', '', '&lt;p&gt;按时大大&lt;/p&gt;', '1', '0');
INSERT INTO `blog_article` VALUES ('3', '文档的大', '奥术大师大所', '', '&lt;p&gt;按时大大所多&lt;/p&gt;', '0', '0');
INSERT INTO `blog_article` VALUES ('4', '爱啥啥', '阿达大', '', '&lt;p&gt;奥术大师多撒大&lt;/p&gt;', '0', '0');
INSERT INTO `blog_article` VALUES ('5', '奥术大师多a', '实打实大所多', './Public/Uploads/2018-07-30/5b5edb263f46d.jpg', '&lt;p&gt;奥术大师多&lt;/p&gt;', '0', '0');
INSERT INTO `blog_article` VALUES ('6', 'asdasdasdas', 'asdasdasdsadas', '', '&lt;p&gt;sadasdasdasdasdasdas&lt;/p&gt;', '2', '0');
INSERT INTO `blog_article` VALUES ('7', '1111', '11112', '', '&lt;p&gt;322322&lt;/p&gt;', '1', '0');
INSERT INTO `blog_article` VALUES ('8', '8888', '11112', './Public/Uploads/2018-08-03/5b63b5045f1f2.jpg', '&lt;p&gt;8881111&lt;/p&gt;', '2', '0');
INSERT INTO `blog_article` VALUES ('9', 'Java教程', 'java企业项目开发', './Public/Uploads/2018-08-03/5b645c210acac.png', '&lt;p&gt;java企业项目开发&lt;/p&gt;&lt;p&gt;java企业项目开发&lt;/p&gt;&lt;p&gt;java企业项目开发&lt;/p&gt;&lt;p&gt;java企业项目开发&lt;/p&gt;&lt;p&gt;java企业项目开发&lt;/p&gt;&lt;p&gt;java企业项目开发&lt;/p&gt;&lt;p&gt;java企业项目开发&lt;/p&gt;', '1', '1533303840');

-- ----------------------------
-- Table structure for blog_cate
-- ----------------------------
DROP TABLE IF EXISTS `blog_cate`;
CREATE TABLE `blog_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `catename` varchar(60) NOT NULL COMMENT '栏目名称',
  `sort` mediumint(9) NOT NULL DEFAULT '20' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_cate
-- ----------------------------
INSERT INTO `blog_cate` VALUES ('1', '心情文章', '5');
INSERT INTO `blog_cate` VALUES ('2', '名言散文44', '6');

-- ----------------------------
-- Table structure for blog_link
-- ----------------------------
DROP TABLE IF EXISTS `blog_link`;
CREATE TABLE `blog_link` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '链接ID',
  `title` varchar(50) NOT NULL COMMENT '链接标题',
  `url` varchar(100) NOT NULL COMMENT '链接地址',
  `desc` varchar(255) NOT NULL COMMENT '链接描述',
  `sort` int(11) NOT NULL DEFAULT '20' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_link
-- ----------------------------
INSERT INTO `blog_link` VALUES ('1', 'PHP教程', 'www.baidu.com', 'PHP教程', '7');
INSERT INTO `blog_link` VALUES ('2', 'PHP实战', 'www.sina.com.cn', 'PHP实战教程', '20');
INSERT INTO `blog_link` VALUES ('3', 'PHP基础', 'www.php.com', 'PHP基础教程', '20');
INSERT INTO `blog_link` VALUES ('4', 'JavaSE教程', 'www.javaSE.com', 'JavaSE教程基础', '20');
