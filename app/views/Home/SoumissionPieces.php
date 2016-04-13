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
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>
<body>
	<a href="/index.php/Home/MenuInventaire">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
	<div class="row" align="center">
		<div class="col-4 com-m-12">
			<div  class="col-12 col-m-12 box " style="height: 450px;">
				<h3>Pièce</h3>
				<table class="TabRepceptionHead">
					<tr>
						<td>
						<label id="DescriptionItemReception"  value="Description du produit">Description de la pièce</label>
						</td>
					</tr>
					<tr>
						<td>
							<hr>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<input id="IdItemReception" onkeyup="showDescriptionSP(this.value)" type="text" class="ChampsReceptionAdd" placeholder="No de l'item"></input>
						</td>
					</tr>
					<tr>
						<td>
							<input id="QteItemReception"  type="number" class="ChampsReceptionAdd" placeholder="Quantité"></input>
						</td>
					</tr>
					<tr>
						<td>
							<input id="PrixItemReception"  type="number" class="ChampsReceptionAdd" placeholder="Prix"></input>
						</td>
					</tr>
				</table>
				<table class="TabRepceptionHead">
					<tr>
						<td>
							<button id="BtnAjouterReception" disabled class="BtnAjouter" onclick="AddSoumissionElement()"> Ajouter </button>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-8 col-m-12">
			<div id="LstBoxReceptionTemp" style="height: 450px;" class="col-12 col-m-12 box maxheight">
				<table id="TabItems" class="TabRepception">
					<th>Numéro du produit</th>
					<th>Description</th>
					<th>Quantité</th>
					<th>Prix</th>
					<th>Action</th>
				</table>
			</div>
		</div>	
		<div class="col-12 col-m-12">
			<div  class="col-12 col-m-12 box ">
				<button class="BtnAjoutReception" onclick="FuncExcel()" id="BtnEnvoyer" value="Rechercher"> Enregistrer </button>
			</div>
		</div>
	</div>		
</body>
</html>