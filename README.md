# Translation

This package is useful for easy translation, you only need one o many files of languages in .json

## Installation

```
composer require danidoble/translation 
```


You need make a file .json and give the directory by parameter to apply the config

Example Directory:

```
Lang ---|
        | es.json
        | br.json
```

Instantiate to apply config in constant

```
<?php
// include composer autoload to your project 
include __DIR__ . '/vendor/autoload.php'

// Instantiate Translation class
$translator = new \Danidoble\Translation\Translation();

// pass config file by parameter, here you need pass all route file
$translator->apply(__DIR__ . DIRECTORY_SEPARATOR .'es.json');
```

## Or with selectable language 

```
<?php
// include composer autoload to your project 
include __DIR__ . '/vendor/autoload.php'

// Instantiate Translation class
$translator = new \Danidoble\Translation\Translation();

// pass config file by parameter, here you need pass all route file
$lang = isset(__GET['lang']) && !empty(__GET['lang']) ? __GET['lang'].'.json' : 'br.json';

$file_lang = __DIR__ . DIRECTORY_SEPARATOR .$lang;

if(file_exist($file_lang){
    $translator->apply($file_lang);
}else{
    echo 'Language file not found :(';
}
```

## How to use

Global function

```
echo __('hello');
```

Or if the function ```__``` already exist you must translate by static method 

```
echo \Danidoble\Translation\Translation::__('hello');
```

Or 

```
use \Danidoble\Translation\Translation as tr;

echo tr::__('hello');
```