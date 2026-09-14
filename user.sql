/*
 Navicat Premium Dump SQL

 Source Server         : Aiven MySQL
 Source Server Type    : MySQL
 Source Server Version : 80408 (8.4.8)
 Source Host           : mysql-23100fd8-mylavalust-project.j.aivencloud.com:14555
 Source Schema         : mysql

 Target Server Type    : MySQL
 Target Server Version : 80408 (8.4.8)
 File Encoding         : 65001

 Date: 06/09/2026 19:27:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `Host` char(255) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL DEFAULT '',
  `User` char(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `Select_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Insert_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Update_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Delete_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Create_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Drop_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Reload_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Shutdown_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Process_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `File_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Grant_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `References_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Index_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Alter_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Show_db_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Super_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Create_tmp_table_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Lock_tables_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Execute_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Repl_slave_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Repl_client_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Create_view_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Show_view_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Create_routine_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Alter_routine_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Create_user_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Event_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Trigger_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Create_tablespace_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `ssl_type` enum('','ANY','X509','SPECIFIED') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `ssl_cipher` blob NOT NULL,
  `x509_issuer` blob NOT NULL,
  `x509_subject` blob NOT NULL,
  `max_questions` int UNSIGNED NOT NULL DEFAULT 0,
  `max_updates` int UNSIGNED NOT NULL DEFAULT 0,
  `max_connections` int UNSIGNED NOT NULL DEFAULT 0,
  `max_user_connections` int UNSIGNED NOT NULL DEFAULT 0,
  `plugin` char(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT 'caching_sha2_password',
  `authentication_string` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL,
  `password_expired` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `password_last_changed` timestamp NULL DEFAULT NULL,
  `password_lifetime` smallint UNSIGNED NULL DEFAULT NULL,
  `account_locked` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Create_role_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Drop_role_priv` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'N',
  `Password_reuse_history` smallint UNSIGNED NULL DEFAULT NULL,
  `Password_reuse_time` smallint UNSIGNED NULL DEFAULT NULL,
  `Password_require_current` enum('N','Y') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `User_attributes` json NULL,
  PRIMARY KEY (`Host`, `User`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin COMMENT = 'Users and global privileges' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('%', 'avnadmin', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'Y', 'N', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', '', '', '', '', 0, 0, 0, 0, 'caching_sha2_password', '$A$005$2nNYxj4u.\nva&.AvXlB7hBtAI2.XIJjiBEoayFY0zJzKsaCmddiMklG6', 'N', '2026-09-06 08:25:02', NULL, 'N', 'N', 'N', NULL, NULL, NULL, '{\"Restrictions\": [{\"Database\": \"mysql\", \"Privileges\": [\"INSERT\", \"UPDATE\", \"DELETE\", \"CREATE\", \"DROP\", \"REFERENCES\", \"INDEX\", \"ALTER\", \"CREATE TEMPORARY TABLES\", \"LOCK TABLES\", \"EXECUTE\", \"CREATE VIEW\", \"SHOW VIEW\", \"CREATE ROUTINE\", \"ALTER ROUTINE\", \"EVENT\", \"TRIGGER\"]}, {\"Database\": \"metrics_user_telegraf\", \"Privileges\": [\"INSERT\", \"UPDATE\", \"DELETE\", \"CREATE\", \"DROP\", \"REFERENCES\", \"INDEX\", \"ALTER\", \"CREATE TEMPORARY TABLES\", \"LOCK TABLES\", \"EXECUTE\", \"CREATE VIEW\", \"SHOW VIEW\", \"CREATE ROUTINE\", \"ALTER ROUTINE\", \"EVENT\", \"TRIGGER\"]}, {\"Database\": \"sys\", \"Privileges\": [\"INSERT\", \"UPDATE\", \"DELETE\", \"CREATE\", \"DROP\", \"REFERENCES\", \"INDEX\", \"ALTER\", \"CREATE TEMPORARY TABLES\", \"LOCK TABLES\", \"EXECUTE\", \"CREATE VIEW\", \"SHOW VIEW\", \"CREATE ROUTINE\", \"ALTER ROUTINE\", \"EVENT\", \"TRIGGER\"]}]}');
INSERT INTO `user` VALUES ('%', 'repluser', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '', '', '', 0, 0, 0, 0, 'caching_sha2_password', '$A$005$>HMq>,RLh\"?L>8|=]eeKx5hXPaHW74833aQPP6/ES4wpD5Wwybo1vv.6hxtAA', 'N', '2026-09-06 08:24:33', NULL, 'N', 'N', 'N', NULL, NULL, NULL, NULL);
INSERT INTO `user` VALUES ('::1', 'metrics_user_datadog', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '', '', '', 0, 0, 0, 5, 'caching_sha2_password', '$A$005$FFcg(aA4# W>/Iw\ro08WpeCmOJyHJ9rDKtfPiemDZ3M23kSTLXROG32s6fS.', 'N', '2026-09-06 08:25:16', NULL, 'N', 'N', 'N', NULL, NULL, NULL, '{\"Restrictions\": [{\"Database\": \"sys\", \"Privileges\": [\"SELECT\"]}, {\"Database\": \"mysql\", \"Privileges\": [\"SELECT\"]}]}');
INSERT INTO `user` VALUES ('::1', 'metrics_user_telegraf', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '', '', '', 0, 0, 0, 5, 'caching_sha2_password', '$A$005$\\XVUOrL]cow45A}KlOKAwC2dInTjRSJOsAAPojezWdKoa/WqsMok2XqO50', 'N', '2026-09-06 08:25:17', NULL, 'N', 'N', 'N', NULL, NULL, NULL, '{\"Restrictions\": [{\"Database\": \"sys\", \"Privileges\": [\"SELECT\"]}, {\"Database\": \"mysql\", \"Privileges\": [\"SELECT\"]}]}');
INSERT INTO `user` VALUES ('fda7:a938:5bfe:5fa6:%', 'root', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', '', '', '', '', 0, 0, 0, 0, 'caching_sha2_password', '$A$005$hn\Z1#u`\Zs.%aQCJIigy1deGbAadFzZpfpE4rCaWvo2pWwX4/EkZ7mZBP7', 'N', '2026-09-06 08:24:33', NULL, 'N', 'Y', 'Y', NULL, NULL, NULL, NULL);
INSERT INTO `user` VALUES ('localhost', 'mysql.infoschema', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '', '', '', 0, 0, 0, 0, 'caching_sha2_password', '$A$005$THISISACOMBINATIONOFINVALIDSALTANDPASSWORDTHATMUSTNEVERBRBEUSED', 'N', '2026-09-06 08:24:32', NULL, 'Y', 'N', 'N', NULL, NULL, NULL, NULL);
INSERT INTO `user` VALUES ('localhost', 'mysql.session', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '', '', '', 0, 0, 0, 0, 'caching_sha2_password', '$A$005$THISISACOMBINATIONOFINVALIDSALTANDPASSWORDTHATMUSTNEVERBRBEUSED', 'N', '2026-09-06 08:24:32', NULL, 'Y', 'N', 'N', NULL, NULL, NULL, NULL);
INSERT INTO `user` VALUES ('localhost', 'mysql.sys', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '', '', '', 0, 0, 0, 0, 'caching_sha2_password', '$A$005$THISISACOMBINATIONOFINVALIDSALTANDPASSWORDTHATMUSTNEVERBRBEUSED', 'N', '2026-09-06 08:24:32', NULL, 'Y', 'N', 'N', NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
