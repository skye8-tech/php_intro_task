    <?php
include "dbconfig.php";
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<style>
    /* Add custom styles here */
    .task-container {
        margin-top: 50px;
    }

    .task {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .task-details {
        flex: 1;
    }

    .task-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .progress {
        width: 100px;
        height: 20px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .status {
        width: 100px;
        text-align: center;
        padding: 5px;
        border-radius: 5px;
    }

    .status-created {
        background-color: #ffc107;
        /* Yellow */
    }

    .status-in-progress {
        background-color: #17a2b8;
        /* Blue */
    }

    .status-done {
        background-color: #28a745;
        /* Green */
    }

    .action-icons {
        display: flex;
        align-items: center;
    }

    .action-icons i {
        margin-right: 10px;
        cursor: pointer;
    }

    .action-icons i:hover {
        color: #007bff;
    }
</style>

        <div class="task-container">

        <?php
        $sql="SELECT* FROM tasks";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
                while($row=$result->fetch_assoc()){
        ?>
            
            
          <div class="list-container">
              <?php
              if ($row['status']=="done"){
                    ?>
                    <div class="task">
                <div class="task-details">
                    <div class="task-title"><?php echo $row['title'];?>: <span class="des"><?php echo $row['description'];?></span></div>
                    <div class="status status-done"><?php echo $row['status'];?></div>
                </div>

                
                <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100">100% Complete</div>
                </div>
                
               <div class="action-icons">
                <i class="fas fa-edit icon-action" data-toggle="modal" data-target="#editTaskModal-<?php echo $row['id']; ?>" value="edit-task" name="action" type="button"></i>
                    <i class="fas fa-trash-alt icon-action" data-toggle="modal" data-target="#deleteTaskModal-<?php echo $row['id']; ?>" name="action" value="delete-task" type="button" ></i>
                </div>

               <?php 
             }
            ?>
             <?php
              if ($row['status']=="created"){
                    ?>
                    <div class="task">
                <div class="task-details">
                    <div class="task-title"><?php echo $row['title'];?>: <span class="des"><?php echo $row['description'];?></span></div>
                    <div class="status status-created"><?php echo $row['status'];?></div>
                </div>

                
                    <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar"  style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">25% Complete</div>
                </div>
              <div class="action-icons">
                <i class="fas fa-edit icon-action" data-toggle="modal" data-target="#editTaskModal-<?php echo $row['id']; ?>" value="edit-task" name="action" type="button"></i>
                    <i class="fas fa-trash-alt icon-action" data-toggle="modal" data-target="#deleteTaskModal-<?php echo $row['id']; ?>" name="action" value="delete-task" type="button" ></i>
                </div>

               <?php 

            }
            ?>
             <?php
             if ($row['status']=="in-progress"){
                    ?>
                    <div class="task">
                <div class="task-details">
                    <div class="task-title"><?php echo $row['title'];?>: <span class="des"><?php echo $row['description'];?></span></div>
                    <div class="status status-in-progress"><?php echo $row['status'];?></div>
                </div>

                
                    <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50">50% Complete</div>
                </div>
                <div class="action-icons">
                <i class="fas fa-edit icon-action" data-toggle="modal" data-target="#editTaskModal-<?php echo $row['id']; ?>" value="edit-task" name="action" type="button"></i>
                    <i class="fas fa-trash-alt icon-action" data-toggle="modal" data-target="#deleteTaskModal-<?php echo $row['id']; ?>" name="action" value="delete-task" type="button" ></i>
                </div>

               <?php 
               
               }
            ?>

          </div>

           
                <?php
                 include "edit.php";
               include "deletemodal.php";
             }?>
        </div>



