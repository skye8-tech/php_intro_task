<!-- Edit Task Modal -->
<div class="modal fade" id="editcommentmodal-<?php echo $comment['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="editTaskModalLabel" aria-hidden="true" name="action">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTaskModalLabel">Edit Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to edit an existing comment -->
                <form action="action_comment.php" method="POST">
                    <div class="comment-section">
                        <input type="hidden" value="<?php echo $comment['id'] ?>" name="id">
                        <input type="text" name="comment" class="task-comment" id="editComment"
                        value=" <?php echo $comment['comment']; ?>" placeholder=" Add comment...">
                        <button name="action" value="edit-comment" type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>

                
            </div>

        </div>
    </div>
</div>