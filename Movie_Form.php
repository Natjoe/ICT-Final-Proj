<?php
$ID=$_GET['ID'];
if(isset($_POST['Submit'])) 
{ 

$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","theatre_management_system_db");

$MovieName=$_GET['Movie_title'];
$Synopsis=$_GET['synopsis'];
$CastCrew=$_GET['C&C'];
$Ticket=$_GET['TP'];
$Seating=$_GET['seat'];
$DateTime1=$_GET['1DT']; 
$DateTime2=$_GET['2DT']; 
$DateTime3=$_GET['3DT']; 
$rate=$_GET['rate'];


$sql = "UPDATE movie_information SET Movie_name=$MovieName, Synopsis=$Synopsis, Cast_&_Crew=$CastCrew, Ticket_price=$Ticket, Seating=$Seating, Date&Time1=$DateTime1, Date&Time2=$DateTime2, Date&Time3=$DateTime3, Rating=$rate WHERE ID=$ID";
if(mysqli_query($link,$sql)){
    
  header("location: Movie_info_editor.php");
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
<h1><u>Movie Information</u></h1><br><br>
<label>Movie Title:</label>
  <input type="text" id="Movie_title" name="Movie_title" required minlength="5" maxlength="10"><br><br>
<label>Synopsis:</label>
  <input type="text" id="synopsis" name="synopsis" required minlength="7" maxlength="10"><br><br>
  
  <label>Cast & Crew:</label><br>
  <textarea name="C&C" rows="10" cols="30"></textarea><br><br>
  
  <label>Ticket Price:</label>
  <input type="text" id="TP" name="TP" required minlength="7" maxlength="10"><br><br>

  <label>Seating:</label>
  <input type="text" id="seat" name="seat" required minlength="7" maxlength="10"><br><br> 

  <label>1st Date and Time:</label>
  <input type="text" id="1DT" name="1DT" required minlength="7" maxlength="10"><br><br> 

  <label>2nd Date and Time:</label>
  <input type="text" id="2DT" name="2DT" required minlength="7" maxlength="10"><br><br> 

<label>3rd Date and Time</label>
  <input type="text" id="3DT" name="3DT" required minlength="7" maxlength="10"><br><br>

  <label>Rating:</label>
  <input type="text" id="rate" name="rate" required minlength="7" maxlength="10"><br><br><br><br>

<button type="submit" id="Submit" name="Submit" > Submit </button>
</form>
</div>
</body>
</html>