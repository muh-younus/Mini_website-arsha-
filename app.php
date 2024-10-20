


<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $desination = $_POST['desination'];
    $data = $_POST['date'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $skill = $_POST['skill'];




//connectning a database

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbyunus1";

//create a connection
$conn = mysqli_connect($servername, $username , $password , $database);

//check connection

if(!$conn){

 die("sorry we failed to connect: ".mysqli_connect_error());
}

else{

 

 //submit these into database

 $sql = "INSERT INTO `job` (`name`, `email`, `desination`, `date`,`address`,`gender`,`education`,`skill`) VALUES ( '$name', '$email', '$desination','$date','$address','$gender','$education','$skill', 'current_timestamp(6).000000')";

 $result = mysqli_query($conn,$sql);

 if($result){

   echo "Your entry was submit successfully!";


 }

 else{

   echo "The record was not submit successfully!";
 }
}
}




?>