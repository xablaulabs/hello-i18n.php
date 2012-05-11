<?php
	header('Content-Type: text/html; charset=utf-8');
	$lang = 'de_DE';
	putenv("LANG=$lang");
	setlocale(LC_ALL, $lang);
	bindtextdomain('hello','i18n/');
	textdomain('hello');
	echo _("hello world\n");
?>