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
						<h1 class="NavBar">CRÉATION D'UNE FEUILLE DE TRAVAILLE</h1>
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

					<p>Cette fonction est sur la page des travaux.</p>

					<h4 class="CLorange">Comment utiliser cette fonction ?</h4><hr>

					<p>La première action à faire est d'inscrire le nom, prénom, la date des travaux ainsi que la ville où aura lieu les travaux.</p>
					<p>Il vous sera ensuite demandé d'entrer les détails majeur de la soumission, soit le nombre de poteau principal, de kit de départ et le nombre de sac de latte.</p>
					<p>La dernière étape pour la création, sont les sections. (par section, nous entendons ici chaque partie de cloture entre 2 poteau principal<b>POTP</b>). Ceci comprend les clotures ainsi que les portes simple ou double. Le système calculera automatiquement le nombre d'intermediaire et toutes le reste des pièces.</p>

					<h4 class="CLorange">Lien rapide !</h4><hr>

					<a href="/index.php/Home/SR"><button class="stylebtn bgorange">Y allez !</button></a>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>