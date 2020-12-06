<?php

  require_once 'conexao.php';

  session_start();
  if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $oPdo   = fConexao();
    $sStmt  = $oPdo->prepare('SELECT NOME, LOGIN, SENHA FROM USUARIO WHERE LOGIN= :login AND SENHA= :senha');
    $sSenha = MD5($_POST['senha']);
    $sStmt->bindParam(':login' ,$_POST['usuario']);
    $sStmt->bindParam(':senha',$sSenha);
    $sStmt->execute();
    $oQuery = $sStmt->fetch(PDO::FETCH_ASSOC);

    if(($oQuery['LOGIN'] == $_POST['usuario']) && ($oQuery['SENHA'] == $sSenha)) {
      $_SESSION['logado'] = true;
      $_SESSION['user'] = $oQuery['NOME'];
      header('Location: ./home.php');
    }else {
      $_SESSION['erro'] = true;
      header('Location: ../index.html');
    }
  }
