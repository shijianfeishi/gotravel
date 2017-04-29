/*
Navicat MySQL Data Transfer

Source Server         : 1611-666
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : gotravel

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-04-29 15:43:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `num` varchar(255) DEFAULT NULL,
  `sid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('1', '', '1', '', '19');
INSERT INTO `cart` VALUES ('2', '', '1', '', '3');
INSERT INTO `cart` VALUES ('3', '', '1', '', '30');
