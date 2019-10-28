<h2>Listar cupons</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID </th>
            <th>CUPOM</th>  
   
            <th>VER</th> 
            <th>EDITAR</th>
            <th>DELETAR</th>
        </tr>
    </thead>
    
    <?php foreach ($cupons as $cupom): ?>
    <tr>
        <td><?=$cupom['idCupom']?></td>

        <td><?=$cupom['Nome']?></td>


        <td><a href="./cupom/ver/<?=$cupom['idCupom']?>" class="btn btn-secondary">VER</a></td>

        <td><a href="./cupom/editar/<?=$cupom['idCupom']?>" class="btn btn-info">EDITAR</a></td>

        <td><a href="./cupom/deletar/<?=$cupom['idCupom']?>" class="btn btn-danger">DELETAR</a></td>
    </tr>

    <?php endforeach; ?>
</table>
 

<br><br> 
<a href="./cupom/adicionar" class="btn btn-primary">Adicionar novo cupom</a>

