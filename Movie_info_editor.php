<?php
$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","theatre_management_system_db");
$ID=$_GET['ID'];
$src=$_GET['src'];


$query = "SELECT * FROM movie_information WHERE ID=$ID";
$result=mysqli_query($link,$query);

?>

<html>
    <head>
        <title>    
        movie info
        </title>
         <link rel="stylesheet" href="css/M.R_style.css">
    </head>
    <body>
    <div class="mreview_container">
                   
     
      <?php echo "<img src='$src' height='500' width='350'/>"."<br>";
          
      while($rows=mysqli_fetch_assoc($result)){
        echo "<h3>".$rows['Date&Time1'] . ", " . $rows['Date&Time2'] . ", " . $rows['Date&Time3']."</h3>"."<br>";
        echo "<h3>"."Ticket price:". " " .$rows['Ticket_price']."</h3>"."<br>";
        echo "<h3>"."Seating:"." ".$rows['Seating']."</h3>"."<br>";
        echo "<h3>"."Rating:"." ".$rows['Rating']."</h3>"."<br>";

        
        ?>
        <span>
          <?php
       echo "<h1>"."Synopsis"."<h1>";
        echo "<h2>".$rows['Synopsis']."</h2>"."<br>";
        echo "<h1>"."Cast & Crew"."<h1>";
        echo "<h2>".$rows['Cast_&_Crew']."</h2>"."<br>";      
      } 
      
      ?> 
         
    </span>

    </div>      
  
    <a href="Movie_Form.php?ID=$ID" onclick="post"><img src="css/img/Icons/EditIcon.png" width="115px" height="80px"></a>
</body>
</html>