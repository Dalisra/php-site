## Installing PHP-Site
This guide will show how to install additional sites to your web server,
given that you at least already have the [php-core](https://github.com/Dalisra/php-core) project installed.

If you have the core installed but no default site, or nothing installed at all,
 we recommend you look at the php-core installation guide.

DISCLAIMER:
This project does not work by itself, but is intended to be used alongside the [php-core](https://github.com/Dalisra/php-core) project.

## 1. Adding the site folder
Clone/Install the php-site project into a folder in your webserver root.
You can choose the name of the folder yourself, as long as it doesn't interfere with any existing folders, i.e. "core" or "site-default".

Wamp example: "C:\wamp\www\my_site".

This folder holds all the site specific files and folders. I.e. some default templates and controllers for you to use.
It also comes prepackaged with bootstrap, font-awesome, and jQuery

## 2. Adding rewrite rule for the site
When installing the [php-core](https://github.com/Dalisra/php-core) you should have added an .htaccess file in your webroot.
It should look something like this:

    #php_flag display_startup_errors on
    #php_flag display_errors on
    #php_flag html_errors on

    # enable PHP error logging
    #php_flag  log_errors on
    #php_value error_log  /var/www/html/logs/error.log

    #Options +FollowSymLinks -MultiViews -indexes
    RewriteEngine on
    RewriteRule ^$ site-default/webroot/ [L]
    RewriteRule ^(.*)$ site-default/webroot/$1 [L]

Append these two lines to the file. Make sure you type the correct folder name for your project.
(Replace "my_site" with the name that you chose in step 1)

    RewriteRule ^$ my_site/webroot/ [L]
    RewriteRule ^(.*)$ my_site/webroot/$1 [L]

Your .htaccess files should now look similar to this:

    #php_flag display_startup_errors on
    #php_flag display_errors on
    #php_flag html_errors on

    # enable PHP error logging
    #php_flag  log_errors on
    #php_value error_log  /var/www/html/logs/error.log

    #Options +FollowSymLinks -MultiViews -indexes
    RewriteEngine on
    RewriteRule ^$ site-default/webroot/ [L]
    RewriteRule ^(.*)$ site-default/webroot/$1 [L]
    RewriteRule ^$ my_site/webroot/ [L]
    RewriteRule ^(.*)$ my_site/webroot/$1 [L]

## 3. _Optional_ Setting up database config
Have a look at config/db_example.php. Use this as a base by renaming it to db.php. Put in the correct parameters for
your MySql server and database to make it work. From there on you just need to database content as needed.

## 4. Enjoy
Your new site can be enjoyed at http://your_local_host:port/my_site