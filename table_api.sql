/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : table_api

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-03-13 14:17:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tabel`
-- ----------------------------
DROP TABLE IF EXISTS `tabel`;
CREATE TABLE `tabel` (
  `npm` int(10) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `kelas` char(1) DEFAULT NULL,
  `sesi` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tabel
-- ----------------------------
