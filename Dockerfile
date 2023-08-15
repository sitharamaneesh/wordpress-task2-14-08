FROM wordpress 

# Set environment variables used by the Wordpress image
# DB_USER and DB_PASSWORD are included as an example. However,
# these should be removed and set during docker run.

ENV WORDPRESS_DB_HOST=35.228.151.183 \
    WORDPRESS_DB_USER=root \
    WORDPRESS_DB_PASSWORD=wordpress \
    WORDPRESS_DB_NAME=wordpress_database \
    WORDPRESS_TABLE_PREFIX=wp_

COPY wp-content/plugins/ /var/www/html/wp-content/plugins
COPY wp-content/themes/ /var/www/html/wp-content/themes
COPY wp-config.php /var/www/html/wp-config.php
#COPY wp-content/uploads/ /var/www/html/wp-content/uploads
