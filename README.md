Laravel Framework 8.24.0
php 7.4.5
------------
I used Bitfumes multiauth package

Run these commands to use this project
composer update
php artisan storage:link
php artisan migrate
php artisan db:seed


Notes:
I faced an issue when using Bitfumes package
    updating admin form validation
        return an error that email used as it isn't validated on unique email
        - I tried to make validation in multiauth.php config file but it couldn't.
        - I made new adminRequest file extends that from package and override update function in controller
            but I faced override issue that two methods not compatible.

