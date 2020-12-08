<?php

require_once './MontaPagina.php';
require_once './funcoes.php';
require_once './config.php';
require_once './conexao.php';

if($_SESSION['logado']) {
  $sTitulo = 'Produtos';
  $oPagina = new MontaPagina();
  printf($oPagina->fMontaPagina($sTitulo, $CABECALHO, $sBody, $sFooter));
}else{
  header('Location: ../index.html');
}

$sTable = '
  <div class="viewport">
    <table class="table mt-5">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Produto</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Preço Unitário</th>
          <th scope="col">Estoque</th>
          <th scope="col">Unidades Em Ordem</th>
          <th scope="col">Nível de reposição</th>
          <th scope="col">Descontinuado</th>
        </tr>
      </thead>
      <tbody>
        %s
      </tbody>
    </table>
  </div>
  ';

  function insert($iId, $sProduto, $iQuantidade, $nValor, $sEtoque, $iUnidadeOrdem, $sNivelReposicao, $sDescontinuado){
    $oPdo = fConexao();
    $sStmt  = $oPdo->prepare(sprintf('
      // INSERT INTO produtos (IDProduto:produto,NomeProduto:nome, QuantidadePorUnidade:unidade, PrecoUnitario:preco, UnidadesEmEstoque:estoque, UnidadesEmOrdem:ordem, NivelDeReposicao:nivel, Descontinuado:descontinuado)
      VALUES (%s, %s, %s, %s, %s, %s, %s)
      ')
         , $iId
         , $sProduto
         , $iQuantidade
         , $nValor
         , $sEtoque
         , $iUnidadeOrdem
         , $sNivelReposicao
         , $sDescontinuado
  );

      $sStmt->bindParam(':produto',$iId);
      $sStmt->bindParam(':nome',$sProduto);
      $sStmt->bindParam(':unidade',$iQuantidade);
      $sStmt->bindParam(':preco',$nValor);
      $sStmt->bindParam(':estoque',$sEtoque);
      $sStmt->bindParam(':ordem',$iUnidadeOrdem);
      $sStmt->bindParam(':nivel',$sNivelReposicao);
      $sStmt->bindParam('descontinuado',$sDescontinuado);
      $sStmt->execute();
      $oQuery = $sStmt->fetch(PDO::FETCH_ASSOC);
  }

  $sTagTbody = '
    <tr>

    </tr>
  ';



//   $sTable = sprintf();

//   <tr>
//   <th scope="row">1</th>
//   <td>Mark</td>
//   <td>Otto</td>
//   <td>@mdo</td>
// </tr>