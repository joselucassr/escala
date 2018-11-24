<?php 
	
	@$id=$_GET['id'];

	if($id){
		$sql= "SELECT * FROM usuarios WHERE id=$id ";
	
		$result= mysqli_query($conn,$sql);
		$row =  mysqli_fetch_assoc($result);

			$usu = @$row['usuario'];
			$senha = @$row['senha'];
			$conf_senha = @$row['conf_senha'];
			$email = @$row['email'];
			$cpf = @$row['cpf'];

	}
?>

<?php 



?>
    <!-- Header -->
   <style type="text/css">

    

      #parallaxBar{
          height:50%;
          background-color:#004c82;
          background: url('img/ban.jpg') 50% 0 fixed;
          position: relative;   
      }

      #parallaxBar2{
          
          background-color:#004c82;
          background: url('img/ban3.jpg') 50% 0 fixed;
          position: relative;   
      }

      #parallaxBar3{
          
          background-color:#004c82;
          background: url('img/ban6.jpg') 50% 0 fixed;
          position: relative;   
      }


      .zoom {
         
        transition: transform .2s; /* Animation */
        margin: 0 auto;
      }

      .zoom:hover {
          transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
          -webkit-box-shadow: 0px 1px 15px -1px #000000; 
          box-shadow: 0px 1px 15px #000000;
      }

      .zoomtext {
         
        transition: transform .2s; /* Animation */
        
      }

      .zoomtext:hover {
          transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
          text-shadow: 0px 1px 9px rgba(0,0,0,0.26);
      }
  </style>

<div class="zoom"></div>



    </style>

  </head>

  <body>


    <!-- Navigation -->
    <nav id="page-top" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #011028;">
        <a class="navbar-brand" href="index.php" style="padding-left: 3%;">Portal Liturgia</a>
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link zoomtext" href="?pag=3">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link zoomtext" href="?pag=2">+ Cadastrar</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    

    <!-- banner principal -->
    <section id="parallaxBar" data-speed="6" data-type="background">
        <div class="container-fluid">

          <div class="mx-auto text-center" >
            <img  src="img/Matilha.png" class="zoomtext" style="padding-bottom: 7%; padding-top: 7%; width: 100%; max-width: 600px; ">
          </div>
       
        </div>
    </section>

<div id="cadastro">
        <h3 class="text-center text-black pt-5">Cadastro</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="cadastro-column" class="col-md-6">
                    <div id="cadastro-box" class="col-md-12">
						<form action="crud.php" method="POST" id="cadastro" >
							<div class="form-group">	
								<input type="text" name="usuario" id="usuario" value= "<?php echo @$usu ; ?>" class="form-control" placeholder="Nome" required>
								<br/>
							</div >
							<div class="form-group">	
								<input type="password" name="senha" id="senha"  placeholder="Senha" class="form-control" required>
								<br>
							</div>
							<div class="form-group">	
								<input type="password" name="conf_senha" id="conf_senha"  placeholder="Confirme a senha" class="form-control" required>
								<br>
							</div>
							<div class="form-group">	
								<input type="email" name="email" id="email" value="<?php echo @$email ; ?>" placeholder="Email" class="form-control" required >
								<br>
							</div>
							<div class="form-group">	
								<input type="text" name="cpf" id="CPF" value="<?php echo @$cpf ;?>" placeholder="CPF" class="form-control"  onkeyup="cpfCheck(this)" required>
                                <span id="cpfResponse"></span>
								<br>
							</div>
							<div class="form-group">	
								<input type="hidden" name="id" value="<?php echo @$id ; ?>" > 
							</div>
							<div class="form-group">	
								<input type="submit"   name="ok_cadastro" class="btn btn-warning btn-md" value="Cadastrar" >

							</div>	
                        </form>
                      
					</div>
                </div>
            </div>
        </div>
</div>

<script type="text/javascript">

    var senha = document.getElementById("senha")
  , conf_senha = document.getElementById("conf_senha");

    function validatePassword(){
      if(senha.value != conf_senha.value) {
        conf_senha.setCustomValidity("Senhas diferentes!");
      } else {
        conf_senha.setCustomValidity('');
      }
    }

    senha.onchange = validatePassword;
    conf_senha.onkeyup = validatePassword;


    function is_cpf (c) {

      if((c = c.replace(/[^\d]/g,"")).length != 11)
        return false;

      if (c == "00000000000")
        return false;

      var r;
      var s = 0;

      for (i=1; i<=9; i++)
        s = s + parseInt(c[i-1]) * (11 - i);

      r = (s * 10) % 11;

      if ((r == 10) || (r == 11))
        r = 0;

      if (r != parseInt(c[9]))
        return false;

      s = 0;

      for (i = 1; i <= 10; i++)
        s = s + parseInt(c[i-1]) * (12 - i);

      r = (s * 10) % 11;

      if ((r == 10) || (r == 11))
        r = 0;

      if (r != parseInt(c[10]))
        return false;

      return true;
    }
    cpfCheck = function (el) {
        document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">válido</span>' : '<span style="color:red">inválido</span>';
        if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
    }

    }
</script>
