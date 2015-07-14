<?php
/**
 * Please Departments_staff Ticketer of Batch Group & User Departments_staffs
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
 * @description 	Departments_staff Ticking for Support/Faults/Management of Batch Group & User managed emails tickets
 * @version			1.0.5
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/please
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Modules/please
 * @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsModules/please
 * @link			http://internetfounder.wordpress.com
 */

if (!defined('_MI_PLEASE_MODULE_DIRNAME')) {
	return false;
}

//*
require_once (__DIR__ . DIRECTORY_SEPARATOR . 'objects.php');

/**
 * Class for Departments_staff in Please email ticketer
 *
 * For Table:-
 * <code>
 * CREATE TABLE `please_departments_staff` (
 *   `id` int(18) UNSIGNED NOT NULL AUTO_INCREMENT,
 *   `department-id` int(6) DEFAULT '0',
 *   `state` enum('active','inactive','holidays') DEFAULT 'active',
 *   `messaging` enum('email','pm','none') DEFAULT 'email',
 *   `uid` int(12) DEFAULT '0',
 *   `open` int(12) DEFAULT '0',
 *   `tickets` int(12) DEFAULT '0',
 *   `closed` int(12) DEFAULT '0',
 *   `clients` int(12) DEFAULT '0',
 *   `raised` int(12) DEFAULT '0',
 *   `votes` int(12) DEFAULT '0',
 *   `rating` int(12) DEFAULT '0',
 *   `created` int(12) DEFAULT '0',
 *   `mantis-username` varchar(45) DEFAULT '',
 *   `mantis-password` varchar(198) DEFAULT '',
 *   PRIMARY KEY (`id`),
 *   KEY `SEARCH` (`department-id`,`state`,`uid`,`open`)
 * ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 * </code>
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class pleaseDepartments_staff extends pleaseXoopsObject
{

	var $handler = '';
	
    function __construct($id = null)
    {   	
    	
        self::initVar('id', XOBJ_DTYPE_INT, null, false);
        self::initVar('department-id', XOBJ_DTYPE_INT, null, false);
        self::initVar('state', XOBJ_DTYPE_ENUM, 'active', false, false, false, getEnumeratorValues(basename(__FILE__), 'state'));
        self::initVar('messaging', XOBJ_DTYPE_ENUM, 'email', false, false, false, getEnumeratorValues(basename(__FILE__), 'messaging'));
        self::initVar('uid', XOBJ_DTYPE_INT, null, false);
        self::initVar('open', XOBJ_DTYPE_INT, null, false);
        self::initVar('tickets', XOBJ_DTYPE_INT, null, false);
        self::initVar('closed', XOBJ_DTYPE_INT, null, false);
        self::initVar('clients', XOBJ_DTYPE_INT, null, false);
        self::initVar('raised', XOBJ_DTYPE_INT, null, false);
        self::initVar('votes', XOBJ_DTYPE_INT, null, false);
        self::initVar('rating', XOBJ_DTYPE_INT, null, false);
        self::initVar('created', XOBJ_DTYPE_INT, time(), false);
        self::initVar('mantis-username', XOBJ_DTYPE_TXTBOX, null, false, 45);
        self::initVar('mantis-password', XOBJ_DTYPE_TXTBOX, null, false, 198);
        
        $this->handler = __CLASS__ . 'Handler';
        if (!empty($id) && !is_null($id))
        {
        	$handler = new $this->handler;
        	self::assignVars($handler->get($id)->getValues(array_keys($this->vars)));
        }
        
    }

}


/**
 * Handler Class for Departments_staff in Please email ticketer
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class pleaseDepartments_staffHandler extends pleaseXoopsObjectHandler
{
	

	/**
	 * Table Name without prefix used
	 * 
	 * @var string
	 */
	var $tbl = 'please_departments_staff';
	
	/**
	 * Child Object Handling Class
	 *
	 * @var string
	 */
	var $child = 'pleaseDepartments_staff';
	
	/**
	 * Child Object Identity Key
	 *
	 * @var string
	 */
	var $identity = 'id';
	
	/**
	 * Child Object Default Envaluing Costs
	 *
	 * @var string
	 */
	var $envalued = 'created';
	
    function __construct(&$db) 
    {
    	if (!object($db))
    		$db = $GLOBAL["xoopsDB"];
        parent::__construct($db, self::$tbl, self::$child, self::$identity, self::$envalued);
    }
}
?>