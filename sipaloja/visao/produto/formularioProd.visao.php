<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>

<h1> Cadastro dos Produtos: </h1>

<form action="" method="POST" enctype="multipart/form-data">
    <input placeholder="Nome do Produto" type="text" name="Nome" value="<?= @ $produto['Nome'] ?>"> <br><br>
 
    <input placeholder="Descrição" type="text" name="Descricao" value="<?= @ $produto['Preco'] ?>"> <br><br>

    <input placeholder="Preço" type="text" name="Preco" value="<?= @ $produto['Descricao'] ?>"> <br><br>

    <input placeholder="Tamanho" type="text" name="Tamanho" value="<?= @ $produto['Tamanho'] ?>"> <br>
    
    <input placeholder="Imagem" type="file" name="img" value="<?= @ $produto['img'] ?>"> <br>

    <select name="Categoria" style="padding: 10px 52px;">
        <?php foreach ($categorias as $categoria):?>
        <option value="<?=$categoria["idCategoria"]?>"><?=$categoria["nome"]?></option>
        <?php endforeach;?>
    </select>
    
    
    
    <br><br>
    <input placeholder="Estoque Mínimo" type="number" name="Estoquemin" value="<?= @ $produto['Estoquemin'] ?>"> <br><br>

    <input placeholder="Estoque Máximo" type="number" name="Estoquemax" value="<?= @ $produto['Estoquemax'] ?>"> <br><br>

    <input type="submit" name="Enviar">
</form>

<!--
<input placeholder="Categoria" type="text" name="categoria" value="<?= @ $produto['categoria'] ?>" <br><br>
    
    <h4>Sexo: </h4>
	<input type="radio" name="sexo" value="F"> Feminino
	<input type="radio" name="sexo" value="M"> Masculino
<br><br>

  -->
  