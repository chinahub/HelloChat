<?php
namespace vendor;

class HelloChat
{
    public static function autoLoad($className)
    {
        require BASEDIR . '/../' . $className . '.php';
    }

    public static function className()
    {
        return get_called_class();
    }
}