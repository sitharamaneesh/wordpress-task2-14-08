FROM wordpress

# Set environment variables used by the Wordpress image
# DB_USER and DB_PASSWORD are included as an example. However,
# these should be removed and set during docker run.

COPY wp-content/plugins/ /var/www/html/wp-content/plugins
COPY wp-content/themes/ /var/www/html/wp-content/themes
#COPY wp-config.php /var/www/html/wp-config.php
#COPY wp-content/uploads/ /var/www/html/wp-content/uploads
