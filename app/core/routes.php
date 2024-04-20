<?php

use app\controllers\UserController;
use app\controllers\ContactController;
use app\controllers\ProjectsController;

$routes = [
    'users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
        'POST' => 'saveUsers'
    ],
    'view-users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
    ],

    'contact' => [
        'controller' => ContactController::class,
        'GET'=> 'showContactForm',
        'POST'=> 'processContactForm'
    ],

    'projects' => [
        'controller' => ProjectsController::class,
        'GET'=> 'getProjects',
        'POST' =>'addProject'
    ],
];
