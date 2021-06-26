<?php
/*
 * Created by (c)danidoble 2021.
 */

namespace Danidoble\Translation;
/**
 * Class Translation
 * @package Danidoble\Translation
 */
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

    /**
     * @param $dir
     * @param string $name
     * @return bool
     */
    public function cpEsExampleFile($dir, string $name="es"): bool
    {
        $dir = realpath($dir);
        if(is_dir($dir)){
            $dir .= '/'.$name.'.json';
            $json_file = realpath(__DIR__.'/../Tests/es.json');
            if(copy($json_file,$dir)){
                return true;
            }
        }
        return false;
    }

}