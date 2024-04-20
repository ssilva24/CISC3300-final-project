<?php

namespace app\controllers;

use app\models\Projects;

class ProjectsController
{

    public function getProjects()
    {
        $project = new Projects();
        $projects = $project->getAllProjects();
        
        header("Content-Type: application/json");
        echo json_encode($projects);
    }

    public function addProject()
    {
        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ??'';

        $project = new Projects();
        $project->addProject($title, $description);
    }

}