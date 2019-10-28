<?php

require_once "modelo/cupomModelo.php";

/** admin */
function adicionar(){
	
	if (ehPOST()) {
          
            $nome = $_POST["nome"];

    /*VALIDAÇÕES*/        
            
        $errors = array();
            
          if(strlen(trim($nome)) == 0){
            $errors[] = "Insira um cupom válido!! <br>";
        }
      
        if (count($errors) > 0){
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cupom/formulario", $dados);
        } else {     
         $msg = adicionarCupom($nome);
		echo $msg;
        }             

    } else {
	exibir("cupom/formulario");
    }
		
} 

/** admin */
	function listarCupons(){
		$dados = array();
		$dados["cupons"] = pegarTodosCupons();
		exibir("cupom/listar", $dados);

	}
        
        /* VER A CUPONS */
        
 /** admin */       
        function ver($id){
            $dados["cupom"] = pegarCupomPorId($id);
            exibir("cupom/visualizar", $dados);
        }

        
        /* DELETAR CUPOM */

/** admin */    
        function deletar($id){
            $msg = deletarCupom($id);
            redirecionar("cupom/listarCupons");
        }

         /* EDITAR CUPOM */
        
 /** admin */       
        function editar($id){
            
            if (ehPost()){    
                $nome = $_POST["nome"];

                editarCupom($id, $nome);
                redirecionar("cupom/listarCupons");
            }else{
                $dados["cupom"] = pegarCupomPorId($id);
                exibir("cupom/formulario", $dados);
            }
        }