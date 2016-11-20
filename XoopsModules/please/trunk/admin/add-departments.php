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

$GLOBALS['template'] = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . str_replace('.php', '.html', basename(__FILE__));
global $xoopsModule, $xoopsTpl, $thisModuleDir;
include_once __DIR__ . '/header.php';
xoops_cp_header();
$indexAdmin = new ModuleAdmin();
$GLOBALS['xoopsTpl']->assign('nav',$indexAdmin->addNavigation('departments.php'));
$departments_handler = xoops_getModuleHandler('departments', $thisModuleDir);
$GLOBALS['xoopsTpl']->assign('form', $departments_handler->getAddFormAdmin());
include_once __DIR__ . '/footer.php';
