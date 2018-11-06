<?php 



	$sql= "SELECT * FROM usuarios ";
	$result = mysqli_query($conn,$sql);
	$row =  mysqli_fetch_assoc($result);
	 if(@$alerta){echo "<script>confirmacao('success')</script>";}
$i=0;

  $table= "<table border='1' class='table table-striped table-dark'>
	<tr>
		<th>#</th>
		<th>id</th>
		<th>usuario</th>
		<th>senha</th>
		<th>email</th>
		<th>cpf</th>
		<th>editar</th>
		<th>deletar</th>
		<th>apagar</th>
		<th>ativar</th>
		
	</tr>" ;

do{
	$i++;

	$id 	= @$row['id'];
	$usu 	= @$row['usuario'];
	$senha 	= @$row['senha'];
	$email	= @$row['email'];
	$cpf 	= @$row['cpf'];
	$ativar	= @$row['valor']==1?"ativar":"-";
	//$ativ=@$row['valor']

  $table .= "
	<tr>
		<td>$i</td>
		<td>$id</td>
		<td>$usu</td>
		<td>$senha</td>
		<td>$email</td>
		<td>$cpf</td>
		<td>
		<a href='./?pag=2&id=$id'>
		Editar 
		</a> 
		</td>
		<td><a href='crud.php?deletar=true&ok_cadastro=true&id=$id'>Deletar</a></td>
		<td><a href='crud.php?apagar=true&ok_cadastro=true&id=$id'>apagar</a></td>
		<td><a href='crud.php?ativar=true&ok_cadastro=true&id=$id'>$ativar</a></td>

	</tr>";

	

	

}

while($row =  mysqli_fetch_assoc($result));


 
 $table .= "</table>";
	echo $table;


 ?>

 