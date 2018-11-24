<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">MATILHA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <!-- Cadastrar -->
          <ul class="navbar-nav">
            <li class="nav-item dropdown ">
              <a href="dashboard.php" class="nav-link">Início</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Cadastrar
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../cadastrar_servico.php">Serviço</a>
                <a class="dropdown-item" href="../cadastrar_contrato.php">Contrato</a>
              </div>
            </li>
          </ul>

          <!-- Listar -->
          <ul class="navbar-nav">
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Listar
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../listar_cliente.php">Cliente</a>
                <a class="dropdown-item" href="../listar_servico.php">Serviço</a>
                <a class="dropdown-item" href="../listar_contrato.php">Contrato</a>
              </div>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li>
            	<h6 class="nav-link zoomtext">Usuário:  <i><?php echo $_SESSION['admin']; ?></i></h6>
            </li>
            <li class="nav-item">
              <a class="nav-link zoomtext" href="acoes/finalizar_sessao.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>