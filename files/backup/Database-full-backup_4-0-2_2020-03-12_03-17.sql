#
# TABLE STRUCTURE FOR: article_has_attachments
#

DROP TABLE IF EXISTS `article_has_attachments`;

CREATE TABLE `article_has_attachments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `article_id` bigint(20) DEFAULT NULL,
  `filename` varchar(250) DEFAULT NULL,
  `savename` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: clients
#

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(140) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(180) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `zipcode` varchar(30) DEFAULT NULL,
  `userpic` varchar(150) DEFAULT 'no-pic.png',
  `city` varchar(45) DEFAULT NULL,
  `hashed_password` varchar(255) DEFAULT NULL,
  `inactive` tinyint(4) DEFAULT '0',
  `access` varchar(150) DEFAULT '0',
  `last_active` varchar(50) DEFAULT NULL,
  `last_login` varchar(50) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `signature` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: companies
#

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` int(11) NOT NULL,
  `name` varchar(140) DEFAULT NULL,
  `client_id` varchar(140) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `zipcode` varchar(30) NOT NULL,
  `city` varchar(45) DEFAULT NULL,
  `inactive` tinyint(4) DEFAULT '0',
  `website` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `vat` varchar(250) DEFAULT NULL,
  `note` longtext,
  `province` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `terms` text,
  `custaccountid` varchar(255) DEFAULT '',
  `individual` int(1) unsigned NOT NULL DEFAULT '0',
  `email` varchar(128) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: company_has_admins
#

DROP TABLE IF EXISTS `company_has_admins`;

CREATE TABLE `company_has_admins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `access` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: core
#

DROP TABLE IF EXISTS `core`;

CREATE TABLE `core` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` char(10) NOT NULL DEFAULT '0',
  `domain` varchar(65) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `tax` varchar(5) DEFAULT NULL,
  `second_tax` varchar(5) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `autobackup` int(11) DEFAULT NULL,
  `cronjob` int(11) DEFAULT NULL,
  `last_cronjob` int(11) DEFAULT NULL,
  `last_autobackup` int(11) DEFAULT NULL,
  `invoice_terms` mediumtext,
  `company_reference` int(6) DEFAULT NULL,
  `project_reference` int(6) DEFAULT NULL,
  `invoice_reference` int(6) DEFAULT NULL,
  `subscription_reference` int(6) DEFAULT NULL,
  `ticket_reference` int(10) DEFAULT NULL,
  `date_format` varchar(20) DEFAULT NULL,
  `date_time_format` varchar(20) DEFAULT NULL,
  `invoice_mail_subject` varchar(150) DEFAULT NULL,
  `pw_reset_mail_subject` varchar(150) DEFAULT NULL,
  `pw_reset_link_mail_subject` varchar(150) DEFAULT NULL,
  `credentials_mail_subject` varchar(150) DEFAULT NULL,
  `notification_mail_subject` varchar(150) DEFAULT NULL,
  `language` varchar(150) DEFAULT NULL,
  `invoice_address` varchar(200) DEFAULT NULL,
  `invoice_city` varchar(200) DEFAULT NULL,
  `invoice_contact` varchar(200) DEFAULT NULL,
  `invoice_tel` varchar(50) DEFAULT NULL,
  `subscription_mail_subject` varchar(250) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `template` varchar(200) DEFAULT 'default',
  `paypal` varchar(5) DEFAULT '1',
  `paypal_currency` varchar(200) DEFAULT 'EUR',
  `paypal_account` varchar(200) DEFAULT 'luxsys@luxsys-apps.com',
  `invoice_logo` varchar(150) DEFAULT 'assets/blackline/img/invoice_logo.png',
  `pc` varchar(150) DEFAULT NULL,
  `vat` varchar(150) DEFAULT NULL,
  `ticket_email` varchar(250) DEFAULT NULL,
  `ticket_default_owner` int(10) DEFAULT '1',
  `ticket_default_queue` int(10) DEFAULT '1',
  `ticket_default_type` int(10) DEFAULT '1',
  `ticket_default_status` varchar(200) DEFAULT 'new',
  `ticket_config_host` varchar(250) DEFAULT NULL,
  `ticket_config_login` varchar(250) DEFAULT NULL,
  `ticket_config_pass` varchar(250) DEFAULT NULL,
  `ticket_config_port` varchar(250) DEFAULT NULL,
  `ticket_config_ssl` varchar(250) DEFAULT NULL,
  `ticket_config_email` varchar(250) DEFAULT NULL,
  `ticket_config_flags` varchar(250) DEFAULT '/notls',
  `ticket_config_search` varchar(250) DEFAULT 'UNSEEN',
  `ticket_config_timestamp` int(11) DEFAULT NULL,
  `ticket_config_mailbox` varchar(250) DEFAULT NULL,
  `ticket_config_delete` int(11) DEFAULT NULL,
  `ticket_config_active` int(11) DEFAULT NULL,
  `ticket_config_imap` int(11) DEFAULT '1',
  `stripe` int(11) DEFAULT '0',
  `stripe_key` varchar(250) DEFAULT NULL,
  `stripe_p_key` varchar(255) DEFAULT NULL,
  `bank_transfer` int(11) DEFAULT NULL,
  `bank_transfer_text` longtext,
  `stripe_currency` varchar(255) NOT NULL DEFAULT 'USD',
  `estimate_terms` longtext,
  `estimate_prefix` varchar(255) NOT NULL DEFAULT 'EST',
  `estimate_pdf_template` varchar(255) NOT NULL DEFAULT 'templates/estimate/default',
  `invoice_pdf_template` varchar(255) NOT NULL DEFAULT 'invoices/preview',
  `estimate_mail_subject` varchar(255) NOT NULL DEFAULT 'New Estimate #{estimate_id}',
  `money_currency_position` int(5) NOT NULL DEFAULT '1',
  `money_format` int(5) NOT NULL DEFAULT '1',
  `pdf_font` varchar(255) NOT NULL DEFAULT 'NotoSans',
  `pdf_path` int(10) NOT NULL DEFAULT '1',
  `registration` int(10) NOT NULL DEFAULT '0',
  `authorize_api_login_id` varchar(255) DEFAULT NULL,
  `authorize_api_transaction_key` varchar(255) DEFAULT NULL,
  `authorize_net` int(20) DEFAULT '0',
  `authorize_currency` varchar(30) DEFAULT NULL,
  `invoice_prefix` varchar(255) DEFAULT NULL,
  `company_prefix` varchar(255) DEFAULT NULL,
  `quotation_prefix` varchar(255) DEFAULT NULL,
  `project_prefix` varchar(255) DEFAULT NULL,
  `subscription_prefix` varchar(255) DEFAULT NULL,
  `calendar_google_api_key` varchar(255) DEFAULT NULL,
  `calendar_google_event_address` varchar(255) DEFAULT NULL,
  `default_client_modules` varchar(255) DEFAULT NULL,
  `estimate_reference` int(10) DEFAULT '0',
  `login_background` varchar(255) DEFAULT 'blur.jpg',
  `custom_colors` int(1) DEFAULT '1',
  `top_bar_background` varchar(60) DEFAULT '#FFFFFF',
  `top_bar_color` varchar(60) DEFAULT '#333333',
  `body_background` varchar(60) DEFAULT '#e3e6ed',
  `menu_background` varchar(60) DEFAULT '#173240',
  `menu_color` varchar(60) DEFAULT '#FFFFFF',
  `primary_color` varchar(60) DEFAULT '#356cc9',
  `twocheckout_seller_id` varchar(250) DEFAULT NULL,
  `twocheckout_publishable_key` varchar(250) DEFAULT NULL,
  `twocheckout_private_key` varchar(250) DEFAULT NULL,
  `twocheckout` int(11) DEFAULT '0',
  `twocheckout_currency` varchar(250) DEFAULT NULL,
  `login_logo` varchar(255) DEFAULT NULL,
  `login_style` varchar(255) DEFAULT 'left',
  `reference_lenght` int(20) DEFAULT NULL,
  `stripe_ideal` int(1) DEFAULT NULL,
  `zip_position` varchar(60) DEFAULT 'left',
  `timezone` varchar(255) DEFAULT NULL,
  `notifications` int(1) unsigned DEFAULT '0',
  `last_notification` varchar(100) DEFAULT NULL,
  `receipt_mail_subject` varchar(200) DEFAULT NULL,
  `task_complete_mail_subject` varchar(150) DEFAULT 'Task completed',
  `sendmail_on_taskcomplete` int(1) NOT NULL DEFAULT '0',
  `sendmail_on_taskassign` int(1) NOT NULL DEFAULT '0',
  `task_assign_mail_subject` varchar(150) DEFAULT 'Task assigned',
  `zipcode` varchar(128) DEFAULT '',
  `max_table_row` int(4) unsigned NOT NULL DEFAULT '100',
  `disclaimer` mediumtext,
  `sendmail_on_overdue` int(1) NOT NULL DEFAULT '0',
  `sendmail_on_overduexperiod` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `core` (`id`, `version`, `domain`, `email`, `company`, `tax`, `second_tax`, `currency`, `autobackup`, `cronjob`, `last_cronjob`, `last_autobackup`, `invoice_terms`, `company_reference`, `project_reference`, `invoice_reference`, `subscription_reference`, `ticket_reference`, `date_format`, `date_time_format`, `invoice_mail_subject`, `pw_reset_mail_subject`, `pw_reset_link_mail_subject`, `credentials_mail_subject`, `notification_mail_subject`, `language`, `invoice_address`, `invoice_city`, `invoice_contact`, `invoice_tel`, `subscription_mail_subject`, `logo`, `template`, `paypal`, `paypal_currency`, `paypal_account`, `invoice_logo`, `pc`, `vat`, `ticket_email`, `ticket_default_owner`, `ticket_default_queue`, `ticket_default_type`, `ticket_default_status`, `ticket_config_host`, `ticket_config_login`, `ticket_config_pass`, `ticket_config_port`, `ticket_config_ssl`, `ticket_config_email`, `ticket_config_flags`, `ticket_config_search`, `ticket_config_timestamp`, `ticket_config_mailbox`, `ticket_config_delete`, `ticket_config_active`, `ticket_config_imap`, `stripe`, `stripe_key`, `stripe_p_key`, `bank_transfer`, `bank_transfer_text`, `stripe_currency`, `estimate_terms`, `estimate_prefix`, `estimate_pdf_template`, `invoice_pdf_template`, `estimate_mail_subject`, `money_currency_position`, `money_format`, `pdf_font`, `pdf_path`, `registration`, `authorize_api_login_id`, `authorize_api_transaction_key`, `authorize_net`, `authorize_currency`, `invoice_prefix`, `company_prefix`, `quotation_prefix`, `project_prefix`, `subscription_prefix`, `calendar_google_api_key`, `calendar_google_event_address`, `default_client_modules`, `estimate_reference`, `login_background`, `custom_colors`, `top_bar_background`, `top_bar_color`, `body_background`, `menu_background`, `menu_color`, `primary_color`, `twocheckout_seller_id`, `twocheckout_publishable_key`, `twocheckout_private_key`, `twocheckout`, `twocheckout_currency`, `login_logo`, `login_style`, `reference_lenght`, `stripe_ideal`, `zip_position`, `timezone`, `notifications`, `last_notification`, `receipt_mail_subject`, `task_complete_mail_subject`, `sendmail_on_taskcomplete`, `sendmail_on_taskassign`, `task_assign_mail_subject`, `zipcode`, `max_table_row`, `disclaimer`, `sendmail_on_overdue`, `sendmail_on_overduexperiod`) VALUES (1, '4.0.2', 'http://office.solutionweb.io/', 'local@localhost', 'My Company', '0', NULL, 'USD', 1, 1, 0, 0, 'Thank you for your business. We do expect payment within {due_date}, so please process this invoice within that time.', 41001, 51001, 31001, 61001, 10000, 'Y/m/d', 'g:i A', 'New Invoice', 'Password Reset', 'Password Reset', 'Login Details', 'Notification', 'english', '', '', '', '', 'New Subscription', 'assets/blueline/images/FC2_logo_light.png', 'blueline', '0', 'USD', '', 'assets/blueline/images/FC2_logo_dark.png', '692973f4-5ba2-4fb9-a3db-f759dd9b69b5', NULL, NULL, 1, 1, 1, 'new', NULL, NULL, NULL, NULL, NULL, NULL, '/notls', 'UNSEEN', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, 'USD', NULL, 'EST', 'templates/estimate/default', 'invoices/preview', 'New Estimate #{estimate_id}', 1, 1, 'NotoSans', 1, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20000, 'blur.jpg', 1, '#FFFFFF', '#333333', '#e3e6ed', '#173240', '#FFFFFF', '#356cc9', NULL, NULL, NULL, 0, NULL, NULL, 'left', NULL, NULL, 'left', NULL, 0, NULL, NULL, 'Task completed', 0, 0, 'Task assigned', '', 100, NULL, 0, 0);


#
# TABLE STRUCTURE FOR: custom_quotation_requests
#

DROP TABLE IF EXISTS `custom_quotation_requests`;

CREATE TABLE `custom_quotation_requests` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `form` longtext,
  `custom_quotation_id` int(11) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: custom_quotations
#

DROP TABLE IF EXISTS `custom_quotations`;

CREATE TABLE `custom_quotations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `formcontent` longtext,
  `inactive` int(250) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `created` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: events
#

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `allday` varchar(30) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `classname` varchar(255) DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT '0',
  `access` varchar(255) DEFAULT NULL,
  `reminder` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: expenses
#

DROP TABLE IF EXISTS `expenses`;

CREATE TABLE `expenses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `value` float(20,2) DEFAULT '0.00',
  `vat` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `project_id` bigint(20) DEFAULT '0',
  `rebill` int(20) DEFAULT '0',
  `invoice_id` bigint(20) DEFAULT '0',
  `attachment` varchar(255) DEFAULT NULL,
  `attachment_description` varchar(255) DEFAULT NULL,
  `recurring` varchar(255) DEFAULT NULL,
  `recurring_until` varchar(255) DEFAULT NULL,
  `user_id` int(20) DEFAULT '0',
  `expense_id` int(20) DEFAULT '0',
  `next_payment` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: invoice_has_items
#

DROP TABLE IF EXISTS `invoice_has_items`;

CREATE TABLE `invoice_has_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT '0',
  `item_id` int(11) DEFAULT '0',
  `amount` char(11) DEFAULT NULL,
  `description` mediumtext,
  `value` float DEFAULT '0',
  `name` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: invoice_has_payments
#

DROP TABLE IF EXISTS `invoice_has_payments`;

CREATE TABLE `invoice_has_payments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` bigint(20) DEFAULT '0',
  `reference` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT '0',
  `date` varchar(20) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `notes` text,
  `user_id` bigint(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: invoices
#

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sum` float NOT NULL DEFAULT '0',
  `estimate_sent` varchar(255) NOT NULL DEFAULT '0',
  `estimate_status` varchar(255) NOT NULL DEFAULT '0',
  `project_id` int(11) DEFAULT '0',
  `reference` int(11) DEFAULT '0',
  `company_id` int(11) DEFAULT '0',
  `status` varchar(50) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `issue_date` varchar(20) DEFAULT NULL,
  `due_date` varchar(20) DEFAULT NULL,
  `sent_date` varchar(20) DEFAULT NULL,
  `paid_date` varchar(20) DEFAULT NULL,
  `terms` mediumtext,
  `discount` varchar(50) DEFAULT NULL,
  `subscription_id` varchar(50) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `second_tax` varchar(5) DEFAULT NULL,
  `estimate` int(11) DEFAULT '0',
  `estimate_accepted_date` varchar(255) DEFAULT NULL,
  `paid` float DEFAULT '0',
  `outstanding` float DEFAULT NULL,
  `estimate_reference` int(10) DEFAULT '0',
  `po_number` varchar(250) DEFAULT NULL,
  `warned` int(1) unsigned NOT NULL DEFAULT '0',
  `warnedxperiod` int(1) unsigned NOT NULL DEFAULT '0',
  `category` varchar(128) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: items
#

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `value` float DEFAULT '0',
  `type` varchar(45) DEFAULT NULL,
  `inactive` tinyint(4) DEFAULT '0',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: lead_has_comments
#

DROP TABLE IF EXISTS `lead_has_comments`;

CREATE TABLE `lead_has_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `attachment` varchar(250) DEFAULT NULL,
  `attachment_link` varchar(250) DEFAULT NULL,
  `datetime` varchar(250) DEFAULT NULL,
  `message` text,
  `user_id` bigint(20) DEFAULT '0',
  `lead_id` bigint(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: lead_status
#

DROP TABLE IF EXISTS `lead_status`;

CREATE TABLE `lead_status` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` text,
  `order` float DEFAULT '0',
  `offset` bigint(200) DEFAULT '0',
  `limit` bigint(200) DEFAULT '50',
  `color` varchar(100) DEFAULT '#5071ab',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: leads
#

DROP TABLE IF EXISTS `leads`;

CREATE TABLE `leads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` bigint(20) DEFAULT '0',
  `source` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `zipcode` varchar(250) DEFAULT NULL,
  `language` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `company` varchar(250) DEFAULT NULL,
  `tags` varchar(255) DEFAULT '',
  `description` text,
  `first_contact` varchar(250) DEFAULT NULL,
  `last_contact` varchar(250) DEFAULT NULL,
  `valid_until` varchar(250) DEFAULT NULL,
  `created` varchar(20) DEFAULT NULL,
  `modified` varchar(20) DEFAULT NULL,
  `private` varchar(20) DEFAULT '0',
  `custom` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT '0',
  `icon` varchar(255) DEFAULT NULL,
  `order` float DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: loginsessions
#

DROP TABLE IF EXISTS `loginsessions`;

CREATE TABLE `loginsessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` varchar(128) NOT NULL,
  `agent` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: messages
#

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT '0',
  `media_id` int(11) DEFAULT '0',
  `from` varchar(120) DEFAULT NULL,
  `text` text,
  `datetime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: migrations
#

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `migrations` (`version`) VALUES ('61');


#
# TABLE STRUCTURE FOR: modules
#

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;

INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (1, 'Dashboard', 'dashboard', 'main', 'icon dripicons-meter', 1);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (2, 'Messages', 'messages', 'main', 'icon dripicons-message', 2);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (3, 'Projects', 'projects', 'main', 'icon dripicons-rocket', 3);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (4, 'Clients', 'clients', 'main', 'icon dripicons-user', 4);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (5, 'Invoices', 'invoices', 'main', 'icon dripicons-document', 5);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (6, 'Items', 'items', 'main', 'icon dripicons-shopping-bag', 7);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (7, 'Quotations', 'quotations', 'main', 'icon dripicons-blog', 8);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (8, 'Subscriptions', 'subscriptions', 'main', 'icon dripicons-retweet', 6);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (9, 'Settings', 'settings', 'main', 'icon dripicons-toggles', 20);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (10, 'QuickAccess', 'quickaccess', 'widget', '', 50);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (11, 'User Online', 'useronline', 'widget', '', 51);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (12, 'Estimates', 'estimates', 'main', 'icon dripicons-document-edit', 5);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (13, 'Expenses', 'expenses', 'main', 'icon dripicons-cart', 5);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (20, 'Calendar', 'calendar', 'main', 'icon dripicons-calendar', 8);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (33, 'Reports', 'reports', 'main', 'icon dripicons-graph-pie', 8);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (101, 'Projects', 'cprojects', 'client', 'icon dripicons-rocket', 2);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (102, 'Invoices', 'cinvoices', 'client', 'icon dripicons-document', 3);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (103, 'Messages', 'cmessages', 'client', 'icon dripicons-message', 1);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (104, 'Subscriptions', 'csubscriptions', 'client', 'icon dripicons-retweet', 4);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (105, 'Tickets', 'tickets', 'main', 'icon dripicons-ticket', 8);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (106, 'Tickets', 'ctickets', 'client', 'icon dripicons-ticket', 4);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (107, 'Estimates', 'cestimates', 'client', 'icon dripicons-document-edit', 3);
INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES (108, 'Leads', 'leads', 'main', 'icon dripicons-phone', 4);


#
# TABLE STRUCTURE FOR: privatemessages
#

DROP TABLE IF EXISTS `privatemessages`;

CREATE TABLE `privatemessages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(150) DEFAULT NULL,
  `sender` varchar(250) DEFAULT NULL,
  `recipient` varchar(250) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `time` varchar(100) DEFAULT NULL,
  `conversation` varchar(255) DEFAULT '',
  `deleted` int(11) DEFAULT '0',
  `attachment` varchar(255) DEFAULT NULL,
  `attachment_link` varchar(255) DEFAULT NULL,
  `receiver_delete` int(11) DEFAULT '0',
  `marked` int(1) DEFAULT '0',
  `read` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: project_has_activities
#

DROP TABLE IF EXISTS `project_has_activities`;

CREATE TABLE `project_has_activities` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `project_id` bigint(20) DEFAULT '0',
  `user_id` bigint(20) DEFAULT '0',
  `client_id` bigint(20) DEFAULT '0',
  `datetime` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` text,
  `type` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: project_has_files
#

DROP TABLE IF EXISTS `project_has_files`;

CREATE TABLE `project_has_files` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT '0',
  `user_id` int(10) DEFAULT '0',
  `client_id` int(10) DEFAULT '0',
  `type` varchar(80) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `filename` varchar(150) DEFAULT NULL,
  `description` text,
  `savename` varchar(200) DEFAULT NULL,
  `phase` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `download_counter` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: project_has_invoices
#

DROP TABLE IF EXISTS `project_has_invoices`;

CREATE TABLE `project_has_invoices` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `project_id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: project_has_milestones
#

DROP TABLE IF EXISTS `project_has_milestones`;

CREATE TABLE `project_has_milestones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `due_date` varchar(255) DEFAULT NULL,
  `orderindex` int(11) DEFAULT '0',
  `start_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: project_has_tasks
#

DROP TABLE IF EXISTS `project_has_tasks`;

CREATE TABLE `project_has_tasks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `public` int(10) DEFAULT NULL,
  `datetime` int(11) DEFAULT NULL,
  `due_date` varchar(250) DEFAULT NULL,
  `description` text,
  `start_date` varchar(250) DEFAULT NULL,
  `value` float DEFAULT '0',
  `priority` smallint(6) DEFAULT '0',
  `time` int(11) DEFAULT NULL,
  `client_id` int(30) DEFAULT '0',
  `created_by_client` int(30) DEFAULT '0',
  `tracking` int(11) DEFAULT '0',
  `time_spent` int(11) DEFAULT '0',
  `milestone_id` int(11) DEFAULT '0',
  `invoice_id` int(60) DEFAULT '0',
  `milestone_order` int(11) DEFAULT '0',
  `task_order` int(11) DEFAULT '0',
  `progress` int(11) DEFAULT '0',
  `created_at` varchar(50) DEFAULT NULL,
  `warned` int(1) unsigned NOT NULL DEFAULT '0',
  `warnedxperiod` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: project_has_timesheets
#

DROP TABLE IF EXISTS `project_has_timesheets`;

CREATE TABLE `project_has_timesheets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `time` varchar(250) DEFAULT '0',
  `task_id` int(11) DEFAULT '0',
  `client_id` int(11) DEFAULT '0',
  `start` varchar(250) DEFAULT '0',
  `end` varchar(250) DEFAULT '0',
  `invoice_id` int(11) DEFAULT '0',
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: project_has_workers
#

DROP TABLE IF EXISTS `project_has_workers`;

CREATE TABLE `project_has_workers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: projects
#

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` int(11) DEFAULT '0',
  `name` varchar(65) DEFAULT NULL,
  `description` text,
  `start` varchar(20) DEFAULT NULL,
  `end` varchar(20) DEFAULT NULL,
  `progress` decimal(3,0) DEFAULT NULL,
  `phases` varchar(150) DEFAULT NULL,
  `tracking` int(11) DEFAULT '0',
  `time_spent` int(11) DEFAULT '0',
  `datetime` int(11) DEFAULT '0',
  `sticky` enum('1','0') DEFAULT '0',
  `category` varchar(150) DEFAULT NULL,
  `company_id` int(11) DEFAULT '0',
  `note` longtext,
  `progress_calc` tinyint(4) DEFAULT '0',
  `hide_tasks` int(1) DEFAULT '0',
  `enable_client_tasks` int(1) DEFAULT '0',
  `status` varchar(128) DEFAULT 'notstarted',
  `privnote` int(1) unsigned NOT NULL DEFAULT '0',
  `warned` int(1) unsigned NOT NULL DEFAULT '0',
  `warnedxperiod` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: pw_reset
#

DROP TABLE IF EXISTS `pw_reset`;

CREATE TABLE `pw_reset` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  `timestamp` varchar(250) DEFAULT NULL,
  `token` varchar(250) DEFAULT NULL,
  `user` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: queues
#

DROP TABLE IF EXISTS `queues`;

CREATE TABLE `queues` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `inactive` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `queues` (`id`, `name`, `description`, `inactive`) VALUES ('1', 'Service', 'First service queue', 0);
INSERT INTO `queues` (`id`, `name`, `description`, `inactive`) VALUES ('2', 'Second Level', 'Second Level Queue', 0);


#
# TABLE STRUCTURE FOR: quotations
#

DROP TABLE IF EXISTS `quotations`;

CREATE TABLE `quotations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1` varchar(50) DEFAULT NULL,
  `q2` varchar(50) DEFAULT NULL,
  `q3` varchar(50) DEFAULT NULL,
  `q4` varchar(150) DEFAULT NULL,
  `q5` text,
  `q6` varchar(50) DEFAULT NULL,
  `company` varchar(150) DEFAULT '-',
  `fullname` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `zip` varchar(150) DEFAULT NULL,
  `country` varchar(150) DEFAULT NULL,
  `comment` text,
  `date` varchar(50) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `user_id` int(50) DEFAULT '0',
  `replied` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: reminders
#

DROP TABLE IF EXISTS `reminders`;

CREATE TABLE `reminders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(250) DEFAULT NULL,
  `source_id` bigint(20) DEFAULT '0',
  `title` varchar(250) DEFAULT NULL,
  `body` text,
  `email_notification` int(1) DEFAULT '0',
  `done` int(1) DEFAULT '0',
  `datetime` varchar(50) DEFAULT NULL,
  `sent_at` varchar(50) DEFAULT NULL,
  `user_id` int(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: subscription_has_items
#

DROP TABLE IF EXISTS `subscription_has_items`;

CREATE TABLE `subscription_has_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subscription_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `amount` char(11) DEFAULT '0',
  `description` mediumtext,
  `value` float DEFAULT '0',
  `name` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: subscriptions
#

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reference` varchar(50) DEFAULT NULL,
  `company_id` int(10) DEFAULT '0',
  `status` varchar(50) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `issue_date` varchar(20) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `frequency` varchar(20) DEFAULT NULL,
  `next_payment` varchar(20) DEFAULT NULL,
  `terms` mediumtext,
  `discount` varchar(50) DEFAULT NULL,
  `tax` varchar(250) DEFAULT NULL,
  `second_tax` varchar(255) DEFAULT NULL,
  `subscribed` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: task_has_comments
#

DROP TABLE IF EXISTS `task_has_comments`;

CREATE TABLE `task_has_comments` (
  `id` bigint(255) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `message` text,
  `datetime` varchar(20) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `task_id` bigint(20) DEFAULT NULL,
  `attachment_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: templates
#

DROP TABLE IF EXISTS `templates`;

CREATE TABLE `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `text` text,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: ticket_has_articles
#

DROP TABLE IF EXISTS `ticket_has_articles`;

CREATE TABLE `ticket_has_articles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) DEFAULT '0',
  `from` varchar(250) NOT NULL,
  `reply_to` varchar(250) DEFAULT NULL,
  `to` varchar(250) DEFAULT NULL,
  `cc` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` text,
  `datetime` varchar(250) DEFAULT NULL,
  `internal` int(10) DEFAULT '1',
  `user_id` bigint(20) DEFAULT '0',
  `note` int(1) DEFAULT '0',
  `raw` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: ticket_has_attachments
#

DROP TABLE IF EXISTS `ticket_has_attachments`;

CREATE TABLE `ticket_has_attachments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticket_id` bigint(20) DEFAULT NULL,
  `filename` varchar(250) DEFAULT NULL,
  `savename` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: tickets
#

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `from` varchar(250) DEFAULT NULL,
  `reference` varchar(250) DEFAULT NULL,
  `type_id` smallint(6) DEFAULT '1',
  `lock` smallint(6) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `text` text,
  `status` varchar(50) DEFAULT NULL,
  `client_id` int(11) DEFAULT '0',
  `company_id` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `escalation_time` int(11) DEFAULT '0',
  `priority` varchar(50) DEFAULT NULL,
  `created` int(11) DEFAULT '0',
  `queue_id` int(11) DEFAULT '0',
  `updated` tinyint(4) DEFAULT '0',
  `project_id` bigint(20) DEFAULT '0',
  `raw` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: types
#

DROP TABLE IF EXISTS `types`;

CREATE TABLE `types` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `inactive` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `types` (`id`, `name`, `description`, `inactive`) VALUES ('1', 'Service Request', 'Service Requests', 0);


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `firstname` varchar(120) DEFAULT NULL,
  `lastname` varchar(120) DEFAULT NULL,
  `hashed_password` varchar(128) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `status` enum('active','inactive','deleted') DEFAULT NULL,
  `admin` enum('0','1') DEFAULT '0',
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `userpic` varchar(250) DEFAULT 'no-pic.png',
  `title` varchar(150) DEFAULT NULL,
  `access` varchar(150) NOT NULL DEFAULT '1,2',
  `last_active` varchar(50) DEFAULT NULL,
  `last_login` varchar(50) DEFAULT NULL,
  `queue` bigint(20) DEFAULT '0',
  `token` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `signature` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `hashed_password`, `email`, `status`, `admin`, `created`, `userpic`, `title`, `access`, `last_active`, `last_login`, `queue`, `token`, `language`, `signature`) VALUES (1, 'Admin', 'John', 'Doe', '785ea3511702420413df674029fe58d69692b3a0a571c0ba30177c7808db69ea22a8596b1cc5777403d4374dafaa708445a9926d6ead9a262e37cb0d78db1fe5', 'local@localhost', 'active', '1', '2020-03-12 03:16:35', 'no-pic.png', 'Administrator', '1,2,3,4,5,6,7,8,9,10,11,12,13,20,33,105,108', '1583983045', '1583983021', '0', NULL, NULL, NULL);


