<?php
/**
 * Please To Ticketer of Batch Group & User Tos
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
 * @description 	To Ticking for Support/Faults/Management of Batch Group & User managed emails tickets
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
 * Class for To in Please email ticketer
 *
 * For Table:-
 * <code>
 * CREATE TABLE `please_to` (
 *   `id` mediumint(30) UNSIGNED NOT NULL AUTO_INCREMENT,
 *   `ticket-id` mediumint(30) UNSIGNED DEFAULT '0',
 *   `created-id` int(14) UNSIGNED DEFAULT '0',
 *   `name-id` int(14) UNSIGNED DEFAULT '0',
 *   `email-id` mediumint(30) UNSIGNED DEFAULT '0',
 *   `created` int(12) DEFAULT '0',
 *   PRIMARY KEY (`id`),
 *   KEY `SEARCH` (`created-id`,`name-id`,`email-id`,`ticket-id`)
 * ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 * </code>
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class pleaseTo extends pleaseXoopsObject
{

	var $handler = '';
	
    function __construct($id = null)
    {   	
    	
        self::initVar('id', XOBJ_DTYPE_INT, null, false);
        self::initVar('ticket-id', XOBJ_DTYPE_INT, null, false);	
        self::initVar('created-id', XOBJ_DTYPE_INT, null, false);
        self::initVar('name-id', XOBJ_DTYPE_INT, null, false);
        self::initVar('email-id', XOBJ_DTYPE_INT, null, false);
        self::initVar('created', XOBJ_DTYPE_INT, time(), false);
        
        $this->handler = __CLASS__ . 'Handler';
        if (!empty($id) && !is_null($id))
        {
        	$handler = new $this->handler;
        	self::assignVars($handler->get($id)->getValues(array_keys($this->vars)));
        }
        
    }

}


/**
 * Handler Class for To in Please email ticketer
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class pleaseToHandler extends pleaseXoopsObjectHandler
{
	

	/**
	 * Table Name without prefix used
	 * 
	 * @var string
	 */
	var $tbl = 'please_to';
	
	/**
	 * Child Object Handling Class
	 *
	 * @var string
	 */
	var $child = 'pleaseTo';
	
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