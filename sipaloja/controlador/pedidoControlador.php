<?php


function salvar () {
    if (ehPost ()) {
        $idFormaPagamento = $_POST["idFormaPagamento"];
        $idcliente = $_SESSION["idCliente"];
        $idEndereco = $_POST["idEndereco"];
        $valorcupom = $_POST["valorcupom"];
        $produtosCarrinho = $_SESSION["carrinho"];    
        
    $msg = salvarPedido($idFormaPagamento, $idcliente, $idEndereco, $valorcupom, $produtosCarrinho);
    echo $msg;
    
    }else{
        
    }
    exibir("pedidos/listar");
    
}


function listar () {
    $dados = array ();
    $dados["pedidos"] = pegarTodosPedidos();
    exibir ("pedidos/listar", $dados);
}

function ver ($idPedido) {
    $dados["pedidos"] = pegarPedidoPorId($idPedido);
    exibir ("pedidos/visualizar" , $dados);
}


