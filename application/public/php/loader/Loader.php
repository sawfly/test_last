<?php

class Loader
{
    static $directories = ['app', 'config'];

//    priva $scriptDir = str_replace('loader', '', __DIR__);

    public function __construct()
    {

    }

    public static function load($file)
    {
        $scriptDir = str_replace('loader', '', __DIR__);
        foreach (self::$directories as $dir) {
            if (file_exists("$scriptDir$dir/$file")) {
                require_once("$scriptDir$dir/$file");
            }
        }
    }

}