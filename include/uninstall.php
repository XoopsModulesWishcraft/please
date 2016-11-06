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
 * @subpackage  	please
 * @description 	Email Ticking for Support/Faults/Management of Batch Group & User managed emails tickets
 * @version			1.0.5
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/please
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Modules/please
 * @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsModules/please
 * @link			http://internetfounder.wordpress.com
 */

function xoops_module_uninstall_please(&$module) {

	require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'groups.php';
	
	$sql = array();
	$criteria = new Criteria('group_type', 'please%', 'LIKE');
	if ($results = $groups_handler->getObjects($criteria)) {
		foreach($results as $group)
		{
			$sql[] = "DELETE FROM ".$GLOBALS['xoopsDB']->prefix('groups'). " WHERE `groupid` = ". $group->getVar('groupid');
			$sql[] = "DELETE FROM ".$GLOBALS['xoopsDB']->prefix('group_permission'). " WHERE `gperm_groupid` = ". $group->getVar('groupid');
		}
	}
	
	foreach($sql as $question)
		$GLOBALS['xoopsDB']->queryF($question);
	
	unlink (dirname(__DIR__) . DIRECTORY_SEPARATOR . 'groups.php');
	
	return true;
	
}
	
?>