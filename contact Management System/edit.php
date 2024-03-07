<!-- Edit Task Modal -->
<div class="modal fade" id="editTaskModal-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editTaskModalLabel" aria-hidden="true" name="action">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTaskModalLabel">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to edit an existing task -->
                <form action="action_task.php" method="POST">
                    <div class="form-group">
                        <label for="editTaskTitle">Title</label>
                        <input type="text" class="form-control" id="editTaskTitle" value =" <?php echo $row['title'];?>" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="editTaskDescription">Description</label>
                        <textarea class="form-control" id="editTaskDescription" rows="3"  name="description" > <?php echo $row['description']?> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="editTaskStatus">Status</label>
                        <select class="form-control" id="editTaskStatus" name="status">
                            <option value="created">Created</option>
                            <option value="in-progress">In Progress</option>
                            <option value="done">Done</option>
                        </select>
                    </div>
                    <input type="hidden" value="<?php echo $row['id'];?>" name="id" />
                    
                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" value="edit-task" name="action">Save Changes</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
