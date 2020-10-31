<?php
$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","theatre_management_system_db");

$query = "SELECT * FROM movie_information WHERE ID='6'";
$result=mysqli_query($link,$query);

while($rows=mysqli_fetch_array($result)){

    echo $rows['Movie_name']."<br>";
    echo $rows['Synopsis']."<br>";
    echo $rows['Cast_&_Crew']."<br>";
    echo $rows['Ticket_price']."<br>";
    echo $rows['Seating']."<br>";
    echo $rows['Date&Time1']."<br>";
    echo $rows['Date&Time2']."<br>"; 
    echo $rows['Date&Time3']."<br>";
    echo $rows['Rating']."<br>";


}


?>