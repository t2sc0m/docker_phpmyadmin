<?php
$dbuser=getenv('DB_ENV_MYSQL_USER') ? :	 	 # https://registry.hub.docker.com/u/tutum/mysql/
	getenv('DB_USER') ? :			 # manual 
	'root';
$dbpass=getenv('DB_ENV_MYSQL_ROOT_PASSWORD') ? : # https://registry.hub.docker.com/_/mysql/
        getenv('DB_ENV_MYSQL_PASS') ? : 	 # https://registry.hub.docker.com/u/tutum/mysql/
	getenv('DB_ENV_MARIADB_PASS') ? :        # https://registry.hub.docker.com/u/tutum/mariadb/
	getenv('DB_PASSWORD');                   # manual
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
