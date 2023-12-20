<?php

namespace App\Controllers;




class HomeController
{

    public function index()
    {
        ob_start();
        include ROOT_PATH . '/app/views/home/index.php';
        $content = ob_get_clean();

        include ROOT_PATH . '/app/views/layout.php';
    } 

}