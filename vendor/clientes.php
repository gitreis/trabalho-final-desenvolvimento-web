<?php

require_once './MontaPagina.php';
require_once './funcoes.php';
require_once './config.php';

if($_SESSION['logado']) {
  $sTitulo = 'Home';
  $sBody = '<div>Bem vindo ao mundo real.</div>';
  $oPagina = new MontaPagina();
  printf($oPagina->fMontaPagina($sTitulo, $CABECALHO, $sBody, $sFooter));
}else{
  header('Location: ../index.html');
}
