
<?php
    if (ehPOST()){
        foreach($errors as $erro){
            echo "$erro <br>";
        }
    }

?>

<h1> ENDEREÇO: </h1>

<form action="" method="POST">
    Logradouro: <input type="text" name="logra" value="<?=@$endereco['Logra'] ?>"> <br><br>
    Complemeto: <input type="text" name="comp" value="<?=@$endereco['Comp'] ?>"> <br> <br>
    Bairro: <input type="text" name="bairro" value="<?=@$endereco['Bairro'] ?>"> <br><br>
    Cidade: <input type="text" name="cidade" value="<?=@$endereco['Cidade'] ?>"> <br> <br>
    CEP: <input type="number" name="cep" value="<?=@$endereco['Cep'] ?>"> <br><br>
	<button type="submit">Enviar</button>
</form>
