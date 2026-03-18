<?php
	
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'base_usuarios';

	$conn = mysqli_connect($hostname, $username, $password, $database);
	
	if(!$conn){
		die('Connection failed: ' . mysqli_connect_error());
	}

	
	$query = "SELECT * FROM usuario";
	$result = mysqli_query($conn, $query);
	$usuarios = [];
	while($row = mysqli_fetch_assoc($result)) {
		$usuarios[] = $row;
	}
	print_r($usuarios);

    foreach ($usuarios as $usuarios){
        echo $usuarios["user_email"];
            }
?>
