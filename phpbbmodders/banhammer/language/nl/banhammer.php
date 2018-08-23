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

$lang = array_merge($lang, array(
	'BANNED_ERROR'		=> 'Er waren enkele fouten tijdens het bannen van deze gebruiker',
	'BANNED_SUCCESS'	=> 'Deze gebruiker werd succesvol verbannen.',

	'ERROR_BAN_EMAIL'	=> 'Bannen van e-mail is mislukt.',
	'ERROR_BAN_IP'		=> 'Bannen van IP is mislukt.',
	'ERROR_BAN_USER'	=> 'Bannen van gebruiker is mislukt.',
	'ERROR_DEL_POSTS'	=> 'Verwijderen van gebruikers posten is mislukt.',
	'ERROR_MOVE_GROUP'	=> 'Verplaats de gebruiker naar de geselecteerde groep is mislukt.',
	'ERROR_SFS'			=> 'Stop Forum Spam',

	'BH_BAN_EMAIL'			=> 'Ban e-mailadres van deze gebruiker',
	'BH_BAN_GIVE_REASON'	=> 'De reden voor deze ban dat getoond zal worden aan de gebruiker',
	'BH_BAN_IP'				=> 'Ban het IP adres van deze gebruiker',
	'BH_BAN_IP_EXPLAIN'		=> '<strong>Wees hiermee voorzichtig.</strong> De meeste thuisgebruikers hebben dynamische IP-adressen en hoeven alleen hun router / modem opnieuw te starten om een nieuw IP-adres te verkrijgen. De volgende dag kan het IP-adres worden toegewezen aan een andere persoon. Spammers maken ook gebruik van anonieme proxies of het Tor netwerk, deze maken een IP ban zinloos.',
	'BH_BAN_LENGTH'			=> 'Ban deze gebruiker voor %s.',
	'BH_BAN_REASON'			=> 'De interne reden voor deze ban',
	'BH_BAN_USER'			=> 'Ban deze gebruiker voor %s.',
	'BH_BAN_USER_PERM'		=> 'Ban deze gebruikersnaam permanent.',
	'BH_BAN_EMAIL_PERM'		=> 'Ban het e-mailadres van deze gebruikers permanent.',
	'BH_BAN_EMAIL_FOR'		=> 'Ban het e-mailadres van deze gebruiker voor voor %s.',
	'BH_BAN_IP_PERM'		=> 'Ban dit gebruikers-IP-adres permanent.',
	'BH_BAN_IP_FOR'			=> 'Ban het IP-adres van deze gebruiker voor %s.',
	'BH_BANNED'				=> 'Deze gebruiker werd verbannen.',

	'BH_DEL_AVATAR'		=> 'Verwijder de avatar van deze gebruiker',
	'BH_DEL_PRIVMSGS'	=> 'Verwijder de privé berichten van deze gebruiker',
	'BH_DEL_POSTS'		=> 'Verwijder de posten van deze gebruiker',
	'BH_DEL_PROFILE'	=> 'Verwijder de profiel velden van deze gebruiker',
	'BH_DEL_SIGNATURE'	=> 'Verwijder het onderschrift van deze gebruiker',

	'BH_MOVE_GROUP'	=> 'Verplaats deze gebruiker naar groep: "%s"', // %s will be a group name

	'BH_REASON'		=> 'Interne reden "%s"', // %s will be the reason
	'BH_REASON_USER'	=> 'Reden naar de gebruiker toe: "%s"', // %s will be the reason

	'BH_SUBMIT_SFS'	=> 'Verzend naar stop forum spam',

	'BH_THIS_USER'	=> 'Gebruik de Ban Hamer voor deze gebruiker',

	'SFS_REPORT'	=> 'Meld deze gebruiker bij Stop Forum Spam',
	'SURE_BAN'		=> 'Ben je zeker dat je <strong>%s</strong> wenst te verbannen?', // %s will be a username.

	'THIS_WILL'	=> 'Deze acties worden ondernomen',
));
