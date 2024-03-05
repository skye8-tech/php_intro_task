<!-- Edit Issue Modal -->
<div class="modal fade" id="editIssueModal" tabindex="-1" role="dialog" aria-labelledby="editIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editIssueModalLabel" style="color: black">Edit Issue</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to edit an existing issue -->
                <form>
                    <div class="form-group">
                        <label for="editIssueTitle" style="color: black">Title</label>
                        <input type="text" class="form-control" id="editIssueTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="editIssueDescription" style="color: black">Description</label>
                        <textarea class="form-control" id="editIssueDescription" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editIssueTag" style="color: black">Tag</label>
                        <input type="text" class="form-control" id="editIssueTag">
                    </div>
                    <div class="form-group">
                        <label for="editIssueStatus">Status</label>
                        <select class="form-control" id="editIssueStatus">
                            <option value="created">Created</option>
                            <option value="in-progress">In Progress</option>
                            <option value="done">Done</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: black">Close</button>
                <button type="button" class="btn btn-primary" style="color: black">Save Changes</button>
            </div>
        </div>
    </div>
</div>
