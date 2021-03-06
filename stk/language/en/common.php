<?php
/**
 *
 * common [English]
 *
 * @package language
 * @copyright (c) 2012 phpBB Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
$lang = array_merge($lang, array(
	'S_CONTENT_DIRECTION'		=> 'ltr',
	'S_USER_LANG'				=> 'en',

	'STK_CACHE_NOT_WRITABLE'				=> 'Support Toolkit cache not writable',
	'STK_CACHE_NOT_WRITABLE_DESCRIPTION'	=> 'The Support Toolkit has detected that it can’t cache information. Although the Support Toolkit can function without caching it is adviced to enable caching for better performance. To enable caching, set the <a href="http://www.phpbb.com/kb/article/phpbb3-chmod-permissions/">CHMOD</a> permissions on the <c>stk/cache/</c> directory to <c>777</c>.',

	'TOOL_OUTDATED_TITLE'		=> 'Tool is outdated',
	'TOOL_OUTDATED_DESCRIPTION'	=> 'This tool appears to be outdated, please update before continueing.',
	'TOOL_SUCCESS'				=> 'Tool ran successfull',
));
