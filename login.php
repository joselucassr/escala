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

    

    <!-- Banner principal -->
    <section id="parallaxBar" data-speed="6" data-type="background">
        <div class="container-fluid">

          <div class="mx-auto text-center" >
            <img  src="img/Matilha.png" class="zoomtext" style="padding-bottom: 7%; padding-top: 7%; width: 100%; max-width: 600px; ">
          </div>
       
        </div>
    </section>

    

 <div id="login">
        <h3 class="text-center text-black pt-5">Faça login para acessar o portal</h3>
        <div class="container">
          <?php
         
          if(@$_SESSION['log']) {
            echo $_SESSION['log'];
            session_destroy();
          }

        ?>
        </div>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form action="crud.php" method="POST">
                            <h3 class="text-center text-dark">Login</h3>
                            <div class="form-group zoomtext">
                                <label for="email" class="text-dark">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group zoomtext">
                                <label for="password" class="text-dark">Senha:</label><br>
                                <input type="password" name="senha" id="password" class="form-control" required>
                            </div>

                            <div class="row">
                                <div class="form-group col-8">
                                    <input type="submit" name="ok_login" class="btn btn-success btn-md col-12 zoomtext" value="Login">
                                </div>

                                <div id="register-link" class="text-right col-4">
                                    <button class="btn btn-dark btn-md zoomtext" > <a href="./?pag=2" class="text-light col-12">Cadastre-se</a></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
