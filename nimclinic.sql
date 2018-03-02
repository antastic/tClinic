/*
Navicat MySQL Data Transfer

Source Server         : t
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : nimclinic

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-02 20:37:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for appointment
-- ----------------------------
DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `apps_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสนัด',
  `apps_date` datetime NOT NULL COMMENT 'วันนัด',
  `apps_details` text NOT NULL COMMENT 'รายละเอียดการนัด',
  `emp_id` int(2) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`apps_id`),
  KEY `fk_Appointment_service1_idx` (`service_id`),
  CONSTRAINT `fk_Appointment_service1` FOREIGN KEY (`service_id`) REFERENCES `service` (`sv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of appointment
-- ----------------------------
INSERT INTO `appointment` VALUES ('1', '2018-03-10 00:00:00', 'ตรวจซ้ำ', '2', '1');

-- ----------------------------
-- Table structure for dispense
-- ----------------------------
DROP TABLE IF EXISTS `dispense`;
CREATE TABLE `dispense` (
  `vsd_id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'เลขที่',
  `drug_amount` int(2) NOT NULL COMMENT 'จำนวน',
  `drug_prices` decimal(10,0) NOT NULL COMMENT 'ราคา',
  `drug_id` int(4) NOT NULL COMMENT 'เลขที่ยา',
  `emp_id` int(2) NOT NULL,
  `vtd_unit` varchar(20) NOT NULL,
  `service_id` int(11) NOT NULL,
  `Expenses_id` int(2) NOT NULL,
  PRIMARY KEY (`vsd_id`),
  KEY `fk_visitdrug_drug1_idx` (`drug_id`),
  KEY `fk_dispense_service1_idx` (`service_id`),
  KEY `fk_dispense_Expenses1_idx` (`Expenses_id`),
  CONSTRAINT `fk_dispense_Expenses1` FOREIGN KEY (`Expenses_id`) REFERENCES `expenses` (`ex_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_dispense_service1` FOREIGN KEY (`service_id`) REFERENCES `service` (`sv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_visitdrug_drug1` FOREIGN KEY (`drug_id`) REFERENCES `drug` (`drug_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dispense
-- ----------------------------
INSERT INTO `dispense` VALUES ('1', '10', '20', '1', '1', 'เม็ด', '1', '1');

-- ----------------------------
-- Table structure for drug
-- ----------------------------
DROP TABLE IF EXISTS `drug`;
CREATE TABLE `drug` (
  `drug_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัสยา',
  `drugname` varchar(200) NOT NULL COMMENT 'ชือยา',
  `used` varchar(200) DEFAULT NULL COMMENT 'วิธีใช้',
  PRIMARY KEY (`drug_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of drug
-- ----------------------------
INSERT INTO `drug` VALUES ('1', 'para', 'เวลาปวด');
INSERT INTO `drug` VALUES ('2', 'Amonxy', 'ก่อนอาหาร3เวลา');
INSERT INTO `drug` VALUES ('3', 'para', 'เวลาปวด');
INSERT INTO `drug` VALUES ('4', 'parac', 'เวลาปวด');

-- ----------------------------
-- Table structure for drugitem
-- ----------------------------
DROP TABLE IF EXISTS `drugitem`;
CREATE TABLE `drugitem` (
  `ip_id` int(8) NOT NULL AUTO_INCREMENT,
  `ip_date` date NOT NULL,
  `drug_id` int(4) NOT NULL,
  `in_amount` int(11) NOT NULL,
  `in_unit` varchar(45) NOT NULL,
  `ip_exp` date NOT NULL,
  `ip_status` enum('ห้ามใช้','ใช้ได้') NOT NULL,
  PRIMARY KEY (`ip_id`),
  KEY `fk_inputdrug_drug1_idx` (`drug_id`),
  CONSTRAINT `fk_inputdrug_drug1` FOREIGN KEY (`drug_id`) REFERENCES `drug` (`drug_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of drugitem
-- ----------------------------
INSERT INTO `drugitem` VALUES ('1', '2018-02-19', '1', '1000', 'เม็ด', '2018-01-30', 'ใช้ได้');
INSERT INTO `drugitem` VALUES ('2', '2018-02-19', '2', '300', 'เม็ด', '2020-02-01', 'ใช้ได้');
INSERT INTO `drugitem` VALUES ('3', '2018-02-22', '1', '1000', 'เม็ด', '2019-05-04', 'ใช้ได้');
INSERT INTO `drugitem` VALUES ('4', '2018-02-22', '1', '500', 'เม็ด', '2018-03-30', 'ใช้ได้');
INSERT INTO `drugitem` VALUES ('5', '2018-02-22', '4', '356', 'เม็ด', '2011-11-24', 'ใช้ได้');

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสเจ้าหน้าที่',
  `emp_name` varchar(50) NOT NULL COMMENT 'ชื่อเจ้าหน้าที่',
  `emp_lname` varchar(50) NOT NULL COMMENT 'นามสกุลเจ้าหน้าที่',
  `emp_uname` varchar(20) NOT NULL COMMENT 'UserName',
  `emp_pwd` varchar(32) NOT NULL COMMENT 'Password',
  `em_licenlse` varchar(20) DEFAULT NULL COMMENT 'เลขใบประกอบวิชาชีพ',
  `emp_type` enum('เจ้าหน้าที่','ผู้ตรวจรักษา') NOT NULL COMMENT 'ประเภทผู้ใช้งานระบบ',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', 'อมรเทพ', 'สุวรรณคำ', 'inw', 'ol12', '', 'เจ้าหน้าที่');
INSERT INTO `employee` VALUES ('2', 'test', '2', '2', '22', '22', 'ผู้ตรวจรักษา');
INSERT INTO `employee` VALUES ('3', '3', '33', '33', '33', '', 'เจ้าหน้าที่');
INSERT INTO `employee` VALUES ('4', 'เทพ', 'สุวรรณ', '22', 'ol12', '', 'เจ้าหน้าที่');
INSERT INTO `employee` VALUES ('5', 'อมร', 'วรรณคำ', 'inw1', 'ol12', '', 'ผู้ตรวจรักษา');
INSERT INTO `employee` VALUES ('11', 'อมรเทพ', '33', 'inw3', '0000', '', 'เจ้าหน้าที่');
INSERT INTO `employee` VALUES ('12', 'อมรเทพ', 'สุวรรณคำ', 'inw2', '000', '', 'เจ้าหน้าที่');

-- ----------------------------
-- Table structure for expenses
-- ----------------------------
DROP TABLE IF EXISTS `expenses`;
CREATE TABLE `expenses` (
  `ex_id` int(2) NOT NULL AUTO_INCREMENT,
  `Expenses` varchar(200) NOT NULL,
  PRIMARY KEY (`ex_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of expenses
-- ----------------------------
INSERT INTO `expenses` VALUES ('1', 'ค่าเวชภัณฑ์การแพทย์');
INSERT INTO `expenses` VALUES ('2', 'ค่าวัสดุการแพทย์');
INSERT INTO `expenses` VALUES ('3', 'ค่าบริการทางการแพทย์');

-- ----------------------------
-- Table structure for patient
-- ----------------------------
DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `pt_id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคนไข้',
  `ptName` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `ptLname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `ptAddress` text NOT NULL COMMENT 'ทีอยู่',
  `pt_phone` varchar(45) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `pt_dad` varchar(50) DEFAULT NULL COMMENT 'พ่อ',
  `pt_mom` varchar(50) DEFAULT NULL COMMENT 'แม่',
  `pt_blood` enum('A','B','AB','O') DEFAULT NULL COMMENT 'กรุ๊ปเลือด',
  `pt_bloodtype` enum('Rh+ve','Rh-ve') DEFAULT NULL COMMENT 'ประเภทกรุ๊ปเลือด',
  `pt_drug` varchar(200) DEFAULT NULL COMMENT 'แพ้ยา',
  `pt_dx` varchar(200) DEFAULT NULL COMMENT 'โรคประจำตัว',
  `pt_sex` enum('ชาย','หญิง') NOT NULL COMMENT 'เพศ',
  `pt_bd` date NOT NULL COMMENT 'วันเกิด',
  `pt_cid` varchar(13) NOT NULL,
  `pt_datail` text,
  PRIMARY KEY (`pt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of patient
-- ----------------------------
INSERT INTO `patient` VALUES ('1', 'ะำหะ', 'ะำะ', 'กด', '00_-____-___', 'ด', 'ด', 'A', 'Rh+ve', '', '', 'ชาย', '2008-12-28', '1-2345-67890-', '');
INSERT INTO `patient` VALUES ('14', 'สอง', 'ลุงลัง', '123', '123-4567-895', '', '', 'A', '', '', '', 'ชาย', '2008-02-01', '0-1234-56789-', '');
INSERT INTO `patient` VALUES ('15', 'สอง', 'ลุงลัง', '123', '123-4567-895', '', '', 'A', '', '', '', 'ชาย', '0000-00-00', '0-1234-56789-', '');

-- ----------------------------
-- Table structure for payment
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `ic_id` int(11) NOT NULL AUTO_INCREMENT,
  `ic_date` datetime NOT NULL,
  `ic_summary` decimal(10,0) NOT NULL,
  `emp_id` int(2) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`ic_id`),
  KEY `fk_Payment_service1_idx` (`service_id`),
  CONSTRAINT `fk_Payment_service1` FOREIGN KEY (`service_id`) REFERENCES `service` (`sv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of payment
-- ----------------------------
INSERT INTO `payment` VALUES ('1', '2018-03-01 00:00:00', '500', '2', '1');

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `sv_id` int(11) NOT NULL AUTO_INCREMENT,
  `svdx` varchar(200) NOT NULL,
  `sv_details` varchar(200) DEFAULT NULL,
  `visit_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`sv_id`),
  KEY `fk_service_visit1_idx` (`visit_id`),
  CONSTRAINT `fk_service_visit1` FOREIGN KEY (`visit_id`) REFERENCES `visit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service
-- ----------------------------
INSERT INTO `service` VALUES ('1', 'commoncold', 'พักรักษา3วัน', '1', '1');

-- ----------------------------
-- Table structure for visit
-- ----------------------------
DROP TABLE IF EXISTS `visit`;
CREATE TABLE `visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'เลขทีบริการ',
  `datetimesv` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6) COMMENT 'วันที',
  `visit_vts` int(3) NOT NULL COMMENT 'สัญญาณชีพ',
  `visit_bpup` int(3) NOT NULL COMMENT 'ความดัน',
  `visit_bpdown` int(3) NOT NULL,
  `visit_weigth` float(6,2) NOT NULL COMMENT 'น้ำหนัก',
  `visit_higth` int(3) DEFAULT NULL COMMENT 'ส่วนสูง',
  `visit_cc` varchar(200) NOT NULL COMMENT 'อาการสำคัญ',
  `emp_id` int(2) NOT NULL,
  `pt_id` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_visit_employee1_idx` (`emp_id`),
  KEY `fk_visit_pt1_idx` (`pt_id`),
  CONSTRAINT `fk_visit_employee1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_visit_pt1` FOREIGN KEY (`pt_id`) REFERENCES `patient` (`pt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of visit
-- ----------------------------
INSERT INTO `visit` VALUES ('1', '2018-02-22 02:12:38.000000', '98', '105', '80', '55.00', '155', 'ไข้ไอเจ็บคอ', '1', '1');
