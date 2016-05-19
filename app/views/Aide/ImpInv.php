<?php
	//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == ""){
		header("Refresh:0; ../Home/Login");
	}
?>
<html>

<head>

	<title>Soumission Clôture Jalbert</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="/css/w3Model.css">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	<script src="https://use.fontawesome.com/bf0a763563.js"></script>

</head>

<body>

	<div id="Main" class="Main" >
		<div class="row">
			<div class="col-12 col-m-12">
				<div class="col-12 col-m-12 box headBox bgorange">
					<div class="col-m-10">
						<h1 class="NavBar">IMPORTER L'INVENTAIRE</h1>
					</div>
					<div class="col-m-2">
						<a class="NavBar" href="/index.php/Aide/Accueil"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
					</div>
					
				</div>
			</div>
			<div class="col-12 col-m-12">
				<h4 class="CLorange">Comment faire ?</h4><hr>
					<div class="col-12 col-m-12 box" align="left">
					<h4 class="CLorange">Où est cette fonction ?</h4><hr>

					<p>Cette fonction se trouve dans la page de configuration. <b>/Home/ConfigGeneral</b>. </p>

					<h4 class="CLorange">Comment utiliser cette fonction ?</h4><hr>

					<p>Pour importer une sauvegarde de la base de donnée, assurez-vous de nommer le fichier Clojalb.sqlite. Sélectionnez le fichier à partir de longlet Importer la base de donnée. Puis cliquer sur charger.</p>
					<p>Si l'action réussie, une page de confirmation s'affichera. Dans le cas contraire, un message expliquant l'erreur s'affichera.</p>

					<h4 class="CLorange">Lien rapide !</h4><hr>

					<a href="/index.php/Home/ConfigGeneral"><button class="stylebtn bgorange">Y allez !</button></a>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>