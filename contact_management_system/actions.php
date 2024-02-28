<?php
// Include functions file
include 'functions.php';

// Handle different actions based on the request

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action']) && !empty($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'create':
                // Handle create action
                $name = $_POST['name'];
                $email = 
                $phone = 
                $image = 
                createContact($name, $email, $phone, $image);
                break;

            case 'edit':
                // Handle edit action
                $id = 
                $name = 
                $email = 
                $phone = 
                $image = 
                editContact($id, $name, $email, $phone, $image);
                break;

            // Add more cases for other actions like delete, update, etc.

            default:
                // Handle default case
                break;
        }
    }
}
?>
