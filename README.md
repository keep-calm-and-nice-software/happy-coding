# PHP Skeleton

Example of PHP Project with Composer, Namespaces, and PHPUnit ready to complete any Kata!


## Composer

To execute the test, you need to install phpunit and the rest of the dependencies.
We can archive that using composer

```php
php composer.phar install
```


## Execute Tests

### Windows
```php
.\vendor\bin\phpunit --testdox tests
```



### Mac OS X / Linux 
```php
./vendor/bin/phpunit --testdox tests
```



## Utils

- [PHPUnit Full List Asserts](https://phpunit.readthedocs.io/es/latest/assertions.htm) A documentation with all the types of asserts than you can use in PHPUnit
- [PHPStan](https://github.com/phpstan/phpstan) is a static analysis tool that allows you to discover problems in your code without running it.
- [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) is a tool to **automatically** fix PHP Coding Standards issues .


## Explanation of some files


- `phpcs.xml`: Config file for [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- `phpstan.neon`: Config file for [PHPStan](https://github.com/phpstan/phpstan)  	
- `phpunit.xml`: Config file for [PHPUnit](https://phpunit.de/manual/6.5/en/appendixes.configuration.html)
- `composer.json`: Config file for [Composer](https://getcomposer.org/doc/04-schema.md)
- `composer.lock`: Snapshot of the versions of the dependencies on Composer 

