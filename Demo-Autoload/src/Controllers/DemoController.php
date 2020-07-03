<?php
namespace Demo\Controllers;
use Demo\Models\User;
class DemoController
{
    public function listUser(){
        return (new User)->getName();
    }
}