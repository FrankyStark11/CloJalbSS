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
	<script src="https://use.fontawesome.com/bf0a763563.js"></script>

</head>
<body onload="showReception();">
	
	<div class="row Main">
		<div class="col-12 col-m-12">
				<div class="col-12 col-m-12 box headBox bgorange">
					<div class="col-m-10">
						<h1 class="NavBar"><?php echo $_SESSION["NomUtilisateur"]; ?> /Commande /Préparation</h1>
					</div>
					<div class="col-m-2">
						<a class="NavBar" href="/index.php/Home/MenuCommande"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

		<div class="col-3 col-m-12">
			<h4 class="CLorange">Recherche</h4><hr>
			<div class="col-12 col-m-12 box" style="height: 500px;">
				<div id="SearchBox" class="SearchBoxPiece" align="center">
					<form onreset="showReception();">
						<table class="RechercheBox">
							<tr>
								<td>
									<input class="StyleInput col-12" onkeyup="showReception();" id="SearchBoxNoPiece" type="text" placeholder="No de piece"></input>
								</td>
							</tr>
							<tr>
								<td>
									<select onchange="showReception();" id="SearchBoxCategorie" class="StyleInput col-12">
										<option selected value=""> Catégorie </option>
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
									<select onchange="showReception();" id="SearchBoxCouleur" class="StyleInput col-12">
										<option value="">Couleur</option>
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
									<select onchange="showReception();" id="SearchBoxHauteur" class="StyleInput col-12">
										<option value="" selected> Hauteur </option>
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
									<select onchange="showReception();" id="SearchBoxGrosseur" class="StyleInput col-12">
										<option value="" selected> Grosseur </option>
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
									<select onchange="showReception();" id="SearchBoxLongeur" class="StyleInput col-12">
										<option value="" selected> Longueur </option>
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
						</table>
						<button type="reset" class="BGOrange StyleBtn" style="width: 100%;">Reset</button>
					</form>	
				</div>
			</div>
		</div>
		<div class="col-5 col-m-12">
			<h4 class="CLorange">Choix possible</h4><hr>
			<div class="col-12 box overflowall" id="Main" style="height: 500px;">
			</div>
		</div>
		<div class="col-4 col-m-12">
			<h4 class="CLorange">Confirmation</h4><hr>
			<div class="col-12 box" style="height: 500px;">
				<table class="TabRepceptionHead">
					<tr>
						<td>
						<label id="DescriptionItemReception"  value="Description du produit">Description de la pièce</label>
						</td>
					</tr>
					<tr>
						<td>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<input id="IdItemReception" onkeyup="showDescription(this.value)" type="hidden" class="StyleInput col-12" placeholder="No de l'item"></input>
						</td>
					</tr>
					<tr>
						<td>
							<input id="QteItemReception" disabled type="number" style="text-align: center; font-size: 20px; font-weight: bold;" class="StyleInput col-12" placeholder="Quantité"></input>
						</td>
					</tr>
				</table>
				<table class="Pad">
					<tr>
						<td><button class="styleBtn bgorange" value="1" onclick="AddNb(this.value)">1</button></td><td><button class="styleBtn bgorange" value="2" onclick="AddNb(this.value)">2</button></td><td><button class="styleBtn bgorange" value="3" onclick="AddNb(this.value)">3</button></td>
					</tr>
					<tr>
						<td><button class="styleBtn bgorange" value="4" onclick="AddNb(this.value)">4</button></td><td><button class="styleBtn bgorange" value="5" onclick="AddNb(this.value)">5</button></td><td><button class="styleBtn bgorange" value="6" onclick="AddNb(this.value)">6</button></td>
					</tr>
					<tr>
						<td><button class="styleBtn bgorange" value="7" onclick="AddNb(this.value)">7</button></td><td><button class="styleBtn bgorange" value="8" onclick="AddNb(this.value)">8</button></td><td><button class="styleBtn bgorange" value="9" onclick="AddNb(this.value)">9</button></td>
					</tr>
					<tr>
						<td><button class="styleBtn bgorange" onclick="AddNb('CLEAR')">Vider</button></td><td><button class="styleBtn bgorange" value="0" onclick="AddNb(this.value)">0</button></td><td><button class="styleBtn bgorange" onclick="AddNb('DEL')">Retour</button></td>
					</tr>
				</table>
				<table class="TabRepceptionHead">
					<tr>
						<td>
							<button id="BtnAjouterReception" class="StyleBtn bgorange" style="width: 100%;" onclick="AddReceptionElement()"> Ajouter </button>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<form method="post" action="/index.php/Admin/InsertionCommande">
			<div class="col-6 col-m-12">
				<div  class="col-12 col-m-12 ">
					<h4 class="CLorange">Information client</h4><hr>
					<div id="LstBoxReceptionTemp"  class="col-12 col-m-12 box maxheight">
						<table class="tabplein splitdata-2">
							<tr>
								<td>Nom :</td>
								<td><input required type="text" name="NomClient" placeholder="Nom" class="styleInput col-12"></input></td>
							</tr>
							<tr>
								<td>Téléphone :</td>
								<td><input required type="number" name="TelClient" placeholder="(555)555-5555" class="styleInput col-12"></input></td>
							</tr>
						</table>
						<input type="hidden" name="LstPieces" id="HiddenArrayPiece" value="[]"></input>	
					</div>
				</div>
			</div>
			<div class="col-6 col-m-12">
				<div  class="col-12 col-m-12  ">
					<h4 class="CLorange">Résumé de la commande</h4><hr>
					<div id="LstBoxReceptionTemp"  class="col-12 col-m-12 box maxheight">
						<table id="TabItems" class="tabPlein DataSplit-4">
							<th>Numéro du produit</th>
							<th>Description</th>
							<th>Quantité</th>
							<th>Action</th>
						</table>	
					</div>
				</div>
			</div>
			<div class="col-12 col-m-12  " style="height: 450px;">
				<div  class="col-12 col-m-12 box ">
					<button class="StyleBtn bgorange" style="width: 100%;" id="BtnEnvoyer" value="Rechercher"> Placer la commande </button>
				</div>
			</div>
		</form>

	</div>		
</body>
</html>