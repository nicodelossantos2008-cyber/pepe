<?php

$nombre = $_POST["fname"];
$apellido =$_POST["lname"];
$email =$_POST["email"];
$password =$_POST["password"];

echo "nombre :  . $nombre . <br>";
echo "apellido :  . $apellido <br>";
echo "email :  . $email <br";
echo "password :  . $password <br>";


$email = $_POST ["email"];
$pass = $_POST ["password"];
if($email == "pepe@gmail.com" && $pass == "12345678"){
    echo "login bien";
header("locatiion: perfil.php");
exit();
}else{
    header("locatiion: login.ph");
    echo "error de login";
}
?>