<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Bem vindo - A Construtora Fausie e Cezario</title>

	<!-- Inserindo a paginas de estilos css -->
	<link rel="stylesheet" href="css/vendors/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- /Fim da inserção das paginas de estilo-->
</head>
<body>
	
	<div id="conteudo" class="container"> <!-- Conteudo Centralizado -->

		<!-- Header -->
		<?php include("includes/header.php"); ?>
		<!-- /header -->
		
		<!-- Slider -->
		<?php include("includes/slider.php"); ?>
		<!-- /Slider -->
		
		<!-- Little Text about Fausi-->
		<?php include("includes/about_fausi.php"); ?>
		<!-- /Little Text -->

		<!-- Galery -->
		<?php include("includes/projects.php");?>
		<!-- /Galery -->
		
		<!-- Footer-->
		<?php include("includes/footer.php"); ?>
		<!-- /Footer-->
		
	</div><!-- /Conteudo -->
	
	<!-- JavaScripts -->
	<script src="js/jquery.min.js" type="text/script"></script>
	<script src="js/bootstrap.min.js" type="text/script"></script>
	<!-- /JavaScripts -->
</body>
</html>