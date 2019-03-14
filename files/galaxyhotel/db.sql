/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.38-MariaDB : Database - anhthinh_hotel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`anhthinh_hotel` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `anhthinh_hotel`;

/*Table structure for table `galaxy_about` */

DROP TABLE IF EXISTS `galaxy_about`;

CREATE TABLE `galaxy_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(250) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_short` varchar(5000) DEFAULT NULL COMMENT 'Mô tả ngắn, ckediter',
  `description_long` text COMMENT 'Mô tả chi tiết ckediter',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='gio thieu';

/*Data for the table `galaxy_about` */

insert  into `galaxy_about`(`id`,`about_title`,`image`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_short`,`description_long`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Giới thiệu công ty','22.png','gioi-thieu-cong-ty','undefined','undefined','undefined','<p>Tọa lạc tạị vị tr&iacute; chiến lược ở th&agrave;nh phố Quy Nhơn, Galaxy Hotel cung cấp chỗ ở hiện đại với gi&aacute; cả phải chăng&nbsp;c&ugrave;ng dịch vụ&nbsp;truy cập WiFi miễn ph&iacute; trong to&agrave;n bộ khu&ocirc;n vi&ecirc;n, c&oacute; tầng hầm để xe miễn ph&iacute;.</p>\r\n\r\n<p>Kh&aacute;ch sạn kh&ocirc;ng h&uacute;t thuốc n&agrave;y chỉ c&aacute;ch b&atilde;i biển, Quảng trường trung t&acirc;m, khu ăn vặt&nbsp;5 ph&uacute;t đi bộ, tiết kiệm thời gian cho du kh&aacute;ch n&agrave;o muốn kh&aacute;m ph&aacute; th&agrave;nh phố biển xinh đẹp n&agrave;y.</p>\r\n\r\n<p>&nbsp;</p>\r\n','<p><b>Firefuma</b> l&agrave; một đội ngũ c&aacute;c chuy&ecirc;n gia CNTT với c&aacute;c kỹ sư gi&agrave;u kinh nghiệm cũng với sự năng động, đầy nhiệt huyết của c&aacute;c bạn trẻ. Ch&uacute;ng t&ocirc;i lu&ocirc;n khao kh&aacute;t mang ứng dụng CNTT v&agrave;o c&ocirc;ng ty, cửa h&agrave;ng của bạn để gi&uacute;p bạn loại bỏ bớt những cuốn số ghi ch&eacute;p cồng kềnh v&agrave; tiết kiệm chi ph&iacute; thời gian một c&aacute;ch hiệu quả nhất.</p>\r\n\r\n<h4 class=\"text-left\">&nbsp;&nbsp;&nbsp;Giới thiệu chung</h4>\r\n\r\n<p><b>Firefuma</b> được th&agrave;nh lập 2017 l&agrave; một c&ocirc;ng ty non trẻ, nhưng đội ngũ c&aacute;c kỹ sư gi&agrave;u kinh nghiệm từng l&agrave;m việc cho những c&ocirc;ng ty v&agrave; tập đo&agrave;n lớn. Lu&ocirc;n khao kh&aacute;t đ&oacute;ng g&oacute;p ph&aacute;t triển c&ocirc;ng ty trở th&agrave;nh c&ocirc;ng ty c&ocirc;ng nghệ h&agrave;ng đầu.</p>\r\n\r\n<h4 class=\"text-left\">&nbsp;&nbsp;&nbsp;Tầm nh&igrave;n sứ mệnh</h4>\r\n\r\n<p>X&acirc;y dựng C&ocirc;ng ty <b>Firefuma</b> h&ugrave;ng mạnh dựa tr&ecirc;n nguồn lực con người, nền tảng c&ocirc;ng nghệ, năng lực quản l&yacute; vượt trội, tinh thần l&agrave;m việc nghi&ecirc;m t&uacute;c, sức s&aacute;ng tạo v&agrave; cải tiến kh&ocirc;ng ngừng</p>\r\n\r\n<h4 class=\"text-left\">&nbsp;&nbsp;&nbsp;Phương ch&acirc;m hoạt động</h4>\r\n\r\n<p>Tr&iacute; tuệ, s&aacute;ng tạo l&agrave; nền m&oacute;ng ph&aacute;t triển c&ocirc;ng ty. Sự đo&agrave;n kết v&agrave; t&iacute;nh chuy&ecirc;n nghiệp l&agrave; phương ph&aacute;p l&agrave;m việc của C&ocirc;ng ty. Sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng v&agrave; hiệu quả kinh tế l&agrave; mục ti&ecirc;u c&ocirc;ng ty theo đuổi.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2018-10-06 09:45:25','root',NULL,NULL,0);

/*Table structure for table `galaxy_about_list` */

DROP TABLE IF EXISTS `galaxy_about_list`;

CREATE TABLE `galaxy_about_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_about_list` */

/*Table structure for table `galaxy_baner` */

DROP TABLE IF EXISTS `galaxy_baner`;

CREATE TABLE `galaxy_baner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `positionid` int(3) DEFAULT NULL,
  `customerid` int(11) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `datestart` date DEFAULT NULL,
  `dateend` date DEFAULT NULL,
  `note` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `width` char(3) DEFAULT NULL,
  `height` char(3) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `banner_files` varchar(250) DEFAULT NULL,
  `banner_type` tinyint(1) DEFAULT '1' COMMENT '1 img, 2 flash',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(50) DEFAULT NULL,
  `userupdate` char(50) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_baner` */

/*Table structure for table `galaxy_baners` */

DROP TABLE IF EXISTS `galaxy_baners`;

CREATE TABLE `galaxy_baners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(250) DEFAULT NULL,
  `description` text,
  `img` varchar(250) DEFAULT NULL,
  `thumb_img` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_baners` */

insert  into `galaxy_baners`(`id`,`slide_name`,`description`,`img`,`thumb_img`,`url`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Galaxy Hotel','','1.jpg',NULL,NULL,'2018-07-13 08:47:56','root','2018-08-02 23:58:37','root',1),
(2,'Galaxy Hotel','','banner.png',NULL,NULL,'2018-07-14 17:35:37','root','2018-10-04 20:57:57','root',0),
(3,'Banner 2','','banner3.jpg',NULL,NULL,'2018-10-04 20:58:09','root',NULL,NULL,0);

/*Table structure for table `galaxy_blog` */

DROP TABLE IF EXISTS `galaxy_blog`;

CREATE TABLE `galaxy_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_blog` */

insert  into `galaxy_blog`(`id`,`title`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_sort`,`description_long`,`typeid`,`image`,`thumb`,`views`,`ordering`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(10,'INK 360 - quán bar bạch tuộc nổi bậc nhất ở Phú Quốc ','ink-360--quan-bar-bach-tuoc-noi-bac-nhat-o-phu-quoc-','','','','Thiết kế của qu&aacute;n bar lấy cảm hứng từ bạch tuộc &ldquo;Kraken&rdquo; khổng lồ. Đ&acirc;y l&agrave; s&aacute;ng tạo của kiến tr&uacute;c sư Australia, Ashey Sutton, cha đẻ của nhiều qu&aacute;n bar &ldquo;độc nhất v&ocirc; nhị&rdquo; tại ch&acirc;u &Aacute;. C&aacute;c chi tiết&nbsp;trang tr&iacute; tại đ&acirc;y, từ thảm l&oacute;t s&agrave;n, tay nắm cửa đến b&agrave;n ghế, đều mang h&igrave;nh d&aacute;ng của những x&uacute;c tu nhỏ hay những &ldquo;ch&uacute; bạch tuộc mini&rdquo;.','',13,'tin-tuc-3.jpg','tin-tuc-3.jpg',NULL,NULL,1,'2018-07-15 08:56:14','root','2018-10-05 22:22:43','root',0),
(11,'Người giàu nhất thế giới chi hàng tỷ USD để ghé chơi vũ trụ ','nguoi-giau-nhat-the-gioi-chi-hang-ty-usd-de-ghe-choi-vu-tru-','','','','Kh&ocirc;ng chỉ Bezos, kế hoạch du lịch tới c&aacute;c v&igrave; sao c&ograve;n khiến một tỷ ph&uacute; kh&aacute;c cũng đam m&ecirc; kh&ocirc;ng k&eacute;m. Đ&oacute; ch&iacute;nh l&agrave; Elon Musk. Nhiều năm nay, c&ocirc;ng ty của Musk cũng đ&atilde; l&ecirc;n kế hoạch để đưa du kh&aacute;ch đến th&aacute;m hiểm sao Hỏa. C&aacute;c chuyến đi ngắn n&agrave;y cũng dự kiến khởi h&agrave;nh v&agrave;o đầu năm 2019.','',13,'tin-tuc-4.jpg','tin-tuc-4.jpg',NULL,NULL,1,'2018-07-15 08:58:17','root','2018-10-05 22:23:59','root',0),
(12,'5 địa điểm sống ảo ít người biết đến ở Sapporo ','5-dia-diem-song-ao-it-nguoi-biet-den-o-sapporo-','','','','M&ugrave;a xu&acirc;n Odori được bao phủ bởi sắc hoa anh đ&agrave;o. Sang hạ Odori lại nhuộm đầy m&agrave;u sắc của c&aacute;c lễ hội hoa như: hoa oải hương, hoa tulip, hoa tử đinh hương... Đ&ocirc;ng sang c&ocirc;ng vi&ecirc;n lại phủ trắng m&agrave;u tuyết, lấp l&aacute;nh những &aacute;nh đ&egrave;n đ&ecirc;m. Tất cả đ&atilde; l&agrave;m n&ecirc;n một Odori đầy nghệ thuật kh&ocirc;ng l&agrave;m thất vọng du kh&aacute;ch bốn phương','',13,'tin-tuc-2.jpeg','tin-tuc-2.jpeg',NULL,NULL,1,'2018-07-15 08:58:44','root','2018-10-05 22:21:51','root',0);

/*Table structure for table `galaxy_blog_commets` */

DROP TABLE IF EXISTS `galaxy_blog_commets`;

CREATE TABLE `galaxy_blog_commets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `blogid` int(11) DEFAULT NULL,
  `description` text,
  `datecreate` datetime DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_blog_commets` */

/*Table structure for table `galaxy_blog_type` */

DROP TABLE IF EXISTS `galaxy_blog_type`;

CREATE TABLE `galaxy_blog_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blogtype_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `ordering` int(11) DEFAULT '1',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='loai blog';

/*Data for the table `galaxy_blog_type` */

insert  into `galaxy_blog_type`(`id`,`blogtype_name`,`friendlyurl`,`img`,`ishome`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(12,'Tin tức công nghệ','tin-tuc-cong-nghe',NULL,1,1,'2017-03-11 09:36:28','root','2017-03-11 09:38:05','root',0),
(13,'Tin xã hội','tin-xa-hoi',NULL,1,1,'2017-03-12 15:26:17','root',NULL,NULL,0);

/*Table structure for table `galaxy_blogproduct` */

DROP TABLE IF EXISTS `galaxy_blogproduct`;

CREATE TABLE `galaxy_blogproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_blogproduct` */

/*Table structure for table `galaxy_catalog` */

DROP TABLE IF EXISTS `galaxy_catalog`;

CREATE TABLE `galaxy_catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catalog_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `default_img` varchar(250) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Catalog';

/*Data for the table `galaxy_catalog` */

insert  into `galaxy_catalog`(`id`,`catalog_name`,`friendlyurl`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`default_img`,`isdelete`) values 
(5,'iPhones','iphone',1,'2016-03-31 10:44:32','root',NULL,NULL,'ip6splus.png',0),
(6,'Samsungs','samsung',2,'2016-03-31 10:44:32','root',NULL,NULL,'slide2.png',0),
(7,'Smartphones','smartphone',3,'2016-03-31 10:44:32','root',NULL,NULL,'sell-phone-LG_G5.JPG',0),
(8,'Tablets','tablet',4,'2016-03-31 10:44:32','root',NULL,NULL,'ipad_mini2.png',0);

/*Table structure for table `galaxy_contact` */

DROP TABLE IF EXISTS `galaxy_contact`;

CREATE TABLE `galaxy_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` char(100) DEFAULT NULL,
  `company_name_2` char(100) DEFAULT NULL,
  `company_name_3` char(100) DEFAULT NULL,
  `phone` char(100) DEFAULT NULL,
  `phone_2` char(100) DEFAULT NULL,
  `phone_3` char(100) DEFAULT NULL,
  `hotline` char(70) DEFAULT NULL,
  `fax` char(100) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `email_2` char(100) DEFAULT NULL,
  `email_3` char(100) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `address_2` varchar(250) DEFAULT NULL,
  `address_3` varchar(250) DEFAULT NULL,
  `url_facebook` char(200) DEFAULT NULL,
  `url_google` char(200) DEFAULT NULL,
  `url_twitter` char(200) DEFAULT NULL,
  `url_youtube` char(200) DEFAULT NULL,
  `skype` char(70) DEFAULT NULL,
  `slogan` varchar(1000) DEFAULT NULL,
  `slogan2` varchar(5000) DEFAULT NULL,
  `google_address` varchar(500) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `searchkey` varchar(250) DEFAULT NULL,
  `phone_contact` char(50) DEFAULT NULL,
  `phone_help` char(50) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_contact` */

insert  into `galaxy_contact`(`id`,`company_name`,`company_name_2`,`company_name_3`,`phone`,`phone_2`,`phone_3`,`hotline`,`fax`,`email`,`email_2`,`email_3`,`address`,`address_2`,`address_3`,`url_facebook`,`url_google`,`url_twitter`,`url_youtube`,`skype`,`slogan`,`slogan2`,`google_address`,`meta_title`,`meta_keyword`,`mete_description`,`logo`,`searchkey`,`phone_contact`,`phone_help`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Công ty TNHH Firefuma','Minh Man Agricultural Mechanical CO.,LTD','有限责任公司胡志明市农业男人力学','0907 592 789','Phone: 0909 358 538','电话: 0962258466 WECHAT ID: QUANGY123','028 56789 888','','thinh.nguyentruong@gmail.com','Email: maygatminhman@gmail.com','电子邮件: maygatminhman@gmail.com','27 Nguyễn Lạc, TP. Quy Nhơn, Tỉnh Bình Định','Address: 645 - Highway 13 - KP.3 - Hiep Binh Phuoc Ward - Thu Duc District - City. Ho Chi Minh','地址：645 - 高速公路13 - KP.3 - 协平福沃德 - 守德区 - 城市。胡志明市','#','#','#','#','#','Trao giá trị gửi niềm tin ','Chúng tôi luôn đặt chất lượng sản phẩm lên hàng đầu, chất lượng sản phẩm chúng tôi cung cấp là danh dự cho toàn doanh nghiệp chúng tôi. Sản phẩm bán ra đúng tiêu chuẩn của hãng sản xuất, bảo hành theo tiêu chuẩn của nhà sản xuất. Bên cạnh đó chúng tôi không thể bỏ qua dịch vụ chăm sóc khách hàng. Chúng tôi luôn tận tình hướng dẫn kỹ thuật, hướng dẫn bảo trì máy móc thiết bị theo tiêu chuẩn kỹ thuật tốt nhất để đảm bảo tuổi thọ của sản phẩm cao nhất có thể. Hãy một lần sử dụng sản phẩm và dịch vụ của chúng tối để được sử dụng dịch vụ tốt nhất của chúng tôi','#','Phần mêm bán hàng, phần mềm quản lý bảo hành, phần mềm quản lý khách sạn','Phần mềm bán hàng, phần mềm bán cà phê, phần mềm quản lý nhà hàng, phần mềm quả lý bảo hành điện thoại điện máy,  phần mềm quản lý khách sạn','Phần mềm bán hàng, phần mềm bán cà phê, phần mềm quản lý nhà hàng, phần mềm quản lý khách sạn, phần mềm quả lý bảo hành điện thoại điện máy, phan mem quan ly ban hang, phan mem quan ly ban ca phe, phan mem quan ly nha hang, phan mem quan ly khach san','HitekNovaLogo@3x.png','Phần mềm bán hàng','028 56789 888','0911 316 123','2016-04-23 23:26:08','root','2018-08-22 14:52:45','root',0);

/*Table structure for table `galaxy_contacus` */

DROP TABLE IF EXISTS `galaxy_contacus`;

CREATE TABLE `galaxy_contacus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `fullname` char(50) DEFAULT NULL,
  `email` char(70) DEFAULT NULL,
  `phone` char(30) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `reply` varchar(1000) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_contacus` */

insert  into `galaxy_contacus`(`id`,`title`,`fullname`,`email`,`phone`,`description`,`reply`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(4,NULL,'Son  Nguyen','khacson2504@gmail.com','0978595949','sdfdsf sdf sdfsd',NULL,'2016-11-22 21:42:36',NULL,NULL,NULL,0),
(5,NULL,'Nguyễn Khắc Sơn','','0911316123','',NULL,NULL,NULL,NULL,NULL,0),
(6,NULL,'Sơn Nguyễn','khacson1610@gmail.com',NULL,'Hehe',NULL,'2018-10-16 10:01:47',NULL,NULL,NULL,0);

/*Table structure for table `galaxy_customer` */

DROP TABLE IF EXISTS `galaxy_customer`;

CREATE TABLE `galaxy_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `website` char(70) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `email` char(70) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `ordering` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='doi tac';

/*Data for the table `galaxy_customer` */

insert  into `galaxy_customer`(`id`,`customer_name`,`friendlyurl`,`img`,`website`,`phone`,`email`,`ishome`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Giày tokumi','giay-tokumi','tokumi2.png','http://tokumi.com.vn/','','',1,1,'2017-03-25 23:37:49','root','2018-06-29 00:10:30','root',0),
(2,'Thảo dược an an','thao-duoc-an-an','an-an1.png','http://thaoduocanan.com/','','',1,3,'2017-03-25 23:42:58','root','2018-06-28 23:58:42','root',0),
(3,'Sendmax','sendmax','sendmax.png','#','','',1,2,'2017-03-25 23:44:17','root','2018-06-28 23:57:49','root',0),
(4,'Big Talent Academy','big-talent-academy','bigtalentacademy.png','http://bigtalentacademy.edu.vn/','','',1,4,'2017-03-25 23:45:55','root','2018-06-29 00:01:53','root',0),
(5,'Thế giới vật liệu nhẹ','the-gioi-vat-lieu-nhe','the_gioi_vat_lieu_nhe.png','http://thegioivatlieunhe.com/','','',1,NULL,'2018-06-29 00:04:37','root',NULL,NULL,0),
(6,'Môi trường etm','moi-truong-etm','moi_truong_etm.png','http://moitruongetm.vn/','','',1,NULL,'2018-06-29 00:07:39','root',NULL,NULL,0);

/*Table structure for table `galaxy_feature` */

DROP TABLE IF EXISTS `galaxy_feature`;

CREATE TABLE `galaxy_feature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_feature` */

insert  into `galaxy_feature`(`id`,`title`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_sort`,`description_long`,`typeid`,`image`,`thumb`,`views`,`ordering`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(10,'Báo cao thống kê','bao-cao-thong-ke','','','','B&aacute;o c&aacute;o doanh thu, lợi nhuận. B&aacute;o c&aacute;o đặt ph&ograve;ng, nhận ph&ograve;ng, trả ph&ograve;ng&hellip; B&aacute;o c&aacute;o v&agrave; thống k&ecirc; h&oacute;a đơn, chứng từ. B&aacute;o c&aacute;o xuất &ndash; nhập &ndash; tồn. Thống k&ecirc; danh s&aacute;ch lưu tr&uacute;.','#',258,'bao_cao_thong_ke.png','bao_cao_thong_ke.png',NULL,3,1,'2018-05-08 21:28:15','root','2018-07-12 14:12:03','root',0),
(11,'Quản lý nhập kho, tồn kho','quan-ly-nhap-kho-ton-kho','','','','Kiểm so&aacute;t tồn kho chặt chẽ, giảm thất tho&aacute;t. Nhập kho v&agrave; cập nhật gi&aacute; tiện lợi, b&aacute;n h&agrave;ng được ngay.<br />\r\nBiết được h&agrave;ng b&aacute;n chạy, h&agrave;ng n&ecirc;n ngừng kinh doanh, c&ocirc;ng nợ với nh&agrave; cung cấp, ph&acirc;n phối','',258,'quan-ly-nhap-kho.png','quan-ly-nhap-kho.png',NULL,2,1,'2018-05-11 09:29:27','root','2018-07-12 14:11:18','root',0),
(12,'Quản lý đặt phòng','quan-ly-dat-phong','','','','Hệ thống đặt ph&ograve;ng linh hoạt, đặt ph&ograve;ng nhanh, dự kiến chi ph&iacute; cho kh&aacute;ch h&agrave;ng. Quản l&yacute; đặt ph&ograve;ng theo đo&agrave;n c&oacute; ch&iacute;nh s&aacute;ch gi&aacute; linh động','',258,'quan-ly-dat-phong.png','quan-ly-dat-phong.png',NULL,1,1,'2018-05-11 09:34:16','root','2018-07-12 14:10:39','root',0);

/*Table structure for table `galaxy_groups` */

DROP TABLE IF EXISTS `galaxy_groups`;

CREATE TABLE `galaxy_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(100) NOT NULL,
  `params` varchar(8000) DEFAULT NULL,
  `grouptype` tinyint(1) DEFAULT NULL COMMENT '-1 Root, 0 admin, 1 Guest, 2 Manager, 3 user',
  `parentid` int(11) DEFAULT NULL,
  `isadmin` tinyint(1) DEFAULT '0',
  `department` varchar(255) DEFAULT NULL,
  `datecreate` datetime NOT NULL,
  `usercreate` char(50) NOT NULL,
  `ipcreate` char(25) DEFAULT NULL,
  `ipupdate` char(25) DEFAULT NULL,
  `userupdate` char(50) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_groups` */

insert  into `galaxy_groups`(`id`,`groupname`,`params`,`grouptype`,`parentid`,`isadmin`,`department`,`datecreate`,`usercreate`,`ipcreate`,`ipupdate`,`userupdate`,`dateupdate`,`isdelete`) values 
(1,'Root','{\"20\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"71\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"73\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"51\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"72\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"60\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"61\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"37\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"27\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"47\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"63\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"57\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"58\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"24\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"52\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"62\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"69\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"50\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"39\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"55\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"68\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"3\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\",\"right\":\"\"},\"4\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"}}',0,1,0,'','2013-07-01 08:57:48','root',NULL,'::1','root','2018-07-14 23:44:38',0);

/*Table structure for table `galaxy_help` */

DROP TABLE IF EXISTS `galaxy_help`;

CREATE TABLE `galaxy_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='gio thieu';

/*Data for the table `galaxy_help` */

/*Table structure for table `galaxy_linkdemo` */

DROP TABLE IF EXISTS `galaxy_linkdemo`;

CREATE TABLE `galaxy_linkdemo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `image` varchar(2000) DEFAULT NULL COMMENT 'cho up nhiu hinh theu mau san',
  `thumb` varchar(250) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1',
  `isnew` tinyint(1) DEFAULT '1',
  `views` int(11) DEFAULT NULL,
  `url` char(100) DEFAULT NULL,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `description_sort` text,
  `ordering` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_linkdemo` */

insert  into `galaxy_linkdemo`(`id`,`title`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`image`,`thumb`,`isshow`,`isnew`,`views`,`url`,`description_long`,`typeid`,`description_sort`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Dùng thử quán cà phê','dung-thu-quan-ca-phe','','','',NULL,NULL,1,1,NULL,'#','',1,'1',NULL,'2018-05-11 09:50:32','root',NULL,NULL,0);

/*Table structure for table `galaxy_menus` */

DROP TABLE IF EXISTS `galaxy_menus`;

CREATE TABLE `galaxy_menus` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `route` char(25) NOT NULL,
  `classicon` char(50) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `params` char(100) NOT NULL DEFAULT 'view,add,edit,delete',
  `keylang` char(100) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '1',
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_menus` */

insert  into `galaxy_menus`(`id`,`name`,`name_en`,`route`,`classicon`,`parent`,`params`,`keylang`,`ordering`,`isdelete`) values 
(1,'Quản trị','Admin','#','',0,'','quan-tri',19,0),
(3,'Nhóm quyền','Add group','group','',1,'view,add,edit,delete,right','nhom-quyen',1,0),
(4,'Tài khoản','Add user','user','',1,'view,add,edit,delete','nguoi-su-dung',2,0),
(17,'Danh mục','Catalog','#','',0,'view,add,edit,delete',NULL,18,0),
(20,'Phòng','product','product','',45,'view,add,edit,delete',NULL,1,0),
(24,'Tin tức','blog','blog','',31,'view,add,edit,delete',NULL,1,0),
(27,'Thông tin công ty','Contact us','contactus','',36,'view,add,edit,delete',NULL,4,0),
(31,'Tin tức','news','#','',0,'view,add,edit,delete',NULL,13,0),
(36,'Liên hệ','Contac Us','#','',0,'view,add,edit,delete',NULL,9,0),
(37,'Liên hệ','Contac Us','contact','',36,'view,add,edit,delete',NULL,1,0),
(39,'Đối tác','Partner','partner','',17,'view,add,edit,delete',NULL,11,1),
(45,'Phòng khách sạn','Product','#','',0,'view,add,edit,delete',NULL,1,0),
(46,'Giới thiệu','About us','#','',0,'view,add,edit,delete',NULL,10,0),
(47,'Giới thiệu khách sạn','About us','aboutus','',46,'view,add,edit,delete',NULL,1,1),
(50,'Khách hàng','customer','customer','',17,'view,add,edit,delete',NULL,10,1),
(51,'Dịch vụ','service','service','',70,'view,add,edit,delete',NULL,1,0),
(52,'Loại tin tức','blog type','blogtype','',31,'view,add,edit,delete',NULL,2,0),
(54,'Banner','Banner','banner','',8,'view,add,edit,delete',NULL,2,0),
(55,'Bài viết','Posts','posts','',17,'view,add,edit,delete',NULL,13,0),
(56,'Web','Web','#','',0,'view,add,edit,delete',NULL,11,1),
(57,'Web','Web','web','',56,'view,add,edit,delete',NULL,1,1),
(58,'Loại web','Web type','webtype','',56,'view,add,edit,delete',NULL,2,1),
(59,'Thư viện','Web','#','',0,'view,add,edit,delete',NULL,3,0),
(60,'Thư viện','Picture','picture','',59,'view,add,edit,delete',NULL,1,0),
(61,'Loại thư viện','Picture type','picturetype','',59,'view,add,edit,delete',NULL,2,0),
(62,'Slide','slideproduct','slideproduct','',17,'view,add,edit,delete',NULL,1,1),
(63,'Giới thiệu','About','aboutslide','',46,'view,add,edit,delete',NULL,2,0),
(68,'Seo Web','seoweb','seoweb','',17,'view,add,edit,delete',NULL,100,0),
(69,'Banner','Banner','banner','',17,'view,add,edit,delete',NULL,2,0),
(70,'Dịch vụ','Service','#','',0,'view',NULL,2,0),
(71,'Loại phòng','producttype','producttype','',45,'view,add,edit,delete',NULL,2,0),
(72,'Loại dịch vụ','servicetype','servicetype','',70,'view,add,edit,delete',NULL,2,1),
(73,'Bài viết','productblog','productblog','',45,'view,add,edit,delete',NULL,3,0);

/*Table structure for table `galaxy_partner` */

DROP TABLE IF EXISTS `galaxy_partner`;

CREATE TABLE `galaxy_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `website` char(70) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `email` char(70) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `ordering` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='doi tac';

/*Data for the table `galaxy_partner` */

insert  into `galaxy_partner`(`id`,`partner_name`,`friendlyurl`,`img`,`website`,`phone`,`email`,`ishome`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'DELL','dell','dell_2016_logo.png','','','',1,NULL,'2016-11-13 15:34:00','root','2017-05-23 08:35:29','root',0),
(2,'HP','hp','HP.png','','','',1,NULL,'2016-11-13 15:34:09','root','2017-05-23 08:36:31','root',0),
(3,'Lenovo','lenovo','Lenovo.gif','','','',1,NULL,'2016-11-13 15:34:16','root','2017-05-23 08:36:49','root',0),
(4,'Kaspersky','kaspersky','Kaspersky1.png','','','',1,NULL,'2016-11-13 15:34:25','root','2017-05-23 08:37:53','root',0);

/*Table structure for table `galaxy_picture` */

DROP TABLE IF EXISTS `galaxy_picture`;

CREATE TABLE `galaxy_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `linkweb` char(100) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_picture` */

insert  into `galaxy_picture`(`id`,`title`,`linkweb`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_sort`,`description_long`,`typeid`,`image`,`thumb`,`views`,`ordering`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Hình 4','#','hinh-4','','','','#','#',1,'our-1.jpg','our-1.jpg',NULL,NULL,1,'2018-05-05 23:28:32','root','2018-07-15 09:44:53','root',0),
(2,'Hình 3','#','hinh-3','','','','#','#',1,'gallery-6-6.jpg','gallery-6-6.jpg',NULL,NULL,1,'2018-05-05 23:34:43','root','2018-07-15 09:44:23','root',0),
(3,'Hình 2','#','hinh-2','','','','#','#',1,'gallery-2-2.jpg','gallery-2-2.jpg',NULL,NULL,1,'2018-05-05 23:52:37','root','2018-07-15 09:43:46','root',0),
(4,'Hình 1','#','hinh-1','','','','','',2,'gallery-1-11.jpg','49.jpg',NULL,NULL,1,'2018-05-11 17:00:01','root','2018-08-02 23:48:54','root',0),
(5,'Hình 5','#','hinh-5','','','','','',1,'our-5.jpg','LOBBY-CAM-22.jpg',NULL,NULL,1,'2018-07-15 09:45:29','root','2018-08-02 23:52:40','root',0),
(6,'Hình 6','#','hinh-6','','','','','',1,'our-6.jpg','our-6.jpg',NULL,NULL,1,'2018-07-15 09:45:42','root',NULL,NULL,0),
(7,'Hình 7','#','hinh-7','','','','','',1,'our-3.jpg','our-3.jpg',NULL,NULL,1,'2018-07-15 09:45:58','root',NULL,NULL,0),
(8,'Hình 8','#','hinh-8','','','','','',1,'0','sanh_25.jpg',NULL,NULL,1,'2018-07-15 09:46:55','root','2018-08-02 23:52:03','root',0),
(9,'Hình 9','#','hinh-9','','','','','',2,'46.jpg','416.jpg',NULL,NULL,1,'2018-07-15 09:47:09','root','2018-08-02 23:50:27','root',0),
(10,'Hình 10','#','hinh-10','','','','','',2,'sanh_1.jpg','sanh_1.jpg',NULL,NULL,1,'2018-07-15 09:47:24','root','2018-08-02 23:49:17','root',0);

/*Table structure for table `galaxy_picturetype` */

DROP TABLE IF EXISTS `galaxy_picturetype`;

CREATE TABLE `galaxy_picturetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picturetype_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `ordering` int(11) DEFAULT '1',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='loai hình';

/*Data for the table `galaxy_picturetype` */

insert  into `galaxy_picturetype`(`id`,`picturetype_name`,`friendlyurl`,`img`,`ishome`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Hình ảnh','hinh-anh',NULL,1,1,'2018-05-05 10:23:07','root','2018-07-14 22:40:06','root',0),
(2,'Hình ảnh 2','hinh-anh-2',NULL,1,2,'2018-05-05 10:23:13','root','2018-07-15 09:23:17','root',0);

/*Table structure for table `galaxy_postison` */

DROP TABLE IF EXISTS `galaxy_postison`;

CREATE TABLE `galaxy_postison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postison_name` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_postison` */

insert  into `galaxy_postison`(`id`,`postison_name`) values 
(1,'Trang chủ - Giữa trang'),
(2,'Điện thoại - Đầu trang'),
(3,'Điện thoại - Sản phẩm - Đầu trang'),
(4,'Phụ kiện - Đầu trang');

/*Table structure for table `galaxy_posts` */

DROP TABLE IF EXISTS `galaxy_posts`;

CREATE TABLE `galaxy_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_posts` */

insert  into `galaxy_posts`(`id`,`title`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_sort`,`description_long`,`typeid`,`image`,`thumb`,`views`,`ordering`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Mr. Ben','mr-ben','','','',NULL,'C&ocirc; chủ rất nhiệt t&igrave;nh,m&igrave;nh đi về ra qu&aacute;n cafe uống,bỏ qu&ecirc;n 2 đ&ocirc;i giầy,c&ocirc; gd m&igrave;nh ko biết,n&ecirc;n đ&atilde; mang giầy ra qu&aacute;n cafe đưa lại cho m&igrave;nh,cảm ơn c&ocirc;',NULL,NULL,NULL,NULL,NULL,1,'2018-10-05 22:35:30','root',NULL,NULL,0),
(2,'Sơn Nguyễn','son-nguyen','','','',NULL,'Gi&aacute; ph&ograve;ng hợp l&yacute;, rộng r&atilde;i, nấu ăn thoải m&aacute;i, đặc biệt c&oacute; một h&ocirc;m đi chơi về mệt b&aacute;t đũa chưa rửa chỉ mong c&oacute; c&ocirc; Tấm hiện l&ecirc;n rửa hộ, ai ngờ về đến ph&ograve;ng đ&uacute;ng l&agrave; đ&atilde; được rửa thật',NULL,NULL,NULL,NULL,NULL,1,'2018-10-05 22:36:11','root','2018-10-05 22:51:00','root',0);

/*Table structure for table `galaxy_posts_type` */

DROP TABLE IF EXISTS `galaxy_posts_type`;

CREATE TABLE `galaxy_posts_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blogtype_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `ordering` int(11) DEFAULT '1',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='loai blog';

/*Data for the table `galaxy_posts_type` */

/*Table structure for table `galaxy_price` */

DROP TABLE IF EXISTS `galaxy_price`;

CREATE TABLE `galaxy_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_price` */

insert  into `galaxy_price`(`id`,`title`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_sort`,`description_long`,`typeid`,`image`,`thumb`,`price`,`ordering`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Nhỏ hơn 20 phòng','nho-hon-20-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','#',258,NULL,NULL,200000,1,1,'2018-05-08 21:50:10','root','2018-07-12 12:41:27','root',0),
(2,'Từ 21 tới 25 phòng','tu-21-toi-25-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,250000,2,1,'2018-07-12 12:02:59','root','2018-07-12 12:04:42','root',0),
(3,'Từ 26 tới 30 phòng','tu-26-toi-30-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,300000,3,1,'2018-07-12 12:05:10','root',NULL,NULL,0),
(4,'Từ 31 tới 35 phòng','tu-31-toi-35-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,350000,4,1,'2018-07-12 12:05:49','root',NULL,NULL,0),
(5,'Từ 36 tới 40 phòng','tu-36-toi-40-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,400000,5,1,'2018-07-12 12:06:21','root',NULL,NULL,0),
(6,'Phát triển theo yêu cầu','phat-trien-theo-yeu-cau','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,0,6,1,'2018-07-12 12:06:53','root',NULL,NULL,0);

/*Table structure for table `galaxy_price_design` */

DROP TABLE IF EXISTS `galaxy_price_design`;

CREATE TABLE `galaxy_price_design` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_price_design` */

insert  into `galaxy_price_design`(`id`,`title`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_sort`,`description_long`,`typeid`,`image`,`thumb`,`price`,`ordering`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Nhỏ hơn 20 phòng','nho-hon-20-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','#',258,NULL,NULL,200000,1,1,'2018-05-08 21:50:10','root','2018-07-12 12:41:27','root',0),
(2,'Từ 21 tới 25 phòng','tu-21-toi-25-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,250000,2,1,'2018-07-12 12:02:59','root','2018-07-12 12:04:42','root',0),
(3,'Từ 26 tới 30 phòng','tu-26-toi-30-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,300000,3,1,'2018-07-12 12:05:10','root',NULL,NULL,0),
(4,'Từ 31 tới 35 phòng','tu-31-toi-35-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,350000,4,1,'2018-07-12 12:05:49','root',NULL,NULL,0),
(5,'Từ 36 tới 40 phòng','tu-36-toi-40-phong','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,400000,5,1,'2018-07-12 12:06:21','root',NULL,NULL,0),
(6,'Phát triển theo yêu cầu','phat-trien-theo-yeu-cau','','','','<ul class=\"tbl-prc-list\">\r\n	<li>Quản l&yacute; đặt ph&ograve;ng</li>\r\n	<li>Quản l&yacute; kh&aacute;ch h&agrave;ng</li>\r\n	<li>Quản l&yacute; sản phẩm, h&agrave;ng h&oacute;a</li>\r\n	<li>Quản l&yacute; b&aacute;n h&agrave;ng</li>\r\n	<li>Quản l&yacute; tồn kho</li>\r\n	<li>Quản l&yacute; thu - chi</li>\r\n	<li>Hệ thống b&aacute;o c&aacute;o - thống k&ecirc;</li>\r\n</ul>\r\n','',258,NULL,NULL,0,6,1,'2018-07-12 12:06:53','root',NULL,NULL,0);

/*Table structure for table `galaxy_product` */

DROP TABLE IF EXISTS `galaxy_product`;

CREATE TABLE `galaxy_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `code` char(100) DEFAULT NULL,
  `price` double DEFAULT '0',
  `price_new` double DEFAULT '0',
  `price_type` char(100) DEFAULT NULL,
  `producttypeid` int(11) DEFAULT '0',
  `friendlyurl` char(200) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `image` varchar(2000) DEFAULT NULL COMMENT 'cho up nhiu hinh theu mau san',
  `thumb` varchar(250) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1',
  `isnew` tinyint(1) DEFAULT '1',
  `iskm` tinyint(1) DEFAULT '1',
  `isnb` tinyint(1) DEFAULT '1',
  `views` int(11) DEFAULT NULL,
  `url` char(100) DEFAULT NULL,
  `url_video` char(100) DEFAULT NULL,
  `url_register` char(100) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `face_title` varchar(250) DEFAULT NULL,
  `face_description` varchar(500) DEFAULT NULL,
  `face_url` char(200) DEFAULT NULL,
  `face_site_name` char(200) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_product` */

insert  into `galaxy_product`(`id`,`title`,`code`,`price`,`price_new`,`price_type`,`producttypeid`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`image`,`thumb`,`isshow`,`isnew`,`iskm`,`isnb`,`views`,`url`,`url_video`,`url_register`,`description_sort`,`description_long`,`face_title`,`face_description`,`face_url`,`face_site_name`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Galaxy 3',NULL,2000000,0,'',1,'galaxy-3','','','','P-103-CAM-1.jpg','P-103-CAM-2.jpg',1,1,1,1,NULL,'http://monger.vn/','','','C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam, ph&ograve;ng tắm lớn l&aacute;t đ&aacute; cẩm thạch c&ugrave;ng kh&ocirc;ng gian l&agrave;m việc rộng r&atilde;i.','',NULL,NULL,NULL,NULL,3,'2017-07-22 13:40:57','root','2018-08-02 23:40:58','root',0),
(2,'Galaxy 2',NULL,1500000,0,'',1,'galaxy-2','Phần mềm quản lý bảo hành','Phần mềm quản lý bảo hành, điện thoại, điện máy','Phần mềm quản lý bảo hành, điện thoại, điện máy','P-107-CAM-2.jpg','P-107-CAM-3.jpg',1,1,1,1,NULL,'#','',NULL,'C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam, ph&ograve;ng tắm lớn l&aacute;t đ&aacute; cẩm thạch c&ugrave;ng kh&ocirc;ng gian l&agrave;m việc rộng r&atilde;i.','Quản l&yacute; bảo h&agrave;nh điện thoại(đọc th&ocirc;ng tin model,serial, imei..., in barcode), quản l&yacute; b&aacute;n h&agrave;ng, linh kiện, tồn kho, thu chi',NULL,NULL,NULL,NULL,2,'2017-08-26 17:11:03','root','2018-08-02 23:40:30','root',0),
(256,'Galaxy 6',NULL,2800000,0,'',1,'galaxy-6','Phần mềm quản lý nhân sự','Phần mềm quản lý nhân sự, tiền lương','Phần mềm quản lý nhân sự, tiền lương','P-105-CAM-2.jpg','P-105-CAM-11.jpg',1,1,1,1,NULL,'#','',NULL,'C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam, ph&ograve;ng tắm lớn l&aacute;t đ&aacute; cẩm thạch c&ugrave;ng kh&ocirc;ng gian l&agrave;m việc rộng r&atilde;i.','Hệ thống chuy&ecirc;n dụng cho việc tự cấu h&igrave;nh c&ocirc;ng thức lương dựa theo bảng c&ocirc;ng, cổng th&ocirc;ng tin nh&acirc;n sự, gi&uacute;p cho việc đăng k&yacute; nghỉ online hay xem b&aacute;o c&aacute;o động',NULL,NULL,NULL,NULL,5,'2017-08-26 17:11:06','root','2018-08-02 23:43:33','root',0),
(257,'Galaxy 5',NULL,2500000,0,'',1,'galaxy-5','','','','P-106-CAM-1.jpg','P-105-CAM-1.jpg',1,1,1,1,NULL,'#','##',NULL,'C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam, ph&ograve;ng tắm lớn l&aacute;t đ&aacute; cẩm thạch c&ugrave;ng kh&ocirc;ng gian l&agrave;m việc rộng r&atilde;i.','',NULL,NULL,NULL,NULL,4,'2018-05-06 22:03:17','root','2018-08-02 23:42:44','root',0),
(258,'Galaxy 1',NULL,1000000,0,'',1,'galaxy-1','Phần mềm quản lý khách sạn','Phần mềm quản lý khách sạn, Phần mềm quản lý khách sạn online, Phần mềm quản lý khách sạn miển phí','Phần mềm quản lý khách sạn, Phần mềm quản lý khách sạn online, Phần mềm quản lý khách sạn miển phí, Phần mềm quản lý khách sạn tốt nhất','11747_1547800391_9.jpg;11747_1547800413_16.jpg;11747_1547800436_22.jpg','11747_1547800436_22.jpg',1,1,1,1,NULL,'http://hotel.firefuma.vn/','#','','C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam, ph&ograve;ng tắm lớn l&aacute;t đ&aacute; cẩm thạch c&ugrave;ng kh&ocirc;ng gian l&agrave;m việc rộng r&atilde;i.','#','','','','',1,'2018-06-22 12:51:50','root','2019-01-27 12:11:40','root',0),
(259,'Galaxy 4',NULL,2500000,0,'',1,'galaxy-4','','','','P-104-CAM-1.jpg','P-104-CAM-2.jpg',1,1,1,1,NULL,'http://thiennhientraotang.com/','#','#','C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam, ph&ograve;ng tắm lớn l&aacute;t đ&aacute; cẩm thạch c&ugrave;ng kh&ocirc;ng gian l&agrave;m việc rộng r&atilde;i.','',NULL,NULL,NULL,NULL,3,'2018-06-25 15:47:18','root','2018-08-02 23:41:49','root',0);

/*Table structure for table `galaxy_productblog` */

DROP TABLE IF EXISTS `galaxy_productblog`;

CREATE TABLE `galaxy_productblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(250) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_short` varchar(5000) DEFAULT NULL COMMENT 'Mô tả ngắn, ckediter',
  `description_long` text COMMENT 'Mô tả chi tiết ckediter',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='gio thieu';

/*Data for the table `galaxy_productblog` */

insert  into `galaxy_productblog`(`id`,`about_title`,`image`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_short`,`description_long`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(2,'Khách sạn chúng tôi','','khach-san-chung-toi','undefined','undefined','undefined','nằm ở vị tr&iacute; v&ocirc; c&ugrave;ng tiện lợi, chỉ c&aacute;ch biển... m, ngo&agrave;i ra c&ograve;n ở rất gần khu phố ăn vặt v&agrave; quảng trường lớn, gi&uacute;p bạn tiết kiệm thời gian di chuyển. Ch&uacute;ng t&ocirc;i cung cấp dịch vụ ph&ograve;ng ở sạch sẽ c&ugrave;ng giả cả phải chăng, th&iacute;ch hợp cho du kh&aacute;ch muốn d&agrave;nh nhiều thời gian kh&aacute;m ph&aacute; Quy Nhơn.','Là nơi du kh&aacute;ch c&oacute; thể tận hưởng dịch vụ mát-xa và chăm sóc to&agrave;n th&acirc;n, Le Spa du Metropole cung c&acirc;́p k&ecirc;́t hợp các liệu ph&aacute;p kiểu phương Đ&ocirc;ng v&agrave; phương T&acirc;y. Trung t&acirc;m Thể dục So Fit có đ&acirc;̀y đủ trang thi&ecirc;́t bị cũng như c&aacute;c lớp tập thể dục. Kh&aacute;ch sạn c&ograve;n có trung t&acirc;m dịch vụ doanh nh&acirc;n v&agrave; cửa h&agrave;ng qu&agrave; tặng.','2018-08-11 08:40:28','root',NULL,NULL,0);

/*Table structure for table `galaxy_producttype` */

DROP TABLE IF EXISTS `galaxy_producttype`;

CREATE TABLE `galaxy_producttype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `code` char(100) DEFAULT NULL,
  `price` double DEFAULT '0',
  `price_new` double DEFAULT '0',
  `price_type` char(100) DEFAULT NULL,
  `producttypeid` int(11) DEFAULT '0',
  `friendlyurl` char(200) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `image` varchar(2000) DEFAULT NULL COMMENT 'cho up nhiu hinh theu mau san',
  `thumb` varchar(250) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1',
  `isnew` tinyint(1) DEFAULT '1',
  `iskm` tinyint(1) DEFAULT '1',
  `isnb` tinyint(1) DEFAULT '1',
  `views` int(11) DEFAULT NULL,
  `url` char(100) DEFAULT NULL,
  `url_video` char(100) DEFAULT NULL,
  `url_register` char(100) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `face_title` varchar(250) DEFAULT NULL,
  `face_description` varchar(500) DEFAULT NULL,
  `face_url` char(200) DEFAULT NULL,
  `face_site_name` char(200) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_producttype` */

insert  into `galaxy_producttype`(`id`,`title`,`code`,`price`,`price_new`,`price_type`,`producttypeid`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`image`,`thumb`,`isshow`,`isnew`,`iskm`,`isnb`,`views`,`url`,`url_video`,`url_register`,`description_sort`,`description_long`,`face_title`,`face_description`,`face_url`,`face_site_name`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Phòng loại 1',NULL,0,0,NULL,0,'phong-loai-1','','','',NULL,'P-103-CAM-1.jpg',1,1,1,1,NULL,NULL,NULL,NULL,'C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam','','','','','',1,'2018-10-05 21:32:08','root','2018-10-05 21:48:45','root',0),
(2,'Phòng loại 2',NULL,0,0,NULL,0,'phong-loai-2','','','',NULL,'P-105-CAM-2.jpg',1,1,1,1,NULL,NULL,NULL,NULL,'C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam','','','','','',2,'2018-10-05 21:34:37','root','2018-10-05 21:48:52','root',0),
(3,'Phòng loại 3',NULL,0,0,NULL,0,'phong-loai-3','','','',NULL,'P-106-CAM-1.jpg',1,1,1,1,NULL,NULL,NULL,NULL,'C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam','','','','','',3,'2018-10-05 21:34:53','root','2018-10-05 21:48:58','root',0),
(4,'Phòng loại 4',NULL,0,0,NULL,0,'phong-loai-4','','','',NULL,'P-107-CAM-2.jpg',1,1,1,1,NULL,NULL,NULL,NULL,'C&aacute;c ph&ograve;ng nghỉ rộng r&atilde;i tại đ&acirc;y được trang bị k&eacute;t an to&agrave;n c&aacute; nh&acirc;n, tiện nghi pha tr&agrave;/c&agrave; ph&ecirc; v&agrave; truyền h&igrave;nh c&aacute;p m&agrave;n h&igrave;nh phẳng. Ngo&agrave;i ra c&ograve;n c&oacute; lối trang tr&iacute; nội thất kết hợp giữa phong c&aacute;ch thời Ph&aacute;p thu&ocirc;̣c v&agrave; truyền thống Việt Nam','','','','','',4,'2018-10-05 21:35:09','root','2018-10-05 21:49:03','root',0);

/*Table structure for table `galaxy_province` */

DROP TABLE IF EXISTS `galaxy_province`;

CREATE TABLE `galaxy_province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countryid` int(11) DEFAULT '1',
  `province_name` varchar(150) DEFAULT NULL,
  `friendlyurl` char(150) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `usercreate` char(50) NOT NULL,
  `datecreate` datetime NOT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(50) DEFAULT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_province` */

insert  into `galaxy_province`(`id`,`countryid`,`province_name`,`friendlyurl`,`icon`,`ordering`,`status`,`usercreate`,`datecreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,1,'TP. Hồ Chí Minh','tp-ho-chi-minh',NULL,1,1,'','0000-00-00 00:00:00',NULL,NULL,0),
(2,1,'TP. Hà Nội','tp-ha-noi',NULL,2,1,'','0000-00-00 00:00:00',NULL,NULL,0),
(3,1,'TP. Đà Nẵng','tp-da-nang',NULL,3,1,'admin','2013-01-03 16:36:18',NULL,NULL,0),
(4,1,'TP. Hải Phòng','tp-hai-phong',NULL,4,1,'admin','2013-01-03 16:39:30',NULL,NULL,0),
(5,1,'TP. Cần Thơ','tp-can-tho',NULL,5,1,'admin','2013-01-03 16:43:25',NULL,NULL,0),
(6,1,'Bắc Giang','bac-giang',NULL,62,1,'admin','2013-01-03 16:43:43',NULL,NULL,0),
(8,1,'Bắc Kạn','bac-kan',NULL,60,1,'admin','2013-01-03 16:44:18',NULL,NULL,0),
(9,1,'Lạng Sơn','lang-son',NULL,59,1,'admin','2013-01-03 16:44:32',NULL,NULL,0),
(10,1,'Cao Bằng','cao-bang',NULL,58,1,'admin','2013-01-03 16:44:54',NULL,NULL,0),
(11,1,'Hà Giang','ha-giang',NULL,57,1,'admin','2013-01-03 16:45:06',NULL,NULL,0),
(12,1,'Lào Cai','lao-cai',NULL,56,1,'admin','2013-01-03 16:45:17',NULL,NULL,0),
(13,1,'Lai Châu','lai-chau',NULL,55,1,'admin','2013-01-03 16:46:04',NULL,NULL,0),
(14,1,'Tuyên Quang','tuyen-quang',NULL,54,1,'admin','2013-01-03 16:46:17',NULL,NULL,0),
(15,1,'Yên Bái','yen-bai',NULL,53,1,'admin','2013-01-03 16:46:27',NULL,NULL,0),
(16,1,'Thái Nguyên','thai-nguyen',NULL,52,1,'admin','2013-01-03 16:46:37',NULL,NULL,0),
(17,1,'Phú Thọ','phu-tho',NULL,51,1,'admin','2013-01-03 16:46:48',NULL,NULL,0),
(18,1,'Sơn La','son-la',NULL,50,1,'admin','2013-01-03 16:46:58',NULL,NULL,0),
(19,1,'Vĩnh Phúc','vinh-phuc',NULL,49,1,'admin','2013-01-03 16:47:12',NULL,NULL,0),
(20,1,'Quảng Ninh','quang-ninh',NULL,48,1,'admin','2013-01-03 16:47:23',NULL,NULL,0),
(21,1,'Hải Dương','hai-duong',NULL,47,1,'admin','2013-01-03 16:47:32',NULL,NULL,0),
(22,1,'Hưng Yên','hung-yen',NULL,46,1,'admin','2013-01-03 16:47:45',NULL,NULL,0),
(23,1,'Hòa Bình','hoa-binh',NULL,45,1,'admin','2013-01-03 16:48:00',NULL,NULL,0),
(24,1,'Hà Nam','ha-nam',NULL,44,1,'admin','2013-01-03 16:48:09',NULL,NULL,0),
(25,1,'Thái Bình','thai-binh',NULL,43,1,'admin','2013-01-03 16:48:23',NULL,NULL,0),
(26,1,'Ninh Bình','ninh-binh',NULL,42,1,'admin','2013-01-03 16:49:07',NULL,NULL,0),
(27,1,'Nam Định','nam-dinh',NULL,41,1,'admin','2013-01-03 16:49:17',NULL,NULL,0),
(28,1,'Thanh Hóa','thanh-hoa',NULL,40,1,'admin','2013-01-03 16:49:28',NULL,NULL,0),
(29,1,'Nghệ An','nghe-an',NULL,39,1,'admin','2013-01-03 16:49:38',NULL,NULL,0),
(30,1,'Hà Tĩnh','ha-tinh',NULL,38,1,'admin','2013-01-03 16:49:50',NULL,NULL,0),
(31,1,'Quảng Bình','quang-binh',NULL,37,1,'admin','2013-01-03 16:50:02',NULL,NULL,0),
(32,1,'Quảng Trị','quang-tri',NULL,36,1,'admin','2013-01-03 16:50:27',NULL,NULL,0),
(33,1,'Thừa Thiên Huế','thua-thien-hue',NULL,35,1,'admin','2013-01-03 16:50:55',NULL,NULL,0),
(34,1,'Quảng Nam','quang-nam',NULL,34,1,'admin','2013-01-03 16:51:09',NULL,NULL,0),
(35,1,'Quảng Ngãi','quang-ngai',NULL,33,1,'admin','2013-01-03 16:51:24',NULL,NULL,0),
(36,1,'Kon Tum','kon-tum',NULL,32,1,'admin','2013-01-03 16:51:33',NULL,NULL,0),
(37,1,'Bình Định','binh-dinh',NULL,31,1,'admin','2013-01-03 16:51:41',NULL,NULL,0),
(38,1,'Gia Lai','gia-lai',NULL,30,1,'admin','2013-01-03 16:51:54',NULL,NULL,0),
(39,1,'Phú Yên','phu-yen',NULL,29,1,'admin','2013-01-03 16:52:04',NULL,NULL,0),
(40,1,'Đắk Lắk','dak-lak',NULL,28,1,'admin','2013-01-03 16:52:13',NULL,NULL,0),
(41,1,'Đắk Nông','dak-nong',NULL,27,1,'admin','2013-01-03 16:52:22',NULL,NULL,0),
(42,1,'Khánh Hòa','khanh-hoa',NULL,26,1,'admin','2013-01-03 16:52:32',NULL,NULL,0),
(43,1,'Ninh Thuận','ninh-thuan',NULL,25,1,'admin','2013-01-03 16:52:41',NULL,NULL,0),
(44,1,'Lâm Đồng','lam-dong',NULL,24,1,'admin','2013-01-03 16:52:49',NULL,NULL,0),
(45,1,'Bình Phước','binh-phuoc',NULL,23,1,'admin','2013-01-03 16:52:59',NULL,NULL,0),
(46,1,'Bình Thuận','binh-thuan',NULL,22,1,'admin','2013-01-03 16:53:14',NULL,NULL,0),
(47,1,'Đồng Nai','dong-nai',NULL,21,1,'admin','2013-01-03 16:53:25',NULL,NULL,0),
(48,1,'Tây Ninh','tay-ninh',NULL,20,1,'admin','2013-01-03 16:53:36',NULL,NULL,0),
(49,1,'Bình Dương','binh-duong',NULL,19,1,'admin','2013-01-03 16:53:47',NULL,NULL,0),
(50,1,'Bà Rịa Vũng Tàu','ba-ria-vung-tau',NULL,18,1,'admin','2013-01-03 16:53:59',NULL,NULL,0),
(51,1,'Long An','long-an',NULL,17,1,'admin','2013-01-03 16:54:52',NULL,NULL,0),
(52,1,'Đồng Tháp','dong-thap',NULL,16,1,'admin','2013-01-03 16:55:01','2016-07-24 21:34:50','nova',0),
(53,1,'Tiền Giang','tien-giang',NULL,15,1,'admin','2013-01-03 16:55:09',NULL,NULL,0),
(54,1,'An Giang','an-giang',NULL,14,1,'admin','2013-01-03 16:55:22',NULL,NULL,0),
(55,1,'Kiên Giang','kien-giang',NULL,13,1,'admin','2013-01-03 16:55:31',NULL,NULL,0),
(56,1,'Vĩnh Long','vinh-long',NULL,12,1,'admin','2013-01-03 16:55:40',NULL,NULL,0),
(57,1,'Bến Tre','ben-tre',NULL,11,1,'admin','2013-01-03 16:55:55',NULL,NULL,0),
(58,1,'Trà Vinh','tra-vinh',NULL,10,1,'admin','2013-01-03 16:56:09',NULL,NULL,0),
(59,1,'Bắc Ninh','bac-ninh',NULL,9,1,'admin','2013-01-03 16:56:21',NULL,NULL,0),
(60,1,'Hậu Giang','hau-giang',NULL,8,1,'admin','2013-01-03 16:56:29',NULL,NULL,0),
(61,1,'Sóc Trăng','soc-trang',NULL,7,1,'admin','2013-01-03 16:56:37',NULL,NULL,0),
(62,1,'Bạc Liêu','bac-lieu',NULL,6,1,'admin','2013-01-03 16:56:49',NULL,NULL,0),
(63,1,'Cà Mau','ca-mau',NULL,5,1,'admin','2013-01-03 16:56:58','2015-12-22 22:52:39','root',0);

/*Table structure for table `galaxy_seoweb` */

DROP TABLE IF EXISTS `galaxy_seoweb`;

CREATE TABLE `galaxy_seoweb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` char(200) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `meta_keyword` varchar(1000) DEFAULT NULL,
  `mete_description` varchar(1000) DEFAULT NULL,
  `face_title` varchar(250) DEFAULT NULL,
  `face_description` varchar(1000) DEFAULT NULL,
  `face_url` char(200) DEFAULT NULL,
  `face_site_name` char(200) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_seoweb` */

insert  into `galaxy_seoweb`(`id`,`meta_title`,`friendlyurl`,`typeid`,`meta_keyword`,`mete_description`,`face_title`,`face_description`,`face_url`,`face_site_name`,`image`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Trang chủ','thiet-ke-web',5,' Từ khóa 1','Mổ tả 1','Tiêu đề ','Mô tả','http://firefuma.vn/','firefuma.vn','thien-nhien-trao-tang.png',1,'2018-07-12 23:36:59','root','2018-07-20 15:21:19','root',0),
(2,'Giới thiệu',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,0),
(3,'Tin tức',NULL,6,'key','des',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,0),
(4,'Phòng','phong',3,'','','','','','','gioi_thieu.png',1,'2018-10-06 11:12:19','root',NULL,NULL,0);

/*Table structure for table `galaxy_seoweb_type` */

DROP TABLE IF EXISTS `galaxy_seoweb_type`;

CREATE TABLE `galaxy_seoweb_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seoweb_type_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `ordering` int(11) DEFAULT '1',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='trang';

/*Data for the table `galaxy_seoweb_type` */

insert  into `galaxy_seoweb_type`(`id`,`seoweb_type_name`,`friendlyurl`,`img`,`ishome`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Trang chủ','trang-chu',NULL,1,1,NULL,NULL,NULL,NULL,0),
(2,'Giới thiệu','gioi-thieu',NULL,1,1,NULL,NULL,NULL,NULL,0),
(3,'Phòng khách sạn','phong',NULL,1,1,NULL,NULL,NULL,NULL,0),
(4,'Dịch vụ','dich-vu',NULL,1,1,NULL,NULL,NULL,NULL,0),
(5,'Hình ảnh','hinh-anh',NULL,1,1,NULL,NULL,NULL,NULL,0),
(6,'Tin tức','tin-tuc',NULL,1,1,NULL,NULL,NULL,NULL,0),
(7,'Liên hệ','lien-he',NULL,1,1,NULL,NULL,NULL,NULL,0);

/*Table structure for table `galaxy_service` */

DROP TABLE IF EXISTS `galaxy_service`;

CREATE TABLE `galaxy_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `url` char(50) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_service` */

insert  into `galaxy_service`(`id`,`title`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_sort`,`description_long`,`image`,`thumb`,`url`,`views`,`ordering`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(6,'Free parking','free-parking','Affiliate','Affiliate','Affiliate Marketing ','#','<strong>&nbsp;Affiliate Marketing</strong> (tiếp thị li&ecirc;n kết) l&agrave; g&igrave;?<br />\r\n<br />\r\nAffiliate Marketing l&agrave; g&igrave;? Affiliate marketing hay c&ograve;n gọi l&agrave; Tiếp thị li&ecirc;n kết l&agrave; h&igrave;nh thức quảng b&aacute; sản phẩm hoặc dịch vụ của Nh&agrave; cung cấp l&agrave; c&aacute;c c&ocirc;ng ty c&oacute; sản phẩm, dịch vụ muốn th&ocirc;ng qua c&aacute;c trang mạng của c&aacute;c đối t&aacute;c quảng b&aacute; h&agrave;ng h&oacute;a, dịch vụ đến người d&ugrave;ng cuối c&ugrave;ng. C&aacute;c Đối t&aacute;c kiếm tiền online nhận được khoản hoa hồng khi người d&ugrave;ng gh&eacute; thăm trang mạng của Đối t&aacute;c quản l&yacute; v&agrave; thực hiện những h&agrave;nh động m&agrave; nh&agrave; cung cấp mong muốn từ người d&ugrave;ng cuối c&ugrave;ng như: Mua h&agrave;ng, đăng k&yacute; sử dụng dịch vụ, điền th&ocirc;ng tin,&hellip;<br />\r\n<br />\r\nPhươg thức t&iacute;nh ph&iacute; CPA trong <strong>affiliate </strong>marketing?<br />\r\n<br />\r\n<strong>Affiliate Marketing </strong>(Tiếp thị li&ecirc;n kết) l&agrave; một loại h&igrave;nh Marketing dựa tr&ecirc;n m&ocirc; h&igrave;nh t&iacute;nh ph&iacute; quảng c&aacute;o CPA (Cost per Action). CPA l&agrave; m&ocirc; h&igrave;nh t&iacute;nh ph&iacute; quảng c&aacute;o tối ưu nhất hiện nay khi dựa tr&ecirc;n h&agrave;nh vi của người d&ugrave;ng Nh&agrave; cung cấp chỉ phải trả ph&iacute; khi kh&aacute;ch h&agrave;ng thực hiện một h&agrave;nh động cụ thể như Mua h&agrave;ng, Đăng k&yacute; dịch vụ, Điền th&ocirc;ng tin &hellip; H&igrave;nh thức CPA ưu việt hơn c&aacute;c h&igrave;nh thức t&iacute;nh ph&iacute; quảng c&aacute;o truyền thống như t&iacute;nh ph&iacute; theo lượt click CPC (Cost per Click) hay theo lượt hiển thị CPM (Cost per Thousand Impression) như đăng banner quảng c&aacute;o b&aacute;o, tạp ch&iacute; v&igrave; sự giảm thiểu rủi ro cho đơn vị mua quảng c&aacute;o phải trả tiền cho nguồn truy cập website nhưng kh&ocirc;ng ph&aacute;t sinh doanh thu do lượng click ảo, truy cập ảo.','car.png','car.png','',NULL,NULL,1,'2018-05-03 08:42:14','root','2018-10-04 22:54:34','root',0),
(7,'Room service','room-service','','','','#','Đang cập nhật...','key.png','key.png','',NULL,NULL,1,'2018-05-03 08:42:34','root','2018-10-04 22:54:26','root',0),
(8,'free wifi','free-wifi','','','','#','','wifi.png','wifi.png','http://firefuma.vn/thiet-ke-web.html',NULL,NULL,1,'2018-05-03 08:43:01','root','2018-10-04 22:54:18','root',0),
(9,'Customer support','customer-support','','','','#','','user.png','user.png',NULL,NULL,NULL,1,'2018-10-04 22:41:49','root','2018-10-04 22:54:11','root',0);

/*Table structure for table `galaxy_servicetype` */

DROP TABLE IF EXISTS `galaxy_servicetype`;

CREATE TABLE `galaxy_servicetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `parentid` int(11) DEFAULT '0',
  `img` varchar(250) DEFAULT NULL,
  `background` char(6) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='loai san pham';

/*Data for the table `galaxy_servicetype` */

insert  into `galaxy_servicetype`(`id`,`type_name`,`friendlyurl`,`parentid`,`img`,`background`,`ishome`,`meta_title`,`meta_keyword`,`mete_description`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Nhà hàng','nha-hang',0,'about-icon-7.png',NULL,1,'','','',2,NULL,NULL,'2018-07-15 08:35:21','root',0),
(3,'Tổ chức sự kiện','to-chuc-su-kien',0,'about-icon-2.png',NULL,1,'','','',3,'2018-07-14 22:30:28','root','2018-07-15 08:35:45','root',0);

/*Table structure for table `galaxy_slide_about` */

DROP TABLE IF EXISTS `galaxy_slide_about`;

CREATE TABLE `galaxy_slide_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(250) DEFAULT NULL,
  `description` text,
  `img` varchar(250) DEFAULT NULL,
  `thumb_img` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `ordering` int(2) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_slide_about` */

insert  into `galaxy_slide_about`(`id`,`slide_name`,`description`,`img`,`thumb_img`,`url`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Galaxy Hotel','Toạ lạc tại một vị tr&iacute; chiến lược trong khu H&ocirc;̀ T&acirc;y tuyệt đẹp, Fraser Suites Hanoi cung cấp các căn hộ dịch vụ với những tiện nghi gồm hồ bơi ngo&agrave;i trời ki&ecirc;̉u resort v&agrave; kết nối thẳng tới trung t&acirc;m mua sắm Syrena.<br />\r\nFraser Suites Hanoi nằm trong b&aacute;n k&iacute;nh chỉ 15 ph&uacute;t l&aacute;i xe từ trung t&acirc;m th&agrave;nh phố trong khi s&acirc;n bay c&aacute;ch đ&oacute; 30 ph&uacute;t. Dịch vụ đưa đ&oacute;n miễn ph&iacute; đ&ecirc;́n c&aacute;c khu vực c&ograve;n lại của th&agrave;nh phố được cung cấp tại đ&acirc;y.<br />\r\nXung quanh Hồ T&acirc;y l&agrave; v&ocirc; số đài tưởng ni&ecirc;̣m gồm Cung đi&ecirc;̣n Thuý Hoa, Phủ T&acirc;y Hồ và Chùa Trấn Quốc; còn các l&agrave;ng hoa v&agrave; vườn đ&agrave;o cổ cũng là những nơi kh&ocirc;ng thể bỏ qua.','gioi_thieu.png',NULL,'#',3,'2018-05-06 21:17:17','root','2018-10-06 10:04:02','root',0);

/*Table structure for table `galaxy_slide_product` */

DROP TABLE IF EXISTS `galaxy_slide_product`;

CREATE TABLE `galaxy_slide_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(250) DEFAULT NULL,
  `description` text,
  `img` varchar(250) DEFAULT NULL,
  `thumb_img` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_slide_product` */

/*Table structure for table `galaxy_slide_top` */

DROP TABLE IF EXISTS `galaxy_slide_top`;

CREATE TABLE `galaxy_slide_top` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(250) DEFAULT NULL,
  `description` text,
  `img` varchar(250) DEFAULT NULL,
  `thumb_img` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_slide_top` */

insert  into `galaxy_slide_top`(`id`,`slide_name`,`description`,`img`,`thumb_img`,`url`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(3,'Laptop,PC','Laptop DELL, Laptop HP, Laptop ASUS, Laptop LENOVO','Help-Me-Choose-Laptop-Page-Banner.jpg',NULL,'http://www.lamanhduong.com/san-pham/laptop','2017-03-27 09:56:04','root','2017-04-02 08:43:51','root',1),
(4,'Server, máy chủ','M&aacute;y chủ dell, server dell, Server hp, m&aacute;y chủ hp, server lenovo, m&aacute;y chủ lenovo','Server_dell.jpg',NULL,'http://www.lamanhduong.com/san-pham/server','2017-03-27 09:59:51','root',NULL,NULL,0),
(5,'máy bộ','m&aacute;y t&iacute;nh bộ','PC.jpg',NULL,'http://www.lamanhduong.com/san-pham/pc','2017-03-27 10:02:41','root',NULL,NULL,0);

/*Table structure for table `galaxy_supplier` */

DROP TABLE IF EXISTS `galaxy_supplier`;

CREATE TABLE `galaxy_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `supplier_image` varchar(250) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='nha mang';

/*Data for the table `galaxy_supplier` */

insert  into `galaxy_supplier`(`id`,`supplier_name`,`friendlyurl`,`supplier_image`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Verizon','verizon','carrier_verizon.png','2016-03-31 10:44:32','root',NULL,NULL,0),
(2,'AT&T','att','carrier_att.png','2016-03-31 10:44:32','root',NULL,NULL,0),
(3,'T-Mobile','t-mobile','carrier_tmobile.png','2016-03-31 10:44:32','root',NULL,NULL,0),
(4,'Sprint','sprint','carrier_sprint.png','2016-03-31 10:44:32','root',NULL,NULL,0),
(5,'Unlocked','unlocked','carrier_unlocked.png','2016-03-31 10:44:32','root',NULL,NULL,0);

/*Table structure for table `galaxy_support` */

DROP TABLE IF EXISTS `galaxy_support`;

CREATE TABLE `galaxy_support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_name` char(200) DEFAULT NULL,
  `fullname` char(200) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='nha san xuat';

/*Data for the table `galaxy_support` */

insert  into `galaxy_support`(`id`,`title_name`,`fullname`,`phone`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(7,'Tư vấn bán hàng 1','Ms Lam','0650-6502465',1,'2017-03-11 15:18:29','root','2017-06-02 08:21:54','root',0),
(8,'Tư vấn bán hàng 2','Mr Dương','0909851420',2,'2017-03-11 15:19:00','root','2017-06-02 08:33:21','root',0);

/*Table structure for table `galaxy_users` */

DROP TABLE IF EXISTS `galaxy_users`;

CREATE TABLE `galaxy_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `groupid` int(10) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `password` char(100) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` char(50) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `country` char(50) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT '0',
  `activate` tinyint(1) DEFAULT '1',
  `approve_permission` tinyint(1) DEFAULT '0',
  `supervisor` tinyint(1) DEFAULT '0',
  `signature` varchar(250) DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `datecreate` datetime DEFAULT '0000-00-00 00:00:00',
  `dateupdate` datetime DEFAULT '0000-00-00 00:00:00',
  `userupdate` char(70) DEFAULT NULL,
  `ipcreate` char(25) DEFAULT NULL,
  `ipupdate` char(25) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  `account_type` varchar(10) DEFAULT 'local',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_users` */

insert  into `galaxy_users`(`id`,`groupid`,`username`,`password`,`fullname`,`address`,`mobile`,`email`,`department`,`image`,`country`,`gender`,`activate`,`approve_permission`,`supervisor`,`signature`,`usercreate`,`datecreate`,`dateupdate`,`userupdate`,`ipcreate`,`ipupdate`,`lastlogin`,`isdelete`,`account_type`) values 
(1,1,'root','ce88541c1e6280dfee8eb5cae1f6e56b202cb962ac59075b964b07152d234b70','Administrator','','909851420','duong.pham@giaiphapits.com',0,'','Vietnam',1,1,0,0,'Koala.jpg','nghianguyen','2012-12-05 11:24:56','2018-07-14 17:23:32','root',NULL,'::1','2015-10-05 15:31:00',0,'local');

/*Table structure for table `galaxy_web` */

DROP TABLE IF EXISTS `galaxy_web`;

CREATE TABLE `galaxy_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `linkweb` char(100) DEFAULT NULL,
  `friendlyurl` varchar(250) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `mete_description` varchar(500) DEFAULT NULL,
  `description_sort` text,
  `description_long` text,
  `typeid` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '1' COMMENT '1 hien thi, 0 khong hien thi',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `galaxy_web` */

insert  into `galaxy_web`(`id`,`title`,`linkweb`,`friendlyurl`,`meta_title`,`meta_keyword`,`mete_description`,`description_sort`,`description_long`,`typeid`,`image`,`thumb`,`views`,`ordering`,`isshow`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Dreamholidays.vn','http://dreamholidays.vn','dreamholidays-vn','','','','#','#',1,'Dreamholidays_vn.jpg','Dreamholidays_vn1.jpg',NULL,NULL,1,'2018-05-05 09:44:33','root','2018-05-05 23:43:58','root',0),
(2,'Regentbay.vn','http://regentbay.vn','regentbay-vn','','','','#','#',1,'regentbay_vn.jpg','regentbay_vn1.jpg',NULL,NULL,1,'2018-05-05 09:47:31','root','2018-05-05 23:41:45','root',0),
(3,'Swapphone.vn','http://swapphone.vn','swapphone-vn','','','','#','#',6,'swapphone.png','swapphone1.png',NULL,NULL,1,'2018-05-06 21:42:47','root','2018-05-06 21:53:20','root',0),
(4,'Opentourct.vn','http://opentourct.com/vn.html','opentourct-vn','','','','#','#',1,'tkweb1.png','tkweb1.png',NULL,NULL,1,'2018-05-11 16:32:27','root','2018-05-11 16:32:49','root',0),
(5,'Hometap.vn','http://hometap.vn/','hometap-vn','','','','#','#',2,'tkweb4.png','tkweb4.png',NULL,NULL,1,'2018-05-11 16:34:36','root',NULL,NULL,0),
(6,'gokcaphe.vn','http://gokcaphe.vn','gokcaphe-vn','','','','#','#',8,'caphe.png','caphe.png',NULL,NULL,1,'2018-05-11 16:38:29','root',NULL,NULL,0),
(7,'Gokcoffee.com','http://gokcoffee.com','gokcoffee-com','','','','#','#',8,'caphe2.png','caphe2.png',NULL,NULL,1,'2018-05-11 16:56:04','root',NULL,NULL,0),
(8,'Thiennhientraotang.com','http://thiennhientraotang.com/','thiennhientraotang-com','','','','#','E',6,'thien-nhien-trao-tang.png','thien-nhien-trao-tang.png',NULL,NULL,1,'2018-06-22 13:10:02','root',NULL,NULL,0);

/*Table structure for table `galaxy_webtype` */

DROP TABLE IF EXISTS `galaxy_webtype`;

CREATE TABLE `galaxy_webtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webtype_name` varchar(250) DEFAULT NULL,
  `friendlyurl` char(200) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `ishome` tinyint(1) DEFAULT '1',
  `ordering` int(11) DEFAULT '1',
  `datecreate` datetime DEFAULT NULL,
  `usercreate` char(70) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` char(70) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='loai blog';

/*Data for the table `galaxy_webtype` */

insert  into `galaxy_webtype`(`id`,`webtype_name`,`friendlyurl`,`img`,`ishome`,`ordering`,`datecreate`,`usercreate`,`dateupdate`,`userupdate`,`isdelete`) values 
(1,'Du lịch','du-lich',NULL,1,1,'2018-05-05 09:32:32','root','2018-05-05 09:52:45','root',0),
(2,'Bán hàng','ban-hang',NULL,1,2,'2018-05-05 09:32:42','root',NULL,NULL,0),
(3,'Tin tức','tin-tuc',NULL,1,3,'2018-05-05 09:32:48','root',NULL,NULL,0),
(4,'Xây dựng','xay-dung',NULL,1,4,'2018-05-05 09:32:59','root',NULL,NULL,0),
(5,'Bất động sản','bat-dong-san',NULL,1,5,'2018-05-05 09:35:02','root',NULL,NULL,0),
(6,'Thương mại điện tử','thuong-mai-dien-tu',NULL,1,6,'2018-05-05 09:35:14','root',NULL,NULL,0),
(7,'Giới thiệu công ty','gioi-thieu-cong-ty',NULL,1,7,'2018-05-05 09:35:21','root',NULL,NULL,0),
(8,'Cà phê','ca-phe',NULL,1,8,'2018-05-11 16:36:20','root',NULL,NULL,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
