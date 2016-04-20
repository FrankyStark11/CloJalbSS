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
	<div id="Main" class="Main">
	<div class="row">
		<div class="col-12 col-m-12">
			<div class="col-10 col-m-10 box headBox bgorange">
				<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Configuration /Utilisateurs /Modifier</h1>
			</div>
			<div class="col-2 col-m-2 box headBox" align="center">
				<a href="/index.php/Home/MenuUtilisateur"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
			</div>
		</div>
		<div class="col-3 col-m-12"></div>
		<div class="col-6 col-m-12">
			<h4 class="CLorange">Gestion des utilisateurs</h4><hr>
				<div class="col-12  col-m-12 box overflowAll" align="center">
					<div>
						
						<table class="LogData">
							<tr>
								<th> Nom d'utilisateur </th>
								<th> Nom  </th>
								<th> Type </th>
								<?php 
									if($_SESSION["TypeCompte"] == 0){
							    	echo '<th> Mot de passe </th>';
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
							    	echo "</form>";
								}

							    echo "</tr>";
							}
							?>

						</table>
					</div>
				</div>
		</div>
		<div class="col-3 col-m-12"></div>
	</div>
	</div>
</body>

</html>