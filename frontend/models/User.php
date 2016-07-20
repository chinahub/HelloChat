<?php
namespace frontend\models;

class User extends BaseActiveRecord
{
    public function getUser()
    {
        return $this->db;
    }

    function getInfo($id)
    {
        return Factory::getDatabase('slave')->query("select * from user where id =$id limit 1")->fetch_assoc();
    }

    function create($user)
    {
        //insert to database
        $userid = 1;
        $this->notify($user);
        return $userid;
    }
}