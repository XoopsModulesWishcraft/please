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


if (!function_exists("pleaseInstantiateBlowfish"))
{
	function pleaseInstantiateBlowfish()
	{
		/**
		 * Checks for existing Blowfish Salt File
		 */
		$create = false;
		if (!file_exists($salty = __DIR__ . DIRECTORY_SEPARATOR . "salts.php"))
			$create = true;
		elseif (strpos(file_get_contents($salty), "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%"))
			$create = true;
		if ($create != true)
			return require_once($salty);
		
		if (!is_a($GLOBALS["xoopsUser"], "XoopsUser"))
			return false;
		
		/**
		 * Creates Blowfish Salt File
		 */
		$template = file_get_contents(dirname(__DIR__) . DIRECTORY_SEPARATOR . "templates" . DIRECTORY_SEPARATOR . "salts.php.tpl");
		
		// makke blowfish salt
		$salt = '';
		for($t=mt_rand(11, 30); $t<mt_rand(32,75); $t++)
			while(mt_rand(15,95)<= 79)
			$salt .= chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("Z"))) . chr(mt_rand(ord("A"),ord("Z"))) . chr(mt_rand(ord(","),ord("]"))) . chr(mt_rand(ord("a"),ord("z"))) . chr(mt_rand(ord("!"),ord("="))) . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord(chr(185))))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("~"),ord("|")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("0"),ord("(")))  . chr(mt_rand(ord("2"),ord("9"))) ;
		
		// fills fields in template
		$template = str_replace("%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%", str_replace('"', '\"', str_replace("'", "\'", $salt)), $template);
		$template = str_replace("%%%%%%%%%%%%%%%%%%%%%%%%%", microtime(true), $template);
		$template = str_replace("%%%%%%%%%%%%%%%%%%%%", XOOPS_URL, $template);
		$template = str_replace("%%%%%%%%%%%%%%%", str_replace('"', '\"', str_replace("'", "\'", json_encode($GLOBALS["xoopsUser"]->toArray()))), $template);
		
		// Writes File for Salts for Blowfish
		if (file_exists($salty = __DIR__ . DIRECTORY_SEPARATOR . "salts.php"))
			unlink($salty);
		writeRawFile($salty, $template);
		chmod($salty,0444);
		
		return require_once($salty);;
	}
}


if (!function_exists("getURIData")) {

	/* function getURIData()
	 *
	* 	Get a supporting domain system for the API
	* @author 		Simon Roberts (Chronolabs) simon@labs.coop
	*
	* @return 		float()
	*/
	function getURIData($uri = '', $posts = array(), $headers = array(), $timeout = 16, $connectout = 14)
	{
		if (!function_exists("curl_init"))
		{
			return file_get_contents($uri);
		}
		if (!$btt = curl_init($uri)) {
			return false;
		}
		if (count($headers)) {
			curl_setopt($btt, CURLOPT_HEADER, true);
			curl_setopt($btt, CURLOPT_HEADERS, $headers);
		} else
			curl_setopt($btt, CURLOPT_HEADER, 0);
		if (count($posts)) {
			curl_setopt($btt, CURLOPT_POST, true);
			curl_setopt($btt, CURLOPT_POSTFIELDS, http_build_query($posts));
		} else
			curl_setopt($btt, CURLOPT_POST, 0);
		curl_setopt($btt, CURLOPT_CONNECTTIMEOUT, $connectout);
		curl_setopt($btt, CURLOPT_TIMEOUT, $timeout);
		curl_setopt($btt, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($btt, CURLOPT_VERBOSE, false);
		curl_setopt($btt, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($btt, CURLOPT_SSL_VERIFYPEER, false);
		$data = curl_exec($btt);
		curl_close($btt);
		return $data;
	}
}


if (!function_exists("readRawFile")) {
	/**
	 * Return the contents of this File as a string.
	 *
	 * @param string $file
	 * @param string $bytes where to start
	 * @param string $mode
	 * @param boolean $force If true then the file will be re-opened even if its already opened, otherwise it won't
	 * @return mixed string on success, false on failure
	 * @access public
	 */
	function readRawFile($file = '', $bytes = false, $mode = 'rb', $force = false)
	{
		$success = false;
		if ($bytes === false) {
			$success = file_get_contents($file);
		} elseif ($fhandle = fopen($file, $mode)) {
			if (is_int($bytes)) {
				$success = fread($fhandle, $bytes);
			} else {
				$data = '';
				while (! feof($fhandle)) {
					$data .= fgets($fhandle, 4096);
				}
				$success = trim($data);
			}
			fclose($fhandle);
		}
		return $success;
	}
}

if (!function_exists("writeRawFile")) {
	/**
	 *
	 * @param string $file
	 * @param string $data
	 */
	function writeRawFile($file = '', $data = '')
	{
		if (!is_dir(dirname($file)))
			mkdir(dirname($file), 0777, true);
		if (is_file($file))
			unlink($file);
		$ff = fopen($file, 'w');
		fwrite($ff, $data, strlen($data));
		return fclose($ff);
	}
}