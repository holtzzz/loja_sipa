<?php

require_once "modelo/categoriaModelo.php";

/** admin */
function adicionar(){
	
	if (ehPOST()) {
          
            $nome = $_POST["nome"];		
            $desc = $_POST["descricao"];

    /*VALIDAÇÕES*/        
            
        $errors = array();
            
          if(strlen(trim($nome)) == 0){
            $errors[] = "Insira um nome válido!! <br>";
        }
       
         if(strlen(trim($desc)) == 0){
            $errors[] = "Insira uma descrição válida!! <br>";
        }
      
        if (count($errors) > 0){
            $dados = array();
            $dados["errors"] = $errors;
            exibir("categoria/formulario", $dados);
        } else {     
         $msg = adicionarCategoria($nome, $desc);
		echo $msg;
        }             

    } else {
	exibir("categoria/formulario");
    }
		
} 

/** admin */
	function listarCategorias(){
		$dados = array();
		$dados["categorias"] = pegarTodosCategorias();
		exibir("categoria/listar", $dados);

	}
        
        /* VER A CATEGORIA */
/** admin */        
        function ver($id){
            $dados["categoria"] = pegarCategoriaPorId($id);
            exibir("categoria/visualizar", $dados);
        }

        
        /* DELETAR CATEGORIA */
/** admin */        
        function deletar($id){
            $msg = deletarCategoria($id);
            redirecionar("categoria/listarCategorias");
        }

         /* EDITAR CATEGORIA */
 /** admin */       
        function editar($id){
            
            if (ehPost()){    
                $nome = $_POST["nome"];		
                $desc = $_POST["descricao"];

                editarCategoria($id, $nome, $desc);
                redirecionar("categoria/listarCategorias");
            }else{
                $dados["categoria"] = pegarCategoriaPorId($id);
                exibir("categoria/formulario", $dados);
            }
        }