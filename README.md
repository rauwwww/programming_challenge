# programmingchallenge_smartphone
Smartphone project programming challenge amero


# Smartphone

Version: 0.0.1

This repository servs for the Smartphone assignment. Its built with PHP and Laravel.

## How to use

### Pre-required things:

1. You need to have [Composer](https://getcomposer.org/) installed.
2. To run the vagrant setup you need to have installed [VirtualBox](https://www.virtualbox.org/wiki/Downloads) and [Vagrant](https://www.vagrantup.com/)
3. Make sure that you have the latest PHP version installed: PHP Installation for [MacOS](http://aerendir.me/2015/08/01/how-to-upgrade-php-built-in-your-mac-osx/), [Windows](http://windows.php.net/)

### Installation

1. Clone this repository ```git clone git@github.com:rauwwww/programming_challenge.git```
2. ```cd programming_challenge```
3. Install all of the packages by running ```composer install```
4. Make sure that the following code is in your /etc/hosts (Mac) / \WINDOWS\system32\drivers\etc\hosts (Windows) file.
    ```
    192.168.10.10 smartphone.app
    ```
5. Run the following command depending on your OS to generate the homestead.yaml file

    ```
    (MacOS) -> php vendor/bin/homestead make
    -----------------------------------------
    (Windows) -> vendor\\bin\\homestead make
    ```
6. Open your homestead.yaml file and change the sites map from ```homestead.app``` to ```smartphone.app```
7. Run ```vagrant up```
8. Run ```chmod -R 777 storage; cp -p .env.example .env; php artisan key:generate```
9. Run ```vagrant ssh``` cd ```programming-challenge``` then Run ```php artisan migrate``` and ```php artisan seed``` to build the database with new data, user passwords ```123456```

If you didn't received any error on this steps you can go to your browser and access ```http://smartphone.app``` or ```http://192.168.10.10```.

10. DB connection ```127.0.0.1 33060 homestead secret```


### Installation issues

1. If you get a message like ```'Oops, something went wrong'``` you need to go to ```/config/app.php``` and set ```true``` the ```APP_DEBUG.``` After you've done this and you get the message ```RuntimeException``` or ```RuntimeError``` try:

    ```
    chmod -R 777 storage; cp -p .env.example .env; php artisan key:generate
    ```
    More documentation in [here](http://laravel.io/forum/04-22-2014-whoops-looks-like-something-went-wrong-with-new-installation).
2. If you get the error ```The UID used to create the VM was: xx``` when you run ```vagrant up```, documentation is [here](http://stackoverflow.com/questions/36636451/windows-virtualbox-vm-was-created-with-a-user-that-doesnt-match-the-current-u).

!windows Error:

  'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

Solution:

chmod -R 777 storage; cp -p .env.example .env; php artisan key:generate

http://laravel.io/forum/04-22-2014-whoops-looks-like-something-went-wrong-with-new-installation

## Documentation

If you need more documentation about Laravel and PHP here are some good places where you can look at.

1. [Laravel Documentation](https://laravel.com/docs/5.3)
2. [The Laravel Book](http://learninglaravel.net/books/laravel)
3. [Laracasts](https://laracasts.com/)
4. [Laravel Cook Book](http://learninglaravel.net/)

## Contact

patrickholsths@gmail.com
