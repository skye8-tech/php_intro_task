
<?php
include "dbconfig.php";
?>
<!-- Delete Task Modal -->
<div class="modal fade" id="deleteTaskModal-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteTaskModalLabel" aria-hidden="true" >
    <form action="action_task.php" method="POST">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTaskModalLabel">Delete Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" value="<?php echo $row['id'];?>" name="id" />
            <div class="modal-body">
                <p>Are you sure you want to delete this task?</p>
            </div>
            <div class="modal-footer" >
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger"  name="action"  value="delete-task">Delete Task</button>
            </div>
        </div>
    </div>
    </form>
</div>
