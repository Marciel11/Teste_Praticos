/*
 Navicat Premium Data Transfer
 Source Server         : locahost
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : 127.0.0.1:3306
 Source Schema         : db_biblioteca
 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nivel_acesso
-- ----------------------------
DROP TABLE IF EXISTS `tbl_emprestimo`;
CREATE TABLE `tbl_emprestimo`  (
  `id` int NOT NULL,
  `titulo_livro` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dt_emprestimo`  date NOT NULL,
  `dt_devolucao`  date NOT NULL,
  `tipo_usuario`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

