<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php

        $email = $password = "";
        $is_email = $is_password = false;

        
        if(empty($_POST['email'])){
            echo "<h2>Email is required</h2>";
        }else{
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email_error = "<h2>Invalid email format</h2>";
            }else{
                $is_email = true;
                $email = $_POST['email'];
            }
        }

        if(empty($_POST['password'])){
            echo "<h2>Password is required</h2>";
        }else{
            $is_password = true;
            $password = $_POST['password'];
        }

        if($is_email && $is_password){
            if($email == $_COOKIE['email'] && $password == $_COOKIE['password']){
                header('Location: welcome.php');
            }else{
                echo "<h2>Email or Password doesn't match</h2>";
            }
        }


    ?>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="email">Email:-</label>
        <input type="email" name="email"><br>

        <label for="password">Password:-</label>
        <input type="password" name="password"><br>

        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>
