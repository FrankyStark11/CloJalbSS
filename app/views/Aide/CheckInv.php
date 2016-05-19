<?php
	//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == ""){
		header("Refresh:0; ../Home/Login");
	}
?>
<html>

<head>

	<title>AIDE ICJ</title>
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
						<h1 class="NavBar">CONSULTER L'INVENTAIRE</h1>
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

					<p>Pour consulter l'inventaire, vous devez vous rendre à partir du menu principal, sur la section INV. Une fois à cet endroit, cliquez sur CONSULTER.</p>

					<h4 class="CLorange">Comment utiliser cette fonction ?</h4><hr>

					<p>Cette page vous offre la posibilitée de voir dès le début tous les items présent dans l'inventaire. Sur la droite, une boite de recherche vous permet de faire une recherche rapide. Les options de recherche sont les suivante:
						<ul style="list-style-type:square">
							<li>Numero de piece</li>
							<li>Catégorie</li>
							<li>Couleur</li>
							<li>Hauteur</li>
							<li>Grosseur</li>
							<li>Longeur</li>
						</ul>
						<br>
					Une fois votre item trouvé, vous pourez, d'un coup d'oeil rapide la quantité en stock.
					</p>
					<p>
						Vous aurez aussi trois options possibles. 
						<ul style="list-style-type:square">
							<li>Modifier la piece</li>
							<li>Consulter le log de cette piece</li>
							<li>Afficher les détails suplémentaires</li>
						</ul>
					</p>

					<h4 class="CLorange">Lien rapide !</h4><hr>

					<a href="/index.php/Home/Accueil"><button class="stylebtn bgorange">Y allez !</button></a>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>