<?php require'config.php'; ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<title>Exemplos Git</title>
	</head>
	<body>
			
		<div class="top"><div class="container">
	      <div class="copyright">
	        &copy; Copyright <strong>Exemplos Git</strong>. Todos os direitos reservados!
	      </div>
	      <div class="creditos">
	        <!--
	          All the links in the footer should remain intact.
	          You can delete the links only if you purchased the pro version.
	          Licensing information: https://bootstrapmade.com/license/
	          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
	        -->
	        Desenhado por <a href="https://ed9013929.wordpress.com">X.Solutions</a>
	      </div>
	    </div></div>
		<input type="checkbox" id="check">
		<label id="icone" for="check"><img src="assets/images/icone.jpg"></label>
		
		<div class="barra">	
			<nav>
				<!--<ul class="nav navbar-nav navbar-left">-->
					<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
				      		<a href="enviar-relatorios.php">Enviar Relatório</a>
				      		<a href="sair.php"><div class="link">Sair</div></a>
				      	<?php else: ?>
				      	<a href="./"><div class="link">Home</div></a>
				      	<a href="quemsomos.php"><div class="link">Quem somos</div></a>
				      	<a href="capacitacao.php"><div class="link">Capacitação</div></a>
				      	<a href="solucoes.php"><div class="link">Soluções</div></a>
				      	<a href="criativo.php"><div class="link">O criativo</div></a>
				      	<a href="envievideo.php"><div class="link">Envie seu vídeo</div></a>
				      	<a href="contato.php"><div class="link">Fale conosco</div></a>
				      	<a href="cadastrar.php"><div class="link">Cadastrar</div></a>
				      	<a href="login.php"><div class="link">Login</div></a>
				      <?php endif; ?>
				    <!--</ul>-->
				   
			</nav>
		</div>