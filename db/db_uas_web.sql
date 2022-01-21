/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : db_uas_web

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 07/01/2022 14:54:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_jenis_berita` bigint(20) UNSIGNED NOT NULL,
  `judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `vis_berita_desas_id_desa_foreign`(`id_jenis_berita`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES (6, 1, 'Indonesia Juara dua pada Piala AFF', 'asik');

-- ----------------------------
-- Table structure for jenis_berita
-- ----------------------------
DROP TABLE IF EXISTS `jenis_berita`;
CREATE TABLE `jenis_berita`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jenis_berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_berita
-- ----------------------------
INSERT INTO `jenis_berita` VALUES (6, 'Olah Raga');

-- ----------------------------
-- Table structure for mitra
-- ----------------------------
DROP TABLE IF EXISTS `mitra`;
CREATE TABLE `mitra`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mitra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 67 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mitra
-- ----------------------------
INSERT INTO `mitra` VALUES (1, 'kampung tangguh medokan surabaya');
INSERT INTO `mitra` VALUES (2, 'kampung sehat medokan surabaya');
INSERT INTO `mitra` VALUES (3, 'kampung cerdas medokan');
INSERT INTO `mitra` VALUES (4, 'kampung ngaglik cerdas');
INSERT INTO `mitra` VALUES (5, 'perumahan sugih tanpo bondo');
INSERT INTO `mitra` VALUES (7, 'kampung kemasan');
INSERT INTO `mitra` VALUES (9, 'ayam');

SET FOREIGN_KEY_CHECKS = 1;
