<!-- Edit Task Modal -->
<div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTaskModalLabel" aria-hidden="true">
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
                <form>
                    <div class="form-group">
                        <label for="editTaskTitle">Title</label>
                        <input type="text" class="form-control" id="editTaskTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="editTaskDescription">Description</label>
                        <textarea class="form-control" id="editTaskDescription" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editTaskStatus">Status</label>
                        <select class="form-control" id="editTaskStatus">
                            <option value="created">Created</option>
                            <option value="in-progress">In Progress</option>
                            <option value="done">Done</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>
