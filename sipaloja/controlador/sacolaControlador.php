<?php

require_once 'modelo/produtoModelo.php';


/** anon */
    function adicionar($id) {
        if(isset($_SESSION["carrinho"])) {
            $produtos = $_SESSION["carrinho"]; //peguei
        } else {
            $produtos = array();
        }

        $produtos[] = $id;
        $_SESSION["carrinho"] = $produtos;
        
        redirecionar("sacola/listar");
    }
    
    function remover(){
        unset($_SESSION["carrinho"]);
    }


    function listar(){
        if(isset($_SESSION["carrinho"])) {
         for ($i=0; $i < count($_SESSION["carrinho"]); $i++){
           $produtos[] = pegarProdutoPorId($_SESSION["carrinho"][$i]);
          
         } 
        } else {
           echo "Não existe sessao carrinho!";
           echo "Carrinho vazio!";
        }
        
    
           $dados = array();
           $dados["produtos"] = $produtos;
           exibir("sacola/listar", $dados);
    
    }
