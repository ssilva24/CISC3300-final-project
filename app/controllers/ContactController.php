<?php
namespace app\controllers;

require_once '../app/core/Database.php';
use app\core\Database;

class ContactController
{
    use Database;

    
    public function processContactForm()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            try
            {
                $query = "insert into contacts (name, email, message) values (:name, :email, :message)";

                $data = 
                [
                    ":name" => $name,
                    "email"=> $email,
                    "message"=> $message
                ];

                $this-> query($query, $data);

                header("Location: /success.php");
                exit();
            }
            catch(PDOException $e)
            {
                echo "Error: " .$e-> getMessage();
            }
        }
    }
    public function showContactForm()
    {
        include '../public/assets/views/main/contact.php';
    }
}


