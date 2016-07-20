<?php
namespace frontend\controllers;

use vendor\helloChat\web\Controller;

class LoginController extends Controller
{
    function actionIndex()
    {
        $this->render('index', ['name' => 222222]);
    }
}