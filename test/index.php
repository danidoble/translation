<?php
include __DIR__.'/../vendor/autoload.php';

$translator = new \Danidoble\Translation\Translation();

$translator->apply(__DIR__ . DIRECTORY_SEPARATOR .'es.json');

echo __('hello from global function')."\n";

echo \Danidoble\Translation\Translation::__('hello from namespace')."\n";

use \Danidoble\Translation\Translation as tr;

echo tr::__('hello from rename namespace class')."\n";