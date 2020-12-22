/*
 Navicat Premium Data Transfer

 Source Server         : 172.16.0.251 cpaReport
 Source Server Type    : MySQL
 Source Server Version : 50643
 Source Host           : 172.16.0.251:3306
 Source Schema         : cpawebsite

 Target Server Type    : MySQL
 Target Server Version : 50643
 File Encoding         : 65001

 Date: 22/12/2020 10:42:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for counter
-- ----------------------------
DROP TABLE IF EXISTS `counter`;
CREATE TABLE `counter`  (
  `id_visit` int(11) NOT NULL AUTO_INCREMENT,
  `date_visit` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `ip_visit` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `visit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_visit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2819889 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_ceo
-- ----------------------------
DROP TABLE IF EXISTS `cpa_ceo`;
CREATE TABLE `cpa_ceo`  (
  `cpa_ceo_id` int(11) NOT NULL AUTO_INCREMENT,
  `cpa_ceo_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_ceo_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_ceo_picturename` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_ceo_position_show` int(20) DEFAULT NULL,
  `cpa_ceo_createdate` datetime(0) DEFAULT NULL,
  `cpa_ceo_statusactive` int(3) DEFAULT NULL,
  PRIMARY KEY (`cpa_ceo_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_events
-- ----------------------------
DROP TABLE IF EXISTS `cpa_events`;
CREATE TABLE `cpa_events`  (
  `cpa_event_id` int(11) NOT NULL AUTO_INCREMENT,
  `cpa_event_topic` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_detail` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_content` varchar(5000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_insert_date` datetime(0) DEFAULT NULL,
  `cpa_event_status` int(3) DEFAULT NULL,
  `cpa_event_user_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_pic1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_pic2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_pic3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_pic4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_pic5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_pic6` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`cpa_event_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_navbar
-- ----------------------------
DROP TABLE IF EXISTS `cpa_navbar`;
CREATE TABLE `cpa_navbar`  (
  `cpa_nav_id` int(11) NOT NULL,
  `cpa_text_color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_text_blod_color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_background_color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_text_hover` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`cpa_nav_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_counter
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_counter`;
CREATE TABLE `cpa_web_counter`  (
  `visit_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_visit` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ip_visit` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `visit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sessions_id` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`visit_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1300 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_event_gallery
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_event_gallery`;
CREATE TABLE `cpa_web_event_gallery`  (
  `id` int(15) NOT NULL,
  `cpa_event_id` int(15) DEFAULT NULL,
  `pic1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pic2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pic3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pic4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pic5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pic6` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_event_insert_date` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_footer_group
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_footer_group`;
CREATE TABLE `cpa_web_footer_group`  (
  `cpa_footer_group_id` int(11) NOT NULL,
  `cpa_footer_group_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_footer_status` int(5) DEFAULT NULL,
  PRIMARY KEY (`cpa_footer_group_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_footermenu
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_footermenu`;
CREATE TABLE `cpa_web_footermenu`  (
  `cpa_footer_id` int(11) NOT NULL AUTO_INCREMENT,
  `cpa_footer_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_footer_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_footer_group_id` int(50) DEFAULT NULL,
  `cpa_footer_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`cpa_footer_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_groupnews
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_groupnews`;
CREATE TABLE `cpa_web_groupnews`  (
  `cpa_groupnews_id` int(11) NOT NULL,
  `cpa_namegroup` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `insert_date` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`cpa_groupnews_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_log_ceo
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_log_ceo`;
CREATE TABLE `cpa_web_log_ceo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpa_log_ceo_id` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_old_ceoname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_ceonewname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_old_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_old_picturename` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_picturename` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_old_position` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_update_date` datetime(0) DEFAULT NULL,
  `cpa_log_oldstatus` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_newstatus` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_userupdate` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_log_events
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_log_events`;
CREATE TABLE `cpa_web_log_events`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpa_log_event_id` int(11) DEFAULT NULL,
  `cpa_log_topic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_topic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_content` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_content` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_user_update` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_update_date` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_log_footer
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_log_footer`;
CREATE TABLE `cpa_web_log_footer`  (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `cpa_log_footer_id` int(50) DEFAULT NULL,
  `cpa_log_footer_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_footer_new_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_footer_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_footer_new_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_groupid` int(10) DEFAULT NULL,
  `cpa_log_new_groupid` int(10) DEFAULT NULL,
  `cpa_log_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_update` datetime(0) DEFAULT NULL,
  `cpa_log_user_update` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_log_groupnews
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_log_groupnews`;
CREATE TABLE `cpa_web_log_groupnews`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpa_log_group_id` int(11) DEFAULT NULL,
  `cpa_log_group_old_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_group_new_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_old_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_new_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_update` datetime(0) DEFAULT NULL,
  `cpa_log_user_update` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_log_news
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_log_news`;
CREATE TABLE `cpa_web_log_news`  (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `cpa_news_id` int(50) DEFAULT NULL,
  `cpa_groupnews_id` int(25) DEFAULT NULL,
  `cpa_groupnews_new_id` int(25) DEFAULT NULL,
  `cpa_name_news` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_name_news_new` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_descriptions` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_descriptions_new` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_path_new` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_spec` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_spec_new` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_price_new` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `newstatus` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_edit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `update_datetime` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_log_userupdate
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_log_userupdate`;
CREATE TABLE `cpa_web_log_userupdate`  (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cpa_log_user_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_update_date` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_type_update` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_old_fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_old_lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_tel` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_old_role` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_oldstatus` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_user_update` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_news
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_news`;
CREATE TABLE `cpa_web_news`  (
  `cpa_news_id` int(11) NOT NULL AUTO_INCREMENT,
  `cpa_groupnews_id` int(20) DEFAULT NULL,
  `cpa_name_news` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_descriptions` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_spec_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_pdf_price_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_create_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_createdatetime` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_status` int(40) DEFAULT NULL,
  `cpa_views` int(40) DEFAULT NULL,
  PRIMARY KEY (`cpa_news_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1184 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_slideimg
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_slideimg`;
CREATE TABLE `cpa_web_slideimg`  (
  `id` int(11) NOT NULL,
  `image1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_user
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_user`;
CREATE TABLE `cpa_web_user`  (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `insertdate_time` datetime(0) DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for department
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department`  (
  `id` int(11) NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ita_detail
-- ----------------------------
DROP TABLE IF EXISTS `ita_detail`;
CREATE TABLE `ita_detail`  (
  `ita_id` int(11) NOT NULL AUTO_INCREMENT,
  `ita_order` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ita_eb` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ita_detal` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ita_icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ita_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ita_like` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ita_status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ita_update` datetime(0) DEFAULT NULL,
  `ita_userupdate` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`ita_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 142 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ita_eb
-- ----------------------------
DROP TABLE IF EXISTS `ita_eb`;
CREATE TABLE `ita_eb`  (
  `ita_eb_id` int(255) DEFAULT NULL,
  `ita_eb_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ita_eb_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `icon` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `url_admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pcode
-- ----------------------------
DROP TABLE IF EXISTS `pcode`;
CREATE TABLE `pcode`  (
  `code` char(2) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL DEFAULT '',
  `name` varchar(150) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `age_min` int(11) DEFAULT NULL,
  `age_max` int(11) DEFAULT NULL,
  `hos_guid` varchar(38) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `hos_guid_ext` varchar(64) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  PRIMARY KEY (`code`) USING BTREE,
  INDEX `ix_hos_guid`(`hos_guid`) USING BTREE,
  INDEX `ix_hos_guid_ext`(`hos_guid_ext`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = tis620 COLLATE = tis620_thai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for phone_tbl
-- ----------------------------
DROP TABLE IF EXISTS `phone_tbl`;
CREATE TABLE `phone_tbl`  (
  `phone_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone_num` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nickname` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `update` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`phone_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 309 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for phone_tel_type
-- ----------------------------
DROP TABLE IF EXISTS `phone_tel_type`;
CREATE TABLE `phone_tel_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel_type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel_type_name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel_type_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `file_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `post_date` datetime(0) DEFAULT NULL,
  `create_by` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `create_date` datetime(0) DEFAULT NULL,
  `update_by` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `update_date` datetime(0) DEFAULT NULL,
  `news_types` int(11) DEFAULT NULL,
  `file_path_spec` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `file_path_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1,
  `delete_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `delete_time` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1226 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pttype
-- ----------------------------
DROP TABLE IF EXISTS `pttype`;
CREATE TABLE `pttype`  (
  `pttype` char(2) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL DEFAULT '',
  `name` varchar(250) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `editmask` varchar(100) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `isuse` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `pcode` char(2) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `requirecode` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `doctor_fee` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `fee_code` varchar(7) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `contract` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `paidst` char(2) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `in_region` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `uc` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `require_hcode` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `oldcode` varchar(5) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `fee_code2` varchar(7) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `price_type` int(11) DEFAULT NULL,
  `debtor` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `noexpire` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `hipdata_code` varchar(6) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `min_age` int(11) DEFAULT NULL,
  `max_age` int(11) DEFAULT NULL,
  `bill_sss` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `bill_type` int(11) DEFAULT NULL,
  `hipdata_pttype` char(3) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `use_contract_id` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `yearly_charge` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `yearly_charge_icode1` varchar(7) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `yearly_charge_icode2` varchar(7) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `region_type` int(11) DEFAULT NULL,
  `pttype_group1` char(3) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `pttype_group2` char(3) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `pttype_guid` varchar(38) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `max_debt_money` double(15, 3) DEFAULT NULL,
  `allow_finance_edit` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `print_csmb_statement` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `pttype_information` longtext CHARACTER SET tis620 COLLATE tis620_thai_ci,
  `fee_code_paidst` char(2) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `fee_code2_paidst` char(2) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `debt_due_day` int(11) DEFAULT NULL,
  `rx_pay_debit_tr` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `separate_rcpno` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `rcp_bookno` int(11) DEFAULT NULL,
  `separate_debt_id` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `admit_fee_code` varchar(7) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `use_package` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `charge_df_perday` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `nhso_code` char(2) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `ipd_hour_cut` int(11) DEFAULT NULL,
  `pttype_spp_id` int(11) DEFAULT NULL,
  `print_presc_ned` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `hos_guid` varchar(38) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `sks_benefit_plan_type_id` int(11) DEFAULT NULL,
  `pttype_std_code` char(4) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `export_eclaim` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `skh_group` varchar(50) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `round_money` varchar(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `pttype_price_policy_type_id` int(11) DEFAULT NULL,
  `emp_privilege` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `is_pttype_plan` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `finance_round_money` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `emp_financial` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `pttype_eclaim_id` varchar(2) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `pttype_price_group_id` int(11) DEFAULT NULL,
  `calc_discount` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `debt_finance_limit` double(15, 3) DEFAULT NULL,
  `debt_finance_pttype` char(2) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `opbkk_type_code` varchar(2) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `ipd_bedcharge_24` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `nhso_subinscl` varchar(3) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `grouper_version` int(11) DEFAULT NULL,
  `grouper_release` varchar(5) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `rx_queue_group_id` int(11) DEFAULT NULL,
  `inc_round_money` char(1) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  `hospmain_list` varchar(100) CHARACTER SET tis620 COLLATE tis620_thai_ci DEFAULT NULL,
  PRIMARY KEY (`pttype`) USING BTREE,
  INDEX `name`(`name`) USING BTREE,
  INDEX `ix_ix_hipdata_code`(`hipdata_code`) USING BTREE,
  INDEX `ix_pcode`(`pcode`) USING BTREE,
  INDEX `ix_pttype_spp_id`(`pttype_spp_id`) USING BTREE,
  INDEX `ix_pttype_guid`(`pttype_guid`) USING BTREE,
  INDEX `ix_isuse`(`isuse`) USING BTREE,
  INDEX `ix_nhso_code`(`nhso_code`) USING BTREE,
  INDEX `ix_nhso_subinscl`(`nhso_subinscl`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = tis620 COLLATE = tis620_thai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for subworkdepartment
-- ----------------------------
DROP TABLE IF EXISTS `subworkdepartment`;
CREATE TABLE `subworkdepartment`  (
  `id` int(11) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `workdepart_id` int(11) DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fname` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lname` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for workdepartment
-- ----------------------------
DROP TABLE IF EXISTS `workdepartment`;
CREATE TABLE `workdepartment`  (
  `id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `en_description` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for workdetail
-- ----------------------------
DROP TABLE IF EXISTS `workdetail`;
CREATE TABLE `workdetail`  (
  `id` int(11) NOT NULL,
  `day` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `time` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `subwork_id` int(11) DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
