<?php

namespace app\models;
use app\core\Database;

class Projects

{
    use Database;
    public function getAllProjects()
    {
        $query = "select * from projects";
        return $this->query($query);
    }

    public function addProject($title, $description)
    {
        $created_at = date("Y-m-d H:i:s");
        $query = "insert into projects (title, description, created_at) values (?,?,?)";
        $this->query($query, [$title, $description, $created_at]);
    }
}
