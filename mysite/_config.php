<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'se-media-email-platform',
	'path' => ''
);

Object::add_extension('SiteConfig', 'SiteConfigExtension');



// Set the site locale
i18n::set_locale('en_US');
Director::set_environment_type("dev");