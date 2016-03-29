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
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body onload="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)">
	<div class="Header" align="center">
		<ul class="NavBar">
		<?php

			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li class="NavBar"><a class="Selected" href="/index.php/Home/Accueil"><img class="ConfigImage" src="/images/icon/inventaire-icon.png"></a></li>';}

			if(isset($_SESSION["TypeCompte"]) && ($_SESSION["TypeCompte"] == 1 || $_SESSION["TypeCompte"] == 0)){
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/InventaireInsertion"><img class="ConfigImage" src="/images/icon/add_icon.png"></a></li>';
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Reception"><img class="ConfigImage" src="/images/icon/reception-icon.png"></a></li>';
			}

			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li ><a class="NavBar" href="/index.php/Admin/RetourMenu"><img class="ConfigImage" src="/images/icon/exit-icon.png"></a></li>';}
			 ?>
		</ul>	
	</div>

	<div id="OptionAvance" align="center"> Option de recherche </div>

	<div id="SearchBox" class="SearchBoxPiece" align="center">
		<table>
			<tr>
				<td>
					No Piece
				</td>
				<td>
					<input class="ChampsRecherche" onkeyup="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxNoPiece" type="text" placeholder="No de piece"></input>
				</td>
				<td>
					Catégorie
				</td>
				<td>
					<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxCategorie" class="ChampsRecherche">
						<option selected value=""> Choix </option>
						<optgroup label="oz">
							<option>1,2oz</option>
						</optgroup>
						<optgroup label="Grad">
							<option>.100</option>
							<option>.120</option>
							<option>.125</option>
							<option>.134</option>
							<option>.154</option>
							<option>.203</option>
							<option>.216</option>
							<option>.280</option>
						</optgroup>
						<optgroup label="%">
							<option>0,24</option>
							<option>12</option>
							<option>12.5</option>
							<option>15.5</option>
						</optgroup>
						<optgroup label="Degré">
							<option>45°</option>
							<option>90°</option>
						</optgroup>
						<optgroup label="Grillage">
							<option>Aucun Grillage</option>
							<option>Grillage 2X#9</option>
						</optgroup>
					</select>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td>
					Couleur
				</td>
				<td>
					<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxCouleur" class="ChampsRecherche">
						<option value="">Choix</option>
						<optgroup label="Résidentiel">
								<option>Noir</option>
								<option>Blanc</option>
								<option>Brun</option>
								<option>Taupe</option>
								<option>Vert</option>
							</optgroup>
							<optgroup label="Commercial">
							<option>Galvanisé</option>
							</optgroup>
					</select>
				</td>
				<td>
					Hauteur
				</td>
				<td>
					<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxHauteur" class="ChampsRecherche">
						<option value="" selected> Choix </option>
						<option>3ft</option>
						<option>4ft</option>
						<option>5ft</option>
						<option>6ft</option>
						<option>7ft</option>
						<option>8ft</option>
						<option>9ft</option>
						<option>10ft</option>
						<option>12ft</option>
						<option>14ft</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Grosseur
				</td>
				<td>
					<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxGrosseur" class="ChampsRecherche">
						<option value="" selected> Choix </option>
						<optgroup label="Numéro">
								<option>#9</option>
								<option>#6</option>
							</optgroup>	
							<optgroup label=" Pouce fraction">
								<option>1 11/16</option>
								<option>1 7/8</option>
								<option>2 3/8</option>
								<option>3 1/2</option>
								<option>4 1/2</option>
								<option>6 5/8</option>
								<option>1 5/16</option>
							</optgroup>
							<optgroup label="Moins d'un pouce">	
								<option>1/4</option>
								<option>3/8</option>
								<option>1/2</option>
								<option>5/16</option>
							</optgroup>
							<optgroup label="Pouce plein">
								<option>6po</option>
								<option>8po</option>
								<option>12po</option>
							</optgroup>
					</select>
				</td>
				<td>
					Longeur
				</td>
				<td>
					<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxLongeur" class="ChampsRecherche">
						<option value="" selected> Choix </option>
						<optgroup label="Pied/pouce">
								<option>6ft 6po</option>
								<option>7ft 6po</option>
								<option>8ft 6po</option>
								<option>9ft 6po</option>
								<option>10ft 3po</option>
								<option>10ft 6po</option>
							</optgroup>
							<optgroup label="Pied">
								<option>4ft</option>
								<option>5ft</option>
								<option>6ft</option>
								<option>7ft</option>
								<option>8ft</option>
								<option>9ft</option>
								<option>10ft</option>
								<option>12ft</option>
								<option>17ft</option>
								<option>21ft</option>
								<option>24ft</option>
							</optgroup>
					</select>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="Main" class="Main" align="center">
	</div>
	<div class="FeetBar" align="center"> Connecté en tant que : <?php echo $_SESSION["NomUtilisateur"]; ?></div>
</body>

</html>