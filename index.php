<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
	<title>magdete</title>
	<meta charset="utf-8">
	<!--Prioridade para smartphones-->
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!--Importar CSS do bootstrap -->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">

	<!--Importar icones -->
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

	<!-- Importando lightbox-->
	<link rel="stylesheet" type="text/css" href="lib/lightbox/ekko-lightbox.css">

	<!--Importa seu CSS-->
	<link rel="stylesheet" type="text/css" href="estilo.css">



</head>
<body>

	<!-- Logomarca -->


	 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Home</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">

      	
        <a class="nav-link" href="index.php">Propostas</a>
      </li>

      <span class="glyphicon glyphicon-home"></span>
      <li class="nav-item">
        <a class="nav-link" href="#">Deveres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jornada na saúde</a>
      </li>
      </li>
      
    </ul>
  </div>
</nav> 
<!-- Fim menu -->


<!-- Inicio container-fluid site-main -->
<section id="index1" class="container-fluid site-main">
	<!-- Apenas o nome da candidata -->
	<div id="nome" class="jumbotron">
		<h1>Pre Candidata </h1>
		<h1>Magdete Albina Simão</h1>
				
	</div>
	<!-- Fim Nome -->
	<!-- Inicio container -->
	<div id="index2" class="container">

		<!-- Inicio Class row -->
	    <div id="index3" class="row">

			<?php
			//verificando qual pagina sera incluida no meio do site
			if (isset($_GET['sec'])) {

				// seçoes aceitaveis para inclusao
				$secoes = ['fotos/fotos','propostas/conteudoProposta','principal'];
				$sec = $_GET['sec'];

				if (in_array($sec, $secoes)) { //existe esta secao
					include("view/" . $sec . ".php");
				}else{ // nao existe
					include("view/principal.php");
				}
			}else{
				include('view/principal.php');

			}

			?>
		</div>
		<!-- Fim class row-->
	</div>
	<!-- Fim container -->
</section>
<!-- Fim container-fluid site-main -->

<a name="contato"></a>
<div id="contato" class="container-fluid">
	<div class="containe">
		<h1>Contato</h1>

		<span class="fas fa-envelope" > </span>   willian95prado@gmail.com <br>
		<span class="fas fa-phone" > </span>   (95)9999-55555<br>
		<span class="fas fa-map-marker-alt" > </span>   Rua i ente 555 e 45454 Ituiutaba - MG<br>
		<span class="glyphicon glyphicon-home"></span>
		<span class="glyphicon glyphicon-map-marker"></span>  </span>   Rua 1 ente 555 e 45454 Ituiutaba - MG<br>
	</div>
</div>


<!-- Importando o jquery-->
<script type="text/javascript" src="jquery.js"></script>
<!-- importando jquery boots strop-->
<script type="text/javascript" src="lib/bootstrap/js/bootstrap.js"></script>
<!-- Importar javascript do lightbox -->
<script type="text/javascript" src="lib/lightbox/ekko-lightbox.js"></script>

<!-- Importar o nosso script -->
<script type="text/javascript" src="scripts.js"></script>

</body>
</html>