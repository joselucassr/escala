<?php 
	
		$id=@$_GET['id'];

	if($id){
	$sql= "SELECT * FROM aviso WHERE id=$id ";
	$result = mysqli_query($conn,$sql);
	$row =  mysqli_fetch_assoc($result);


	$titulo = @$row['titulo'];
	$men = @$row['mensagem'];
	
}
  

 ?>

<?php if(@$alerta){echo "<script>confirmacao('success')</script>";} ?>
<form action="crud.php" method="POST">
	<div class="form-group">	
		<br>
		<div>
			<div>
				<input type="text" name="titulo" value= "<?php echo @$titulo ; ?>" class="form-control" placeholder="titulo" required> 
				<br>
				<br>
			
				<textarea name="mensagem" id="ckeditor" value= "<?php echo @$men ; ?>" class='form-control ckeditor' placeholder="Duvidas/Sugestões:" rows='10' cols='60'  required></textarea> 
				<br>
				<div>
					<input type="submit" name="ok_aviso" class="btn btn-light btn-md" value="Enviar">
				</div>
			</div>	
		</div>
	</div>