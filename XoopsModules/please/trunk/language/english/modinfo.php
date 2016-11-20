<?php
/**
 * Please Email Ticketer of Batch Group & User Emails
*
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright   	The XOOPS Project http://sourceforge.net/projects/xoops/
* @license     	General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
* @author      	Simon Roberts (wishcraft) <wishcraft@users.sourceforge.net>
* @subpackage  	language
* @description 	Email Ticking for Support/Faults/Management of Batch Group & User managed emails tickets
* @version		1.0.5
* @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/please
* @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Modules/please
* @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsModules/please
* @link			http://internetfounder.wordpress.com
*/

// Module Group Definitions
define('_MI_PLEASE_GROUP_TYPE_CLIENT','please-client');
define('_MI_PLEASE_GROUP_NAME_CLIENT','Please Ticket Client');
define('_MI_PLEASE_GROUP_DESC_CLIENT','This group is for anyone generating a ticket in please that needs a username!');
define('_MI_PLEASE_GROUP_TYPE_STAFF','please-staff');
define('_MI_PLEASE_GROUP_NAME_STAFF','Please Ticketer Staff');
define('_MI_PLEASE_GROUP_DESC_STAFF','This group is for anyone responding to email tickets in please that needs a username!');
define('_MI_PLEASE_GROUP_TYPE_MANAGER','please-manage');
define('_MI_PLEASE_GROUP_NAME_MANAGER','Please Staff Manager');
define('_MI_PLEASE_GROUP_DESC_MANAGER','This group is for anyone managing staff responding to a ticket in please that needs a username!');
define('_MI_PLEASE_GROUP_TYPE_DEPARTMENT','please-depart');
define('_MI_PLEASE_GROUP_NAME_DEPARTMENT','%s');
define('_MI_PLEASE_GROUP_DESC_DEPARTMENT','%s');


// Module Admin Menu
define('_MI_PLEASE_ADMINMENU_HOME','Please Home');
define('_MI_PLEASE_ADMINMENU_DEPARTMENTS','Ticketing Departments');
define('_MI_PLEASE_ADMINMENU_ESCALATION','Ticketing Escalation');
define('_MI_PLEASE_ADMINMENU_USERS','Department Users');
define('_MI_PLEASE_ADMINMENU_FILES','Files');
define('_MI_PLEASE_ADMINMENU_MIMETYPES','Mimetypes');
define('_MI_PLEASE_ADMINMENU_TICKETS','Tickets');
define('_MI_PLEASE_ADMINMENU_KEYWQRDS','Keywords');
define('_MI_PLEASE_ADMINMENU_REPORTS','Reports');
define('_MI_PLEASE_ADMINMENU_PERMISSIONS','Permissions');
define('_MI_PLEASE_ADMINMENU_ABOUT','Email Ticketer About');

// Module definition headers for xoops_version.php
define('_MI_PLEASE_MODULE_NAME','Email Ticketer Please!');
define('_MI_PLEASE_MODULE_VERSION','1.05');
define('_MI_PLEASE_MODULE_RELEASEDATE','');
define('_MI_PLEASE_MODULE_STATUS','beta');
define('_MI_PLEASE_MODULE_DESCRIPTION','Is for email ticketing and harvesting for departmental escalation and sorting based in keywords, include spam detection!');
define('_MI_PLEASE_MODULE_CREDITS','Mynamesnot, Wishcraft');
define('_MI_PLEASE_MODULE_AUTHORALIAS','wishcraft');
define('_MI_PLEASE_MODULE_HELP','page=help');
define('_MI_PLEASE_MODULE_LICENCE','gpl3+academic');
define('_MI_PLEASE_MODULE_OFFICAL','0');
define('_MI_PLEASE_MODULE_ICON','images/modicon.png');
define('_MI_PLEASE_MODULE_WEBSITE','http://au.syd.labs.coop');
define('_MI_PLEASE_MODULE_ADMINMODDIR','/Frameworks/moduleclasses/moduleadmin');
define('_MI_PLEASE_MODULE_ADMINICON16','../../Frameworks/moduleclasses/icons/16');
define('_MI_PLEASE_MODULE_ADMINICON32','./../Frameworks/moduleclasses/icons/32');
define('_MI_PLEASE_MODULE_RELEASEINFO',__DIR__ . DIRECTORY_SEPARATOR . 'release.nfo');
define('_MI_PLEASE_MODULE_RELEASEXCODE',__DIR__ . DIRECTORY_SEPARATOR . 'release.xcode');
define('_MI_PLEASE_MODULE_RELEASEFILE','https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/please/xoops2.5_please_1.05.7z');
define('_MI_PLEASE_MODULE_AUTHORREALNAME','Simon Antony Roberts');
define('_MI_PLEASE_MODULE_AUTHORWEBSITE','http://internetfounder.wordpress.com');
define('_MI_PLEASE_MODULE_AUTHORSITENAME','Exhumations from the desks of Chronographics');
define('_MI_PLEASE_MODULE_AUTHOREMAIL','simon@staff.labs.coop');
define('_MI_PLEASE_MODULE_AUTHORWORD','');
define('_MI_PLEASE_MODULE_WARNINGS','');
define('_MI_PLEASE_MODULE_DEMO_SITEURL','');
define('_MI_PLEASE_MODULE_DEMO_SITENAME','');
define('_MI_PLEASE_MODULE_SUPPORT_SITEURL','');
define('_MI_PLEASE_MODULE_SUPPORT_SITENAME','');
define('_MI_PLEASE_MODULE_SUPPORT_FEATUREREQUEST','');
define('_MI_PLEASE_MODULE_SUPPORT_BUGREPORTING','');
define('_MI_PLEASE_MODULE_DEVELOPERS','Simon Roberts (Wishcraft)'); // Sperated by a Pipe (|)
define('_MI_PLEASE_MODULE_TESTERS',''); // Sperated by a Pipe (|)
define('_MI_PLEASE_MODULE_TRANSLATERS',''); // Sperated by a Pipe (|)
define('_MI_PLEASE_MODULE_DOCUMENTERS',''); // Sperated by a Pipe (|)
define('_MI_PLEASE_MODULE_HASSEARCH',true);
define('_MI_PLEASE_MODULE_HASMAIN',true);
define('_MI_PLEASE_MODULE_HASADMIN',true);
define('_MI_PLEASE_MODULE_HASCOMMENTS',true);

// Configguration Categories
define('_MI_PLEASE_CONFCAT_SEO','Search Engine Optimization');
define('_MI_PLEASE_CONFCAT_SEO_DESC','');
define('_MI_PLEASE_CONFCAT_EMAIL','Email Settings for Ticketing');
define('_MI_PLEASE_CONFCAT_EMAIL_DESC','');
define('_MI_PLEASE_CONFCAT_SYSTEMS','Please Email Ticketer System Settings');
define('_MI_PLEASE_CONFCAT_SYSTEMS_DESC','');
define('_MI_PLEASE_CONFCAT_REPORTS','Please System Reports Settings');
define('_MI_PLEASE_CONFCAT_REPORTS_DESC','');
define('_MI_PLEASE_CONFCAT_SPAM','Spam Checking Settings');
define('_MI_PLEASE_CONFCAT_SPAM_DESC','');

// Configurations for Spam Checking
define('_MI_PLEASE_SPAM','Enable Spam Checking');
define('_MI_PLEASE_SPAM_DESC','This enables spam checking for the module in handling emails');
define('_MI_PLEASE_SPAM_KEYWORDS','Check Spam Keywords');
define('_MI_PLEASE_SPAM_KEYWORDS_DESC','This enables basic keyword matching to flag spam!');
define('_MI_PLEASE_SPAM_ADDRESSES','Check Spam Email Addresses');
define('_MI_PLEASE_SPAM_ADDRESSES_DESC','This flags any spam on a high lighted email address that is a spam source!');
define('_MI_PLEASE_WAMMY','Enable Wammy Spam Checking');
define('_MI_PLEASE_WAMMY_DESC','This turns on the use of wammy api (Download from: <a target="_blank" href="https://sourceforge.net/projects/chronolabsapis/files/wammy.labs.coop/">sourceforge.net</a>) for the spam checking api source-code!');
define('_MI_PLEASE_WAMMY_URI','Wammy API URL/URI');
define('_MI_PLEASE_WAMMY_URI_DESC','This is the public access or intranet access wammy api url for spam checking you have established!');
define('_MI_PLEASE_WAMMY_TRAIN','Enable Training for Wammy!');
define('_MI_PLEASE_WAMMY_TRAIN_DESC','Enable all training options for staff and department to flag and train entry items as spam!');
define('_MI_PLEASE_SPAM_PASSWAY','Enable Passway for Spam');
define('_MI_PLEASE_SPAM_PASSWAY_DESC','This will send a notice that contains a code to enter for the message to be unflaged as spam');
define('_MI_PLEASE_SPAM_NOTIFY','Enable Spam Notices');
define('_MI_PLEASE_SPAM_NOTIFY_DESC','This will enable notices to people that messages/emails get flagged as spam!');

// Search Engine Optimisation (SEO)
define('_MI_PLEASE_HTACCESS','Enable .htaccess SEO');
define('_MI_PLEASE_HTACCESS_DESC','This enables SEO access');
define('_MI_PLEASE_BASE','SEO Base Path');
define('_MI_PLEASE_BASE_DESC','This is the base path used in SEO');
define('_MI_PLEASE_HTML','HTML Output extension');
define('_MI_PLEASE_HTML_DESC','This is the extension given to HTML output');
define('_MI_PLEASE_RSS','RSS Output extension');
define('_MI_PLEASE_RSS_DESC','This is the extension given to RSS (xml) output');

// Email Ticketer settings and configurations
define('_MI_PLEASE_EMAILMETHOD','Email Service Method');
define('_MI_PLEASE_EMAILMETHOD_DESC','This is the method you are using for your email services to search for new email to ticket or replies to a ticket!');
define('_MI_PLEASE_EMAILMETHOD_IMAP','Access with IMAP protocol');
define('_MI_PLEASE_EMAILMETHOD_POP3','Access with POP3 protocol');
define('_MI_PLEASE_EMAILSERVICE','Email Service Route Address');
define('_MI_PLEASE_EMAILSERVICE_DESC','This is the netbios, ipv4/6 address of the email service you will be recieving and ticketing email from!');
define('_MI_PLEASE_EMAILPORT','Email Service Route Port');
define('_MI_PLEASE_EMAILPORT_DESC','This is the port you will be using to access the email service!');
define('_MI_PLEASE_EMAILUSER','Email Username');
define('_MI_PLEASE_EMAILUSER_DESC','This is the username of the email address you will be ticketing');
define('_MI_PLEASE_EMAILPASS','Email Address Password');
define('_MI_PLEASE_EMAILPASS_DESC','This is the password for the username immediately above this setting to ticket the email addresss from/o\'ve/who');
define('_MI_PLEASE_EMAILFOLDER','Email Folders to check for mail to ticket');
define('_MI_PLEASE_EMAILFOLDER_DESC','If you want to check your email folder individually not the lot like the setting above you will have to save your username and password and refersh the module configuration by pressing the module upgrade to populate this field!');
define('_MI_PLEASE_EMAIL_ALLFOLDERS','Check all folders for emails to ticket');
define('_MI_PLEASE_EMAIL_ALLFOLDERS_DESC','This option means you will check all the folders in the email address for emails to ticket!');
define('_MI_PLEASE_EMAILREPLYADDY','Email Reply Address');
define('_MI_PLEASE_EMAILREPLYADDY_DESC','This is the email address that reply are sent to for the email ticketting');
define('_MI_PLEASE_EMAILREPLYNAME','Email Reply Naming');
define('_MI_PLEASE_EMAILREPLYNAME_DESC','This is the email name that the replies are sent from!');
define('_MI_PLEASE_EMAILATTACHMENTS','Retrieve Attachments');
define('_MI_PLEASE_EMAILATTACHMENTS_DESC','Download and retrieve attachments for all emails!');
define('_MI_PLEASE_EMAILSIGNATURE','Attach a signature to all the emails');
define('_MI_PLEASE_EMAILSIGNATURE_DESC','Attach staff and department signatures to email reply to a ticket from please email ticketer');
define('_MI_PLEASE_EMAILFILESATTACH','Attachment with emails file storage');
define('_MI_PLEASE_EMAILFILESATTACH_DESC','This is where attachments with emails that are not embedded resources are stored here');
define('_MI_PLEASE_EMAILFILESATTACH_UPLOADS', XOOPS_ROOT_PATH . DIRECTORY_SEPARATOR . 'uploads' . ' (public)');
define('_MI_PLEASE_EMAILFILESATTACH_XOOPSDATA', XOOPS_VAR_PATH . ' (hidden)');
define('_MI_PLEASE_EMAILFILES','Email embedded file storage');
define('_MI_PLEASE_EMAILFILES_DESC','This is where embedded files like images, sound etc are stored in this location');
define('_MI_PLEASE_EMAILFILES_UPLOADS', XOOPS_ROOT_PATH . DIRECTORY_SEPARATOR . 'uploads' . ' (public)');
define('_MI_PLEASE_EMAILFILES_XOOPSDATA', XOOPS_VAR_PATH . ' (hidden)');
define('_MI_PLEASE_EMAILPATHPREFIX','Email Files Storage Folder Prefix');
define('_MI_PLEASE_EMAILPATHPREFIX_DESC','This is the folder the email attachments and embedded files are stored in');


// System Settings and Cnfigurations 
define('_MI_PLEASE_TICKETERS','Enable Ticketed Responses');
define('_MI_PLEASE_TICKETERS_DESC','This will notify the emailer of the ticket number assigned and acknowledge recieving the email!');
define('_MI_PLEASE_DEPARTMENT_GROUPS','Default all Department Groups');
define('_MI_PLEASE_DEPARTMENT_GROUPS_DESC','These are the default groups to use as a department when and if you are making new XOOPS Groups for each department!');
define('_MI_PLEASE_DEPARTMENT_NEWGROUP','New Group when Creating a Department');
define('_MI_PLEASE_DEPARTMENT_NEWGROUP_DESC','This will create a new group for each department in the ticketing system and use the one selected immediately above as default permissions!');
define('_MI_PLEASE_STAFF_GROUP','Default Staff Grouping');
define('_MI_PLEASE_STAFF_GROUP_DESC','This group is the default group users are added to when they are signed up as staff');
define('_MI_PLEASE_MANAGER_GROUP','Default Staff Manager Grouping');
define('_MI_PLEASE_MANAGER_GROUP_DESC','This group is the default group users are added to when they are signed up as manager of staff and departments!');
define('_MI_PLEASE_ACCESS_GROUPS','These are the groups allow access to this module');
define('_MI_PLEASE_ACCESS_GROUPS_DESC','This is the general default setting to what has access in this module');
define('_MI_PLEASE_ACCESS_STAFF_GROUPS','Staff Access Group');
define('_MI_PLEASE_ACCESS_STAFF_GROUPS_DESC','This is the user group used for staff access!');
define('_MI_PLEASE_ACCESS_MANAGER_GROUP','Manager Access Group');
define('_MI_PLEASE_ACCESS_MANAGER_GROUP_DESC','This is the user group for the departmental manager for the group of staff!');
define('_MI_PLEASE_MANTIS','Support Software Bug Escalation to Mantis');
define('_MI_PLEASE_MANTIS_DESC','Support Escalation to developer in the mantisBT (Mantis Bug Tracking) API');
define('_MI_PLEASE_MANTIS_GROUPS','Groups allowed to escalate to mantis');
define('_MI_PLEASE_MANTIS_GROUPS_DESC','This is the groups that support escalation to software developers in mantis bug tracker!');
define('_MI_PLEASE_MANAGER','Allow escalation of tickets to a manager');
define('_MI_PLEASE_MANAGER_DESC','This allows for tickets to be escalated to a manager in the department before any other escalation');
define('_MI_PLEASE_MANAGER_GROUPS','XOOPS User Groups for Managers');
define('_MI_PLEASE_MANAGER_GROUPS_DESC','This is the groups for managers to belong in as a default for a template to add new managers to when creating them!');
define('_MI_PLEASE_REPORTEE','Do Reporting');
define('_MI_PLEASE_REPORTEE_DESC','Enabled the development of statistics and reports!');
define('_MI_PLEASE_REPORTINGONHOUR','When on the hour the report runs');
define('_MI_PLEASE_REPORTINGONHOUR_DESC','in 0 - 23 (24hr) specify the hour you want the reports to run and delivery of them done soon afterwards');
define('_MI_PLEASE_REPORTEE_GROUPS','Report Access Groups');
define('_MI_PLEASE_REPORTEE_GROUPS_DESC','This is the XOOPS User Access Group that can access extensive reports!');
define('_MI_PLEASE_REPORTEE_ONLY','Report on these user groups');
define('_MI_PLEASE_REPORTEE_ONLY_DESC','This is the XOOPS User Access Groups that are reported on in the reports!');
define('_MI_PLEASE_CRON_METHOD','Cron/Scheduled Task Method');
define('_MI_PLEASE_CRON_METHOD_DESC','This is the type of execution the cronjobs/scheduled tasks are using');
define('_MI_PLEASE_CRON_METHOD_PRELOADS_DESC','XOOPS Preloads');
define('_MI_PLEASE_CRON_METHOD_PRELOADS','preloads');
define('_MI_PLEASE_CRON_METHOD_CRONTAB_DESC','Linux Crontab');
define('_MI_PLEASE_CRON_METHOD_CRONTAB','crontab');
define('_MI_PLEASE_CRON_METHOD_SCHEDULETASK_DESC','Windows Schedule Tasks');
define('_MI_PLEASE_CRON_METHOD_SCHEDULETASK','schedtask');
define('_MI_PLEASE_REPORTS_SCHEDULING','Reporting Period Schedule');
define('_MI_PLEASE_REPORTS_SCHEDULING_DESC','This is the type or period the reports are prepared over for the general information report based in departmental swing!');
define('_MI_PLEASE_REPORTS_STAFF_SCHEDULING','Staff Reporting Period Schedule');
define('_MI_PLEASE_REPORTS_STAFF_SCHEDULING_DESC','This is the type or period of the staff reports that are prepared for the manager and staff members!');
define('_MI_PLEASE_REPORTS_DEPARTMENT_SCHEDULING','Department Reportinh Period Schedule');
define('_MI_PLEASE_REPORTS_DEPARTMENT_SCHEDULING_DESC','This is the type or period of the staff in a departments as well as all the managers on the system members!');
define('_MI_PLEASE_REPORT_SCHEDULE_TOP20_DESC','Top 20 Listings');
define('_MI_PLEASE_REPORT_TOP20_INSTANCE','top20');
define('_MI_PLEASE_REPORT_SCHEDULE_HIGHLIGHTS_DESC','Reported Highlights');
define('_MI_PLEASE_REPORT_HIGHLIGHTS_INSTANCE','highlights');
define('_MI_PLEASE_REPORT_SCHEDULE_INSTANCE_DESC','Open Instances Report');
define('_MI_PLEASE_REPORT_SCHEDULE_INSTANCE','instance');
define('_MI_PLEASE_REPORT_SCHEDULE_DAILY_DESC','Daily Statistics Report');
define('_MI_PLEASE_SCHEDULE_DAILY','daily');
define('_MI_PLEASE_REPORT_SCHEDULE_WEEKLY_DESC','Weekly Statistics Report');
define('_MI_PLEASE_SCHEDULE_WEEKLY','weekly');
define('_MI_PLEASE_REPORT_SCHEDULE_FORTNIGHTLY_DESC','Fortnightly Statistics Report');
define('_MI_PLEASE_SCHEDULE_FORTNIGHTLY','2weeks');
define('_MI_PLEASE_REPORT_SCHEDULE_MONTHLY_DESC','Monthly Statistics Report');
define('_MI_PLEASE_SCHEDULE_MONTHLY','monthly');
define('_MI_PLEASE_REPORT_SCHEDULE_QUARTERLY_DESC','Quarterly Statistics Report');
define('_MI_PLEASE_SCHEDULE_QUARTERLY','quarterly');
define('_MI_PLEASE_REPORT_SCHEDULE_ANNUALLY_DESC','Yearly Statistics Report');
define('_MI_PLEASE_SCHEDULE_ANNUALLY','yearly');
