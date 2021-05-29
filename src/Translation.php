<?php

namespace Danidoble\Translation;

class Translation
{
    /**
     * Apply your file (.json) language to constant
     * @param $file
     * @return bool
     */
    public function apply($file): bool
    {
        if(file_exists($file)) {
            define('__dd_lang', json_decode(file_get_contents($file), true));
            return true;
        }
        return false;
    }

    /**
     * @param string $key
     * @return string
     */
    public static function __(string $key = ""): string
    {
        if(defined('__dd_lang')) {
            return !isset(__dd_lang[$key]) ? $key : __dd_lang[$key];
        }
        return $key;
    }

}