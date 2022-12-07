<?php

define('URL', $_SERVER['HTTP_HOST']);
define('DEV_DNS', 'ec2-18-233-121-142.compute-1.amazonaws.com');
define('PROD_DNS', 'ec2-18-204-62-90.compute-1.amazonaws.com');
define('DEV', '18.233.121.142');
define('PROD', '18.204.62.90');

if (URL == PROD_DNS || URL == PROD) {
    define('ENV', 'PROD');
} elseif (URL == DEV_DNS || URL == DEV) {
    define('ENV', 'DEV');
} else {
    define('ENV', 'LOCAL');
}

switch (ENV) {
  case 'PROD':
    define( 'DB_NAME', 'PROD_PHP');
    define( 'DB_USER', 'PROD_USER' );
    define( 'DB_PASSWORD', '161216' );
    define( 'DB_HOST', 'localhost' );
  break;
  case 'DEV':
    define( 'DB_NAME', 'DEV_PHP');
    define( 'DB_USER', 'DEV_USER' );
    define( 'DB_PASSWORD', '121612' );
    define( 'DB_HOST', 'localhost' );
  break;
  default:
    define( 'DB_NAME', '');
    define( 'DB_USER', '' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_HOST', '' );
  break;
}




