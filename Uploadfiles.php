<html>
<head>
    <title>upload test </title>
<head>
<body>

<form action="Uploadfiles.php" method="POST" enctype="multipart/form-data">
<input type="file" name="imagefile" id="fileToUpload">
<input type="submit" name="submit" value="Upload">
</form>

<?php
$target_dir = "css/img/Theatres/";
$target_file = $target_dir . basename($_FILES["imagefile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$link=mysqli_connect("localhost","DB_User","n3t5h1n0b1?!","theatre_management_system_db") or die ('Error connecting to mysql server!');



$imageName=mysqli_real_escape_string($_FILES["imagefile"]["name"]);
$imageData=mysqli_real_escape_string(file_get_contents($_FILES["imagefile"]["tmp_name"]));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imagefile"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["imagefile"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
      if (move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["imagefile"]["name"])). " has been uploaded.";
   

    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  $query="INSERT INTO theatre_information ('ID', 'Name', 'Image') VALUES ('$imageName','$imageData')";
  $result=mysqli_query($link,$query) or die ("Error querying the database.");

  if($result)
    {
        echo "The file ". htmlspecialchars( basename( $_FILES["imagefile"]["name"])). " has been uploaded to database.";
    }
    else{
        echo "The file ". htmlspecialchars( basename( $_FILES["imagefile"]["name"])). " has not been uploaded to database.";
    }
}
?>

</body>
</html>

    
