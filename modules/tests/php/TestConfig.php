<?php

ini_set('xdebug.show_exception_trace', 0);

if (!defined('ROOT_PATH')) {
	$rootPath = realpath(__DIR__ . '/../../..');
	define('ROOT_PATH', $rootPath);
}
if (!defined('SRC_PATH')) {
	define('SRC_PATH', $rootPath);
}
if (!defined('TEST_PATH')) {
	define('TEST_PATH', $rootPath . '/modules/tests/php');
}

