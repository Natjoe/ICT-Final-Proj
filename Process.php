<?php
$Username = $_POST['Userid'];
$Password = $_POST['Pswd'];

$Username = stripcslashes($Username);
$Password = stripcslashes($Password);

$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","theatre_management_system_db");

$Username = mysqli_real_escape_string($link, $Username);
$Password = mysqli_real_escape_string($link, $Password);


//mysql_select_db("expense_tracker_db");

$result=mysqli_query($link, "select * from authorized_accounts where Username = '$Username' and Password = '$Password'") or die("Failed to query database ".mysql_error());
$row = mysqli_fetch_array($result);

if('THTR_admin'==$Username && $row['Password']== $Password){
    header("location: TheatreSite_admin.php");
}else
if($row['Username']== $Username && $row['Password']== $Password){
    session_start();
    $_SESSION["Username"] = $Username;
    header("location: welcome.php");
}

else{
    echo "Failed Login try again!";
}

?>