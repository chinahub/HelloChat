<?php
namespace vendor;

abstract class Configure
{
    protected $config;

    public function __construct()
    {
        $this->config = Register::get('helloChat::app');
    }
}