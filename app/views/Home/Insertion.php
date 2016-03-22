<?php
//session_start();
	//si une fausse accès à la page, on le kick
	//if($_SESSION["NomUser"] != "Administrateur"){
		//header("Refresh:0; ../Home/Login");
	//}
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
		
			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li class="NavBar"><a class="Navbar" href="/index.php/Home/Accueil">Inventaire</a></li>';}

			if(isset($_SESSION["TypeCompte"]) && $_SESSION["TypeCompte"] == 1){
				echo '<li class="NavBar"><a class="Selected" href="/index.php/Home/InventaireInsertion">Insertion</a></li>';
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Reception">Réception</a></li>';
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Reception">Configuration</a></li>';
			}

			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li class="NavBar" ><a class="NavBar" href="/index.php/Admin/TerminerSession">Déconnexion</a></li>';}
				else{ echo '<li class="NavBar" ><a class="NavBar" href="/index.php/Home/Login">Connexion</a></li>';}
			 ?>
		</ul>	
	</div>
	<div id="Main" class="Main" align="center">
	<h1>Nouvelle pièce</h1>
		<form id="FormInsertion" method="get" onsubmit="return validateFormInsertion()" action="/index.php/Admin/Insertion">
			<table class="InsertionTable">
				<tr>
					<td>
						No Piece
					</td>
					<td>
						<input id="TxtInsertionPieceId" name="txtNoId" type="text" placeholder="No de piece"></input>
					</td>
				</tr>
				<tr>
					<td>
						Description
					</td>
					<td>
						<textarea id="TxtInsertionDescription" name="txtDesc" rows="5" cols="50" placeholder="Description courte de la piece"></textarea> 
						<small>Caractère interdit <br> { " , ' , _ }</small>
					</td>
				</tr>
				<tr>
					<td>
						Couleur
					</td>
					<td>
						<select id="SelectInsertionCouleur" name="txtCouleur" value="NA">
							<option disabled selected >Choix</option>
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
				</tr>
				<tr>
					<td>
						Hauteur
					</td>
					<td>
						<select id="SelectInsertionHauteur" name="txtHauteur" value="NA">
							<option disabled selected > Choix</option>
							<option>NA</option>
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
						Longeur
					</td>
					<td>
						<select id="SelectInsertionLongeur" name="txtLongeur" value="NA">
							<option disabled selected > Choix</option>
							<option>NA</option>
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
						<select id="SelectInsertionGrosseur" name="txtGrosseur" value="NA">
							<option disabled selected > Choix</option>
							<option>NA</option>
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
						<select id="SelectInsertionCategorie" name="txtCategorie" value="NA">
							<option disabled selected> Choix </option>
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
						<input id="TxtInsertionQuantite" name="txtQte" type="number" placeholder="Quantitée"></input>
					</td>
				</tr>
				<tr>
					<td>
						Prix coutant
					</td>
					<td>
						<input id="TxtInsertionPrixCoutant" name="txtPrixCoutant" pattern="[0-9]*" type="number" placeholder="Prix cost"></input>
					</td>
				</tr>
				<tr>
					<td>
						Prix client
					</td>
					<td>
						<input id="TxtInsertionPrixClient" name="txtPrixClient" pattern="[0-9]*" type="number" placeholder="Prix client"></input>
					</td>
				</tr>
				<tr>
					<td>
						Prix Contracteur
					</td>
					<td>
						<input id="TxtInsertionPrixContracteur" name="txtPrixContracteur" pattern="[0-9]*" type="number" placeholder="Prix contracteur"></input>
					</td>
				</tr>
			</table>
		<button class="BtnRecherche" value="Rechercher"> Ajouter </input>
		</form>
	</div>
</body>

</html>