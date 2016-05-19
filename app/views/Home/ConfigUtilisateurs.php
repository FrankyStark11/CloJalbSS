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
	<link rel="stylesheet" type="text/css" href="/css/w3Model.css">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	<script src="https://use.fontawesome.com/bf0a763563.js"></script>
</head>

<body onload="ShowProfis()">
	<div id="Main" class="Main">
	<div class="row">
	<div class="col-12 col-m-12">
			<div class="col-12 col-m-12 box headBox bgorange">
				<div class="col-m-10">
					<h1 class="NavBar"><?php echo $_SESSION["NomUtilisateur"]; ?> /Configuration /Utilisateurs /Gérer</h1>
				</div>
				<div class="col-m-2">
					<a class="NavBar" href="/index.php/Home/MenuUtilisateur"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
				</div>
				
			</div>
		</div>
		<div class="col-1 col-m-12"></div>
		<div class="col-4 col-m-12">
			<h4 class="CLOrange">Liste des utilisateurs</h4><hr>
			<div class="col-12  col-m-12 box">
				<input onkeyup="ShowProfis()" placeholder="RECHERCHE ..." id="ChampsRecherche" class="styleinput" style="border-width: 0px; text-align: left; width: 100%;height: 50px; font-size: 30px;"></input>
			</div>
			<div class="col-12 col-m-12 box overflowAll" id="sectionUtilisateur" style="height: 610px;">

				<div class="infobox boxarticle" align="center">
					<input type="hidden" name="Utilisateur" value="10"></input>
					<input type="hidden" name="Nom" value="Visiteur"></input>
					<img src="../../images/icon/Admin-icon.png">
					<h3>test,</h3>
					<h3>test</h3>
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
							<td>Nom :</td><td><label id="profilNom"> </label></td>
						</tr>
						<tr>
							<td>Prénom :</td><td><label id="profilPrenom"> </label></td>
						</tr>
						<tr>
							<td>Username :</td><td><label id="profilUserName"> </label></td>
						</tr>
						<tr>
							<td>Inscrit depuis :</td><td><label id="profilInscription"> </label></td>
						</tr>
					</table>

				<h4 class="CLOrange">Modification du mot de passe</h4><hr>
				<form method="post" action="/index.php/Admin/ModifMdp">
				<input type="hidden" id="TxtID" name="TxtID"></input>
				<input type="hidden" id="Nom" name="Nom"></input>
					<table class="infopiece datasplit-2">
						<tr>
							<td>Mot de passe :</td><td><input type="text" name="TxtMdp" class="styleInput col-12" placeholder="Mot de passe"></input></td>
						</tr>
					</table>
					<button type="submit" class="styleBtn tabplein bggreen" style="margin-top: 10px;">Enregistrer</button></a>
				</form>	
				</div>
				<div class="col-12 col-m-12">
					<button class="styleBtn tabplein bgred" style="margin-top: -20px;" onclick="document.getElementById('id02').style.display='block'">Supprimer</button>
				</div>
			</div>
		</div>
		<div class="col-1 col-m-12"></div>
	</div>
	</div>

	<!-- Message confirmation Annuler dossier -->
<div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-8">
    <header class="w3-container bgred"> 
      <span onclick="document.getElementById('id02').style.display='none'" 
      class="w3-closebtn">&times;</span>
      <h2 id="headbox2"> Êtes-vous certain ? </h2>
    </header>
    <div class="w3-container" align="center">
      <p>Vous êtes sur le point de supprimer l'utilisateur.</p>
      <p>!! ATTENTION !! </p>
      <p> Cette action est irréversible</p>
    </div>
    <footer class="w3-container" style="padding-bottom: 10px;" align="center">
     <a id="LienRetirer" href="#"> <button class="StyleBtn bgred">Supprimer</button></a>
    </footer>
  </div>
</div>
</body>

</html>