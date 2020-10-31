<?php
$ID=$_GET['ID'];

if(isset($_POST['Submit'])) 
{ 
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


$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","theatre_management_system_db");

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

}
?>

<htm>
<head>
<link rel="stylesheet" href="css/Decorator.css">
<title>Edit Theatre info</title>
</head>
<body>
<div class="Container">
<form action=<?php echo $_SERVER['PHP_SELF']; ?>  method="post" >
<h1><u>Revenue Information</u></h1><br><br>
<label>Revenue gathered for the Day:</label>
  <input type="text" id="RfD" name="RfD" required minlength="2" maxlength="10"><br><br>
<label>Revenue gathered for the Week</label>
  <input type="text" id="RfW" name="RfW" required minlength="2" maxlength="10"><br><br>
  <label>Revenue gathered for the Month</label>
  <input type="text" id="RfM" name="RfM" required minlength="2" maxlength="10"><br><br>

  <h1>Patron Information</h1><br><br>

  <label>The Total number of Patrons that gathered for the Day</label>
  <input type="text" id="PfD" name="PfD" required minlength="2" maxlength="10"><br><br>

  <label>Revenue gathered for the Week</label>
  <input type="text" id="PfW" name="PfW" required minlength="2" maxlength="10"><br><br> 

<label>Revenue gathered for the Month</label>
  <input type="text" id="PfM" name="PfM" required minlength="2" maxlength="10"><br><br><br><br>

<button type="submit" id="Submit" name="SubmitButton" > Submit </button>
</form>
</div>
</body>
</html>