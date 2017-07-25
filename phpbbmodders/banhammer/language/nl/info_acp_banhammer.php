<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva <jari@tumba25.net>
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
	'ACP_BAN_EMAIL'		=> 'Ban gebruikers e-mail adres',
	'ACP_BAN_IP'		=> 'Ban gebruikers IP adres',
	'ACP_BAN_IP_EXPLAIN'	=> '<strong>Wees hiermee voorzichtig.</strong> De meeste thuisgebruikers hebben dynamische IP-adressen en hoeven alleen hun router / modem opnieuw te starten om een nieuw IP-adres te verkrijgen. De volgende dag kan het IP-adres worden toegewezen aan een andere persoon. Spammers maken ook gebruik van anonieme proxies of het Tor netwerk, deze maken een IP ban zinloos.',

	'ACP_DEL_AVATAR'	=> 'Verwijder gebruikers avatar',
	'ACP_DEL_PRIVMSGS'	=> 'Verwijder gebruikers private berichten',
	'ACP_DEL_POSTS'		=> 'Verwijder gebruikers posten',
	'ACP_DEL_PROFILE'	=> 'Verwijder gebruikers profiel velden',
	'ACP_DEL_SIGNATURE'	=> 'Verwijder gebruikers onderschrift',

	'ACP_GROUP_MISSING'	=> 'De groep &quot;%s&quot; bestaat niet.', // %s is the group name.

	'ACP_MOVE_GROUP'			=> 'Verplaats naar groep',
	'ACP_MOVE_GROUP_EXPLAIN'	=> 'Naam van de groep naar waar gebande gebruikers moeten worden verplaatst. Dit zal ook hun standaardgroep zijn.<br /><strong>Wanneer er enkel <em>“Geen groep opgegeven.”</em> zichtbaar is in het drop down menu, dan heb je geen groepen ingesteld.</strong>',

	'ACP_BH_TITLE'		=> 'Ban Hamer',
	'ACP_BH_SETTINGS'	=> 'Ban Hamer Instellingen',

	'SETTINGS_ERROR'		=> 'Er is een fout opgetreden bij het opslaan van uw instellingen. Gelieve de backtrace met uw foutrapport in te dienen.',
	'SETTINGS_SUCCESS'		=> 'De instellingen werden succesvol opgeslagen',
	'SFS_API_KEY'			=> 'SFS API sleutel',
	'SFS_API_KEY_EXPLAIN'	=> 'Als u automatisch spammers wilt melden bij StopForumSpam, heeft u een API-sleutel nodig. <a href="http://www.stopforumspam.com/signup">http://www.stopforumspam.com/signup</a>.',
	'SFS_NEEDS_CURL'		=> '<span style="color:red;">Uw server heeft cURL nodig om de stop-spam-spamdienst te kunnen gebruiken.</span>',
));
