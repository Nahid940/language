# language
A simple light weight PHP library for converting language into English to Bangla or Bangla To English

# Requirements
* PHP Version 5.5+
* Composer installed in your Computer

# Installation
 Rum the Command 
 ```php
    composer require nahid940/language
```

autoload the file in your php file

```php
    require 'vendor/autoload.php'
```
instantiate The object of Language Class
```php
    use Language\Language;
    $lng=new Language();
    echo $lng->getLanguage('bn',2);
    echo $lng->getLanguage('en',2);
```
1. You will get the output 'বয়স'
2. You will get the output 'Age'

Now You can manage the json file according to your need in the folder vendor/nahid940/json_files.