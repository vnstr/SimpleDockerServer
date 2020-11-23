FROM debian:buster
#main image

RUN apt -y update && apt -y upgrade
#update packages

RUN apt install -y nginx default-mysql-server \
php7.3 php7.3-fpm wordpress php7.3-mysql \
php-json php-mbstring openssl vim
#download needs pakages

COPY ./srcs/start_service.sh ./srcs/init_database.sql /
#script for starting service
#base creating and initialization

COPY ./srcs/default /etc/nginx/sites-available
#config for nginx


COPY ./srcs/gdrive.crt /etc/ssl/certs/
#certificate for ssl

COPY ./srcs/gdrive.key /etc/ssl/private/
#key for ssl

COPY ./srcs/autoindex.sh /
#switch autoindex

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz
#download phpMyAdmin

RUN tar xvzf phpmyadmin.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin
#setup phpMyAdmin to nginx

RUN mv /usr/share/wordpress /var/www/html
#setup wordpress to nginx

COPY ./srcs/wp-config.php /var/www/html/wordpress
#config for wordpress

COPY ./srcs/config.inc.php /var/www/html/phpmyadmin
#config for phpMyAdmin

RUN chown -R www-data /var/www/html
#union to group

EXPOSE 80 443
#open ports

RUN service mysql start && mysql < init_database.sql
#config for mysql

ENTRYPOINT bash start_service.sh
#end of Dockerfile
