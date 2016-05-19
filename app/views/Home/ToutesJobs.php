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
	<script src="https://use.fontawesome.com/bf0a763563.js"></script>
</head>

<body onload="AfficherDossier();">
<div class="row main">
	<div class="col-12 col-m-12">
				<div class="col-12 col-m-12 box headBox bgorange">
					<div class="col-m-10">
						<h1 class="NavBar"><?php echo $_SESSION["NomUtilisateur"]; ?> /Travaux /Liste</h1>
					</div>
					<div class="col-m-2">
						<a class="NavBar" href="/index.php/Home/MenuSoumission"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
	<div class="col-12 col-m-12">
		<div class="col-4 col-m-12">
			<h4 class="CLorange">Option de recherche</h4><hr>
			<div class="col-12 col-m-12 box" style="height: 500px;">
				<table class="InfoPiece">
					<tr>
						<td>Numéro de dossier</td>
						<td><input id="TxtNo" type="text" class="StyleInput col-12" placeholder="No dossier"></input></td>
					</tr>
					<tr>
						<td>Ville</td>
						<td><input id="TxtVille" type="text" class="StyleInput col-12" placeholder="Ville"></input></td>
					</tr>
					<tr>
						<td>Prénom</td>
						<td><input id="TxtPrenom" type="text" class="StyleInput col-12" placeholder="prénom"></input></td>
					</tr>
					<tr>
						<td>Nom</td>
						<td><input id="TxtNom" type="text" class="StyleInput col-12" placeholder="Nom"></input></td>
					</tr>
					<tr>
						<td>Date début</td>
						<td><input id="DateDebut" value="<?php echo date("Y-m-d") ?>" type="Date" class="StyleInput col-12" placeholder="No dossier"></input></td>
					</tr>
					<tr>
						<td>Date fin</td>
						<td><input id="DateFin" value="<?php echo date("Y-m-d") ?>" type="Date" class="StyleInput col-12" placeholder="No dossier"></input></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><select id="TxtStatus" class="StyleInput col-12"><option value="">choix</option><option>fermé</option><option>Ouvert</option></select></td>
					</tr>
				</table>
				<button onclick="AfficherDossierRecherche()" class="stylebtn bgorange tabplein">Rechercher</button>
				<button onclick="initialiserChampsConsulter();" class="stylebtn bgorange tabplein">Réinitialiser</button>
			</div>
		</div>
		<div  class="col-8 col-m-12 " >
			<h4 class="CLorange">Liste des feuilles de travaux</h4><hr>
			<div id="Main" class="col-12 col-m-12 box overflowAll" style="height: 500px;">
				
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