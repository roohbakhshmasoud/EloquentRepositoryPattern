<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require('vendor/autoload.php');



    $capsule = new \Illuminate\Database\Capsule\Manager();
    $capsule->addConnection(Repository\Config\config::$db);
    $capsule->bootEloquent();
//        $this->capsule->getConnection()->select();


require('vendor/autoload.php');

$sms = new Repository\Contracts\ModelRepository('Repository\Eloquent\Sms');
print_r($sms->find(5));