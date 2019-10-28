<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "sipaloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}

//QUANDO HOSPEDAR
/*function conn() {
    $cnx = mysqli_connect("localhost", "id10017274_bebekarolsampaio", "shawn1998", "id10017274_sipaloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}  */

