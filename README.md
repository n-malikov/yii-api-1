# Yii 2 - API

~~~
composer install
php init
# edit common/config/main-local.php
php yii migrate
~~~

### Apache2

~~~
sudo nano /etc/apache2/sites-available/yii-api-1.conf
~~~

~~~
<VirtualHost *:80>
    ServerName yii-api-1.test
    DocumentRoot "/var/www/yii-api-1/frontend/web/"

    <Directory "/var/www/yii-api-1/frontend/web/">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php

        # use index.php as index file
        DirectoryIndex index.php

        # ...other settings...
        # Apache 2.4
        Require all granted
           
        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    ServerName backend.yii-api-1.test
    DocumentRoot "/var/www/yii-api-1/backend/web/"
       
    <Directory "/var/www/yii-api-1/backend/web/">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php

        # use index.php as index file
        DirectoryIndex index.php

        # ...other settings...
        # Apache 2.4
        Require all granted
           
        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>
</VirtualHost>
~~~

~~~
sudo a2ensite yii-api-1.conf
sudo systemctl restart apache2
~~~
