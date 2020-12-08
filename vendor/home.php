<?php

  require_once './MontaPagina.php';
  require_once './funcoes.php';
  require_once './config.php';

  $sBody = '
    <div class="body-home">
      <h1>Seja Muito Bem Vindo!<h/1>
    <div>

  ';

  if($_SESSION['logado']) {
    $sTitulo = 'Home';
    $oPagina = new MontaPagina();
    printf($oPagina->fMontaPagina($sTitulo, $CABECALHO, $sBody, $FOOTER));
  }else{
    header('Location: ../index.html');
  }

