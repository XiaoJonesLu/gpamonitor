<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// local server
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'Applications'.DS.'MAMP'.DS.'htdocs'.DS.'gpamonitor');

// remote server, AWS
// defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'var'.DS.'www'.DS.'html'.DS.'server'.DS.'gpamonitor');

define('IS_DEVELOPMENT_MODE', true);
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
?>