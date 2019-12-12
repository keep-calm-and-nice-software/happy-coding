# Happy coding with PHP

Simple PHP project using *Composer*, *PHPUnit*, *Namespaces*, *PHPStan* and *PHP CS Fixer*.

## Installing dependencies

Project dependencies can be installed using *Composer*:

```php
php composer.phar install
```

## Running the test suite

Tests can be run using *PHPUnit*. From the root directory:

### On Mac OS X / Linux

```php
./vendor/bin/phpunit --testdox tests
```

### On Windows

```php
.\vendor\bin\phpunit --testdox tests
```

### On your IDE

You might want to be able to directly run tests from your IDE. Feel free to ask a facilitator if you are not sure about how to achieve it.

## Configuration files

- `phpunit.xml`: Config file for [PHPUnit](https://phpunit.de/manual/6.5/en/appendixes.configuration.html)
- `composer.json`: Config file for [Composer](https://getcomposer.org/doc/04-schema.md)
- `composer.lock`: Snapshot locking versions of installed dependencies.
- `phpcs.xml`: Config file for [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- `phpstan.neon`: Config file for [PHPStan](https://github.com/phpstan/phpstan)

## Might be useful

- [PHPUnit Full List Asserts](https://phpunit.readthedocs.io/es/latest/assertions.html) A documentation with all the types of asserts than you can use in PHPUnit
- [PHPStan](https://github.com/phpstan/phpstan) is a static analysis tool that allows you to discover problems in your code without running it.
- [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) is a tool to **automatically** fix PHP Coding Standards issues .
