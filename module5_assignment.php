

<!-- Task 1: HTML Basics -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Your Name:- </label>
        <input type="text" name="name"><br>
        <label for="email">Enter E-mail:- </label>
        <input type="email" name="email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<!-- Task 2: Basic OOP in PHP -->

<?php
class Person{
    private $name;
    private $email;
    
    function setName($name){ $this->name = $name; }
    function setEmail($email){ $this->email = $email; }
    function getName(){ return $this->name;}
    function getEmail(){ return $this->email; }
}

$myPerson1 = new Person();
$myPerson1->setName("Samiul");
$myPerson1->setEMail("test@domain.com");

echo "<p>{$myPerson1->getName()}</p>";
echo "<p>{$myPerson1->getEmail()}</p>";
?>

<!-- Task 3: Superglobal Variables in PHP -->

<?php
$name = isset($_POST['name']) ? $_POST['name'] : "no name";
$email = isset($_POST['email']) ? $_POST['email'] : "no email";

$myPerson2 = new Person();
$myPerson2->setName($name);
$myPerson2->setEMail($email);

echo "<p>{$myPerson2->getName()}</p>";
echo "<p>{$myPerson2->getEmail()}</p>";
?>