<?php
	//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == "" || $_SESSION["TypeCompte"] == 2){
		header("Refresh:0; ../Home/Login");
	}
	$Data = json_decode($_GET["JSONParam"]);
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
	<div id="Main" class="Main">
		<div class="row">
			<div class="col-12 col-m-12">
				<div class="col-10 col-m-10 box headBox bgorange">
					<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Inventaire /Consulter /Modifier <?php echo $Data[0]->InvNoId; ?></h1>
				</div>
				<div class="col-2 col-m-2 box headBox" align="center">
					<a href="/index.php/Home/Accueil"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
				</div>
		</div>
			<div class="col-3 col-m-12"></div>
			<div class="col-6 col-m-12">
				<h4 class="CLOrange">Modification des données</h4><hr>
				<div class="box col-12 col-m-12">
					<form method="get" accept-charset="UTF-8" onsubmit="return validateFormModification()" action="/index.php/Admin/Modification" >
						<table class="InfoPiece">
							<tr>
								<td>
									No Piece
								</td>
								<td>
									<input name="txtNoId" class="StyleInput col-12" id="txtNoId" value=<?php echo $Data[0]->InvNoId; ?> type="text" placeholder="No de piece"></input>
								</td>
							</tr>
							<tr>
								<td>
									Description
								</td>
								<td>
									<input type="text" class="StyleInput col-12" name="txtDesc" value='<?php print_r($Data[0]->InvDesc); ?>' title="Caractère interdit 
			   			'  _  # " id="txtDesc" placeholder="Description courte de la piece"></input>
								</td>
							</tr>
							<tr>
								<td>
									Couleur
								</td>
								<td>
									<select class="StyleInput col-12" id="SelectModifCouleur" name="txtCouleur">
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
										<option value="Aluminium">Aluminium</option>
										<option value="Nylon" >Nylon</option>
										<option value="Acier" >Acier</option>
										</optgroup>
										<optgroup label="Autre">
										<option value="Beton">Beton</option>
										</optgroup>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Hauteur
								</td>
								<td>
									<select class="StyleInput col-12" id="SelectModifHauteur" name="txtHauteur" >
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
									<select class="StyleInput col-12" id="SelectModificationLongeur" name="txtLongeur">
										<optgroup label="Choix actuel">
											<option value='<?php echo $Data[0]->InvLongeur; ?>'><?php echo $Data[0]->InvLongeur; ?></option>
										</optgroup>
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
									<select class="StyleInput col-12" id="SelectModifGrosseur" name="txtGrosseur">
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
									Catégorie
								</td>
								<td>
									<select class="StyleInput col-12" id="SelectModifCategorie" name="txtCategorie">
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
										<option>Grillage 2X#9</option>
									</optgroup>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Quantité
								</td>
								<td>
									<input class="StyleInput col-12" id="TxtModifQuantite" name="txtQte" type="number" placeholder="Quantitée" value=<?php echo $Data[0]->InvQte; ?>></input>
								</td>
							</tr>
							<tr>
								<td>
									Prix coutant
								</td>
								<td>
									<input class="StyleInput col-12" style="width: 100%;" name="txtPrixCoutant" id="TxtModifPrixCoutant" pattern="[0-9]*"  step="any" type="number" placeholder="Prix cost" value=<?php echo $Data[0]->InvPrixCoutant; ?>></input>
								</td>
							</tr>
						</table>
						<button class="BtnRecherche" value="Rechercher"> Modifier </input>
					</form>
				</div>
			<div class="col-3 col-m-12"></div>
		</div>
	</div>
</body>

</html>