<?php
    if (ehPOST()){
        foreach($errors as $erro){
            echo "$erro <br>";
        }
    }

?>

<h1> Cupom de desconto </h1>

<form action="" method="POST">
   Insira seu cupom: <input type="text" name="nome" value="<?= @ $cupom['Nome'] ?>"> <br> <br>
	<button type="submit">Enviar</button>
</form>
