<?php

include("connection.php");

if (isset($_POST['submit'])) {

    // Escape user inputs to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // SQL query to check username and password
    $sql = "SELECT * FROM stud_data WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
   
    // Count the number of rows returned
    $count = mysqli_num_rows($result);

    // If one row is returned, the login is successful
    if ($count == 1) {
        header("Location: index.php"); // Redirect to welcome page
        exit(); // Stop further code execution
    } else {
        // If login fails, redirect to index and show alert
        echo '<script>
                alert("Login failed. Invalid username or password.");
                window.location.href = "form.php";
              </script>';
    }
}

?>
