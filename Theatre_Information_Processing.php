<?php
$RfD = $_POST['RfD'];
$RfW = $_POST['RfW'];
$RfM = $_POST['RfM'];
$PfD = $_POST['PfD'];
$PfW = $_POST['$PfW'];
$PfM = $_POST['PfM'];

$RfD = stripcslashes($RfD);
$RfW = stripcslashes($RfW);
$RfM = stripcslashes($RfM);
$PfD = stripcslashes($PfD);
$PfW =  stripcslashes($PfW);
$PfM =  stripcslashes($PfM);


$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","expense_tracker_db");

$RfD = mysqli_real_escape_string($link, $RfD);
$RfW = mysqli_real_escape_string($link, $RfW);
$RfM = mysqli_real_escape_string($link,$RfM);
$PfD = mysqli_real_escape_string($link, $PfD);
$PfW = mysqli_real_escape_string($link, $PfW);
$PfM = mysqli_real_escape_string($link,$PfM);




$sql = "UPDATE theatre_information SET RevenuePerDay='$RfD',RevenuePerWeek='$RfW',RevenuePerMonth='$RfM',PatronsPerDay='$PfD',PatronsPerWeek='$PfW',PatronsPerMonth='$PfM' WHERE ID=$ID";
if(mysqli_query($link,$sql)){
    
    header("location: Theatre_review.php");
}
else{
    echo 'Querry error: ' . mysqli_error($link);
}

?>