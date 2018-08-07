sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install libapache2-mod-php7.0
sudo a2dismod php5
sudo a2enmod php7.0
sudo apt-get install php7.0-dom
sudo apt-get install php7.0-mbstring
sudo apt-get install php7.0-zip
sudo apt-get install php7.0-sqlite
php -v


composer create-project --prefer-dist laravel/laravel=5.4.* project-name


php artisan serve --host $IP --port $PORT