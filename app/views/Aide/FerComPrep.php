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
	

</head>

<body>

	<div id="Main" class="Main" >
		<div class="row">
			<div class="col-12 col-m-12">
				<div class="col-10 col-m-10 box headBox bgorange">
					<h1>Fermer une commande préparée</h1>
				</div>
				<div class="col-2 col-m-2 box headBox" align="center">
					<a href="/index.php/Aide/Accueil"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/quitter-icon.png"></a>
				</div>
			</div>
			<div class="col-12 col-m-12">
				<h4 class="CLorange">Comment faire ?</h4><hr>
					<div class="col-12 col-m-12 box" align="left">
					<h4 class="CLorange">Où est cette fonction ?</h4><hr>

					<p>Vous avez préparez une commande et le client passe en magasin pour venir la chercher. Comment fermer cette commande ? Premièrement, rendez-vous <b>VotreNom/Commande/Ramassage</b>. </p>

					<h4 class="CLorange">Comment utiliser cette fonction ?</h4><hr>

					<p> Une fois sur la page, sélectionnez la commande de votre client, puis sélectionnez <b>Fermer</b>.<br>
					Cette fonction déduira les pièces réservées.</p>

					<h4 class="CLorange">Lien rapide !</h4><hr>

					<a href="/index.php/Home/RamassageCommande"><button class="stylebtn bgorange">Y allez !</button></a>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>