<?php
	$Data = json_decode($_GET["JSONParam"]);
?>
<html>
<head>

	<title>Inventaire Clôture Jalbert</title>
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
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Reception"><img class="ConfigImage" src="/images/icon/reception-icon.png"></a></li>';
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Log"><img class="ConfigImage" src="/images/icon/Log-icon.png"></a></li>';
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Configuration"><img class="ConfigImage" src="/images/icon/Gear-icon.png"></a></li>';
			}


			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li class="NavBar" ><a class="NavBar" href="/index.php/Admin/TerminerSession"><img class="ConfigImage" src="/images/icon/exit-icon.png"></a></li>';}
				else{ echo '<li class="NavBar" ><a href="/index.php/Home/Login">Connexion</a></li>';}
			 ?>
		</ul>	
	</div>
	<div id="Main" class="Main" align="center">
		<h1>Modification des données</h1>
		<form method="get" onsubmit="return validateFormModification()" action="/index.php/Admin/Modification" >
			<table class="InsertionTable">
				<tr>
					<td>
						No Piece
					</td>
					<td>
						<input name="txtNoId" id="txtNoId" value=<?php echo $Data[0]->InvNoId; ?> type="text" placeholder="No de piece"></input>
					</td>
				</tr>
				<tr>
					<td>
						Description
					</td>
					<td>
						<textarea name="txtDesc" id="txtDesc" rows="5" cols="50" placeholder="Description courte de la piece"><?php echo $Data[0]->InvDesc; ?>
						</textarea> 
						<small>Caractère interdit <br> { " , ' , _ }</small>
					</td>
				</tr>
				<tr>
					<td>
						Couleur
					</td>
					<td>
						<select id="SelectModifCouleur" name="txtCouleur">
							<optgroup label="Choix actuel">
								<option value=<?php echo $Data[0]->InvCouleur; ?>><?php echo $Data[0]->InvCouleur; ?></option>
							</optgroup>
							<optgroup label="Résidentiel">
								<option value="Noir">Noir</option>
								<option value="Blanc">Blanc</option>
								<option value="Brun">Brun</option>
								<option value="Taupe">Taupe</option>
								<option value="Vert">Vert</option>
							</optgroup>
							<optgroup label="Commercial">
							<option value="Galvanisé">Galvanisé</option>
							</optgroup>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Hauteur
					</td>
					<td>
						<select id="SelectModifHauteur" name="txtHauteur" >
						<optgroup label="Choix actuel">
							<option value=<?php echo $Data[0]->InvHauteur; ?>><?php echo $Data[0]->InvHauteur; ?></option>
						</optgroup>
						<optgroup label="Hauteur">
							<option>N/A</option>
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
						</optgroup>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Longeur
					</td>
					<td>
						<select id="SelectModificationLongeur" name="txtLongeur">
							<optgroup label="Choix actuel">
								<option value=<?php echo $Data[0]->InvLongeur; ?>><?php echo $Data[0]->InvLongeur; ?></option>
							</optgroup>
							<option>N/A</option>
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
				<tr>
					<td>
						Grosseur
					</td>
					<td>
						<select id="SelectModifGrosseur" name="txtGrosseur">
							<optgroup label="Choix actuel">
								<option><?php echo $Data[0]->InvGrosseur; ?></option>
							</optgroup>
							<option>N/A</option>
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
				</tr>
				<tr>
					<td>
						Categorie
					</td>
					<td>
						<select id="SelectModifCategorie" name="txtCategorie">
						<optgroup label="Choix actuel">
							<option value=<?php echo $Data[0]->InvCategorie; ?>><?php echo $Data[0]->InvCategorie; ?></option>
						</optgroup>
							<option > N/A </option>
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
				<tr>
					<td>
						Quantitée
					</td>
					<td>
						<input id="TxtModifQuantite" name="txtQte" type="number" placeholder="Quantitée" value=<?php echo $Data[0]->InvQte; ?>></input>
					</td>
				</tr>
				<tr>
					<td>
						Prix coutant
					</td>
					<td>
						<input name="txtPrixCoutant" id="TxtModifPrixCoutant" pattern="[0-9]*" type="number" placeholder="Prix cost" value=<?php echo $Data[0]->InvPrixCoutant; ?>></input>
					</td>
				</tr>
			</table>
		<button class="BtnRecherche" value="Rechercher"> Modifier </input>
		</form>
	</div>
</body>

</html>