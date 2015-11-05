# adite/phpmyadmin
---
## phpMyAdmin for docker
![tescom](https://en.gravatar.com/userimage/96759029/aa4308f795041de37cc2fedf0d1071ca?size=128)
---
## IMAGE FROM
adite/apache-php

## VERSION
* PHPMYADMIN 4.5
* PHP 5.5.9
* APACHE 2.4.7

## ENVIRONMENT
* DB_HOST       : DB Hostname or IP Address
* DB_PORT       : DB Port
* DB_USER       : DB User Name
* DB_PASSWORD   : DB User Password

## USAGE
---
### With Mysql Container
```shell
#### Run Mysql Container
$ sudo docker run --name mysql -e MYSQL_ROOT_PASSWORD=${my_password} -d mysql

#### Run phpMyAdmin Container
$ sudo docker run --link mysql:mysql \
                  -v ${local_share_directory}:/data \
                  -p ${your_port}:80 adite/phpmyadmin
```
---
### With MariaDB Container
```shell
#### Run MariaDB Container
$ sudo docker run --name mariadb -e MYSQL_ROOT_PASSWORD=${my_password} -d mariadb

#### Run phpMyAdmin Container
$ sudo docker run --link mariadb:mysql \
                  -v ${local_share_directory}:/data \
                  -p ${your_port}:80 adite/phpmyadmin
```
---
### Connect Remote/Local Database
```shell
$ sudo docker run -e DB_HOST=${your_db_hostname_or_ip} \
                     DB_PORT=${your_db_port} \
                     DB_USER=${your_db_user} \
                     DB_PASSWORD=${your_db_user_password} \
                  -v ${local_share_directory}:/data \
                  -p ${your_port}:80 adite/phpmyadmin
```
---
* If you connect another mysql/mariadb, edit /etc/phpmyadmin/config-db.php in your container.
* When a mysql/mariadb container is linked at port 3306 with alias "db" all the variabeles are automatically configured.
