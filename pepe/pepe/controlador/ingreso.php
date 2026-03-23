<?php

//$nombre = $_POST["uname"];
$pass = $_POST["psw"];
$email = $_POST["email"];

// Database configuration
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'base_usuarios';
	// Establish database connection
	$conn = mysqli_connect($hostname, $username, $password, $database);
	// Check connection
	if(!$conn){
		die('Connection failed: ' . mysqli_connect_error());
	}

	// Make query
	$query = "SELECT * FROM usuario WHERE usr_email = '$email' AND usr_pass = '$pass'";
	$result = mysqli_query($conn, $query);
	$usuarios = [];
	while($row = mysqli_fetch_assoc($result)) {
		$usuarios[] = $row;
	}
	//print_r($usuarios);

    if(empty($usuarios)){
        echo "Usuario o contraseña incorrectos";
    }else{
        echo "Bienvenido ". $usuarios[0]["usr_name"];
    }


?>