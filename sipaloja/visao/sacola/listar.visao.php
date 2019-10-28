<h1> CARRINHO </h1>
<table class="table" border="1">
    <thead>
        <tr>
            <th>Nome </th>
            <th>Preço </th>
        </tr>
    </thead>
    
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['Nome']?></td>
        
        <td><?=$produto['Preco']?></td>
        
        <td> <a href="./sacola/remover/<?=$produto['idProduto']?>"> DELETAR </a>
    </tr>

    <?php endforeach; ?>
</table>
 

<br><br>
