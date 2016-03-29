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
	<div class="Header" align="center">
		<ul class="NavBar">
			<?php
		
			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Accueil"><img class="ConfigImage" src="/images/icon/inventaire-icon.png"></a></li>';}

			if(isset($_SESSION["TypeCompte"]) && ($_SESSION["TypeCompte"] == 1 || $_SESSION["TypeCompte"] == 0)){
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/InventaireInsertion"><img class="ConfigImage" src="/images/icon/add_icon.png"></a></li>';
				echo '<li class="NavBar"><a class="Selected" href="/index.php/Home/Reception"><img class="ConfigImage" src="/images/icon/reception-icon.png"></a></li>';
			}


			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li ><a class="NavBar" href="/index.php/Admin/RetourMenu"><img class="ConfigImage" src="/images/icon/exit-icon.png"></a></li>';}
			 ?>
		</ul>	
	</div>
	<div id="Main" class="Main" align="center">
		<div class="BoxLogin" align="center">
			<div  class="AddReceptionItem">
				<table class="TabRepceptionHead">
					<tr>
						<td>
							<input id="IdItemReception" onkeyup="showDescription(this.value)" type="text" class="ChampsReceptionAdd" placeholder="No de l'item"></input>
						</td>
						<td>
						<input id="DescriptionItemReception"  class="ChampsReceptionAdd" disabled value="Description du produit"></input>
						</td>
						<td>
							<input id="QteItemReception" disabled type="number" class="ChampsReceptionAdd" placeholder="qte"></input>
						</td>
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