<?php
$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","theatre_management_system_db");
$ID=$_GET['ID'];
$src=$_GET['src'];
$query = "SELECT * FROM theatre_information WHERE ID=$ID";
$result=mysqli_query($link,$query);


?>

<html>
    <head>
        <title>Theatre review</title>
         <link rel="stylesheet" href="css/Image-Decorator.css">
    </head>
    <body>
    
    <div class="review_container">
    <?php echo "<img src='$src'>"; ?>
        <span>
            
            <?php
            
            while($rows=mysqli_fetch_assoc($result))
            {
            echo "<h1>"."<u>".$rows['Theatre_Name']."</h1>"."</u>";   
            echo "<h3>"."<u>"."Revenue Information"."</u>"."</h3>";
            echo "<p>";
            echo "Day-";
            echo $rows['RevenuePerDay']."<br>";
            echo "Week-";
            echo $rows['RevenuePerWeek']."<br>";
            echo "Month-";
            echo $rows['RevenuePerMonth']."<br>";    
            echo "</p>";   
            
            echo "<h3>"."<u>"."Patron Information"."</u>"."</h3>";
            echo "<p>";
            echo "Day-";
            echo $rows['PatronsPerDay']."<br>";
            echo "Week-";
            echo  $rows['PatronsPerWeek']."<br>";   
            echo "Month-";
            echo  $rows['PatronsPerMonth']."<br>";   
            echo "</p>";
            }
            ?>                         
        </span>
    </div>
    <br>
<a href="Edit_theatre_information.php?$ID" onclick="post"><img src="css/img/Icons/EditIcon.png" width="115px" height="80px"></a>

</body>
</html>