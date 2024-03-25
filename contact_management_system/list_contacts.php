<head>
<link rel="stylesheet" href="styles/style.css">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Instruction 1: Get all the contacts -->
    <div class="container">
        <h2>View Contacts</h2>
        <div class="instructions">
            <p><strong>Instruction 1:</strong> Retrieve all the contacts using the implemented function in functions.php., that means you have to import functions.php first.</p>
        </div>
        
        <!-- Instruction 2: Replace the table with a loop to display contacts -->
        <div class="instructions">
            <p><strong>Instruction 2:</strong> Replace the static table with a loop to display all the contacts retrieved.</p>
        </div>
        
        <!-- Instruction 3: Use anchor tags instead of buttons for edit and delete actions -->
        <div class="instructions">
            <p><strong>Instruction 3:</strong> Instead of using buttons for edit and delete actions, use anchor tags with appropriate actions.</p>
        </div>
        
        <!-- Placeholder for table (to be replaced with PHP loop) -->
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- This part will be replaced with PHP loop to display contacts -->
               <?php
               include "connect.php";
               $sql = "SELECT * FROM contact";
               $result = $connect -> query($sql);
               while($row = $result -> fetch_assoc()){
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                
               echo" 
                <tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>
                        <!-- Placeholder buttons (to be replaced with anchor tags) -->
                        <a class='btn btn-primary' href='edit.php?updateid=$id' >Edit</a>
                        <a class='btn btn-danger' href='delete.php?deleteid=$id'>Delete</a>
                    </td>
                </tr>
                ";
               }
                ?>
                
                <!-- End of placeholder -->
            </tbody>
        </table>
    </div>
    <a  href="create.php">create contact</a>
</body>
</html>
