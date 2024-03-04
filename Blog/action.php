<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"]) && $_POST["action"] == "create") {
        // Create a new blog
        $title = $_POST["title"];
        $content = $_POST["content"];
        $image = $_FILES["image"];
        $result = createBlog($title, $content, $image);
        if ($result) {
            // Blog created successfully
            header("Location: index.php");
            exit;
        } else {
            // Error creating blog
            echo "Error creating blog.";
        }
    } elseif (isset($_POST["action"]) && $_POST["action"] == "edit") {
        // Edit an existing blog
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $image = $_FILES["image"];
        $result = editBlog($id, $title, $content, $image);
        if ($result) {
            // Blog edited successfully
            header("Location: index.php");
            exit;
        } else {
            // Error editing blog
            echo "Error editing blog.";
        }
    } elseif (isset($_POST["action"]) && $_POST["action"] == "delete") {
        // Delete an existing blog
        $id = $_POST["id"];
        $result = deleteBlog($id);
        if ($result) {
            // Blog deleted successfully
            header("Location: index.php");
            exit;
        } else {
            // Error deleting blog
            echo "Error deleting blog.";
        }
    }
}