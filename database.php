<?php
include "database_connect.php";

// Handle form submission
if (isset($_POST['submit'])) {
    // Collect form data
    $name = $_POST["names"];
    $email = $_POST["email"];
    $password = $_POST["passwords"]; // Remember to hash and salt the password
    $role = $_POST["role"];



    // Insert data into the appropriate database table based on role
    switch($role) {
        case "admin":
            $query = "INSERT INTO admins (names, email, passwords) VALUES ('$name', '$email', '$password' )";
            break;
        case "staff":
            $query = "INSERT INTO staff (names, email, passwords) VALUES ('$name', '$email', '$password')";
            break;
        case "orphan":
            $query = "INSERT INTO Orphan (names, email, passwords) VALUES ('$name', '$email', '$password')";
            break;
        default:
            // Handle invalid role
            die("Invalid role selected");
            break;
    }

    $result = mysqli_query($conn , $query);
    $num = mysqli_num_rows($result);


    // Redirect user to appropriate page based on role
    switch($role) {
        case "admin":
            header("Location: homepage.phph");
            break;
        case "staff":
            header("Location: homepage.php");
            break;
        case "orphan":
            header("Location: homepage_orphan.html");
            break;
        default:
            // Handle invalid role
            break;
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="names" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="passwords" required><br>
        
        <label for="role">Role:</label><br>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
            <option value="orphan">Orphan</option>
        </select><br>

        <div id="additionalFields">
    <!-- Additional fields specific to each user type will be dynamically added here -->
</div>
        
        <input type="submit" name="submit" value="Register">
    </form>
    <script>
document.getElementById('role').addEventListener('change', function() {
    var role = this.value;
    var additionalFields = document.getElementById('additionalFields');
    
    // Clear existing fields
    additionalFields.innerHTML = '';

    if (role === 'staff') {
        additionalFields.innerHTML = `
            <label for="staffId">Staff ID:</label><br>
            <input type="text" id="staffId" name="staff_id" required><br>
            
            <label for="department">Department:</label><br>
            <input type="text" id="department" name="department" required><br>
        `;
    } else if (role === 'orphan') {
        additionalFields.innerHTML = `
            <label for="disability">Disability:</label><br>
            <input type="text" id="disability" name="disability" required><br>
        `;
    }
});
</script>

</body>
</html>
