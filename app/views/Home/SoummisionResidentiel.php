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
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body >
	<div class="Header" >	
		<ul class="NavBar">
			<li ><a class="NavBar" href="/index.php/Admin/RetourMenu"><img class="ConfigImage" src="/images/icon/exit-icon.png"></a>
			</li>
		</ul>
	</div>
	<div id="Main" class="Main" align="center">
		<h2>Nouvelle soumission résidentiel</h2>
		<h3>Information du projet</h3>
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

		<br>
		<h3>Information du client</h3>
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

		<br>
		<h3>Spécification</h3>

		<table class="TabSoumissionPOTP">
			<tr>
				<th>POTP</th>
				<th>4ft</th>
				<th>5ft</th>
				<th>6ft</th>
			</tr>
			<tr>
				<td>QTE</td>
				<td><input type="number" id="QtePotp4ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(4)" onchange="AjoutPOTP(4)" placeholder="QTE"></input></td>
				<td><input type="number" id="QtePotp5ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(5)" onchange="AjoutPOTP(5)" placeholder="QTE"></input></td>
				<td><input type="number" id="QtePotp6ft" min="0" pattern="[0-9]*" onkeyup="AjoutPOTP(6)" onchange="AjoutPOTP(6)" placeholder="QTE"></input></td>
			</tr>
			<tr>
				<th>KITS</th>
				<th>4ft</th>
				<th>5ft</th>
				<th>6ft</th>
			</tr>
			<tr>
				<td>QTE</td>
				<td><input type="number" id="QteKit4ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(4)" onchange="AjoutKit(4)" placeholder="QTE"></input></td>
				<td><input type="number" id="QteKit5ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(5)" onchange="AjoutKit(5)" placeholder="QTE"></input></td>
				<td><input type="number" id="QteKit6ft" min="0" pattern="[0-9]*" onkeyup="AjoutKit(6)" onchange="AjoutKit(6)" placeholder="QTE"></input></td>
			</tr>
		</table>

		<br>
		<h3>Ajout d'une section</h3>
		<table class="TabSoumission">
			<tr>
				<td>
					Longeur 
				</td>
				<td>
					<input type="number" title="Longueur de la section en cours" name="TxtLongueurSectionSR" id="TxtLongueurSectionSR" pattern="[0-9]*" min="0" placeholder="Longeur"></input>
				</td>
			</tr>
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
					<select id="TxtTypeSectionSR" title="Type de section" name="TxtTypeSectionSR">
						<option value="Porte simple">Porte simple</option>
						<option value="Porte double">Porte double</option>
						<option value="Cloture" selected>Clôture</option>
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

		<br>
		<h3>Sections actuels</h3>
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
					prix
				</th>
				<th>
					Action
				</th>
			</tr>
		</table>

		<br>
		<h3>Résumé des pièces avec quantité</h3>
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
				<th>
					Prix
				</th>
			</tr>
		</table>

		<!--<div id="container">
			<canvas id="imageView" width="600" height="500"></canvas>
		</div>-->

		<br>
		<h3>Prix final</h3>
		<div class="divSections">
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
				<td>
					0$ 
				</td>
			</tr>
			<tr>
				<td>
					Temps 
				</td>
				<td>
					0$ 
				</td>
			</tr>
		</table>
		</div>

		<h3>Sous total</h3> 
		<h2>576.00$</h2>

		<h4>TPS 57.60$</h4>
		<h4>TVQ 40.30$</h4>

		<h3>Grand total </h3>
		 <h1>672.32$</h1>
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
		<!--<div id="container"><canvas id="imageView" width="600" height="500"><p>Unfortunately, your browser is currently unsupported by our web application. We are sorry for the inconvenience. Please use one of the supported browsers listed below, or draw the image you want using an offline tool.</p><p>Supported browsers: <a href="http://www.opera.com">Opera</a>, <a href="http://www.mozilla.com">Firefox</a>, <a href="http://www.apple.com/safari">Safari</a>, and <a href="http://www.konqueror.org">Konqueror</a>.</p></canvas></div>-->
</body>

</html>