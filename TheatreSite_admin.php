<?php
$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","theatre_management_system_db");
$query = "SELECT * FROM theatre_information";
$result=mysqli_query($link,$query);


?>
<html>
    <head>
        <title>Choose a theatre</title>
         <link rel="stylesheet" href="css/Image-Decorator.css">
    </head>
    <body>
        
    <div class ="Row">
        <div class="IconImg">
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre1.jpg&ID=1" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre1.jpg&ID=1" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre2.png&ID=1" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre2.png&ID=2" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre3.png&ID=3" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre3.png&ID=3" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre4.png&ID=4" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre4.png&ID=4" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre5.jpg&ID=5" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre5.jpg&ID=5" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
        </div>
     <div class="img-container">
        <div class="tooltip">
        <a href="Movie_Editor.php?ID=1" onclick="post"><img src="css/img/Theatres/theatre1.jpg"></a>
             <span class="tooltiptext">
                 <?php
                     while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }
                 ?>
                 
                
              </span>
        </div>
     </div>
        
         
      <div class="img-container" >
             <div class="tooltip">
                 <img src="css/img/Theatres/theatre2.png">
                 <span class="tooltiptext">
                 <?php
                 while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }
                     ?>
                     
                </span>
            </div>
     </div>

     <div class="img-container">
        <div class="tooltip">
             <img src="css/img/Theatres/theatre3.png">
             <span class="tooltiptext">
                     <?php
             while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }

                     ?>
                     
              </span>
        </div>
     </div>


     <div class="img-container">
        <div class="tooltip">
             <img src="css/img/Theatres/theatre4.png">
             <span class="tooltiptext">
                <?php
             while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }

                     ?>
                    
              </span>
        </div>
     </div>

         
     <div class="img-container">
        <div class="tooltip">
             <img src="css/img/Theatres/theatre5.jpg">
             <span class="tooltiptext">
             <?php
             while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }
                     ?>
                     
              </span>
         </div>
     </div>

    </div>     

    <div class ="Row">   
    <div class="IconImg">
            <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre6.jpg&ID=6" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre6.jpg&ID=6" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre7.jpg&ID=7" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre7.jpg&ID=7" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre8.jpg&ID=8" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre8.jpg&ID=8" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre9.jpg&ID=9" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre9.jpg&ID=9" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
             <img src="css/img/Icons/AddIcon.png">
            <img src="css/img/Icons/TrashIcon.png">
<a href="Edit_theatre_information.php?src=css/img/Theatres/theatre10.jpg&ID=10" onclick="post"><img src="css/img/Icons/EditIcon.png"></a>
<a href="Theatre_review.php?src=css/img/Theatres/theatre10.jpg&ID=10" onclick="post"><img src="css/img/Icons/ViewIcon.png"></a>
        </div>

     <div class="img-container">
             <div class="tooltip">
                <img src="css/img/Theatres/theatre6.jpg">
                  <span class="tooltiptext">
                  <?php
                  while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }
                     ?>
                     
                </span>
             </div>
     </div>

    <div class="img-container">
            <div class="tooltip">
             <img src="css/img/Theatres/theatre7.jpg">
                 <span class="tooltiptext">

                 <?php
                  while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }
                     ?>
                    
                </span>
             </div>
    </div>   

    <div class="img-container">
            <div class="tooltip">
                <img src="css/img/Theatres/theatre8.jpg">
                <span class="tooltiptext">

                <?php
                  while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }
                     ?>
                     
                </span>
            </div>
    </div> 

     <div class="img-container">
            <div class="tooltip">
                <img src="css/img/Theatres/theatre9.jpg">
               <span class="tooltiptext">
               <?php
                  while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }
                     ?>
                     
                </span>
            </div>
     </div>

        <div class="img-container">
            <div class="tooltip">
                 <img src="css/img/Theatres/theatre10.jpg">
                 <span class="tooltiptext">
                 <?php
                  while($rows=mysqli_fetch_assoc($result))
                     {
                        
                        echo "Name of theatre:"." ".$rows['Theatre_Name']."<br>"."<br>";
                        echo "Address:"." ".$rows['Address']."<br>"."<br>";     
                        echo "Contact number:"." ".$rows['Contact_number']."<br>";
                     break;
                     }
                     ?>
                     
                </span>
            </div>
        </div>
    </div>

    <div class="AddButton">
    <img src="css/img/Icons/AddIcon.png">
</div>
       
    </body>
</html>