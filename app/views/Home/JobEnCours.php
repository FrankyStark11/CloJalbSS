<?php
	//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == ""){
		header("Refresh:0; ../Home/Login");
	}
?>
<html>
<head>
	<title>Inventaire Clôture Jalbert</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<link rel="stylesheet" type="text/css" href="/css/w3Model.css">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>

<body onload="AfficherDossierOuvert();">

	<a href="/index.php/Home/MenuSoumission">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
<div class="row">
	<div class="col-12 col-m-12">
		<div class="col-12 col-m-12 box">
			<h1>Liste des travaux en cours</h1>
		</div>
	</div>
	<div class="col-6 col-m-12">
	<h4 class="CLorange">Liste des feuilles de travaux ouvertes</h4><hr>
		<div id="Main" class="col-12 col-m-12 overflowAll box" style="height: 600px;" align="center">
			<div class="col-12 InfoBox" >
				<table class="InfoPiece">
					<tr>
						<td>20160414-01</td>
						<td>JOHN DOE</td>
						<td>Repentigny</td>
						<td><button onclick="$('#zone01').slideUp('slow'); $('#zone01').slideDown('slow');" class="BGOrange StyleBtn">Afficher</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-6 col-m-12">	
	<h4 class="CLorange">Détails</h4><hr>
		<div id="zone01" style="display: none;" class="col-12 col-m-12 overflowAll box" >
			<h4 class="CLOrange"> Information client</h4>
			<table class="InfoPiece tabLastColumAlignRight">
				<tr>
					<td>
						Numéro du dossier
					</td>
					<td>
						<label id="NoDossierDetail"> </label>
					</td>
				</tr>
				<tr>
					<td>
						Prénom
					</td>
					<td>
						<label id="PrenomDossierDetail"> </label>
					</td>
				</tr>
				<tr>
					<td>
						Nom
					</td>
					<td>
						<label id="NomDossierDetail"> </label>
					</td>
				</tr>
				<tr>
					<td>
						Ville
					</td>
					<td>
						<label id="VilleDossierDetail"> </label>
					</td>
				</tr>
				<tr>
					<td>
						Date travaux
					</td>
					<td>
						<label id="DateDossierDetail"> </label>
					</td>
				</tr>
			</table>
			<hr>
			<h4 class="CLOrange"> Résumé des travaux</h4>
			<table class="InfoPiece tabLastColumAlignRight">
				<tr>
					<td>
						Type
					</td>
					<td>
						<label id="TypeDossierDetail"> </label>
					</td>
				</tr>
				<tr>
					<td>
						Status
					</td>
					<td>
						<label id="StatusDossierDetail"> </label>
					</td>
				</tr>
				<tr>
					<td>
						Pied linéaire
					</td>
					<td>
						<label id="PiedDossierDetail"> </label>
					</td>
				</tr>
				<tr>
					<td>
						Nombre de poteau
					</td>
					<td>
						<label id="PoteauDossierDetail"> </label>
					</td>
				</tr>
				<tr>
					<td>
						Valeur matériel de la job
					</td>
					<td>
						<label id="ValeurDossierDetail"> </label>
					</td>
				</tr>
			</table>
			<hr>
			<h4 class="CLOrange" style="cursor: pointer;" onclick="$('#tb01').slideToggle(1);"> Résumé des pieces</h4>
				<table style="display: none;" id="tb01" class="TabInfoSection">
					<tr>
						<th>
							No piece 
						</th>
						<th>
							Quantité requis
						</th>
						<th>
							Description
						</th>
					</tr>
				</table>

				<hr>

				<button  onclick="document.getElementById('id01').style.display='block'" class="BGgreen StyleBtn" style="margin-bottom:10px;width: 100%;"> Fermer le dossier </button>

				<button  onclick="document.getElementById('id02').style.display='block'" class="BGred StyleBtn" style="width: 100%;"> Annuler le dossier </button>
				
		</div>
	</div>
</div>

<!-- Message confirmation Fermer dossier -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-8">
    <header class="w3-container bggreen"> 
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-closebtn">&times;</span>
      <h2 id="headbox1"> </h2>
    </header>
    <div class="w3-container" align="center">
      <p>Vous êtes sur le point de fermer le dossier</p>
      <p>Pour officiellement fermer le dossier vous devrez confirmer les pieces avec leurs quantités</p>
    </div>
    <footer class="w3-container" style="padding-bottom: 10px;" align="center">
     <a id="lienRetrait" ><button class="StyleBtn bgGreen">Confirmer les pieces</button></a>
    </footer>
  </div>
</div>

<!-- Message confirmation Annuler dossier -->
<div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-8">
    <header class="w3-container bgred"> 
      <span onclick="document.getElementById('id02').style.display='none'" 
      class="w3-closebtn">&times;</span>
      <h2 id="headbox2"> </h2>
    </header>
    <div class="w3-container" align="center">
      <p>Vous êtes sur le point de fermer le dossier</p>
      <p>!! ATTENTION !! </p>
      <p> Cette action est irréversible</p>
    </div>
    <footer class="w3-container" style="padding-bottom: 10px;" align="center">
     <a href="/index.php/Home/Retrait"> <button class="StyleBtn bgred">Annuler et conserver</button></a>
     <a href="/index.php/Home/Retrait"> <button class="StyleBtn bgred">Annuler et effacer</button></a>
    </footer>
  </div>
</div>

</body>

</html>