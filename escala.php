<?php 

	
	$id=@$_GET['id'];

	if($id){
	echo $sql= "SELECT * FROM usuarios WHERE id=$id AND voluntario !=0 ";
	$result = mysqli_query($conn,$sql);
	$row =  mysqli_fetch_assoc($result);


	$usu = @$row['usuario'];
	$senha = @$row['senha'];
	$conf_senha = @$row['conf_senha'];
	$email = @$row['email'];
	$cpf = @$row['cpf'];	
	$presenca = @$row['presenca'];
	

}
 ?>
<?php if(@$presenca=2){ ?>

<!DOCTYPE html>
<html>
<head>
	<title>ESCALA</title>
	
</head>
<body>
	
<?php switch ($opcao) {
	case '1': include('tabela_capela.php');break;
	
	default: include('tabela_igreja.php');break;
	
} ?>

		
	
</body>
</html>
<?php }else{

	
	$redirect = "../?pag=8";
	header("location:$redirect"); 
} ?>