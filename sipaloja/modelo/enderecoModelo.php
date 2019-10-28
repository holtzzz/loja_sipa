<?php

function adicionarEndereco($idcliente, $logra, $comp, $bairro, $cidade, $cep){
     $sql = "INSERT INTO endereco(idcliente, logra, comp, bairro, cidade, cep) VALUES ('$idcliente', '$logra', '$comp', '$bairro', '$cidade', '$cep')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
       die('Erro ao adicionar endereco'. mysqli_error($cnx));
    }
  
    return 'Endereco adicionado com sucesso! <br><br> <a href="./adicionar" class="btn btn-primary">Voltar</a>';
}

function pegarTodosEderecos($id){
		$sql = "SELECT * FROM endereco WHERE idcliente = $id";
		$resultado = mysqli_query(conn(), $sql);
		$enderecos = array();
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$enderecos[] = $linha;
		}

		return $enderecos;
	}
      
     /* VER endereco PELO ID */   
        
        function pegarEnderecoPorId($id){
            $sql = "SELECT * FROM endereco WHERE idEndereco = $id";
            $resul = mysqli_query(conn(), $sql);
            $endereco = mysqli_fetch_assoc($resul);
            return $endereco;
        }
        
     /* DELETAR endereco*/   
        function deletarEndereco($id){
            $sql = "DELETE FROM endereco WHERE idEndereco= $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao deletar endereco' . mysqli_error($cnx));
            }
            return 'Endereco deletado com secesso';
        }

         /* EDITAR endereco */
      
            function editarEndereco($id, $logra, $comp, $bairro, $cidade, $cep){
            $sql = "UPDATE endereco SET logra= '$logra', comp = '$comp', bairro= '$bairro', cidade = '$cidade', cep = '$cep' WHERE idEndereco = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao editar endereco' . mysqli_error($cnx));
            }
            return 'Endereco editado com secesso';
        }


        

