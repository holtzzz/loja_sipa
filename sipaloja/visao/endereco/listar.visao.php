

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID ENDEREÇO </th>
            <th>ID CLIENTE </th>
            <th>LOGRADOURO</th> 
            <th>COMPLEMENTO</th> 
            <th>BAIRRO</th> 
            <th>CIDADE</th>
            <th>CEP</th>
   
   
            <th>VER</th> 
            <th>EDITAR</th>
            <th>DELETAR</th>
        </tr>
    </thead>
    
    <?php foreach ($enderecos as $endereco): ?>
    <tr>
        <td><?=$endereco['idEndereco']?></td>
        
        <td><?=$endereco['idcliente']?></td>

        <td><?=$endereco['Logra']?></td>

        <td> <?=$endereco['Comp']?> </td>
        
        <td> <?=$endereco['Bairro']?> </td>

        <td> <?=$endereco['Cidade']?> </td>

        <td> <?=$endereco['CEP']?> </td>



        <td><a href="./endereco/ver/<?=$endereco['idEndereco']?>" class="btn btn-secondary">VER</a></td>

        <td><a href="./endereco/editar/<?=$endereco['idEndereco']?>" class="btn btn-info">EDITAR</a></td>

        <td><a href="./endereco/deletar/<?=$endereco['idEndereco']?>" class="btn btn-danger">DELETAR</a></td>
        </tr>

    <?php endforeach; ?>
</table>
 


