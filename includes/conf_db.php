<?php
// local database
// defined('DB_SERVER') ? null : define("DB_SERVER", "127.0.0.1");
// defined('DB_USER')   ? null : define("DB_USER", "root");
// defined('DB_PASS')   ? null : define("DB_PASS", "");
// defined('DB_NAME')   ? null : define("DB_NAME", "gpamonitor");

// remote database, AWS
defined('DB_SERVER') ? null : define("DB_SERVER", "xiaojoneslu.coplcfbocuwc.ap-southeast-1.rds.amazonaws.com");
defined('DB_USER')   ? null : define("DB_USER", "xiaojoneslu");
defined('DB_PASS')   ? null : define("DB_PASS", "X3h0q2i3b1");
defined('DB_NAME')   ? null : define("DB_NAME", "gpamonitor");

?>