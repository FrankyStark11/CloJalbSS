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
						<h1 class="NavBar">GESTION DES DOSSIERS OUVERTS</h1>
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

					<p>Après la création d'une feuille de travail, elle s'affiche dans les dossiers ouverts. Cela ce trouve dans <b>Travaux/EnCours</b>. </p>

					<h4 class="CLorange">Comment utiliser cette fonction ?</h4><hr>

					<p>Quoi faire avec un dossier ouvert? Et bien une fois la job terminé, retournez voir le dossier ouvert pour effectuer une action.</p>
					<ul>
						<li>Fermer le dossier</li>
						<li>Annuler le dossier mais le conserver pour consultation</li>
						<li>Annuler le dossier et effacer du système</li>
					</ul>
					<p>Lors de la fermeture d'un dossier, une page de confirmation de pièce s'affiche. Vous devrez confirmer les pièces utilisées pour le dossier.</p>

					<h4 class="CLorange">Lien rapide !</h4><hr>

					<a href="/index.php/Home/JobEnCours"><button class="stylebtn bgorange">Y allez !</button></a>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>