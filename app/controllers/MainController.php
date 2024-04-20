<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function homepage()
    {
        include '../public/assets/views/main/homepage.php';
        $this->view('homepage.php');
    }

    public function notFound()
    {
        echo "404 Not Found";

    }

}
