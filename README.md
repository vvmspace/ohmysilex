# Oh My Silex

Silex quick start repository - competitor/alternative of Silex Skeleton

## Structure of simple Silex PHP application:

.htaccess - if you are using c9.io or something else for development from root of project NOT RECOMENDED FOR PRODUCTION

### cache: cache files

doctrine - cache files for doctrine

doctrine/proxy - cache files for doctrine proxies

### public: config your VirtualHost to this folder


.htaccess - do not edit

index.php - do not edit

### protected: put your files here


composer.json - first composer configuration

composer.lock - last composer configuration with all used versions in my project

app/ - folder with application

app/app.php - put your code in OhMySilexApplication class

app/controllers.php - put your controllers & routes here

app/config - configuration files

app/config/example.secret.php - examples file for secret.php

app/config/prod.php - config file for production (beta)

app/config/registers.php - register components etc here

app/config/secret.php - put your database & redis configuration, API keys etc here

app/templates - put your Twig templates here

### stuff: usefull files


ohmysilex.conf - example of Apache2 configuration

### logs: folder for error.log and access.log if you are using my apache2 config


## Installing Oh My Silex application:

Let's install this Oh My Silex into /var/www/ohmysilex folder


1.cd /var/www && git clone https://github.com/vvmspace/ohmysilex

2.Get composer: https://getcomposer.org

3.cd /var/www/ohmysilex/protected

4.composer install

5.cp /var/www/ohmysilex/stuff/ohmysilex.conf /etc/apache2/sites-available

6.a2ensite ohmysilex.conf

7.service apache2 reload
