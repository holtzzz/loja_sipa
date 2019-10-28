<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

/** admin */
function adicionar() {
    if (ehPOST()) {
        $nome_produto = $_POST ["Nome"];
        $desc = $_POST ["Descricao"];
        $preco = $_POST ["Preco"];
        $tamanho = $_POST ["Tamanho"];
        $categoria = $_POST ["Categoria"];
        $estoquemin = $_POST ["Estoquemin"];
        $estoquemax = $_POST ["Estoquemax"];


        $errors = array();

        if (strlen(trim($nome_produto)) == 0) {
            $errors[] = "Insira um nome válido!! <br>";
        }

        if (strlen(trim($desc)) == 0) {
            $errors[] = "Insira uma descrição válida!! <br>";
        }

        if (strlen(trim($preco)) == 0) {
            $errors[] = "Insira um preço válido!! <br>";
        }

        $img = $_FILES ["img"];
        $destino = './publico/img_sipa/produtos' . $_FILES['img']['name'];
 $img_tmp = $_FILES['img']['tmp_name'];
 move_uploaded_file( $img_tmp, $destino );

        
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            $dados["categorias"] = pegarTodosCategorias();
            exibir("produto/formularioProd", $dados);
        } else {
            $msg = adicionarProduto($nome_produto, $desc, $preco, $tamanho, $destino, $categoria, $estoquemin, $estoquemax);
            echo $msg;
        }
    } else {
        $dados = array();
        $dados["categorias"] = pegarTodosCategorias();
        exibir("produto/formularioProd",$dados);
    }
}

/* chama a func "pegarTodosProduto" para passar os dados para a func "exibir" */

/** anon */
function listarProdutos() {
    $dados = array();
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

/* VER O PRODUTO */

/** admin */
function ver($id) {
    $dados["produto"] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

/* DELETAR PRODUTO */

/** admin */
function deletar($id) {
    $msg = deletarProduto($id);
    redirecionar("produto/listarProdutos");
}

/* EDITAR PRODUTO */

/** admin */
function editar($id) {

    if (ehPost()) {
        $nome_produto = $_POST ["Nome"];
        $desc = $_POST ["Descricao"];
        $preco = $_POST ["Preco"];
        $tamanho = $_POST ["Tamanho"];
        $img = $_POST ["img"];
        $categoria = $_POST ["Categoria"];
        $estoquemin = $_POST ["Estoquemin"];
        $estoquemax = $_POST ["Estoquemax"];

        editarProduto($id, $nome_produto, $desc, $preco, $tamanho, $destino, $categoria, $estoquemin, $estoquemax);
        redirecionar("produto/listarProdutos");
    } else {
        $dados["produto"] = pegarProdutoPorId($id);
        $dados["categorias"] = pegarTodosCategorias();
        exibir("produto/formularioProd", $dados);
    }
}



/** anon */
function buscar(){
	if (ehpost()){
            $busca = $_POST["busca"];
            $produto = array();
            $dados["produtos"] = buscarProduto($busca);
            exibir("produto/listar", $dados);
		
	}
}

?>


