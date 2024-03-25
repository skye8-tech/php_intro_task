<?php

// Define functions for database operations or other reusable tasks

function connectToDatabase() {
    // Implement database connection logic
}

function createContact($name, $email, $phone, $image) {
    include "connect.php";
    $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `image`)
    VALUES('$name', '$email', '$phone', '$image')";    
    $result = $connect ->query($sql);
    
    if($result){
        header('LOCATION: index.php?message=created');
    }else{
        header('LOCATION: create.php?message=failed');
    }
    // Implement logic to create a new contact in the database
}

function editContact($id, $name, $email, $phone, $image) {
    include "connect.php";
    $sql = "UPDATE `contact` 
    SET `name` = '$name' , `email` = '$email', `phone` = '$phone' `image` = '$image' WHERE `id` = $id";
    $result = $connect -> query($sql);
    if($result){
        header('LOCATION: index.php?message=edited');
    }
        else{
            header("LOCATION: edit.php?updateid= $id");
        }
    }

    // Implement logic to edit an existing contact in the database


function deleteContact($id) {
    // Implement logic to delete a contact from the database
}

// Add more functions as needed
