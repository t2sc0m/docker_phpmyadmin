#!/bin/bash

mv /etc/phpmyadmin/config-db.php /data/
ln -s /data/config-db.php /etc/phpmyadmin/config-db.php
