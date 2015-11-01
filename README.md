# adite/phpmyadmin
---
## phpMyAdmin for docker
![tescom](https://en.gravatar.com/userimage/96759029/aa4308f795041de37cc2fedf0d1071ca?size=128)
---
## IMAGE FROM
php:5.6-apache

## VERSION
* PHPMYADMIN 4.4
* PHP 5.6
* APACHE 2.2
   
## Volume Information
```shell
/var/www/html
```
   

## USAGE
---
### With Mysql Container
```shell
$ sudo docker run --name mysql -e MYSQL_ROOT_PASSWORD=my_password -d mysql
$ sudo docker run --link mysql:mysql -v ${local_share_directory}:/var/www/html -p 1234:80 adite/phpmyadmin
```
---
### With MariaDB Container
```shell
$ sudo docker run --name mariadb -e MYSQL_ROOT_PASSWORD=my_password -d mariadb
$ sudo docker run --link mariadb:mysql -v ${local_share_directory}:/var/www/html -p 1234:80 adite/phpmyadmin
```
---
* If you connect remote mysql/mariadb, edit config.inc.php in your local volume. 
