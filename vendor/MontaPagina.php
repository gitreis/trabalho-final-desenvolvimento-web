<?php

class MontaPagina {

  private $sTitulo;
  private $sCabecalho;
  private $sBody;
  private $sFooter;

  public function setTitulo ($sTitulo) {
    $this->sTitulo = $sTitulo;
  }
  public function setCabecalho ($sCabecalho) {
    $this->sCabecalho = $sCabecalho ;
  }
  public function setBody ($sBody) {
    $this->sBody = $sBody;
  }
  public function setFooter ($sFooter) {
    $this->sFooter = $sFooter;
  }
  public function getTitulo () {
    return $this->sTitulo;
  }
  public function getCabecalho () {
    return $this->sCabecalho;
  }
  public function getBody () {
    return $this->sBody;
  }
  public function getFooter () {
    return $this->sFooter;
  }

  function fMontaPagina($sTitulo, $sCabecalho, $sBody, $sFooter) {
      $sTagPagina = '
        <!doctype html>
        <html lang="pt-br">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="vendor/css/main.css">
            <title>%s</title>
          </head>
          <body  class="viewport colo">
            %s
            %s
            %s
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <script src="./vendor/js/main.js"></script>
          </body>
        </html>
      ';
      $sTagPagina = sprintf(
          $sTagPagina
        , $sTitulo
        , $sCabecalho
        , $sBody
        , $sFooter
      );
      return $sTagPagina;
    }
}
