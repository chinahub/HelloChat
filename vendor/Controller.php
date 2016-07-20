<?php
namespace vendor;

abstract class Controller extends Configure
{
    protected $data;
    protected $controller_name;
    protected $template_dir;

    function __construct($controller_name, $view_name)
    {
        parent::__construct();
        $this->controller_name = $controller_name;
        $this->template_dir = FRONTEND . '/views';
    }

    function render($file, $data = [])
    {
        $file = strtolower($this->controller_name) . '/' . $file . '.php';
        $path = $this->template_dir . '/' . $file;

        extract($data);
        include $path;
    }
}