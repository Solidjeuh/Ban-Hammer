<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva <jari@tumba25.net>
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net/> 
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
	'ACP_BAN_EMAIL'		=> 'Ban gebruikers e-mailadres',
	'ACP_BAN_IP'		=> 'Ban gebruikers IP-adres',
	'ACP_BAN_IP_EXPLAIN'	=> '<strong>Wees hier voorzichtig mee.</strong> De meeste thuisgebruikers hebben dynamische IP-adressen en hoeven alleen de router / modem opnieuw op te starten om een nieuw IP-adres te verkrijgen. De volgende dag kan dat IP-adres worden toegewezen aan een gebruiker die u op uw site wilt hebben. Spammers maken ook gebruik van anonieme proxies of maken gebruik van het Tor Netwerk. Beide maken deze ban volledig zinloos.',

	'ACP_DEL_AVATAR'	=> 'Verwijder gebruikers avatar',
	'ACP_DEL_PRIVMSGS'	=> 'Verwijder gebruikers privé berichten',
	'ACP_DEL_POSTS'		=> 'Verwijder posten van deze gebruiker',
	'ACP_DEL_PROFILE'	=> 'Verwijder profiel velden van deze gebruiker',
	'ACP_DEL_SIGNATURE'	=> 'Verwijder het onderschrift van deze gebruiker',

	'ACP_GROUP_MISSING'	=> 'De groep "%s" bestaat niet.', // %s is the group name.

	'ACP_MOVE_GROUP'			=> 'Verplaats naar groep',
	'ACP_MOVE_GROUP_EXPLAIN'	=> 'Naam van de groep waarnaar verbannen gebruikers moeten worden verplaatst. Dit is ook hun standaard groep.<br /><strong>Indien er niets buiten: <em>“Geen groep opgegeven.”</em> verschijnt in de keuzelijst, hebt geen groepen ingesteld.</strong>',
	'BAN_LENGTH_EXPLAIN'	=> 'Als één van de verban opties is ingesteld, wordt de gebruiker verbannen gedurende de tijd die hier is ingesteld. Dit kan ook ingesteld worden bij: Gebruik de ban hamer voor deze gebruiker.',
	'SETTINGS_ERROR'		=> 'Er is een fout opgetreden bij het opslaan van uw instellingen. Voer de backtrace in met uw fouten rapport.',
	'SFS_API_KEY'			=> 'SFS API key',
	'SFS_API_KEY_EXPLAIN'	=> 'Als u spammers automatisch wilt melden aan StopForumSpam, hebt u een API-sleutel nodig, <a href="http://www.stopforumspam.com/signup">http://www.stopforumspam.com/signup</a>.',
	'SFS_NEEDS_CURL'		=> '<span style="color:red;">Uw server heeft cURL nodig om de spam-service van het stopforum te gebruiken.</span>',
));
