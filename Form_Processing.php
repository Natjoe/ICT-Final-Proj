<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];

$firstname = stripcslashes($firstname);
$lastname = stripcslashes($lastname);
$username = stripcslashes($username);
$password = stripcslashes($password);
$email =  stripcslashes($email);



$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","expense_tracker_db");

$firstname = mysqli_real_escape_string($link, $firstname);
$lastname = mysqli_real_escape_string($link, $lastname);
$username = mysqli_real_escape_string($link,$username);
$email =  mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);




$sql = "INSERT INTO create_user_account(First_Name,Last_Name, Username,Password,Email_address) VALUES ('$firstname','$lastname','$username','$password','$email')";

if(mysqli_query($link,$sql)){
    $sql2 = "INSERT INTO authorized_accounts(Username,Password) VALUES ('$username','$password')";
    mysqli_query($link,$sql2);
    header("location: login index.php");
}
else{
    echo 'Querry error: ' . mysqli_error($link);
}

?>