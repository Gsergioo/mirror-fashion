<!DOCTYPE html>
 <html>
   <head>
	<meta name="viewport" content="width=device-width">
     <meta charset="utf-8">
	 <!--[if lt IE 9]>
	 	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
     <title>Mirror Fashion</title>
	 	<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
   </head>
   <body>
      <?php	include("header.php");	?>
	  <main class = "container destaque">
		<section class = "busca">
			<form>
				<h2> Busca </h2>
				<input type = "search">
				<button> Buscar </button>
			</form>
		</section>
		<section class = "menu-departamento">
			<h2> Departamentos </h2>
			<ul>
				<li><a href="#">Blusas e Camisas</a>
					<ul>
					   <li><a href="#">Manga curta</a></li>
					   <li><a href="#">Manga comprida</a></li>
					   <li><a href="#">Camisa social</a></li>
					   <li><a href="#">Camisa casual</a></li>
					</ul>
				</li>
				<li><a href="#">Calças</a></li>
				<li><a href="#">Saias</a></li>
				<li><a href="#">Vestidos</a></li>
				<li><a href="#">Sapatos</a></li>
				<li><a href="#">Bolsas e Carteiras</a></li>
				<li><a href="#">Acessórios</a></li>
			</ul>
		</section>
		<section class = "banner">
			<img src = "img/destaque-home.png" alt="Promoção: Big City Night">
		</section>
	  </main>  
		<article class = "container paineis">
			<section class = "painel novidades">
				<h2>Novidades</h2>
				<nav>
					<ol>
						<?php
							$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"curso");
							$dados	=	mysqli_query($conexao,	"SELECT	* FROM	produtos	ORDER BY data DESC LIMIT	0,	12");
							while	($produto	=	mysqli_fetch_array($dados)):
						?>
						<li><div class="card">
							  <img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="miniatura1" style="width:100%">
							  <h1><?=	$produto['nome']	?></h1>
							  <p class="price"><?=	$produto['preco']	?></p>
							  <p><button style="background-color:  black" onclick="window.location.href = 'produto.php?id=<?= $produto['id'] ?>';">Add to Cart</button></p>
							</div>
						</li>
						<?php	endwhile;	?>
					</ol>
				</nav>
				<button type="button" id = "mostrar" >Mostrar mais</button>
			</section>
			<section class="painel mais-vendidos">
				<h2>Mais Vendidos</h2>
				<nav>
					<ol>
						<?php
							$dados	=	mysqli_query($conexao,	"SELECT	* FROM	produtos ORDER BY vendas DESC LIMIT	0,	12");
							while	($produto	=	mysqli_fetch_array($dados)):
						?>
						<li><div class="card">
							  <img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="miniatura1" style="width:100%">
							  <h1><?=	$produto['nome']	?></h1>
							  <p class="price"><?=	$produto['preco']	?></p>
							  <p><button onclick="window.location.href = 'produto.php?id=<?= $produto['id'] ?>';">Add to Cart</button></p>
							</div>
						</li>
						<?php	endwhile;	?>
					</ol>
				</nav>
				<button type="button" id = "m2" >Mostrar mais</button>
			</section>
		</article>
		<?php	include("footer.php");	?>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/banner.js"></script>
		<script type="text/javascript" src="js/home.js"></script>
   </body>
 </html>