<?php
use app\controllers;

class IndexControler extends Controller{
	function actionIndex(){
		return $this->render('index');
	}
}