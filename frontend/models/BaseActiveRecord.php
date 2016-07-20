<?php
namespace frontend\models;

use vendor\Application;
use vendor\Configure;
use vendor\Database\MySQLi;

class BaseActiveRecord extends Configure
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        if (!$this->db) {
            $db_conf = $this->config;
            $db_conf = $db_conf['db']['master'];
            $this->db = new MySQLi();
            $this->db->connect($db_conf['host'], $db_conf['user'], $db_conf['password'], $db_conf['dbname']);
        }
    }

    public function getDb()
    {
        return $this->db;
    }
}