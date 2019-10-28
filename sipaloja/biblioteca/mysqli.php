<?php

function conn() {
	$local = "./biblioteca/manipulacao/local.csv";
	$servidor = "./biblioteca/manipulacao/servidor.csv";

	$arquivo = $local;

	$arq = fopen($arquivo, 'r');

		$conexao = fgets($arq);

		$dados = explode(',', $conexao);

	fclose($arq);

	$server = $dados[0];
	$usuario = $dados[1];
	$senha = $dados[2];
	$database = $dados[3];

	$cnx = mysqli_connect($server, $usuario, $senha, $database);

	if (!$cnx) die('Deu errado a conexao!');
	return $cnx;
}
