<?php
include "dbconfig.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //create
      if (isset($_POST["action"]) && $_POST["action"] == "create-task"){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $status=$_POST['status'];
    $sql="INSERT INTO tasks (title, description,status) VALUES ('$title', '$description', '$status')";
    $result=$conn->query($sql);
    if($result==true){
        echo "New record created successfully";
        header('Location: index.php');
        exit();
}else{
    echo "Error:". $sql."<br>". $conn->error;
}
//$conn->close();


}
//delete
if(isset($_POST["action"]) && $_POST["action"] == "delete-task"){
   $id = $_POST['id'];
    $sql = "DELETE FROM comments WHERE task_id ='$id'";
 //  $sql = "DELETE FROM tasks WHERE id ='$id'";
   $result1 = $conn->query($sql);

   if($result1){
            //echo "$result";
            //die();
            $sql2 = "DELETE FROM tasks WHERE id='$id'";
            $result2 = $conn->query($sql2);
            if ($result2) {
                echo "Record deleted successfully.";
                header('Location: index.php');
            } else {
                echo "Error:" . $sql2 . "<br>" . $conn->error;
            }
   }
   //echo "$result";
   //die();
     

}
   /* if (isset($_POST["action"]) && $_POST["action"] == "delete-task") {
        $id = $_POST['id'];
        $sql = "DELETE FROM tasks WHERE id =?";
        $result = $conn->prepare($sql);
        $result->bind_param("i",$id);
        $result->execute();
        //echo "$result";
        //die();
        if ($result ->affected_rows>0) {
            echo "Record deleted successfully.";
            header('Location: index.php');
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }*/
// edit
if (isset($_POST["action"]) && $_POST["action"] == "edit-task"){
    $t_id = $_POST["id"];
    $t_title=$_POST['title'];
     
    $t_description=$_POST['description'];
    $t_status=$_POST['status'];
    
    $sql="UPDATE tasks SET title='$t_title',description='$t_description',status='$t_status' WHERE id='$t_id'";
    $result=$conn->query($sql);

    if($result== TRUE ){
       echo "Record updated successfully.";

       //die();
            header('Location: index.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 


}

