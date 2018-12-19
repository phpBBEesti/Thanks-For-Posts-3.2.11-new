<?php
/**
*
* Thanks For Posts extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'CLEAR_LIST_THANKS'			=> 'Kustuta',
	'CLEAR_LIST_THANKS_CONFIRM'	=> 'Kas Sa tõesti soovid kustutada seda tänu?',
	'CLEAR_LIST_THANKS_GIVE'	=> 'List of thanks issued by the user was cleared.',
	'CLEAR_LIST_THANKS_POST'	=> 'List of thanks in the message was cleared.',
	'CLEAR_LIST_THANKS_RECEIVE'	=> 'List of thanks obtained by the user was cleared.',
	'DISABLE_REMOVE_THANKS'		=> 'Tänu kustutamine on administraatori poolt keelatud.',
	'GIVEN'						=> 'Tänanud',
	
	
	'GLOBAL_INCORRECT_THANKS'	=> 'You cannot give thanks for a Global Announcement that has no reference to a particular forum.',
	'GRATITUDES'				=> 'Tänunimekiri',
	'INCORRECT_THANKS'			=> 'Tänu lisamine ebaõnnestus',
	'JUMP_TO_FORUM'				=> 'Hüppa foorumisse',
	'JUMP_TO_TOPIC'				=> 'Hüppa teemasse',
	'FOR_MESSAGE'				=> ' postitus',
	'FURTHER_THANKS' => array(
		1 => ' ja üks lisa kasutaja',
		2 => ' ja %d lisa kasutajat'
	),
	'NO_VIEW_USERS_THANKS' => 'Sul ei ole õiguseid vaadata tänude listi.',
	
	
	
	'NOTIFICATION_THANKS_GIVE'	=> array(
		1 => '<strong>Sind tänas kasutaja</strong> %1$s selle postituse eest:',
		2 => '<strong>Sind tänas kasutaja</strong> %1$s selle postituse eest:',
	),
	'NOTIFICATION_THANKS_REMOVE'=> array(
		1 => '<strong>Removed thank</strong> from %1$s for the post:',
		2 => '<strong>Removed thanks</strong> from %1$s for the post:',
	),
	'NOTIFICATION_TYPE_THANKS' => 'Tänati postituse eest',
	'NOTIFICATION_TYPE_THANKS_GIVE'		=> 'Keegi tänas teid postituse eest',
	'NOTIFICATION_TYPE_THANKS_REMOVE'	=> 'Keegi eemaldas tänu teie postituselt',
	'RECEIVED'					=> 'Tänatud',
	'REMOVE_THANKS'				=> 'Eemalda oma tänu: ',
	'REMOVE_THANKS_CONFIRM'		=> 'Oled kindel, et soovid eemaldada oma tänu?',
	'REMOVE_THANKS_SHORT'		=> 'Eemalda tänu',
	'REPUT'						=> 'Skoor',
	'REPUT_TOPLIST'				=> 'Enimtänatud kasutajad — TOP %d',
	'RATING_LOGIN_EXPLAIN'		=> 'Sul ei ole õiguseid vaadata toplisti.',
	'RATING_NO_VIEW_TOPLIST'	=> 'Sul ei ole õiguseid vaadata toplisti.',
	'RATING_VIEW_TOPLIST_NO'	=> 'Toplist on tühi või välja lülitatud administraatori poolt',
	'RATING_FORUM'				=> 'Foorum',
	'RATING_POST'				=> 'Postitus',
	'RATING_TOP_FORUM'			=> 'Foorumite reiting',
	'RATING_TOP_POST'			=> 'Postituste reiting',
	'RATING_TOP_TOPIC'			=> 'Teemade reiting',
	'RATING_TOPIC'				=> 'Teema',
	'THANK'						=> 'aeg',
	
	
	'THANK_FROM'				=> 'from',
	'THANK_TEXT_1'				=> 'Kes tänasid kasutajat ',
	'THANK_TEXT_2' => array(
		1 => ' selle postituse eest: ',
		2 => ' selle postituse (tänajaid %d):'
	),
	'THANK_POST'				=> 'Täna selle postituse autorit: ',
	'THANK_POST_SHORT'			=> 'Tänan',
	'THANKS'					=> array(
		1	=> '%d kord',
		2	=> '%d korda',
	),
	'THANKS_BACK'				=> 'Tagasi',
	'THANKS_INFO_GIVE'			=> 'Sa just tänasid kasutajat selle postituse eest.',
	'THANKS_INFO_REMOVE'		=> 'Eemaldasid enda tänud!',
	'THANKS_LIST'				=> 'Kuva/peida nimekiri',
	'THANKS_PM_MES_GIVE'		=> 'has thanked you for the post',
	'THANKS_PM_MES_REMOVE'		=> 'has removed thank for the post',
	'THANKS_PM_SUBJECT_GIVE'	=> 'Thank for the post',
	'THANKS_PM_SUBJECT_REMOVE'	=> 'Eemalda tänu sellelt postituselt',
	'THANKS_USER'				=> 'Tänunimekiri',
	'TOPLIST'					=> 'Postituste toplist',
));
