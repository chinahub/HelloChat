<?php
namespace frontend\controllers;

use vendor\Controller;

class SiteController extends Controller
{
    function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }
}