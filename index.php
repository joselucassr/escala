<script type="text/javascript">
    function Msg(){
        alert("Você deslogou da sua conta!");
    }


</script>

<?php
    //Inicia a sessão do usuário para armazenar os dados dele
	session_start();	
	include('connect.php');
	//Variável para redirecionamento de páginas
    $pag=@$_GET['pag']?@$_GET['pag']:"erro"; //Operador ternário
    //Utilizado em "escala.php" para alternar entre a capela e a Matriz
    $opcao=@$_GET['opcao'];
    $hoje= date('Y-m-d');

	// $pag=@$_GET['pag']?$_GET['pag']:""; //DEBUGGER, TALVEZ, SLA?
    if(@$_SESSION['JVB']){
        echo "<a href='?pag=5'><button onclick='Msg();' class='btn btn-ligth btn-md' >SAIR</button></a>";
    }


 ?>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/site-demos.css">
        <link rel="stylesheet" href="css/style.css" >

        <style>
        .direita{
            margin-right: 10px;
            float:right;
        }
        </style>

        <script src="js/additional-methods.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.mask.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/bootstrap-notify.min.js"></script>
        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="/js/jquery.validate.min.js"></script>

        <!-- Máscara de dados -->
        <script type="text/javascript">
                $(document).ready(function(){
                    $('#CPF').mask('000.000.000-00');
                    $('#tel').mask('(00) 0 0000-0000');
                    $('#mat').mask('0.000.000');
                    $('#tomb').mask('00000000');
                });
        </script>

        <script>
                function confirmacao(tipo){
                    $.notify({
                            // options
                            message: '	<?php echo $alerta; ?> !'
                        },{
                            // settings
                            type: tipo
                        });
                }
        </script>

        <!-- "Para excluir caso não faça falta" <style type="text/css">

        </style>-->

        <title>Escala</title>

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.min.css" rel="stylesheet">
        <link href="bootstrap/js/bootstrap.js" >
        <link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="direita">
            <b><?php if (@$_SESSION['USU']) {
                    echo utf8_encode("BEM-VINDO(A): " . @$_SESSION['USU']);
                } ?></b>
        </div>
        <?php if ((@$pag != 2) && (@$pag != 3)) { ?>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

            <a class="navbar-brand" href="?pag=1">Escala</a>
                <a class="navbar-brand" href="?pag=6" >Escala capela</a>

           <?php  if (@$_SESSION['MASTER'] == 'true') { ?>
                
                <a class="navbar-brand" href="?pag=4">Tabela dos usuarios</a>
                <a class="navbar-brand" href="?pag=7">Chamada</a>


            <?php } ?>
            </div>
            </div>
            </nav>

        <?php } ?>

        <?php

        switch (@$pag) {
            case '1':
                include('escala.php');
                break;
            case '2':
                include('cadastro.php');
                break;
            case '3':
                include('login.php');
                break;
            case '4':
                include('tabela_cadastro.php');
                break;
            case '5':
                include('logoff.php');
                break;
            case '6':
                include('tabela_capela.php');
                break;
            case '7':
                include('chamada.php');
                break;
            case '8':
                include('postagem.php');
                break;
            default :
                include('layout.php');
                break;
        }
        ?>
    </body>
</html>

