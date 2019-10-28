<h2>Listar Formas de Pagamento</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID </th>
            <th>Formas de Pagamento</th>  
            
            <th>VER</th> 
            <th>EDITAR</th>
            <th>DELETAR</th>
        </tr>
    </thead>
    
    <?php foreach ($pagamentos as $pagamento): ?>
    <tr>
        <td><?=$pagamento['idFormaPagamento']?></td>

        <td><?=$pagamento['descricao']?></td>


        <td><a href="./pagamento/ver/<?=$pagamento['idFormaPagamento']?>" class="btn btn-secondary">VER</a></td>

        <td><a href="./pagamento/editar/<?=$pagamento['idFormaPagamento']?>" class="btn btn-info">EDITAR</a></td>

        <td><a href="./pagamento/deletar/<?=$pagamento['idFormaPagamento']?>" class="btn btn-danger">DELETAR</a></td>
    </tr>

    <?php endforeach; ?>
</table>
 

<br><br> 
<a href="./pagamento/adicionar" class="btn btn-primary">Adicionar nova Forma de Pagamento</a>

