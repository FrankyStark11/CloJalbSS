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
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>
<body>
	<div class="row Main">
		<div class="col-12 col-m-12">
			<div class="col-10 col-m-10 box headBox bgorange">
				<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Inventaire /Réception</h1>
			</div>
			<div class="col-2 col-m-2 box headBox" align="center">
				<a href="/index.php/Home/MenuInventaire"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
			</div>
		</div>
		<div class="col-4 com-m-12">
			<div  class="col-12 col-m-12  " style="height: 450px;">
			<h4 class="CLorange">Ajout de la pièce</h4><hr>
			<div  class="col-12 col-m-12 box " style="height: 450px;">
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
							<input id="IdItemReception" onkeyup="showDescription(this.value)" type="text" class="ChampsReceptionAdd" placeholder="No de l'item"></input>
						</td>
					</tr>
					<tr>
						<td>
							<input id="QteItemReception" disabled type="number" class="ChampsReceptionAdd" placeholder="Quantité"></input>
						</td>
					</tr>
					<tr>
						<td>
							<select class="ChampsReceptionAdd">
								<option selected value="">Fournisseur</option>
								<option >BelAir</option>
							</select>
						</td>
					</tr>
				</table>
				<table class="TabRepceptionHead">
					<tr>
						<td>
							<button id="BtnAjouterReception" disabled class="BtnAjouter" onclick="AddReceptionElement()"> Ajouter </button>
						</td>
					</tr>
				</table>
			</div>
			</div>
		</div>
		<div class="col-8 col-m-12">
			<div  class="col-12 col-m-12  ">
				<h4 class="CLorange">Résumé du PO</h4><hr>
				<div id="LstBoxReceptionTemp"  class="col-12 col-m-12 box maxheight">
					<table id="TabItems" class="TabRepception">
						<th>Numéro du produit</th>
						<th>Description</th>
						<th>Quantité</th>
						<th>Action</th>
					</table>	
				</div>
			</div>
			<div  class="col-12 col-m-12  " style="height: 450px;">
				<div  class="col-12 col-m-12 box ">
					<button class="BtnAjoutReception" onclick="FuncExcel()" id="BtnEnvoyer" value="Rechercher"> Recevoir les items </button>
				</div>
			</div>
		</div>
	</div>		
</body>
</html>