

CREATE TABLE `log_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(32) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `record_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action_performed` varchar(32) DEFAULT NULL,
  `previous_details` text DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO migrations (id, migration, batch) VALUES ('1','2019_12_14_000001_create_personal_access_tokens_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('2','2023_06_13_062519_create_permission_tables','1');

INSERT INTO migrations (id, migration, batch) VALUES ('3','2023_06_21_072155_create_log_table_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('4','2023_06_21_072155_create_tb_accountholdermaster_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('5','2023_06_21_072155_create_tb_bankdetails_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('6','2023_06_21_072155_create_tb_branchdetails_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('7','2023_06_21_072155_create_tb_countrymaster_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('8','2023_06_21_072155_create_tb_cps_adminpasswords_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('9','2023_06_21_072155_create_tb_cps_chequeseries_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('10','2023_06_21_072155_create_tb_cps_grouppermissions_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('11','2023_06_21_072155_create_tb_cps_groups_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('12','2023_06_21_072155_create_tb_cps_halfdays_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('13','2023_06_21_072155_create_tb_cps_holidays_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('14','2023_06_21_072155_create_tb_cps_mapbankfields_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('15','2023_06_21_072155_create_tb_cps_nonworkingdays_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('16','2023_06_21_072155_create_tb_cps_reprintque_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('17','2023_06_21_072155_create_tb_cps_settings_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('18','2023_06_21_072155_create_tb_cps_transactioncodes_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('19','2023_06_21_072155_create_tb_cps_weekdays_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('20','2023_06_21_072155_create_tb_customer_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('21','2023_06_21_072155_create_tb_manual_print_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('22','2023_06_21_072155_create_tb_pending_print_req_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('23','2023_06_21_072155_create_tb_print_req_collection_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('24','2023_06_21_072155_create_tb_print_sequence_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('25','2023_06_21_072155_create_tb_printadmin_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('26','2023_06_21_072155_create_tb_printque_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('27','2023_06_21_072155_create_tb_reprint_req_collection_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('28','2023_06_21_072155_create_tb_statemaster_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('29','2023_06_21_072155_create_tb_uploadingdata_table','1');


CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO model_has_roles (role_id, model_type, model_id) VALUES ('1','App\Models\User','1');

INSERT INTO model_has_roles (role_id, model_type, model_id) VALUES ('3','App\Models\User','2');

INSERT INTO model_has_roles (role_id, model_type, model_id) VALUES ('6','App\Models\User','3');


CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('1','role.view','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('2','role.add','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('3','role.edit','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('4','country.view','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('5','country.add','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('6','country.edit','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('7','country.delete','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('8','state.view','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('9','state.add','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('10','state.edit','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('11','state.delete','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('12','bank.view','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('13','branch.view','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('14','branch.add','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('15','branch.edit','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('16','branch.delete','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('17','transaction-code.view','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('18','transaction-code.add','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('19','transaction-code.edit','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('20','transaction-code.delete','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('21','cheque-series.view','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('22','cheque-series.add','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('23','cheque-series.edit','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('24','cheque-series.delete','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('25','transaction.view','web','2023-06-30 06:11:44','2023-06-30 06:11:44');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('26','transaction.upload','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('27','transaction.filter','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('28','transaction.delete','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('29','transaction.print','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('30','pending-print-req.view','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('31','pending-print-req.cancel','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('32','pending-print-req.print','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('33','reprint-request.view','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('34','reprint-request.print','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('35','manage-user.view','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('36','manage-user.add','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('37','manage-user.edit','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('38','manage-user.delete','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('39','process-reprint.view','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('40','process-reprint.print-in-bunch','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('41','process-reprint.print-selected-pages','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('42','process-reprint.delete','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('43','process-reprint.print-requisiion-only','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('44','reprint-single-leaf.view','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('45','reprint-single-leaf.print','web','2023-06-30 06:11:45','2023-06-30 06:11:45');

INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES ('46','reprint-single-leaf.delete','web','2023-06-30 06:11:45','2023-06-30 06:11:45');


CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('1','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('1','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('3','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('3','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('4','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('4','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('5','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('5','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('6','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('6','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('7','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('8','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('8','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('9','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('9','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('10','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('10','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('11','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('12','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('12','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('13','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('13','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('14','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('14','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('15','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('15','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('16','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('17','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('17','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('18','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('18','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('19','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('19','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('20','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('21','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('21','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('22','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('22','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('23','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('23','5');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('24','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('25','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('25','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('26','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('26','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('27','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('27','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('28','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('28','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('29','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('29','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('30','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('30','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('31','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('31','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('32','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('32','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('33','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('33','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('33','6');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('34','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('34','2');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('34','6');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('35','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('36','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('37','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('38','1');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('39','3');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('40','3');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('41','3');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('42','3');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('43','3');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('44','3');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('45','3');

INSERT INTO role_has_permissions (permission_id, role_id) VALUES ('46','3');


CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO roles (id, name, guard_name, created_at, updated_at) VALUES ('1','Super Admin','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO roles (id, name, guard_name, created_at, updated_at) VALUES ('2','Admin','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO roles (id, name, guard_name, created_at, updated_at) VALUES ('3','Reprint','web','2023-06-21 07:31:34','2023-06-21 07:31:34');

INSERT INTO roles (id, name, guard_name, created_at, updated_at) VALUES ('4','Sachin','web','2023-06-21 12:45:07','2023-06-21 12:45:07');

INSERT INTO roles (id, name, guard_name, created_at, updated_at) VALUES ('5','Punjab','web','2023-06-21 12:46:46','2023-06-21 12:46:46');

INSERT INTO roles (id, name, guard_name, created_at, updated_at) VALUES ('6','Role Testing','web','2023-07-03 06:22:49','2023-07-03 06:22:49');


CREATE TABLE `tb_accountholdermaster` (
  `ach_Id` int(11) NOT NULL AUTO_INCREMENT,
  `ach_account_No` int(11) DEFAULT NULL,
  `ach_account_Name` varchar(40) DEFAULT NULL,
  `ach_Bearer_Order` int(11) DEFAULT NULL,
  `ach_Transaction_Code` int(11) DEFAULT NULL,
  `ach_At_Par` int(11) DEFAULT NULL,
  `ach_Joint_Name1` varchar(40) DEFAULT NULL,
  `ach_Joint_Name2` varchar(40) DEFAULT NULL,
  `ach_Authorized_Signatory1` varchar(25) DEFAULT NULL,
  `ach_Authorized_Signatory2` varchar(25) DEFAULT NULL,
  `ach_Authorized_Signatory3` varchar(25) DEFAULT NULL,
  `ach_Address1` varchar(200) DEFAULT NULL,
  `ach_Address2` varchar(200) DEFAULT NULL,
  `ach_Suburb` int(11) DEFAULT NULL,
  `ach_City` int(11) DEFAULT NULL,
  `ach_State` int(11) DEFAULT NULL,
  `ach_Country` int(11) DEFAULT NULL,
  `ach_Pincode` int(11) DEFAULT NULL,
  `ach_Telephone_Residence` int(11) DEFAULT NULL,
  `ach_Telephone_Office` int(11) DEFAULT NULL,
  `ach_Mobile_No` int(11) DEFAULT NULL,
  `ach_Branch` int(11) DEFAULT NULL,
  `ach_emailId` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ach_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_bankdetails` (
  `bank_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_code` int(10) unsigned DEFAULT NULL,
  `bank_address1` text DEFAULT NULL,
  `bank_address2` varchar(36) DEFAULT NULL,
  `bank_country_id` int(11) DEFAULT NULL,
  `bank_state_id` int(11) DEFAULT NULL,
  `bank_pin` varchar(15) DEFAULT NULL,
  `bank_contact_no1` varchar(15) DEFAULT NULL,
  `bank_contact_no2` varchar(15) DEFAULT NULL,
  `bank_contact_per1` varchar(40) DEFAULT NULL,
  `bank_contact_per2` varchar(40) DEFAULT NULL,
  `bank_contact_per_LL1` varchar(20) DEFAULT NULL,
  `bank_contact_per_LL2` varchar(20) DEFAULT NULL,
  `bank_emailid2` varchar(30) DEFAULT NULL,
  `bank_emailid` varchar(40) DEFAULT NULL,
  `bank_website` varchar(40) DEFAULT NULL,
  `bank_printers` text DEFAULT NULL,
  `is_branch_sub_code` tinyint(1) DEFAULT NULL,
  `number_digit_sub_code` int(11) DEFAULT NULL,
  `starting_index_sub_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_bankdetails (bank_id, bank_name, bank_code, bank_address1, bank_address2, bank_country_id, bank_state_id, bank_pin, bank_contact_no1, bank_contact_no2, bank_contact_per1, bank_contact_per2, bank_contact_per_LL1, bank_contact_per_LL2, bank_emailid2, bank_emailid, bank_website, bank_printers, is_branch_sub_code, number_digit_sub_code, starting_index_sub_code) VALUES ('1','Axis Bank','442','Ghatkopar','','1','2','421','','','User','','','','','','','a:1:{i:0;a:3:{i:0;s:25:"HP LaserJet Pro M304-M305";i:1;s:6:"Tray 1";i:2;s:6:"Tray 2";}}','0','0','0');


CREATE TABLE `tb_branchdetails` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_code` varchar(10) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `branch_micr` varchar(20) DEFAULT NULL,
  `branch_atparmicrcode` varchar(20) DEFAULT NULL,
  `branch_address1` varchar(85) DEFAULT NULL,
  `branch_address2` varchar(65) DEFAULT NULL,
  `branch_country_id` int(11) NOT NULL DEFAULT 0,
  `branch_state_id` int(11) DEFAULT NULL,
  `branch_telephone1` varchar(12) DEFAULT NULL,
  `branch_telephone2` varchar(12) DEFAULT NULL,
  `branch_contactperson1` varchar(50) DEFAULT NULL,
  `branch_contactperson2` varchar(50) DEFAULT NULL,
  `branch_contactpersonmobile1` varchar(50) DEFAULT NULL,
  `branch_contactpersonmobile2` varchar(50) DEFAULT NULL,
  `branch_email1` varchar(30) DEFAULT NULL,
  `branch_email2` varchar(30) DEFAULT NULL,
  `branch_holiday` varchar(20) DEFAULT NULL,
  `branch_neftifsccode` varchar(20) DEFAULT NULL,
  `branch_printers` text DEFAULT NULL,
  `branch_working_hours` double DEFAULT NULL,
  `branch_clearingthrough` tinyint(1) NOT NULL DEFAULT 0,
  `branch_clearingcenter` tinyint(1) NOT NULL DEFAULT 0,
  `clr_bank_code` varchar(15) DEFAULT NULL,
  `clr_bank_city` int(11) DEFAULT NULL,
  `branch_City_Code` int(10) unsigned DEFAULT NULL,
  `branch_Services` varchar(100) DEFAULT NULL,
  `branch_reg_busi_hrs` varchar(100) DEFAULT NULL,
  `branch_half_busi_hrs` varchar(100) DEFAULT NULL,
  `branch_sunday_working` varchar(100) DEFAULT NULL,
  `branch_tollfree_no` varchar(20) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_branchdetails (branch_id, branch_code, branch_name, branch_micr, branch_atparmicrcode, branch_address1, branch_address2, branch_country_id, branch_state_id, branch_telephone1, branch_telephone2, branch_contactperson1, branch_contactperson2, branch_contactpersonmobile1, branch_contactpersonmobile2, branch_email1, branch_email2, branch_holiday, branch_neftifsccode, branch_printers, branch_working_hours, branch_clearingthrough, branch_clearingcenter, clr_bank_code, clr_bank_city, branch_City_Code, branch_Services, branch_reg_busi_hrs, branch_half_busi_hrs, branch_sunday_working, branch_tollfree_no, branch_sub_code) VALUES ('2','006','Axis Bank','123456','','Pune','','1','1','','','','','','','','','','Axis01234','','','0','0','','','12','','','','','','078');

INSERT INTO tb_branchdetails (branch_id, branch_code, branch_name, branch_micr, branch_atparmicrcode, branch_address1, branch_address2, branch_country_id, branch_state_id, branch_telephone1, branch_telephone2, branch_contactperson1, branch_contactperson2, branch_contactpersonmobile1, branch_contactpersonmobile2, branch_email1, branch_email2, branch_holiday, branch_neftifsccode, branch_printers, branch_working_hours, branch_clearingthrough, branch_clearingcenter, clr_bank_code, clr_bank_city, branch_City_Code, branch_Services, branch_reg_busi_hrs, branch_half_busi_hrs, branch_sunday_working, branch_tollfree_no, branch_sub_code) VALUES ('3','008','Khargaon','123456','1234','1234ffsdf','','1','1','','','1234','','','','','','','Axis01237','','','0','0','','','123','','','','','','');


CREATE TABLE `tb_countrymaster` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) DEFAULT NULL,
  `country_code` varchar(3) DEFAULT NULL,
  `country_isdelete` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_countrymaster (country_id, country_name, country_code, country_isdelete) VALUES ('1','India','444','1');

INSERT INTO tb_countrymaster (country_id, country_name, country_code, country_isdelete) VALUES ('3','Russia','12','1');

INSERT INTO tb_countrymaster (country_id, country_name, country_code, country_isdelete) VALUES ('4','Russia','12','1');

INSERT INTO tb_countrymaster (country_id, country_name, country_code, country_isdelete) VALUES ('5','America','101','1');

INSERT INTO tb_countrymaster (country_id, country_name, country_code, country_isdelete) VALUES ('6','Canada','102','1');

INSERT INTO tb_countrymaster (country_id, country_name, country_code, country_isdelete) VALUES ('7','Germany','16','1');


CREATE TABLE `tb_cps_adminpasswords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_cps_chequeseries` (
  `series_id` int(11) NOT NULL AUTO_INCREMENT,
  `series_transationcode` int(11) DEFAULT NULL,
  `series_branchcode` int(11) DEFAULT NULL,
  `serise_branchcode_branch` int(11) DEFAULT NULL,
  `series_from` int(10) unsigned DEFAULT NULL,
  `series_to` int(10) unsigned DEFAULT NULL,
  `series_lastno` int(10) unsigned DEFAULT NULL,
  `serise_Bank` int(11) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`series_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_cps_chequeseries (series_id, series_transationcode, series_branchcode, serise_branchcode_branch, series_from, series_to, series_lastno, serise_Bank, branch_sub_code) VALUES ('2','10','2','1001','445544','735588','449852','1','');

INSERT INTO tb_cps_chequeseries (series_id, series_transationcode, series_branchcode, serise_branchcode_branch, series_from, series_to, series_lastno, serise_Bank, branch_sub_code) VALUES ('3','10','2','1001','445545','735589','449853','1','');


CREATE TABLE `tb_cps_grouppermissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `page_accessible` varchar(150) DEFAULT NULL,
  `page_read` varchar(2) DEFAULT NULL,
  `page_write` varchar(2) DEFAULT NULL,
  `page_edit` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_cps_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) DEFAULT NULL,
  `group_createddate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_cps_halfdays` (
  `branch_halfday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) DEFAULT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `tuesday` tinyint(4) NOT NULL DEFAULT 0,
  `wednesday` tinyint(4) NOT NULL DEFAULT 0,
  `thursday` tinyint(4) NOT NULL DEFAULT 0,
  `friday` tinyint(4) NOT NULL DEFAULT 0,
  `saturday` tinyint(4) NOT NULL DEFAULT 0,
  `sunday` tinyint(4) NOT NULL DEFAULT 0,
  `opening_time` varchar(7) DEFAULT NULL,
  `closing_time` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`branch_halfday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_cps_holidays` (
  `branch_holiday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) DEFAULT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `tuesday` tinyint(4) NOT NULL DEFAULT 0,
  `wednesday` tinyint(4) NOT NULL DEFAULT 0,
  `thursday` tinyint(4) NOT NULL DEFAULT 0,
  `friday` tinyint(4) NOT NULL DEFAULT 0,
  `saturday` tinyint(4) NOT NULL DEFAULT 0,
  `sunday` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`branch_holiday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_cps_mapbankfields` (
  `field_id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(50) DEFAULT NULL,
  `bank_field_name` varchar(50) DEFAULT NULL,
  `field_min_length` int(11) DEFAULT NULL,
  `field_max_length` int(11) DEFAULT NULL,
  `bank_field_length` int(11) DEFAULT NULL,
  `field_data_type` varchar(50) DEFAULT NULL,
  `field_format` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`field_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_cps_nonworkingdays` (
  `branch_nonworkingday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) DEFAULT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `tuesday` tinyint(4) NOT NULL DEFAULT 0,
  `wednesday` tinyint(4) NOT NULL DEFAULT 0,
  `thursday` tinyint(4) NOT NULL DEFAULT 0,
  `friday` tinyint(4) NOT NULL DEFAULT 0,
  `saturday` tinyint(4) NOT NULL DEFAULT 0,
  `sunday` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`branch_nonworkingday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_cps_reprintque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_code` int(10) unsigned DEFAULT NULL,
  `cps_branchmicr_code` int(10) unsigned DEFAULT NULL,
  `cps_account_no` varchar(15) DEFAULT NULL,
  `cps_act_name` varchar(45) DEFAULT NULL,
  `cps_no_of_books` int(11) DEFAULT NULL,
  `cps_dly_bearer_order` varchar(1) DEFAULT NULL,
  `cps_book_size` int(11) DEFAULT NULL,
  `cps_tr_code` int(10) unsigned DEFAULT NULL,
  `cps_atpar` varchar(10) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) DEFAULT NULL,
  `cps_act_jointname2` varchar(45) DEFAULT NULL,
  `cps_auth_sign1` varchar(35) DEFAULT NULL,
  `cps_auth_sign2` varchar(35) DEFAULT NULL,
  `cps_auth_sign3` varchar(35) DEFAULT NULL,
  `cps_act_address1` varchar(50) DEFAULT NULL,
  `cps_act_address2` varchar(50) DEFAULT NULL,
  `cps_act_address3` varchar(35) DEFAULT NULL,
  `cps_act_address4` varchar(35) DEFAULT NULL,
  `cps_act_address5` varchar(35) DEFAULT NULL,
  `cps_act_city` varchar(30) DEFAULT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(11) DEFAULT NULL,
  `cps_act_telephone_res` varchar(15) DEFAULT NULL,
  `cps_act_telephone_off` varchar(15) DEFAULT NULL,
  `cps_act_mobile` varchar(15) DEFAULT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(20) unsigned DEFAULT NULL,
  `cps_chq_no_to` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_account_no` int(10) unsigned DEFAULT NULL,
  `cps_date` date DEFAULT NULL,
  `cps_process_user_id` int(11) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_reprint_approved` int(11) NOT NULL DEFAULT 0,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_cps_reprintque (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_bsr_code, cps_pr_code, cps_reprint_approved, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('30','102','411312006','6','078011300000043','NAMRATA LAND \DEVELOPERS','1','Y','5','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','100001','100005','43','2023-07-04','2','1','','0','','','023  ','');

INSERT INTO tb_cps_reprintque (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_bsr_code, cps_pr_code, cps_reprint_approved, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('32','102','411312006','6','078011300000073','NAMRATA LAND *DEVELOPERS','1','Y','5','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','100021','100025','43','2023-07-04','2','1','','0','','','023  ','');

INSERT INTO tb_cps_reprintque (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_bsr_code, cps_pr_code, cps_reprint_approved, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('33','111','411312006','6','078011300079843','#NAMRATA LAND "DEVELOPERS','2','Y','4','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','300011','300020','43','2023-07-04','1','1','','0','','2017-10-06','023  ','');


CREATE TABLE `tb_cps_settings` (
  `inputfolderpath` varchar(100) DEFAULT NULL,
  `archivefolderpath` varchar(50) DEFAULT NULL,
  `inputfileformat` varchar(20) DEFAULT NULL,
  `inputfiledelimiter` varchar(15) DEFAULT NULL,
  `outputfolderpath` varchar(100) DEFAULT NULL,
  `outputfileformat` varchar(20) DEFAULT NULL,
  `outputfiledelimiter` varchar(15) DEFAULT NULL,
  `typeofprinter` varchar(20) DEFAULT NULL,
  `printermodel` int(11) DEFAULT NULL,
  `chk_taken_from` int(11) DEFAULT NULL,
  `chk_no_from` int(10) unsigned DEFAULT NULL,
  `chk_no_to` int(10) unsigned DEFAULT NULL,
  `nooffailedpasswordattempt` int(11) DEFAULT NULL,
  `password_expiry` int(11) DEFAULT NULL,
  `homescreen_text` varchar(100) DEFAULT NULL,
  `poweredby` varchar(100) DEFAULT NULL,
  `banklogo` varchar(100) DEFAULT NULL,
  `desktop_image` varchar(100) DEFAULT NULL,
  `chq_Image` text DEFAULT NULL,
  `country` varchar(5) DEFAULT NULL,
  `help_employeeid` varchar(20) DEFAULT NULL,
  `help_helplineno1` varchar(30) DEFAULT NULL,
  `help_emailid` varchar(100) DEFAULT NULL,
  `autolockminutes` int(11) DEFAULT NULL,
  `help_contactperson` varchar(200) DEFAULT NULL,
  `help_helplineno2` varchar(20) DEFAULT NULL,
  `license_type` varchar(10) DEFAULT NULL,
  `license_install_date` date DEFAULT NULL,
  `license_period` int(11) DEFAULT NULL,
  `license_end_date` date DEFAULT NULL,
  `license_no_of_users` int(11) DEFAULT NULL,
  `license_cheque_leaves` int(11) DEFAULT NULL,
  `license_users_leaves` int(11) DEFAULT NULL,
  `license_users_leaves_value` int(11) DEFAULT NULL,
  `toner_leaves_capacity` int(11) DEFAULT NULL,
  `is_toner` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_cps_transactioncodes` (
  `transactioncode_id` int(11) NOT NULL AUTO_INCREMENT,
  `transactioncode` int(11) DEFAULT NULL,
  `transactioncodedescription` varchar(100) DEFAULT NULL,
  `transactionstatus` tinyint(4) NOT NULL DEFAULT 0,
  `alphacode` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`transactioncode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_cps_transactioncodes (transactioncode_id, transactioncode, transactioncodedescription, transactionstatus, alphacode) VALUES ('2','12','Pay Order','1','PO');

INSERT INTO tb_cps_transactioncodes (transactioncode_id, transactioncode, transactioncodedescription, transactionstatus, alphacode) VALUES ('3','11','Current','1','SA');

INSERT INTO tb_cps_transactioncodes (transactioncode_id, transactioncode, transactioncodedescription, transactionstatus, alphacode) VALUES ('4','13','Cash Credit','1','Cu');

INSERT INTO tb_cps_transactioncodes (transactioncode_id, transactioncode, transactioncodedescription, transactionstatus, alphacode) VALUES ('5','10','Saving','1','CC');


CREATE TABLE `tb_cps_weekdays` (
  `branch_workingday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) DEFAULT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `tuesday` tinyint(4) NOT NULL DEFAULT 0,
  `wednesday` tinyint(4) NOT NULL DEFAULT 0,
  `thursday` tinyint(4) NOT NULL DEFAULT 0,
  `friday` tinyint(4) NOT NULL DEFAULT 0,
  `saturday` tinyint(4) NOT NULL DEFAULT 0,
  `sunday` tinyint(4) NOT NULL DEFAULT 0,
  `opening_time` varchar(7) DEFAULT NULL,
  `closing_time` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`branch_workingday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_short_name` varchar(30) DEFAULT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `cust_address` text DEFAULT NULL,
  `cust_acc_no` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cust_id`),
  KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_manual_print` (
  `mp_Id` int(11) NOT NULL AUTO_INCREMENT,
  `mp_AccountHolder_Id` int(11) DEFAULT NULL,
  `mp_BookSize` int(11) DEFAULT NULL,
  `mp_NoOfBooks` int(11) DEFAULT NULL,
  `mp_Chk_From` int(11) DEFAULT NULL,
  `mp_Chk_To` int(11) DEFAULT NULL,
  PRIMARY KEY (`mp_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_pending_print_req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_code` int(10) unsigned DEFAULT NULL,
  `cps_branchmicr_code` int(10) unsigned DEFAULT NULL,
  `cps_account_no` varchar(15) DEFAULT NULL,
  `cps_act_name` varchar(45) DEFAULT NULL,
  `cps_no_of_books` int(10) unsigned DEFAULT NULL,
  `cps_dly_bearer_order` varchar(1) DEFAULT NULL,
  `cps_book_size` int(10) unsigned DEFAULT NULL,
  `cps_tr_code` int(10) unsigned DEFAULT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) DEFAULT NULL,
  `cps_act_jointname2` varchar(45) DEFAULT NULL,
  `cps_auth_sign1` varchar(35) DEFAULT NULL,
  `cps_auth_sign2` varchar(35) DEFAULT NULL,
  `cps_auth_sign3` varchar(35) DEFAULT NULL,
  `cps_act_address1` varchar(50) DEFAULT NULL,
  `cps_act_address2` varchar(50) DEFAULT NULL,
  `cps_act_address3` varchar(35) DEFAULT NULL,
  `cps_act_address4` varchar(35) DEFAULT NULL,
  `cps_act_address5` varchar(35) DEFAULT NULL,
  `cps_act_city` varchar(30) DEFAULT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(11) DEFAULT NULL,
  `cps_act_telephone_res` varchar(15) DEFAULT NULL,
  `cps_act_telephone_off` varchar(15) DEFAULT NULL,
  `cps_act_mobile` varchar(15) DEFAULT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(20) unsigned DEFAULT NULL,
  `cps_chq_no_to` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_account_no` int(10) unsigned DEFAULT NULL,
  `cps_date` date DEFAULT NULL,
  `cps_process_user_id` int(11) DEFAULT NULL,
  `cps_isprint` int(11) NOT NULL DEFAULT 0,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_print_req_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_code` int(10) unsigned DEFAULT NULL,
  `cps_branchmicr_code` int(10) unsigned DEFAULT NULL,
  `cps_account_no` varchar(15) DEFAULT NULL,
  `cps_act_name` varchar(45) DEFAULT NULL,
  `cps_no_of_books` int(10) unsigned DEFAULT NULL,
  `cps_dly_bearer_order` varchar(1) DEFAULT NULL,
  `cps_book_size` int(10) unsigned DEFAULT NULL,
  `cps_tr_code` int(10) unsigned DEFAULT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) DEFAULT NULL,
  `cps_act_jointname2` varchar(45) DEFAULT NULL,
  `cps_auth_sign1` varchar(35) DEFAULT NULL,
  `cps_auth_sign2` varchar(35) DEFAULT NULL,
  `cps_auth_sign3` varchar(35) DEFAULT NULL,
  `cps_act_address1` varchar(50) DEFAULT NULL,
  `cps_act_address2` varchar(50) DEFAULT NULL,
  `cps_act_address3` varchar(35) DEFAULT NULL,
  `cps_act_address4` varchar(35) DEFAULT NULL,
  `cps_act_address5` varchar(35) DEFAULT NULL,
  `cps_act_city` varchar(30) DEFAULT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(11) DEFAULT NULL,
  `cps_act_telephone_res` varchar(15) DEFAULT NULL,
  `cps_act_telephone_off` varchar(15) DEFAULT NULL,
  `cps_act_mobile` varchar(15) DEFAULT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(20) unsigned DEFAULT NULL,
  `cps_chq_no_to` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_account_no` int(10) unsigned DEFAULT NULL,
  `cps_date` date DEFAULT NULL,
  `cps_process_user_id` int(11) DEFAULT NULL,
  `cps_is_reprint` int(11) NOT NULL DEFAULT 0,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('72','249','411312006','6','078011300200073','NAMRATA LAND *DEVELOPERS','1','Y','10','10','','Joint name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','300056','300060','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('73','250','411312008','8','078011300100073','NAMRATA LAND $DEVELOPERS','1','Y','5','12','','Joint Name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','300061','300065','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('74','1249','411312006','6','078011300200073','NAMRATA LAND *DEVELOPERS','1','Y','5','10','','Joint name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','400056','400060','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('75','1250','411312008','8','078011300100073','NAMRATA LAND $DEVELOPERS','1','Y','5','12','','Joint Name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','400061','400065','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('76','2749','411312006','6','078011300200073','NAMRATA LAND *DEVELOPERS','1','Y','7','10','','Joint name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','800056','800060','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('77','2750','411312008','8','078011300100073','NAMRATA LAND $DEVELOPERS','1','Y','5','12','','Joint Name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','800061','800065','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('78','17249','411312006','6','078011300200073','NAMRATA LAND *DEVELOPERS','1','Y','5','10','','Joint name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','900056','900060','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('79','17250','411312008','8','078011300100073','NAMRATA LAND $DEVELOPERS','1','Y','5','12','','Joint Name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','900061','900065','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('80','9249','411312006','6','078011300200073','NAMRATA LAND *DEVELOPERS','1','Y','5','11','','Joint name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','320056','320060','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('81','9250','411312008','8','078011300100073','NAMRATA LAND $DEVELOPERS','1','Y','5','10','','Joint Name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','320061','320065','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('82','91249','411312006','6','078011300200073','NAMRATA LAND *DEVELOPERS','1','Y','5','11','','Joint name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','420056','420060','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('83','12540','411312008','8','078011300100073','NAMRATA LAND $DEVELOPERS','1','Y','5','12','','Joint Name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','420061','420065','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('84','92749','411312006','6','078011300200073','NAMRATA LAND *DEVELOPERS','1','Y','5','11','','Joint name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','820056','820060','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('85','92750','411312008','8','078011300100073','NAMRATA LAND $DEVELOPERS','1','Y','5','10','','Joint Name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','820061','820065','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('86','917249','411312006','6','078011300200073','NAMRATA LAND *DEVELOPERS','1','Y','5','11','','Joint name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','920056','920060','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('87','917250','411312008','8','078011300100073','NAMRATA LAND $DEVELOPERS','1','Y','5','12','','Joint Name 1','Joint Name 2','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','920061','920065','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('88','102452','411312006','6','078011300000043','#NAMRATA LAND "DEVELOPERS','2','Y','5','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','470011','470020','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_print_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('89','1024552','411312006','6','078051130000004','#NAMRATA LAND "DEVELOPERS','2','Y','5','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','470011','470020','43','2023-07-05','1','0','','1','','2017-10-06','023  ','');


CREATE TABLE `tb_print_sequence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_code` int(11) DEFAULT NULL,
  `cps_branchmicr_code` varchar(3) DEFAULT NULL,
  `cps_account_no` varchar(15) DEFAULT NULL,
  `cps_act_name` varchar(45) DEFAULT NULL,
  `cps_no_of_books` varchar(3) DEFAULT NULL,
  `cps_dly_bearer_order` varchar(1) DEFAULT NULL,
  `cps_book_size` varchar(3) DEFAULT NULL,
  `cps_tr_code` varchar(2) DEFAULT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) DEFAULT NULL,
  `cps_act_jointname2` varchar(45) DEFAULT NULL,
  `cps_auth_sign1` varchar(35) DEFAULT NULL,
  `cps_auth_sign2` varchar(35) DEFAULT NULL,
  `cps_auth_sign3` varchar(35) DEFAULT NULL,
  `cps_act_address1` varchar(50) DEFAULT NULL,
  `cps_act_address2` varchar(50) DEFAULT NULL,
  `cps_act_address3` varchar(35) DEFAULT NULL,
  `cps_act_address4` varchar(35) DEFAULT NULL,
  `cps_act_address5` varchar(35) DEFAULT NULL,
  `cps_act_city` varchar(30) DEFAULT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(11) DEFAULT NULL,
  `cps_act_telephone_res` varchar(15) DEFAULT NULL,
  `cps_act_telephone_off` varchar(15) DEFAULT NULL,
  `cps_act_mobile` varchar(15) DEFAULT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` varchar(6) DEFAULT NULL,
  `cps_chq_no_to` varchar(6) DEFAULT NULL,
  `cps_micr_account_no` varchar(6) DEFAULT NULL,
  `cps_date` date DEFAULT NULL,
  `cps_process_user_id` varchar(6) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_printadmin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `lastlogintime` datetime DEFAULT NULL,
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `incorrect_attempt` int(11) DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1,
  `password_status` int(11) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `is_temp_password` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_printadmin (username, password, lastlogintime, adminid, group_id, incorrect_attempt, user_status, password_status, user_type, userid, create_date, is_temp_password, updated_by, updated_at) VALUES ('Superadmin','$2y$10$tq1Fr3Ly9vaJb7fsKeulze2YFUigTB0N//u74J1B8BZ4F1w.80ZSO','2023-06-21 07:31:28','1','0','0','1','1','0','superadmin','2023-06-21','1','','');

INSERT INTO tb_printadmin (username, password, lastlogintime, adminid, group_id, incorrect_attempt, user_status, password_status, user_type, userid, create_date, is_temp_password, updated_by, updated_at) VALUES ('reprint','$2y$10$DVNtalwTmN/2Sx8.1OXQWewt2QzlAVxiG4TMXweOesPTr9.423m.C','2023-07-03 04:14:25','2','','','1','1','1','reprint','2023-07-03','1','','');

INSERT INTO tb_printadmin (username, password, lastlogintime, adminid, group_id, incorrect_attempt, user_status, password_status, user_type, userid, create_date, is_temp_password, updated_by, updated_at) VALUES ('Siddhi','$2y$10$C3HjtCyvhT7aCyxcKLrND.bSpQoOUK0LSEShV.7Y86b5NbVCODSaG','2023-07-03 06:27:27','3','','','1','1','1','Siddhi','2023-07-03','1','','');


CREATE TABLE `tb_printque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_code` int(10) unsigned DEFAULT NULL,
  `cps_branchmicr_code` int(10) unsigned DEFAULT NULL,
  `cps_account_no` varchar(15) DEFAULT NULL,
  `cps_act_name` varchar(45) DEFAULT NULL,
  `cps_no_of_books` int(10) unsigned DEFAULT NULL,
  `cps_dly_bearer_order` varchar(1) DEFAULT NULL,
  `cps_book_size` int(10) unsigned DEFAULT NULL,
  `cps_tr_code` int(10) unsigned DEFAULT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) DEFAULT NULL,
  `cps_act_jointname2` varchar(45) DEFAULT NULL,
  `cps_auth_sign1` varchar(35) DEFAULT NULL,
  `cps_auth_sign2` varchar(35) DEFAULT NULL,
  `cps_auth_sign3` varchar(35) DEFAULT NULL,
  `cps_act_address1` varchar(50) DEFAULT NULL,
  `cps_act_address2` varchar(50) DEFAULT NULL,
  `cps_act_address3` varchar(35) DEFAULT NULL,
  `cps_act_address4` varchar(35) DEFAULT NULL,
  `cps_act_address5` varchar(35) DEFAULT NULL,
  `cps_act_city` varchar(30) DEFAULT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(11) DEFAULT NULL,
  `cps_act_telephone_res` varchar(15) DEFAULT NULL,
  `cps_act_telephone_off` varchar(15) DEFAULT NULL,
  `cps_act_mobile` varchar(15) DEFAULT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(20) unsigned DEFAULT NULL,
  `cps_chq_no_to` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_account_no` int(10) unsigned DEFAULT NULL,
  `cps_date` date DEFAULT NULL,
  `cps_process_user_id` int(11) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tb_reprint_req_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_code` int(10) unsigned DEFAULT NULL,
  `cps_branchmicr_code` int(10) unsigned DEFAULT NULL,
  `cps_account_no` varchar(15) DEFAULT NULL,
  `cps_act_name` varchar(45) DEFAULT NULL,
  `cps_no_of_books` int(10) unsigned DEFAULT NULL,
  `cps_dly_bearer_order` varchar(1) DEFAULT NULL,
  `cps_book_size` int(10) unsigned DEFAULT NULL,
  `cps_tr_code` int(10) unsigned DEFAULT NULL,
  `cps_atpar` varchar(10) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) DEFAULT NULL,
  `cps_act_jointname2` varchar(45) DEFAULT NULL,
  `cps_auth_sign1` varchar(35) DEFAULT NULL,
  `cps_auth_sign2` varchar(35) DEFAULT NULL,
  `cps_auth_sign3` varchar(35) DEFAULT NULL,
  `cps_act_address1` varchar(50) DEFAULT NULL,
  `cps_act_address2` varchar(50) DEFAULT NULL,
  `cps_act_address3` varchar(35) DEFAULT NULL,
  `cps_act_address4` varchar(35) DEFAULT NULL,
  `cps_act_address5` varchar(35) DEFAULT NULL,
  `cps_act_city` varchar(30) DEFAULT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(11) DEFAULT NULL,
  `cps_act_telephone_res` varchar(15) DEFAULT NULL,
  `cps_act_telephone_off` varchar(15) DEFAULT NULL,
  `cps_act_mobile` varchar(15) DEFAULT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(20) unsigned DEFAULT NULL,
  `cps_chq_no_to` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_account_no` int(10) unsigned DEFAULT NULL,
  `cps_date` date DEFAULT NULL,
  `cps_process_user_id` int(11) DEFAULT NULL,
  `cps_is_reprint` int(11) NOT NULL DEFAULT 0,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_reprint_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('8','102','411312006','6','078011300000073','NAMRATA LAND *DEVELOPERS','1','Y','5','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','100021','100025','43','2023-07-03','2','0','','1','','','023  ','');

INSERT INTO tb_reprint_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('9','102','411312006','6','078011300000043','NAMRATA LAND \DEVELOPERS','1','Y','5','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','100001','100005','43','2023-07-03','2','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_reprint_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('10','102','411312006','6','078011300009843','#NAMRATA LAND "DEVELOPERS','2','Y','5','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','300011','300020','43','2023-07-03','2','0','','1','','2017-10-06','023  ','');

INSERT INTO tb_reprint_req_collection (id, cps_unique_req, cps_micr_code, cps_branchmicr_code, cps_account_no, cps_act_name, cps_no_of_books, cps_dly_bearer_order, cps_book_size, cps_tr_code, cps_atpar, cps_act_jointname1, cps_act_jointname2, cps_auth_sign1, cps_auth_sign2, cps_auth_sign3, cps_act_address1, cps_act_address2, cps_act_address3, cps_act_address4, cps_act_address5, cps_act_city, cps_state, cps_country, cps_emailid, cps_act_pin, cps_act_telephone_res, cps_act_telephone_off, cps_act_mobile, cps_ifsc_code, cps_chq_no_from, cps_chq_no_to, cps_micr_account_no, cps_date, cps_process_user_id, cps_is_reprint, cps_pr_code, cps_bsr_code, cps_short_name, cps_issue_date, cps_product_code, branch_sub_code) VALUES ('11','102','411312006','6','078011300000073','NAMRATA LAND *DEVELOPERS','1','Y','5','11','','','','Proprietor','','','     ,SUCCESS MARKET','PUNA NASHIK HIGHWAY','CHAKAN              PUNE','','','PUNE','','','','410501','86988844','','9922884466','','100021','100025','43','2023-07-03','2','0','','1','','2017-10-06','023  ','');


CREATE TABLE `tb_statemaster` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_code` varchar(7) DEFAULT NULL,
  `state_name_al` varchar(4) DEFAULT NULL,
  `is_delete` int(11) DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tb_statemaster (state_id, state_name, country_id, state_code, state_name_al, is_delete) VALUES ('1','Maharastra','1','Mah001','Mah','1');

INSERT INTO tb_statemaster (state_id, state_name, country_id, state_code, state_name_al, is_delete) VALUES ('2','Pune','1','Pun001','Pun','1');


CREATE TABLE `tb_uploadingdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(20) unsigned DEFAULT NULL,
  `cps_micr_code` int(11) DEFAULT NULL,
  `cps_branchmicr_code` varchar(3) DEFAULT NULL,
  `cps_account_no` varchar(15) DEFAULT NULL,
  `cps_act_name` varchar(45) DEFAULT NULL,
  `cps_no_of_books` varchar(2) DEFAULT NULL,
  `cps_dly_bearer_order` varchar(1) DEFAULT NULL,
  `cps_book_size` varchar(3) DEFAULT NULL,
  `cps_tr_code` varchar(2) DEFAULT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) DEFAULT NULL,
  `cps_act_jointname2` varchar(45) DEFAULT NULL,
  `cps_auth_sign1` varchar(35) DEFAULT NULL,
  `cps_auth_sign2` varchar(35) DEFAULT NULL,
  `cps_auth_sign3` varchar(35) DEFAULT NULL,
  `cps_act_address1` varchar(50) DEFAULT NULL,
  `cps_act_address2` varchar(50) DEFAULT NULL,
  `cps_act_address3` varchar(35) DEFAULT NULL,
  `cps_act_address4` varchar(35) DEFAULT NULL,
  `cps_act_address5` varchar(35) DEFAULT NULL,
  `cps_act_city` varchar(30) DEFAULT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int(11) DEFAULT NULL,
  `cps_act_telephone_res` varchar(15) DEFAULT NULL,
  `cps_act_telephone_off` varchar(15) DEFAULT NULL,
  `cps_act_mobile` varchar(15) DEFAULT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` varchar(6) DEFAULT NULL,
  `cps_chq_no_to` varchar(6) DEFAULT NULL,
  `cps_micr_account_no` varchar(6) DEFAULT NULL,
  `cps_date` date DEFAULT NULL,
  `cps_process_user_id` varchar(6) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

