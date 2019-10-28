
    <h2>Detalhes do endereço do cliente</h2>

<p>id cliente: <?=$endereco['idcliente']?></p>

<p>id endereço: <?=$endereco['idEndereco']?></p>

<p>Logradouro: <?= @ $endereco['Logra'] ?></p>

<p>Complemeto: <?= @ $endereco['Comp'] ?></p>

<p>Bairro: <?=$endereco['Bairro']?></p>

<p>Cidade: <?= @ $endereco['Cidade'] ?></p>

<p>CEP: <?= @ $endereco['CEP'] ?></p>



<a href="./cliente/ver/<?=$endereco['idcliente']?>" class="btn btn-primary" <br><br><br> Voltar </a> <br>
