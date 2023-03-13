<?php
    session_start();

    if (isset($_POST['name']) && isset($_POST['email'])&&
        isset($_POST['pass']) && isset($_POST['image']) ) {

            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                
                if ($uploadOk == 0) {
                  echo "Sorry, your file was not uploaded.";
                } else {
                  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                  } else {
                    echo "Sorry, there was an error uploading your file.";
                  }
                }
            }else{
                echo "Invalid Email";
            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Form</title>
</head>
<body>
    <form action="form.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:- </label>
        <input type="text" name="name">
    
        <label for="email">Email:- </label>
        <input type="text" name="email">
    
        <label for="pass">Password:- </label>
        <input type="password" name="pass">
    
        <label for="image">File:- </label>
        <input type="file" name="image">
    
        <input type="submit" name="submit" value="Save">
    </form>
</body>
</html>
