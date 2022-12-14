<?php
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

// Bot settings

$lang = array_merge($lang, array(
	'KAEROL_MISSINGAVATAR'								=> 'Proszę o ustawienie Avatara dla swojego profilu.',
	'KAEROL_MISSINGAVATAR_DESC_1'						=> 'Dokładny opis jak to wykonać znajduje się w tym poscie.',
	'KAEROL_MISSINGAVATAR_DESC_2'						=> 'HELP - Dodawanie awatara.',
	'KAEROL_MISSINGAVATAR_FOOTER'						=> 'Jeśli Avatar jest ustawiony, a ten komunikat dalej się pokazuje. Wyślij mi prywatną wiadomość :) KarolZG',
));
