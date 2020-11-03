# A simple string analyser

## Skills & concepts

* Parse string
* Experiment unit tests

## Set-up

This Dojo uses PHPunit for unit testing. After cloning the repository, you need to install it using composer :
```bash
composer install
```

## Goals

Declare a countVowels() function in the src/stringAnalyser.php file.
This functions analyses a string to return an array containing the number of occurences of each vowels in the string.

This function must be case insensitive so "aAa" will be counted as 3 "a".

You can assume strings contains only ASCII characters.

Examples :

* countVowels("Coucou") should return 
```php 
["a" => 0, "e" => 0, "i" => 0, "o" => 2, "u" => 2, "y" => 0] 
```
* countVowels("Alakazam") should return 
```php 
["a" => 4, "e" => 0, "i" => 0, "o" => 0, "u" => 0, "y" => 0] 
```
* countVowels("Rtfm") should return 
```php 
["a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0, "y" => 0] 
```


## Test

You can run some predefined tests on your function using 
```bash
vendor/bin/phpunit test/StringAnalyserTest.php
```