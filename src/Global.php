<?php
/**
 * if this function already exist, cannot be used so if you want use this package use instantiation method
 * Ex.
 *      $translator = new \Danidoble\Translation\Translation();
 *      $translator->__();
 */
if(!function_exists('__')){
    /**
     * @param string $key
     * @return string
     */
    function __(string $key = ""): string
    {
        if(defined('__dd_lang')) {
            return !isset(__dd_lang[$key]) ? $key : __dd_lang[$key];
        }
        return $key;
    }
}