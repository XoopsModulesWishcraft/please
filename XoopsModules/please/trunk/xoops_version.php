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
 * @license     	GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author      	Simon Roberts (wishcraft) <wishcraft@users.sourceforge.net>
 * @subpackage  	please
 * @description 	Email Ticking for Support/Faults/Management of Batch Group & User managed emails tickets
 * @version			1.0.5
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/please
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Modules/please
 * @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsModules/please
 * @link			http://internetfounder.wordpress.com
 */

if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}

if (!defined(_MI_PLEASE_MODULE_DIRNAME))
	define('_MI_PLEASE_MODULE_DIRNAME', basename(__DIR__));
	
$modversion['dirname'] 					= _MI_PLEASE_MODULE_DIRNAME;
$modversion['name'] 					= _MI_PLEASE_MODULE_NAME;
$modversion['version']     				= _MI_PLEASE_MODULE_VERSION;
$modversion['releasedate'] 				= _MI_PLEASE_MODULE_RELEASEDATE;
$modversion['status']      				= _MI_PLEASE_MODULE_STATUS;
$modversion['description'] 				= _MI_PLEASE_MODULE_DESCRIPTION;
$modversion['credits']     				= _MI_PLEASE_MODULE_CREDITS;
$modversion['author']      				= _MI_PLEASE_MODULE_AUTHORALIAS;
$modversion['help']        				= _MI_PLEASE_MODULE_HELP;
$modversion['license']     				= _MI_PLEASE_MODULE_LICENCE;
$modversion['official']    				= _MI_PLEASE_MODULE_OFFICAL;
$modversion['image']       				= _MI_PLEASE_MODULE_ICON;
$modversion['module_status'] 			= _MI_PLEASE_MODULE_STATUS;
$modversion['website'] 					= _MI_PLEASE_MODULE_WEBSITE;
$modversion['dirmoduleadmin'] 			= _MI_PLEASE_MODULE_ADMINMODDIR;
$modversion['icons16'] 					= _MI_PLEASE_MODULE_ADMINICON16;
$modversion['icons32'] 					= _MI_PLEASE_MODULE_ADMINICON32;
$modversion['release_info'] 			= _MI_PLEASE_MODULE_RELEASEINFO;
$modversion['release_file'] 			= _MI_PLEASE_MODULE_RELEASEFILE;
$modversion['release_date'] 			= _MI_PLEASE_MODULE_RELEASEDATE;
$modversion['author_realname'] 			= _MI_PLEASE_MODULE_AUTHORREALNAME;
$modversion['author_website_url'] 		= _MI_PLEASE_MODULE_AUTHORWEBSITE;
$modversion['author_website_name'] 		= _MI_PLEASE_MODULE_AUTHORSITENAME;
$modversion['author_email'] 			= _MI_PLEASE_MODULE_AUTHOREMAIL;
$modversion['author_word'] 				= _MI_PLEASE_MODULE_AUTHORWORD;
$modversion['status_version'] 			= _MI_PLEASE_MODULE_VERSION;
$modversion['warning'] 					= _MI_PLEASE_MODULE_WARNINGS;
$modversion['demo_site_url'] 			= _MI_PLEASE_MODULE_DEMO_SITEURL;
$modversion['demo_site_name'] 			= _MI_PLEASE_MODULE_DEMO_SITENAME;
$modversion['support_site_url'] 		= _MI_PLEASE_MODULE_SUPPORT_SITEURL;
$modversion['support_site_name'] 		= _MI_PLEASE_MODULE_SUPPORT_SITENAME;
$modversion['submit_feature'] 			= _MI_PLEASE_MODULE_SUPPORT_FEATUREREQUEST;
$modversion['submit_bug'] 				= _MI_PLEASE_MODULE_SUPPORT_BUGREPORTING;
$modversion['people']['developers'] 	= explode("|", _MI_PLEASE_MODULE_DEVELOPERS);
$modversion['people']['testers']		= explode("|", _MI_PLEASE_MODULE_TESTERS);
$modversion['people']['translaters']	= explode("|", _MI_PLEASE_MODULE_TRANSLATERS);
$modversion['people']['documenters']	= explode("|", _MI_PLEASE_MODULE_DOCUMENTERS);

// Requirements
$modversion['min_php']        			= '5.3.7';
$modversion['min_xoops']      			= '2.5.7';
$modversion['min_db']         			= array('mysql' => '5.0.7', 'mysqli' => '5.0.7');
$modversion['min_admin']      			= '1.1';

// Database SQL File and Tables
$modversion['sqlfile']['mysql'] 		= "sql/mysqli.sql";
$modversion['tables'][0] 				= "noticer_sender";
$modversion['tables'][1] 				= "noticer_email";

//Search
$modversion['hasSearch'] 				= _MI_PLEASE_MODULE_HASSEARCH;
//$modversion['search']['file'] 		= "include/search.inc.php";
//$modversion['search']['func'] 		= "publisher_search";

// Main
$modversion['hasMain'] 					= _MI_PLEASE_MODULE_HASMAIN;
	
// Admin
$modversion['hasAdmin'] 				= _MI_PLEASE_MODULE_HASADMIN;
//$modversion['adminindex']  			= "admin/index.php";
//$modversion['adminmenu']   			= "admin/menu.php";
//$modversion['system_menu'] 			= 1;

// Comments
$modversion['hasComments'] 				= _MI_PLEASE_MODULE_HASCOMMENTS;
//$modversion['comments']['itemName'] = 'itemid';
//$modversion['comments']['pageName'] = 'item.php';
//$modversion['comments']['callbackFile']        = 'include/comment_functions.php';
//$modversion['comments']['callback']['approve'] = 'publisher_com_approve';
//$modversion['comments']['callback']['update']  = 'publisher_com_update';

// Add extra menu items
//$modversion['sub'][3]['name'] = _MI_PLEASE_SUB_ARCHIVE;
//$modversion['sub'][3]['url']  = "archive.php";


// Create Block Constant Defines
$i = 0;
++$i;
//$modversion['blocks'][$i]['file']        = "items_new.php";
//$modversion['blocks'][$i]['name']        = _MI_PLEASE_ITEMSNEW;
//$modversion['blocks'][$i]['description'] = _MI_PLEASE_ITEMSNEW_DSC;
//$modversion['blocks'][$i]['show_func']   = "publisher_items_new_show";
//$modversion['blocks'][$i]['edit_func']   = "publisher_items_new_edit";
//$modversion['blocks'][$i]['options']     = "0|datesub|0|5|65|none";
//$modversion['blocks'][$i]['template']    = "publisher_items_new.tpl";


// Templates
$i = 0;
$modversion['templates'][$i]['file'] = 'noticer_index.html';
$modversion['templates'][$i]['description'] = 'Honeypot noticer Template';
$i++;
$modversion['templates'][$i]['file'] = 'noticer_results.html';
$modversion['templates'][$i]['description'] = 'Honeypot noticer results';

// Config categories
$modversion['configcat']['seo']['name']        = _MI_PLEASE_CONFCAT_SEO;
$modversion['configcat']['seo']['description'] = _MI_PLEASE_CONFCAT_SEO_DESC;

$modversion['configcat']['email']['name']        = _MI_PLEASE_CONFCAT_EMAIL;
$modversion['configcat']['email']['description'] = _MI_PLEASE_CONFCAT_EMAIL_DESC;

$modversion['configcat']['systems']['name']        = _MI_PLEASE_CONFCAT_SYSTEMS;
$modversion['configcat']['systems']['description'] = _MI_PLEASE_CONFCAT_SYSTEMS_DESC;

// Config categories
$i=0;
++$i;
$modversion['config'][$i]['name']        = 'htaccess';
$modversion['config'][$i]['title']       = '_MI_PLEASE_HTACCESS';
$modversion['config'][$i]['description'] = '_MI_PLEASE_HTACCESS_DESC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = false;
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'seo';
++$i;
$modversion['config'][$i]['name']        = 'base';
$modversion['config'][$i]['title']       = '_MI_PLEASE_BASE';
$modversion['config'][$i]['description'] = '_MI_PLEASE_BASE_DESC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = false;
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'seo';
++$i;
$modversion['config'][$i]['name']        = 'html';
$modversion['config'][$i]['title']       = '_MI_PLEASE_HTML';
$modversion['config'][$i]['description'] = '_MI_PLEASE_HTML_DESC';
$modversion['config'][$i]['formtype']    = 'text';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'html';
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'seo';
++$i;
$modversion['config'][$i]['name']        = 'rss';
$modversion['config'][$i]['title']       = '_MI_PLEASE_RSS';
$modversion['config'][$i]['description'] = '_MI_PLEASE_RSS_DESC';
$modversion['config'][$i]['formtype']    = 'text';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'html';
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'seo';
++$i;
$modversion['config'][$i]['name']        = 'email_method';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILMETHOD';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILMETHOD_DESC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'class';
$modversion['config'][$i]['options']     = array(_MI_PLEASE_EMAILMETHOD_PHP => 'class', _MI_PLEASE_EMAILMETHOD_PHP => 'extention');
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_typal';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILTYPAL';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILTYPAL_DESC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'imap';
$modversion['config'][$i]['options']     = array(_MI_PLEASE_EMAILTYPAL_IMAP => 'imap', _MI_PLEASE_EMAILTYPAL_POP3 => 'pop3');;
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_service';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILSERVICE';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILSERVICE_DESC';
$modversion['config'][$i]['formtype']    = 'text';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'imap.'.parse_url(XOOPS_URL, PHP_URL_HOST);
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_port';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILPORT';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILPORT_DESC';
$modversion['config'][$i]['formtype']    = 'text';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '993';
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_user';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILUSER';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILUSER_DESC';
$modversion['config'][$i]['formtype']    = 'text';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'ticketpls@'.parse_url(XOOPS_URL, PHP_URL_HOST);
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_pass';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILPASS';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILPASS_DESC';
$modversion['config'][$i]['formtype']    = 'password';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = '';
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_folder';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILFOLDER';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILFOLDER_DESC';
$modversion['config'][$i]['formtype']    = 'text';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'INBOX';
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_reply_addy';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILREPLYADDY';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILREPLYADDY_DESC';
$modversion['config'][$i]['formtype']    = 'text';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'ticketpls@'.parse_url(XOOPS_URL, PHP_URL_HOST);
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_reply_name';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILREPLYNAME';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILREPLYNAME_DESC';
$modversion['config'][$i]['formtype']    = 'text';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = "[%username%] ~ [%sitename%]";
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_attachments';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILATTACHMENTS';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILATTACHMENTS_DESC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = true;
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';
++$i;
$modversion['config'][$i]['name']        = 'email_signature';
$modversion['config'][$i]['title']       = '_MI_PLEASE_EMAILSIGNATURE';
$modversion['config'][$i]['description'] = '_MI_PLEASE_EMAILSIGNATURE_DESC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = true;
$modversion['config'][$i]['options']     = array();
$modversion['config'][$i]['category']    = 'email';



// Notification
$modversion['hasNotification']             = 1;
//$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
//$modversion['notification']['lookup_func'] = 'publisher_notify_iteminfo';

//$modversion['notification']['category'][1]['name']           = 'global_item';
//$modversion['notification']['category'][1]['title']          = _MI_PLEASE_GLOBAL_ITEM_NOTIFY;
//$modversion['notification']['category'][1]['description']    = _MI_PLEASE_GLOBAL_ITEM_NOTIFY_DSC;
//$modversion['notification']['category'][1]['subscribe_from'] = array('index.php', 'category.php', 'item.php');

//$modversion['notification']['event'][1]['name']          = 'category_created';
//$modversion['notification']['event'][1]['category']      = 'global_item';
//$modversion['notification']['event'][1]['title']         = _MI_PLEASE_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY;
//$modversion['notification']['event'][1]['caption']       = _MI_PLEASE_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP;
//$modversion['notification']['event'][1]['description']   = _MI_PLEASE_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC;
//$modversion['notification']['event'][1]['mail_template'] = 'global_item_category_created';
//$modversion['notification']['event'][1]['mail_subject']  = _MI_PLEASE_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ;

?>
