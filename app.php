<?php

$name = $_POST['name'];
$email = $_POST['email'];
$desination = $_POST['desination'];
$data = $_POST['date'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$education = $_POST['education'];
$skill = $_POST['skill'];

//Database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbyunus1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn -> connect_error){

    die('connection failed  : '.$conn -> connect_error);

}

else{
    $pip1 = $conn->prepare("INSERT INTO register (name, email, designation, date, address, gender, education, skill) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$pip1->bind_param("sssssssi", $name, $email, $designation, $date, $address, $gender, $education, $skill);

    $pip1 -> execute();
    echo "registration successfully";
    $pip1 -> close();
    $conn -> close();
}





?>