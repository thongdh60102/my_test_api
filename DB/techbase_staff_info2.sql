/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100416
 Source Host           : 127.0.0.1:3306
 Source Schema         : techbase_staff_info

 Target Server Type    : MySQL
 Target Server Version : 100416
 File Encoding         : 65001

 Date: 27/03/2021 12:33:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for department_leaders
-- ----------------------------
DROP TABLE IF EXISTS `department_leaders`;
CREATE TABLE `department_leaders`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `department_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of department_leaders
-- ----------------------------
INSERT INTO `department_leaders` VALUES (1, 2, 1);
INSERT INTO `department_leaders` VALUES (2, 3, 2);

-- ----------------------------
-- Table structure for department_teams
-- ----------------------------
DROP TABLE IF EXISTS `department_teams`;
CREATE TABLE `department_teams`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `team_id` int NULL DEFAULT NULL,
  `department_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of department_teams
-- ----------------------------
INSERT INTO `department_teams` VALUES (1, 1, 1);
INSERT INTO `department_teams` VALUES (2, 2, 2);

-- ----------------------------
-- Table structure for departments
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `deparment_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO `departments` VALUES (1, 'DEPT 1');
INSERT INTO `departments` VALUES (2, 'DEPT 2');
INSERT INTO `departments` VALUES (3, 'DEPT 3');
INSERT INTO `departments` VALUES (4, 'DEPT 4');

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES (1, 'OS', NULL, 'div 1');
INSERT INTO `teams` VALUES (2, 'PHP', NULL, 'div 2');
INSERT INTO `teams` VALUES (3, 'C#', NULL, 'div 3');
INSERT INTO `teams` VALUES (4, 'Java', NULL, 'div 4');

-- ----------------------------
-- Table structure for user_teams
-- ----------------------------
DROP TABLE IF EXISTS `user_teams`;
CREATE TABLE `user_teams`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `team_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user_teams
-- ----------------------------
INSERT INTO `user_teams` VALUES (1, 1, 2);
INSERT INTO `user_teams` VALUES (2, 1, 4);
INSERT INTO `user_teams` VALUES (3, 2, 3);
INSERT INTO `user_teams` VALUES (4, 2, 5);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `birthdate` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `sex` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `other_info` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'director', 'Thong', '2021-03-09 12:10:54', 'male', NULL);
INSERT INTO `users` VALUES (2, 'staff', 'user 1', '2021-03-23 12:11:09', 'male', NULL);
INSERT INTO `users` VALUES (3, 'staff', 'user 2', '2021-03-31 12:11:41', 'female', NULL);
INSERT INTO `users` VALUES (4, 'staff', 'user 3', '2021-03-16 12:11:53', 'female', NULL);
INSERT INTO `users` VALUES (5, 'staff', 'user 4', '2021-03-27 12:12:26', 'male', NULL);
INSERT INTO `users` VALUES (6, 'staff', 'user 5', '2021-03-17 12:12:30', 'male', NULL);

SET FOREIGN_KEY_CHECKS = 1;
