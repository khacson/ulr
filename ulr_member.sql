/*
SQLyog Trial v12.4.3 (64 bit)
MySQL - 10.1.36-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `ulr_member` (
	`id` int (11),
	`fullname` varchar (300),
	`zalo` char (150),
	`phone` char (150),
	`email` char (300),
	`skype` char (150),
	`facebook` char (300),
	`google` char (300),
	`avatar_url` char (300),
	`avatar` varchar (750),
	`account` char (150),
	`password` char (210),
	`salt` char (300),
	`point` int (11),
	`view` int (11),
	`datecreate` datetime ,
	`dateupdate` datetime ,
	`isactive` tinyint (1),
	`social_network_token` char (300),
	`social_network_type` char (150),
	`social_network_id` char (150),
	`last_login` datetime ,
	`first_name` varchar (150),
	`last_name` varchar (765),
	`gender` varchar (30),
	`locale` varchar (30),
	`picture` varchar (1500),
	`link` varchar (1500)
); 
insert into `ulr_member` (`id`, `fullname`, `zalo`, `phone`, `email`, `skype`, `facebook`, `google`, `avatar_url`, `avatar`, `account`, `password`, `salt`, `point`, `view`, `datecreate`, `dateupdate`, `isactive`, `social_network_token`, `social_network_type`, `social_network_id`, `last_login`, `first_name`, `last_name`, `gender`, `locale`, `picture`, `link`) values('1','Nguyễn Khắc Sơn','0978595949','0978595949','khacson2504@gmail.com','khacson2504','facebook','google',NULL,'2.jpg',NULL,'root','Nhân viên tư vấn','1','0','2018-10-22 23:57:44','2018-10-23 00:02:12','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
insert into `ulr_member` (`id`, `fullname`, `zalo`, `phone`, `email`, `skype`, `facebook`, `google`, `avatar_url`, `avatar`, `account`, `password`, `salt`, `point`, `view`, `datecreate`, `dateupdate`, `isactive`, `social_network_token`, `social_network_type`, `social_network_id`, `last_login`, `first_name`, `last_name`, `gender`, `locale`, `picture`, `link`) values('2','Nguyễn Khắc Sơn','0978595949','0978595949','khacson2504@gmail.com','khacson2504','facebook','google',NULL,'2.jpg',NULL,'root','Nhân viên tư vấn','1','0','2018-10-22 23:57:44','2018-10-23 00:02:12','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
insert into `ulr_member` (`id`, `fullname`, `zalo`, `phone`, `email`, `skype`, `facebook`, `google`, `avatar_url`, `avatar`, `account`, `password`, `salt`, `point`, `view`, `datecreate`, `dateupdate`, `isactive`, `social_network_token`, `social_network_type`, `social_network_id`, `last_login`, `first_name`, `last_name`, `gender`, `locale`, `picture`, `link`) values('3','Nguyễn Khắc Sơn','0978595949','0978595949','khacson2504@gmail.com','khacson2504','facebook','google',NULL,'2.jpg',NULL,'root','Nhân viên tư vấn','1','0','2018-10-22 23:57:44','2018-10-23 00:02:12','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
insert into `ulr_member` (`id`, `fullname`, `zalo`, `phone`, `email`, `skype`, `facebook`, `google`, `avatar_url`, `avatar`, `account`, `password`, `salt`, `point`, `view`, `datecreate`, `dateupdate`, `isactive`, `social_network_token`, `social_network_type`, `social_network_id`, `last_login`, `first_name`, `last_name`, `gender`, `locale`, `picture`, `link`) values('4','Nguyễn Khắc Sơn','0978595949','0978595949','khacson2504@gmail.com','khacson2504','facebook','google',NULL,'2.jpg',NULL,'root','Nhân viên tư vấn','1','0','2018-10-22 23:57:44','2018-10-23 00:02:12','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
insert into `ulr_member` (`id`, `fullname`, `zalo`, `phone`, `email`, `skype`, `facebook`, `google`, `avatar_url`, `avatar`, `account`, `password`, `salt`, `point`, `view`, `datecreate`, `dateupdate`, `isactive`, `social_network_token`, `social_network_type`, `social_network_id`, `last_login`, `first_name`, `last_name`, `gender`, `locale`, `picture`, `link`) values('5','Nguyễn Khắc Sơn','0978595949','0978595949','khacson2504@gmail.com','khacson2504','facebook','google',NULL,'2.jpg',NULL,'root','Nhân viên tư vấn','1','0','2018-10-22 23:57:44','2018-10-23 00:02:12','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
insert into `ulr_member` (`id`, `fullname`, `zalo`, `phone`, `email`, `skype`, `facebook`, `google`, `avatar_url`, `avatar`, `account`, `password`, `salt`, `point`, `view`, `datecreate`, `dateupdate`, `isactive`, `social_network_token`, `social_network_type`, `social_network_id`, `last_login`, `first_name`, `last_name`, `gender`, `locale`, `picture`, `link`) values('6','Hoa Lethikieu',NULL,NULL,'lethikieuhoa103@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-11-29 17:52:02',NULL,'0',NULL,'google','112971999217373812443','2018-11-29 17:52:02','Hoa','Lethikieu','female','vi','https://lh6.googleusercontent.com/-XKgh5N_YKb0/AAAAAAAAAAI/AAAAAAAAAAA/AGDgw-iy7iCXUFwcUB5onMlFA5P9QBpA6A/mo/photo.jpg','https://plus.google.com/112971999217373812443');
insert into `ulr_member` (`id`, `fullname`, `zalo`, `phone`, `email`, `skype`, `facebook`, `google`, `avatar_url`, `avatar`, `account`, `password`, `salt`, `point`, `view`, `datecreate`, `dateupdate`, `isactive`, `social_network_token`, `social_network_type`, `social_network_id`, `last_login`, `first_name`, `last_name`, `gender`, `locale`, `picture`, `link`) values('7','Le Thi Kieu Hoa',NULL,NULL,'lehoa_103@yahoo.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-11-29 17:58:14',NULL,'0',NULL,'facebook','2222059287804267','2018-11-29 17:58:14','Le','Hoa','','','https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2222059287804267&height=50&width=50&ext=1546102697&hash=AeTWtOvLqVQpft7g','');
