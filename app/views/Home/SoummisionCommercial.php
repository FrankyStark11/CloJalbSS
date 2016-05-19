<?php
	//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == ""){
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

<body>
	<div id="Main" class="Main">
		<div class="row" >
		<form method="post" action="/index.php/Admin/EnregistrerDossier">
			<input type="hidden" name="LstPieces" id="HiddenArrayPiece" value="[]"></input>
			<input type="hidden" id="HiddenArraySection" value="[]"></input>
			<input type="hidden" name="TypeDossier" value="Résidentiel"></input>
			<div class="col-12 col-m-12">
				<div class="col-12 col-m-12 box headBox bgorange">
					<div class="col-m-10">
						<h1 class="NavBar"><?php echo $_SESSION["NomUtilisateur"]; ?> /Travaux /Nouvelle feuille commercial</h1>
					</div>
					<div class="col-m-2">
						<a class="NavBar" href="/index.php/Home/MenuSoumission"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<div class="col-6  col-m-12 " >

				<div class="col-12 col-m-12 box" >
					<h3 onclick=" HideDivSR('DivSR1')" class="clOrange">Information du projet <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3><hr>
					<div id="DivSR1" style="display: block;">
						<table class="InfoPiece">
							<tr>
								<td>
									Prénom *
								</td>
								<td>
									<input class="StyleInput col-12" type="text" title="Nom du représentant" name="TxtClientPrenomSR" id="TxtRepNomSR" placeholder="Prénom"></input>
								</td>
							</tr>
							<tr>
								<td>
									Nom *
								</td>
								<td>
									<input class="StyleInput col-12" type="text" title="Nom du représentant" name="TxtClientNomSR" id="TxtRepNomSR" placeholder="Nom"></input>
								</td>
							</tr>
							<tr>
								<td>
									Date *
								</td>
								<td>
									<input class="StyleInput col-12" type="date" title="Date du projet" name="TxtDateProjetSR" id="TxtDateProjetSR" placeholder="Date"></input>
								</td>
							</tr>
							<tr>
								<td>
									Ville *
								</td>
								<td>
									<input class="StyleInput col-12" type="text" title="Ville" name="TxtVilleProjetSR" id="TxtVilleProjetSR" placeholder="Ville"></input>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col-12 col-m-12 box" >
					<h3 onclick=" HideDivSR('DivSR3')" class="clOrange">Spécification <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3><hr>
					<div id="DivSR3" style="display: block;">
						<table class="InfoPiece">
							<tr>
							<td>Couleur pour le projet</td>
							<td>
								<select  class="StyleInput col-12" title="Couleur" id="SelectCouleurSR" onchange="OnColorChange()" name="txtCouleur" >
									<optgroup label="Résidentiel">
										<option value="NO" selected>Noir</option>
										<option value="BL">Blanc</option>
										<option value="BR">Brun</option>
										<option value="TA">Taupe</option>
										<option value="VE">Vert</option>
									</optgroup>
								</select>
							</td>
							</tr>
						</table>
						<table class="InfoPiece">
							<tr><td>POTP</td><td></td></tr>
							<tr><td>4'</td><td><input style="width: 100%" class="StyleInput " type="number" class="StyleInput" id="QtePotp4ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(4)"  placeholder="QTE"></input></td></tr>
							<tr><td>5'</td><td><input style="width: 100%" class="StyleInput " type="number" class="StyleInput" id="QtePotp5ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(5)"  placeholder="QTE"></input></td></tr>
							<tr><td>6'</td><td><input style="width: 100%" class="StyleInput " type="number" class="StyleInput" id="QtePotp6ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(6)"  placeholder="QTE"></input></td></tr>
						</table>
						<table class="InfoPiece">
							<tr><td>KIT</td><td></td></tr>
							<tr><td>4'</td><td><input style="width: 100%" class="StyleInput " type="number"  class="StyleInput" id="QteKit4ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(4)" placeholder="QTE"></input></td></tr>
							<tr><td>5'</td><td><input style="width: 100%" class="StyleInput " type="number"  class="StyleInput" id="QteKit5ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(5)" placeholder="QTE"></input></td></tr>
							<tr><td>6'</td><td><input style="width: 100%" class="StyleInput " type="number"  class="StyleInput" id="QteKit6ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(6)" placeholder="QTE"></input></td></tr>
						</table>
					</div>
				</div>

				<div class="col-12 col-m-12 box" >
					<h3 onclick=" HideDivSR('DivSR4')" class="clOrange">Ajout d'une section <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3><hr>
					<div id="DivSR4" style="display: block;">
						<table class="InfoPiece">
							<tr>
								<td>
									Hauteur 
								</td>
								<td>
									<select class="StyleInput col-12" title="Hauteur de la section" min="0" name="TxtHauteurSectionSR" id="TxtHauteurSectionSR" >
										<option selected value="4">4ft</option>
										<option value="5">5ft</option>
										<option value="6">6ft</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Type 
								</td>
								<td>
									<select class="StyleInput col-12" id="TxtTypeSectionSR" title="Type de section" onchange="AfficherChampsSection(this.value)" name="TxtTypeSectionSR">
										<option value="simple">Porte simple</option>
										<option value="double">Porte double</option>
										<option value="Cloture" selected>Clôture</option>
									</select>
								</td>
							</tr>
							<tr id="LongeurCloture">
								<td>
									Longeur 
								</td>
								<td>
									<input class="StyleInput col-12" type="number" title="Longueur de la section en cours" name="TxtLongueurSectionSR" id="TxtLongueurSectionSR" pattern="[0-9]*" min="0" placeholder="Longeur"></input>
								</td>
							</tr>
							<tr id="LongeurPorte" style="display: none;">
								<td>Dimention de porte</td>
								<small>Pour les portes doubles inscrire seulement la dimention d'une porte</small>
								<td>
									<select class="StyleInput col-12" title="Dimention" id="SelectDimentionporteSR" >
										<optgroup label="Résidentiel">
											<option value="42" selected>42 po</option>
											<option value="48">48 po</option>
											<option value="60">60 po</option>
										</optgroup>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Lattes 
								</td>
								<td>
									
									 <select class="StyleInput col-12" title="Avec lattes intimitées" id="checkLatteSR" >
											<option value="true" >oui</option>
											<option value="false" selected>non</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									 
								</td>
								<td>
									<input type="button" value="Ajouter" class="StyleBtn bgorange col-12" title="Ajouter la section" onclick="AjouterSectionRow()"></input>
								</td>
							</tr>
						</table>
					</div>
				</div>

			</div>

			<div class="col-6  col-m-12 " >

				<div class="col-12 col-m-12 box boxMaxHeigth" >
					<h3 onclick=" HideDivSR('DivSR5')" class="clOrange">Sections actuels <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3><hr>
					<div id="DivSR5" style="display: none;">
						<table class="TabInfoSection" id="TabSections">
							<tr>
								<th>
									Longueur 
								</th>
								<th>
									type 
								</th>
								<th>
									Hauteur
								</th>
								<th>
									Lattes
								</th>
								<th>
									Action
								</th>
							</tr>
						</table>
					</div>
				</div>

				<div class="col-12 col-m-12 box boxMaxHeigth overflowAll" >
					<h3 onclick=" HideDivSR('DivSR6')" class="clOrange">Résumé des pièces avec quantité <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3><hr>
					<div id="DivSR6" style="display: none;">
						<table id="TabPieces" class="TabInfoSection">
							<tr>
								<th>
									No piece 
								</th>
								<th>
									Quantité
								</th>
								<th>
									Prix cost
								</th>
								<th>
									Description
								</th>
							</tr>
						</table>
					</div>
				</div>

				<div class="col-12 col-m-12 box" >
					<h3 onclick=" HideDivSR('DivSR9')" class="clOrange">Résumé du projet <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3><hr>
					<div id="DivSR9" style="display: block;">
						<input type="hidden" id="PiedLineaireHidden" name="PiedLineaireHidden" value="0"></input>
						<input type="hidden" id="PoteauTotalHidden" name="PoteauTotalHidden" value="0"></input>
						<table class="TabSoumission">
							<tr>
								<td>Pied linéaire total</td>
								<td id="PiedLineaire"> 0 ft</td>
							</tr>
							<tr>
								<td>Poteau total</td>
								<td id="PoteauTotal"> 0 poteau(x)</td>
							</tr>
							<tr>
								<td>Sac latte total</td>
								<td id="latteTotal"> 0 sac(s)</td>
							</tr>
						</table>

						<table class="TabInfoSection">
							<tr>
								<td>
									Sous total
								</td>
								<td id="SousTotal">
									0.00$
								</td>
							</tr>
							<tr>
								<td>
									TPS
								</td>
								<td id="TPS">
									0.00$
								</td>
							</tr>
							<tr>
								<td>
									TVQ
								</td>
								<td id="TVQ">
									0.00$
								</td>
							</tr>
						</table>
						<h1>Total </h1>
						<input type="hidden" id="GrandTotalHidden" name="ValeurTotal" value="0.00"></input>
						<h1 id="GrandTotal"> 0.00$ </h1>
					</div>
				</div>
			</div>

			<div class="col-12 col-m-12 ">
				<div class="col-12 col-m-12 box">
					<table class="TabFeet">
						<tr>
							<td>
								<button type="submit" class="StyleBtn bgGreen">Enregistrer</button> 
							</td>
						</tr>
					</table>
				</div>	
			</div>

		</form>
	</div>
	</div>
</body>

</html>