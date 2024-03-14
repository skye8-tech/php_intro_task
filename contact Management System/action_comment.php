<?php
include "dbconfig.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//comment creation
  if (isset($_POST["action"]) && $_POST["action"] == "create-comment"){
    $task_id= $_POST["taskId"];
    $comment=$_POST['comment'];

    
    $sql="INSERT INTO comments (task_id,comment) VALUES ('$task_id','$comment')";
    $result=$conn->query($sql);
    
    if($result==true){
        echo "New record created successfully";
        header('Location: index.php');
        exit();
}else{
    echo "Error:". $sql."<br>". $conn->error;
}
}

//delete comment
  if (isset($_POST["action"]) && $_POST["action"] == "delete-comment") {
    $id = $_POST['commentId'];

    $sql = "DELETE FROM comments WHERE id ='$id'";
    
    $result = $conn->query($sql);
    //echo "$result";
    //die();
    if ($result == TRUE) {
      echo "Record deleted successfully.";
      header('Location: index.php');
    } else {
      echo "Error:" . $sql . "<br>" . $conn->error;
    }

  }

  // edit
  if (isset($_POST["action"]) && $_POST["action"] == "edit-comment") {
    $t_id = $_POST["id"];
    $t_comment = $_POST['comment'];

    

    $sql = "UPDATE comments SET comment='$t_comment' WHERE id='$t_id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "Record updated successfully.";

      //die();
      header('Location: index.php');
    } else {
      echo "Error:" . $sql . "<br>" . $conn->error;
    }

  }

}?>
