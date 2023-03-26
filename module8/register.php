<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <?php

        $fname = $lname = $email = $password = $CPassword = "";
        $is_fname = $is_lname = $is_email = $is_password = $is_CPassword = $is_same = false;

        if(empty($_POST['fname'])){
            echo "<h2>First name is required</h2>";
        }else{
            $is_fname = true;
            $fname = $_POST['fname'];
        }

        if(empty($_POST['lname'])){
            echo "<h2>Last name is required</h2>";
        }else{
            $is_lname = true;
            $lname = $_POST['lname'];
        }

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

        if(empty($_POST['CPassword'])){
            echo "<h2>Confirm Password is required</h2>";
        }else{
            $is_CPassword = true;
            $CPassword = $_POST['CPassword'];
        }

        if($password != $CPassword){
            echo "<h2>Password and Confirm Password must be same</h2>";
        }else{
            $is_same = true;
        }

        if($is_fname && $is_lname && $is_email && $is_password && $is_CPassword && $is_same){
            echo "<p>Your, First name is $fname<br> Last name is $lname<br> Email is $email<br>Registration is successful<p>";
            setcookie("fname", $fname, time() + (86400 * 30), "/");
            setcookie("lname", $lname, time() + (86400 * 30), "/");
            setcookie("email", $email, time() + (86400 * 30), "/");
            setcookie("password", $password, time() + (86400 * 30), "/");
        }


    ?>
    <h1>Registration</h1>
    <form action="" method="post">
        <label for="fname">First Name:-</label>
        <input type="text" name="fname"><br>

        <label for="lname">Last Name:-</label>
        <input type="text" name="lname"><br>

        <label for="email">Email:-</label>
        <input type="email" name="email"><br>

        <label for="password">Password:-</label>
        <input type="password" name="password"><br>

        <label for="CPassword">Confirm Password:-</label>
        <input type="password" name="CPassword"><br>

        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>