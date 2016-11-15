# Symfony 101

> A simple symfony web app to generate a random number. If the user enters a number, he is redirected to that number's route, else to a random route.

## Installing & Setting up the Symfony Framework

```shell
sudo mkdir -p /usr/local/bin
sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
sudo chmod a+x /usr/local/bin/symfony
```
For Windows systems, refer to [this](http://symfony.com/doc/current/setup.html#creating-symfony-applications) page

## Running the app

```shell
git clone https://github.com/prabhakar267/symfony-101.git && cd symfony-101.git
[sudo] composer install
php bin/console server:run
```

## Contribution

> **Since this was my first time trying hands on Symfony, if you find any improvements, do make a contribution**
