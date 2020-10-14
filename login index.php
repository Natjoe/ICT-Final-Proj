<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css\main.css" rel="stylesheet" type="text/css"> 
</head>
<body>
    <div id="icon-position">
        <img id="c-icon" src="css\img\cinema-icon.jpg" alt="A cinema icon"/>

    </div>
    
    <form action="Process.php" method="POST">
        <div id="login-container">
            <div id="Username">
                <input type="text" placeholder="Username" name="Userid" size="30" required minlength="5" maxlength="15">
            </div>
            
        <br>
            <div id="Password">
                <input type="password" placeholder="Password" name="Pswd"  size="30" required minlength="7" maxlength="20" >
            </div>
            
        </div>
<br>
        <div id="buttons">
            <button id="login" type="submit"> Login</button>
            <button id="signup" onclick="location.href='Form_layout.php'" type="button">SignUp</button> 
        </div>
        
    </form>

    

    
    
</body>
</html>