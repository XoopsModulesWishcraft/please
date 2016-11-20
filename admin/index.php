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

include_once __DIR__ . '/header.php';
xoops_cp_header();

$indexAdmin = new ModuleAdmin();
//-----------------------
// $xpPartnerHandler = xoops_getModuleHandler('partners', $xoopsModule->getVar('dirname'));

// $totalPartners = $xpPartnerHandler->getCount();
// $totalNonActivePartners = $xpPartnerHandler->getCount(new Criteria('status', 0, '='));
// $totalActivePartners = $totalPartners - $totalNonActivePartners;

// $indexAdmin->addInfoBox(_MD_XPARTNERS_DASHBOARD);

// $indexAdmin->addInfoBoxLine(_MD_XPARTNERS_DASHBOARD, "<infolabel>" ._MD_XPARTNERS_TOTALACTIVE. "</infolabel>", $totalActivePartners, 'Green');
// $indexAdmin->addInfoBoxLine(_MD_XPARTNERS_DASHBOARD,  "<infolabel>" ._MD_XPARTNERS_TOTALNONACTIVE. "</infolabel>", $totalNonActivePartners, 'Red');
// $indexAdmin->addInfoBoxLine(_MD_XPARTNERS_DASHBOARD,  "<infolabel>" ._MD_XPARTNERS_TOTALPARTNERS. "</infolabel><infotext>", $totalPartners."</infotext>");
//----------------------------

$GLOBALS['xoopsTpl']->assign('nav',$indexAdmin->addNavigation(basename(__FILE__)));
$GLOBALS['xoopsTpl']->assign('index',$indexAdmin->renderIndex());

include_once __DIR__ . '/footer.php';
//xoops_cp_footer();
