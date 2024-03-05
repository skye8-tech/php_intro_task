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
            <!-- Sample Task 1 -->
            <div class="task">
                <div class="task-details">
                    <div class="task-title">Task 1: Design Landing Page</div>
                    <div class="status status-in-progress">In Progress</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100">50% Complete</div>
                </div>
                <div class="action-icons">
                <i class="fas fa-edit icon-action" data-toggle="modal" data-target="#editTaskModal"></i>
                    <i class="fas fa-trash-alt icon-action" data-toggle="modal" data-target="#deleteTaskModal"></i>
                </div>
            </div>
            <!-- Sample Task 2 -->
            <div class="task">
                <div class="task-details">
                    <div class="task-title">Task 2: Implement Create Task Feature</div>
                    <div class="status status-done">Done</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100">100% Complete</div>
                </div>
                <div class="action-icons">
                <i class="fas fa-edit icon-action" data-toggle="modal" data-target="#editTaskModal"></i>
                    <i class="fas fa-trash-alt icon-action" data-toggle="modal" data-target="#deleteTaskModal"></i>
                </div>
            </div>
            <!-- Sample Task 3 -->
            <div class="task">
                <div class="task-details">
                    <div class="task-title">Task 3: Add Delete Task Modal</div>
                    <div class="status status-created">Created</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">25% Complete</div>
                </div>
                <div class="action-icons">
                    <i class="fas fa-edit icon-action" data-toggle="modal" data-target="#editTaskModal"></i>
                    <i class="fas fa-trash-alt icon-action" data-toggle="modal" data-target="#deleteTaskModal"></i>
                </div>
            </div>
        </div>

    <?php include "deletemodal.php"; ?>
    <?php include "edit.php"; ?>