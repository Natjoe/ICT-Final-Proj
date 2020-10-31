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
                   
      <div>
      <?php echo "<img src='$src' height='500' width='350'/>"."<br>";
      if($result){
          
      while($rows=mysqli_fetch_assoc($result)){

        echo "<h3>".$rows['Date&Time1'] . ", " . $rows['Date&Time2'] . ", " . $rows['Date&Time3']."</h3>"."<br>";
        echo "<h3>"."Ticket price:". " " .$rows['Ticket_price']."</h3>"."<br>";
        echo "<h3>"."Seating".$rows['Seating']."</h3>"."<br>";
        echo "<h3>"."Rating".$rows['Rating']."</h3>"."<br>";

        echo $rows['Movie_name']."<br>";
        echo $rows['Synopsis']."<br>";
        echo $rows['Cast_&_Crew']."<br>";
        
}
 } else{
          echo "Query unsuccessful";
      }
    
  
      ?> 
      
      </div>
         
        
        
    </div>

</body>
</html>