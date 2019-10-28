    <h2>Detalhes do produto  <?=$produto['idProduto']?></h2>

    
<img src="publico/produtos/.jpg" style="width: 35%; height: 445px; padding-left: 10px; float: left; padding-right: 50px; margin-left: 23%;">
    
<div class="pala">
    <h1 style="margin-top: 20px;"> <?=$produto['Nome']?> </h1> 
    <div id="meio">	
	<p style="padding-left: 10%; font-size: 20px;">Frete grátis <br> Prazo de fabricação: 1 dia <br> Tamanho: <br> <?=$produto['Tamanho']?> </p>
	<p style="font-size: 25px; margin-top: 20px;"> <?=$produto['Preco']?> </p> <p>ou 5X de R$ 30,00 </p><br>
    
        <button style=" font-size: 20px; padding-right: 28px; padding-left: 28px; background-color: black;
			padding: 10px;
			color: white;
			border-color: black;"> <a href="./sacola/adicionar/$produto['idProduto']"> Adicionar ao carrinho </button> </a>
        
    </div>
        
        
<h2 style="text-align: center;">Informações do produto</h2><br>
<p style="padding-left: 40%; font-size: 20px;"><br> Descricao: <?=$produto['Descricao']?> <br> Categoria: <?=$produto['Categoria']?><br> Estoquemin: <?=$produto['Estoquemin']?> <br> Estoquemax: <?=$produto['Estoquemax']?></p>
    
  
    
    
    
    
<p>idProduto: <?=$produto['idProduto']?></p>

<p>Nome: <?=$produto['Nome']?></p>

<p>Preco: <?=$produto['Preco']?></p>

<p>Descricao: <?=$produto['Descricao']?></p>

<p>Tamanho: <?=$produto['Tamanho']?></p>

<p>img: <img src="<?=$produto['img']?>" alt="imagem" width="10%"> </p>

<p>Categoria: <?=$produto['Categoria']?></p>

<p>Estoquemin: <?=$produto['Estoquemin']?></p>

<p>Estoquemax: <?=$produto['Estoquemax']?></p>

<a href="./sacola/adicionar/<?=$produto['idProduto']?>"> carrinho </a>

<a href="./produto/adicionar" class="btn btn-primary" <br><br><br>Adicionar novo produto</a>