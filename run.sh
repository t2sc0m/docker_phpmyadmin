#!/bin/bash

mv /etc/phpmyadmin/config-db.php /data/
ln -s /data/config-db.php /etc/phpmyadmin/config-db.php
chown www-data:www-data /data -R

. /apache-run.sh
