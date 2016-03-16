<?php
//session_start();
	//si une fausse accès à la page, on le kick
	//if($_SESSION["NomUser"] != "Administrateur"){
		//header("Refresh:0; ../Tools/AccesRefuse");
	//}
	//$Inv = $data['LstInventaire'];
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
			<li class="NavBar"><a class="NavBar" href="/index.php/Home/Accueil">Inventaire</a></li>
			<li class="NavBar"><a class="Selected" href="/index.php/Home/InventaireInsertion">Insertion</a></li>
			<li class="NavBar"><a class="NavBar" href="/index.php/Home/Reception">Réception</a></li>
			<li class="NavBar" ><a class="NavBar" href="/index.php/Home/Login">Connexion</a></li>
		</ul>	
	</div>
	<div id="Main" class="Main" align="center">
		<form method="get" action="/index.php/Admin/Insertion" >
			<table class="InsertionTable">
				<tr>
					<td>
						No Piece
					</td>
					<td>
						<input name="txtNoId" type="text" placeholder="No de piece"></input>
					</td>
				</tr>
				<tr>
					<td>
						Description
					</td>
					<td>
						<textarea name="txtDesc" rows="5" cols="50" placeholder="Description courte de la piece"></textarea> 
						<small>Caractère interdit <br> { " , ' , _ }</small>
					</td>
				</tr>
				<tr>
					<td>
						Couleur
					</td>
					<td>
						<select name="txtCouleur" >
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
						<select name="txtHauteur" >
							<option disabled selected > Choix</option>
							<option>NA</option>
							<option>4ft</option>
							<option>6ft</option>
							<option>8ft</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Longeur
					</td>
					<td>
						<select name="txtLongeur" >
							<option disabled selected > Choix</option>
							<option>NA</option>
							<option>10ft 0po</option>
							<option>21ft 0po</option>
							<option>24ft 0po</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Grosseur
					</td>
					<td>
						<select name="txtGrosseur" >
							<option disabled selected > Choix</option>
							<option>NA</option>
							<option>#9</option>
							<option>#6</option>
							<option>1 11/16</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Categorie
					</td>
					<td>
						<select name="txtCategorie" >
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
						<input name="txtQte" type="number" placeholder="Quantitée"></input>
					</td>
				</tr>
				<tr>
					<td>
						Prix coutant
					</td>
					<td>
						<input name="txtPrixCoutant" pattern="[0-9]*" type="number" placeholder="Prix cost"></input>
					</td>
				</tr>
				<tr>
					<td>
						Prix client
					</td>
					<td>
						<input name="txtPrixClient" pattern="[0-9]*" type="number" placeholder="Prix client"></input>
					</td>
				</tr>
				<tr>
					<td>
						Prix Contracteur
					</td>
					<td>
						<input name="txtPrixContracteur" pattern="[0-9]*" type="number" placeholder="Prix contracteur"></input>
					</td>
				</tr>
			</table>
		<button class="BtnRecherche" value="Rechercher"> Ajouter </input>
		</form>
	</div>
</body>

</html>