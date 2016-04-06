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
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body>
	<a class="NavBar" href="/index.php/Admin/RetourMenu"><img style="float: right; width: 50px;height: 50px;" title="Retour au menu" class="ConfigImage" src="/images/icon/exit-icon.png"></a>
	
	<div id="Main" class="Main" align="center">
		<div class="ConfigBox">
			<h2>Gestion compte</h2>
			<table class="LogData">
				<tr>
					<th> Nom d'utilisateur </th>
					<th> Nom  </th>
					<th> Type </th>
					<?php 
						if($_SESSION["TypeCompte"] == 0){
				    	echo '<th> Mot de passe </th>';
				    	echo '<th> Action </th>';
						}
						
					?>
				</tr>

				<?php 
				foreach ($_SESSION["LstUtilisateur"] as $value) {
					
				    echo "<tr>";
				    echo "<td>". $value["UtilisateurUsername"] ."</td><td>". $value["UtilisateurNom"] ."</td><td>". $value["UtilisateurType"] ."</td>";

				    if($_SESSION["TypeCompte"] == 0){
				    	echo "<form method='post' action='/index.php/Admin/ModifMdp'>";
				    		echo "<input type='hidden' name='TxtUser' value='".$value["UtilisateurUsername"]."'>";
				    		echo '<td><input type="text" name="TxtMdp" placeholder="Nouveau" align="center"></input><button type="submit" >Changer</button></td>';
				    	echo "</form>";
				    	echo "<form method='post' action='/index.php/Admin/ModifMdp'>";
				    		echo "<input type='hidden' name='TxtUser' value='".$value["UtilisateurUsername"]."'>";
				    		echo '<td><button type="submit" >Modifier</button><button type="submit" style="background-color:red;color:white;" >Supprimer</button></td>';
				    	echo "</form>";
					}

				    echo "</tr>";
				}
				?>

			</table>
		</div>
		<div class="ConfigBox">
			<h2>Ajouter un utilisateur</h2>
			<form onsubmit="return validateFormAjoutUtilisateur()" method="post" action="/index.php/Admin/InsertionUtilisateur">
				<table class="InsertionTable">
					<tr>
						<td>Nom</td>
						<td>
							<input type="text" id="txtNomAjoutUtilisateur" name="TxtNomAjoutUtilisateur" placeholder="Nom"></input>
						</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>
							<input type="text" id="txtUsernameAjoutUtilisateur" name="txtUsernameAjoutUtilisateur" placeholder="Username"></input>
						</td>
					</tr>
					<tr>
						<td>Mot de passe</td>
						<td>
							<input type="password" id="txtmdpAjoutUtilisateur" name="txtmdpAjoutUtilisateur" placeholder="Mot de passe"></input>
						</td>
					</tr>
					<tr>
						<td>Confirmation mot de passe</td>
						<td>
							<input type="password" id="txtmdpCCAjoutUtilisateur" name="txtmdpCCAjoutUtilisateur" placeholder="mot de passe "></input>
						</td>
					</tr>
					<tr>
						<td>Type</td>
						<td>
							<select name="SelectTypeAjoutUtilisateur">
								<option disabled >Choix</option>
								<option value="1">Administrateur</option>
								<option value="2">Visiteur</option>
							</select>
						</td>
					</tr>
				</table>
				<button class="BtnRecherche" type="submit"> Ajouter </button>	
			</form>
		</div> 
		<div class="ConfigBox">
			<h2>Item inventaires</h2>
			<table class="LogData">
				<tr>
					<th>
						Élément
					</th>
					<th>
						Valeur actuel
					</th>
					<th>
						Modification
					</th>
				</tr>

				<?php 
				foreach ($_SESSION["LstConfiguration"] as $value) {
				    echo "<tr>";
					    echo "<form method='post' action='/index.php/Admin/ModifConf'>";
					    echo "<input type='hidden' name='TxtParam' value='".$value["ConfParam"]."'>";

						    echo "<td>". $value["ConfParam"] ."</td><td>". $value["ConfValeur"] ."</td>";
						    echo '<td><input type="text" name="TxtPourcent" placeholder="Nouveau" align="center"></input><button type="submit" >Modifier</button></td>';

					    echo "</form>";
				    echo "</tr>";
				}
				?>

			</table>
		</div> 
	</div>
	<div class="FeetBar" align="center"> Connecté en tant que : <?php echo $_SESSION["NomUtilisateur"]; ?></div>
</body>

</html>