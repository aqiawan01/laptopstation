/*
Navicat MySQL Data Transfer

Source Server         : Local Connection
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : meralaptopdb

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2015-08-22 20:19:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ml87_brand`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_brand`;
CREATE TABLE `ml87_brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `brand_img` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_brand
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_country`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_country`;
CREATE TABLE `ml87_country` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ml87_country
-- ----------------------------
INSERT INTO `ml87_country` VALUES ('1', 'Afghanistan');
INSERT INTO `ml87_country` VALUES ('2', 'Albania');
INSERT INTO `ml87_country` VALUES ('3', 'Algeria');
INSERT INTO `ml87_country` VALUES ('4', 'American Samoa');
INSERT INTO `ml87_country` VALUES ('5', 'Andorra');
INSERT INTO `ml87_country` VALUES ('6', 'Angola');
INSERT INTO `ml87_country` VALUES ('7', 'Anguilla');
INSERT INTO `ml87_country` VALUES ('8', 'Antarctica');
INSERT INTO `ml87_country` VALUES ('9', 'Antigua and Barbuda');
INSERT INTO `ml87_country` VALUES ('10', 'Argentina');
INSERT INTO `ml87_country` VALUES ('11', 'Armenia');
INSERT INTO `ml87_country` VALUES ('12', 'Aruba');
INSERT INTO `ml87_country` VALUES ('13', 'Australia');
INSERT INTO `ml87_country` VALUES ('14', 'Austria');
INSERT INTO `ml87_country` VALUES ('15', 'Azerbaijan');
INSERT INTO `ml87_country` VALUES ('16', 'Bahamas');
INSERT INTO `ml87_country` VALUES ('17', 'Bahrain');
INSERT INTO `ml87_country` VALUES ('18', 'Bangladesh');
INSERT INTO `ml87_country` VALUES ('19', 'Barbados');
INSERT INTO `ml87_country` VALUES ('20', 'Belarus');
INSERT INTO `ml87_country` VALUES ('21', 'Belgium');
INSERT INTO `ml87_country` VALUES ('22', 'Belize');
INSERT INTO `ml87_country` VALUES ('23', 'Benin');
INSERT INTO `ml87_country` VALUES ('24', 'Bermuda');
INSERT INTO `ml87_country` VALUES ('25', 'Bhutan');
INSERT INTO `ml87_country` VALUES ('26', 'Bolivia');
INSERT INTO `ml87_country` VALUES ('27', 'Bosnia and Herzegovina');
INSERT INTO `ml87_country` VALUES ('28', 'Botswana');
INSERT INTO `ml87_country` VALUES ('29', 'Bouvet Island');
INSERT INTO `ml87_country` VALUES ('30', 'Brazil');
INSERT INTO `ml87_country` VALUES ('31', 'British Indian Ocean Territory');
INSERT INTO `ml87_country` VALUES ('32', 'British Virgin Islands');
INSERT INTO `ml87_country` VALUES ('33', 'Brunei');
INSERT INTO `ml87_country` VALUES ('34', 'Bulgaria');
INSERT INTO `ml87_country` VALUES ('35', 'Burkina Faso');
INSERT INTO `ml87_country` VALUES ('36', 'Burundi');
INSERT INTO `ml87_country` VALUES ('37', 'Cambodia');
INSERT INTO `ml87_country` VALUES ('38', 'Cameroon');
INSERT INTO `ml87_country` VALUES ('39', 'Canada');
INSERT INTO `ml87_country` VALUES ('40', 'Cape Verde');
INSERT INTO `ml87_country` VALUES ('41', 'Cayman Islands');
INSERT INTO `ml87_country` VALUES ('42', 'Central African Republic');
INSERT INTO `ml87_country` VALUES ('43', 'Chad');
INSERT INTO `ml87_country` VALUES ('44', 'Chile');
INSERT INTO `ml87_country` VALUES ('45', 'China');
INSERT INTO `ml87_country` VALUES ('46', 'Christmas Island');
INSERT INTO `ml87_country` VALUES ('47', 'Cocos (Keeling) Islands');
INSERT INTO `ml87_country` VALUES ('48', 'Colombia');
INSERT INTO `ml87_country` VALUES ('49', 'Comoros');
INSERT INTO `ml87_country` VALUES ('50', 'Congo');
INSERT INTO `ml87_country` VALUES ('51', 'Congo - Democratic Republic of');
INSERT INTO `ml87_country` VALUES ('52', 'Cook Islands');
INSERT INTO `ml87_country` VALUES ('53', 'Costa Rica');
INSERT INTO `ml87_country` VALUES ('54', 'Cote d\'Ivoire');
INSERT INTO `ml87_country` VALUES ('55', 'Croatia');
INSERT INTO `ml87_country` VALUES ('56', 'Cuba');
INSERT INTO `ml87_country` VALUES ('57', 'Cyprus');
INSERT INTO `ml87_country` VALUES ('58', 'Czech Republic');
INSERT INTO `ml87_country` VALUES ('59', 'Denmark');
INSERT INTO `ml87_country` VALUES ('60', 'Djibouti');
INSERT INTO `ml87_country` VALUES ('61', 'Dominica');
INSERT INTO `ml87_country` VALUES ('62', 'Dominican Republic');
INSERT INTO `ml87_country` VALUES ('63', 'East Timor');
INSERT INTO `ml87_country` VALUES ('64', 'Ecuador');
INSERT INTO `ml87_country` VALUES ('65', 'Egypt');
INSERT INTO `ml87_country` VALUES ('66', 'El Salvador');
INSERT INTO `ml87_country` VALUES ('67', 'Equitorial Guinea');
INSERT INTO `ml87_country` VALUES ('68', 'Eritrea');
INSERT INTO `ml87_country` VALUES ('69', 'Estonia');
INSERT INTO `ml87_country` VALUES ('70', 'Ethiopia');
INSERT INTO `ml87_country` VALUES ('71', 'Falkland Islands (Islas Malvinas)');
INSERT INTO `ml87_country` VALUES ('72', 'Faroe Islands');
INSERT INTO `ml87_country` VALUES ('73', 'Fiji');
INSERT INTO `ml87_country` VALUES ('74', 'Finland');
INSERT INTO `ml87_country` VALUES ('75', 'France');
INSERT INTO `ml87_country` VALUES ('76', 'French Guyana');
INSERT INTO `ml87_country` VALUES ('77', 'French Polynesia');
INSERT INTO `ml87_country` VALUES ('78', 'French Southern and Antarctic Lands');
INSERT INTO `ml87_country` VALUES ('79', 'Gabon');
INSERT INTO `ml87_country` VALUES ('80', 'Gambia');
INSERT INTO `ml87_country` VALUES ('81', 'Gaza Strip');
INSERT INTO `ml87_country` VALUES ('82', 'Georgia');
INSERT INTO `ml87_country` VALUES ('83', 'Germany');
INSERT INTO `ml87_country` VALUES ('84', 'Ghana');
INSERT INTO `ml87_country` VALUES ('85', 'Gibraltar');
INSERT INTO `ml87_country` VALUES ('86', 'Greece');
INSERT INTO `ml87_country` VALUES ('87', 'Greenland');
INSERT INTO `ml87_country` VALUES ('88', 'Grenada');
INSERT INTO `ml87_country` VALUES ('89', 'Guadeloupe');
INSERT INTO `ml87_country` VALUES ('90', 'Guam');
INSERT INTO `ml87_country` VALUES ('91', 'Guatemala');
INSERT INTO `ml87_country` VALUES ('92', 'Guernsey');
INSERT INTO `ml87_country` VALUES ('93', 'Guinea');
INSERT INTO `ml87_country` VALUES ('94', 'Guinea-Bissau');
INSERT INTO `ml87_country` VALUES ('95', 'Guyana');
INSERT INTO `ml87_country` VALUES ('96', 'Haiti');
INSERT INTO `ml87_country` VALUES ('97', 'Heard Island and McDonald Islands');
INSERT INTO `ml87_country` VALUES ('98', 'Holy See (Vatican City)');
INSERT INTO `ml87_country` VALUES ('99', 'Honduras');
INSERT INTO `ml87_country` VALUES ('100', 'Hong Kong');
INSERT INTO `ml87_country` VALUES ('101', 'Hungary');
INSERT INTO `ml87_country` VALUES ('102', 'Iceland');
INSERT INTO `ml87_country` VALUES ('103', 'India');
INSERT INTO `ml87_country` VALUES ('104', 'Indonesia');
INSERT INTO `ml87_country` VALUES ('105', 'Iran');
INSERT INTO `ml87_country` VALUES ('106', 'Iraq');
INSERT INTO `ml87_country` VALUES ('107', 'Ireland');
INSERT INTO `ml87_country` VALUES ('108', 'Isle of Man');
INSERT INTO `ml87_country` VALUES ('109', 'Israel');
INSERT INTO `ml87_country` VALUES ('110', 'Italy');
INSERT INTO `ml87_country` VALUES ('111', 'Jamaica');
INSERT INTO `ml87_country` VALUES ('112', 'Japan');
INSERT INTO `ml87_country` VALUES ('113', 'Jersey');
INSERT INTO `ml87_country` VALUES ('114', 'Jordan');
INSERT INTO `ml87_country` VALUES ('115', 'Kazakhstan');
INSERT INTO `ml87_country` VALUES ('116', 'Kenya');
INSERT INTO `ml87_country` VALUES ('117', 'Kiribati');
INSERT INTO `ml87_country` VALUES ('118', 'Kuwait');
INSERT INTO `ml87_country` VALUES ('119', 'Kyrgyzstan');
INSERT INTO `ml87_country` VALUES ('120', 'Laos');
INSERT INTO `ml87_country` VALUES ('121', 'Latvia');
INSERT INTO `ml87_country` VALUES ('122', 'Lebanon');
INSERT INTO `ml87_country` VALUES ('123', 'Lesotho');
INSERT INTO `ml87_country` VALUES ('124', 'Liberia');
INSERT INTO `ml87_country` VALUES ('125', 'Libya');
INSERT INTO `ml87_country` VALUES ('126', 'Liechtenstein');
INSERT INTO `ml87_country` VALUES ('127', 'Lithuania');
INSERT INTO `ml87_country` VALUES ('128', 'Luxembourg');
INSERT INTO `ml87_country` VALUES ('129', 'Macau');
INSERT INTO `ml87_country` VALUES ('130', 'Macedonia - The Former Yugoslav Republic of');
INSERT INTO `ml87_country` VALUES ('131', 'Madagascar');
INSERT INTO `ml87_country` VALUES ('132', 'Malawi');
INSERT INTO `ml87_country` VALUES ('133', 'Malaysia');
INSERT INTO `ml87_country` VALUES ('134', 'Maldives');
INSERT INTO `ml87_country` VALUES ('135', 'Mali');
INSERT INTO `ml87_country` VALUES ('136', 'Malta');
INSERT INTO `ml87_country` VALUES ('137', 'Marshall Islands');
INSERT INTO `ml87_country` VALUES ('138', 'Martinique');
INSERT INTO `ml87_country` VALUES ('139', 'Mauritania');
INSERT INTO `ml87_country` VALUES ('140', 'Mauritius');
INSERT INTO `ml87_country` VALUES ('141', 'Mayotte');
INSERT INTO `ml87_country` VALUES ('142', 'Mexico');
INSERT INTO `ml87_country` VALUES ('143', 'Micronesia - Federated States of');
INSERT INTO `ml87_country` VALUES ('144', 'Moldova');
INSERT INTO `ml87_country` VALUES ('145', 'Monaco');
INSERT INTO `ml87_country` VALUES ('146', 'Mongolia');
INSERT INTO `ml87_country` VALUES ('147', 'Montenegro');
INSERT INTO `ml87_country` VALUES ('148', 'Montserrat');
INSERT INTO `ml87_country` VALUES ('149', 'Morocco');
INSERT INTO `ml87_country` VALUES ('150', 'Mozambique');
INSERT INTO `ml87_country` VALUES ('151', 'Myanmar');
INSERT INTO `ml87_country` VALUES ('152', 'Namibia');
INSERT INTO `ml87_country` VALUES ('153', 'Nauru');
INSERT INTO `ml87_country` VALUES ('154', 'Nepal');
INSERT INTO `ml87_country` VALUES ('155', 'Netherlands');
INSERT INTO `ml87_country` VALUES ('156', 'Netherlands Antilles');
INSERT INTO `ml87_country` VALUES ('157', 'New Caledonia');
INSERT INTO `ml87_country` VALUES ('158', 'New Zealand');
INSERT INTO `ml87_country` VALUES ('159', 'Nicaragua');
INSERT INTO `ml87_country` VALUES ('160', 'Niger');
INSERT INTO `ml87_country` VALUES ('161', 'Nigeria');
INSERT INTO `ml87_country` VALUES ('162', 'Niue');
INSERT INTO `ml87_country` VALUES ('163', 'Norfolk Island');
INSERT INTO `ml87_country` VALUES ('164', 'Northern Mariana Islands');
INSERT INTO `ml87_country` VALUES ('165', 'North Korea');
INSERT INTO `ml87_country` VALUES ('166', 'Norway');
INSERT INTO `ml87_country` VALUES ('167', 'Oman');
INSERT INTO `ml87_country` VALUES ('168', 'Pakistan');
INSERT INTO `ml87_country` VALUES ('169', 'Palau');
INSERT INTO `ml87_country` VALUES ('170', 'Panama');
INSERT INTO `ml87_country` VALUES ('171', 'Papua New Guinea');
INSERT INTO `ml87_country` VALUES ('172', 'Paraguay');
INSERT INTO `ml87_country` VALUES ('173', 'Peru');
INSERT INTO `ml87_country` VALUES ('174', 'Philippines');
INSERT INTO `ml87_country` VALUES ('175', 'Pitcairn Islands');
INSERT INTO `ml87_country` VALUES ('176', 'Poland');
INSERT INTO `ml87_country` VALUES ('177', 'Portugal');
INSERT INTO `ml87_country` VALUES ('178', 'Puerto Rico');
INSERT INTO `ml87_country` VALUES ('179', 'Qatar');
INSERT INTO `ml87_country` VALUES ('180', 'Reunion');
INSERT INTO `ml87_country` VALUES ('181', 'Romania');
INSERT INTO `ml87_country` VALUES ('182', 'Russia');
INSERT INTO `ml87_country` VALUES ('183', 'Rwanda');
INSERT INTO `ml87_country` VALUES ('184', 'Saint Kitts and Nevis');
INSERT INTO `ml87_country` VALUES ('185', 'Saint Lucia');
INSERT INTO `ml87_country` VALUES ('186', 'Saint Vincent and the Grenadines');
INSERT INTO `ml87_country` VALUES ('187', 'Samoa');
INSERT INTO `ml87_country` VALUES ('188', 'San Marino');
INSERT INTO `ml87_country` VALUES ('189', 'Sao Tome and Principe');
INSERT INTO `ml87_country` VALUES ('190', 'Saudi Arabia');
INSERT INTO `ml87_country` VALUES ('191', 'Senegal');
INSERT INTO `ml87_country` VALUES ('192', 'Serbia');
INSERT INTO `ml87_country` VALUES ('193', 'Serbia and Montenegro');
INSERT INTO `ml87_country` VALUES ('194', 'Seychelles');
INSERT INTO `ml87_country` VALUES ('195', 'Sierra Leone');
INSERT INTO `ml87_country` VALUES ('196', 'Singapore');
INSERT INTO `ml87_country` VALUES ('197', 'Slovakia');
INSERT INTO `ml87_country` VALUES ('198', 'Slovenia');
INSERT INTO `ml87_country` VALUES ('199', 'Solomon Islands');
INSERT INTO `ml87_country` VALUES ('200', 'Somalia');
INSERT INTO `ml87_country` VALUES ('201', 'South Africa');
INSERT INTO `ml87_country` VALUES ('202', 'South Georgia and the South Sandwich Islands');
INSERT INTO `ml87_country` VALUES ('203', 'South Korea');
INSERT INTO `ml87_country` VALUES ('204', 'Spain');
INSERT INTO `ml87_country` VALUES ('205', 'Sri Lanka');
INSERT INTO `ml87_country` VALUES ('206', 'St. Helena');
INSERT INTO `ml87_country` VALUES ('207', 'St. Pierre and Miquelon');
INSERT INTO `ml87_country` VALUES ('208', 'Sudan');
INSERT INTO `ml87_country` VALUES ('209', 'Suriname');
INSERT INTO `ml87_country` VALUES ('210', 'Svalbard');
INSERT INTO `ml87_country` VALUES ('211', 'Swaziland');
INSERT INTO `ml87_country` VALUES ('212', 'Sweden');
INSERT INTO `ml87_country` VALUES ('213', 'Switzerland');
INSERT INTO `ml87_country` VALUES ('214', 'Syria');
INSERT INTO `ml87_country` VALUES ('215', 'Taiwan');
INSERT INTO `ml87_country` VALUES ('216', 'Tajikistan');
INSERT INTO `ml87_country` VALUES ('217', 'Tanzania');
INSERT INTO `ml87_country` VALUES ('218', 'Thailand');
INSERT INTO `ml87_country` VALUES ('219', 'Timor-Leste');
INSERT INTO `ml87_country` VALUES ('220', 'Togo');
INSERT INTO `ml87_country` VALUES ('221', 'Tokelau');
INSERT INTO `ml87_country` VALUES ('222', 'Tonga');
INSERT INTO `ml87_country` VALUES ('223', 'Trinidad and Tobago');
INSERT INTO `ml87_country` VALUES ('224', 'Tunisia');
INSERT INTO `ml87_country` VALUES ('225', 'Turkey');
INSERT INTO `ml87_country` VALUES ('226', 'Turkmenistan');
INSERT INTO `ml87_country` VALUES ('227', 'Turks and Caicos Islands');
INSERT INTO `ml87_country` VALUES ('228', 'Tuvalu');
INSERT INTO `ml87_country` VALUES ('229', 'Uganda');
INSERT INTO `ml87_country` VALUES ('230', 'Ukraine');
INSERT INTO `ml87_country` VALUES ('231', 'United Arab Emirates');
INSERT INTO `ml87_country` VALUES ('232', 'United Kingdom');
INSERT INTO `ml87_country` VALUES ('233', 'United States');
INSERT INTO `ml87_country` VALUES ('234', 'United States Minor Outlying Islands');
INSERT INTO `ml87_country` VALUES ('235', 'United States Virgin Islands');
INSERT INTO `ml87_country` VALUES ('236', 'Uruguay');
INSERT INTO `ml87_country` VALUES ('237', 'Uzbekistan');
INSERT INTO `ml87_country` VALUES ('238', 'Vanuatu');
INSERT INTO `ml87_country` VALUES ('239', 'Venezuela');
INSERT INTO `ml87_country` VALUES ('240', 'Vietnam');
INSERT INTO `ml87_country` VALUES ('241', 'Wallis and Futuna');
INSERT INTO `ml87_country` VALUES ('242', 'West Bank');
INSERT INTO `ml87_country` VALUES ('243', 'Western Sahara');
INSERT INTO `ml87_country` VALUES ('244', 'Yemen');
INSERT INTO `ml87_country` VALUES ('245', 'Zambia');
INSERT INTO `ml87_country` VALUES ('246', 'Zimbabwe');

-- ----------------------------
-- Table structure for `ml87_media`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_media`;
CREATE TABLE `ml87_media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(255) DEFAULT NULL,
  `media_type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `media_img` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_media
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_member`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_member`;
CREATE TABLE `ml87_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_member
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_product`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_product`;
CREATE TABLE `ml87_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `product_condition` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `product_img` varchar(100) DEFAULT NULL,
  `description` text,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_product
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_product_gallery`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_product_gallery`;
CREATE TABLE `ml87_product_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `gallery_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_product_gallery
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_product_specification`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_product_specification`;
CREATE TABLE `ml87_product_specification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `processor_type` varchar(100) DEFAULT NULL,
  `processor_speed` varchar(100) DEFAULT NULL,
  `hard_drive_size` varchar(100) DEFAULT NULL,
  `installed_ram` varchar(100) DEFAULT NULL,
  `screen_size` varchar(100) DEFAULT NULL,
  `operating_system` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `lan` varchar(100) DEFAULT NULL,
  `bluetooth` varchar(100) DEFAULT NULL,
  `modem` varchar(100) DEFAULT NULL,
  `camera` varchar(100) DEFAULT NULL,
  `battery_life` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_product_specification
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_review`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_review`;
CREATE TABLE `ml87_review` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `review` text,
  `status` varchar(10) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_review
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_subscriber`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_subscriber`;
CREATE TABLE `ml87_subscriber` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_subscriber
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_webmaster`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_webmaster`;
CREATE TABLE `ml87_webmaster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `profile` text,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_webmaster
-- ----------------------------
