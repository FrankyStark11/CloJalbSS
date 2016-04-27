<?php
//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == "" || $_SESSION["TypeCompte"] == 2){
		header("Refresh:0; ../Home/Login");
	}
?>
<html>
<head>

	<title>Inventaire Clôture Jalbert</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>

<body>
	<div id="Main" class="Main">
	<div class="row">
	<div class="col-12 col-m-10">
		<div class="col-10 col-m-12 box headBox bgorange">
			<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Configuration /Utilisateurs /Gérer</h1>
		</div>
		<div class="col-2 col-m-2 box headBox" align="center">
			<a href="/index.php/Home/MenuUtilisateur"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
		</div>
	</div>
		<div class="col-1 col-m-12"></div>
		<div class="col-4 col-m-12">
			<h4 class="CLOrange">Liste des utilisateurs</h4><hr>
			<div class="col-12  col-m-12 box">
				<input onkeyup="" placeholder="RECHERCHE ..." id="ChampsRecherche" class="styleinput" style="border-width: 0px; text-align: left; width: 100%;height: 50px; font-size: 30px;"></input>
			</div>
			<div class="col-12 col-m-12 box overflowAll" style="height: 610px;">

				<div class="infobox boxarticle" align="center">
					<input type="hidden" name="Utilisateur" value="10"></input>
					<input type="hidden" name="Nom" value="Visiteur"></input>
					<img src="../../images/icon/Admin-icon.png">
					<h3>Jalbert,</h3>
					<h3>Sébastien</h3>
					<button class="styleBtn tabPlein bggreen">Sélectionner</button>
				</div>

				<div class="infobox boxarticle" align="center">
					<input type="hidden" name="Utilisateur" value="10"></input>
					<input type="hidden" name="Nom" value="Visiteur"></input>
					<img src="../../images/icon/Admin-icon.png">
					<h3>Jalbert,</h3>
					<h3>Sébastien</h3>
					<button class="styleBtn tabPlein bggreen">Sélectionner</button>
				</div>

				<div class="infobox boxarticle" align="center">
					<input type="hidden" name="Utilisateur" value="10"></input>
					<input type="hidden" name="Nom" value="Visiteur"></input>
					<img src="../../images/icon/Admin-icon.png">
					<h3>Jalbert,</h3>
					<h3>Sébastien</h3>
					<button class="styleBtn tabPlein bggreen">Sélectionner</button>
				</div>

				<div class="infobox boxarticle" align="center">
					<input type="hidden" name="Utilisateur" value="10"></input>
					<input type="hidden" name="Nom" value="Visiteur"></input>
					<img src="../../images/icon/Admin-icon.png">
					<h3>Jalbert,</h3>
					<h3>Sébastien</h3>
					<button class="styleBtn tabPlein bggreen">Sélectionner</button>
				</div>

			</div>
		</div>
		<div class="col-6 col-m-12">
			<h4 class="CLOrange">Liste des utilisateurs</h4><hr>
			<div class="col-12 col-m-12 box" style="height: 720px;">
				<div class="col-12 col-m-12" align="center"><img style="width: 256px;height: auto;" src="../../images/icon/Setting-user-icon.png"></div>
				<div class="col-12 col-m-12">
				<h4 class="CLOrange">Information</h4><hr>
					<table class="infopiece datasplit-2">
						<tr>
							<td>Nom :</td><td>Marsolais</td>
						</tr>
						<tr>
							<td>Prénom :</td><td>Francis</td>
						</tr>
						<tr>
							<td>Username :</td><td>cjFrancis</td>
						</tr>
						<tr>
							<td>Inscrit depuis :</td><td>16-03-2016</td>
						</tr>
					</table>

				<h4 class="CLOrange">Modification</h4><hr>
					<table class="infopiece datasplit-2">
						<tr>
							<td>Nom :</td><td><input type="text" class="styleInput" placeholder="Nom"></input></td>
						</tr>
						<tr>
							<td>Prénom :</td><td><input type="text" class="styleInput" placeholder="Prenom"></input></td>
						</tr>
						<tr>
							<td>Mot de passe :</td><td><input type="text" class="styleInput" placeholder="Mot de passe"></input></td>
						</tr>
					</table>
				</div>
				<div class="col-12 col-m-12">
					<input class="styleBtn tabplein bggreen" type="button" value="Enregistrer" ></input><input class="styleBtn tabplein bgred" type="button" value="Supprimer"></input>
				</div>
			</div>
		</div>
		<div class="col-1 col-m-12"></div>
	</div>
	</div>
</body>

</html>