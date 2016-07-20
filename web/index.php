<?php
define('BASEDIR', __DIR__);
define('FRONTEND', dirname(__DIR__) . '/frontend');

require BASEDIR . '/../vendor/HelloChat.php';


$config = array_merge(
    require(BASEDIR . '/../config/main.php'),
    require(BASEDIR . '/../config/params.php')
);

spl_autoload_register([vendor\helloChat::className(), 'autoLoad'], true, true);

$application = vendor\Application::getInstance($config);
$application->run();
