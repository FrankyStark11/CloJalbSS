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
					<h1>Retirer une piece</h1>
				</div>
				<div class="col-2 col-m-2 box headBox" align="center">
					<a href="/index.php/Aide/Accueil"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/quitter-icon.png"></a>
				</div>
			</div>
			<div class="col-12 col-m-12">
				<h4 class="CLorange">Comment faire ?</h4><hr>
					<div class="col-12 col-m-12 box" align="left">
					<h4 class="CLorange">Où est cette fonction ?</h4><hr>

					<p>Si une pièce devient désuet, il est possible de la retirer du système dans la section de consultation de l'inventaire <b> Inventaire/consulter</b> une fois sur la bonne page, sélectionnez la pièce que vous désirez retirer et sélectionnez l'icone de modification.</p>

					<h4 class="CLorange">Comment utiliser cette fonction ?</h4><hr>

					<p>
						Vous vous retrouvez sur la page de modification d'une pièce. Il vous suffit maintenant de sélectionner <b>supprimer la piece</b> pour la retirer du système.
					</p>
					<p>
						ATTENTION cette action est irréversible.
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