<?php

function adicionarCategoria($nome, $desc){
     $sql = "INSERT INTO categoria(idCategoria, nome, descricao) VALUES ( NULL , '$nome','$desc')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
       die('Erro ao adicionar categoria'. mysqli_error($cnx));
    }
  
    return 'Categoria adicionada com sucesso! <br><br> <a href="./adicionar" class="btn btn-primary">Voltar</a>';
}

function pegarTodosCategorias(){
		$sql = "SELECT * FROM categoria";
		$resultado = mysqli_query(conn(), $sql);
		$categorias = array();
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$categorias[] = $linha;
		}

		return $categorias;
	}
      
     /* VER CATEGORIA PELO ID */   
        
        function pegarCategoriaPorId($id){
            $sql = "SELECT * FROM categoria WHERE idcategoria = $id";
            $resul = mysqli_query(conn(), $sql);
            $categoria = mysqli_fetch_assoc($resul);
            return $categoria;
        }
        
     /* DELETAR CATEGORIA */   
        function deletarCategoria($id){
            $sql = "DELETE FROM categoria WHERE idcategoria= $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao deletar categoria' . mysqli_error($cnx));
            }
            return 'Categoria deletada com secesso';
        }

         /* EDITAR CATEGORIA */
      
            function editarCategoria($id, $nome, $desc){
            $sql = "UPDATE categoria SET nome = '$nome', descricao = '$desc' WHERE idcategoria = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao editar categoria' . mysqli_error($cnx));
            }
            return 'Categoria editado com secesso';
        }


        
        