<?php

$CABECALHO = new stdClass();
$sCabecalho='
    <nav class=" bg-dark d-flex align-content-center ">
      <a class="navbar-brand col-md-1 pl-5" href="#">Home</a>
      <a class="navbar-brand col-md-1 " href="#">Produtos</a>
      <a class="navbar-brand col-md-1 " href="#">Fornecedores</a>
      <a class="navbar-brand col-md-1 " href="#">Clientes</a>
      <a class="navbar-brand col-md-1 " href="#">Funcionários</a>
      <div class="d-flex ml-auto col-md-4"><a class="navbar-brand text-danger ml-auto" href="./logout.php">Sair</a></div>
      <div class="navbar-brand d-flex ml-auto">
        <span class="text-light">Bem vindo, %s!</span>
    </nav>
  ';
  $sCabecalho = sprintf($sCabecalho, $_SESSION['user']);
  $CABECALHO = $sCabecalho;

