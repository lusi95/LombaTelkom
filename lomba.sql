/*
Navicat MySQL Data Transfer

Source Server         : XAMPP
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : lomba

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-11-29 20:51:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `events`
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id_events` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_org` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_events`),
  KEY `fk_events` (`id_org`),
  CONSTRAINT `fk_events` FOREIGN KEY (`id_org`) REFERENCES `organizations` (`id_org`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of events
-- ----------------------------

-- ----------------------------
-- Table structure for `files`
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id_file` varchar(255) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `deskripsi_file` varchar(255) DEFAULT NULL,
  `jenis_file` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` double(3,3) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id_file`),
  KEY `fk_files` (`id_user`),
  CONSTRAINT `fk_files` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of files
-- ----------------------------

-- ----------------------------
-- Table structure for `organizations`
-- ----------------------------
DROP TABLE IF EXISTS `organizations`;
CREATE TABLE `organizations` (
  `id_org` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `site` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_org`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of organizations
-- ----------------------------

-- ----------------------------
-- Table structure for `participants`
-- ----------------------------
DROP TABLE IF EXISTS `participants`;
CREATE TABLE `participants` (
  `id_participant` varchar(255) NOT NULL,
  `id_files` varchar(255) DEFAULT NULL,
  `id_event` varchar(255) DEFAULT NULL,
  `score` double(3,3) DEFAULT NULL,
  PRIMARY KEY (`id_participant`),
  KEY `fk_participants_1` (`id_files`),
  KEY `fk_participants_2` (`id_event`),
  CONSTRAINT `fk_participants_1` FOREIGN KEY (`id_files`) REFERENCES `files` (`id_file`),
  CONSTRAINT `fk_participants_2` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_events`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of participants
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `id_org` varchar(255) DEFAULT NULL,
  `dir_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `fk_users` (`id_org`),
  CONSTRAINT `fk_users` FOREIGN KEY (`id_org`) REFERENCES `organizations` (`id_org`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('', null, null, '', '', '', null, null, null, null, '');
INSERT INTO `users` VALUES ('5d92ef3345893922cca0a96b785a1f9e599f5c52181b4eab33f36dca40c1248c', 'febrianda.rifqi72@gmail.com', 'bandung', 'febrianda.rifqi72@gmail.com', 'nanda', '05cb92ff06c80e13786c311178fd349bb01c25ce7d330d038a5de5e61b768eb3', 'bandung', 'Jawa Barat', '0123456789', null, 'dir/5d92ef3345893922cca0a96b785a1f9e599f5c52181b4eab33f36dca40c1248c');
