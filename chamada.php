<?php 



	$sql= "SELECT  * FROM usuarios ";
	$sql2="SELECT (DATE_FORMAT(now(), '%m'),";
	$result = mysqli_query($conn,$sql);

	$row =  mysqli_fetch_assoc($result);
	


	 if(@$alerta){echo "<script>confirmacao('success')</script>";}
$i=0;

  $table= "<table border='1' class='table table-striped table-dark'>
	<tr>
		<th>#</th>
		<th>id</th>
		<th>usuario</th>
		<th>Presença</th>
		
		
		
	</tr>" ;

do{
	$i++;

	$id 	= @$row['id'];
	$usu 	= @$row['usuario'];
	$senha 	= @$row['senha'];
	$email	= @$row['email'];
	$cpf 	= @$row['cpf'];
	$presenca	= @$row['presenca']==2?"<a href='crud.php?presenca=false&ok_chamada=false&id=$id'>Presente</a>":"<a href='crud.php?presenca=true&ok_chamada=true&id=$id'>Falta</a>";
	//$ativ=@$row['valor']

	

  $table .= "
	<tr>
		<td>$i</td>
		<td>$id</td>
		<td>$usu</td>
		<td>$presenca</td>
	</tr>";

	

	

}

while($row =  mysqli_fetch_assoc($result));


 
 $table .= "</table>";
	 
	echo $table;


 ?>

 