<?php

	function adicionarCliente($nome, $senha,$email, $tipo, $cpf, $sexo, $nascimento){
		$sql = "INSERT INTO cliente ( nome, 
                                              senha,
                                              email, 
                                              tipoCliente,
                                              cpf, 
					      sexo, 
                                              nascimento)
				VALUES('$nome', 
					'$senha', 
					'$email', 
                                        '$tipo',    
					'$cpf', 
					'$sexo', 
					'$nascimento')";

		$resultado = mysqli_query($cnx = conn(), $sql);

		if(!$resultado) {

			die('erro ao cadastrar cliente <br>' .mysqli_error($cnx));
		}

		return 'Cadastro realizado com sucesso! <br><br> <a href="./adicionar" class="btn btn-primary">Voltar</a>';
	}



	function pegarTodosClientes(){
		$sql = "SELECT * FROM cliente";
		$resultado = mysqli_query(conn(), $sql);
		$clientes = array();
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$clientes[] = $linha;
		}

		return $clientes;
	}
      
     /* VER CLIENTE PELO ID */   
        
        function pegarClientePorId($id){
            $sql = "SELECT * FROM cliente WHERE idcliente = $id";
            $resul = mysqli_query(conn(), $sql);
            $cliente = mysqli_fetch_assoc($resul);
            return $cliente;
        }
        
     /* DELETAR CLIENTE */   
        function deletarCliente($id){
            $sql = "DELETE FROM cliente WHERE idcliente = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao deletar cliente' . mysqli_error($cnx));
            }
            return 'Cliente deletado com secesso';
        }

    
        /* EDITAR CLIENTE */
        
         function editarCliente($id, $nome, $senha, $email, $sexo, $cpf, $nascimento){
            $sql = "UPDATE cliente SET nome = '$nome', senha = '$senha', email = '$email', sexo = '$sexo', cpf = '$cpf', nascimento = '$nascimento'  WHERE idcliente = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao editar cliente' . mysqli_error($cnx));
            }
            return 'Cliente editado com secesso';
        }

function pegarClientePorEmailSenha($email, $senha) {
    $sql = "SELECT * FROM cliente WHERE email= '$email' and senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}
















?>

