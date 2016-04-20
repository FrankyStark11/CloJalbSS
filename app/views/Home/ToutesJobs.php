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
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>

<body onload="AfficherDossier();">
<div class="row main">
	<div class="col-12 col-m-12">
		<div class="col-10 col-m-10 box headBox bgorange">
			<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Travaux /Liste</h1>
		</div>
		<div class="col-2 col-m-2 box headBox" align="center">
			<a href="/index.php/Home/MenuSoumission"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
		</div>
	</div>
	<div class="col-12 col-m-12">
		<div class="col-4 col-m-12"  >
			<h4 class="CLorange">Option de recherche</h4><hr>
			<div class="col-12 col-m-12 box" style="height: 500px;">
				<table class="InfoPiece">
					<tr>
						<td>Numéro de dossier</td>
						<td><input type="text" class="StyleInput col-12" placeholder="No dossier"></input></td>
					</tr>
					<tr>
						<td>Ville</td>
						<td><input type="text" class="StyleInput col-12" placeholder="Ville"></input></td>
					</tr>
					<tr>
						<td>Prénom</td>
						<td><input type="text" class="StyleInput col-12" placeholder="prénom"></input></td>
					</tr>
					<tr>
						<td>Nom</td>
						<td><input type="text" class="StyleInput col-12" placeholder="Nom"></input></td>
					</tr>
					<tr>
						<td>Date début</td>
						<td><input type="Date" class="StyleInput col-12" placeholder="No dossier"></input></td>
					</tr>
					<tr>
						<td>Date fin</td>
						<td><input type="Date" class="StyleInput col-12" placeholder="No dossier"></input></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><select class="StyleInput col-12"><option>choix</option><option>fermé</option><option>Ouvert</option></select></td>
					</tr>
				</table>
			</div>
		</div>
		<div  class="col-8 col-m-12 " >
			<h4 class="CLorange">Liste des feuilles de travaux</h4><hr>
			<div id="Main" class="col-12 col-m-12 box overflowAll" style="height: 500px;">
				<div class="col-12 InfoBox" title="Poteau de 4ft 2 3/8 6 et 6">
					<table class="InfoPiece">
						<tr>
							<td>20160412-01</td>
							<td>Marcel Tanguay</td>
							<td>Repentigny</td>
							<td>Ouvert</td>
							<td><button class="BGOrange StyleBtn">Afficher</button></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-m-12">	
	<h4 class="CLorange">Détails</h4><hr>
		<div id="zone01" class="col-12 col-m-12 overflowAll box" style="height: 600px;">
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
				<table id="tb01" class="TabInfoSection">
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
		</div>
	</div>
</div>
</body>

</html>