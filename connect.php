<?php 
	$servername = "localhost";
	$database = "escala";
	$username = "root";
	$password = "root";
	// Criar conexão com o banco
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Checar a conexão
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";

 ?>