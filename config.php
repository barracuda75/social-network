<?php

// Defining Host const
define("DB_HOST","localhost");
// Defining Database Name const
define("DB_NAME", "social-network");
// Defining Database User const
define("DB_USER", "root");
// Defining DB Password const
define("DB_PWD", "root");
// Defining PDO parameter to connect to mysql DB
define("DBN", "mysql:dbname=".DB_NAME.";host=".DB_HOST);

define('APP_ROOT_DIR', __DIR__);

define("ROOT_URL", "http://localhost:/");

define('APP_PUBLIC_DIR', APP_ROOT_DIR . '/web');

define('APP_VIEWS_DIR', APP_ROOT_DIR . '/app/Views');

define('APP_STYLE_DIR', APP_ROOT_DIR . '/web/assets/styles');