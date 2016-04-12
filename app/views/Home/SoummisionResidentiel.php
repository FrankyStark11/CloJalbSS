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
	<meta name="viewport" content="width=device-width, initial-scale=0.8" />
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body >	
	<a href="/index.php/Home/MenuSoumission">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
	<div class="row" align="center">

			<input type="hidden" id="HiddenArrayPiece" value="[]"></input>
			<input type="hidden" id="HiddenArraySection" value="[]"></input>
	<div class="col-12 col-m-12 box" align="center">
		<h2>Nouvelle soumission résidentiel</h2>
	</div>

	<div class="col-6 col-l-4 col-m-12 " align="center">

		<div class="col-12 col-m-12 box" align="center">
			<h3 onclick=" HideDivSR('DivSR1')" class="clOrange">Information du projet <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3>
			<div id="DivSR1" style="display: none;">
				<table class="TabSoumission">
					<tr>
						<td>
							Représentant
						</td>
						<td>
							<input type="text" title="Nom du représentant" name="TxtRepNomSR" id="TxtRepNomSR" placeholder="Nom"></input>
						</td>
					</tr>
					<tr>
						<td>
							Date
						</td>
						<td>
							<input type="date" title="Date du projet" name="TxtDateProjetSR" id="TxtDateProjetSR" placeholder="Date"></input>
						</td>
					</tr>
					<tr>
						<td>
							Adresse
						</td>
						<td>
							<input type="text" title="Adresse du projet" name="TxtAdresseProjetSR" id="TxtAdresseProjetSR" placeholder="adresse"></input>
						</td>
					</tr>
					<tr>
						<td>
							Ville
						</td>
						<td>
							<input type="text" title="Ville" name="TxtVilleProjetSR" id="TxtVilleProjetSR" placeholder="Ville"></input>
						</td>
					</tr>
					<tr>
						<td>
							Code postal
						</td>
						<td>
							<input type="text" title="Code postal" name="TxtCPProjetSR" id="TxtCPProjetSR" placeholder="Code postal"></input>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-12 col-m-12 box" align="center">
			<h3 onclick=" HideDivSR('DivSR2')" class="clOrange">Information du client <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3>
			<div id="DivSR2" style="display: none;">
				<table class="TabSoumission">
					<tr>
						<td>
							Prénom du client
						</td>
						<td>
							<input type="text" title="Prénom du client" name="TxtPrenomClientSR" id="TxtPrenomClientSR" placeholder="Prénom"></input>
						</td>
					</tr>
					<tr>
						<td>
							Nom du client
						</td>
						<td>
							<input type="text" title="Nom du client" name="TxtNomClientSR" id="TxtNomClientSR" placeholder="Nom"></input>
						</td>
					</tr>
					<tr>
						<td>
							Adresse
						</td>
						<td>
							<input type="text" title="Adresse du client" name="TxtAdresseClientSR" id="TxtAdresseClientSR" placeholder="adresse"></input>
						</td>
					</tr>
					<tr>
						<td>
							Ville
						</td>
						<td>
							<input type="text" title="Ville du client" name="TxtVilleClientSR" id="TxtVilleClientSR" placeholder="Ville"></input>
						</td>
					</tr>
					<tr>
						<td>
							Code postal
						</td>
						<td>
							<input type="text" title="Code postal du client" name="TxtCPClientSR" id="TxtCPClientSR" placeholder="Code postal"></input>
						</td>
					</tr>
					<tr>
						<td>
							téléphone résidentiel
						</td>
						<td>
							<input type="tel" title="Téléphone résidentiel du client" name="TxtTelReClientSR" id="TxtTelReClientSR" placeholder="téléphone"></input>
						</td>
					</tr>
					<tr>
						<td>
							téléphone cellulaire
						</td>
						<td>
							<input type="tel" title="Téléphone cellulaire du client" name="TxtTelCelClientSR" id="TxtTelCelClientSR" placeholder="téléphone"></input>
						</td>
					</tr>
					<tr>
						<td>
							téléphone Bureau
						</td>
						<td>
							<input type="tel" title="Téléphone au bureau du client" name="TxtTelBuClientSR" id="TxtTelBuClientSR" placeholder="téléphone"></input>
							
						</td>
					</tr>
					<tr>
						<td>
							poste
						</td>
						<td>
							<input type="number" min="0" pattern="[0-9]*" title="Numéro de poste au bureau" name="TxtPosteClientSR" id="TxtPosteClientSR" placeholder="poste"></input>
						</td>
					</tr>
					<tr>
						<td>
							téléphone fax
						</td>
						<td>
							<input type="tel" title="Téléphone fax du client" name="TxtFaxClientSR" id="TxtFaxClientSR" placeholder="téléphone"></input>
						</td>
					</tr>
					<tr>
						<td>
							Courriel
						</td>
						<td>
							<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Adresse courriel du client" name="TxtMailClientSR" id="TxtMailClientSR" placeholder="Email@Email.com"></input>
						</td>
					</tr>
				</table>
			</div>
		</div>
	
	</div>
	<div class="col-6 col-l-4 col-m-12 " align="center">

		<div class="col-12 col-m-12 box" align="center">
			<h3 onclick=" HideDivSR('DivSR3')" class="clOrange">Spécification <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3>
			<div id="DivSR3" style="display: none;">

				<h4>Couleur</h4>
				<table class="TabSoumission">
					<tr>
					<td>Couleur pour le projet</td>
					<td>
						<select title="Couleur" id="SelectCouleurSR" onchange="OnColorChange()" name="txtCouleur" >
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
				<h4>Éléments individuel</h4>
				<table class="TabSoumissionPOTP">
					<tr>
						<th>POTP</th>
						<th>4ft</th>
						<th>5ft</th>
						<th>6ft</th>
					</tr>
					<tr>
						<td>QTE</td>
						<td><input type="number" id="QtePotp4ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(4)"  placeholder="QTE"></input></td>
						<td><input type="number" id="QtePotp5ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(5)"  placeholder="QTE"></input></td>
						<td><input type="number" id="QtePotp6ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(6)"  placeholder="QTE"></input></td>
					</tr>
					<tr>
						<th>KITS</th>
						<th>4ft</th>
						<th>5ft</th>
						<th>6ft</th>
					</tr>
					<tr>
						<td>QTE</td>
						<td><input type="number" id="QteKit4ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(4)" placeholder="QTE"></input></td>
						<td><input type="number" id="QteKit5ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(5)" placeholder="QTE"></input></td>
						<td><input type="number" id="QteKit6ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(6)" placeholder="QTE"></input></td>
					</tr>
				</table>
				<h4>Béton</h4>
				<table class="TabSoumission">
					<tr>
					<td>Trou de béton</td>
					<td>
						<input id="betontxt" type="number" placeholder="qte" min="0" pattern="[0-9]*" onkeyup="AjouterBeton(this.value)"></input>
					</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-12 col-m-12 box" align="center">
			<h3 onclick=" HideDivSR('DivSR4')" class="clOrange">Ajout d'une section <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3>
			<div id="DivSR4" style="display: none;">
				<table class="TabSoumission">
					<tr>
						<td>
							Hauteur 
						</td>
						<td>
							<select title="Hauteur de la section" min="0" name="TxtHauteurSectionSR" id="TxtHauteurSectionSR" >
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
							<select id="TxtTypeSectionSR" title="Type de section" onchange="AfficherChampsSection(this.value)" name="TxtTypeSectionSR">
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
							<input type="number" title="Longueur de la section en cours" name="TxtLongueurSectionSR" id="TxtLongueurSectionSR" pattern="[0-9]*" min="0" placeholder="Longeur"></input>
						</td>
					</tr>
					<tr id="LongeurPorte" style="display: none;">
						<td>Dimention de porte</td>
						<small>Pour les portes doubles inscrire seulement la dimention d'une porte</small>
						<td>
							<select title="Dimention" id="SelectDimentionporteSR" >
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
							
							 <select title="Avec lattes intimitées" id="checkLatteSR" >
									<option value="true" >oui</option>
									<option value="false" selected>non</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							 
						</td>
						<td>
							<button title="Ajouter la section" onclick="AjouterSectionRow()">Ajouter</button>
						</td>
					</tr>
				</table>
			</div>
		</div>

	</div>
	<div class="col-6 col-l-4 col-m-12 " align="center">

		<div class="col-12 col-m-12 box" align="center">
			<h3 onclick=" HideDivSR('DivSR5')" class="clOrange">Sections actuels <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3>
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

		<div class="col-12 col-m-12 box overflowAll" align="center">
			<h3 onclick=" HideDivSR('DivSR6')" class="clOrange">Résumé des pièces avec quantité <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3>
			<div id="DivSR6" style="display: none;">
				<table id="TabPieces" class="TabInfoSection">
					<tr>
						<th>
							No piece 
						</th>
						<th>
							Quantité requis
						</th>
						<th>
							Quantité en stock
						</th>
						<th>
							Description
						</th>
					</tr>
				</table>
			</div>
		</div>

	</div>
	<!--<div class="col-12 col-m-12 box" align="center">
		<h3 class="clOrange" onclick=" HideDivSR('DivSR8')">Croquis <img id="arrSR3" style="width: 12px;height: 12px;" src="/images/icon/arrow-icon.png"></h3>
		<div id="DivSR8" style="display: block;">

			<div id="sketch">
				<canvas id="paint"></canvas>
			</div>
			<script type="text/javascript">
				var canvas = document.querySelector('#paint');
				var ctx = canvas.getContext('2d');
				 
				var sketch = document.querySelector('#sketch');
				var sketch_style = getComputedStyle(sketch);
				canvas.width = parseInt(sketch_style.getPropertyValue('width'));
				canvas.height = parseInt(sketch_style.getPropertyValue('height'));



				var mouse = {x: 0, y: 0};
				var start_mouse = {x: 0, y: 0};
				var last_mouse = {x: 0, y: 0};
 
				/* Mouse Capturing Work */
				canvas.addEventListener('mousemove', function(e) {
					last_mouse.x = mouse.x;
    				last_mouse.y = mouse.y;

				  	mouse.x = e.pageX - this.offsetLeft;
				  	mouse.y = e.pageY - this.offsetTop;
				}, false);

								/* Drawing on Paint App */
				ctx.lineWidth = 2;
				ctx.lineJoin = 'round';
				ctx.lineCap = 'round';
				ctx.strokeStyle = 'black';
				 
				canvas.addEventListener('mousedown', function(e) {
				    ctx.beginPath();
				    ctx.moveTo(mouse.x, mouse.y);
				 
				    canvas.addEventListener('mousemove', onPaint, false);
				}, false);
				 
				canvas.addEventListener('mouseup', function() {
				    canvas.removeEventListener('mousemove', onPaint, false);
				}, false);
				 
				var onPaint = function() {
				    ctx.beginPath();
				    ctx.moveTo(last_mouse.x, last_mouse.y);
				    ctx.lineTo(mouse.x, mouse.y);
				    ctx.closePath();
				    ctx.stroke();
				};
			</script>
		<button class="BtnAjoutReception">Ajouter</button>
		</div>
	</div>-->
	<div class="col-12 col-m-12 box" align="center">
			<h3 class="btnAjouter">Prix final</h3>
			<div class="col-6 col-m-6">
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
					<tr>
						<td>prix par pied ( temps ) </td>
						<td><input onkeyup="CalculPrix()" type="text" id="PrixPiedTemps" placeholder="Prix" value="5"></input></td>
					</tr>
					<tr>
						<td>prix par pied ( matériel ) </td>
						<td><input onkeyup="CalculPrix()" type="text" id="PrixPiedMateriel" placeholder="Prix" value="5"></input></td>
					</tr>
					<tr>
						<td>prix par poteaux principaux </td>
						<td><input onkeyup="CalculPrix()" type="text" id="PrixPoteau" placeholder="Prix" value="45"></input></td>
					</tr>
					<tr>
						<td>prix par sac lattes </td>
						<td><input onkeyup="CalculPrix()" type="text" id="PrixLatte" placeholder="Prix" value="40"></input></td>
					</tr>
					<tr>
						<td>prix pose lattes </td>
						<td><input onkeyup="CalculPrix()" type="text" id="PrixposeLatte" placeholder="Prix" value="2"></input></td>
					</tr>
				</table>
			</div>
			<div class="col-6 col-m-6">
				<table class="TabInfoSection">
					<tr>
						<th>
							Produit 
						</th>
						<th>
							Prix 
						</th>
					</tr>
					<tr>
						<td>
							Matériel 
						</td>
						<td id="TotalMaterielPrix">
							0.00$ 
						</td>
					</tr>
					<tr>
						<td>
							Temps 
						</td>
						<td id="TotalTempsPrix">
							0.00$ 
						</td>
					</tr>
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
				<h1 id="GrandTotal"> 0.00$ </h1>
			</div>
				<table class="TabFeet">
					<tr>
						<td>
							<button class="Confirmer">Enregistrer</button> 
						</td>
						<td>
							<button class="Annuler">Annuler</button>
						</td>
					</tr>
				</table>
	</div>

	</div>
</body>

</html>