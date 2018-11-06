

<?php  
	$sql= "SELECT * FROM escala_igreja ";
	$result = mysqli_query($conn,$sql);
	$row =  mysqli_fetch_assoc($result);

	$domingo_capela1 =@$row['domingo_capela1']?"<a href='crud.php?ok_escala=true&domingo_capela1=false'>".$row['domingo_capela1']."</a>":"<a href='crud.php?ok_escala=true&domingo_capela1=true'>Inscrever-se</a>";
	$domingo_capela2 =@$row['domingo_capela2']?"<a href='crud.php?ok_escala=true&domingo_capela2=false'>".$row['domingo_capela2']."</a>":"<a href='crud.php?ok_escala=true&domingo_capela2=true'>Inscrever-se</a>";
	$domingo_capela3 =@$row['domingo_capela3']?"<a href='crud.php?ok_escala=true&domingo_capela3=false'>".$row['domingo_capela3']."</a>":"<a href='crud.php?ok_escala=true&domingo_capela3=true'>Inscrever-se</a>";
	$domingo_capela4 =@$row['domingo_capela4']?"<a href='crud.php?ok_escala=true&domingo_capela4=false'>".$row['domingo_capela4']."</a>":"<a href='crud.php?ok_escala=true&domingo_capela4=true'>Inscrever-se</a>";
		
	 $sql= "SELECT presenca FROM usuarios WHERE presenca != '2' AND cpf='".@$_SESSION['cpf']."' ";
	$result1 = mysqli_query($conn,$sql);
	$row1 =  mysqli_fetch_assoc($result1);
	
	if(isset($row1['presenca'])){



		$domingo_capela1 =@$row['domingo_capela1']?$row['domingo_capela1']:"Inscrever-se";
		$domingo_capela2 =@$row['domingo_capela2']?$row['domingo_capela2']:"Inscrever-se";
		$domingo_capela3 =@$row['domingo_capela3']?$row['domingo_capela3']:"Inscrever-se";
		$domingo_capela4 =@$row['domingo_capela4']?$row['domingo_capela4']:"Inscrever-se";
	}



	echo $tabela=	"
	<h3 align='center'>CAPELA SÃO JOSÉ OPERÁRIO</h3>
		<div class='container-fluid '>

	<table class='table'align='center'>
			 
		    	
		    	<thead class='thead-dark'>
		    		<tr align='center'>
		    		<th colspan='12'>domingo</th>
		    		</tr>
		    	</thead>
		    	 <thead class='thead-light'>
		    		<tr align='center'>
		    		<th colspan='12'>8:00HS</th>
		    		</tr>
		    	</thead>
		    	 <tr>
			     
			      <td colspan='3'> $domingo_capela1</td>
			      <td colspan='3'> $domingo_capela2</td>
			      <td colspan='3'> $domingo_capela3</td>
			      <td colspan='3'> $domingo_capela4</td>
			    
			    </tr>

		</table>
		</div>";

?>		