<?php
		$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"curso");
		$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos	WHERE	id	=	$_GET[id]");
		$produto	=	mysqli_fetch_array($dados);
?>
<!DOCTYPE html>
 <html>
   <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width">
         <title>Produto da Mirror Fashion</title>
         <link rel="stylesheet" href="css/reset.css">
         <link rel="stylesheet" href="css/estilos.css">
		 <link rel="stylesheet" href="css/produto.css">
     </head>
     <body>
		<?php	include("header.php");	?>
	  <div  class="produto-back">
		  <div class = "container">
			  <section class="produto">
				<h2><?= $produto['nome'] ?></h2>
				<p>por apenas <?= $produto['preco'] ?></p>
			
			   <form action="checkout.php?id=<?= $produto['id'] ?>" method="POST">
				 <fieldset class="cores">
				   <legend>Escolha a cor:</legend>

				   <input type="radio" name="cor" value="verde" id="verde" checked>
				   <label for="verde">
					   <img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="Produto na cor verde">
				   </label>

				   <input type="radio" name="cor" value="rosa" id="rosa">
				   <label for="rosa">
					 <img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="Produto na cor rosa">
				   </label>

				   <input type="radio" name="cor" value="azul" id="azul">
				   <label for="azul">
					   <img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="Produto na cor azul">
				   </label>
				   <input	type="hidden"	name="id"	value="<?=	$produto['id']	?>">
				 </fieldset>
				 <fieldset class="tamanhos">
					<legend>Escolha o tamanho:</legend>
					<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
					<output for="tamanho" name="valortamanho">42</output>
				</fieldset>
				<button class="comprar">Comprar</button>
			   </form>
			 </section>
			 <section class="detalhes">
				<h2>Detalhes do produto</h2>
				<p><?= $produto['descricao'] ?></p>
			</section>
		</div>
	  </div>
	  	<?php	include("footer.php");	?>
		<script type="text/javascript" src="js/produto.js"></script>
     </body>
 </html>
