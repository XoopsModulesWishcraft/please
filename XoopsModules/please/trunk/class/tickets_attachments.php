<?php
/**
 * Please Tickets_attachments Ticketer of Batch Group & User Tickets_attachmentss
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
 * @description 	Tickets_attachments Ticking for Support/Faults/Management of Batch Group & User managed emails tickets
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
 * Class for Tickets_attachments in Please email ticketer
 *
 * For Table:-
 * <code>
 * CREATE TABLE `please_tickets_attachments` (
 *   `id` mediumint(30) UNSIGNED NOT NULL AUTO_INCREMENT,
 *   `typal` enum('from','sent','mantis') DEFAULT 'from',
 *   `state` enum('available','offline-copied','offline-ftp', 'offline-deleted') DEFAULT 'available',
 *   `ticket-id` mediumint(30) UNSIGNED DEFAULT '0',
 *   `ticket-contents-id` mediumint(30) UNSIGNED DEFAULT '0',
 *   `file-key` varchar(44) DEFAULT '',
 *   `file-name` varchar(255) DEFAULT '',
 *   `file-path` varchar(255) DEFAULT '',
 *   `bytes` int(11) DEFAULT '0',
 *   `when` int(12) DEFAULT '0',
 *   PRIMARY KEY (`id`),
 *   KEY `SEARCH` (`ticket-id`,`ticket-contents-id`,`file-key`(19),`state`,`typal`)
 * ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 * </code>
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class pleaseTickets_attachments extends pleaseXoopsObject
{

	var $handler = '';
	
    function __construct($id = null)
    {   	
    	
        self::initVar('id', XOBJ_DTYPE_INT, null, false);
        self::initVar('typal', XOBJ_DTYPE_ENUM, 'from', false, false, false, getEnumeratorValues(basename(__FILE__), 'typal'));
        self::initVar('state', XOBJ_DTYPE_ENUM, 'available', false, false, false, getEnumeratorValues(basename(__FILE__), 'state'));
        self::initVar('ticket-id', XOBJ_DTYPE_INT, null, false);
        self::initVar('ticket-contents-id', XOBJ_DTYPE_INT, null, false);
        self::initVar('file-key', XOBJ_DTYPE_TXTBOX, sha1(null), false, 44);
        self::initVar('file-name', XOBJ_DTYPE_TXTBOX, null, false, 255);
        self::initVar('file-path', XOBJ_DTYPE_TXTBOX, null, false, 255);
        self::initVar('bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('when', XOBJ_DTYPE_INT, time(), false);
        
        $this->handler = __CLASS__ . 'Handler';
        if (!empty($id) && !is_null($id))
        {
        	$handler = new $this->handler;
        	self::assignVars($handler->get($id)->getValues(array_keys($this->vars)));
        }
        
    }

}


/**
 * Handler Class for Tickets_attachments in Please email ticketer
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class pleaseTickets_attachmentsHandler extends pleaseXoopsObjectHandler
{
	

	/**
	 * Table Name without prefix used
	 * 
	 * @var string
	 */
	var $tbl = 'please_tickets_attachments';
	
	/**
	 * Child Object Handling Class
	 *
	 * @var string
	 */
	var $child = 'pleaseTickets_attachments';
	
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
	var $envalued = 'when';
	
    function __construct(&$db) 
    {
    	if (!object($db))
    		$db = $GLOBAL["xoopsDB"];
        parent::__construct($db, self::$tbl, self::$child, self::$identity, self::$envalued);
    }
}
?>