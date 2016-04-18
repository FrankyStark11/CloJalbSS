<?php
//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == "" || $_SESSION["TypeCompte"] == 2){
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

<body>
	<a href="/index.php/Home/MenuInventaire">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
	<div id="Main" class="Main">
	<div class="row">
		<div class="col-3 col-m-12"></div>
		<div class="col-6 col-m-12">
			<h4 class="CLOrange">Insertion d'une nouvelle piece</h4><hr>
			<div class="col-12 col-m-12 box">
				<form id="FormInsertion" method="get" onsubmit="return validateFormInsertion()" action="/index.php/Admin/Insertion">
				<table class="InfoPiece">
					<tr>
						<td>
							No Piece
						</td>
						<td>
							<input class="StyleInput col-12" title="Numéro de la pièce" id="TxtInsertionPieceId" name="txtNoId" type="text" placeholder="No de piece"></input>
						</td>
					</tr>
					<tr>
						<td>
							Description
						</td>
						<td>
							<input class="StyleInput col-12" type="text" id="TxtInsertionDescription" title="Caractère interdit 
	   			'  _  # " name="txtDesc" placeholder="Description courte de la piece"></input>
						</td>
					</tr>
					<tr>
						<td>
							Couleur
						</td>
						<td>
							<select class="StyleInput col-12" title="Couleur" id="SelectInsertionCouleur" name="txtCouleur" value="N/A">
								<option disabled selected value="N/A" >Choix</option>
								<optgroup label="Résidentiel">
									<option>Noir</option>
									<option>Blanc</option>
									<option>Brun</option>
									<option>Taupe</option>
									<option>Vert</option>
								</optgroup>
								<optgroup label="Commercial">
								<option>Galvanisé</option>
								<option>Aluminium</option>
								<option>Nylon</option>
								<option>Acier</option>
								</optgroup>
								<optgroup label="Autre">
								<option>Beton</option>
								</optgroup>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Hauteur
						</td>
						<td>
							<select class="StyleInput col-12" title="Hauteur" id="SelectInsertionHauteur" name="txtHauteur" value="N/A">
								<option disabled selected value="N/A"> Choix</option>
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
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Longeur
						</td>
						<td>
							<select class="StyleInput col-12" title="Longueur" id="SelectInsertionLongeur" name="txtLongeur" value="N/A">
								<option disabled selected value="N/A"> Choix</option>
								<option>N/A</option>
								<optgroup label="Pied/pouce">
									<option>6ft 6po</option>
									<option>7ft 6po</option>
									<option>8ft 6po</option>
									<option>9ft 6po</option>
									<option>10ft 6po</option>
									<option>11ft 6po</option>
									<option>12ft 6po</option>
									<option>14ft 6po</option>
								</optgroup>
								<optgroup label="Pouce">
									<option>6po</option>
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
							<select class="StyleInput col-12" title="Grosseur" id="SelectInsertionGrosseur" name="txtGrosseur" value="N/A">
								<option disabled selected value="N/A"> Choix</option>
								<option>N/A</option>
								<optgroup label="Numéro">
									<option>no9</option>
									<option>no6</option>
								</optgroup>	
								<optgroup label=" Pouce fraction">
									<option>1 11/16</option>
									<option>1 7/8</option>
									<option>2 3/8</option>
									<option>2 7/8</option>
									<option>3 1/2</option>
									<option>4 1/2</option>
									<option>6 5/8</option>
									<option>1 5/16</option>
								</optgroup>
								<optgroup label="Moins d'un pouce">	
									<option>1/4</option>
									<option>3/8</option>
									<option>3/4</option>
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
							<select class="StyleInput col-12" title="Catégorie" id="SelectInsertionCategorie" name="txtCategorie" value="N/A">
								<option disabled selected value="N/A"> Choix </option>
								<option > N/A </option>
							<optgroup label="oz">
								<option>1,2oz</option>
							</optgroup>
							<optgroup label="Grad">
								<option>.100</option>
								<option>.120</option>
								<option>.125</option>
								<option>.134</option>
								<option>.145</option>
								<option>.154</option>
								<option>.203</option>
								<option>.216</option>
								<option>.237</option>
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
								<option>Grillage 2Xno9</option>
							</optgroup>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Quantitée
						</td>
						<td>
							<input class="StyleInput col-12" title="Quantité en stock" id="TxtInsertionQuantite" name="txtQte" pattern="[0-9]*" type="number" placeholder="Quantitée"></input>
						</td>
					</tr>
					<tr>
						<td>
							Prix coutant
						</td>
						<td>
							<input class="StyleInput col-12" title="Prix coutant" id="TxtInsertionPrixCoutant" name="txtPrixCoutant" step="any" pattern="[0-9]*" type="number" placeholder="Prix cost"></input>
						</td>
					</tr>
				</table>
				<button class="BtnRecherche" title="Ajouter la pièce" value="Rechercher"> Ajouter </input>
				</form>
			</div>
		</div>
		<div class="col-3 col-m-12"></div>
	</div>
	</div>
</body>

</html>