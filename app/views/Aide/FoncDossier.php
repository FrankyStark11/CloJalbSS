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
					<h1>Fonctionnement d'un dossier</h1>
				</div>
				<div class="col-2 col-m-2 box headBox" align="center">
					<a href="/index.php/Aide/Accueil"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/quitter-icon.png"></a>
				</div>
			</div>
			<div class="col-12 col-m-12">
				<h4 class="CLorange">Comment faire ?</h4><hr>
					<div class="col-12 col-m-12 box" align="left">
					<h4 class="CLorange">Où est cette fonction ?</h4><hr>

					<p>Le dossier se trouve dans la section des travaux. <b>Votre_Nom/Travaux</b>.</p>

					<h4 class="CLorange">Comment utiliser cette fonction ?</h4><hr>

					<p>Le fonctionnement d'un dossier comprend 2 tâches distincte.</p>
					<p><h4>Première étape</h4> la création du dossier est la première étape. Quand un client approuve sa soumission, il est important pour garder un bon suivi des pièces de l'inventaire, d'ouvrir un dossier pour réserver les pièces qui seront nécéssaires. Pour ce faire, sélectionné <b>SR</b> pour démarrer un nouveau dossier résidentiel.</p>
					<p>La première action à faire est d'inscrire le nom, prénom, la date des travaux ainsi que la ville où aura lieu les travaux.</p>
					<p>Il vous sera ensuite demandé d'entrer les détails majeur de la soumission, soit le nombre de poteau principal, de kit de départ et le nombre de sac de latte.</p>
					<p>La dernière étape pour la création, sont les sections. (par section, nous entendons ici chaque partie de cloture entre 2 poteau principal<b>POTP</b>). Ceci comprend les clotures ainsi que les portes simple ou double. Le système calculera automatiquement le nombre d'intermediaire et toutes le reste des pièces.</p>
					<p><h4>Félicitation, votre dossier est ouvert!!</h4>Votre nouveau dossier est maintenant ouvert avec le status <b>En cours</b>.</p>
					<p><h4>Une fois le travail terminé!</h4></p>
					<p>Peut importe la conslusion au dossier, le dossier doit être fermé ou annulé. pour ce faire, vous devez vous rendre dans la section des dossier en cours <a href="/index.php/Aide/ConsulterAide?ID=8"><i>voir section</i></a>. Si vous fermez un dossier dans le cas ou le travail est terminé, vous deverz confirmer la quantité de chaque pièce pour les déduire correctement de l'invenatire.</p>
					<p><h4>Revoir un ancien dossier</h4>Il est possible que l'un de nos client, repasse car une pièce à brisée ou qu'il veule simplement ajouter des lattes par exemple. vous pouvez consulter tous les dossiers <a href="/index.php/Aide/ConsulterAide?ID=9">ici</a>. </p>

					<h4 class="CLorange">Lien rapide !</h4><hr>

					<a href="/index.php/Home/MenuSoumission"><button class="stylebtn bgorange">Y allez !</button></a>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>