
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

    .task-comment {
        background-color: #f4f4f4;
        border-radius: 10px;
        border: none;
        padding: 8px 24px;
        margin-top: 8px;
      
        width: 30%;
    }
    .display_comments ul {
    list-style-type: none; /* Remove bullet points */
    margin-left: 0px;
    padding-top: 8px;
    padding-left: 0px;
}
    .singleComment{
         background-color: #f4f4f4;
        border-radius: 10px;
        border: none;
        padding: 8px 8px;
        margin-top: 8px;
        width: 30%;
    }
   .comment-prop a {
    padding-right: 34px;
    font-size:12px;
    text-decoration: none;
    color: black;
   }
   a:hover{
    cursor: pointer;
   }
</style>
<?php
include "dbconfig.php";

// Load comments for a specific task
function loadComments($task_id)
{
    global $conn;
    $sql = "SELECT * FROM comments WHERE task_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $task_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $comments = [];
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
    return $comments;
}

// Display a task
function displayTask($row)
{
    ?>
    <div class="task">
        <!-- Task details -->
        <div class="task-details">
            <div class="task-title">
                <?php echo $row['title']; ?>: <span class="des">
                    <?php echo $row['description']; ?>
                </span>
            </div>
            <div class="status <?php echo 'status-' . $row['status']; ?>">
                <?php echo $row['status']; ?>
            </div>

            <!-- Comments -->
            <div class="comment">
                <div class="comments">
                    <div class="display_comments">
                        <ul>
                            <?php
                            $comments = loadComments($row['id']);
                            foreach ($comments as $comment) {
                                echo "<li class='singleComment'>" . $comment['comment'] ."</li>";
                               echo "<span class='comment-prop'>";
                                
                                
                                 ?>
                                 <a  data-toggle="modal"
                                    data-target="#editcommentmodal-<?php echo $comment['id']; ?>"> Edit</a>
                                    
                                <a  data-toggle="modal"
                                    data-target="#deletecommentkModal-<?php echo $comment['id']; ?>"
                                   > Delete</a>
                                <?php
                                echo "</span>";

                    include "deletecommentmodal.php";
                    include "editcommentmodal.php";



                            }
                            ?>
                            
                        </ul>
                    </div>
                </div>
                <form action="action_comment.php" method="POST">
                    <div class="comment-section">
                        <input type="hidden" value="<?php echo $row['id'] ?>" name="taskId">
                        <input type="text" name="comment" class="task-comment" placeholder=" Add comment...">
                        <button name="action" value="create-comment" type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Progress bar -->
        <div class="progress">
            <div class="progress-bar bg-<?php echo $row['status']; ?>" role="progressbar"
                style="width: <?php echo ($row['status'] == 'created' ? '25%' : ($row['status'] == 'in-progress' ? '50%' : '100%')); ?>;"
                aria-valuenow="<?php echo ($row['status'] == 'created' ? '25' : ($row['status'] == 'in-progress' ? '50' : '100')); ?>"
                aria-valuemin="0" aria-valuemax="100">
                <?php echo ($row['status'] == 'created' ? '25% Complete' : ($row['status'] == 'in-progress' ? '50% Complete' : '100% Complete')); ?>
            </div>
        </div>

        <!-- Action icons -->
        <div class="action-icons">
            <i class="fas fa-edit icon-action" data-toggle="modal" data-target="#editTaskModal-<?php echo $row['id']; ?>"
                value="edit-task" name="action" type="button"></i>
            <i class="fas fa-trash-alt icon-action" data-toggle="modal"
                data-target="#deleteTaskModal-<?php echo $row['id']; ?>" name="action" value="delete-task"
                type="button"></i>
        </div>
    </div>
    <?php

                    include "edit.php";
                    include "deletemodal.php";
}

?>

<div class="task-container">
    <?php
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            displayTask($row);
        }
    }
    ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const commentInputs = document.querySelectorAll(".task-comment");

        commentInputs.forEach(function(input) {
            input.addEventListener("input", function () {
                const saveButton = input.nextElementSibling;
                if (input.value.trim() !== "") {
                    saveButton.style.display = "block";
                } else {
                    saveButton.style.display = "none";
                }
            });

            // Initially hide the save button if the input is empty
            const saveButton = input.nextElementSibling;
            if (input.value.trim() === "") {
                saveButton.style.display = "none";
            }
        });
    });
</script>

