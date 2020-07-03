<?php
//include_once ('Animal.php');
//include_once ('Human.php');
//include_once ('General.php');
//
//spl_autoload_register(function ($name){
//   include 'class/'.$name.'.php';
//});
//
//$animal1 = new Animal();
//$human1 = new Human();
//$general1 = new General();
require __DIR__.'/vendor/autoload.php';
use Demo\Controllers\DemoController;
$demo = new DemoController();
print_r($demo->listUser()) ;
