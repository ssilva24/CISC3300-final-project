<?php

namespace app\core;

class Controller
{

    public function view($path, $includeBundle = false)
    {
        if($includeBundle) {
            echo vite('main.js');
        }

        $fullpath = __DIR__ . '../public/views/main/homepage.php' .$path;
        if(file_exists($fullpath)) {
            include $fullpath;
        }
    }


}
