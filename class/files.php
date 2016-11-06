<?php
/**
 * Please Files Ticketer of Batch Group & User Filess
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
 * @description 	Files Ticking for Support/Faults/Management of Batch Group & User managed emails tickets
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
 * Class for Files in Please email ticketer
 *
 * For Table:-
 * <code>
 * CREATE TABLE `please_files` (
 *   `id` mediumint(38) unsigned NOT NULL AUTO_INCREMENT,
 *   `typal` enum('embedded','sent','attachment','unknown') DEFAULT 'unknown',
 *   `mimetype-id` mediumint(30) unsigned NOT NULL DEFAULT '0',
 *   `extension` varchar(30) DEFAULT '.',
 *   `filename` varchar(255) DEFAULT '.',
 *   `path` varchar(255) DEFAULT '.',
 *   `bytes` int(12) DEFAULT '0',
 *   `created` int(12) DEFAULT '0',
 *   `deleted` int(12) DEFAULT '0',
 *   `accessed` int(12) DEFAULT '0',
 *   PRIMARY KEY (`id`)
 * ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 * </code>
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class pleaseFiles extends pleaseXoopsObject
{

	var $handler = '';
	
    function __construct($id = null)
    {   	
    	
        self::initVar('id', XOBJ_DTYPE_INT, null, false);
        self::initVar('typal', XOBJ_DTYPE_ENUM, 'unknown', false, false, false, getEnumeratorValues(basename(__FILE__), 'typal'));
        self::initVar('where', XOBJ_DTYPE_ENUM, 'xoops_data', false, false, false, getEnumeratorValues(basename(__FILE__), 'where'));
        self::initVar('mimetype-id', XOBJ_DTYPE_INT, null, false);
        self::initVar('fingerprint', XOBJ_DTYPE_TXTBOX, md5(null), false, 32);
        self::initVar('extension', XOBJ_DTYPE_TXTBOX, null, false, 30);
        self::initVar('filename', XOBJ_DTYPE_TXTBOX, null, false, 30);
        self::initVar('path', XOBJ_DTYPE_TXTBOX, null, false, 30);
        self::initVar('bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('created', XOBJ_DTYPE_INT, time(), false);
        self::initVar('deleted', XOBJ_DTYPE_INT, 0, false);
        self::initVar('accessed', XOBJ_DTYPE_INT, 0, false);
        
        $this->handler = __CLASS__ . 'Handler';
        if (!empty($id) && !is_null($id))
        {
        	$handler = new $this->handler;
        	self::assignVars($handler->get($id)->getValues(array_keys($this->vars)));
        }
        
    }

}


/**
 * Handler Class for Files in Please email ticketer
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class pleaseFilesHandler extends pleaseXoopsObjectHandler
{
	

	/**
	 * Table Name without prefix used
	 * 
	 * @var string
	 */
	var $tbl = 'please_Files';
	
	/**
	 * Child Object Handling Class
	 *
	 * @var string
	 */
	var $child = 'pleaseFiles';
	
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
	var $envalued = 'filename';
	
    function __construct(&$db) 
    {
    	if (!object($db))
    		$db = $GLOBAL["xoopsDB"];
        parent::__construct($db, self::$tbl, self::$child, self::$identity, self::$envalued);
    }
}
?>