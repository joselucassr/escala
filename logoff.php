<?php 
	session_destroy();
	$redirect = "./?pag=000";
	header("location: $redirect");

 ?>