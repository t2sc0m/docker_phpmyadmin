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
