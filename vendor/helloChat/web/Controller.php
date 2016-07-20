<?php
namespace vendor\helloChat\web;

use vendor\helloChat\base\BaseController;

class Controller extends BaseController
{
    function __construct($controller_name, $view_name)
    {
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