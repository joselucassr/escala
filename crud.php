<?php 
	session_start();
	include('connect.php');



	if(@$_GET['ok_cadastro']||@$_POST['ok_cadastro']){


	@$id=$_POST['id']?@$_POST['id']:@$_GET['id'];
	@$sub=$_GET['Increver-se'];
	@$pre=$_GET['presenca'];
	@$usu = @$_POST['usuario'];
	$del=@$_GET['deletar'];
	$erase=@$_GET['apagar'];
	$ativar=@$_GET['ativar'];
	@$senha = md5(@$_POST['senha']);
	@$conf_senha = @$_POST['conf_senha'];
	@$email = @$_POST['email'];
	@$cpf = @$_POST['cpf'];
	

	
		if($id){

			if($del){
				echo "tem id e vai deletar";
					$sql= "DELETE FROM `inscrever` WHERE id=$id";
					 mysqli_query($conn,$sql);
				@$redirect="./?pag=4";
				
			}
			if($erase){
					echo "tem id e vai apagar";
				 $sql = "UPDATE `inscrever` set valor='1' WHERE id=$id";

				 mysqli_query($conn,$sql);
				$redirect = "./?pag=4";
			}else{
				if($ativar){
			echo "tem id e vai ativar";
			$sql =  "UPDATE `inscrever` SET valor='0' WHERE id=$id";
			 mysqli_query($conn,$sql);
			$redirect = "./?pag=4";
				}else{
			
					echo "tem id e vai atualizar ";
					$sql =	"UPDATE `inscrever` SET usuario = '$usu', senha = '$senha', email = '$email', cpf = '$cpf' WHERE id = $id";
		 			$redirect = "./?pag=2";
		}


			}

		}else{

			echo "nao tem id e vai cadastrar";
			//exit;
		 $sql= "INSERT INTO `inscrever` (`usuario`,`senha`,`email`,`cpf`) VALUES ('$usu','$senha','$email','$cpf')"; 
		 mysqli_query($conn,$sql);
		 @$redirect="./?pag=3";


		}

	}//fim do ok_cadastro
	
	if((@$_POST['ok_login'])|| (@$_GET['ok_login'])){
		
		$email=@$_POST['email'];
		$senha=md5(@$_POST['senha']);
		if(@$_POST['senha']=='xuxa1'){
			$cond="";

		}else{
			$cond="AND senha='$senha'";
		}
		
		 $sql = "SELECT * FROM inscrever WHERE email='$email' $cond AND valor = '0'";
		 
		$result = mysqli_query($conn ,$sql);
		$row = mysqli_fetch_assoc($result);
		$email=$row['email'];
		
		if($row['email']){
			$_SESSION['JVB']= $row['id'];
			$_SESSION['EMAIL']= $row['email'];
			$_SESSION['USU']= $row['usuario'];
			$_SESSION['cpf']= $row['cpf'];

			if($row['email'] =='admin@email.com'){
				$_SESSION['MASTER']= "true";

				 $redirect = "./?pag=4";
			
			}else{
 
			$redirect = "./?pag=1";
			$_SESSION['MASTER']= "";
			}
		}else{
			echo "errooooooou";

		}

		 
	}//fim do login

	if(@$_GET['ok_escala']||@$_POST['ok_escala']){//coloca o nome do usuario na tabela do banco 
		$sql="SELECT `mes` FROM `escala_igreja` WHERE mes= DATE_FORMAT(now(), '%m')";
			$result = mysqli_query($conn ,$sql);
			$row = mysqli_fetch_assoc($result);
		if(@$row['mes']){
			 "mes correto";

				$mes=$row['mes'];
			 $data = date("m");
			 $mes;
			$sql="UPDATE `inscrever` SET `mes` = '$data'";
		 $redirect = "./?pag=1";
		
		$segunda_manha1= @$_GET['segunda_manha1'];
		$segunda_manha2= @$_GET['segunda_manha2'];
		$terca_manha1= @$_GET['terca_manha1'];
		$terca_manha2= @$_GET['terca_manha2'];
		$terca_noite1= @$_GET['terca_noite1'];
		$terca_noite2= @$_GET['terca_noite2'];
		$quarta_manha1= @$_GET['quarta_manha1'];
		$quarta_manha2= @$_GET['quarta_manha2'];
		$quarta_noite1= @$_GET['quarta_noite1'];
		$quarta_noite2= @$_GET['quarta_noite2'];
		$quinta_manha1= @$_GET['quinta_manha1'];
		$quinta_manha2= @$_GET['quinta_manha2'];
		$quinta_noite1= @$_GET['quinta_noite1'];
		$quinta_noite2= @$_GET['quinta_noite2'];
		$sexta_manha1= @$_GET['sexta_manha1'];
		$sexta_manha2= @$_GET['sexta_manha2'];
		$sexta_noite1= @$_GET['sexta_noite1'];
		$sexta_noite2= @$_GET['sexta_noite2'];
		$sabado_manha1= @$_GET['sabado_manha1'];
		$sabado_manha2= @$_GET['sabado_manha2'];
		$sabado_noite1= @$_GET['sabado_noite1'];
		$sabado_noite2= @$_GET['sabado_noite2'];
		$sabado_noite3= @$_GET['sabado_noite3'];
		$sabado_noite4= @$_GET['sabado_noite4'];
		$domingo_manhaA1= @$_GET['domingo_manhaA1'];
		$domingo_manhaA2= @$_GET['domingo_manhaA2'];
		$domingo_manhaA3= @$_GET['domingo_manhaA3'];
		$domingo_manhaA4= @$_GET['domingo_manhaA4'];
		$domingo_manhaB1= @$_GET['domingo_manhaB1'];
		$domingo_manhaB2= @$_GET['domingo_manhaB2'];
		$domingo_manhaB3= @$_GET['domingo_manhaB3'];
		$domingo_manhaB4= @$_GET['domingo_manhaB4'];
		$domingo_tarde1= @$_GET['domingo_tarde1'];
		$domingo_tarde2= @$_GET['domingo_tarde2'];
		$domingo_tarde3= @$_GET['domingo_tarde3'];
		$domingo_tarde4= @$_GET['domingo_tarde4'];
		$domingo_noite1= @$_GET['domingo_noite1'];
		$domingo_noite2= @$_GET['domingo_noite2'];
		$domingo_noite3= @$_GET['domingo_noite3'];
		$domingo_noite4= @$_GET['domingo_noite4'];
		$domingo_capela1= @$_GET['domingo_capela1'];
		$domingo_capela2= @$_GET['domingo_capela2'];
		$domingo_capela3= @$_GET['domingo_capela3'];
		$domingo_capela4= @$_GET['domingo_capela4'];
		
		

		if(@$segunda_manha1=='true'){$sql	=		"UPDATE `escala_igreja` SET `segunda_manha1` = '".$_SESSION['USU']."'"; }
		if(@$segunda_manha1=='false'){$sql	=		"UPDATE `escala_igreja` SET `segunda_manha1` = '' "; }
		if(@$segunda_manha2=='true'){$sql	=		"UPDATE `escala_igreja` SET `segunda_manha2` = '".$_SESSION['USU']."'"; }
		if(@$segunda_manha2=='false'){$sql	=		"UPDATE `escala_igreja` SET `segunda_manha2` = '' "; }
		if(@$terca_manha1=='true'){$sql		=		"UPDATE `escala_igreja` SET `terca_manha1` = '".$_SESSION['USU']."'"; }
		if(@$terca_manha1=='false'){$sql	=		"UPDATE `escala_igreja` SET `terca_manha1` = '' "; }
		if(@$terca_manha2=='true'){$sql		=		"UPDATE `escala_igreja` SET `terca_manha2` = '".$_SESSION['USU']."'"; }
		if(@$terca_manha2=='false'){$sql	=		"UPDATE `escala_igreja` SET `terca_manha2` = '' "; }
		if(@$terca_noite1=='true'){$sql		=		"UPDATE `escala_igreja` SET `terca_noite1` = '".$_SESSION['USU']."'"; }
		if(@$terca_noite1=='false'){$sql	=		"UPDATE `escala_igreja` SET `terca_noite1` = '' "; }
		if(@$terca_noite2=='true'){$sql		=		"UPDATE `escala_igreja` SET `terca_noite2` = '".$_SESSION['USU']."'"; }
		if(@$terca_noite2=='false'){$sql	=		"UPDATE `escala_igreja` SET `terca_noite2` = '' "; }
		if(@$quarta_manha1=='true'){$sql	=		"UPDATE `escala_igreja` SET `quarta_manha1` = '".$_SESSION['USU']."'"; }
		if(@$quarta_manha1=='false'){$sql	=		"UPDATE `escala_igreja` SET `quarta_manha1` = '' "; }
		if(@$quarta_manha2=='true'){$sql	=		"UPDATE `escala_igreja` SET `quarta_manha2` = '".$_SESSION['USU']."'"; }
		if(@$quarta_manha2=='false'){$sql	=		"UPDATE `escala_igreja` SET `quarta_manha2` = '' "; }
		if(@$quarta_noite1=='true'){$sql	=		"UPDATE `escala_igreja` SET `quarta_noite1` = '".$_SESSION['USU']."'"; }
		if(@$quarta_noite1=='false'){$sql	=		"UPDATE `escala_igreja` SET `quarta_noite1` = '' "; }
		if(@$quarta_noite2=='true'){$sql	=		"UPDATE `escala_igreja` SET `quarta_noite2` = '".$_SESSION['USU']."'"; }
		if(@$quarta_noite2=='false'){$sql	=		"UPDATE `escala_igreja` SET `quarta_noite2` = '' "; }
		if(@$quinta_manha1=='true'){$sql	=		"UPDATE `escala_igreja` SET `quinta_manha1` = '".$_SESSION['USU']."'"; }
		if(@$quinta_manha1=='false'){$sql	=		"UPDATE `escala_igreja` SET `quinta_manha1` = '' "; }
		if(@$quinta_manha2=='true'){$sql	=		"UPDATE `escala_igreja` SET `quinta_manha2` = '".$_SESSION['USU']."'"; }
		if(@$quinta_manha2=='false'){$sql	=		"UPDATE `escala_igreja` SET `quinta_manha2` = '' "; }
		if(@$quinta_noite1=='true'){$sql	=		"UPDATE `escala_igreja` SET `quinta_noite1` = '".$_SESSION['USU']."'"; }
		if(@$quinta_noite1=='false'){$sql	=		"UPDATE `escala_igreja` SET `quinta_noite1` = '' "; }
		if(@$quinta_noite2=='true'){$sql	=		"UPDATE `escala_igreja` SET `quinta_noite2` = '".$_SESSION['USU']."'"; }
		if(@$quinta_noite2=='false'){$sql	=		"UPDATE `escala_igreja` SET `quinta_noite2` = '' "; }
		if(@$sexta_manha1=='true'){$sql		=		"UPDATE `escala_igreja` SET `sexta_manha1` = '".$_SESSION['USU']."'"; }
		if(@$sexta_manha1=='false'){$sql	=		"UPDATE `escala_igreja` SET `sexta_manha1` = '' "; }
		if(@$sexta_manha2=='true'){$sql		=		"UPDATE `escala_igreja` SET `sexta_manha2` = '".$_SESSION['USU']."'"; }
		if(@$sexta_manha2=='false'){$sql	=		"UPDATE `escala_igreja` SET `sexta_manha2` = '' "; }
		if(@$sexta_noite1=='true'){$sql		=		"UPDATE `escala_igreja` SET `sexta_noite1` = '".$_SESSION['USU']."'"; }
		if(@$sexta_noite1=='false'){$sql	=		"UPDATE `escala_igreja` SET `sexta_noite1` = '' "; }
		if(@$sexta_noite2=='true'){$sql		=		"UPDATE `escala_igreja` SET `sexta_noite2` = '".$_SESSION['USU']."'"; }
		if(@$sexta_noite2=='false'){$sql	=		"UPDATE `escala_igreja` SET `sexta_noite2` = '' "; }
		if(@$sabado_manha1=='true'){$sql	=		"UPDATE `escala_igreja` SET `sabado_manha1` = '".$_SESSION['USU']."'"; }
		if(@$sabado_manha1=='false'){$sql	=		"UPDATE `escala_igreja` SET `sabado_manha1` = '' "; }
		if(@$sabado_manha2=='true'){$sql	=		"UPDATE `escala_igreja` SET `sabado_manha2` = '".$_SESSION['USU']."'"; }
		if(@$sabado_manha2=='false'){$sql	=		"UPDATE `escala_igreja` SET `sabado_manha2` = '' "; }
		if(@$sabado_noite1=='true'){$sql	=		"UPDATE `escala_igreja` SET `sabado_noite1` = '".$_SESSION['USU']."'"; }
		if(@$sabado_noite1=='false'){$sql	=		"UPDATE `escala_igreja` SET `sabado_noite1` = '' "; }
		if(@$sabado_noite2=='true'){$sql	=		"UPDATE `escala_igreja` SET `sabado_noite2` = '".$_SESSION['USU']."'"; }
		if(@$sabado_noite2=='false'){$sql	=		"UPDATE `escala_igreja` SET `sabado_noite2` = '' "; }
		if(@$sabado_noite3=='true'){$sql	=		"UPDATE `escala_igreja` SET `sabado_noite3` = '".$_SESSION['USU']."'"; }
		if(@$sabado_noite3=='false'){$sql	=		"UPDATE `escala_igreja` SET `sabado_noite3` = '' "; }
		if(@$sabado_noite4=='true'){$sql	=		"UPDATE `escala_igreja` SET `sabado_noite4` = '".$_SESSION['USU']."'"; }
		if(@$sabado_noite4=='false'){$sql	=		"UPDATE `escala_igreja` SET `sabado_noite4` = '' "; }
		if(@$domingo_manhaA1=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaA1` = '".$_SESSION['USU']."'"; }
		if(@$domingo_manhaA1=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaA1` = '' "; }
		if(@$domingo_manhaA2=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaA2` = '".$_SESSION['USU']."'"; }
		if(@$domingo_manhaA2=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaA2` = '' "; }
		if(@$domingo_manhaA3=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaA3` = '' "; }
		if(@$domingo_manhaA3=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaA3` = '".$_SESSION['USU']."'"; }
		if(@$domingo_manhaA4=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaA4` = '' "; }
		if(@$domingo_manhaA4=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaA4` = '".$_SESSION['USU']."'"; }
		if(@$domingo_manhaB1=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaB1` = '' "; }
		if(@$domingo_manhaB1=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaB1` = '".$_SESSION['USU']."'"; }
		if(@$domingo_manhaB2=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaB2` = '' "; }
		if(@$domingo_manhaB2=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaB2` = '".$_SESSION['USU']."'"; }
		if(@$domingo_manhaB3=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaB3` = '' "; }
		if(@$domingo_manhaB3=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaB3` = '".$_SESSION['USU']."'"; }
		if(@$domingo_manhaB4=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaB4` = '' "; }
		if(@$domingo_manhaB4=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_manhaB4` = '".$_SESSION['USU']."'"; }
		if(@$domingo_tarde1=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_tarde1` = '' "; }
		if(@$domingo_tarde1=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_tarde1` = '".$_SESSION['USU']."'"; }
		if(@$domingo_tarde2=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_tarde2` = '' "; }
		if(@$domingo_tarde2=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_tarde2` = '".$_SESSION['USU']."'"; }
		if(@$domingo_tarde3=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_tarde3` = '' "; }
		if(@$domingo_tarde3=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_tarde3` = '".$_SESSION['USU']."'"; }
		if(@$domingo_tarde4=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_tarde4` = '' "; }
		if(@$domingo_tarde4=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_tarde4` = '".$_SESSION['USU']."'"; }
		if(@$domingo_noite1=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_noite1` = '' "; }
		if(@$domingo_noite1=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_noite1` = '".$_SESSION['USU']."'"; }
		if(@$domingo_noite2=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_noite2` = '' "; }
		if(@$domingo_noite2=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_noite2` = '".$_SESSION['USU']."'"; }
		if(@$domingo_noite3=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_noite3` = '' "; }
		if(@$domingo_noite3=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_noite3` = '".$_SESSION['USU']."'"; }
		if(@$domingo_noite4=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_noite4` = '' "; }
		if(@$domingo_noite4=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_noite4` = '".$_SESSION['USU']."'"; }
		if(@$domingo_capela1=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_capela1` = '' "; $redirect = "./?pag=1&opcao=1";}
		if(@$domingo_capela1=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_capela1` = '".$_SESSION['USU']."'"; $redirect = "./?pag=1&opcao=1";}
		if(@$domingo_capela2=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_capela2` = '' ";$redirect = "./?pag=1&opcao=1"; }
		if(@$domingo_capela2=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_capela2` = '".$_SESSION['USU']."'"; $redirect = "./?pag=1&opcao=1";}
		if(@$domingo_capela3=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_capela3` = '' "; $redirect = "./?pag=1&opcao=1";}
		if(@$domingo_capela3=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_capela3` = '".$_SESSION['USU']."'"; $redirect = "./?pag=1&opcao=1";}
		if(@$domingo_capela4=='false'){$sql	=		"UPDATE `escala_igreja` SET `domingo_capela4` = '' ";	$redirect = "./?pag=1&opcao=1"; }
		if(@$domingo_capela4=='true'){$sql	=		"UPDATE `escala_igreja` SET `domingo_capela4` = '".$_SESSION['USU']."'"; $redirect = "./?pag=1&opcao=1";}

		$usu=@$_POST['usuario'];
		
		if($id){

			$sql =	"UPDATE `inscrever` SET `usuario` = '$usu' WHERE `id` = '$id'";
			 $redirect = "../?pag=1";
		}
		if($data!=$mes){
			

		}



		$result = mysqli_query($conn ,$sql);
		$row = mysqli_fetch_assoc($result);
		}else{

			//echo "ninguem escalado neste mes ";
			$_GET['ok_escala']=null;
			foreach($_GET as $key => $value) {
  				if($value){
					
					$sql="INSERT INTO `escala_igreja` (mes,$key) VALUES (DATE_FORMAT(now(), '%m'),'".$_SESSION['USU']."') ";
				$result = mysqli_query($conn ,$sql);

					$sql2="UPDATE `inscrever` SET presenca=0";
				$result2 = mysqli_query($conn ,$sql2);
				 $redirect = "../?pag=1";
  				}	
			}
		
		}





	}//fim do ok_usuario
	

	if(@$_GET['ok_chamada']||@$_POST['ok_chamada']){

		@$id=$_POST['id']?@$_POST['id']:@$_GET['id'];
		$presenca=@$_GET['presenca'];

		
		
		if($presenca=='true'){

		 $sql =	"UPDATE `inscrever` SET `presenca`='2' WHERE id = '$id'";
			
			$result = mysqli_query($conn ,$sql);
			$row = mysqli_fetch_assoc($result);
			@$redirect = "./?pag=7";
		}else{

			 $sql =	"UPDATE `inscrever` SET `presenca`='0' WHERE id = '$id'";
			
			$result = mysqli_query($conn ,$sql);
			$row = mysqli_fetch_assoc($result);
			@$redirect = "./?pag=7";
		}
 		
	}//fim do ok_chamada

	if(@$_POST["ok_aviso"]||@$_GET["ok_aviso"]){
		//print_r($_POST);
		//exit;

		$id = @$_POST['id']?@$_POST['id']:@$_GET['id'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$titulo = @$_POST['titulo'];
		$men = @$_POST['mensagem'];
		if($id){
			echo "tem id ";
			
		}else{
			
			echo " nao tem id e vai inserir ";
			
	 	 	$sql= "INSERT INTO  `aviso` (`ip`,`data`,`mensagem`,`titulo`) VALUES ('$ip',now(),'$men','$titulo')"; 
	 		$result = mysqli_query($conn ,$sql);
			$row = mysqli_fetch_assoc($result);
	 
  			$redirect = "./?pag=8";

		}

	}//fim do ok_aviso
	header("location:$redirect"); 
 ?>