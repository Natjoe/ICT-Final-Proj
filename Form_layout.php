<html>
    <head>
        <link rel="stylesheet" href="css/Decorator.css">
<title> Login form </title>
    </head>
<body>
<br><br><br>
    <h2> Please fill out the form to create your account </h2>
    <br>

<div class="Container">
<form action="Form_Processing.php"  method="post" >
<label>First name:</label>
  <input type="text" id="fname" name="fname" required minlength="5" maxlength="10"><br><br>
<label>Last name:</label>
  <input type="text" id="lname" name="lname" required minlength="7" maxlength="10"><br><br>
<label>Email: </label>
   <input type="text" id="email" name="email" required minlength="7" maxlength="30"> <br><br>
<label>Username: </label>   
   <input type="text" id="username" name="username" required minlength="5" maxlength="10">  <br><br>   
<label>Password: </label>   
   <input type="password" id="password" name="password" required minlength="7" maxlength="10">  <br><br><br>
<button type="submit" id="SubmitData" name="SubmitButton" > Submit </button>
</form>
</div>
</body>
</html>