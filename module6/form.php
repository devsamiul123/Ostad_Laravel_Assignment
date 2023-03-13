<?php

    if (isset($_POST['name']) && isset($_POST['email']) &&
        isset($_POST['pass']) && isset($_FILES['image']) ) {

            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $target_dir = "uploads/";
                $file_name = date("d_m_Y_h_i_sa") . "_" . uniqid() . '_' . basename($_FILES["image"]["name"]);
                $target_file = $target_dir . $file_name;
                
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";

                    // save info to csv file
                    $file = fopen(dirname(__FILE__).'/users.csv', 'a');
                    fputcsv($file, array($_POST['name'], $_POST['email'], $_POST['pass'], $file_name));
                    fclose($file);

                    session_start();
                    $_SESSION['username'] = $_POST['name'];
                    setcookie('username', $_POST['name'], time()+300, '/');

                } else {
                    echo "Sorry, there was an error uploading your file.";
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