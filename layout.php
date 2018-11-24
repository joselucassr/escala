
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
        margin: 0 auto;
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

    <!-- Bem vindo -->
    <section id="parallaxBar2" data-speed="6" data-type="background">
        <div class="container-fluid">
          <div class="row align-items-center ">
            <div class="col-12 mx-auto text-center" style="margin-top: 3%">   
               
            </div>
          </div>

          <section class="text-light ">
            <div class="container"id="Marketing">
              <div class="row ">
                
                <div class="col-lg-12 order-lg-1" >
                  <div class="p-5">
                    <h2 class="display-4 col-lg-12">O que é o "Portal da Liturgia"?</h2>
                    <p>É uma ferramenta na qual facilita o processo de seleção de quem irá realizar a leitura da liturgia nos determinados dias, dessa forma, o administrador pode ter um maior controle do que está acontecendo dentro da nossa plataforma, assim como na igreja. O cadastro só será possível caso o usuário tenha a chave de acesso, que será distribuida durante as reuniões liturgicas.</p>
                    <div class="col-lg-6 mx-auto">
                      <a href="?pag=2" class="btn btn-primary col-12 zoomtext mt-5"><i class="fas fa-check-square mr-1"></i>  Cadastre-se Agora</a>
                    </div>
                    
                  </div>
                </div>
                <div class="col-lg-4 order-lg-2 mx-auto">
                  <div class="p-5 ">
                    <img class="img-fluid zoomtext" src="img/05.png" style="max-width: 300px; width: 100%;">
                  </div>
                </div>
              </div>
            </div>
          </section>

       
        </div>
    </section> 

    <section id="marketing">
      <div class="container">
        <div class="row align-items-center ">
          <div class="col-12 mx-auto text-left mt-5">   
            <h1 class="text-dark display-4 ">> Encontre-nos</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Bolas redondadas com fotos e informações -->  
    <section>
      <div class="container"id="Marketing">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122729.67759421712!2d-47.98639408138575!3d-15.997764804866256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0135f5a420638d5!2sPar%C3%B3quia+S%C3%A3o+Francisco+De+Assis!5e0!3m2!1spt-BR!2sbr!4v1542740650404" width="100%" style="max-width:600px; " height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6 order-lg-1" >
            <div class="p-5">
              <h2 class="display-4"><i class="fas fa-location-arrow mr-2"></i> Horários de Missa</h2>
              <p>Oferecemos as melhores estratégias para o seu négocio, selecionamos os nichos, defeinimos aonde iremos atacar e finalmente executamos o plano. Marketing é a alma de qualquer empresa, e nós, especializados no assunto, faremos com que sua empresa seja mais visada no mercado.</p>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
            
