<?php
// Include functions file
include 'functions.php';

// Handle different actions based on the request

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action']) && !empty($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'create':
                echo "created";
                // Handle create action
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $image = $_FILES['image']['name'];
                $result = createContact($name, $email, $phone, $image);
                break;

            case 'edit':
                // Handle edit action
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $image = $_FILES['image']['name'];
                $result= editContact($id, $name, $email, $phone, $image);
                break;

            case 'delete';
                //Handle delete action
                $id = $POST['id'];
                $result = deleteContact($id);
                break;

            default:
                // Handle default case
                $result ="invalide action";
                break;
        }

        
    }
}
?>
