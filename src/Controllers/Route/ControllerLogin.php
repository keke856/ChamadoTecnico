<?php

namespace Microstar\Controllers\Route;

use Microstar\Controllers\instructions\InterfaceRequest;

require __DIR__."/../../../vendor/autoload.php";
if(!isset($_SESSION)){
    session_start();
}


class ControllerLogin implements InterfaceRequest{

    public function processRequest(): void
    {
        $_SESSION['type'] = 'user';
        require __DIR__."/../../View/login.php";
    }

}