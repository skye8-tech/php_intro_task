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
                include 'connect.php';
                // Handle create action
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $file_name = $_FILES['image']['name'];
                $tempname = $_FILES['image']['tmp_name'];
                $folder = 'images/'.$file_name;

                $query = mysqli_query($connect,"insert into contact (file) values ('$file_name)");

                if(move_uploaded_file($tempname, $folder)){
                    echo "<h1>file uploaded succesfully</h1>";
                }else{
                    echo "<h1>file not uploaded</h1>";
                }

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
                break;$file_name = $_FILES['image']['name'];
                $tempname = $_FILES['image']['tmp_name'];
                $folder = 'images/'.$file_name;

                $query = mysqli_query($connect,"insert into contact (file) values ('$file_name)");

                if(move_uploaded_file($tempname, $folder)){
                    echo "<h1>file uploaded succesfully</h1>";
                }else{
                    echo "<h1>file not uploaded</h1>";
                }

                $result = createContact($name, $email, $phone, $image);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <?php
            $res = mysqli_query($connect, "select * from contact");
            while($row = mysqli_fetch_assoc($res)) {
        ?>
        <img scr="images/<?php echo $row['file'] ?>" />
        <?php }; ?>
    </div>
</body>
</html>