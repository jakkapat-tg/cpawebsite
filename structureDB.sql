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

 Date: 01/02/2021 20:58:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cpa_ceo
-- ----------------------------
INSERT INTO `cpa_ceo` VALUES (2, 'แพทย์หญิงโศรยา ธรรมรักษ์', 'ผู้อำนวยการโรงพยาบาลเจ้าพระยาอภัยภูเบศร', '20200719ceo114754.png', 999, '2020-07-19 11:47:54', 1);
INSERT INTO `cpa_ceo` VALUES (3, 'นายแพทย์ชาติชาย คล้ายสุบรรณ', 'รองผู้อำนวยการโรงพยาบาล ฝ่ายการแพทย์ คนที่ 2', '20200719ceo115110.png', 997, '2020-07-19 11:51:10', 1);
INSERT INTO `cpa_ceo` VALUES (4, 'แพทย์หญิงวลีรัตน์ ไกรโกศล', 'รองผู้อำนวยการโรงพยาบาลฝ่ายการแพทย์ คนที่ 1', '20201204ceo122455.jpg', 998, '2020-07-20 21:57:24', 1);
INSERT INTO `cpa_ceo` VALUES (5, 'Administrator asd', 'ผู้บริหารอะนะ', '20200725ceo092550.png', 995, '2020-07-24 08:29:13', 0);
INSERT INTO `cpa_ceo` VALUES (6, '(ยกเลิก)-โศรยา ธรรมรักษ์', 'ewrwrewr', '20200725ceo093026.png', 321, '2020-07-25 09:30:26', 0);
INSERT INTO `cpa_ceo` VALUES (7, 'แพทย์หญิงนิภาภรณ์ มณีรัตน์', 'ผู้อำนวยการศูนย์แพทยศาสตรศึกษาชั้นคลินิก', '20201204ceo122943.jpg', 992, '2020-12-04 12:29:43', 0);
INSERT INTO `cpa_ceo` VALUES (8, 'Administratoraaa', 'aaaa', '20201215ceo095817.jpg', 111, '2020-12-15 09:58:17', 0);

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_icon
-- ----------------------------
DROP TABLE IF EXISTS `cpa_icon`;
CREATE TABLE `cpa_icon`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `icon_class` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `icon_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 72 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cpa_icon
-- ----------------------------
INSERT INTO `cpa_icon` VALUES (1, 'fas fa-allergies', '&#xf461');
INSERT INTO `cpa_icon` VALUES (2, 'fas fa-ambulance', '&#xf0f9');
INSERT INTO `cpa_icon` VALUES (3, 'fas fa-band-aid', '&#xf462');
INSERT INTO `cpa_icon` VALUES (4, 'fas fa-biohazard', '&#xf780');
INSERT INTO `cpa_icon` VALUES (5, 'fas fa-bone', '&#xf5d7');
INSERT INTO `cpa_icon` VALUES (6, 'fas fa-bong', '&#xf55c');
INSERT INTO `cpa_icon` VALUES (7, 'fas fa-book-medical', '&#xf7e6');
INSERT INTO `cpa_icon` VALUES (8, 'fas fa-brain', '&#xf5dc');
INSERT INTO `cpa_icon` VALUES (9, 'fas fa-briefcase-medical', '&#xf469');
INSERT INTO `cpa_icon` VALUES (10, 'fas fa-burn', '&#xf46a');
INSERT INTO `cpa_icon` VALUES (11, 'fas fa-cannabis', '&#xf55f');
INSERT INTO `cpa_icon` VALUES (12, 'fas fa-capsules', '&#xf46b');
INSERT INTO `cpa_icon` VALUES (13, 'fas fa-clinic-medical', '&#xf7f2');
INSERT INTO `cpa_icon` VALUES (14, 'fas fa-comment-medical', '&#xf7f5');
INSERT INTO `cpa_icon` VALUES (15, 'fas fa-crutch', '&#xf7f7');
INSERT INTO `cpa_icon` VALUES (16, 'fas fa-diagnoses', '&#xf470');
INSERT INTO `cpa_icon` VALUES (17, 'fas fa-dna', '&#xf471');
INSERT INTO `cpa_icon` VALUES (18, 'fas fa-file-medical', '&#xf477');
INSERT INTO `cpa_icon` VALUES (19, 'fas fa-file-medical-alt', '&#xf478');
INSERT INTO `cpa_icon` VALUES (20, 'fas fa-file-prescription', '&#xf572');
INSERT INTO `cpa_icon` VALUES (21, 'fas fa-first-aid', '&#xf479');
INSERT INTO `cpa_icon` VALUES (22, 'fas fa-hand-holding-medical', '&#xf95c');
INSERT INTO `cpa_icon` VALUES (23, 'fas fa-head-side-cough', '&#xf961');
INSERT INTO `cpa_icon` VALUES (24, 'fas fa-head-side-cough-slash', '&#xf962');
INSERT INTO `cpa_icon` VALUES (25, 'fas fa-head-side-mask', '&#xf963');
INSERT INTO `cpa_icon` VALUES (26, 'fas fa-head-side-virus', '&#xf964');
INSERT INTO `cpa_icon` VALUES (27, 'fas fa-heart', '&#xf004');
INSERT INTO `cpa_icon` VALUES (28, 'far fa-heart', '&#xf004');
INSERT INTO `cpa_icon` VALUES (29, 'fas fa-heartbeat', '&#xf21e');
INSERT INTO `cpa_icon` VALUES (30, 'fas fa-hospital', '&#xf0f8');
INSERT INTO `cpa_icon` VALUES (31, 'far fa-hospital', '&#xf0f8');
INSERT INTO `cpa_icon` VALUES (32, 'fas fa-hospital-alt', '&#xf47d');
INSERT INTO `cpa_icon` VALUES (33, 'fas fa-hospital-symbol', '&#xf47e');
INSERT INTO `cpa_icon` VALUES (34, 'fas fa-id-card-alt', '&#xf47f');
INSERT INTO `cpa_icon` VALUES (35, 'fas fa-joint', '&#xf595');
INSERT INTO `cpa_icon` VALUES (36, 'fas fa-laptop-medical', '&#xf812');
INSERT INTO `cpa_icon` VALUES (37, 'fas fa-lungs-virus', '&#xf967');
INSERT INTO `cpa_icon` VALUES (38, 'fas fa-microscope', '&#xf610');
INSERT INTO `cpa_icon` VALUES (39, 'fas fa-mortar-pestle', '&#xf5a7');
INSERT INTO `cpa_icon` VALUES (40, 'fas fa-notes-medical', '&#xf481');
INSERT INTO `cpa_icon` VALUES (41, 'fas fa-pager', '&#xf815');
INSERT INTO `cpa_icon` VALUES (42, 'fas fa-pills', '&#xf484');
INSERT INTO `cpa_icon` VALUES (43, 'fas fa-plus', '&#xf067');
INSERT INTO `cpa_icon` VALUES (44, 'fas fa-poop', '&#xf619');
INSERT INTO `cpa_icon` VALUES (45, 'fas fa-prescription', '&#xf5b1');
INSERT INTO `cpa_icon` VALUES (46, 'fas fa-prescription-bottle', '&#xf485');
INSERT INTO `cpa_icon` VALUES (47, 'fas fa-prescription-bottle-alt', '&#xf486');
INSERT INTO `cpa_icon` VALUES (48, 'fas fa-procedures', '&#xf487');
INSERT INTO `cpa_icon` VALUES (49, 'fas fa-pump-medical', '&#xf96a');
INSERT INTO `cpa_icon` VALUES (50, 'fas fa-radiation', '&#xf7b9');
INSERT INTO `cpa_icon` VALUES (51, 'fas fa-radiation-alt', '&#xf7ba');
INSERT INTO `cpa_icon` VALUES (52, 'fas fa-shield-virus', '&#xf96c');
INSERT INTO `cpa_icon` VALUES (53, 'fas fa-smoking', '&#xf48d');
INSERT INTO `cpa_icon` VALUES (54, 'fas fa-smoking-ban', '&#xf54d');
INSERT INTO `cpa_icon` VALUES (55, 'fas fa-star-of-life', '&#xf621');
INSERT INTO `cpa_icon` VALUES (56, 'fas fa-stethoscope', '&#xf0f1');
INSERT INTO `cpa_icon` VALUES (57, 'fas fa-syringe', '&#xf48e');
INSERT INTO `cpa_icon` VALUES (58, 'fas fa-tablets', '&#xf490');
INSERT INTO `cpa_icon` VALUES (59, 'fas fa-teeth', '&#xf62e');
INSERT INTO `cpa_icon` VALUES (60, 'fas fa-teeth-open', '&#xf62f');
INSERT INTO `cpa_icon` VALUES (61, 'fas fa-thermometer', '&#xf491');
INSERT INTO `cpa_icon` VALUES (62, 'fas fa-tooth', '&#xf5c9');
INSERT INTO `cpa_icon` VALUES (63, 'fas fa-user-md', '&#xf0f0');
INSERT INTO `cpa_icon` VALUES (64, 'fas fa-user-nurse', '&#xf82f');
INSERT INTO `cpa_icon` VALUES (65, 'fas fa-vial', '&#xf492');
INSERT INTO `cpa_icon` VALUES (66, 'fas fa-vials', '&#xf493');
INSERT INTO `cpa_icon` VALUES (67, 'fas fa-virus', '&#xf974');
INSERT INTO `cpa_icon` VALUES (68, 'fas fa-virus-slash', '&#xf975');
INSERT INTO `cpa_icon` VALUES (69, 'fas fa-viruses', '&#xf976');
INSERT INTO `cpa_icon` VALUES (70, 'fas fa-weight', '&#xf496');
INSERT INTO `cpa_icon` VALUES (71, 'fas fa-x-ray', '&#xf497');

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
-- Records of cpa_navbar
-- ----------------------------
INSERT INTO `cpa_navbar` VALUES (1, '', '', '', NULL);

-- ----------------------------
-- Table structure for cpa_web_buildingzone_phone
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_buildingzone_phone`;
CREATE TABLE `cpa_web_buildingzone_phone`  (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `zone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `note1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `note2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `note3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cpa_web_buildingzone_phone
-- ----------------------------
INSERT INTO `cpa_web_buildingzone_phone` VALUES (1, 'ตึกคลอดผ่าตัด', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (2, 'ตึกอุบัติเหตุฉุกเฉิน', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (3, 'มูลนิธิ', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (4, 'หน่วยงานอื่นๆ', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (5, 'อาคาร 114 เตียง', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (6, 'อาคาร 58 ปี ', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (7, 'อาคาร 75 ปี', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (8, 'อาคารสุวัทนา', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (9, 'อาคารเครือข่าย', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (10, 'อาคารเฉลิมพระเกียรติฯ', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (11, 'อาคารเพชรรัตน', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (12, 'แพทย์แผนไทย', NULL, NULL, NULL);
INSERT INTO `cpa_web_buildingzone_phone` VALUES (13, 'โรงพยาบาลในจังหวัด', NULL, NULL, NULL);

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
  `time_stamp` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`visit_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
-- Records of cpa_web_footer_group
-- ----------------------------
INSERT INTO `cpa_web_footer_group` VALUES (1, 'ระบบภายใน รพ.', 1);
INSERT INTO `cpa_web_footer_group` VALUES (2, 'หน่วยงานสัมพันธ์', 1);
INSERT INTO `cpa_web_footer_group` VALUES (3, 'ช่วยเหลือ', 1);
INSERT INTO `cpa_web_footer_group` VALUES (4, 'ที่ตั้ง', 0);

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
-- Records of cpa_web_footermenu
-- ----------------------------
INSERT INTO `cpa_web_footermenu` VALUES (1, 'ระบบ Intranet', 'http://172.16.0.251', 1, '1');
INSERT INTO `cpa_web_footermenu` VALUES (2, 'Smart Office', 'http://cpa.thaismartoffice.com/smo/login?ReturnUrl=%2Fsmo%2F', 1, '1');
INSERT INTO `cpa_web_footermenu` VALUES (3, 'ระบบความเสี่ยง [IOR]', 'http://172.16.8.6/IOR_CPA_UAT/pages/login.aspx', 1, '1');
INSERT INTO `cpa_web_footermenu` VALUES (4, 'ระบบตรวจสอบสิทธิ์', 'http://ucsearch.nhso.go.th/ucsearch/index.jsp', 1, '1');
INSERT INTO `cpa_web_footermenu` VALUES (5, 'ระบบจองห้องประชุม', 'https://meeting-room.cpa.go.th/Web/?', 1, '1');
INSERT INTO `cpa_web_footermenu` VALUES (6, 'ร้านขายสมุนไพรอภัยภูเบศร', 'https://www.abhaishop.com/th', 2, '1');
INSERT INTO `cpa_web_footermenu` VALUES (7, 'อภัยภูเบศร เดย์สปา', 'http://www.abhaiherb.com/', 2, '1');
INSERT INTO `cpa_web_footermenu` VALUES (14, 'หน่วยกู้ชีพฉุกเฉิน รพ.เจ้าพระยาอภัยภูเบศร', 'https://www.facebook.com/abhaibhubejhrhospital/?rf=1599049880319290', 3, '1');

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
-- Records of cpa_web_groupnews
-- ----------------------------
INSERT INTO `cpa_web_groupnews` VALUES (1, 'ประชาสัมพันธ์', 'bullhorn', '2020/07/19 09:13:33', 1);
INSERT INTO `cpa_web_groupnews` VALUES (2, 'ข่าวรับสมัคร', 'address-book-o', '2020/07/19 09:13:33', 1);
INSERT INTO `cpa_web_groupnews` VALUES (3, 'ข่าวสอบราคา', 'calculator', '2020/07/19 09:13:33', 1);
INSERT INTO `cpa_web_groupnews` VALUES (4, 'รอบรั้วโรงพยาบาล', 'home', '2020/07/19 09:13:33', 1);
INSERT INTO `cpa_web_groupnews` VALUES (5, 'กิจกรรม', 'support', '2020/07/19 09:13:33', 1);
INSERT INTO `cpa_web_groupnews` VALUES (6, 'ข่าวอบรมภายใน', 'tags', '2020/07/19 09:13:33', 1);
INSERT INTO `cpa_web_groupnews` VALUES (7, 'test', NULL, '2020/07/25 21:26:42', 0);

-- ----------------------------
-- Table structure for cpa_web_groupspecial_news
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_groupspecial_news`;
CREATE TABLE `cpa_web_groupspecial_news`  (
  `cpa_groupspecial_id` int(11) NOT NULL,
  `cpa_groupspecial_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`cpa_groupspecial_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_groupspecial_news_log
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_groupspecial_news_log`;
CREATE TABLE `cpa_web_groupspecial_news_log`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpa_groupspecial_name_old` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_groupspecial_name_new` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status_old` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status_new` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `updatetime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpa_log_id` int(11) DEFAULT NULL,
  `updateuser` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
  `cpa_groupspecial_id` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`cpa_news_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cpa_web_phone_detail_log
-- ----------------------------
DROP TABLE IF EXISTS `cpa_web_phone_detail_log`;
CREATE TABLE `cpa_web_phone_detail_log`  (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `phone_id` int(30) DEFAULT NULL,
  `depname_old` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `depname_new` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel_numberold` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel_numbernew` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `zone_nameold` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `zone_namenew` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `updateuser` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `updatedatetime` datetime(0) DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
-- Records of cpa_web_slideimg
-- ----------------------------
INSERT INTO `cpa_web_slideimg` VALUES (1, '', '', '');

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
-- Records of cpa_web_user
-- ----------------------------
INSERT INTO `cpa_web_user` VALUES ('admin', '$2y$10$i5cU70iwqGEqN3u1XfopkOpufAsy1BamDTnBWWmIA7T3OTjcxRDgG', 'รัชวิทย์', 'พลชู', '1', 'admin', '2020-07-15 10:02:26', '3148', '1');
INSERT INTO `cpa_web_user` VALUES ('cpa00471', '$2y$10$UhqIsi7ZdiKzy/jljh72dOcwEbDMbQSBr/lz.AkZkV7gj6hCbZwlK', 'ภกญ.สุธีวรรณ', 'โหตกษาปน์กุล', '2', 'admin', '2021-01-08 11:33:11', '3309900143991', '1');

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
) ENGINE = InnoDB AUTO_INCREMENT = 143 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ita_detail
-- ----------------------------
INSERT INTO `ita_detail` VALUES (1, '1', '1', '1.1 ขออนุญาตเผยแพร่รายงานสรุปผลวิเคราะห์ผลการจัดซื้อจัดจ้าง', NULL, 'EB1_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (2, '2', '1', '1.2 รายงานสรุปผลวิเคราะห์ผลการจัดซื้อจัดจ้าง', NULL, 'EB1_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (3, '3', '1', '1.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์', NULL, 'EB1_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (4, '1', '2', '2.1 คำสั่งมอบอำนาจให้หัวหน้าส่วนราชการปฏิบัติราชการแทนราชการ', NULL, 'EP2_0.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (5, '2', '2', '2.2 ขออนุญาตเผยแพร่คำสั่งแต่งตั้งเจ้าหน้าที่', NULL, 'EP2_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (7, '3', '2', '2.3 คำสั่งแต่งตั้งหัวหน้าเจ้าหน้าที่ เจ้าหน้าที่', NULL, 'EP2_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (8, '4', '2', '2.4 แผนความต้องการครุภัณฑ์ทางการแพทย์ ประจำปีงบประมาณ 2563', NULL, 'EP2_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (10, '5', '2', '2.5 แผนความต้องการครุภัณฑ์อื่นๆ ประจำปีงบประมาณ 2563', NULL, 'EP2_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (11, '6', '2', '2.6 แผนการบริหารเงินค่าบริการทางการแพทย์ทีเบิกจ่ายในลักษณะงบลงทุน ปี 2563', NULL, 'EP2_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (12, '7', '2', '2.7 คำสั่งแต่งตั้งเจ้าหน้าที่ปิดประกาศและปลดประกาศในการจัดซื้อจัดจ้าง', NULL, 'EP2_6.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (13, '8', '2', '2.8 ขออนุญาตเผยแพร่กรอบแนวทางการดำเนินการเเพื่อส่งเสริมความโปร่งใสในการจัดซื้อจัดจ้าง', NULL, 'EP2_7.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (14, '9', '2', '2.9 แนวทางปฏิบัติในการดำเนินการจัดซื้อจัดจ้างผ่านระบบจัดซื้อจัดจ้างภาครัฐด้วยอิเล็กทรอนิกส์', NULL, 'EP2_8.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (15, '10', '2', '2.10 ประกาศสำนักงานปลัดกระทรวงสาธารณสุขว่าด้วยแนวทางการปฏิบัติเพื่อตรวจสอบบุคลากรในหน่วยงาน', NULL, 'EP2_9.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (16, '1', '2', '2.11 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์', NULL, 'EP2_10.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (17, '12', '2', '2.12 ภาพถ่ายการเผยแพร่แผนการจัดซื้อจัดจ้าง', NULL, 'EP2_11.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (18, '1', '3', '3.1 หลักฐานการเผยแพร่โครงการที่ 1 ทางระบบสารสนเทศของกรมบัญชีกลาง', NULL, 'EP3_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (19, '2', '3', '3.2 หลักฐานการเผยแพร่โครงการที่ 2 ทางระบบสารสนเทศของกรมบัญชีกลาง', NULL, 'EP3_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (20, '1', '4', '4.1 ขออนุญาตเผยแพร่แบบสรุปผลการดำเนินการจัดหาพัสดุในแต่ละรอบเดือน', NULL, 'EP4_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (21, '2', '4', '4.2 แบบสรุปผลการดำเนินการจัดซื้อจัดจ้างในแต่ละรอบเดือน (แบบ สขร.๑)', NULL, '4_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (22, '3', '4', '4.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์', NULL, 'EP4_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (23, '1', '5', '5.1 ขออนุญาตเผยแพร่การเปิดโอกาสให้ผู้มีส่วนได้เสียเข้ามามีส่วนร่วมในโครงการตามภารกิจหลักของหน่วยงาน.', NULL, '5_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (24, '2', '5', '5.2 การประชุมคณะทำงานเพื่อร่วมจัดทำแผนงานโครงการ NCD Clinic Plus', NULL, '5_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (25, '3', '5', '5.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '5_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (26, '1', '6', '6.1 ขออนุญาตเผยแพร่โครงการตามภารกิจหลักของหน่วยงาน', NULL, '6_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (27, '2', '6', '6.2 โครงการ NCD Clinic Plus โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '6_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (28, '3', '6', '6.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB6', NULL, '6_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (29, '1', '7', '7.1 ขออนุญาตเผยแพร่ภาพกิจกรรมดำเนินการตามโครงการ NCD Clinic Plus', NULL, '7_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (30, '2', '7', '7.2 ภาพถ่ายกิจกรรมโครงการ NCD Clinic Plus โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '7_2_new.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (31, '3', '7', '7.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB7', NULL, '7_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (32, '1', '8', '8.1 ขออนุญาตเผยแพร่ประกาศโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '8__1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (33, '2', '8', '8.2 ประกาศโรงพยาบาลเจ้าพระยาอภัยภูเบศร เรื่อง กรอบแนวทางการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์', NULL, '8_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (34, '3', '8', '8.3 ประกาศคณะกรรมการข้อมูลข่าวสารของราชการ', NULL, '8_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (35, '4', '9', '8.4 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB8', NULL, '8_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (36, '1', '9', '9.1.01 ผู้บริหารหน่วยงาน', NULL, '9_1_01.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (37, '1', '9', '9.1.02 นโยบายของผู้บริหาร', NULL, '9_1_02.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (38, '1', '9', '9.1.03 โครงสร้างหน่วยงาน', NULL, '9_1_03.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (39, '1', '9', '9.1.04 กฎกระทรวงแบ่งส่วนราชการสำนักงานปลัดกร', NULL, '9_1_04.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (40, '1', '9', '9.1.05 วิสัยทัศน์ พันธกิจ ค่านิยม MOPH', NULL, '9_1_05.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (41, '1', '9', '9.1.06 ยุทธศาสตร์ชาติ 20 ปี', NULL, '9_1_06.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (42, '1', '9', '9.1.07 พระราชบัญญัติมาตรฐานทางจริยธรรม พ.ศ. 2562', NULL, '9_1_07.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (43, '1', '9', '9.1.08 ประมวลจริยธรรมข้าราชการพลเรือน พ.ศ. 2552', NULL, '9_1_08.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (44, '1', '9', '9.1.09 ข้อบังคับสำนักงานปลัดกระทรวงสาธารณสุข', NULL, '9_1_01.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (45, '1', '9', '9.1.10 อินโฟกราฟฟิกคณะกรรมการจริยธรรม ประจำสำนักงานปลัดกระทรวงสาธารณสุข', NULL, '9_1_10.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (46, '1', '9', '9.1.11 จรรยาบรรณกระทรวงสาธารณสุข (MOPH Code of Conduct)', NULL, '9_1_11.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (47, '2', '9', '9.2 นโยบายและยุทธศาสตร์โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '9_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (48, '4', '9', '9.4 รายงานผลการปฏิบัติงานตามแผนปฏิบัติการ โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '9_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (49, '5', '9', '9.5 กระบวนการจัดการแก้ปัญหาในกรณีที่มีการร้องทุกข์', NULL, '9_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (50, NULL, '9', '9.6 ผลการดำเนินการเกี่ยวกับเรื่องร้องเรียน', NULL, '9_6.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (51, '7', '9', '9.7.1 รายงานสรุปผลวิเคราะห์ผลการจัดซื้อจัดจ้าง', NULL, '9_7_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (52, '7', '9', '9.7.2 แผนความต้องการครุภัณฑ์ทางการแพทย์ ประจำปีงบประมาณ 2563', NULL, '9_7_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (53, '7', '9', '9.7.3 แผนความต้องการครุภัณฑ์อื่นๆ ประจำปีงบประมาณ 2563', NULL, '9_7_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (54, '7', '9', '9.7.4 ประกาศสำนักงานปลัดกระทรวงสาธารณสุขว่าด้วยแนวทางปฎิบัติงานเพื่อตรวจสอบบุคลากรในหน่วยงานด้านการจัดซื้อจัดจ้าง', NULL, '9_7_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (55, '8', '9', '9.8 คู่มือประมวลจริยธรรมการปฏิบัติงานเพื่อป้องกันผลประโชนย์ทับซ้อน', NULL, '9_8.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (56, '9', '9', '9.9 ขั้นตอนการดำเนินการขอประวัติการรักษาพย', NULL, '9_9.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (57, '10', '9', '9.10 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ EB9', NULL, '9_10.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (58, '1', '10', '10.1 ขออนุญาตเผยแพร่แผนปฏิบัติการประจำปี 2563 ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '10_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (59, '2', '10', '10.2 แผนปฏิบัติการประจำปี 2563 ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '10_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (60, '3', '10', '10.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB10', NULL, '10_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (61, '1', '11', '11.1 ขออนุญาตเผยแพร่รายงานผลการปฏิบัติงานตามปฏิบัติราชการประจำปี 2562', NULL, '11_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (62, '2', '11', '11.2 แผนปฏิบัติการประจำปี ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '11_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (63, '3', '11', '11.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB11', NULL, '11_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (64, '1', '12', '12.1 ขออนุญาตเผยแพร่รายงานผลการดำเนินงานตามแผนปฏิบัติการประจำปีงบประมาณ พ.ศ.2563', NULL, '12_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (65, '2', '12', '12.2 รายงานผลการดำเนินงานตามแผนปฏิบัติการประจำปีงบประมาณ พ.ศ.2563', NULL, '12_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (66, '3', '12', '12.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB12', NULL, '12_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (67, '1', '13', '13.1 ขออนุญาตแจ้งเวียนและเผยแพร่กรอบแนวทางการปฏิบัติ', NULL, '13_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (68, '2', '13', '13.2 ประกาศสำนักงานปลัดกระทรวงสาธารณสุข ลงวันที่ 28 พฤษภาคม 2561', NULL, '13_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (69, '3', '13', '13.3 หนังสือสำนักงาน ก.พ. ที่ นร 1012ว 10 ลงวันที่ 24 มีนาคม 2552', NULL, '13_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (70, '4', '13', '13.4 หนังสือสำนักงาน ก.พ. ที่ นร 1012ว 20 ลงวันที่ 3 กันยายน 2552', NULL, '13_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (71, '5', '13', '13.5 ระเบียบกระทรวงการคลังว่าด้วยลูกจ้างประจำของส่วนราชการ', NULL, '13_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (72, '6', '13', '13.6 ประกาศคณะกรรมการบริหารพนักงานราชการ', NULL, '13_6.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (73, '7', '13', '13.7 หนังสือสำนักงานปลัดกระทรวงสาธารณสุข ที สธ0201.034/ว275 ลงวันที่ 21 ตุลคม 2554', NULL, '13_7.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (74, '8', '13', '13.8 หนังสือสำนักงานปลัดกระทรวงสาธารณสุข ด่วนที่สุด สธ0201.034/ว224 ลงวันที่ 24 มีนาคม 2558', NULL, '13_8.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (75, '9', '13', '13.9 ประกาศคณะกรรมการบริหารพนักงานกระทรวงสาธารณสุข', NULL, '13_9.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (76, '10', '13', '13.10 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB13', NULL, '13_10.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (77, '1', '14', '14.1 ขออนุญาตเผยแพร่บัญชีรายชื่อข้าราชการผู้มีผลการปฎิบัติราชการระดับดีเด่น และดีมาก', NULL, '14_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (78, '2', '14', '14.2 บัญชีรายชื่อข้าราชการผู้มีผลการปฏิบัติราชการอยู่ระดับดีเด่น', NULL, '14_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (79, '3', '14', '14.3 ประชาสัมพันธ์บัญชีรายชื่อข้าราชการผู้มีผลการปฎิบัติราชการระดับดีเด่น และดีมาก', NULL, '14_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (80, '4', '14', '14.4 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB14', NULL, '14_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (81, '1', '15', '15.1 ขออนุญาตแจ้งเวียนและเผยแพร่ประกาศเจตนา', NULL, '15_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (82, '2', '15', '15.2 ประกาศเจตนารมณ์และบันทึกข้อตกลงร่วมแสดงเจตนารมณ์ต่อต้านการทุจริต', NULL, '15_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (83, '3', '15', '15.3 ภาพถ่ายกิจกรรมการประกาศเจตนารมณ์ต่อต้านการทุจริต', NULL, '15_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (84, '4', '15', '15.4 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB15', NULL, '15_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (85, '1', '16', '16.1 ขออนุญาตเผยแพร่คู่มือการปฏิบัติงานกระบวนการจัดการเรื่องราวร้องทุกข์ โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '16_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (86, '2', '16', '16.2 คู่มือการปฏิบัติงานกระบวนการจัดการเรื่องราวร้องทุกข์ โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '16_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (87, '3', '16', '16.3 ช่องทางร้องเรียนร้องทุกข์', NULL, '16_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (88, '4', '16', '16.4 แผนผังขั้นตอนการร้องเรียนของผู้ใช้บริการ ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '16_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (89, '5', '16', '16.5 ผลการดำเนินการเกี่ยวกับเรื่องร้องเรียนการปฏิบัติงานหรือการให้บริการ', NULL, '16_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (90, '6', '16', '16.6 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB16', NULL, '16_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (91, '1', '17', '17.1 ขออนุญาตแจ้งเวียนและเผยแพร่มาตรการ กลไก หรือการวางระบบในการป้องกันรับสินบน', NULL, '17_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (92, '2', '17', '17.2 ประกาศกระทรวงสาธารณสุข เรื่อง การให้และการรับของขวัญของราชการชั้นผู้ใหญ่หรือผู้บังคับบัญชาในโอกาสต่าง ๆ', NULL, '17_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (93, '3', '17', '17.3 มาตรการป้องกันการรับสินบนในกระบวนการเบิกจ่ายยาตามสิทธิสัวสดิการรักษาพยาบาลข้าราชการ', NULL, '17_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (94, '4', '17', '17.4 ประกาศกระทรวงสาธารณสุขว่าด้วยเกณฑ์จริยธรรม', NULL, '17_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (95, '5', '17', '17.5 ประกาศสำนักงานปลัดกระทรวงสาธารณสุข เรือง มาตรการป้องกันทุจริต', NULL, '17_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (96, '6', '17', '17.6 แนวทางปฏิบัติในการรับของแถมของสำนักงานปลัดกระทรวงสาธารณสุข', NULL, '17_6.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (97, '7', '17', '17.7 แนวทางการดำเนินการตามข้อเสนอแนะเพื่อป้องกันทุจริต', NULL, '17_7.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (98, '8', '17', '17.8 กรอบแนวทางและมาตรการการป้องกันการรับสินบนทุกรูปแบบ', NULL, '17_8.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (99, '9', '17', '17.9 แบบรายงานการดำเนินการตามมาตรการป้องกัน', NULL, '17_9.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (100, '10', '17', '17.10 แบบรายงานเรี่ยไรและการให้หรือรับของขวัญหรือประโยชน์อื่นใด', NULL, '17_11.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (101, '11', '17', '17.11 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB17', NULL, '17_11.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (102, '1', '18', '18.1 ขออนุญาตเผยแพร่วัฒนธรรมและค่านิยมสุจริตและการต่อต้านการทุจริตในหน่วยงาน', NULL, '18_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (103, '2', '18', '18.2 การเผยแพร่วัฒนธรรมและค่านิยมสุจริตและการต่อต้านการทุจริตในหน่วยงาน ผ่านfacebook fanpage โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '18_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (104, '3', '18', '18.3 ภาพถ่ายกิจกรรมการประกาศเจตนารมณ์ต่อต้านการทุจริต รับมอบประกาศ และบันทึกข้อตกลงร่วมแสดงเจตนารมณ์การต่อต้านการทุจริต', NULL, '18_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (105, '4', '18', '18.4 แบบรายงานการดำเนินการตามมาตรการป้องกันการทุจริต และแก้ไขการกระทำผิดวินัยของเจ้าหน้าที่รัฐ ปีงบประมาณ 2562 รอบ 12 เดือน โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '18_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (106, '5', '18', '18.5 แบบรายงานเรี่ยไรและการให้หรือรับของขวัญหรือประโยชน์อื่นใด ปีงบประมาณ 2562 รอบ 12 เดือน โรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '18_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (107, '6', '18', '18.6 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB18', NULL, '18_6.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (108, '1', '19', '19.1 ขออนุญาตเผยแพร่การรวมกลุ่มเพื่อเสริมสร้างคุณธรรม ความซื่อสัตย์สุจริตและพัฒนาความโปร่งใส.', NULL, '19_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (109, '2', '19', '19.2 การรวมกลุ่มเพื่อเสริมสร้างคุณธรรม ความซื่อสัตย์สุจริตและพัฒนาความโปร่งใสโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '19_2_new.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (110, '3', '19', '19.3 การสะท้อนความคิดริเริ่มของกลุ่มเพื่อเสริมสร้างคุณธรรม ความซื่อสัตย์สุจริตและพัฒนาความโปร่งใส', NULL, '19_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (111, '4', '19', '19.4 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB19', NULL, '19_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (112, '1', '20', '20.1 ขออนุญาตเผยแพร่รายงานการวิเคราะห์ความเสี่ยงเกี่ยวกับการปฎิบัติงานที่เกิดปัะโยชน์ทับซ้อน', NULL, '20_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (113, '2', '20', '20.2 รายงานการวิเคราะห์ความเสี่ยงเกี่ยวกับการปฎิบัติงานที่อาจเกิดผลประโชยน์ทับซ้อน', NULL, '20_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (114, '3', '20', '20.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB20', NULL, '20_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (115, '1', '21', '21.1 ขออนุญาตแจ้งเวียนและเผยแพร่คู่มือประมวลจริยธรรมการปฎิบัติงานเพื่อป้องกันผลประโยชน์ทับซ้อน', NULL, '21_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (116, '2', '21', '21.2 คู่มือประมวลจริยธรรมการปฏิบัติงานเพื่อป้องกันผลประโยชน์ทับซ้อน', NULL, '21_2_new.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (117, '3', '21', '21.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB21', NULL, '21_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (118, '1', '22', '22.1 ขออนุญาตเผนแพร่การประชุมการวิเคราะห์ความเสี่ยงเกี่ยวกับการปฏิบัติงานที่อาจเกิดผลประโยชน์ทับซ้อน', NULL, '22_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (119, '2', '22', '22.2 การประชุมการวิเคราะห์ความเสี่ยงเกี่ยวกับการปฏิบัติงานที่อาจเกิดผลประโยชน์ทับซ้อน', NULL, '22_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (120, '3', '22', '22.3 ภาพถ่ายการประชุมการวิเคราะห์ความเสี่ยงเกี่ยวกับการปฏิบัติงานที่อาจเกิดผลประโยชน์ทับซ้อน', NULL, '22_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (121, '4', '22', '22.4 ภาพการอบรมเรื่องการป้องกันผลประโยชน์ทับซ้อนในการทำงานแก่เจ้าหน้าที่', NULL, '22_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (122, '5', '22', '22.5 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB22', NULL, '22_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (123, '1', '23', '23.1 ขออนุญาตเผยแพร่แผนปฏิบัติการป้องกัน ปราบปรามการทุจริตและพฤติกรรมมิชอบ', NULL, '23_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (124, '2', '23', '23.2 แผนปฏิบัติการป้องกัน ปราบปรามการทุจริต', NULL, '23_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (125, '3', '23', '23.3 แผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมชองหน่วยงาน', NULL, '23_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (126, '4', '23', '23.4 คำสั่ง แต่งตั้งคณะกรรมการชมรมจริยธรรมโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '23_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (127, '5', '23', '23.5 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB23', NULL, '23_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (128, '1', '24', '24.1 ขออนุญาตเผยแพร่รายงานผลการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรม', NULL, '24_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (129, '2', '24', '24.2 รายงานผลการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของโรงพยาบาลเจ้าพระยาอภัยภูเบศร', NULL, '24_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (130, '3', '24', '24.3 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB24', NULL, '24_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (131, '1', '25', '25.1 ขออนุญาตแจ้งเวียนและเผยแพร่มาตรการในการตรวจสอบในการปฎิบัติงานของเจ้าหน้าที่ตามมาตรฐาน', NULL, '25_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (132, '2', '25', '25.2 คำสั่งโรงพยาบาลเจ้าพระยาอภัยภูเบศร เรื่อง มาตรการความปลอดภัยในการใช้รถพยาบาล', NULL, '25_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (133, '3', '25', '25.3 แบบบันทึกผลการตรวจระดับแอลกอฮอล์รายวัน', NULL, '25_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (134, '4', '25', '25.4 คู่มือระบบการป้องกันการละเว้นการปฏิบัติหน้าที่', NULL, '25_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (135, '5', '25', '25.5 คู่มือการปฏิบัติงานตามมาตรการการใช้รถราชการ', NULL, '25_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (136, '6', '25', '25.6 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB25', NULL, '25_6.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (137, '1', '26', '26.1 กระบวนการอำนวยความสะดวกและการให้บริการประชาชนผ่าน Fackbook Fanpage', NULL, '26_1.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (138, '2', '26', '26.2 กระบวนการอำนวยความสะดวกและการให้บริการประชาชนผ่านเว็บไซต์', NULL, '26_2.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (139, '3', '26', '26.3 ภาพถ่ายหน่วยประชาสัมพันธ์และจุดบริการให้บริการข้อมูลข่าวสารแก่ประชาชน', NULL, '26_3.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (140, '4', '26', '26.4 ขั้นตอนการดำเนินการขอประวัติการรักษาพยาบาลของผู้ป่วย', NULL, '26_4.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (141, '5', '26', '26.5 แบบฟอร์มการขอเผยแพร่ข้อมูลผ่านเว็บไซต์ของโรงพยาบาลเจ้าพระยาอภัยภูเบศร EB26', NULL, '26_5.pdf', NULL, '1', '2020-03-13 09:57:24', 'admin');
INSERT INTO `ita_detail` VALUES (142, '991', '2', 'test1', NULL, 'ITA-EB-2-20210201-2d3fcdb51287ce3db0d902d4860b12e3.pdf', NULL, '0', '2021-02-01 20:53:15', 'admin');

-- ----------------------------
-- Table structure for ita_eb
-- ----------------------------
DROP TABLE IF EXISTS `ita_eb`;
CREATE TABLE `ita_eb`  (
  `ita_eb_id` int(255) NOT NULL AUTO_INCREMENT,
  `ita_eb_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ita_eb_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ita_eb_year` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int(5) DEFAULT NULL,
  PRIMARY KEY (`ita_eb_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ita_eb
-- ----------------------------
INSERT INTO `ita_eb` VALUES (1, 'EB 1 ', 'หน่วยงานมีการวิเคราะห์ผลการจัดซื้อจัดจ้างประจำปี', '2563', 1);
INSERT INTO `ita_eb` VALUES (2, 'EB 2', 'หน่วยงานมีการกำหนดมาตรการ กลไก หรือการวางระบบในการดำเนินการเพื่อส่งเสริมความโปร่งใสในการจัดซื้อ', '2563', 1);
INSERT INTO `ita_eb` VALUES (3, 'EB 3', 'หน่วยงานมีการเผยแพร่แผนการจัดซื้อจัดจ้างประจำปี', '2563', 1);
INSERT INTO `ita_eb` VALUES (4, 'EB 4', 'หน่วยงานมีการเผยแพร่บันทึกรายละเอียดวิธีการ และขั้นตอนการจัดซื้อจัดจ้างอย่างเป็นระบบ', '2563', 1);
INSERT INTO `ita_eb` VALUES (5, 'EB 5', 'หน่วยงานของท่านเปิดโอกาสให้ผู้มีส่วนได้ส่วนเสียมีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานอย่างไร', '2563', 1);
INSERT INTO `ita_eb` VALUES (6, 'EB 6', 'ผู้มีส่วนได้ส่วนเสียเข้ามามีส่วนร่วมในการจัดทำแผนงาน/โครงการ ตามภารกิจหลักของหน่วยงานหรือไม่\r\n\r\n', '2563', 1);
INSERT INTO `ita_eb` VALUES (7, 'EB 7', 'ผู้มีส่วนได้ส่วนเสียเข้ามามีส่วนร่วมในการดำเนินการโครงการตามภารกิจหลักของหน่วยงานหรือไม่', '2563', 1);
INSERT INTO `ita_eb` VALUES (8, 'EB 8', 'หน่วยงานมีการกำหนดมาตรการ กลไก หรือการวางระบบในการเผยแพร่ข้อมูลต่อสาธารณผ่านเว็บไซต์ของหน่วยงาน', '2563', 1);
INSERT INTO `ita_eb` VALUES (9, 'EB 9', 'หน่วยงานมีการเปิดเผยข้อมูลข่าวสารที่เป็นปัจจุบัน', '2563', 1);
INSERT INTO `ita_eb` VALUES (10, 'EB 10', 'หน่วยงานมีการเผยแพร่แผนปฏิบัติราชการประจำปี', '2563', 1);
INSERT INTO `ita_eb` VALUES (11, 'EB 11', 'หน่วยงานมีการเผยแพร่รายงานการประเมินผลการปฏิบัติงานตามแผนปฏิบัติราชการประจำปี', '2563', 1);
INSERT INTO `ita_eb` VALUES (12, 'EB 12', 'หน่วยงานมีการเผยแพร่การกำกับติดตามการดำเนินงานตามแผนปฏิบัติราชการประจำปี', '2563', 1);
INSERT INTO `ita_eb` VALUES (13, 'EB 13', 'หน่วยงานมีการกำหนดมาตรการ กลไก หรือการวางระบบในการบริหารผลการปฏิบัติงานฯ', '2563', 1);
INSERT INTO `ita_eb` VALUES (14, 'EB 14', 'หน่วยงานมีการรายงานการประเมินผลเกี่ยวกับการประเมินผลการปฏิบัติราชการประจำปีของบุคลากรฯ', '2563', 1);
INSERT INTO `ita_eb` VALUES (15, 'EB 15', 'หน่วยงานมีการเผยแพร่เจตจำนงสุจริตของผู้บริหารต่อสาธารณชน', '2563', 1);
INSERT INTO `ita_eb` VALUES (16, 'EB 16', 'หน่วยงานมีการกำหนดมาตรการ กลไก หรือการวางระบบในการจัดการเรื่องร้องเรียนของหน่วยงาน', '2563', 1);
INSERT INTO `ita_eb` VALUES (17, 'EB 17', 'หน่วยงานมีการกำหนดมาตรการ กลไก หรือการวางระบบในการป้องกันการรับสินบน', '2563', 1);
INSERT INTO `ita_eb` VALUES (18, 'EB 18', 'หน่วยงานมีการเสริมสร้างวัฒนธรรมและค่านิยมสุจริตและการต่อต้านการทุจริตในหน่วยงาน', '2563', 1);
INSERT INTO `ita_eb` VALUES (19, 'EB 19', 'หน่วยงานมีการรวมกลุ่มของเจ้าหน้าที่เพื่อการบริหารงานที่โปร่งใสหรือไม่ฯ', '2563', 1);
INSERT INTO `ita_eb` VALUES (20, 'EB 20', 'หน่วยงานมีการวิเคราะห์ความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนในหน่วยงาน', '2563', 1);
INSERT INTO `ita_eb` VALUES (21, 'EB 21', 'หน่วยงานมีการจัดการความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อน โดยการกำหนดมาตรการ กลไกฯ', '2563', 1);
INSERT INTO `ita_eb` VALUES (22, 'EB 22', 'หน่วยงานมีการประชุม หรืออบรม/สัมนา หรือแลกเปลี่ยนความรู้ภายในหน่วยงานฯ', '2563', 1);
INSERT INTO `ita_eb` VALUES (23, 'EB 23', 'หน่วยงานมีการจัดทำแผนป้องกันและปราบปรามการทุจริตหรือแผนที่เกี่ยวข้อง', '2563', 1);
INSERT INTO `ita_eb` VALUES (24, 'EB 24', 'หน่วยงานมีการกำกับติดตามการดำเนินงานตามแผนป้องกันและปราบปรามการทุจริตหรือแผนที่เกี่ยวข้อง', '2563', 1);
INSERT INTO `ita_eb` VALUES (25, 'EB 25', 'หน่วยงานมีการกำหนดมาตรการ กลไก หรือการวางระบบในการตรวจสอบการปฏิบัติงานของเจ้าหน้าที่ฯ', '2563', 1);
INSERT INTO `ita_eb` VALUES (26, 'EB 26', 'หน่วยงานมีการเผยแพร่กระบวนการอำนวยความสะดวก หรือการให้บริการประชาชนด้วยการแสดงขั้นตอน ฯ', '2563', 1);
INSERT INTO `ita_eb` VALUES (27, 'eb test1', 'test', '2564', 0);

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
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'ประชาสัมพันธ์', 'glyphicon-bullhorn', 'general.php');
INSERT INTO `news` VALUES (2, 'ข่าวรับสมัคร', 'glyphicon-user', 'recruit.php');
INSERT INTO `news` VALUES (3, 'ข่าวสอบราคา', 'glyphicon-tags', 'procurement.php');
INSERT INTO `news` VALUES (4, 'รอบรั้วโรงพยาบาล', 'glyphicon-home', 'insider.php');
INSERT INTO `news` VALUES (5, 'กิจกรรม', 'glyphicon-globe', 'events.php');
INSERT INTO `news` VALUES (6, 'ข่าวอบรมภายใน', 'glyphicon-blackboard', 'training.php');

-- ----------------------------
-- Table structure for phone_detail_cpa
-- ----------------------------
DROP TABLE IF EXISTS `phone_detail_cpa`;
CREATE TABLE `phone_detail_cpa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `zone_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `class_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `order_show` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status_on` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `dateupdate` datetime(0) DEFAULT NULL,
  `userupdate` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `max_search` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 366 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of phone_detail_cpa
-- ----------------------------
INSERT INTO `phone_detail_cpa` VALUES (1, 'ประชาสัมพันธ์', '2000/2104', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (2, 'ห้องให้คำปรึกษา', '2102', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (3, 'ห้องพักแพทย์', '2105', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (4, 'ห้องตรวจเด็ก', '2003/2004/2019', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (5, 'ห้องพักแพทย์', '2140', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (6, 'คุณวัชรี', '2157', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (7, 'LAB นอกเวลา/โอพีดี', '2116', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (8, 'LAB นอกเวลา/โอพีดี', '2117', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (9, 'ห้องยานอก', '2118', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (10, 'ห้องยานอก', '2119', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (11, 'การเงินผู้ป่วยนอก', '2147', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (12, 'โต๊ะสกรีน โอ.พี.ดี', '2130', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (13, 'ศูนย์แอดมิด Admin OPD', '2178', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (14, 'ศูนย์พึ่งได้', '2008', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (15, 'ตรวจตาเลเซอร์', '2125', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (16, 'ห้องเวชระเบียน', '2131/2148/2127', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (17, 'ห้องฉีดยาทำแผล', '2021', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (18, 'ห้องตรวจอายุรกรรม 1', '2186', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (19, 'ห้องตรวจอายุรกรรม 2', '2184', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (20, 'ห้องตรวจอายุรกรรม 3', '2115', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (21, 'ห้องตรวจอายุรกรรม 4', '2134', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (22, 'อายุรกรรม 3 โต๊ะ 20', '2113', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (23, 'ประชาสัมพันธ์opd                                                 ', '2138/2154', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (24, 'ศูนย์เปล', '2132', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (25, 'ห้องตรวจประกันสังคม', '2011/2012', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (26, 'คลินิกโรคตับ/หัวใจ ', '2113', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (27, 'แพทย์เวร 2', '2122/2124', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (28, 'EKG คลื่นหัวใจไฟฟ้า', '2007', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (29, 'โต๊ะหัวหน้า OPD', '2123', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (30, 'หัวหน้าแม่บ้าน', '091-710-2160 ', 'm', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (31, 'พัฒนาการเด็ก', '2017', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (32, 'จุดนัดพัฒนาการเด็ก', '2018', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (33, 'การเงินโซนเด็ก', '2023', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (34, 'ห้องยาโซนเด็ก', '2022', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (35, 'ห้องตรวจสอบสิทธิ์เช้า', '2013', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (36, 'โภชนาการเด็ก', '2006', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (37, 'แลปโอพีดี', '2117', 'p', 'อาคารเฉลิมพระเกียรติฯ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (38, 'ห้องอัลตราซาวน์ใหม่ 1', '3500', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (39, 'ห้องรังสีแพทย์ 1', '3502', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (40, 'ห้องอ่านฟิล์ม(รังสีแพทย์)', '3503', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (41, 'ห้องอัลตราซาวน์ 2', '3504', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (42, 'ห้องเอ็กซเรย์X-Ray 3+4', '3505', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (43, 'ห้องเอ็กซเรย์X-Ray 1+2', '3506', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (44, 'เคาน์เตอร์เอ็กซเรย์ X-Ray', '3340', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (45, 'หัวหน้างานรังสี (คุณสุนทร)', '3507', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (46, 'ห้องรังสีแพทย์ (พญ.พรสุข)', '3508', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (47, 'เอ็กซเรย์เต้านม', '3509', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (48, 'ห้องเรียนเอ็กซเรย์', '3551', 'p', 'อาคาร 58 ปี ', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (49, 'หัวหน้ากลุ่มงานพยาธิวิทยา', '3545', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (50, 'ห้องสเปคซีเมนต์', '3196', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (51, 'ห้องแบคทีเรีย(แลป)', '3525', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (52, 'ห้องภูมิคุ้มกัน ซีโร อีมูน เลือด', '3529', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (53, 'ห้องตรวจสมรรถภาพปอด', '3548', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (54, 'ส่องกล้อง ผลมะเร็ง PEP', '3544', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (55, 'ห้องประชุมพยาธิวิทยา', '3546', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (56, 'ห้องยูลินจุลทรรศน์', '3524', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (57, 'ห้องธุรการตรวจชิ้นเนื้อ', '3528', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (58, 'ห้อง LAB ชิ้นเนื้อ', '3543', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (59, 'ห้องโลหิตวิทยา CBCพี่ชำนาญ', '3515', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (60, 'เซลล์วิทยา', '3544', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (61, 'ห้องเคมีคลินิก', '3526', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (62, 'ห้องตรวจพิเศษ tyroid/tumor', '3530', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (63, 'คลังวิทยาศาสตร์(ยศพันธ์)', '3549', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (64, 'ธนาคารเลือด', '3510/3512/3514', 'p', 'อาคาร 58 ปี ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (65, 'NICU แรกเกิด', '3521/3522', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (66, 'PICU ไอซียูเด็ก', '3517', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (67, 'sick newborn SNB', '3520', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (68, 'ทำงานพยาบาลผ่าตัด', '3532', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (69, 'ห้องพักฟื้น', '3534', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (70, 'ประชาสัมพันธ์ผ่าตัด', '3535', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (71, 'ประชาสัมพันธ์ผ่าตัด', '3536', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (72, 'ประชาสัมพันธ์ผ่าตัด', '3537', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (73, 'วิสัญญี', '3538', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (74, 'ห้องผ่าตัด OR', '3540', 'p', 'อาคาร 58 ปี ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (75, 'Counter โซนผู้ป่วยวิกฤต', '4100/4101', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (76, 'Counter โซนผู้ป่วยทั่วไป', '4102/4103', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (77, 'Observe ห้องสังเกตอาการ ', '4104', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (78, 'ศูนย์ Refer', '4105/4106', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (79, 'ห้องวิทยุ', '4107', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (80, 'ห้องวิทยุ', '037-212-525', 'm', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (81, 'ห้อง TEA Unit', '4108', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (82, 'ห้องทำงาน ER', '4109', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (83, 'ห้องเฝือก/ฉีดยา-ทำแผล', '4110', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (84, 'คัดกรอง ER', '4111', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (85, 'ห้องบัตร ER', '4112', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (86, 'Counter X-ray', '4113', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (87, 'ห้องพักเวร X-ray', '4114', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (88, 'ห้องยา', '4115', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (89, 'ห้องการเงิน', '4116', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (90, 'ห้อง LAB', '4117', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (91, 'CT เอ็กเรย์คอมพิวเตอร์ / MRI ', '4118', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (92, 'ห้องพักแพทย์ ER', '4119', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (93, 'ห้องพัก/ห้องรับประทานอาหาร', '4120', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (94, 'FAX ห้องยา', '4121', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (95, 'ศูนย์เปล ER', '4122', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (96, 'Counter โซนผู้ป่วยวิกฤต', '037-211-247', 'm', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (97, 'ศูนย์ Refer', '037-217-140', 'm', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (98, 'ยามทางเข้าประตู', '4124', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (99, 'ICU ศัลย์/บริจาคอวัยวะ', '4200', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (100, 'ICU ศัลย์', '4201', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (101, 'ICU ศัลย์', '4203', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (102, 'ICU ศัลย์', '4204', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (103, 'ไตเทียม', '4210/4211/4212', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (104, 'พี่หน่อย', '4213', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (105, 'ห้องล้างหน้าท้อง', '4214/4215', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (106, 'ศัลยกรรมรวม', '4317-4318', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (107, 'ห้องล้างหน้าท้อง', NULL, NULL, 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'N', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (108, 'Counter ห้องฟัน', '4300 / 4321', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (109, 'ห้องตรวจ ทพญ.เตชนา', '4301', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (110, 'ห้องตรวจ ทพ.ณัฐวัจน์', '4302', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (111, 'ห้องตรวจ ทพญ.สุจินตนา', '4303', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (112, 'ห้องตรวจ ทพญ.อทิตยา', '4304', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (113, 'ห้องตรวจ ทพญ.ปฐมพร', '4305', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (114, 'ห้องตรวจ ทพญ.ปฐมพร', '4306', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (115, 'ห้องตรวจ ทพ.สุพระลักษณ์', '4307', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (116, 'ห้องตรวจ ทพญ.ปวะรา', '4308', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (117, 'ห้องตรวจ ทพญ.ปรางค์กมล', '4309', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (118, 'ห้องตรวจ ทพญ.พิชญา', '4310', 'p', 'ตึกอุบัติเหตุฉุกเฉิน', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (119, 'ผู้บริหาร (หมอเปรม)', '3158', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (120, 'ผู้บริหาร (คุณเกรียง)', '3406', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (121, 'ผู้บริหาร (ป้าศรี)', '3144', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (122, 'ฝ่ายบุคคล/ธุรการ (คุณชุ)', '2172', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (123, 'ฝ่ายบุคคล', '3260', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (124, 'บัญชี', '3279', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (125, 'บัญชี', '3236', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (126, 'บ้านกระเช้า', '3412', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (127, 'เกษตรอินทรีย์ (โย)', '3152', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (128, 'จัดซื้อ', '3154', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (129, 'บัญชี', '3236', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (130, 'ตึกคลอดผ่าตัด', NULL, NULL, 'ตึกคลอดผ่าตัด', NULL, NULL, 'N', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (131, 'ชั้น4 พิเศษคลอด', '5439/5440', 'p', 'ตึกคลอดผ่าตัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (132, 'เคาท์เตอร์พยาบาล', '5201/5202', 'p', 'ตึกคลอดผ่าตัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (133, 'ห้องคลอด', '5221/5222', 'p', 'ตึกคลอดผ่าตัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (134, 'opd นรีเวช', '5105', 'p', 'ตึกคลอดผ่าตัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (135, 'opdสูติกรรม', '5106', 'p', 'ตึกคลอดผ่าตัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (136, 'งานโสต (คุณสุวิทย์)', '3152/3193', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (137, 'วิจัยและพัฒนา', '3242', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (138, 'หน้าห้องพี่ต้อม(เก้)', '3135', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (139, 'การตลาด/การขาย', '3151', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (140, 'หน้าร้าน', '2170/2137', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (141, 'ร้านโพธิ์เงิน', '3333', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (142, 'ร้านโพธิ์เงิน', '090-9846751', 'm', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (143, 'ศูนย์เรียนรู้', '3146', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (144, 'สปา', '3123', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (145, 'ครัวสปา', '3125', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (146, 'ร้านโพธิ์เงิน', '087-5820597', 'm', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (147, 'รพ.ศรีมหาโพธิ์', '037-279204', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (148, 'สสจ.ปราจีนบุรี', '37211626', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (149, 'รพ.นาดี', '037-289057', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (150, 'รพ.กบินทร์บุรี', '037-291368-9', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (151, 'รพ.ศูนย์พระเทพ', '037-395085-6', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (152, 'รพ.ประจันตคาม', '037-291368', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (153, 'รพ.บ้านสร้าง', '037-271238', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (154, 'รพ.ค่ายจักรพงษ์', '037-211591', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (155, 'ศรีมโหสถ', '037-276127', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (156, 'ศาลาไทย', '037-214879', 'o', 'โรงพยาบาลในจังหวัด', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (157, 'QC ตรวจสอบคุณภาพ', '2173', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (158, 'LAB QC', '3243', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (159, 'คลังสำเร็จรูป(วุ้นเส้น)', '3142/3143', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (160, 'คลังวัตถุดิบ', '2174/3411', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (161, 'คลังวัตถุดิบชิ้นแห้ง', '3275', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (162, 'ซ่อมบำรุง (ช่างแอ๊ด)', '3167', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (163, ' ซ่อมบำรุง (ช่างหม่ำ)', '3255', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (164, 'ฝ่ายผลิต', '3256', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (165, 'โรงบด', '3254', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (166, 'ร้านผักชุมชน (น้ำฝน)', '2176', 'p', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (167, 'ดร.ต้อม', '037-213629', 'o', 'มูลนิธิ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (168, 'กาแฟโรงพยาบาล', '3132', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (169, 'โรงครัว (ห้องทำงาน)', '3246', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (170, 'โรงครัว ', '3247', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (171, 'โรงครัว ', '3248', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (172, 'ซักฟอกโต๊ะคุณศิริอร', '3180', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (173, 'โรงซักฟอกห้องตัดเย็บ', '3182', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (174, 'โรงซักฟอก', '3179', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (175, 'คลังยา', '3200', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (176, 'งานบริหารเวชภัณฑ์', '3201', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (177, 'เครื่องมือแพทย์', '3202', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (178, 'คลังเวชภัณฑ์ที่ไม่ใช่ยา', '3290', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (179, 'จ่ายกลาง', '3198/3199', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (180, 'ห้องนึ่ง', '3195', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (181, 'โรงงาน', '3164', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (182, 'สนาม', '3222', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (183, 'เตาเผาขยะ', '3221', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (184, 'ไฟฟ้า', '3170', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (185, 'ประปา', '3171', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (186, 'น้ำเสีย', '3230', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (187, 'นิติเวช', '2136', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (188, 'ห้องเก็บศพ', '3172', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (189, 'โรงรถ', '3220', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (190, 'ห้องควบคุมเครื่องมือ', '3507', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (191, 'เภสัชฝ่ายผลิต', '3138/3405', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (192, 'เภสัชเอ๋', '3138', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (193, 'คลังน้ำเกลือ', '3175', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (194, 'พิษวิทยา', '3529', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (195, 'ห้องยาโรคปอด', '3312', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (196, 'ศูนย์เครื่องมือพิเศษ', '3331/3332', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (197, 'ห้องนมแม่', NULL, NULL, 'หน่วยงานอื่นๆ', NULL, NULL, 'N', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (198, 'ห้องคลอด', '5221/5220', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (199, 'พิเศษรวมศัลยกรรม อบ 2', '6501', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (200, 'ศูนย์แพทย์', '7002/7107/7118', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (201, 'ห้องสมุดศูนย์แพทย์', '7114', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (202, 'ห้องตรวจเบอร์ 4/ PCU', '3115', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (203, 'ห้องยาใน', '3155/3156/3157', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (204, 'การเงินคนไข้ใน', '3161', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (205, 'ร้านกาแฟ', '3132', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (206, 'สหกรณ์', '2536', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (207, 'ยามแจ้งเหตุฉุกเฉิน', '3000', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (208, 'ยามประตูทางออก', '3191', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (209, 'ยามรักษาการณ์', '3192', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (210, 'ยามอาคารเปี่ยมสุข', '2160', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (211, 'ยามทางเข้าบ้านพัก', '3291', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (212, 'บ้านพัก ผอก.', '4567', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (213, 'น้ำเกลือ ตึกผลิต(สมโชค)', '3150', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (214, 'เบิกจ่ายพัสดุ', '3197', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (215, 'บ้านพัก ผอก.', '4567', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (216, 'บ้านพักรองบริหาร', '3131', 'p', 'หน่วยงานอื่นๆ', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (217, 'พัฒนาการเด็ก', '080-6418770', 'm', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (218, 'เคาท์เตอร์สูติสามัญ', '5221/5301/5302', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (219, 'ห้องหัวหน้า (พี่เซี้ยม)', '5303', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (220, ' ห้องพักเจ้าหน้าที่', '5304', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (221, 'ห้องประชุมสูติสามัญ', '5305', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (222, 'ห้องสอนสุขศึกษา', '5306', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (223, 'ตรวจภายในสูติสามัญ', '5307', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (224, 'สูติพิเศษ 2', '5415-5416', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (225, 'จองห้องพิเศษสูติกรรม', '5415', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (226, 'ห้องหัวหน้าสูติพิเศษ 2', '5417', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (227, 'พักแพทย์สูติพิเศษ 2', '5418', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (228, 'สูติพิเศษ 1', '5515/5516', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (229, 'ตรวจภายในสูติพิเศษ 1', '5514', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (230, 'ห้องหัวหน้าสูติพิเศษ1', '5517', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (231, 'ห้องนมแม่', '5518', 'p', 'อาคาร 114 เตียง', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (232, 'ศัลยกรรมชาย', '3261', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (233, 'ศัลยกรรมชาย', '3271', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (234, 'ศัลยกรรมหญิง', '3262', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (235, 'ศัลยกรรมหญิง', '3272', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (236, 'โอพีดีศัลยกรรม', '3110', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (237, 'ห้องบัตรศัลยกรรม', '3111', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (238, 'เคาน์เตอร์ผ่าตัดเล็ก OR', '3295', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (239, 'ผ่าตัดเล็ก', '3283/3263', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (240, 'IC ควบคุมเชื้อ/NI', '3361', 'p', 'อาคารเพชรรัตน', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (241, 'ห้องประชุม ', NULL, NULL, 'อาคารเพชรรัตน', NULL, NULL, 'N', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (242, 'ตา หู คอ จมูก', '3231', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (243, 'พักแพทย์จักษุ', '3232', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (244, 'ศัลยกรรมกระดูก/พระ', '3173', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (245, 'พักแพทย์ศัลยฯ', '3273', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (246, 'พักแพทย์ศัลยฯ', '2311', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (247, 'เด็กสามัญ', '3314', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (248, 'พักแพทย์เด็กพิเศษ', '3309', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (249, 'เด็กพิเศษ', '3309/3310', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (250, 'ห้องพิเศษ สุวัทนา', '3169', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (251, 'ห้องพักแพทย์สุวัทนา', '3168', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (252, 'ศูนย์เครื่องมือแพทย์', '3330/3331/3332', 'p', 'อาคารสุวัทนา', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (253, 'OPDโควิด', '3177', 'p', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (254, 'สนง.แผนไทย', '3884', 'p', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (255, 'นวดแผนไทย', '037-216164', 'o', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (256, 'นวดแผนไทย', '085-3912255', 'o', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (257, 'ตึกเจ้าพระยา', '3193', 'p', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (258, 'โพธิ์เงิน', '3333/3334', 'p', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (259, 'ห้องฝังเข็ม', '3104', 'p', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (260, 'ร้านโพธิ์เงิน', '087-5820597', 'm', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (261, 'ร้านโพธิ์เงิน', '090-9846751', 'm', 'แพทย์แผนไทย', NULL, NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (262, 'ห้องสวนหัวใจ แคทแลป', '6601/6603', 'p', 'อาคาร 75 ปี', '6', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (263, 'CCU/วิกฤตหัวใจและหลอดเลือด', '6615/6616 ', 'p', 'อาคาร 75 ปี', '6', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (264, 'ICU MED ไอซียูอายุรกรรม', '6617/6618/6620', 'p', 'อาคาร 75 ปี', '6', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (265, 'โพสแคท (ICCU)', '6602', 'p', 'อาคาร 75 ปี', '6', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (266, 'แอคโค เดินสายพาน ตรวจพิเศษหัวใจหลอดเลือด', '6606', 'p', 'อาคาร 75 ปี', '6', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (267, 'ศูนย์เฉพาะกิจ', '3101', 'p', 'อาคาร 75 ปี', '6', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (268, 'คลินิกวัณโรค /โรคปอด', '2150', 'p', 'อาคาร 75 ปี', '6', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (269, 'ห้องตรวจคลินิกวัณโรค', '3311', 'p', 'อาคาร 75 ปี', '6', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (270, 'ทำบัตรศัลยกรรมกระดูก', '3111', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (271, 'ห้องตรวจOPD กระดูก 1', '6101', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (272, 'ห้องตรวจOPD กระดูก 2', '6102', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (273, 'ห้องฉีดยาทำแผล', '6103', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (274, 'ห้องเฝือก', '6104', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (275, 'OPD ศัลยกรรมกระดูก', '6106', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (276, 'ในห้องตรวจ พญ.รัชฎา', '6116', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (277, 'ห้องทำงาน พญ.รัชฎา', '6109', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (278, 'กายอุปกรณ์ ', '6115', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (279, 'กิจกรรมบำบัด', '6111', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (280, 'ห้องตรวจ พญ.พรรษพร', '6117', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (281, 'ห้องทำงาน พญ.พรรษพร', '6110', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (282, 'ห้องทำงาน คุณอำนวย เวชกรรมฟื้นฟู', '6113', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (283, 'โต๊ะคัดกรองเวชกรรมฟื้นฟู', '6108', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (284, 'เวชระเบียน', '6112', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (285, 'ห้องพักนักกายภาพบำบัด', '6118', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (286, 'Coumter กายภาพบำบัด', '6114', 'p', 'อาคาร 75 ปี', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (287, 'กายภาพบำบัดแผนไทย', '6201', 'p', 'อาคาร 75 ปี', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (288, 'NURSE STATION รพ.แผนไทย', '6227-9', 'p', 'อาคาร 75 ปี', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (289, 'Counter รพ. แพทย์แผนไทย/นวดแผนไทย', '6220/6222/3166', 'p', 'อาคาร 75 ปี', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (290, 'ห้องตรวจการนอนหลับ', '6321/6325', 'p', 'อาคาร 75 ปี', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (291, 'ส่องกล้องทางเดินอาหาร', '6327', 'p', 'อาคาร 75 ปี', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (292, 'บองโค/ห้องตรวจส่องกล้องหลอดลม', '6323/6324', 'p', 'อาคาร 75 ปี', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (293, 'RICU วิกฤตทางเดินหายใจ', '6301/6302', 'p', 'อาคาร 75 ปี', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (294, 'วันเดย์', '63176318', 'p', 'อาคาร 75 ปี', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (295, 'ห้องแยกโรค', '6314', 'p', 'อาคาร 75 ปี', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (296, 'อายุรกรรมหญิง1    ', '6417/6418', 'p', 'อาคาร 75 ปี', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (297, 'อายุรกรรมหญิง2    ', '6414/6415', 'p', 'อาคาร 75 ปี', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (298, 'ห้องพิเศษ Premium', '6420', 'p', 'อาคาร 75 ปี', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (299, 'STORK ประสาท', '6401/6402', 'p', 'อาคาร 75 ปี', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (300, 'อายุรกรรมชาย1    อช1', '6517/6518', 'p', 'อาคาร 75 ปี', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (301, 'อายุรกรรมชาย2    อช2', '6514/6515', 'p', 'อาคาร 75 ปี', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (302, 'ห้องพักเจ้าหนาที่ อช', '6513', 'p', 'อาคาร 75 ปี', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (303, 'พิเศษรวมอายุรกรรม2 / อบ3', '6501/6502', 'p', 'อาคาร 75 ปี', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (304, 'ห้องพิเศษ Premium', '6520', 'p', 'อาคาร 75 ปี', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (305, 'พิเศษรวมศัลยกรรม อบ2', '3194', 'p', 'อาคาร 75 ปี', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (306, 'ศูนย์จัดเก็บ/สอบสิทธิ์', '2100/2121/2271', 'p', 'อาคารเครือข่าย', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (307, 'สังคมสงเคราะห์/OSCC ', '2101', 'p', 'อาคารเครือข่าย', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (308, 'ประกันสังคม', '2121/2271', 'p', 'อาคารเครือข่าย', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (309, 'พรบ./FAXเคลม ', '2185', 'p', 'อาคารเครือข่าย', '1', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (310, 'บริหารเครือข่าย/พี่แคท', '2180', 'p', 'อาคารเครือข่าย', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (311, 'ตรวจโรคไต/โรคข้อ', '2211', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (312, 'OPD สูติกรรม', '2212', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (313, 'ANC ฝากครรภ์ วัยทอง', '2213', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (314, 'ห้องตรวจสูติกรรม', '2215', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (315, 'ห้องอัตตาซาวด์นรีเวช', '2233', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (316, 'ทางเดินอาหาร /ความดัน', '2218', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (317, 'จิตเวชและยาเสพติด', '2219/2227/2103', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (318, 'ห้องบัตรชั้น 2', '2235', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (319, 'ห้องประชุมฟิตฟอไลค์', '2221', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (320, 'สุขศึกษา', '2222', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (321, 'คลินิกพิเศษ เบาหวาน(DM)', '2226', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (322, 'คลินิกคลายเครียด', '2227', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (323, 'ความดัน ภูมิแพ้เด็ก โรคเลือด', '2228', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (324, 'โอพีดี หู คอ จมูก', '2216', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (325, 'ห้องจ่ายยาชั้น 2', '2234', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (326, 'เภสัชสนเทศ', '2133/2149', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (327, 'โอพีดีห้องตรวจตา', '2181', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (328, 'เลื่อนนัดตา บ่าย 2', '037-452217', 'm', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (329, 'ห้องตรวจตา', '2107/2108/2109', 'p', 'อาคารเฉลิมพระเกียรติฯ', '2', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (330, 'ห้องให้เคมี', '2305', 'p', 'อาคารเฉลิมพระเกียรติฯ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (331, 'เบิกอุปกรณ์', '2306', 'p', 'อาคารเฉลิมพระเกียรติฯ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (332, 'ไตเทียม2', '2301/2302', 'p', 'อาคารเฉลิมพระเกียรติฯ', '3', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (333, 'ธเนศวร', '2428/2426', 'p', 'อาคารเฉลิมพระเกียรติฯ', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (334, 'ห้องใจใสpaiiative care', '3106', 'p', 'อาคารเฉลิมพระเกียรติฯ', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (335, 'ห้องประชุม HA', '2425', 'p', 'อาคารเฉลิมพระเกียรติฯ', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (336, 'ศุนย์พัฒนาคุณภาพ', '3539', 'p', 'อาคารเฉลิมพระเกียรติฯ', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (337, 'อาชีวเวชกรรม', '2177/2188  ', 'p', 'อาคารเฉลิมพระเกียรติฯ', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (338, 'เวชกรรมสังคม', '2515/2520', 'p', 'อาคารเฉลิมพระเกียรติฯ', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (339, 'ศูนย์คอม IT', '3148 /3149', 'p', 'อาคารเฉลิมพระเกียรติฯ', '4', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (340, 'ห้องหัวหน้าพยาบาล', '2500', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (341, 'เลขานุการ', '2506/2509', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (342, 'ผู้อำนวยการ', '2514', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (343, 'รองผอก.1', '2504', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (344, 'รองผอก.2', '2512', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (345, 'ห้องโสต', '2505/2516', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (346, 'การเจ้าหน้าที่', '2503', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (347, 'การพยาบาล', '2507/2540/2541', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (348, 'การเงิน', '2508/2513/2547', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (349, 'การเงิน รับเช็ค', '3886/2547', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (350, 'บัญชี', '2544/2545', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (351, 'ฝ่ายแผน', '2543/2546', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (352, 'พรส. วิชาการ', '2510', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (353, 'พรส. วิชาการ (หัวหน้า)', '3887', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (354, 'เลขาองค์กรแพทย์', '2511', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (355, 'ฝ่ายบริหารทั่วไป', '2517', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (356, 'ห้องธุรการ', '2538', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (357, 'ห้องรองฝ่ายบริหาร', '2518', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (358, 'ห้องพัสดุ', '2519/2535/2537', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (359, 'แม่บ้าน', '2539', 'p', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (360, 'Fax. ธุรการ', '037-211243', 'f', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (361, 'FAX หน้าห้องผอก.', '037-214946', 'f', 'อาคารเฉลิมพระเกียรติฯ', '5', NULL, 'Y', '2020-12-16 08:27:32', 'admin', 0);
INSERT INTO `phone_detail_cpa` VALUES (362, 'test', '1234', NULL, 'มูลนิธิ', '', NULL, 'N', NULL, 'รัชวิทย์ พลชู', NULL);
INSERT INTO `phone_detail_cpa` VALUES (363, 'test2', '333/555', 'P', 'ตึกคลอดผ่าตัด', '', NULL, 'N', NULL, 'รัชวิทย์ พลชู', NULL);
INSERT INTO `phone_detail_cpa` VALUES (364, 'test3', '333/789', 'P', 'ตึกอุบัติเหตุฉุกเฉิน', '5', NULL, 'N', NULL, 'รัชวิทย์ พลชู', NULL);
INSERT INTO `phone_detail_cpa` VALUES (365, 'test4', '1', 'P', 'อาคาร 114 เตียง', '2', NULL, 'Y', '2020-12-22 15:54:15', 'รัชวิทย์ พลชู', NULL);

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
-- Records of phone_tbl
-- ----------------------------
INSERT INTO `phone_tbl` VALUES (308, 'ยามรักษาการตึก ER', '4124', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3\r\n', 0, NULL);
INSERT INTO `phone_tbl` VALUES (2, 'Fax. ธุรการ', '037-211243', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (3, 'FAX. ผอก', '037-214946', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (4, 'สำนักงานสาธารณสุขจังหวัดปราจีนบุรี', '037-211626', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (5, 'สำนักงานประกันสังคม ปราจีนบุรี', ' 037 454 490', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (6, ' รพ ประจันตคาม ปราจีนบุรี', '037 292 085', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (7, 'โรงพยาบาลกบินทร์บุรี', '037 288 069', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (8, 'เบอร์ตรง นวดแผนไทย', '037-216164', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (9, 'เบอร์ตรง นวดแผนไทย', '085-3912255', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (10, 'ร้านโพธิ์เงิน', '087-5820597', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (11, 'ร้านโพธิ์เงิน', '090-9846751', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (12, 'สายนอก N icu', '037-216162', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (13, 'OPD จักษุ', '037-452217', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (14, 'เภสัชสนเทศ', '037-211289', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (15, 'พี่ยามทางเข้าศูนย์แพทย์', '064-7832030', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (16, 'Ward Cath Lap', '080-6703633', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (17, 'ทันตกรรม (นอกเวลา)', '065-7163348', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (18, 'ศาลาไทย', '037-214879', '', 0, NULL);
INSERT INTO `phone_tbl` VALUES (19, 'ประชาสัมพันธ์', '2000/2104', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (20, 'ห้องให้คำปรึกษา', '2102', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (21, 'HA ศูนย์คุณภาพ', '3539', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (22, 'PCU สุภาพชุมชน', '3115', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (23, 'ห้องพักแพทย์', '2105', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (24, 'ห้องตรวจตา', '2107/2108', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (25, 'ห้องตรวจตา', '2109', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (26, 'ห้องตรวจตา', '2181', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (27, 'ห้องตรวจเด็ก', '2110', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (28, 'ห้องตรวจอายุรกรรม 3 โต๊ะ 20', '2113', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (29, 'ห้องตรวจอายุรกรรม MED', '2115', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (30, 'LAB นอกเวลา', '2116', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (31, 'LAB นอกเวลา', '2117', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (32, 'ห้องยานอก', '2118', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (33, 'ห้องยานอก', '2119', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (34, 'การเงินผู้ป่วยนอก', '2147', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (35, 'โต๊ะสกรีน โอ.พี.ดี', '2130', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (36, 'ศูนย์แอดมิด Admin OPD', '2178', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (37, 'OSCC ศูนย์ไกล่เกลี่ย', '2179', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (38, 'ตรวจตาเลเซอร์', '2125', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (39, 'ห้องบัตร', '2131/2148/2127', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (40, 'ห้องฉีดยาทำแผล', '2139  ', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (41, 'ห้องวิทยุกู้ชีพ/ศูนย์รีเฟอร์', '2126', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (42, 'อุบัติเหต-ฉุกเฉิน ER', '2120/2156/3881', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (43, 'ห้องตรวจโรค 2', '2134', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (44, 'ห้องตรวจ OPD ห้อง 58', '2186', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (45, 'ห้องตรวจ OPD ห้อง 28', '2184', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (46, 'พยาบาล ปชส.(ป้าวาส)', '2138/2154', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (47, 'ห้องพักแพทย์', '2140', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (48, 'ห้องสังเกตอาการ Observe', '2141', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (49, 'ศูนย์เปล', '2132', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (50, 'ห้องตรวจประกันสังคม', '2146', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (51, 'คลินิกโรคตับ   หัวใจ (คาดิโอ)', '2146', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (52, 'แพทย์เวร 2', '2122/2124', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (53, 'EKG คลื่นหัวใจไฟฟ้า', '2129', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (54, 'โต๊ะหัวหน้า OPD', '2123', 'อาคารเฉลิมพระเกียรติฯ ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (55, 'ห้องบัตรชั้น 2', '2235', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (56, 'ทำฟัน', '2200', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (57, 'ผ่าฟันคุด', '2201', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (58, 'ห้องบัตรตรวจฟัน', '2202', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (59, 'ห้องทันตกรรม', '2203', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (60, 'ผ่าตัดเล็ก', '2205', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (61, 'ทำฟัน', '2207/2208', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (62, 'ทำฟัน', '2204', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (63, 'ทำฟัน', '2209', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (64, 'OPD ฟัน', '2214', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (65, 'ทันตแพทย์', '2210', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (66, 'ตรวจโรค 2  ไต ข้อ', '2211', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (67, 'OPD สูติกรรม', '2212', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (68, 'ANC ฝากครรภ์ วัยทอง', '2213', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (69, 'ตรวจสูติกรรม', '2215', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (70, 'ตรวจสูติกรรม', '2216', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (71, 'ทางเดินอาหาร   ความดัน', '2218', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (72, 'กลุ่มงานจิตเวชและยาเสพติด', '2219/2227/2103', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (73, 'ผู้ช่วยทันตแพทย์', '2220', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (74, 'ห้องประชุมสุขศึกษา ห้องกระจกฟ้า', '2221 ฟิตฟอไลค์', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (75, 'สุขศึกษา', '2222', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (76, 'คลินิกพิเศษ เบาหวาน(DM)', '2226/2217', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (77, 'คลินิกคลายเครียด', '2227', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (78, 'ความดัน ภูมิแพ้เด็ก โรคเลือด', '2228', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (79, 'ห้องทำฟันปลอม', '2229', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (80, 'ห้องอัตตาซาวด์นรีเวช', '2233', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (81, 'ห้องจ่ายยาชั้น 2(DIS)', '2234/2133', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (82, 'เภสัชสนเทศ', '2133/2125/2149', 'อาคารเฉลิมพระเกียรติฯ ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (83, 'ห้องหัวหน้าพยาบาล', '2500', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (84, 'เลขานุการ', '2506/2509', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (85, 'ผู้อำนวยการ', '2514', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (86, 'รองผู้อำนวยการ หมอเชอรี่', '2504', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (87, 'รองผู้อำนวยการ หมอ พิสิฎฐ์', '2512', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (88, 'ห้องโสต', '2505/2516', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (89, 'การเจ้าหน้าที่', '2503', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (90, 'การพยาบาล', '2507/2540/2541', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (91, 'การเงิน', '2508/2513', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (92, 'การเงิน รับเช็ค', '3886', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (93, 'สหกรณ์', '2536', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (94, 'บัญชี', '2544/2545', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (95, 'ฝ่ายแผน', '2543', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (96, 'พรส. วิชาการ', '2510', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (97, 'พรส. วิชาการ', '3887', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (98, 'พี่แอน (อุไรวรรณ) ทุนแพทย์', '2511', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (99, 'ฝ่ายธุรการ', '2517', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (100, 'ฝ่ายธุรการ', '2538', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (101, 'ห้องรองฝ่ายบริหาร รอง.บ', '2518', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (102, 'ห้องพัสดุ', '2519/2535/2537', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (103, 'แม่บ้าน', '2539', 'อาคารเฉลิมพระเกียรติฯ ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (104, 'ไตเทียม', '2302 , 2305 , 2309', 'อาคารเฉลิมพระเกียรติฯ ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (105, 'ธเนศวร', '2428/2426', 'อาคารเฉลิมพระเกียรติฯ ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (106, 'ห้องใจใส', '3106', 'อาคารเฉลิมพระเกียรติฯ ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (107, 'ห้องประชุมศุนย์พัฒนาคุณภาพ', '2425', 'อาคารเฉลิมพระเกียรติฯ ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (108, 'ศุนย์พัฒนาคุณภาพ', '2335', 'อาคารเฉลิมพระเกียรติฯ ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (109, 'จักษุ,หู คอ จมูก ตึกตา', '3231', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (110, 'พักแพทย์จักษุ', '3232', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (111, 'ศัลยกรรมกระดูก/พระ', '3173', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (112, 'พักแพทย์ศัลยฯ', '3273', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (113, 'พักแพทย์ศัลยฯ', '2311', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (114, 'เด็กสามัญ', '3314', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (115, 'พักแพทย์เด็กพิเศษ', '3309', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (116, 'เด็กพิเศษ', '3309/3310', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (117, 'ห้องพิเศษ สุวัทนา', '3169', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (118, 'ห้องพักแพทย์สุวัทนา', '3168', 'อาคารสุวัทนา', 0, NULL);
INSERT INTO `phone_tbl` VALUES (119, 'ศัลยกรรมชาย', '3261', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (120, 'ศัลยกรรมชาย', '3271', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (121, 'ศัลยกรรมหญิง', '3262', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (122, 'ศัลยกรรมหญิง', '3272', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (123, 'โต๊ะพยาบาล ศัลย', '3110', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (124, 'ห้องบัตร ศัลย', '3111', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (125, 'เคาน์เตอร์ผ่าตัดเล็ก OR', '3295', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (126, 'ในห้องผ่าตัดเล็กOR', '3283/3263', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (127, 'IC ควบคุมการติดเชื้อ/ NI', '3361', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (128, 'ห้องประชุม ', '3176', 'อาคารเพชรัตน', 0, NULL);
INSERT INTO `phone_tbl` VALUES (129, 'ห้องอัลตราซาวน์ใหม่', '3500', 'อาคาร 58 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (130, 'ห้องพญ.พัลลภา', '3502', 'อาคาร 58 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (131, 'ห้องพญ.พรสุข', '3503', 'อาคาร 58 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (132, 'ห้องอัลตราซาวน์', '3504', 'อาคาร 58 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (133, 'ห้องเอ็กซเรย์X-Ray 3+4', '3505', 'อาคาร 58 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (134, 'ห้องเอ็กซเรย์X-Ray 1+2', '3506', 'อาคาร 58 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (135, 'เคาน์เตอร์เอ็กซเรย์X-Ray', '3340', 'อาคาร 58 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (136, 'คุณณรงค์ฯ', '3513', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (137, 'ห้องสเปคซีเมนต์', '3196', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (138, 'ห้องแบคทีเรีย', '3525', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (139, 'ห้องภูมิคุ้มกันวิทยา ซีโร อีมูน', '3530', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (140, 'ส่องกล้อง อ่านผลมะเร็ง เป็บซีเมีย', '3544', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (141, 'ห้องประชุม Lab', '3515', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (142, 'ห้องยูลินจุลทรรศน์', '3524', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (143, 'LAB ชิ้นเนื้อ พยาธิ พาโถ เซลล์', '3543/3528', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (144, 'ธนาคารเลือดและคุณผกามาศ', '3510/3512และ3514', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (145, 'ห้องโลหิตวิทยา', '3527', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (146, 'ห้องพิษวิทยา', '3529', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (147, 'ห้องเคมี', '3526', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (148, 'ห้องเครื่องมือพิเศษ/ส่องกล้อง', '3550', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (149, 'ห้องตรวจพิเศษ tyroid/tumor', '3540', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (150, 'คลื่นหัวใจ EKG / ห้องตรวจสมรรถภาพปอด', '3548', 'อาคาร 58 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (151, 'ICU ศัลย์', '3517', 'อาคาร 58 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (152, 'ห้องพักเจ้าหน้าที่', '3518', 'อาคาร 58 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (153, 'ห้องพักแพทย์', '3519', 'อาคาร 58 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (154, 'ICU ศัลย์', '3520', 'อาคาร 58 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (155, 'ICU เด็ก', '3521', 'อาคาร 58 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (156, 'ICU เด็กเคาน์เตอร์', '3522', 'อาคาร 58 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (157, 'ICU เด็กติดต่อคนไข้', '3523', 'อาคาร 58 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (158, 'ทำงานพยาบาลผ่าตัด', '3532', 'อาคาร 58 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (159, 'ห้องเวร', '3534', 'อาคาร 58 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (160, 'ประชาสัมพันธ์ผ่าตัด', '3532', 'อาคาร 58 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (161, 'ประชาสัมพันธ์ผ่าตัด', '3536', 'อาคาร 58 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (162, 'ประชาสัมพันธ์ผ่าตัด', '3537', 'อาคาร 58 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (163, 'ห้องวิสัญญี ANES', '3538', 'อาคาร 58 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (164, 'ห้องผ่าตัด OR', '3540', 'อาคาร 58 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (165, 'ห้องยาใน', '3156', 'ตึกต่าง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (166, 'ปรึกษาการใช้ยา', '3157', 'ตึกต่าง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (167, 'การเงินคนไข้ใน', '3161', 'ตึกต่าง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (168, 'ร้านกาแฟ', '3132', 'ตึกต่าง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (169, 'พี่ฝน ขายผัก', '2176', 'ตึกต่าง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (170, 'ร้านขายสมุนไพร SHOP', '2137/2170', 'ตึกต่าง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (171, 'ศาลาไทย', '037-214879', 'ตึกต่าง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (172, 'ห้องตรวจOPD กระดูก 1', '6101', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (173, 'ห้องตรวจOPD กระดูก 2', '6102', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (174, 'ห้องฉีดยาทำแผล', '6103', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (175, 'ห้องเฝือก', '6104', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (176, 'OPD กระดูก', '6105', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (177, 'ในห้องตรวจ หมอรัชฎา', '6106', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (178, 'หน้าห้องตรวจ หมอรัชฎา', '6108', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (179, 'กายอุปกรณ์  ขาเทียม', '6115', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (180, 'กายภาพบำบัด', '6111/6112', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (181, 'ห้องแพทย์กายภาพ', '6109/6110', 'อาคาร 75 ปี ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (182, 'ห้องตรวจการนอนหลับ', '6321', 'อาคาร 75 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (183, 'RCU หอผู้ป่วยวิกฤตทางเดินหายใจ', '6301/6302', 'อาคาร 75 ปี ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (184, 'อายุรกรรมหญิง1     อญ1', '6417/6418', 'อาคาร 75 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (185, 'อายุรกรรมหญิง2     อญ2', '6414/6415', 'อาคาร 75 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (186, 'ห้องพิเศษ Premium', '6420', 'อาคาร 75 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (187, 'STORE ประสาท', '6401/6402', 'อาคาร 75 ปี ชั้น 4', 0, NULL);
INSERT INTO `phone_tbl` VALUES (188, 'ห้องกิจกรรมบำบัด', '6201', 'อาคาร 75 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (189, 'กายภาพแผนไทย', '6202', 'อาคาร 75 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (190, 'ห้องหัตถการ', '6214', 'อาคาร 75 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (191, 'วันเดย์แคร์ คลินิก ยูนิต', '6317/6318', 'อาคาร 75 ปี ชั้น 2', 0, NULL);
INSERT INTO `phone_tbl` VALUES (192, 'อายุรกรรมชาย1    อช1', '6517/6518', 'อาคาร 75 ปี ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (193, 'อายุรกรรมชาย2    อช2', '6514/6515', 'อาคาร 75 ปี ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (194, 'ห้องพักเจ้าหนาที่ อช', '6513', 'อาคาร 75 ปี ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (195, 'พิเศษรวมอายุรกรรม2 / อบ3', '6501/6502', 'อาคาร 75 ปี ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (196, 'พิเศษ Premium', '6520', 'อาคาร 75 ปี ชั้น 5', 0, NULL);
INSERT INTO `phone_tbl` VALUES (197, 'สวนหัวใจ แคทแลป', '6603', 'อาคาร 75 ปี ชั้น 6', 0, NULL);
INSERT INTO `phone_tbl` VALUES (198, 'CCU', '6615/6616 ', 'อาคาร 75 ปี ชั้น 6', 0, NULL);
INSERT INTO `phone_tbl` VALUES (199, 'ICU MED ไอซียูอายุรกรรม', '6617/6618/6620', 'อาคาร 75 ปี ชั้น 6', 0, NULL);
INSERT INTO `phone_tbl` VALUES (200, 'ศูนย์เบิกเครื่องมือ ICU MED', '6611/6612', 'อาคาร 75 ปี ชั้น 6', 0, NULL);
INSERT INTO `phone_tbl` VALUES (201, 'โพสแคท หอผู้ป่วยหัวใจและหลอดเลือด(ICCU)', '6602', 'อาคาร 75 ปี ชั้น 6', 0, NULL);
INSERT INTO `phone_tbl` VALUES (202, 'แอคโค คลื่นสะท้อนหัวใจ เดินสายพาน', '6606', 'อาคาร 75 ปี ชั้น 6', 0, NULL);
INSERT INTO `phone_tbl` VALUES (203, 'โรงครัว (ห้องทำงาน)', '3246', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (204, 'โรงครัว (ทานอาหาร)', '3247', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (205, 'โรงครัว (ทานอาหาร)', '3248', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (206, 'ซักฟอกโต๊ะคุณศิริอร', '3180', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (207, 'โรงซักฟอกห้องอบ', '3181', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (208, 'โรงซักฟอกห้องตัดเย็บ', '3182', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (209, 'โรงซักฟอก', '3179', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (210, 'โรงงาน', '3164', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (211, 'โรงรถ', '3220', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (212, 'เตาเผาขยะ', '3221', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (213, 'ไฟฟ้า', '3170', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (214, 'ประปา', '3171', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (215, 'น้ำเสีย', '3230', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (216, 'นิติเวช', '2136', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (217, 'ห้องเก็บศพ', '3172', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (218, 'ยามแจ้งเหตุฉุกเฉิน', '3000', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (219, 'ยามประตูทางออก', '3191', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (220, 'ยามรักษาการณ์', '3192', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (221, 'ยามบ้านเปี่ยมสุข', '2160', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (222, 'ป้อมยามทางเข้าบ้านพัก', '3291', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (223, 'สนาม', '3222', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (224, 'น้ำเกลือ ตึกผลิต', '3150', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (225, 'คลังพัสดุ', '3197', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (226, 'บ้านพัก ผอก.', '4567', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (227, 'บ้านพักรองบริหาร', '3131', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (228, 'ศูนย์จัดเก็บ/ตรวจสอบสิทธิ์', '2100/2121/2271', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (229, 'สังคมสงเคราะห์', '2101', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (230, 'ประกันสังคม', '2121/3885', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (231, 'งานประกัน/แฟกเคลม  U R เนิต', '2185', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (232, 'บริหารเครือข่าย/เยี่ยมบ้าน', '2180', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (233, 'อาชีวเวชกรรม', '2177/2188  ', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (234, 'เวชกรรมสังคม(สอบสวนโรค)', '2515/2520', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (235, 'ศูนย์คอม IT', '3148 /3149', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (236, 'ศูนย์เฉพาะกิจ', '3101', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (237, 'เครื่องมือแพทย์', '3202', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (238, 'จ่ายกลาง', '3198/3199', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (239, 'ห้องนึ่ง', '3195', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (240, 'ห้องหัวหน้าเภสัชกร', '3236', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (241, 'ห้องคลังยา', '3200', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (242, 'ห้องวัสดุการแพทย์', '3201', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (243, 'ซัพพลาย /เครื่องมือแพทย์', '3202', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (244, 'ซัพพลาย / คลังเวชภัณฑ์ที่ไม่ใช่ยา', '3290', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (245, 'บ้านพักนักศึกษาพยาบาล', '3476', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (246, 'คลังยาจ่ายน้ำเกลือชันสูตรเก่า', '3175', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (247, 'ศูนย์วิจัยและพัฒนา', '3242', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (248, 'ศูนย์แพทย์/7107 พี่โอม', '7002', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (249, 'เดย์สปา', '3123', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (250, 'เดย์สปา ครัว', '3125', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (251, 'สูติกรรมบน', '3163', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (252, 'สูติกรรมบน', '3363', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (253, 'สูติกรรมพิเศษ1 คลินิก นมแม่', '3331', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (254, 'สูติกรรมพิเศษ รวม', '3332', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (255, 'ห้องคลอด', '3318', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (256, 'ห้องคลอด', '3319', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (257, 'ห้องนมแม่', '4074', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (258, 'พิเศษรวมอายุรกรรม อบ2', '3194', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (259, 'ตึกเจ้าพระยาอภัยภูเบศร', '3193', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (260, 'โพธิ์เงิน', '3333/3334', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (261, 'การแพทย์แผนไทย(สำนักงาน)', '3166/3884', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (262, 'การเงินแพทย์แผนไทย', '3177', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (263, 'ห้องฝังเข็ม', '3104', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (264, 'มูลนิธิ', '2171', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (265, 'การตลาด', '3883', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (266, 'ปราศจากเชื้อ', '3153/IC', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (267, 'ห้องควบคุมเครื่องมือ', '3507', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (268, 'เภสัชฝ่ายผลิต', '3138/3405', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (269, 'คุณพินโย ปลูกพืชส่งร้านพี่ฝน', '3152', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (270, ' พี่เคโระ ทำบัตร', '3152', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (271, 'การเงินมูลนิธิ', '3236', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (272, 'บ้านกระเช้า', '3412', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (273, 'พี่ยุ้ยจัดซื้อตึกบัญชี', '3154', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (274, 'พัฒนาการเด็ก', '5108', 'อาคาร 114 เตียง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (275, 'พัฒนาการเด็ก', '080-6418770', 'อาคาร 114 เตียง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (276, 'รพ.แพทย์แผยไทย', '5201/5202', 'อาคาร 114 เตียง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (277, 'ห้องประชุม รพ.แพทย์แผยไทย', '5208', 'อาคาร 114 เตียง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (278, 'สูติสามัญ', '5301/5302', 'อาคาร 114 เตียง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (279, 'ห้องตรวจภายใน สูติสามัญ', '5307', 'อาคาร 114 เตียง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (280, 'เจ้าหน้าที่ สูติพิเศษ 2', '5415-5416', 'อาคาร 114 เตียง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (281, 'สูติพิเศษ 2', '5417-5418', 'อาคาร 114 เตียง', 0, NULL);
INSERT INTO `phone_tbl` VALUES (282, 'คลินิกวัณโรค  โรคปอด', '2150', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (283, 'ห้องตรวจ คลินิกวัณโรค', '3311', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (284, 'ห้องจ่ายยา คลินิกวัณโรค', '3312', 'ตึกต่างๆ', 0, NULL);
INSERT INTO `phone_tbl` VALUES (285, 'Counter พยาบาลโซนผู้ป่วยวิกฤต', '4100/4101', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (286, 'Counter พยาบาลโซนผู้ป่วยทั่วไป', '4102/4103', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (287, 'ห้องสังเกตอาการ Observe', '4104', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (288, 'ศูนย์ Refer', '4105/4106', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (289, 'ห้องวิทยุ', '4107', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (290, 'ห้อง TEA Unit', '4108', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (291, 'ห้องทำงาน ER', '4109', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (292, 'ห้องเฝือก/ฉีดยา-ทำแผล', '4110', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (293, 'คัดกรอง ER', '4111', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (294, 'ห้องบัตร ER', '4112', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (295, 'Counter X-ray', '4113', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (296, 'ห้องพักเวร X-ray', '4114', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 1', 0, NULL);
INSERT INTO `phone_tbl` VALUES (297, 'Counter ห้องฟัน', '4300 / 4311', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (298, 'ห้องตรวจทันตกรรม', '4301', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (299, 'ห้องตรวจทันตกรรม', '4302', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (300, 'ห้องตรวจทันตกรรม', '4303', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (301, 'ห้องตรวจทันตกรรม', '4304', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (302, 'ห้องตรวจทันตกรรม', '4305', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (303, 'ห้องตรวจทันตกรรม', '4306', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (304, 'ห้องตรวจทันตกรรม', '4307', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (305, 'ห้องตรวจทันตกรรม', '4308', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (306, 'ห้องตรวจทันตกรรม', '4309', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);
INSERT INTO `phone_tbl` VALUES (307, 'ห้องตรวจทันตกรรม', '4310', 'อาคารอุบัติเหตุและฉุกเฉิน ชั้น 3', 0, NULL);

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
-- Records of phone_tel_type
-- ----------------------------
INSERT INTO `phone_tel_type` VALUES (1, 'มือถือ', 'moblie', 'm');
INSERT INTO `phone_tel_type` VALUES (2, 'ภายใน', 'telephone', 'p');
INSERT INTO `phone_tel_type` VALUES (3, 'แฟ็กซ์', 'fax', 'f');
INSERT INTO `phone_tel_type` VALUES (4, 'ภายนอก', 'outphone', 'o');

-- ----------------------------
-- Table structure for req_prob
-- ----------------------------
DROP TABLE IF EXISTS `req_prob`;
CREATE TABLE `req_prob`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cidcode` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gender` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `profession` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `amphoe` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `zipcode` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mobile` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `req_to` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `req_head` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `req_prob_type` int(2) NOT NULL,
  `req_details` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `request` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `offname` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'N',
  `req_time` datetime(0) DEFAULT NULL,
  `check_status` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'N',
  `check_time` datetime(0) DEFAULT NULL,
  `check_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for req_prob_type
-- ----------------------------
DROP TABLE IF EXISTS `req_prob_type`;
CREATE TABLE `req_prob_type`  (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `describes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `orderBy` int(2) NOT NULL,
  `status` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'Y',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of req_prob_type
-- ----------------------------
INSERT INTO `req_prob_type` VALUES (1, 'อื่น', 99, 'Y');
INSERT INTO `req_prob_type` VALUES (2, 'ร้องเรียนเจ้าหน้าที่หรือหน่วยงาน', 1, 'Y');
INSERT INTO `req_prob_type` VALUES (3, 'ร้องเรียนการให้บริการ', 2, 'Y');
INSERT INTO `req_prob_type` VALUES (4, 'ข้อเสนอแนะ ข้อคิดเห็น และคำชมเชย', 3, 'Y');
INSERT INTO `req_prob_type` VALUES (5, 'ร้องทุกข์', 4, 'Y');

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
-- Records of subworkdepartment
-- ----------------------------
INSERT INTO `subworkdepartment` VALUES (1, 'อายุรกรรมทั่วไป', 1);
INSERT INTO `subworkdepartment` VALUES (2, 'คลินิกประสาทวิทยา', 1);
INSERT INTO `subworkdepartment` VALUES (3, 'คลินิกโรคไต', 1);
INSERT INTO `subworkdepartment` VALUES (4, 'คลินิกโรคปอด', 1);
INSERT INTO `subworkdepartment` VALUES (5, ' คลินิกโรคความดันโลหิตสูง', 1);
INSERT INTO `subworkdepartment` VALUES (6, 'คลินิกอายุรกรรมโรคข้อ', 1);
INSERT INTO `subworkdepartment` VALUES (7, 'คลินิกเต้านม', 1);
INSERT INTO `subworkdepartment` VALUES (8, 'คลีนิกผิวหนัง', 0);
INSERT INTO `subworkdepartment` VALUES (9, 'สูติ-นรีเวชกรรมทั่วไป', 2);
INSERT INTO `subworkdepartment` VALUES (10, 'ฝากครรภ์', 2);
INSERT INTO `subworkdepartment` VALUES (11, 'ตรวจหลังคลอด', 2);
INSERT INTO `subworkdepartment` VALUES (12, 'วางแผนครอบครัว', 2);
INSERT INTO `subworkdepartment` VALUES (13, 'คลินิกมีบุตรยาก', 2);
INSERT INTO `subworkdepartment` VALUES (14, 'คลินิกกามโรค', 2);
INSERT INTO `subworkdepartment` VALUES (15, 'คลินิกวัยทอง (หญิง)', 2);
INSERT INTO `subworkdepartment` VALUES (16, 'คลินิกวัยทอง (ชาย)', 2);
INSERT INTO `subworkdepartment` VALUES (17, 'ตรวจโรคเด็กทั่วไป', 3);
INSERT INTO `subworkdepartment` VALUES (18, 'คลินิกโรคเลือด', 3);
INSERT INTO `subworkdepartment` VALUES (19, 'คลินิกพัฒนาการเด็ก', 3);
INSERT INTO `subworkdepartment` VALUES (20, 'ตรวจสุขภาพเด็กดี (ฉีดวัคซีน)', 3);
INSERT INTO `subworkdepartment` VALUES (21, 'คลินิกเด็กแรกคลอด', 3);
INSERT INTO `subworkdepartment` VALUES (22, 'คลินิกโรคปอดและภูมิแพ้,โรคไต', 3);
INSERT INTO `subworkdepartment` VALUES (23, 'ศัลยกรรมทั่วไป', 4);
INSERT INTO `subworkdepartment` VALUES (24, 'ศัลยกรรมกระดูก', 4);
INSERT INTO `subworkdepartment` VALUES (25, 'ศัลยกรรมระบบทางเดินปัสสาวะ', 4);
INSERT INTO `subworkdepartment` VALUES (26, 'ศัลยระบบสมอง', 4);
INSERT INTO `subworkdepartment` VALUES (27, 'ศัลยกรรมตกแต่ง', 4);
INSERT INTO `subworkdepartment` VALUES (28, 'ฟัน', 5);
INSERT INTO `subworkdepartment` VALUES (29, 'คลินิกยาเสพติด,อดบุหรี่,อดสุรา', 5);
INSERT INTO `subworkdepartment` VALUES (30, 'คลินิกคลายเครียด', 5);
INSERT INTO `subworkdepartment` VALUES (31, 'คลินิกนิรนาม', 5);
INSERT INTO `subworkdepartment` VALUES (32, 'เวชกรรมฟื้นฟู', 5);
INSERT INTO `subworkdepartment` VALUES (33, 'กายภาพบำบัด', 5);
INSERT INTO `subworkdepartment` VALUES (34, 'ตรวจโรคทั่วไป', 5);
INSERT INTO `subworkdepartment` VALUES (35, 'ตา', 5);
INSERT INTO `subworkdepartment` VALUES (36, 'หู คอ จมูก', 5);
INSERT INTO `subworkdepartment` VALUES (37, 'จิตเวช', 5);
INSERT INTO `subworkdepartment` VALUES (38, 'คลินิก DAY CARD', 5);
INSERT INTO `subworkdepartment` VALUES (39, 'คลินิกเบาหวาน', 5);
INSERT INTO `subworkdepartment` VALUES (40, 'คลินิกวัณโรค', 5);
INSERT INTO `subworkdepartment` VALUES (41, 'คลินิกการแพทย์แผนไทย', 0);
INSERT INTO `subworkdepartment` VALUES (42, 'อบสมุนไพร นวด กดจุด', 7);
INSERT INTO `subworkdepartment` VALUES (43, 'ฝังเข็ม', 7);
INSERT INTO `subworkdepartment` VALUES (44, 'นอกเวลา', 7);
INSERT INTO `subworkdepartment` VALUES (45, 'คลินิกนมแม่', 2);
INSERT INTO `subworkdepartment` VALUES (46, 'อายุรกรรมระบบประสาท  (พญ.วรรณพร เอี่ยมวรวุฒิกุล)', 6);
INSERT INTO `subworkdepartment` VALUES (47, 'อายุรกรรมโรคหัวใจ (พญ.ปาลิดา พึ่งผล\r\n)', 6);
INSERT INTO `subworkdepartment` VALUES (48, 'กุมารเวชกรรมทั่วไป (พญ.พัชรินทร์ เกียรติกังวาฬไกล)', 6);
INSERT INTO `subworkdepartment` VALUES (49, 'อายุรกรรมโรคติดเชื้อ (พญ.สุเบญจา พิณสาย\r\n)', 6);
INSERT INTO `subworkdepartment` VALUES (50, 'อายุรกรรมทั่วไป (พญ.รังสิมา รังสีธรรมปัญญา)', 6);
INSERT INTO `subworkdepartment` VALUES (51, 'กุมารเวชกรรมทั่วไป (พญ.ดลยา เอกวิชกุล)', 6);
INSERT INTO `subworkdepartment` VALUES (52, 'อายุรกรรมโรคไต (นพ.วรพจน์ เตรียมตระการผล\r\n)', 6);
INSERT INTO `subworkdepartment` VALUES (53, 'อายุรกรรมโรคเลือด (พญ.สิรภัทร รุ่งวิทยาธิวัฒน์)', 6);
INSERT INTO `subworkdepartment` VALUES (54, 'กุมารเวชกรรมทั่วไป (พญ.ดลยา เอกวิชกุล)', 6);
INSERT INTO `subworkdepartment` VALUES (55, 'อายุรกรรมโรคระบบทางเดินอาหาร (พญ.วิจิตรา คงคา)', 6);
INSERT INTO `subworkdepartment` VALUES (56, 'อายุรกรรมทั่วไป (พญ.ปวีณา กนกพจนานนท์)', 6);
INSERT INTO `subworkdepartment` VALUES (57, 'อายุรกรรมระบบประสาท (พญ.วรรณพร เอี่ยมวรวุฒิกุล)', 6);
INSERT INTO `subworkdepartment` VALUES (58, 'อายุรกรรมโรคหัวใจ (เฉพาะศุกร์ที่1ของเดือน) (พญ.ปาลิดา พึ่งผล\r\n)', 6);
INSERT INTO `subworkdepartment` VALUES (59, 'อายุรกรรมโรคติดเชื้อ (เฉพาะศุกร์ที่3ของเดือน) (พญ.สุเบญจา พิณสาย)\r\n', 6);

-- ----------------------------
-- Table structure for tb_department
-- ----------------------------
DROP TABLE IF EXISTS `tb_department`;
CREATE TABLE `tb_department`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `en_description` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'Y',
  `detail` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `icon_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `icon_color` varchar(7) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_department
-- ----------------------------
INSERT INTO `tb_department` VALUES (1, 'แผนกอายุรกรรม', 'medicine', 'Y', 'ทดลอง22', '5', '#24cad6');
INSERT INTO `tb_department` VALUES (2, 'แผนกสูติ-นรีวเชกรรม', 'obstetrics', 'Y', 'Test', '7', '#1ac79f');
INSERT INTO `tb_department` VALUES (3, 'แผนกกุมารเวชกรรม', 'pediatrics', 'Y', 'ทดลอง', '40', '#1ac79f');
INSERT INTO `tb_department` VALUES (4, 'แผนกศัลยกรรม', 'surgery', 'Y', 'Test', '52', '#1ac79f');
INSERT INTO `tb_department` VALUES (5, 'แผนกอายุรกรรม', 'medicine', 'Y', 'ทดลอง', '63', '#1ac79f');
INSERT INTO `tb_department` VALUES (6, 'คลินิก SMC นอกเวลา', 'other', 'Y', 'Test', '22', '#1ac79f');
INSERT INTO `tb_department` VALUES (7, 'แผนกแพทย์แผนไทย', 'thaitraditional', 'Y', 'ทดลอง', '11', '#1ac79f');
INSERT INTO `tb_department` VALUES (8, 'ทดลองเพิ่มแผนก', 'testAddDep2', 'N', 'Test', '12', '#c71a1a');

-- ----------------------------
-- Table structure for tb_department_date
-- ----------------------------
DROP TABLE IF EXISTS `tb_department_date`;
CREATE TABLE `tb_department_date`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `date` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_department_date
-- ----------------------------
INSERT INTO `tb_department_date` VALUES (1, 'จันทร์');
INSERT INTO `tb_department_date` VALUES (2, 'จันทร์ - พฤหัสบดี');
INSERT INTO `tb_department_date` VALUES (3, 'จันทร์ - ศุกร์');
INSERT INTO `tb_department_date` VALUES (4, 'จันทร์ , พุธ');
INSERT INTO `tb_department_date` VALUES (5, 'จันทร์ , พุธ , ศุกร์');
INSERT INTO `tb_department_date` VALUES (6, 'จันทร์ , อังคาร , พฤหัสบดี');
INSERT INTO `tb_department_date` VALUES (7, 'อังคาร');
INSERT INTO `tb_department_date` VALUES (8, 'อังคาร , พฤหัสบดี');
INSERT INTO `tb_department_date` VALUES (9, 'พุธ');
INSERT INTO `tb_department_date` VALUES (10, 'พฤหัสบดี');
INSERT INTO `tb_department_date` VALUES (11, 'ศุกร์');
INSERT INTO `tb_department_date` VALUES (12, 'เสาร์');
INSERT INTO `tb_department_date` VALUES (13, 'อาทิตย์');
INSERT INTO `tb_department_date` VALUES (14, 'ทุกวัน');
INSERT INTO `tb_department_date` VALUES (15, 'จันทร์ , อังคาร , พุธ');

-- ----------------------------
-- Table structure for tb_department_detail
-- ----------------------------
DROP TABLE IF EXISTS `tb_department_detail`;
CREATE TABLE `tb_department_detail`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `detail` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_department_detail
-- ----------------------------
INSERT INTO `tb_department_detail` VALUES (1, 'ที่ 2 , 4 ของเดือน');
INSERT INTO `tb_department_detail` VALUES (2, 'ที่ 1 , 3 ของเดือน');
INSERT INTO `tb_department_detail` VALUES (3, 'ที่ 1 ของเดือน');
INSERT INTO `tb_department_detail` VALUES (4, 'ที่ 3 ของเดือน');
INSERT INTO `tb_department_detail` VALUES (5, '(นอกเวลา)');
INSERT INTO `tb_department_detail` VALUES (6, '(ยกเว้นวันหยุดราชการ)');
INSERT INTO `tb_department_detail` VALUES (7, '-');

-- ----------------------------
-- Table structure for tb_department_event
-- ----------------------------
DROP TABLE IF EXISTS `tb_department_event`;
CREATE TABLE `tb_department_event`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `department` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `department_sub` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `department_date` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `department_detail` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `department_time` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `order_by` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 71 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_department_event
-- ----------------------------
INSERT INTO `tb_department_event` VALUES (1, '1', '1', '3', '7', '2', 1);
INSERT INTO `tb_department_event` VALUES (2, '1', '2', '1', '5', '8', 2);
INSERT INTO `tb_department_event` VALUES (3, '1', '2', '7', '7', '3', 3);
INSERT INTO `tb_department_event` VALUES (4, '1', '2', '10', '7', '6', 4);
INSERT INTO `tb_department_event` VALUES (5, '1', '3', '4', '7', '3', 5);
INSERT INTO `tb_department_event` VALUES (6, '1', '3', '9', '7', '9', 6);
INSERT INTO `tb_department_event` VALUES (7, '1', '3', '10', '7', '5', 7);
INSERT INTO `tb_department_event` VALUES (8, '1', '4', '7', '7', '2', 8);
INSERT INTO `tb_department_event` VALUES (9, '1', '5', '7', '7', '7', 9);
INSERT INTO `tb_department_event` VALUES (10, '1', '5', '6', '5', '10', 10);
INSERT INTO `tb_department_event` VALUES (11, '1', '6', '9', '3', '2', 11);
INSERT INTO `tb_department_event` VALUES (12, '1', '7', '1', '7', '6', 12);
INSERT INTO `tb_department_event` VALUES (13, '2', '9', '3', '7', '2', 1);
INSERT INTO `tb_department_event` VALUES (14, '2', '10', '3', '7', '2', 2);
INSERT INTO `tb_department_event` VALUES (15, '2', '11', '3', '7', '2', 3);
INSERT INTO `tb_department_event` VALUES (16, '2', '12', '3', '7', '2', 4);
INSERT INTO `tb_department_event` VALUES (17, '2', '13', '1', '1', '7', 5);
INSERT INTO `tb_department_event` VALUES (18, '2', '14', '9', '1', '7', 6);
INSERT INTO `tb_department_event` VALUES (19, '2', '15', '10', '2', '5', 7);
INSERT INTO `tb_department_event` VALUES (20, '2', '16', '10', '2', '2', 8);
INSERT INTO `tb_department_event` VALUES (21, '2', '45', '3', '7', '2', 9);
INSERT INTO `tb_department_event` VALUES (22, '3', '17', '3', '7', '2', 1);
INSERT INTO `tb_department_event` VALUES (23, '3', '18', '11', '7', '2', 2);
INSERT INTO `tb_department_event` VALUES (24, '3', '19', '1', '7', '2', 3);
INSERT INTO `tb_department_event` VALUES (25, '3', '20', '7', '7', '2', 4);
INSERT INTO `tb_department_event` VALUES (26, '3', '21', '7', '2', '2', 5);
INSERT INTO `tb_department_event` VALUES (27, '3', '22', '9', '1', '2', 6);
INSERT INTO `tb_department_event` VALUES (28, '4', '23', '3', '7', '2', 1);
INSERT INTO `tb_department_event` VALUES (29, '4', '24', '3', '7', '2', 2);
INSERT INTO `tb_department_event` VALUES (30, '4', '25', '1', '7', '2', 3);
INSERT INTO `tb_department_event` VALUES (31, '4', '26', '11', '7', '2', 4);
INSERT INTO `tb_department_event` VALUES (32, '4', '27', '9', '7', '2', 5);
INSERT INTO `tb_department_event` VALUES (33, '5', '28', '3', '7', '2', 1);
INSERT INTO `tb_department_event` VALUES (34, '5', '29', '3', '7', '7', 2);
INSERT INTO `tb_department_event` VALUES (35, '5', '30', '3', '7', '7', 3);
INSERT INTO `tb_department_event` VALUES (36, '5', '31', '3', '7', '2', 4);
INSERT INTO `tb_department_event` VALUES (37, '5', '32', '5', '7', '2', 5);
INSERT INTO `tb_department_event` VALUES (38, '5', '33', '3', '7', '2', 6);
INSERT INTO `tb_department_event` VALUES (39, '5', '34', '3', '6', '1', 7);
INSERT INTO `tb_department_event` VALUES (40, '5', '34', '3', '6', '10', 8);
INSERT INTO `tb_department_event` VALUES (41, '5', '35', '2', '7', '2', 9);
INSERT INTO `tb_department_event` VALUES (42, '5', '36', '2', '7', '2', 10);
INSERT INTO `tb_department_event` VALUES (43, '5', '37', '15', '7', '2', 11);
INSERT INTO `tb_department_event` VALUES (44, '5', '38', '9', '7', '2', 12);
INSERT INTO `tb_department_event` VALUES (45, '5', '39', '10', '7', '2', 13);
INSERT INTO `tb_department_event` VALUES (46, '5', '40', '11', '7', '2', 14);
INSERT INTO `tb_department_event` VALUES (47, '6', '46', '1', '7', '8', 1);
INSERT INTO `tb_department_event` VALUES (48, '6', '47', '1', '7', '8', 2);
INSERT INTO `tb_department_event` VALUES (49, '6', '48', '1', '7', '8', 3);
INSERT INTO `tb_department_event` VALUES (50, '6', '49', '7', '7', '8', 4);
INSERT INTO `tb_department_event` VALUES (51, '6', '50', '7', '7', '8', 5);
INSERT INTO `tb_department_event` VALUES (52, '6', '51', '7', '7', '8', 6);
INSERT INTO `tb_department_event` VALUES (53, '6', '52', '9', '7', '8', 7);
INSERT INTO `tb_department_event` VALUES (54, '6', '53', '9', '7', '8', 8);
INSERT INTO `tb_department_event` VALUES (55, '6', '54', '9', '7', '8', 9);
INSERT INTO `tb_department_event` VALUES (56, '6', '55', '10', '7', '8', 10);
INSERT INTO `tb_department_event` VALUES (57, '6', '56', '10', '7', '8', 11);
INSERT INTO `tb_department_event` VALUES (58, '6', '57', '11', '7', '8', 12);
INSERT INTO `tb_department_event` VALUES (59, '6', '58', '11', '3', '8', 13);
INSERT INTO `tb_department_event` VALUES (60, '6', '59', '11', '4', '8', 14);
INSERT INTO `tb_department_event` VALUES (61, '7', '42', '14', '7', '4', 1);
INSERT INTO `tb_department_event` VALUES (62, '7', '43', '8', '7', '4', 2);
INSERT INTO `tb_department_event` VALUES (63, '7', '43', '8', '7', '10', 3);
INSERT INTO `tb_department_event` VALUES (65, '7', '61', '12', '1', '7', 4);
INSERT INTO `tb_department_event` VALUES (68, '8', '33', '14', '1', '8', 1);
INSERT INTO `tb_department_event` VALUES (70, '8', '48', '7', '4', '1', 2);

-- ----------------------------
-- Table structure for tb_department_sub
-- ----------------------------
DROP TABLE IF EXISTS `tb_department_sub`;
CREATE TABLE `tb_department_sub`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `description_sub` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `en_description_sub` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `word` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `img` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 65 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_department_sub
-- ----------------------------
INSERT INTO `tb_department_sub` VALUES (1, 'อายุรกรรมทั่วไป', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (2, 'คลินิกประสาทวิทยา', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (3, 'คลินิกโรคไต', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (4, 'คลินิกโรคปอด', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (5, 'คลินิกโรคความดันโลหิตสูง', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (6, 'คลินิกอายุรกรรมโรคข้อ', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (7, 'คลินิกเต้านม', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (8, 'คลีนิกผิวหนัง', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (9, 'สูติ-นรีเวชกรรมทั่วไป', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (10, 'ฝากครรภ์', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (11, 'ตรวจหลังคลอด', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (12, 'วางแผนครอบครัว', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (13, 'คลินิกมีบุตรยาก', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (14, 'คลินิกกามโรค', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (15, 'คลินิกวัยทอง (หญิง)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (16, 'คลินิกวัยทอง (ชาย)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (17, 'ตรวจโรคเด็กทั่วไป', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (18, 'คลินิกโรคเลือด', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (19, 'คลินิกพัฒนาการเด็ก', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (20, 'ตรวจสุขภาพเด็กดี (ฉีดวัคซีน)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (21, 'คลินิกเด็กแรกคลอด', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (22, 'คลินิกโรคปอด,ภูมิแพ้และโรคไต', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (23, 'ศัลยกรรมทั่วไป', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (24, 'ศัลยกรรมกระดูก', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (25, 'ศัลยกรรมระบบทางเดินปัสสาวะ', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (26, 'ศัลยระบบสมอง', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (27, 'ศัลยกรรมตกแต่ง', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (28, 'ฟัน', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (29, 'คลินิกยาเสพติด,อดบุหรี่,อดสุรา', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (30, 'คลินิกคลายเครียด', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (31, 'คลินิกนิรนาม', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (32, 'เวชกรรมฟื้นฟู', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (33, 'กายภาพบำบัด', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (34, 'ตรวจโรคทั่วไป', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (35, 'ตา', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (36, 'หู คอ จมูก', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (37, 'จิตเวช', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (38, 'คลินิก DAY CARD', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (39, 'คลินิกเบาหวาน', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (40, 'คลินิกวัณโรค', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (41, 'คลินิกการแพทย์แผนไทย', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (42, 'อบสมุนไพร นวด กดจุด', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (43, 'ฝังเข็ม', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (44, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (45, 'คลินิกนมแม่', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (46, 'อายุรกรรมระบบประสาท (พญ.วรรณพร เอี่ยมวรวุฒิกุล)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (47, 'อายุรกรรมโรคหัวใจ (พญ.ปาลิดา พึ่งผล\r\n)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (48, 'กุมารเวชกรรมทั่วไป (พญ.พัชรินทร์ เกียรติกังวาฬไกล)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (49, 'อายุรกรรมโรคติดเชื้อ (พญ.สุเบญจา พิณสาย\r\n)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (50, 'อายุรกรรมทั่วไป (พญ.รังสิมา รังสีธรรมปัญญา)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (51, 'กุมารเวชกรรมทั่วไป (พญ.ดลยา เอกวิชกุล)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (52, 'อายุรกรรมโรคไต (นพ.วรพจน์ เตรียมตระการผล\r\n)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (53, 'อายุรกรรมโรคเลือด (พญ.สิรภัทร รุ่งวิทยาธิวัฒน์)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (54, 'กุมารเวชกรรมทั่วไป (พญ.ดลยา เอกวิชกุล)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (55, 'อายุรกรรมโรคระบบทางเดินอาหาร (พญ.วิจิตรา คงคา)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (56, 'อายุรกรรมทั่วไป (พญ.ปวีณา กนกพจนานนท์)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (57, 'อายุรกรรมระบบประสาท (พญ.วรรณพร เอี่ยมวรวุฒิกุล)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (58, 'อายุรกรรมโรคหัวใจ (พญ.ปาลิดา พึ่งผล)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (59, 'อายุรกรรมโรคติดเชื้อ (พญ.สุเบญจา พิณสาย)', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (61, 'ทดลองเพิ่มเข็มเสาร์ ที่ 2 4 13.00-16.30', NULL, 'XXXXXXX', 'การรักษาด้านการแพทย์แผนไทยประยุกต์ จะรวบรวมและประมวลข้อมูลตามแนวคิดและทฤษฎีการแพทย์แผนไทยว่าด้วยเรื่องธาตุ เช่น คัมภีร์โรคนิทาน คัมภีร์สมุฏฐานวินิจฉัย คัมภีร์ธาตุวิภังค์ คัมภีร์ธาตุวิวรณ์ คัมภีร์วิสุทธิมรรค ซึ่งกล่าวไว้ว่าร่างกายมนุษย์ประกอบขึ้นจากกองธาตุทั้ง 4 ได้แก่ ธาตุดิน ธาตุน้ำ ธาตุลมและธาตุไฟ โดยมนุษย์แต่ละคนจะมีส่วนประกอบธาตุต่างๆที่ไม่เหมือนกัน แต่จะมีธาตุใดธาตุหนึ่งเป็นใหญ่ เรียกว่าธาตุเจ้าเรือน ของคนๆนั้น  แต่ธาตุเจ้าเรือนซึ่งมีมาแต่เกิดจะมีการเปลี่ยนแปลงได้ตามกาลเวลา ปัจจัยที่มีอิทธิพลให้เกิดการเปลี่ยนแปลง ได้แก่ อายุ ฤดูกาล กาลเวลา ถิ่นที่อยู่และมูลเหตุการเกิด โรคที่เกิดจากพฤติกรรม หากเกิดความไม่สมดุลของธาตุที่เป็นองค์ประกอบขึ้นเมื่อใด ก็จะเกิดโรคหรือความเจ็บป่วยขึ้น เมื่อแพทย์แผนไทยประยุกต์ให้การวินิจฉัยโรคแล้ว จะวางแผนการบำบัดรักษาด้วยศาสตร์การแพทย์แผนไทยให้ผู้ป่วย ซึ่งประกอบด้วยวิธีการดังนี้\r\n\r\nการใช้ยาสมุนไพร อาจเป็นการปรุงยาสำหรับผู้ป่วยแต่ละราย เช่น ยาต้มหรือจ่ายยาสำเร็จรูปที่ผลิตไว้ในรูปแบบต่างๆ เช่น ยาลูกกลอน ยาเม็ด ยาแคปซูล เป็นต้น\r\nการใช้หัตถการ/วิถีทางการแพทย์แผนไทย เช่น การนวด การประคบสมุนไพร การอบไอน้ำสมุนไพร การทับหม้อเกลือ การนั่งถ่าน การพอกผิว เป็นต้น\r\nการให้คำแนะนำในเรื่องต่างๆที่เกี่ยวข้องกับการเจ็บป่วยและการส่งสริมสุขภาพ เช่น การปฏิบัติตัว การบริหารร่างกาย การรับประทานอาหาร การปรับพฤติกรรม เป็นต้น\r\nกลุ่มอาการที่สามารถรักษาด้วยการแพทย์แผนไทยประยุกต์ ได้แก่\r\n\r\nกลุ่มการปวดบริเวณต่างๆ เช่น ปวดศีรษะ คอแข็งตึง ปวดต้นคอ,คอตกหมอน ปวดสะบัก/บ่า,ปวดไหล่,หัวไหล่ติด ปวดแขน,ข้อศอก,ข้อมือ,ข้อนิ้วมือ,ปวดหลัง,ปวดสะโพก,ปวดขา,ปวดเข่า,เข่าบวม,เหน็บชา,ตะคริวน่อง,ปวดเมื่อยกล้ามเนื้อจาการเล่นกีฬา,กล้ามเนื้ออ่อนแรง,กล้ามเนื้อเกร็ง,ปวดข้อเท้า/ส้นเท้า,ข้อเท้าแพลง\r\nท้องผูก,นอนไม่หลับ,ไข้หวัด,คัดจมูก, หอบหืด,ภูมิแพ้ \r\nอัมพฤกษ์ ,อัมพาต\r\nสตรีหลังคลอดน้ำคาวปลาไม่เดิน, คัดตึงเต้านม,น้ำนมไหลน้อย เป็นต้น', 'img1-20210127110708.jpg');
INSERT INTO `tb_department_sub` VALUES (62, 'ทดลองเพิ่มรายการ ทุกวัน นอกเวลา 10.00-12.00', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (63, 'ทดลองวันศุก', NULL, 'XXXXXXX', NULL, NULL);
INSERT INTO `tb_department_sub` VALUES (64, 'ชื่ออันใหม่ไม่มีในระบบ', NULL, 'XXXXXXX', NULL, NULL);

-- ----------------------------
-- Table structure for tb_department_time
-- ----------------------------
DROP TABLE IF EXISTS `tb_department_time`;
CREATE TABLE `tb_department_time`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `time` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_department_time
-- ----------------------------
INSERT INTO `tb_department_time` VALUES (1, '07.30 - 08.30 น.');
INSERT INTO `tb_department_time` VALUES (2, '08.30 - 12.00 น.');
INSERT INTO `tb_department_time` VALUES (3, '09.00 - 11.00 น.');
INSERT INTO `tb_department_time` VALUES (4, '09.00 - 15.00 น.');
INSERT INTO `tb_department_time` VALUES (5, '10.00 - 12.00 น.');
INSERT INTO `tb_department_time` VALUES (6, '13.00 - 15.00 น.');
INSERT INTO `tb_department_time` VALUES (7, '13.00 - 16.30 น.');
INSERT INTO `tb_department_time` VALUES (8, '16.00 - 20.00 น.');
INSERT INTO `tb_department_time` VALUES (9, '16.30 - 20.00 น.');
INSERT INTO `tb_department_time` VALUES (10, '16.30 - 20.30 น.');

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
-- Records of workdepartment
-- ----------------------------
INSERT INTO `workdepartment` VALUES (1, 'แผนกอายุรกรรม', 'medicine');
INSERT INTO `workdepartment` VALUES (2, 'แผนกสูติ-นรีวเชกรรม', 'obstetrics');
INSERT INTO `workdepartment` VALUES (3, 'แผนกกุมารเวชกรรม', 'pediatrics');
INSERT INTO `workdepartment` VALUES (4, 'แผนกศัลยกรรม', 'surgery');
INSERT INTO `workdepartment` VALUES (5, 'แผนกโรคต่างๆ', 'diseases');
INSERT INTO `workdepartment` VALUES (6, 'คลินิก SMC นอกเวลา', 'other');
INSERT INTO `workdepartment` VALUES (7, 'แผนกแพทย์แผนไทย', 'thaitraditional');

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

-- ----------------------------
-- Records of workdetail
-- ----------------------------
INSERT INTO `workdetail` VALUES (1, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 1);
INSERT INTO `workdetail` VALUES (2, 'จันทร์ (นอกเวลา)', '16.00 - 20.00 น.', 2);
INSERT INTO `workdetail` VALUES (3, 'อังคาร', '09.00 - 11.00 น.', 2);
INSERT INTO `workdetail` VALUES (4, 'พฤหัสบดี', '13.00 - 15.00 น.', 2);
INSERT INTO `workdetail` VALUES (5, 'จันทร์ , พุธ', '09.00 - 11.00 น.', 3);
INSERT INTO `workdetail` VALUES (6, 'พุธ', '16.30 - 20.00 น.', 3);
INSERT INTO `workdetail` VALUES (7, 'พฤหัสบดี', '10.00 - 12.00 น.', 3);
INSERT INTO `workdetail` VALUES (8, 'อังคาร', '08.30 - 12.00 น.', 4);
INSERT INTO `workdetail` VALUES (9, 'อังคาร', '13.00 - 16.30 น.', 5);
INSERT INTO `workdetail` VALUES (10, 'จันทร์ , อังคาร, พฤหัสบดี (นอกเวลา)', '16.30 - 20.30 น.', 5);
INSERT INTO `workdetail` VALUES (11, 'พุธที่ 1 ของเดือน', '08.30 - 12.00 น.', 6);
INSERT INTO `workdetail` VALUES (12, 'จันทร์', '13.00 - 15.00 น.', 7);
INSERT INTO `workdetail` VALUES (13, 'พุธ', '13.00 - 15.00 น.', 8);
INSERT INTO `workdetail` VALUES (14, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 9);
INSERT INTO `workdetail` VALUES (15, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 10);
INSERT INTO `workdetail` VALUES (16, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 11);
INSERT INTO `workdetail` VALUES (17, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 12);
INSERT INTO `workdetail` VALUES (18, 'จันทร์ที่ 2 , 4 ของเดือน', '13.00 - 16.30 น.', 13);
INSERT INTO `workdetail` VALUES (19, 'พุธที่ 2 , 4 ของเดือน', '13.00 - 16.30 น.', 14);
INSERT INTO `workdetail` VALUES (20, 'พฤหัสบดีที่ 1 , 3 ของเดือน', '10.00 - 12.00 น.', 15);
INSERT INTO `workdetail` VALUES (21, 'พฤหัสบดีที่ 1 , 3 ของเดือน', '08.30 - 12.00 น.', 16);
INSERT INTO `workdetail` VALUES (22, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 17);
INSERT INTO `workdetail` VALUES (23, 'ศุกร์', '08.30 - 12.00 น.', 18);
INSERT INTO `workdetail` VALUES (24, 'จันทร์', '08.30 - 12.00 น.', 19);
INSERT INTO `workdetail` VALUES (25, 'อังคาร', '08.30 - 12.00 น.', 20);
INSERT INTO `workdetail` VALUES (26, 'อังคารที่ 1,3 ของเดือน', '08.30 - 12.00 น.', 21);
INSERT INTO `workdetail` VALUES (27, 'พุธที่ 2 , 4 ของเดือน', '08.30 - 12.00 น.', 22);
INSERT INTO `workdetail` VALUES (28, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 23);
INSERT INTO `workdetail` VALUES (29, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 24);
INSERT INTO `workdetail` VALUES (30, 'จันทร์', '08.30 - 12.00 น.', 25);
INSERT INTO `workdetail` VALUES (31, 'ศุกร์', '08.30 - 12.00 น.', 26);
INSERT INTO `workdetail` VALUES (32, 'พุธ', '08.30 - 12.00 น.', 27);
INSERT INTO `workdetail` VALUES (33, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 28);
INSERT INTO `workdetail` VALUES (34, 'จันทร์ - ศุกร์', '13.00 - 16.30 น.', 29);
INSERT INTO `workdetail` VALUES (35, 'จันทร์ - ศุกร์', '13.00 - 16.30 น.', 30);
INSERT INTO `workdetail` VALUES (36, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 31);
INSERT INTO `workdetail` VALUES (37, 'จันทร์ , พุธ , ศุกร์', '08.30 - 12.00 น.', 32);
INSERT INTO `workdetail` VALUES (38, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 33);
INSERT INTO `workdetail` VALUES (39, 'จันทร์ - ศุกร์ (ยกเว้นวันหยุดราชการ)', '07.30 - 08.30 น. (เช้า)', 34);
INSERT INTO `workdetail` VALUES (40, 'จันทร์ - ศุกร์ (ยกเว้นวันหยุดราชการ)', '16.30 - 20.30 น. (เย็น)', 34);
INSERT INTO `workdetail` VALUES (41, 'จันทร์ - พฤหัสบดี', '08.30 - 12.00 น.', 35);
INSERT INTO `workdetail` VALUES (42, 'จันทร์ - พฤหัสบดี', '08.30 - 12.00 น.', 36);
INSERT INTO `workdetail` VALUES (43, 'จันทร์ , อังคาร , พุธ', '08.30 - 12.00 น.', 37);
INSERT INTO `workdetail` VALUES (44, 'พุธ', '08.30 - 12.00 น.', 38);
INSERT INTO `workdetail` VALUES (45, 'พฤหัสบดี', '08.30 - 12.00 น.', 39);
INSERT INTO `workdetail` VALUES (46, 'ศุกร์', '08.30 - 12.00 น.', 40);
INSERT INTO `workdetail` VALUES (47, NULL, NULL, 41);
INSERT INTO `workdetail` VALUES (48, 'ทุกวัน', '09.00 - 15.00 น.', 42);
INSERT INTO `workdetail` VALUES (49, 'อังคาร , พฤหัสบดี', '09.00 - 15.00 น.', 43);
INSERT INTO `workdetail` VALUES (51, 'อังคาร , พฤหัสบดี', '16.30 - 20.30 น.', 44);
INSERT INTO `workdetail` VALUES (52, NULL, NULL, NULL);
INSERT INTO `workdetail` VALUES (53, 'จันทร์ - ศุกร์', '08.30 - 12.00 น.', 45);
INSERT INTO `workdetail` VALUES (54, 'จันทร์', '16.00 - 20.00 น.', 46);
INSERT INTO `workdetail` VALUES (55, 'จันทร์', '16.00 - 20.00 น.', 47);
INSERT INTO `workdetail` VALUES (56, 'จันทร์', '16.00 - 20.00 น.', 48);
INSERT INTO `workdetail` VALUES (57, 'อังคาร', '16.00 - 20.00 น.', 49);
INSERT INTO `workdetail` VALUES (58, 'อังคาร', '16.00 - 20.00 น.', 50);
INSERT INTO `workdetail` VALUES (59, 'อังคาร', '16.00 - 20.00 น.', 51);
INSERT INTO `workdetail` VALUES (60, 'พุธ', '16.00 - 20.00 น.', 52);
INSERT INTO `workdetail` VALUES (61, 'พุธ', '16.00 - 20.00 น.', 53);
INSERT INTO `workdetail` VALUES (62, 'พุธ', '16.00 - 20.00 น.', 54);
INSERT INTO `workdetail` VALUES (63, 'พฤหัสบดี', '16.00 - 20.00 น.', 55);
INSERT INTO `workdetail` VALUES (64, 'พฤหัสบดี', '16.00 - 20.00 น.', 56);
INSERT INTO `workdetail` VALUES (65, 'ศุกร์', '16.00 - 20.00 น.', 57);
INSERT INTO `workdetail` VALUES (66, 'ศุกร์', '16.00 - 20.00 น.', 58);
INSERT INTO `workdetail` VALUES (67, 'ศุกร์', '16.00 - 20.00 น.', 59);

SET FOREIGN_KEY_CHECKS = 1;
