FROM wordpress:5.8.1-apache

RUN rm -r /var/www/html/

COPY ./wordpress/ /var/www/html/

