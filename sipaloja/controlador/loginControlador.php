<?php

require_once "modelo/clienteModelo.php";


/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $cliente = pegarClientePorEmailSenha($email, $senha);
        
        if (acessoLogar($cliente)) {
            alert("bem vindo" . $login);
            redirecionar("paginas/");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/formulario");
}
/** anon */
function logout() {
    acessoDeslogar();
    alert("deslogado com sucesso!");
    redirecionar("cliente");
}
?>