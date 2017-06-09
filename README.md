# Oh My Silex

## Structure of simple Silex PHP application:

### public: config your VirtualHost to this folder

.htaccess - do not edit
index.php - do not edit

### protected: put your files here

composer.json - first composer configuration
composer.lock - last composer configuration with all used versions in my project

app/ - folder with application
app/app.php - put your code in OhMySilexApplication class
app/controllers.php - put your controllers here

app/config - configuration files
app/config/prod.php - config file for production (beta)
app/config/secret.php - put your database configuration, API keys etc here

### stuff: usefull files

ohmysilex.conf - example of Apache2 configuration

### logs: folder for error.log and access.log if you are using my apache2 config

## Installing Oh My Silex application:

1.Get composer: https://getcomposer.org

2.cd protected

3.composer install

4.cp stuff/ohmysilex.conf /etc/apache2/sites-available

5.a2ensite ohmysilex.conf

6.service apache2 reload

7.echo "Happy coding!"