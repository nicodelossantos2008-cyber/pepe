<?php

$nombre = $_POST["uname"];
$pass = $_POST["psw"];
$email = $_POST["email"];

echo "Nombre: ". $nombre . "<br>";
echo "Contraseña: ". $pass . "<br>";
echo "email: " .$email . "<br>";


	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'base_usuarios';
	$conn = mysqli_connect($hostname, $username, $password, $database);
	if(!$conn){
		die('Connection failed: ' . mysqli_connect_error());
	}


    $query = "SELECT * FROM usuario WHERE user_email = $email AND user_pass = $pass";
	$result = mysqli_query($conn, $query);
	$usuarios = [];
	while($row = mysqli_fetch_assoc($result)) {
		$usuarios[] = $row;
	}
	print_r($usuarios);

    if ($usuarios[0]["user_email"] ==$email && $usuarios[0]["usr_pass"] == $pass){
        echo "login exitoso";

    }else{
        echo "login incorrecto";
    }
?>

