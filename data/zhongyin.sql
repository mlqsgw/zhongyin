/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : zhongyin

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-27 18:07:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for zy_admin
-- ----------------------------
DROP TABLE IF EXISTS `zy_admin`;
CREATE TABLE `zy_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL COMMENT '管理员姓名',
  `account` varchar(255) DEFAULT NULL COMMENT '后台账号信息',
  `password` varchar(255) DEFAULT NULL COMMENT '登录密码',
  `grade` tinyint(1) DEFAULT '0' COMMENT '0 普通管理员  1 超级管理员',
  `is_del` tinyint(1) DEFAULT '0' COMMENT '0  未删除   1 已删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zy_admin
-- ----------------------------
INSERT INTO `zy_admin` VALUES ('1', '刘利', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');

-- ----------------------------
-- Table structure for zy_card_bill
-- ----------------------------
DROP TABLE IF EXISTS `zy_card_bill`;
CREATE TABLE `zy_card_bill` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` int(10) DEFAULT NULL COMMENT '用户id',
  `username` varchar(255) DEFAULT NULL COMMENT '开户姓名',
  `phone` varchar(13) DEFAULT NULL COMMENT '联系电话',
  `money` decimal(20,2) DEFAULT NULL COMMENT '套现金额',
  `status` tinyint(1) DEFAULT '0' COMMENT '审核状态 0 未审核  1 审核',
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zy_card_bill
-- ----------------------------
INSERT INTO `zy_card_bill` VALUES ('1', '3', '会员1', '12345678901', '20000.00', '0', '1514362377');
INSERT INTO `zy_card_bill` VALUES ('2', '4', '会员', '12345678901', '10000.00', '0', '1514362377');

-- ----------------------------
-- Table structure for zy_wx_user
-- ----------------------------
DROP TABLE IF EXISTS `zy_wx_user`;
CREATE TABLE `zy_wx_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_one_id` int(10) DEFAULT NULL COMMENT '专员id',
  `parent_two_id` int(10) DEFAULT NULL COMMENT '经理id',
  `parent_three_id` int(10) DEFAULT NULL COMMENT '银行家id',
  `username` varchar(255) DEFAULT NULL COMMENT '微信用户名',
  `sex` tinyint(1) DEFAULT '1' COMMENT '性别 1 男  2 女',
  `photo` varchar(255) DEFAULT NULL COMMENT '头像',
  `grade` tinyint(1) DEFAULT '0' COMMENT '等级 0 普通用户  1 专员  2 经理  3 银行家',
  `create_time` int(10) DEFAULT NULL COMMENT '创建时间',
  `is_del` tinyint(1) DEFAULT '0' COMMENT '是否删除 0 否 1 删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zy_wx_user
-- ----------------------------
INSERT INTO `zy_wx_user` VALUES ('1', null, null, null, '银行家', '1', null, '3', null, '0');
INSERT INTO `zy_wx_user` VALUES ('2', null, null, '1', '经理', '1', null, '2', null, '0');
INSERT INTO `zy_wx_user` VALUES ('3', null, '2', '1', '专员', '1', null, '1', null, '0');
INSERT INTO `zy_wx_user` VALUES ('4', '3', '2', '1', '普通会员', '1', null, '0', null, '0');
