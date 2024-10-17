<?php

include("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>

      button
    </style>
</head>
<body>

 








<div class="container p-5">

<h1>Client Login Form</h1>

<form name="form" action="login.php" onsubmit="return isvalid()"  method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" placeholder="Enter Email" class="form-label">Username</label>
    <input type="email" class="form-control" name="username" id="username" aria-describedby="emailHelp">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" placeholder="Enter Email" >Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
 
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
  <button type="submit" name="submit" value="submit" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="registration.php">Register</a></button>
</form>

</div>

<script>
function isvalid(){

  var user = document.form.username.value;
  var pass = document.form.password.value;
  if(user.length=="" && pass.length==""){

    alert("Username and password field is empty");
    return false;
  }

  else{

    if(user.length==""){

      alert("username is empty");
    }
    if(pass.length==""){

      alert("password is empty");
      return false;
    }
  }
}

</script>
    
</body>
</html>