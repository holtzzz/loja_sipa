
<div id="tudo" style="text-align: center; display: inline;">
	<div id="log">
           <img src="publico/img_sipa/profile.jpg" id="pro2" style="display: inline;
	border-radius: 100%;
	width: 100px;">
            <h1>Login do cliente</h1>
	</div>
    
    
<form action="" method="POST">
    <input placeholder="Email" type="Email" name="email" value="<?= @ $cliente['email'] ?>" style="width: 250px; height: 40px;"> <br><br>
    <input placeholder="Senha" type="password" name="senha" value="<?= @ $cliente['senha'] ?>" style="width: 250px; height: 40px;"> <br>
		<button title="Enviar" style="background-color: black;
			color: white;
			border-color: black;
			padding: 15px 45px;
			font-size: 20px;
			margin-top: 25px;
                        margin-bottom: 20px;"> Enviar </button>
</form>
    
    <p id="p2">Não tem cadastro?  <a href="./cliente/adicionar"> cadastre-se </a>
</div>

<br>

