DROP TABLE tb_accountholdermaster;

CREATE TABLE `tb_accountholdermaster` (
  `ach_Id` int(11) NOT NULL AUTO_INCREMENT,
  `ach_account_No` int(12) NOT NULL,
  `ach_account_Name` varchar(40) NOT NULL,
  `ach_Bearer_Order` int(1) NOT NULL,
  `ach_Transaction_Code` int(15) NOT NULL,
  `ach_At_Par` int(1) NOT NULL,
  `ach_Joint_Name1` varchar(40) NOT NULL,
  `ach_Joint_Name2` varchar(40) NOT NULL,
  `ach_Authorized_Signatory1` varchar(25) NOT NULL,
  `ach_Authorized_Signatory2` varchar(25) NOT NULL,
  `ach_Authorized_Signatory3` varchar(25) NOT NULL,
  `ach_Address1` varchar(200) NOT NULL,
  `ach_Address2` varchar(200) NOT NULL,
  `ach_Suburb` int(10) NOT NULL,
  `ach_City` int(10) NOT NULL,
  `ach_State` int(6) NOT NULL,
  `ach_Country` int(3) NOT NULL,
  `ach_Pincode` int(12) NOT NULL,
  `ach_Telephone_Residence` int(12) NOT NULL,
  `ach_Telephone_Office` int(12) NOT NULL,
  `ach_Mobile_No` int(12) NOT NULL,
  `ach_Branch` int(11) NOT NULL,
  `ach_emailId` varchar(30) NOT NULL,
  PRIMARY KEY (`ach_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tb_accountholdermaster VALUES("1","1001223322","RAKESH SHAH","0","1","0","RAKESH LUCKY","","SIGN 1","","","VIKRILI","VIKRILI","3","1","1","105","400030","2147483647","2147483647","2147483647","2","ach@gmail.com");
INSERT INTO tb_accountholdermaster VALUES("2","1001223311","LIJESH SHARMA","0","1","0","RAKESH LUCKY","","SIGN 1","","","VIKRILI","VIKRILI","3","1","1","105","400030","2147483647","2147483647","2147483647","5","lig@gmail.com");
INSERT INTO tb_accountholdermaster VALUES("5","1001223344","RAKESH SHAHP","0","1","0","RAKESH LUCKY","","SIGN 1","","","VIKRILI","VIKRILI","3","1","1","105","400030","2147483647","2147483647","2147483647","0","");
INSERT INTO tb_accountholdermaster VALUES("6","1001223341","HSDF","0","1","0","","","SIGN 1","","","VIKRILI","VIKRILI","3","1","1","105","400030","2147483647","2147483647","2147483647","0","ach@gmail.com");



DROP TABLE tb_bankdetails;

CREATE TABLE `tb_bankdetails` (
  `bank_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(100) NOT NULL,
  `bank_code` int(3) unsigned zerofill NOT NULL,
  `bank_address1` text NOT NULL,
  `bank_address2` varchar(36) NOT NULL,
  `bank_address3` varchar(36) NOT NULL,
  `bank_country_id` int(3) NOT NULL,
  `bank_state_id` int(3) NOT NULL,
  `bank_city_id` int(3) NOT NULL,
  `bank_suburb_id` int(3) NOT NULL,
  `bank_pin` varchar(15) NOT NULL,
  `bank_contact_no1` varchar(15) NOT NULL,
  `bank_contact_no2` varchar(15) NOT NULL,
  `bank_contact_per1` varchar(40) NOT NULL,
  `bank_contact_per2` varchar(40) NOT NULL,
  `bank_contact_per_LL1` int(12) NOT NULL,
  `bank_contact_per_LL2` int(12) NOT NULL,
  `bank_emailid2` varchar(30) NOT NULL,
  `bank_emailid` varchar(40) NOT NULL,
  `bank_website` varchar(40) NOT NULL,
  `bank_printers` text NOT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tb_bankdetails VALUES("0001","AJANTA URBAN CO-OPERATIVE BANK LTD.","532","IRVIN SQUARE, CAMP ROAD","","AMRAVATI","1","2","1","1","444803","","","","","0","0","","","","a:1:{i:0;a:3:{i:0;s:36:\"HP LaserJet Pro M402-M403 n-dn PCL 6\";i:1;s:6:\"Tray 1\";i:2;s:6:\"Tray 2\";}}");



DROP TABLE tb_branchdetails;

CREATE TABLE `tb_branchdetails` (
  `branch_id` int(200) NOT NULL AUTO_INCREMENT,
  `branch_code` varchar(10) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_micr` varchar(20) NOT NULL,
  `branch_atparmicrcode` varchar(20) NOT NULL,
  `branch_address1` varchar(85) NOT NULL,
  `branch_address2` varchar(65) NOT NULL,
  `branch_address3` varchar(85) NOT NULL,
  `branch_country_id` int(3) NOT NULL DEFAULT '0',
  `branch_state_id` int(11) NOT NULL,
  `branch_city_id` int(11) NOT NULL,
  `branch_suburb_id` int(4) NOT NULL,
  `branch_pin` int(15) NOT NULL,
  `branch_telephone1` varchar(12) NOT NULL,
  `branch_telephone2` varchar(12) NOT NULL,
  `branch_contactperson1` varchar(50) NOT NULL,
  `branch_contactperson2` varchar(50) NOT NULL,
  `branch_contactpersonmobile1` varchar(50) NOT NULL,
  `branch_contactpersonmobile2` varchar(50) NOT NULL,
  `branch_email1` varchar(30) NOT NULL,
  `branch_email2` varchar(30) NOT NULL,
  `branch_holiday` varchar(20) DEFAULT NULL,
  `branch_neftifsccode` varchar(20) NOT NULL,
  `branch_printers` text,
  `branch_working_hours` float DEFAULT NULL,
  `branch_clearingthrough` tinyint(1) NOT NULL DEFAULT '0',
  `branch_clearingcenter` tinyint(1) NOT NULL DEFAULT '0',
  `clr_bank_code` varchar(15) NOT NULL,
  `clr_bank_city` int(5) NOT NULL,
  `branch_City_Code` int(3) unsigned zerofill NOT NULL,
  `branch_Services` varchar(100) NOT NULL,
  `branch_reg_busi_hrs` varchar(100) NOT NULL,
  `branch_half_busi_hrs` varchar(100) NOT NULL,
  `branch_sunday_working` varchar(100) NOT NULL,
  `branch_tollfree_no` varchar(20) NOT NULL,
  `branch_sub_code` varchar(10) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tb_branchdetails VALUES("1","101","JADHAVMANDI BRANCH","431532101","","ZAMBAD HEIGHTS","JADHAVMANDI","","1","2","1","1","431001","02406600713","02406600717","","","","","ajanth_bank@rediffmail.com","","","YESB0AUCB01","","","0","0","","0","431","ATM,LOCKER","10:00 AM TO 04:00 PM (MON TO FRI)","10:30 AM TO 01:00 PM (SAT)","","","");
INSERT INTO tb_branchdetails VALUES("2","101","OSMANPURA BRANCH","444891101","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","1","2","1","1","431001","02406600748","02406600745","","","","","ajanth_bank@rediffmail.com","","","YESB0AUCB01","","","0","0","","0","431","ATM,LOCKER","10:00 AM TO 04:00 PM (MON TO FRI)","10:30 AMTO 01:00 PM (SAT)","","","");



DROP TABLE tb_citymaster;

CREATE TABLE `tb_citymaster` (
  `city_id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `city_code` varchar(7) NOT NULL,
  `city_place` varchar(30) NOT NULL,
  `city_name_al` varchar(4) NOT NULL,
  `country_id` int(200) NOT NULL,
  `state_id` int(200) NOT NULL,
  `is_delete` int(2) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tb_citymaster VALUES("001","AUR001","AURANGABAD","AMR","1","2","0");



DROP TABLE tb_countrymaster;

CREATE TABLE `tb_countrymaster` (
  `country_id` int(250) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `country_isdelete` int(2) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO tb_countrymaster VALUES("1","INDIA","IND","0");



DROP TABLE tb_cps_adminpasswords;

CREATE TABLE `tb_cps_adminpasswords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO tb_cps_adminpasswords VALUES("1","0","0","2012-09-28");
INSERT INTO tb_cps_adminpasswords VALUES("2","0","192023","2012-09-28");
INSERT INTO tb_cps_adminpasswords VALUES("3","0","466","2013-04-10");
INSERT INTO tb_cps_adminpasswords VALUES("4","0","1","2013-04-10");
INSERT INTO tb_cps_adminpasswords VALUES("5","0","0","2013-04-10");
INSERT INTO tb_cps_adminpasswords VALUES("6","0","16","2013-04-10");
INSERT INTO tb_cps_adminpasswords VALUES("7","0","192023","2013-09-25");
INSERT INTO tb_cps_adminpasswords VALUES("8","0","0","2013-09-25");
INSERT INTO tb_cps_adminpasswords VALUES("9","0","192023","2014-01-02");
INSERT INTO tb_cps_adminpasswords VALUES("10","0","21232","2014-01-02");
INSERT INTO tb_cps_adminpasswords VALUES("11","0","192023","2014-01-03");
INSERT INTO tb_cps_adminpasswords VALUES("12","0","0","2014-01-03");
INSERT INTO tb_cps_adminpasswords VALUES("13","0","0","2014-01-08");
INSERT INTO tb_cps_adminpasswords VALUES("14","0","7","2014-01-08");
INSERT INTO tb_cps_adminpasswords VALUES("15","0","9","2014-01-28");
INSERT INTO tb_cps_adminpasswords VALUES("16","0","0","2014-01-28");
INSERT INTO tb_cps_adminpasswords VALUES("17","0","3407936","2014-01-28");
INSERT INTO tb_cps_adminpasswords VALUES("18","0","192023","2014-02-03");
INSERT INTO tb_cps_adminpasswords VALUES("19","0","14","2014-02-03");
INSERT INTO tb_cps_adminpasswords VALUES("20","0","192023","2014-02-05");
INSERT INTO tb_cps_adminpasswords VALUES("21","0","0","2014-02-05");
INSERT INTO tb_cps_adminpasswords VALUES("22","0","1","2014-02-15");
INSERT INTO tb_cps_adminpasswords VALUES("23","0","8","2014-02-15");
INSERT INTO tb_cps_adminpasswords VALUES("24","0","192023","2015-02-14");
INSERT INTO tb_cps_adminpasswords VALUES("25","0","0","2015-02-14");
INSERT INTO tb_cps_adminpasswords VALUES("26","2079","192023","2015-06-02");
INSERT INTO tb_cps_adminpasswords VALUES("27","0","1","2016-01-13");
INSERT INTO tb_cps_adminpasswords VALUES("28","0","25","2016-01-18");
INSERT INTO tb_cps_adminpasswords VALUES("29","0","192023","2016-01-18");
INSERT INTO tb_cps_adminpasswords VALUES("30","0","0","2016-01-18");
INSERT INTO tb_cps_adminpasswords VALUES("31","0","202","2016-01-19");
INSERT INTO tb_cps_adminpasswords VALUES("32","0","250","2016-01-19");
INSERT INTO tb_cps_adminpasswords VALUES("33","0","192023","2016-01-19");
INSERT INTO tb_cps_adminpasswords VALUES("34","0","0","2016-01-19");
INSERT INTO tb_cps_adminpasswords VALUES("35","0","1","2016-01-19");
INSERT INTO tb_cps_adminpasswords VALUES("36","0","7113","2016-01-29");
INSERT INTO tb_cps_adminpasswords VALUES("37","0","192023","2023-03-13");
INSERT INTO tb_cps_adminpasswords VALUES("38","0","2147483647","2023-03-13");



DROP TABLE tb_cps_chequeseries;

CREATE TABLE `tb_cps_chequeseries` (
  `series_id` int(11) NOT NULL AUTO_INCREMENT,
  `series_transationcode` int(2) NOT NULL,
  `series_branchcode` int(3) NOT NULL,
  `serise_branchcode_branch` int(11) NOT NULL,
  `series_from` int(6) unsigned zerofill NOT NULL,
  `series_to` int(6) unsigned zerofill NOT NULL,
  `series_lastno` int(6) unsigned zerofill NOT NULL,
  `serise_Bank` int(3) NOT NULL,
  `branch_sub_code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`series_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO tb_cps_chequeseries VALUES("1","10","1","101","529361","999999","529484","1","");
INSERT INTO tb_cps_chequeseries VALUES("3","11","1","101","556881","999999","747491","1","");
INSERT INTO tb_cps_chequeseries VALUES("4","12","1","101","503851","999999","513280","1","");
INSERT INTO tb_cps_chequeseries VALUES("5","13","1","101","508791","999999","534140","1","");
INSERT INTO tb_cps_chequeseries VALUES("6","10","2","102","517586","999999","517589","1","");
INSERT INTO tb_cps_chequeseries VALUES("7","11","2","102","529241","999999","591115","1","");
INSERT INTO tb_cps_chequeseries VALUES("8","12","2","102","503401","999999","519598","1","");
INSERT INTO tb_cps_chequeseries VALUES("9","13","2","102","504291","999999","513020","1","");



DROP TABLE tb_cps_grouppermissions;

CREATE TABLE `tb_cps_grouppermissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `page_accessible` varchar(150) NOT NULL,
  `page_read` varchar(2) NOT NULL,
  `page_write` varchar(2) NOT NULL,
  `page_edit` varchar(2) NOT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;




DROP TABLE tb_cps_groups;

CREATE TABLE `tb_cps_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  `group_createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO tb_cps_groups VALUES("30","ADMINISTRATOR","2013-02-10 23:58:24");



DROP TABLE tb_cps_halfdays;

CREATE TABLE `tb_cps_halfdays` (
  `branch_halfday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tuesday` tinyint(4) NOT NULL DEFAULT '0',
  `wednesday` tinyint(4) NOT NULL DEFAULT '0',
  `thursday` tinyint(4) NOT NULL DEFAULT '0',
  `friday` tinyint(4) NOT NULL DEFAULT '0',
  `saturday` tinyint(4) NOT NULL DEFAULT '0',
  `sunday` tinyint(4) NOT NULL DEFAULT '0',
  `opening_time` varchar(7) NOT NULL,
  `closing_time` varchar(7) NOT NULL,
  PRIMARY KEY (`branch_halfday_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=ucs2;

INSERT INTO tb_cps_halfdays VALUES("53","3","0","0","0","0","0","1","0","9:00am","1:00pm");
INSERT INTO tb_cps_halfdays VALUES("52","2","0","0","0","0","0","1","0","9:00am","1:00pm");
INSERT INTO tb_cps_halfdays VALUES("54","4","0","0","0","0","0","1","0","9:00am","1:00pm");
INSERT INTO tb_cps_halfdays VALUES("55","5","0","0","0","0","0","1","0","10:00am","2:00pm");
INSERT INTO tb_cps_halfdays VALUES("56","6","0","0","0","0","0","1","0","9:30am","1:30pm");



DROP TABLE tb_cps_holidays;

CREATE TABLE `tb_cps_holidays` (
  `branch_holiday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tuesday` tinyint(4) NOT NULL DEFAULT '0',
  `wednesday` tinyint(4) NOT NULL DEFAULT '0',
  `thursday` tinyint(4) NOT NULL DEFAULT '0',
  `friday` tinyint(4) NOT NULL DEFAULT '0',
  `saturday` tinyint(4) NOT NULL DEFAULT '0',
  `sunday` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`branch_holiday_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=ucs2;

INSERT INTO tb_cps_holidays VALUES("63","3","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("62","2","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("61","3","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("60","2","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("59","3","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("58","3","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("57","2","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("64","4","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("65","5","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("66","6","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("67","6","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("68","2","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("69","2","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("70","2","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("71","2","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("72","2","0","0","0","0","0","0","1");
INSERT INTO tb_cps_holidays VALUES("73","7","0","0","0","0","0","0","0");



DROP TABLE tb_cps_mapbankfields;

CREATE TABLE `tb_cps_mapbankfields` (
  `field_id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(50) NOT NULL,
  `bank_field_name` varchar(50) NOT NULL,
  `field_min_length` int(11) NOT NULL,
  `field_max_length` int(11) NOT NULL,
  `bank_field_length` int(11) NOT NULL,
  `field_data_type` varchar(50) NOT NULL,
  `field_format` varchar(50) NOT NULL,
  PRIMARY KEY (`field_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO tb_cps_mapbankfields VALUES("1","cps_unique_req","cps_unique_req","10","15","15","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("2","cps_micr_code","cps_micr_code","9","9","9","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("3","cps_branchmicr_code","cps_branchmicr_code","3","3","3","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("4","cps_account_no","cps_account_no","15","15","15","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("5","cps_act_name","cps_act_name","1","35","35","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("6","cps_book_size","cps_book_size","1","3","3","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("7","cps_no_of_books","cps_no_of_books","1","2","2","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("8","cps_dly_bearer_order","cps_dly_bearer_order","1","1","1","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("9","cps_tr_code","cps_tr_code","2","2","2","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("10","cps_atpar","cps_atpar","1","1","1","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("11","cps_act_jointname1","cps_act_jointname1","0","35","35","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("12","cps_act_jointname2","cps_act_jointname2","0","35","35","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("13","cps_auth_sign1","cps_auth_sign1","0","35","35","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("14","cps_auth_sign2","cps_auth_sign2","0","35","35","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("15","cps_auth_sign3","cps_auth_sign3","0","35","35","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("16","cps_act_address1","cps_act_address1","0","50","50","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("17","cps_act_address2","cps_act_address2","0","50","50","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("18","cps_act_city","cps_act_city","0","30","30","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("19","cps_state","cps_state","0","30","30","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("20","cps_country","cps_country","0","30","30","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("21","cps_emailid","cps_emailid","0","50","50","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("22","cps_act_pin","cps_act_pin","0","30","30","Varchar","");
INSERT INTO tb_cps_mapbankfields VALUES("23","cps_act_telephone_res","cps_act_telephone_res","0","15","15","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("24","cps_act_telephone_off","cps_act_telephone_off","0","15","15","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("25","cps_act_mobile","cps_act_mobile","0","15","15","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("26","cps_chq_no_from","cps_chq_no_from","0","6","6","Numeric","");
INSERT INTO tb_cps_mapbankfields VALUES("27","cps_chq_no_to","cps_chq_no_to","0","6","6","Numeric","");



DROP TABLE tb_cps_nonworkingdays;

CREATE TABLE `tb_cps_nonworkingdays` (
  `branch_nonworkingday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tuesday` tinyint(4) NOT NULL DEFAULT '0',
  `wednesday` tinyint(4) NOT NULL DEFAULT '0',
  `thursday` tinyint(4) NOT NULL DEFAULT '0',
  `friday` tinyint(4) NOT NULL DEFAULT '0',
  `saturday` tinyint(4) NOT NULL DEFAULT '0',
  `sunday` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`branch_nonworkingday_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2;




DROP TABLE tb_cps_reprintque;

CREATE TABLE `tb_cps_reprintque` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(15) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(3) NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
  `cps_atpar` varchar(10) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) NOT NULL,
  `cps_country` varchar(30) NOT NULL,
  `cps_emailid` varchar(50) NOT NULL,
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) NOT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_reprint_approved` int(1) NOT NULL DEFAULT '0',
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tb_cps_settings;

CREATE TABLE `tb_cps_settings` (
  `inputfolderpath` varchar(100) NOT NULL,
  `archivefolderpath` varchar(50) NOT NULL,
  `inputfileformat` varchar(20) NOT NULL,
  `inputfiledelimiter` varchar(15) NOT NULL,
  `outputfolderpath` varchar(100) NOT NULL,
  `outputfileformat` varchar(20) NOT NULL,
  `outputfiledelimiter` varchar(15) NOT NULL,
  `typeofprinter` varchar(20) NOT NULL,
  `printermodel` int(11) NOT NULL,
  `chk_taken_from` int(1) NOT NULL,
  `chk_no_from` int(6) unsigned zerofill NOT NULL,
  `chk_no_to` int(6) unsigned zerofill NOT NULL,
  `nooffailedpasswordattempt` int(11) NOT NULL,
  `password_expiry` int(11) NOT NULL,
  `homescreen_text` varchar(100) NOT NULL,
  `poweredby` varchar(100) NOT NULL,
  `banklogo` varchar(100) NOT NULL,
  `desktop_image` varchar(100) NOT NULL,
  `chq_Image` text NOT NULL,
  `country` varchar(5) NOT NULL,
  `help_employeeid` varchar(20) NOT NULL,
  `help_helplineno1` varchar(30) NOT NULL,
  `help_emailid` varchar(100) NOT NULL,
  `autolockminutes` int(11) NOT NULL,
  `help_contactperson` varchar(200) NOT NULL,
  `help_helplineno2` varchar(20) NOT NULL,
  `license_type` varchar(10) NOT NULL,
  `license_install_date` date NOT NULL,
  `license_period` int(2) NOT NULL,
  `license_end_date` date NOT NULL,
  `license_no_of_users` int(5) NOT NULL,
  `license_cheque_leaves` int(250) NOT NULL,
  `license_users_leaves` int(1) NOT NULL,
  `license_users_leaves_value` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO tb_cps_settings VALUES("","uploads/","Excel","","","Excel","","","0","1","000000","000000","9","365","Ajanta Urban Co-operative Bank Ltd, Aurangabad","DevHarsh Infotech Pvt Ltd","thane logo.jpg","Penguins.jpg","","","","","","360","","","","0000-00-00","0","0000-00-00","0","0","0","0");



DROP TABLE tb_cps_transactioncodes;

CREATE TABLE `tb_cps_transactioncodes` (
  `transactioncode_id` int(11) NOT NULL AUTO_INCREMENT,
  `transactioncode` int(2) NOT NULL,
  `transactioncodedescription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `transactionstatus` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`transactioncode_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO tb_cps_transactioncodes VALUES("1","10","SAVINGS ACCOUNT","0");
INSERT INTO tb_cps_transactioncodes VALUES("2","11","CURRENT","0");
INSERT INTO tb_cps_transactioncodes VALUES("3","12","PAY ORDER","0");
INSERT INTO tb_cps_transactioncodes VALUES("4","13","CASH CREDIT","0");



DROP TABLE tb_cps_weekdays;

CREATE TABLE `tb_cps_weekdays` (
  `branch_workingday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tuesday` tinyint(4) NOT NULL DEFAULT '0',
  `wednesday` tinyint(4) NOT NULL DEFAULT '0',
  `thursday` tinyint(4) NOT NULL DEFAULT '0',
  `friday` tinyint(4) NOT NULL DEFAULT '0',
  `saturday` tinyint(4) NOT NULL DEFAULT '0',
  `sunday` tinyint(4) NOT NULL DEFAULT '0',
  `opening_time` varchar(7) NOT NULL,
  `closing_time` varchar(7) NOT NULL,
  PRIMARY KEY (`branch_workingday_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=ucs2;

INSERT INTO tb_cps_weekdays VALUES("53","3","1","1","1","1","1","0","0","9:00am","5:00pm");
INSERT INTO tb_cps_weekdays VALUES("52","2","1","1","1","1","1","0","0","9:00am","6:00pm");
INSERT INTO tb_cps_weekdays VALUES("54","4","1","1","1","1","1","0","0","9:00am","5:00pm");
INSERT INTO tb_cps_weekdays VALUES("55","5","1","1","1","1","1","0","0","10:00am","6:00pm");
INSERT INTO tb_cps_weekdays VALUES("56","6","1","1","1","1","1","0","0","9:30am","5:30pm");
INSERT INTO tb_cps_weekdays VALUES("57","7","0","0","0","0","0","0","0","","");



DROP TABLE tb_customer;

CREATE TABLE `tb_customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_short_name` varchar(30) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_acc_no` varchar(15) NOT NULL,
  KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tb_customer VALUES("1","AADEEPTA","AADEEPTA V.SHETTY & VIIVECK V.SHETTY","27,4/F,GURU BHAKTI NIWAS,GURU MANDIR RD,DOMBIVLI (EAST)-421 201.","H15792102956");
INSERT INTO tb_customer VALUES("2","ABHILASHA","ABHILASHA OZA","SHIV-VASANTI,BLDG.16,H.F.SOCIETY ROAD,  JOGESHWARI(E),MUMBAI 400 060.","H15792100857");
INSERT INTO tb_customer VALUES("3","ABHISHEK","ABHISHEK BHARTIA","A-603,KRISHRAJ TWR,CHICKUWADI,BORIVALI-WOPP.OMKAR HIGH COURT SOC,M-92.","H15792101900");



DROP TABLE tb_manual_print;

CREATE TABLE `tb_manual_print` (
  `mp_Id` int(11) NOT NULL AUTO_INCREMENT,
  `mp_AccountHolder_Id` int(11) NOT NULL,
  `mp_BookSize` int(4) NOT NULL,
  `mp_NoOfBooks` int(4) NOT NULL,
  `mp_Chk_From` int(7) NOT NULL,
  `mp_Chk_To` int(7) NOT NULL,
  PRIMARY KEY (`mp_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tb_pending_print_req;

CREATE TABLE `tb_pending_print_req` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(15) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) unsigned zerofill NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) unsigned zerofill NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_isprint` int(1) NOT NULL DEFAULT '0',
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




DROP TABLE tb_print_req_collection;

CREATE TABLE `tb_print_req_collection` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(15) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) unsigned zerofill NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) unsigned zerofill NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_is_reprint` int(1) NOT NULL DEFAULT '0',
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

INSERT INTO tb_print_req_collection VALUES("1","00004784","444891101","101","011006200022420","HARIPAL SUKHADEORAO BARDE","01","Y","015","10","","","","","","","      N R GHODE WADA","VIJAY COLONY","RUKHMINI NAGAR      AMRAVATI","","","AMRAVATI","","","","444806","","","9420722082","","200016","200030","022420","2022-07-15","30","0","","","","62   ","");
INSERT INTO tb_print_req_collection VALUES("2","00004785","444891101","101","011006400017201","CHANDRAKANT KANTILAL ROY","01","Y","015","10","","","","","","","      GADAGAESHWAR MANDIR","BEHIND H V P M","                    AMRAVATI","","","AMRAVATI","","","","444605","","","9890450980","","400046","400060","017201","2022-07-15","30","0","","","","64   ","");
INSERT INTO tb_print_req_collection VALUES("3","00001317","444891132","132","074008400000003","AMOL KRUSHI SEVA KENDRA NALWADA","05","Y","030","11","","","","","","","      AT NALWADA","TQ DARYAPUR","DIST AMRAVATI","","","DARYAPUR","","","","444803","96049075","","9604907573","","400331","400480","000003","2022-07-05","30","0","","","","84   ","");
INSERT INTO tb_print_req_collection VALUES("4","00001317","444891132","132","074008400000003","AMOL KRUSHI SEVA KENDRA NALWADA","05","Y","030","11","","","","","","","      AT NALWADA","TQ DARYAPUR","DIST AMRAVATI","","","DARYAPUR","","","","444803","96049075","","9604907573","","400331","400480","000003","2022-07-05","30","0","","","","84   ","");
INSERT INTO tb_print_req_collection VALUES("5","00000000","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","596320","596334","000012","2022-08-17","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("6","00004786","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","596350","596364","000012","2022-08-17","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("7","00004787","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","596380","596394","000012","2022-08-17","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("8","00004788","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","596395","596409","000012","2022-08-17","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("9","00004789","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","596410","596424","000012","2022-08-17","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("10","00004791","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","596425","596427","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("11","00004790","431532102","102","11111111","MANDAR GAWADE","01","0","015","11","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB02","591100","591114","000012","2022-08-17","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("12","00004792","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","000001","000015","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("13","00004793","431532102","102","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB02","000001","000003","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("14","00004794","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","000001","000003","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("15","00004794","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","000004","000006","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("16","00004794","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","000007","000009","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("17","00004794","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","529361","529363","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("18","00004794","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","529364","529366","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("19","00004794","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","529367","529369","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("20","00004795","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","000001","000003","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("21","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529361","529375","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("22","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529361","529375","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("23","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529361","529375","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("24","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529361","529375","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("25","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529376","529390","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("26","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529391","529405","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("27","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529406","529420","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("28","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529421","529435","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("29","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529436","529438","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("30","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529439","529441","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("31","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529442","529444","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("32","00004797","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529445","529447","000012","2022-08-18","1","0","","","MSG","","");
INSERT INTO tb_print_req_collection VALUES("33","00004798","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529448","529450","000012","2022-08-18","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("34","00004799","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529451","529465","000012","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("35","00004800","431532101","101","11111111","AJANTA URBAN CO-OPERATIVE BANK LTD,","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513100","513114","000101","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("36","00004801","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513115","513129","000101","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("37","00004802","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513130","513144","000101","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("38","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("39","00004804","431532102","102","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","OPP. SANT EKNATH RANGMANDIR","CHABDA HOSPITAL, OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519550","519564","000102","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("40","00004805","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","090","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513160","513249","000101","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("41","00004806","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513250","513252","000101","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("42","00004807","431532102","102","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. SANT EKNATH RANGMANDIR","CHABDA HOSPITAL, OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519565","519567","000102","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("43","00004808","431532102","102","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. SANT EKNATH RANGMANDIR","CHABDA HOSPITAL, OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519568","519570","000102","2022-08-19","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("44","00004809","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513253","513267","000101","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("45","00004810","431532101","101","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","1","003","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513268","513270","000101","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("46","00004811","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. SANT EKNATH RANGMANDIR","CHABDA HOSPITAL, OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519571","519573","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("47","00004812","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","1","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. SANT EKNATH RANGMANDIR","CHABDA HOSPITAL, OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519574","519576","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("48","00004813","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519577","519579","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("49","00004814","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519580","519582","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("50","00004815","431532101","101","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513271","513273","000101","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("51","00004816","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","1","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519583","519585","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("52","00004817","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519586","519588","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("53","00004818","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519589","519591","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("54","00004819","431532101","101","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513274","513276","000101","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("55","00004820","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","1","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519592","519594","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("56","00004821","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519595","519597","000102","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("57","00004822","431532101","101","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513277","513279","000101","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("58","00004823","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","529466","529468","000101","2022-08-22","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("59","00004825","431532101","101","11111111","MANDAR GAWADE","01","1","003","11","","","","AUTHORISED SIGNATORY","AUTHORISED SIGNATORY","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","747485","747487","000101","2022-10-17","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("60","00004826","431532101","101","11111111","MANDAR GAWADE","01","0","003","11","","","","AUTHORISED SIGNATORY","AUTHORISED SIGNATORY","AUTHORISED SIGNATORY","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","747488","747490","000101","2022-10-17","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("61","00004830","431532102","102","00102210014939","BETHANY FLOWERS","03","0","001","10","","","","","","","AT.PO.TAL.PARLI-VAIJNATH11","","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","517586","517588","000102","2023-03-08","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("62","00004831","431532101","101","00102210014939","BETHANY FLOWERS","01","0","003","10","","","","","","","AT.PO.TAL.PARLI-VAIJNATH11","","","","","AURANGABAD","","","","431555","","","","YESB0AUCB01","529469","529471","000102","2023-03-10","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("63","00004832","431532101","101","00102210014939","BETHANY FLOWERS","01","0","003","10","","","","","","","AT.PO.TAL.PARLI-VAIJNATH11","","","","","AURANGABAD","","","","431555","","","","YESB0AUCB01","529472","529474","000102","2023-03-10","1","0","","","MMMMMMMMMMM","","");
INSERT INTO tb_print_req_collection VALUES("64","00004833","431532101","101","00102210014939","BETHANY FLOWERS","01","0","003","10","","","","","","","AT.PO.TAL.PARLI-VAIJNATH11","","","","","AURANGABAD","","","","431555","","","","YESB0AUCB01","529475","529477","000102","2023-03-10","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("65","00004834","431532101","101","","KIRAN BHAGWATRAO BHANDARE","01","0","003","10","","","","","","","AT.PO.TAL.PARLI-VAIJNATH11","","","","","AURANGABAD","","","","431555","","","","YESB0AUCB01","529478","529480","431853","2023-03-13","1","0","","","","","");
INSERT INTO tb_print_req_collection VALUES("66","00004835","431532101","101","","","01","0","003","10","","","","","","","AT.PO.TAL.PARLI-VAIJNATH11","","","","","Quia sint aliquam e","","","","431555","","","","YESB0AUCB01","529481","529483","431853","2023-03-13","1","0","","","","","");



DROP TABLE tb_printadmin;

CREATE TABLE `tb_printadmin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastlogintime` datetime NOT NULL,
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(3) NOT NULL,
  `incorrect_attempt` int(11) NOT NULL,
  `password_status` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `is_temp_password` int(11) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tb_printadmin VALUES("admin","21232f297a57a5a743894a0e4a801fc3","2012-04-21 00:00:00","1","0","0","1","0","admin","2022-08-18","1");
INSERT INTO tb_printadmin VALUES("reprint","21232f297a57a5a743894a0e4a801fc3","2015-05-31 00:00:00","16","0","0","1","1","reprint","2022-08-18","1");
INSERT INTO tb_printadmin VALUES("admin123","7488e331b8b64e5794da3fa4eb10ad5d","2023-03-13 00:00:00","20","0","0","1","0","admin123","2023-03-13","1");



DROP TABLE tb_printque;

CREATE TABLE `tb_printque` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(15) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) unsigned zerofill NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) unsigned zerofill NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




DROP TABLE tb_reprint_req_collection;

CREATE TABLE `tb_reprint_req_collection` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(15) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) unsigned zerofill NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) unsigned zerofill NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
  `cps_atpar` varchar(10) NOT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) NOT NULL,
  `cps_country` varchar(30) NOT NULL,
  `cps_emailid` varchar(50) NOT NULL,
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) NOT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_is_reprint` int(1) NOT NULL DEFAULT '0',
  `cps_pr_code` varchar(4) NOT NULL,
  `cps_bsr_code` varchar(6) NOT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO tb_reprint_req_collection VALUES("1","00004784","444891101","101","011006200022420","HARIPAL SUKHADEORAO BARDE","01","Y","015","10","","","","","","","      N R GHODE WADA","VIJAY COLONY","RUKHMINI NAGAR      AMRAVATI","","","AMRAVATI","","","","444806","","","9420722082","","200016","200030","022420","2022-07-15","16","0","","","","62   ","");
INSERT INTO tb_reprint_req_collection VALUES("2","00004785","444891101","101","011006400017201","CHANDRAKANT KANTILAL ROY","01","Y","015","10","","","","","","","      GADAGAESHWAR MANDIR","BEHIND H V P M","                    AMRAVATI","","","AMRAVATI","","","","444605","","","9890450980","","400046","400060","017201","2022-07-15","16","0","","","","64   ","");
INSERT INTO tb_reprint_req_collection VALUES("3","00004784","444891101","101","011006200022420","HARIPAL SUKHADEORAO BARDE","01","Y","015","10","","","","","","","      N R GHODE WADA","VIJAY COLONY","RUKHMINI NAGAR      AMRAVATI","","","AMRAVATI","","","","444806","","","9420722082","","200016","200030","022420","2022-07-15","16","0","","","","62   ","");
INSERT INTO tb_reprint_req_collection VALUES("4","00004785","444891101","101","011006400017201","CHANDRAKANT KANTILAL ROY","01","Y","015","10","","","","","","","      GADAGAESHWAR MANDIR","BEHIND H V P M","                    AMRAVATI","","","AMRAVATI","","","","444605","","","9890450980","","400046","400060","017201","2022-07-15","16","0","","","","64   ","");
INSERT INTO tb_reprint_req_collection VALUES("5","00004784","444891101","101","011006200022420","HARIPAL SUKHADEORAO BARDE","01","Y","015","10","","","","","","","      N R GHODE WADA","VIJAY COLONY","RUKHMINI NAGAR      AMRAVATI","","","AMRAVATI","","","","444806","","","9420722082","","200016","200030","022420","2022-07-15","16","0","","","","62   ","");
INSERT INTO tb_reprint_req_collection VALUES("6","00004785","444891101","101","011006400017201","CHANDRAKANT KANTILAL ROY","01","Y","015","10","","","","","","","      GADAGAESHWAR MANDIR","BEHIND H V P M","                    AMRAVATI","","","AMRAVATI","","","","444605","","","9890450980","","400046","400060","017201","2022-07-15","16","0","","","","64   ","");
INSERT INTO tb_reprint_req_collection VALUES("7","00001317","444891132","132","074008400000003","AMOL KRUSHI SEVA KENDRA NALWADA","05","Y","030","11","","","","","","","      AT NALWADA","TQ DARYAPUR","DIST AMRAVATI","","","DARYAPUR","","","","444803","96049075","","9604907573","","400331","400480","000003","2022-07-05","16","0","","","","84   ","");
INSERT INTO tb_reprint_req_collection VALUES("8","00001317","444891132","132","074008400000003","AMOL KRUSHI SEVA KENDRA NALWADA","05","Y","030","11","","","","","","","      AT NALWADA","TQ DARYAPUR","DIST AMRAVATI","","","DARYAPUR","","","","444803","96049075","","9604907573","","400331","400480","000003","2022-07-05","16","0","","","","84   ","");
INSERT INTO tb_reprint_req_collection VALUES("9","00004785","444891101","101","011006400017201","CHANDRAKANT KANTILAL ROY","01","Y","015","10","","","","","","","      GADAGAESHWAR MANDIR","BEHIND H V P M","                    AMRAVATI","","","AMRAVATI","","","","444605","","","9890450980","","400046","400060","017201","2022-07-15","16","0","","","","64   ","");
INSERT INTO tb_reprint_req_collection VALUES("10","00004784","444891101","101","011006200022420","HARIPAL SUKHADEORAO BARDE","01","Y","015","10","","","","","","","      N R GHODE WADA","VIJAY COLONY","RUKHMINI NAGAR      AMRAVATI","","","AMRAVATI","","","","444806","","","9420722082","","200016","200030","022420","2022-07-15","16","0","","","","62   ","");
INSERT INTO tb_reprint_req_collection VALUES("11","00004784","444891101","101","011006200022420","HARIPAL SUKHADEORAO BARDE","01","Y","015","10","","","","","","","      N R GHODE WADA","VIJAY COLONY","RUKHMINI NAGAR      AMRAVATI","","","AMRAVATI","","","","444806","","","9420722082","","200016","200030","022420","2022-07-15","16","0","","","","62   ","");
INSERT INTO tb_reprint_req_collection VALUES("12","00004785","444891101","101","011006400017201","CHANDRAKANT KANTILAL ROY","01","Y","015","10","","","","","","","      GADAGAESHWAR MANDIR","BEHIND H V P M","                    AMRAVATI","","","AMRAVATI","","","","444605","","","9890450980","","400046","400060","017201","2022-07-15","16","0","","","","64   ","");
INSERT INTO tb_reprint_req_collection VALUES("13","00001317","444891132","132","074008400000003","AMOL KRUSHI SEVA KENDRA NALWADA","05","Y","030","11","","","","","","","      AT NALWADA","TQ DARYAPUR","DIST AMRAVATI","","","DARYAPUR","","","","444803","96049075","","9604907573","","400331","400480","000003","2022-07-05","16","0","","","","84   ","");
INSERT INTO tb_reprint_req_collection VALUES("14","00004784","444891101","101","011006200022420","HARIPAL SUKHADEORAO BARDE","01","Y","015","10","","","","","","","      N R GHODE WADA","VIJAY COLONY","RUKHMINI NAGAR      AMRAVATI","","","AMRAVATI","","","","444806","","","9420722082","","200016","200030","022420","2022-07-15","16","0","","","","62   ","");
INSERT INTO tb_reprint_req_collection VALUES("15","00004789","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","596410","596424","000012","2022-08-17","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("16","00004791","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","596425","596427","000012","2022-08-18","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("17","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529442","529444","000012","2022-08-18","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("18","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529439","529441","000012","2022-08-18","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("19","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529436","529438","000012","2022-08-18","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("20","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529421","529435","000012","2022-08-18","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("21","00004796","431532101","101","11111111","MANDAR GAWADE","01","0","015","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529406","529420","000012","2022-08-18","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("22","00004785","444891101","101","011006400017201","CHANDRAKANT KANTILAL ROY","01","Y","015","10","","","","","","","      GADAGAESHWAR MANDIR","BEHIND H V P M","                    AMRAVATI","","","AMRAVATI","","","","444605","","","9890450980","","400046","400060","017201","2022-07-15","16","0","","","","64   ","");
INSERT INTO tb_reprint_req_collection VALUES("23","00001317","444891132","132","074008400000003","AMOL KRUSHI SEVA KENDRA NALWADA","05","Y","030","11","","","","","","","      AT NALWADA","TQ DARYAPUR","DIST AMRAVATI","","","DARYAPUR","","","","444803","96049075","","9604907573","","400331","400480","000003","2022-07-05","16","0","","","","84   ","");
INSERT INTO tb_reprint_req_collection VALUES("24","00004797","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529445","529447","000012","2022-08-18","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("25","00004797","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","THANE","","","","401107","","","","YESB0AUCB01","529445","529447","000012","2022-08-18","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("26","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("27","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("28","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("29","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("30","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("31","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("32","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("33","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("34","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("35","00004804","431532102","102","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","OPP. SANT EKNATH RANGMANDIR","CHABDA HOSPITAL, OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519550","519564","000102","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("36","00004801","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513115","513129","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("37","00004802","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513130","513144","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("38","00004803","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513145","513159","000101","2022-08-19","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("39","00004809","431532101","101","","AJANTA URBAN CO-OP BANK LTD, AURANGABAD","01","0","015","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513253","513267","000101","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("40","00004815","431532101","101","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513271","513273","000101","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("41","00004814","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519580","519582","000102","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("42","00004811","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. SANT EKNATH RANGMANDIR","CHABDA HOSPITAL, OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519571","519573","000102","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("43","00004812","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","1","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. SANT EKNATH RANGMANDIR","CHABDA HOSPITAL, OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519574","519576","000102","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("44","00004813","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519577","519579","000102","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("45","00004820","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","1","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519592","519594","000102","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("46","00004821","431532102","102","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","OPP. PAWAN GAS, BASATWAR CHAMBER","OSMANPURA","","","","AURANGABAD","","","","431001","","","","YESB0AUCB02","519595","519597","000102","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("47","00004822","431532101","101","","AJANTA URBAN CO-OPERATIVE BANK LTD.","01","0","003","12","","","","Authorised Signatory","Authorised Signatory","","ZAMBAD HEIGHTS","JADHAVMANDI","","","","AURANGABAD","","","","431001","","","","YESB0AUCB01","513277","513279","000101","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("48","00004823","431532101","101","11111111","MANDAR GAWADE","01","0","003","10","","","","","","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","529466","529468","000101","2022-08-22","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("49","00004825","431532101","101","11111111","MANDAR GAWADE","01","1","003","11","","","","AUTHORISED SIGNATORY","AUTHORISED SIGNATORY","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","747485","747487","000101","2022-10-17","16","0","","","","","");
INSERT INTO tb_reprint_req_collection VALUES("50","00004825","431532101","101","11111111","MANDAR GAWADE","01","1","003","11","","","","AUTHORISED SIGNATORY","AUTHORISED SIGNATORY","","509, SPACES 912, MIRA BHAYANDAR ROA","MIRA ROAD EAST","","","","Thane","","","gmandar4@gmail.com","401107","","","","YESB0AUCB01","747485","747487","000101","2022-10-17","16","0","","","","","");



DROP TABLE tb_statemaster;

CREATE TABLE `tb_statemaster` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_code` varchar(7) NOT NULL,
  `state_name_al` varchar(4) NOT NULL,
  `is_delete` int(2) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tb_statemaster VALUES("1","GUJRAT","1","GUJ001","GUJ","0");
INSERT INTO tb_statemaster VALUES("2","MAHARASHTRA","1","MAH001","MAH","0");
INSERT INTO tb_statemaster VALUES("3","KARNATAKA","1","KAR001","KAR","0");
INSERT INTO tb_statemaster VALUES("4","GOA","1","GOA001","GOA","0");



DROP TABLE tb_suburbmaster;

CREATE TABLE `tb_suburbmaster` (
  `suburb_id` int(240) NOT NULL AUTO_INCREMENT,
  `suburb_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `suburb_postal_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `suburb_code` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `suburb_name_al` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(240) NOT NULL,
  `state_id` int(240) NOT NULL,
  `city_id` int(240) NOT NULL,
  `is_delete` int(2) NOT NULL,
  PRIMARY KEY (`suburb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO tb_suburbmaster VALUES("1","AURANGABAD","431001","AUR001","AMR","1","2","1","0");



DROP TABLE tb_uploadingdata;

CREATE TABLE `tb_uploadingdata` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) NOT NULL,
  `cps_branchmicr_code` varchar(3) NOT NULL,
  `cps_account_no` varchar(15) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` varchar(2) NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` varchar(3) NOT NULL,
  `cps_tr_code` varchar(2) NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` varchar(6) NOT NULL,
  `cps_chq_no_to` varchar(6) NOT NULL,
  `cps_micr_account_no` varchar(6) NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` varchar(6) NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;




