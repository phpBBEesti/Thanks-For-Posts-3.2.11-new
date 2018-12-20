<?php
/**
*
* Thanks For Posts extension for the phpBB Forum Software package.
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
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

$lang = array_merge($lang, array(
	'ACP_DELTHANKS'	=> 'Kustuta salvestatud tänu',
	'ACP_POSTS'	=> 'Postitusi kokku',
	'ACP_POSTSEND' => 'Ülejäänud tänatud postitused',
	'ACP_POSTSTHANKS' => 'Tänatud postitusi kokku',
	'ACP_THANKS' => 'Tänatud postitused',
	'ACP_THANKS_MOD_VER' => 'Mooduli versioon: ',
	'ACP_THANKS_TRUNCATE' => 'Tühjenda tänude nimekiri',
	'ACP_ALLTHANKS'	=> 'Tänude loendur',
	'ACP_THANKSEND'	=> 'Thanks remaining to take into account',
	'ACP_THANKS_REPUT' => 'Reitingu seaded',
	'ACP_THANKS_REPUT_SETTINGS'	=> 'Reitingu valikud',
	'ACP_THANKS_REPUT_SETTINGS_EXPLAIN'	=> 'Siin saate määrata postituste, teemade ja foorumite reitingute vaikeseaded. <br /> Teema (postitus, teema või foorum), millel on kõige rohkem tänu, antakse 100% reiting.',
	'ACP_THANKS_SETTINGS' => 'Tänude Seaded',
	'ACP_THANKS_SETTINGS_EXPLAIN' => 'Tänatud postituste seadeid saate siit muuta.',
	'ACP_THANKS_REFRESH' => 'Uuenda loendurit',
	'ACP_UPDATETHANKS' => 'Salvestatud tänud uuendatud',
	'ACP_USERSEND' => 'Ülejäänud kasutajad kes tänasid',
	'ACP_USERSTHANKS' => 'Kokku kasutajaid kes tänasid',

	

	
	
	
	
	
	'IMG_THANKPOSTS' => 'Täname postituse eest',
	'IMG_REMOVETHANKS' => 'Tühista tänu',

	'LOG_CONFIG_THANKS'	=> 'Tänude mooduli konfiguratsioon uuendatud',
	'REFRESH' => 'Uuenda',
	'REMOVE_THANKS'	=> 'Luba tänu eemaldada',
	'REMOVE_THANKS_EXPLAIN'	=> 'Kasutajad saavad kustutada tänu, kui see on lubatud.',

	
	'STEPR'	=> ' - täidetud, samm %s',
	'THANKS_COUNTERS_VIEW' => 'Tänude loendur',
	
	'THANKS_COUNTERS_VIEW_EXPLAIN' => 'Kui see on lubatud, näitab autori blokeerimisandmete arv antud / saadud tänud.',
	'THANKS_FORUM_REPUT_VIEW' => 'Kuva foorumite reiting',
	
	
	'THANKS_GLOBAL_POST' => 'Globaalsete teadaannete tänamine',
	'THANKS_GLOBAL_POST_EXPLAIN' => 'Kui see on lubatud, siis saab tänada globaalseid teadaandeid.',
	'THANKS_FORUM_REPUT_VIEW_EXPLAIN' => 'Kui see on lubatud, kuvatakse foorumite reiting foorumite loendis.',
	'THANKS_INFO_PAGE' => 'Informatiivsed sõnumid',
	'THANKS_INFO_PAGE_EXPLAIN' => 'If enabled, informative messages will be displayed after thanking/removing thanks for the post.',
	'THANKS_NOTICE_ON' => 'Notices are available',
	'THANKS_NOTICE_ON_EXPLAIN' => 'If enabled, notice are available and the user can configure the notification via your profile.',
	'THANKS_NUMBER' => 'Number of thanks from the list shown in profile',
	'THANKS_NUMBER_EXPLAIN' => 'Maximum number of thanks displayed when viewing a profile. <br /> <strong> Remember that slow down will be noticed if this value is set over 250. </strong>',
	'THANKS_NUMBER_DIGITS' => 'The number of decimal places for rating',
	'THANKS_NUMBER_DIGITS_EXPLAIN' => 'Specify the number of decimal places for the rating value.',
	'THANKS_NUMBER_ROW_REPUT' => 'The number of rows in the toplist for rating',
	'THANKS_NUMBER_ROW_REPUT_EXPLAIN' => 'Specify the number of rows to display in posts, topics and forums rating toplist.',
	'THANKS_NUMBER_POST' => 'Number of thanks listed in a post',
	'THANKS_NUMBER_POST_EXPLAIN' => 'Maximum number of thanks displayed when viewing a post. <br /> <strong> Remember that slow down will be noticed if this value is set over 250. </strong>',
	'THANKS_ONLY_FIRST_POST' => 'Only for the first post in the topic',
	'THANKS_ONLY_FIRST_POST_EXPLAIN' => 'If enabled, users can thank only for the first post in the topic.',
	'THANKS_POST_REPUT_VIEW' => 'Kuva reiting postituses',
	'THANKS_POST_REPUT_VIEW_EXPLAIN' => 'If enabled, posts rating will be displayed when viewing a topic.',
	'THANKS_POSTLIST_VIEW' => 'Tänude nimekiri postituses',
	'THANKS_POSTLIST_VIEW_EXPLAIN' => 'If enabled, a list of users who thanked the author for the post will be displayed. <br/> Note that this option will only be effective if the administrator has enabled the permission to give thanks for the post in that forum.',
	'THANKS_PROFILELIST_VIEW' => 'Tänude nimekiri profiilis',
	'THANKS_PROFILELIST_VIEW_EXPLAIN' => 'If enabled, a complete list of thanks including number of thanks and which posts a user has been thanked for will be displayed.',
	'THANKS_REFRESH' => 'Uuenda tänude loendurit',
	'THANKS_REFRESH_EXPLAIN' => 'Here you can update thanks counters after a mass removal of posts/topics/users, splitting/merging of topics, setting/removing Global Announcement, enabling/disabling option "Only for the first post in the topic", changing posts owners and etc. This may take some time.<br /><strong>Important: To work correctly, the refresh counters function needs MySQL version 4.1 or later!<br />Attention!<br /> - Refreshing will erase all thanks for the guest posts!<br /> - Refreshing will erase all thanks for the Global Announcements, if the option `Thanks in Global Announcements` is OFF!<br /> - Refreshing will erase all thanks for all positions excepting the first in the topic, if the option `Only for the first post in the topic` is ON!</strong>',
	'THANKS_REFRESH_MSG' => 'This can take a few minutes to complete. All incorrect thanks entries will be deleted! <br /> Actions is not reversible!',
	'THANKS_REFRESHED_MSG' => 'Loendurite uuendus',
	'THANKS_REPUT_GRAPHIC' => 'Graphic display of the rating',
	'THANKS_REPUT_GRAPHIC_EXPLAIN' => 'If enabled, the rating value will be displayed graphically, using the images below.',
	'THANKS_TIME_VIEW' => 'Tänamise aeg/kellaaeg',
	
	
	
	
	
	
	
	
	
	
	
	
	'THANKS_TIME_VIEW_EXPLAIN' => 'If enabled, the post will display the thanks time.',
	'THANKS_TOP_NUMBER'	=> 'Number of users in top list',
	'THANKS_TOP_NUMBER_EXPLAIN'	=> 'Specify the number of users to show in the toplist on index. 0 - off displaying toplist.',
	'THANKS_TOPIC_REPUT_VIEW' => 'Kuva teema reiting',
	
	
	'THANKS_TOPIC_REPUT_VIEW_EXPLAIN' => 'If enabled, topic rating will be displayed when viewing a forum.',
	'TRUNCATE' => 'Clear',
	'TRUNCATE_THANKS' => 'Clear the list of thanks',
	'TRUNCATE_THANKS_EXPLAIN' => 'This procedure completely clears all thanks counters (removes all issued thanks). <br /> Action is not reversible!',
	'TRUNCATE_THANKS_MSG' => 'Thanks counters cleared.',
	'REFRESH_THANKS_CONFIRM' => 'Do you really want to refresh the Thanks counters?',
	'TRUNCATE_THANKS_CONFIRM' => 'Do you really want to clear the Thanks counters?',
	'TRUNCATE_NO_THANKS' => 'Operation canceled',
	'ALLOW_THANKS_PM_ON' => 'Notify me PM if someone thanks my post',
	'ALLOW_THANKS_EMAIL_ON'	=> 'Notify me e-mail if someone thanks my post',
	'THANKS_POST_VIEW_GUESTS' => 'Show to not identified users (guests)',
	'THANKS_POST_VIEW_GUESTS_EXPLAIN' => 'If active, it will show thanks and reputation (if active) to not identified users (guests).',
	'THANKS_POST_VIEW_ROBOTS' => 'Show to search engines (bots)',
	'THANKS_POST_VIEW_ROBOTS_EXPLAIN' => 'If active, it will show thanks and reputation (if active) to search engines (bots).'
		));
