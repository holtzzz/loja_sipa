<h2>Listar categorias</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID </th>
            <th>NOME</th> 
            <th>DESCRIÇÃO </th> 
   
            <th>VER</th> 
            <th>EDITAR</th>
            <th>DELETAR</th>
        </tr>
    </thead>
    
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['idCategoria']?></td>

        <td><?=$categoria['nome']?></td>

        <td><?=$categoria['descricao']?></td>


        <td><a href="./categoria/ver/<?=$categoria['idCategoria']?>" class="btn btn-secondary">VER</a></td>

        <td><a href="./categoria/editar/<?=$categoria['idCategoria']?>" class="btn btn-info">EDITAR</a></td>

        <td><a href="./categoria/deletar/<?=$categoria['idCategoria']?>" class="btn btn-danger">DELETAR</a></td>
         </tr>

    <?php endforeach; ?>
</table>
 

<br><br> 
<a href="./categoria/adicionar" class="btn btn-primary">Adicionar nova categoria</a>

