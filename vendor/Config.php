<?php
namespace vendor;

class Config implements \ArrayAccess
{
    protected $config = array();

    function __construct($config)
    {
        $this->config = $config;
    }

    function offsetGet($key)
    {
        if (empty($this->config[$key])) {
            $file_path = BASEDIR . '/' . $key . '.php';
            $config = require $file_path;
            $this->config[$key] = $config;
        }
        return $this->config[$key];
    }

    function offsetSet($key, $value)
    {
        throw new \Exception("cannot write config file.");
    }

    function offsetExists($key)
    {
        return isset($this->config[$key]);
    }

    function offsetUnset($key)
    {
        unset($this->config[$key]);
    }
}