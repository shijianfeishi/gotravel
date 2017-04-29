/*
Navicat MySQL Data Transfer

Source Server         : 1611-666
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : gotravel

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-04-29 15:43:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `draw` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '1', '1', null, null, null, null, null);
INSERT INTO `user` VALUES ('44', '123', '54FV', '', '', '', '', '');
INSERT INTO `user` VALUES ('45', '1234', 'G3YT', '', '', '', '', '');
INSERT INTO `user` VALUES ('46', '1123123', 'R9AS', '', '', '', '', '');
INSERT INTO `user` VALUES ('47', '132123', 'SGO1', '', '', '', '', '');
INSERT INTO `user` VALUES ('48', '123123', '5843', '', '', '', '', '');
