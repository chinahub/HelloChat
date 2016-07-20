<?php
namespace frontend\Controller;
use vendor\Controller;
use vendor\Factory;

class SiteController extends Controller
{
    function actionIndex()
    {
        $model = Factory::getModel('User');
        $userid = $model->create(array('name' => 'rango', 'mobile' => '189xxxx'));
        return array('userid' => $userid, 'name' => 'rango');
    }

    function index2()
    {
        $db = Factory::getDatabase();
        $db->query("select * from user");
        $db->query("delete from user where id=1");
        $db->query("update user set name='rango2' where id=1");
    }
}