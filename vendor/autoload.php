<?php
class Loader
{
    static function autoload($class)
    {
        require BASEDIR.'/'.$class.'.php';
    }
}