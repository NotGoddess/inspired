<?php
/***
** This can be used to store secure information outside the webroot for security.
** like database information
**
**  To use this, add the following to your site settings.php file:
 if (file_exists($app_root . '/../config/drupal8/secure_config.php')) {
   include $app_root . '/../config/drupal8/secure_config.php';
 } 
** 
** These settings from the settings.php file will be overridden by these.
*/

$settings['hash_salt'] = '';
$databases['default']['default'] = array (
  'database' => 'databasename',
  'username' => 'sqlusername',
  'password' => 'sqlpassword',
  'host' => 'localhost',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
);

