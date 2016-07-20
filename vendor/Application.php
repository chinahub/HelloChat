<?php
namespace vendor;

class Application
{
    protected static $instance;

    public $config;

    protected function __construct($config)
    {
        Register::set('helloChat::app', $config);
        $this->config = new Config($config);
    }

    static function getInstance($config = '')
    {
        if (empty(self::$instance)) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    function run()
    {
        $uri = isset($_GET['r']) ? $_GET['r'] : '';
        if (!strpos($uri, '/')) {
            $c = 'site';
            $v = 'index';
        } else {
            list($c, $v) = explode('/', trim($uri, '/'));
        }

        $c = ucwords($c);
        $class = '\\frontend\\controllers\\' . $c . 'Controller';
        $v = 'action' . ucfirst($v);

        $obj = new $class($c, $v);
        $obj->$v();
    }
}