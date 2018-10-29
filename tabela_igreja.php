<?php 


	$sql= "SELECT * FROM escala_igreja WHERE mes= DATE_FORMAT(now(), '%m')";
	$result = mysqli_query($conn,$sql);
	$row =  mysqli_fetch_assoc($result);
	$segunda_manha1  = @$row['segunda_manha1']?"  <a href='crud.php?ok_escala=true&segunda_manha1=false'>".$row['segunda_manha1']."</a>":"<a href='crud.php?ok_escala=true&segunda_manha1=true'>Increver-se</a>";
	$segunda_manha2  = @$row['segunda_manha2']?"  <a href='crud.php?ok_escala=true&segunda_manha2=false'>".$row['segunda_manha2']."</a>":"<a href='crud.php?ok_escala=true&segunda_manha2=true'>Increver-se</a>";
	$terca_manha1    = @$row['terca_manha1']?"    <a href='crud.php?ok_escala=true&terca_manha1=false'>".$row['terca_manha1']."</a>":"<a href='crud.php?ok_escala=true&terca_manha1=true'>Increver-se</a>";
	$terca_manha2    = @$row['terca_manha2']?"    <a href='crud.php?ok_escala=true&terca_manha2=false'>".$row['terca_manha2']."</a>":"<a href='crud.php?ok_escala=true&terca_manha2=true'>Increver-se</a>";
	$terca_noite1    = @$row['terca_noite1']?"    <a href='crud.php?ok_escala=true&terca_noite1=false'>".$row['terca_noite1']."</a>":"<a href='crud.php?ok_escala=true&terca_noite1=true'>Increver-se</a>";
	$terca_noite2    = @$row['terca_noite2']?"    <a href='crud.php?ok_escala=true&terca_noite2=false'>".$row['terca_noite2']."</a>":"<a href='crud.php?ok_escala=true&terca_noite2=true'>Increver-se</a>";
	$quarta_manha1   = @$row['quarta_manha1']?"   <a href='crud.php?ok_escala=true&quarta_manha1=false'>".$row['quarta_manha1']."</a>":"<a href='crud.php?ok_escala=true&quarta_manha1=true'>Increver-se</a>";
	$quarta_manha2   = @$row['quarta_manha2']?"   <a href='crud.php?ok_escala=true&quarta_manha2=false'>".$row['quarta_manha2']."</a>":"<a href='crud.php?ok_escala=true&quarta_manha2=true'>Increver-se</a>";
	$quarta_noite1   = @$row['quarta_noite1']?"   <a href='crud.php?ok_escala=true&quarta_noite1=false'>".$row['quarta_noite1']."</a>":"<a href='crud.php?ok_escala=true&quarta_noite1=true'>Increver-se</a>";
	$quarta_noite2   = @$row['quarta_noite2']?"   <a href='crud.php?ok_escala=true&quarta_noite2=false'>".$row['quarta_noite2']."</a>":"<a href='crud.php?ok_escala=true&quarta_noite2=true'>Increver-se</a>";
	$quinta_manha1   = @$row['quinta_manha1']?"   <a href='crud.php?ok_escala=true&quinta_manha1=false'>".$row['quinta_manha1']."</a>":"<a href='crud.php?ok_escala=true&quinta_manha1=true'>Increver-se</a>";
	$quinta_manha2   = @$row['quinta_manha2']?"   <a href='crud.php?ok_escala=true&quinta_manha2=false'>".$row['quinta_manha2']."</a>":"<a href='crud.php?ok_escala=true&quinta_manha2=true'>Increver-se</a>";
	$quinta_noite1   = @$row['quinta_noite1']?"   <a href='crud.php?ok_escala=true&quinta_noite1=false'>".$row['quinta_noite1']."</a>":"<a href='crud.php?ok_escala=true&quinta_noite1=true'>Increver-se</a>";
	$quinta_noite2   = @$row['quinta_noite2']?"   <a href='crud.php?ok_escala=true&quinta_noite2=false'>".$row['quinta_noite2']."</a>":"<a href='crud.php?ok_escala=true&quinta_noite2=true'>Increver-se</a>";
	$sexta_manha1    = @$row['sexta_manha1']?"    <a href='crud.php?ok_escala=true&sexta_manha1=false'>".$row['sexta_manha1']."</a>":"<a href='crud.php?ok_escala=true&sexta_manha1=true'>Increver-se</a>";
	$sexta_manha2    = @$row['sexta_manha2']?"    <a href='crud.php?ok_escala=true&sexta_manha2=false'>".$row['sexta_manha2']."</a>":"<a href='crud.php?ok_escala=true&sexta_manha2=true'>Increver-se</a>";
	$sexta_noite1    = @$row['sexta_noite1']?"    <a href='crud.php?ok_escala=true&sexta_noite1=false'>".$row['sexta_noite1']."</a>":"<a href='crud.php?ok_escala=true&sexta_noite1=true'>Increver-se</a>";
	$sexta_noite2    = @$row['sexta_noite2']?"    <a href='crud.php?ok_escala=true&sexta_noite2=false'>".$row['sexta_noite2']."</a>":"<a href='crud.php?ok_escala=true&sexta_noite2=true'>Increver-se</a>";
	$sabado_manha1   = @$row['sabado_manha1']?"   <a href='crud.php?ok_escala=true&sabado_manha1=false'>".$row['sabado_manha1']."</a>":"<a href='crud.php?ok_escala=true&sabado_manha1=true'>Increver-se</a>";
	$sabado_manha2   = @$row['sabado_manha2']?"   <a href='crud.php?ok_escala=true&sabado_manha2=false'>".$row['sabado_manha2']."</a>":"<a href='crud.php?ok_escala=true&sabado_manha2=true'>Increver-se</a>";
	$sabado_noite1   = @$row['sabado_noite1']?"   <a href='crud.php?ok_escala=true&sabado_noite1=false'>".$row['sabado_noite1']."</a>":"<a href='crud.php?ok_escala=true&sabado_noite1=true'>Increver-se</a>";
	$sabado_noite2   = @$row['sabado_noite2']?"   <a href='crud.php?ok_escala=true&sabado_noite2=false'>".$row['sabado_noite2']."</a>":"<a href='crud.php?ok_escala=true&sabado_noite2=true'>Increver-se</a>";
	$sabado_noite3   = @$row['sabado_noite3']?"   <a href='crud.php?ok_escala=true&sabado_noite3=false'>".$row['sabado_noite3']."</a>":"<a href='crud.php?ok_escala=true&sabado_noite3=true'>Increver-se</a>";
	$sabado_noite4   = @$row['sabado_noite4']?"   <a href='crud.php?ok_escala=true&sabado_noite4=false'>".$row['sabado_noite4']."</a>":"<a href='crud.php?ok_escala=true&sabado_noite4=true'>Increver-se</a>";
	$domingo_manhaA1 = @$row['domingo_manhaA1']?" <a href='crud.php?ok_escala=true&domingo_manhaA1=false'>".$row['domingo_manhaA1']."</a>":"<a href='crud.php?ok_escala=true&domingo_manhaA1=true'>Increver-se</a>";
	$domingo_manhaA2 = @$row['domingo_manhaA2']?" <a href='crud.php?ok_escala=true&domingo_manhaA2=false'>".$row['domingo_manhaA2']."</a>":"<a href='crud.php?ok_escala=true&domingo_manhaA2=true'>Increver-se</a>";
	$domingo_manhaA3 = @$row['domingo_manhaA3']?" <a href='crud.php?ok_escala=true&domingo_manhaA3=false'>".$row['domingo_manhaA3']."</a>":"<a href='crud.php?ok_escala=true&domingo_manhaA3=true'>Increver-se</a>";
	$domingo_manhaA4 = @$row['domingo_manhaA4']?" <a href='crud.php?ok_escala=true&domingo_manhaA4=false'>".$row['domingo_manhaA4']."</a>":"<a href='crud.php?ok_escala=true&domingo_manhaA4=true'>Increver-se</a>";
	$domingo_manhaB1 = @$row['domingo_manhaB1']?" <a href='crud.php?ok_escala=true&domingo_manhaB1=false'>".$row['domingo_manhaB1']."</a>":"<a href='crud.php?ok_escala=true&domingo_manhaB1=true'>Increver-se</a>";
	$domingo_manhaB2 = @$row['domingo_manhaB2']?" <a href='crud.php?ok_escala=true&domingo_manhaB2=false'>".$row['domingo_manhaB2']."</a>":"<a href='crud.php?ok_escala=true&domingo_manhaB2=true'>Increver-se</a>";
	$domingo_manhaB3 = @$row['domingo_manhaB3']?" <a href='crud.php?ok_escala=true&domingo_manhaB3=false'>".$row['domingo_manhaB3']."</a>":"<a href='crud.php?ok_escala=true&domingo_manhaB3=true'>Increver-se</a>";
	$domingo_manhaB4 = @$row['domingo_manhaB4']?" <a href='crud.php?ok_escala=true&domingo_manhaB4=false'>".$row['domingo_manhaB4']."</a>":"<a href='crud.php?ok_escala=true&domingo_manhaB4=true'>Increver-se</a>";
	$domingo_tarde1  = @$row['domingo_tarde1']?"  <a href='crud.php?ok_escala=true&domingo_tarde1=false'>".$row['domingo_tarde1']."</a>":"<a href='crud.php?ok_escala=true&domingo_tarde1=true'>Increver-se</a>";
	$domingo_tarde2  = @$row['domingo_tarde2']?"  <a href='crud.php?ok_escala=true&domingo_tarde2=false'>".$row['domingo_tarde2']."</a>":"<a href='crud.php?ok_escala=true&domingo_tarde2=true'>Increver-se</a>";
	$domingo_tarde3  = @$row['domingo_tarde3']?"  <a href='crud.php?ok_escala=true&domingo_tarde3=false'>".$row['domingo_tarde3']."</a>":"<a href='crud.php?ok_escala=true&domingo_tarde3=true'>Increver-se</a>";
	$domingo_tarde4  = @$row['domingo_tarde4']?"  <a href='crud.php?ok_escala=true&domingo_tarde4=false'>".$row['domingo_tarde4']."</a>":"<a href='crud.php?ok_escala=true&domingo_tarde4=true'>Increver-se</a>";
	$domingo_noite1  = @$row['domingo_noite1']?"  <a href='crud.php?ok_escala=true&domingo_noite1=false'>".$row['domingo_noite1']."</a>":"<a href='crud.php?ok_escala=true&domingo_noite1=true'>Increver-se</a>";
	$domingo_noite2  = @$row['domingo_noite2']?"  <a href='crud.php?ok_escala=true&domingo_noite2=false'>".$row['domingo_noite2']."</a>":"<a href='crud.php?ok_escala=true&domingo_noite2=true'>Increver-se</a>";
	$domingo_noite3  = @$row['domingo_noite3']?"  <a href='crud.php?ok_escala=true&domingo_noite3=false'>".$row['domingo_noite3']."</a>":"<a href='crud.php?ok_escala=true&domingo_noite3=true'>Increver-se</a>";
	$domingo_noite4  = @$row['domingo_noite4']?"  <a href='crud.php?ok_escala=true&domingo_noite4=false'>".$row['domingo_noite4']."</a>":"<a href='crud.php?ok_escala=true&domingo_noite4=true'>Increver-se</a>";
	
	 $sql= "SELECT presenca FROM inscrever WHERE presenca != '2' AND cpf='".@$_SESSION['cpf']."' ";
	$result1 = mysqli_query($conn,$sql);
	$row1 =  mysqli_fetch_assoc($result1);
	
	if(isset($row1['presenca'])){

		$segunda_manha1 =@$row['segunda_manha1']?$row['segunda_manha1']:"Increver-se";
		$segunda_manha2 =@$row['segunda_manha2']?$row['segunda_manha2']:"Increver-se";
		$terca_manha1 =@$row['terca_manha1']?$row['terca_manha1']:"Increver-se";
		$terca_manha2 =@$row['terca_manha2']?$row['terca_manha2']:"Increver-se";
		$terca_noite1 =@$row['terca_noite1']?$row['terca_noite1']:"Increver-se";
		$terca_noite2 =@$row['terca_noite2']?$row['terca_noite2']:"Increver-se";
		$quarta_manha1 =@$row['quarta_manha1']?$row['quarta_manha1']:"Increver-se";
		$quarta_manha2 =@$row['quarta_manha2']?$row['quarta_manha2']:"Increver-se";
		$quarta_noite1 =@$row['quarta_noite1']?$row['quarta_noite1']:"Increver-se";
		$quarta_noite2 =@$row['quarta_noite2']?$row['quarta_noite2']:"Increver-se";
		$quinta_manha1 =@$row['quinta_manha1']?$row['quinta_manha1']:"Increver-se";
		$quinta_manha2 =@$row['quinta_manha2']?$row['quinta_manha2']:"Increver-se";
		$quinta_noite1 =@$row['quinta_noite1']?$row['quinta_noite1']:"Increver-se";
		$quinta_noite2 =@$row['quinta_noite2']?$row['quinta_noite2']:"Increver-se";
		$sexta_manha1 =@$row['sexta_manha1']?$row['sexta_manha1']:"Increver-se";
		$sexta_manha2 =@$row['sexta_manha2']?$row['sexta_manha2']:"Increver-se";
		$sexta_noite1 =@$row['sexta_noite1']?$row['sexta_noite1']:"Increver-se";
		$sexta_noite2 =@$row['sexta_noite2']?$row['sexta_noite2']:"Increver-se";
		$sabado_manha1 =@$row['sabado_manha1']?$row['sabado_manha1']:"Increver-se";
		$sabado_manha2 =@$row['sabado_manha2']?$row['sabado_manha2']:"Increver-se";
		$sabado_noite1 =@$row['sabado_noite1']?$row['sabado_noite1']:"Increver-se";
		$sabado_noite2 =@$row['sabado_noite2']?$row['sabado_noite2']:"Increver-se";
		$sabado_noite3 =@$row['sabado_noite3']?$row['sabado_noite3']:"Increver-se";
		$sabado_noite4 =@$row['sabado_noite4']?$row['sabado_noite4']:"Increver-se";
		$domingo_manhaA1 =@$row['domingo_manhaA1']?$row['domingo_manhaA1']:"Increver-se";
		$domingo_manhaA2 =@$row['domingo_manhaA2']?$row['domingo_manhaA2']:"Increver-se";
		$domingo_manhaA3 =@$row['domingo_manhaA3']?$row['domingo_manhaA3']:"Increver-se";
		$domingo_manhaA4 =@$row['domingo_manhaA4']?$row['domingo_manhaA4']:"Increver-se";
		$domingo_manhaB1 =@$row['domingo_manhaB1']?$row['domingo_manhaB1']:"Increver-se";
		$domingo_manhaB2 =@$row['domingo_manhaB2']?$row['domingo_manhaB2']:"Increver-se";
		$domingo_manhaB3 =@$row['domingo_manhaB3']?$row['domingo_manhaB3']:"Increver-se";
		$domingo_manhaB4 =@$row['domingo_manhaB4']?$row['domingo_manhaB4']:"Increver-se";
		$domingo_tarde1 =@$row['domingo_tarde1']?$row['domingo_tarde1']:"Increver-se";
		$domingo_tarde2 =@$row['domingo_tarde2']?$row['domingo_tarde2']:"Increver-se";
		$domingo_tarde3 =@$row['domingo_tarde3']?$row['domingo_tarde3']:"Increver-se";
		$domingo_tarde4 =@$row['domingo_tarde4']?$row['domingo_tarde4']:"Increver-se";
		$domingo_noite1 =@$row['domingo_noite1']?$row['domingo_noite1']:"Increver-se";
		$domingo_noite2 =@$row['domingo_noite2']?$row['domingo_noite2']:"Increver-se";
		$domingo_noite3 =@$row['domingo_noite3']?$row['domingo_noite3']:"Increver-se";
		$domingo_noite4 =@$row['domingo_noite4']?$row['domingo_noite4']:"Increver-se";




	}
	
	

 ?>

	<h3 align="center">IGREJA SÃO FRANCISCO DE ASSIS-MATRIZ</h3>

		
		<div class="container-fluid ">
	 <?php  echo	$tabela = "<table class='table' >
			
		  		
		    	
		   <thead class='thead-light' >
		    		<tr align='center'>
		    		<th colspan='12'>Semana</th>
		    		</tr>
		    	</thead>
		    	<thead class='thead-dark'>
	    		<tr>
			      <th colspan='2'>segunda</th>
			      <th colspan='2'>terça</th>
			      <th colspan='2'>quarta</th>
			      <th colspan='2'>quinta</th>
			      <th colspan='2'>sexta</th>
			      <th colspan='2'>sabado</th>
			    </tr>
			    </thead>
			    <thead class='thead-light'>
		    		<tr align='center'>
		    		<th colspan='12'>7:00HS</th>
		    		</tr>
		    	
	  		</thead>
	  		<tbody>
			    <tr>
			      <td colspan='2'> $segunda_manha1</td>
			      <td colspan='2'> $terca_manha1</td>
			      <td colspan='2'> $quarta_manha1</td>
			      <td colspan='2'> $quinta_manha1</td>
			      <td colspan='2'> $sexta_manha1</td>
			      <td colspan='2'> $sabado_manha1</td>
			     
			    <tr>
			     
			      <td colspan='2'> $segunda_manha2</td>
			      <td colspan='2'> $terca_manha2</td>
			      <td colspan='2'> $quarta_manha2</td>
			      <td colspan='2'> $quinta_manha2</td>
			      <td colspan='2'> $sexta_manha2</td>
			      <td colspan='2'> $sabado_manha2</td>
			    </tr>
			   <thead class='thead-light'>
		    		<tr align='center'>
		    		<th colspan='12'>19:00HS</th>
		    		</tr>
		    	</thead>
		    	 <tr>
			      <td colspan='2'> ------------</td>
			      <td colspan='2'> $terca_noite1</td>
			      <td colspan='2'> $quarta_noite1</td>
			      <td colspan='2'> $quinta_noite1</td>
			      <td colspan='2'> $sexta_noite1</td>
			      <td colspan='2'> $sabado_noite1</td>
			    </tr>
			    <tr>
			      <td colspan='2'> ------------</td>
			      <td colspan='2'> $terca_noite2</td>
			      <td colspan='2'> $quarta_noite2</td>
			      <td colspan='2'> $quinta_noite2</td>
			      <td colspan='2'> $sexta_noite2</td>
			      <td colspan='2'> $sabado_noite2</td>	
			      
			    </tr>
			       <tr>
			     
			      <td colspan='2'>------------</td>
			      <td colspan='2'>------------</td>
			      <td colspan='2'>------------</td>
			      <td colspan='2'>------------</td>
			      <td colspan='2'>------------</td>
			      <td colspan='2'> $sabado_noite3</td>
			    </tr>
			    <tr>
			     
			      <td colspan='2'>------------</td>
			      <td colspan='2'>------------</td>
			      <td colspan='2'>------------</td>
			      <td colspan='2'>------------</td>
			      <td colspan='2'>------------</td>
			      <td colspan='2'> $sabado_noite4</td>
			    </tr>


			    <thead class='thead-dark'>
		    		<tr align='center'>
		    		<th colspan='12'>domingo</th>
		    		</tr>
		    	</thead>
		    	<thead  class='thead-light'>
	    		<tr>
			      <th  colspan='3' >7:00HS</th>
			      <th  colspan='3' >10:00HS</th>
			      <th  colspan='3' >17:00HS</th>
			      <th  colspan='3' >19:30HS</th>
			      
			    </tr>
			    </thead>
			    <tr>
			      <td colspan='3'> $domingo_manhaA1</td>
			      <td colspan='3'> $domingo_manhaB1</td>
			      <td colspan='3'> $domingo_tarde1</td>
			      <td colspan='3'> $domingo_noite1</td>
			    </tr>
			    <tr>
			      <td colspan='3'> $domingo_manhaA2</td>
			      <td colspan='3'> $domingo_manhaB2</td>
			      <td colspan='3'> $domingo_tarde2</td>
			      <td colspan='3'> $domingo_noite2</td>
			    
			    </tr>
			    <tr>
			     
			      <td colspan='3'> $domingo_manhaA3</td>
			      <td colspan='3'> $domingo_manhaB3</td>
			      <td colspan='3'> $domingo_tarde3</td>
			      <td colspan='3'> $domingo_noite3</td>
			     
			    
			    </tr>
 				<tr>
			     
			      <td colspan='3'> $domingo_manhaA4</td>
			      <td colspan='3'> $domingo_manhaB4</td>
			      <td colspan='3'> $domingo_tarde4</td>
			      <td colspan='3'> $domingo_noite4</td>
			      
			    
			    </tr>


	  		</tbody>
		</table>
		
	</div>";

?>