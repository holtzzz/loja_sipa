<?php
    if (ehPOST()){
        foreach($errors as $erro){
            echo "$erro <br>";
        }
    }

?>

<h1> Categoria </h1>

<form action="" method="POST">
    Nome : <input type="text" name="nome" value="<?= @ $categoria['nome'] ?>"> <br><br>
    Descrição: <input type="text" name="descricao" value="<?= @ $categoria['descricao'] ?>"> <br> <br>
	<button type="submit">Enviar</button>
</form>
