<?php
$dbuser=getenv('DB_ENV_MYSQL_USER') ? :
	    getenv('DB_USER') ? :
	    'root';
$dbpass=getenv('DB_ENV_MYSQL_ROOT_PASSWORD') ? :
        getenv('DB_ENV_MYSQL_PASS') ? :
	    getenv('DB_ENV_MARIADB_PASS') ? :
	    getenv('DB_PASSWORD');
$basepath='';
$dbname='phpmyadmin';
if (preg_match('@^tcp://([\d.]+):(\d+)$@', getenv('DB_PORT'), $m)) {
  $dbserver=$m[1];
  $dbport=$m[2];
} else {
  $dbserver=getenv('DB_HOST');
  $dbport=getenv('DB_PORT');
}
$dbtype='mysql';

// add settings
/*
  $i=1;
  $i++;
  $cfg['Servers'][$i]['auth_type'] = 'cookie';
  $cfg['Servers'][$i]['verbose'] = 'db_server_alias';
  $cfg['Servers'][$i]['host'] = 'hostname or ip_address';
  $cfg['Servers'][$i]['port'] = 'db_port';
  $cfg['Servers'][$i]['connect_type'] = 'tcp';
  $cfg['Servers'][$i]['compress'] = false;
  $cfg['Servers'][$i]['extension'] = 'mysqli';
  $cfg['Servers'][$i]['user'] = 'db_user';
  $cfg['Servers'][$i]['password'] = 'user_password';
  $cfg['Servers'][$i]['DefaultConnectionCollation'] = 'utf8_unicode_ci';
 */
