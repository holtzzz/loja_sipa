<?php

require_once "modelo/enderecoModelo.php";


/** anon */
function adicionar($idcliente){
	
	if (ehPOST()) {
           
            $logra = $_POST["logra"];
            $comp = $_POST["comp"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $cep = $_POST["cep"];
            
            
	$errors = array();
	
        if (strlen(trim($logra)) == 0) {
            $errors[] = "Informe um logradouro válido";
	}

        if (count($errors) > 0){
            $dados = array();
            $dados["errors"] = $errors;
            exibir("endereco/formulario", $dados);
        } else {     
            $msg = adicionarEndereco($idcliente, $logra, $comp, $bairro, $cidade, $cep);
		echo $msg;
        }

    } else {
		exibir("endereco/formulario");
    }
		
} 

	/* chama a func "pegarTodosEnderecos" para passar os dados para a func "exibir" */

/** admin */
	function listarEndereco(){
		$dados = array();
		$dados["enderecos"] = pegarTodosEderecos();
		exibir("endereco/listar", $dados);

	}
        
        /* VER O endereco */
        
 /** anon */       
        function ver($id){
            $dados["endereco"] = pegarEnderecoPorId($id);
            exibir("endereco/visualizar", $dados);
        }

        
        /* DElETAR endereco */
        
 /** admin */       
        function deletar($id){
            $msg = deletarEndereco($id);
            redirecionar("cliente/listarClientes");
        }

        
        /* EDITAR endereco */
 /** anon */       
        function editar($id){
            
            if (ehPost()){    
                
            $logra = $_POST["logra"];
            $comp = $_POST["comp"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $cep = $_POST["cep"];

                editarEndereco($id,$logra, $comp, $bairro, $cidade, $cep);
                redirecionar("cliente/listarClientes");
            }else{
                $dados["endereco"] = pegarEnderecoPorId($id);
                exibir("endereco/formulario", $dados);
                
            }
        }


?>