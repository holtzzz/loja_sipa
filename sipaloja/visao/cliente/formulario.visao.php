<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>

<div style="margin: auto;">
<img src="publico/img_sipa/profile.jpg"  style="display: inline;
	border-radius: 100%;
	width: 100px;">
<h1>Cadastro</h1>

<form action="" method="POST">

    <input placeholder="Nome" type="name" name="nome" value="<?= @ $cliente['nome'] ?>" style="width: 250px; height: 40px;">

    <br><br>

    <input placeholder="Senha" type="password" name="senha" value="<?= @ $cliente['senha'] ?>" style="width: 250px; height: 40px;">

    <br><br>
    
    <select name="tipoCliente" style="padding: 10px 52px;">
        <option value="null"> Tipo de Usuario</option>
       <option value="user"> Cliente</option>
        <option value="admin"> Administrador</option>
    </select>

    <br><br>
    <input placeholder="Email" type="Email" name="Email" value="<?= @ $cliente['email'] ?>" style="width: 250px; height: 40px;"> 

    <br><br>

    <input placeholder="CPF" type="number" name="cpf" value="<?= @ $cliente['cpf'] ?>" style="width: 250px; height: 40px;"> 

    <br><br>

    <h3>Sexo: </h3>
    
    <input type="radio" name="sexo" value="F"> Feminino
    <input type="radio" name="sexo" value="M"> Masculino
    
    <br><br>

    <input placeholder="Data" type="date" name="nascimento" value="<?= @ $cliente['nascimento'] ?>" style="width: 250px; height: 40px;">

    <br><br>
    	<button title="Enviar" style="background-color: black;
			color: white;
			border-color: black;
			padding: 20px 35px;
			font-size: 20px;
			margin-top: 25px;
                        margin-bottom: 20px;">Cadastrar-me </button>
        
</form>

</div>
