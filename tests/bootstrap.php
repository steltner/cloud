<?php
define('PHPUNIT_RUN', 1);

$configDir = getenv('CONFIG_DIR');
if ($configDir) {
	define('PHPUNIT_CONFIG_DIR', $configDir);
}

require_once __DIR__ . '/../lib/base.php';

// load all enabled apps
OC_App::loadApps();

OC_Hook::clear();

set_include_path(get_include_path() . PATH_SEPARATOR . '/usr/share/php');
