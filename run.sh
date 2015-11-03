#!/bin/bash

mv /etc/phpmyadmin/config-db.php /data/
ln -s /data/config-db.php /etc/phpmyadmin/config-db.php

. /etc/apache2/envvars
exec dockerize \
     -stdout /var/log/apache2/access.log \
     -stderr /var/log/apache2/error.log \
     /usr/sbin/apache2 -DFOREGROUND
