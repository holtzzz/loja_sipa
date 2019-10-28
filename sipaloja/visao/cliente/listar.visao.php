<h2>Listar clientes</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID </th>
            <th>NOME</th> 
            <th>SENHA</th> 
            <th>EMAIL</th> 
            <th> TIPO </th>
            <th>CPF</th>
            <th>SEXO</th> 
            <th>NASCIMENTO</th> 
   
   
            <th>VER</th> 
            <th>EDITAR</th>
            <th>DELETAR</th>
        </tr>
    </thead>
    
    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?=$cliente['idcliente']?></td>

        <td><?=$cliente['nome']?></td>

        <td><?=$cliente['senha']?></td>

        <td> <?=$cliente['email']?> </td>
        
        <td> <?=$cliente['tipoCliente']?> </td>

        <td> <?=$cliente['cpf']?> </td>

        <td> <?=$cliente['sexo']?> </td>

        <td> <?=$cliente['nascimento']?> </td>



        <td><a href="./cliente/ver/<?=$cliente['idcliente']?>" class="btn btn-secondary">VER</a></td>

        <td><a href="./cliente/editar/<?=$cliente['idcliente']?>" class="btn btn-info">EDITAR</a></td>

        <td><a href="./cliente/deletar/<?=$cliente['idcliente']?>" class="btn btn-danger">DELETAR</a></td>
        </tr>

    <?php endforeach; ?>
</table>
 

<br><br> 
<a href="./cliente/adicionar" class="btn btn-primary">Adicionar novo cliente</a>

