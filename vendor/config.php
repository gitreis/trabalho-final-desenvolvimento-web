<?php
  global $CABECALHO;
  global $FOOTER;
  $CABECALHO = new stdClass();
  $FOOTER = new stdClass();

  $sCabecalho = '
    <nav class=" bg-dark d-flex align-content-center ">
      <a class="navbar-brand col-md-1 pl-5" href="./home.php">Home</a>
      <a class="navbar-brand col-md-1 " href="./produtos.php">Produtos</a>
      <a class="navbar-brand col-md-1 " href="./fornecedores.php">Fornecedores</a>
      <a class="navbar-brand col-md-1 " href="./clientes.php">Clientes</a>
      <a class="navbar-brand col-md-1 " href="./funcionarios.php">Funcionários</a>
      <div class="d-flex ml-auto col-md-4"><a class="navbar-brand text-danger ml-auto" href="./logout.php">Sair</a></div>
      <div class="navbar-brand d-flex ml-auto">
        <span class="text-light">Bem vindo, %s!</span>
    </nav>
  ';
    $sCabecalho = sprintf($sCabecalho, $_SESSION['user']);
    $CABECALHO = $sCabecalho;
    $FOOTER = '
        <footer class="bg-dark altura-footer">
          <p> Todos os direitos reservados</p>
        </footer>
    ';

