    <h2>Detalhes do cliente</h2>

<p>id: <?=$cliente['idcliente']?></p>

<p>nome: <?=$cliente['nome']?></p>

<p>senha: <?=$cliente['senha']?></p>

<p>email: <?=$cliente['email']?></p>

<p>Tipo: <?=$cliente['tipoCliente']?></p>

<p>cpf: <?=$cliente['cpf']?></p>

<p>sexo: <?=$cliente['sexo']?></p>

<p>Data de Nascimento: <?=$cliente['nascimento']?></p>

<br>
<h2>Enderecos</h2>
 <?php include './visao/endereco/listar.visao.php';?>

<a href="./endereco/adicionar/<?=$cliente['idcliente']?>" class="btn btn-primary">Adicionar novo endereco</a>
<br><br>
<a href="./cliente/adicionar/" class="btn btn-primary" >Adicionar novo cliente</a> <br>
