<?php
namespace frontend\controllers;

use frontend\models\User;
use vendor\Controller;
use vendor\Register;

class UserController extends Controller
{
    function actionIndex()
    {
        $model = new User();
        $db = $model->getUser();
        var_dump($db);
    }
}