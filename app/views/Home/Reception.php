<?php
//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == ""|| $_SESSION["TypeCompte"] == 2){
		header("Refresh:0; ../Home/Login");
	}
?>
<html>
<head>
	<title>Soumission Clôture Jalbert</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>
<body>
	<a class="NavBar" href="/index.php/Home/MenuInventaire"><img style="float: right; width: 50px;height: 50px;" title="Retour au menu" class="ConfigImage" src="/images/icon/exit-icon.png"></a>
	<div id="Main" class="Main" align="center">
		<div class="BoxLogin" align="center">
			<div  class="AddReceptionItem">
				<table class="TabRepceptionHead">
					<tr>
						<td>
							Identification de la piece
						</td>
						<td>
							<input id="IdItemReception" onkeyup="showDescription(this.value)" type="text" class="ChampsReceptionAdd" placeholder="No de l'item"></input>
						</td>
					</tr>
					<tr>
						<td>
							Description de la piece
						</td>
						<td>
						<label id="DescriptionItemReception"  value="Description du produit">Aucun élément</label>
						</td>
					</tr>
					<tr>
						<td>
							Quantité
						</td>
						<td>
							<input id="QteItemReception" disabled type="number" class="ChampsReceptionAdd" placeholder="qte"></input>
						</td>
					</tr>
				</table>
				<table class="TabRepceptionHead">
					<tr>
						<td>
							<button id="BtnAjouterReception" disabled class="BtnAjouter" onclick="AddReceptionElement()"> </button>
						</td>
					</tr>
				</table>
			</div>
			<div id="LstBoxReceptionTemp" class="LstReceptionItems">
			<table id="TabItems" class="TabRepception">
				<th>Numéro du produit</th>
				<th>Description</th>
				<th>Quantité</th>
				<th>Action</th>
			</table>
			</div>
			<button class="BtnAjoutReception" onclick="FuncExcel()" id="BtnEnvoyer" value="Rechercher"> Recevoir les items </input>
		</div>
	</div>
	<div class="FeetBar" align="center"> Connecté en tant que : <?php echo $_SESSION["NomUtilisateur"]; ?></div>
</body>
</html>