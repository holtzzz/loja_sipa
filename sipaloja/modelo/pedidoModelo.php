<?php


function salvarPedido ($idFormaPagamento, $idcliente, $idEndereco, $valorcupom, $produtosCarrinho) {
$sql = "INSERT INTO pedido (idFormaPagamento, idusuario, idendereco, valorcupom) VALUES ('$idFormaPagamento','$idusuario' '$idendereco', '$valorcupom')";
$resultado = mysqli_query ($cnx = conn(), $sql);
$idPedido = mysqli_insert_id($cnx);
foreach ($produtosCarrinho as $produtos) {
    $idProduto = $produtos["idproduto"];
    $quantidade = 1;
    
    $sql = "INSERT INTO pedido_produto (idProduto, idPedido, quantidade) VALUES ('$idProduto', '$idPedido', '$quantidade')";
    $resultado = mysqli_query ($cnx = conn(), $sql);
}
if(!$resultado) { die('Erro ao adicionar um pedido'. mysqli_error($cnx));}
return 'Pedido salvo <br> <a href="./sacola/index/" class="btn btn-primary">Voltar</a>';  
}
function pegarTodosPedidos (){
    $sql = "SELECT * FROM pedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedidos[] = $linha;
    }
    return $pedidos; 
}
function pegarPedidoPorId ($idPedido) {
    $sql = "SELECT * FROM pedido WHERE idPedido = $idPedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = mysqli_fetch_assoc($resultado);
    return $pedidos;
}
