<?php
session_start();
if(empty($_SESSION["Username"])){
    header("location: login index.php");
    exit;
}
?>
<!DOCTYPE html>

<html>
    <head>
         <title>Welcome</title>
    </head>
    <body align = "center">
        <h1> Hi, <?php echo htmlspecialchars($_SESSION["Username"]); ?></h1>
        <h2><a href="Signout.php">Sign Out</a></h2>
                
    </body>
</html>