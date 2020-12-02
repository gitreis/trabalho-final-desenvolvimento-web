<?php

  require_once 'conexao.php';

  if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $oPdo   = fConexao();
    $sStmt  = $oPdo->prepare('SELECT LOGIN, SENHA FROM USUARIO WHERE LOGIN= :login AND SENHA= :senha');
    $sStmt->bindParam(':login' ,$_POST['usuario']);
    $sStmt->bindParam(':senha', $_POST['senha']);
    $sStmt->execute();
    $oQuery = $sStmt->fetch(PDO::FETCH_ASSOC);

    if(($oQuery['LOGIN'] == $_POST['usuario']) && ($oQuery['SENHA'] == $_POST['senha'])) {
      echo 'ok';
      $_SESSION['logado'] = true;
      header('Location: ./home.php');

    }else {
      echo 'não ok';
      $_SESSION['erro'] = true;
      header('Location: ../index.html');
    }


  }