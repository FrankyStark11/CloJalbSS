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
	

</head>

<body>
	<div id="Main" class="Main" align="center">
	
	<div class="row">
		<div class="col-12 col-m-12">
			<div class="col-12 col-m-12 box ">
				<h1>Bienvenue <?php echo $_SESSION["NomUtilisateur"]; ?> !</h1>
			</div>
		</div>
		<div class="col-6 col-m-12">
			<div class="col-12 col-m-12 box">
				<div class="BoxMenu"><a href="/index.php/Home/Accueil"><img title="Consulter l'inventaire" class="BoxMenu" src="../../images/icon/inventaire-icon.png"></a><h2>CONSULTER</h2></div>

				<div class="BoxMenu"><a href="/index.php/Home/Reception"><img title="Recevoir des pièces" class="BoxMenu" src="../../images/icon/reception-icon.png"></a><h2>RECEVOIR</h2></div>

				<div class="BoxMenu"><a href="/index.php/Home/Reception"><img title="Retirer des pièces" class="BoxMenu" src="../../images/icon/vente-icon.png"></a><h2>DÉDUIRE</h2></div>
			</div>
		</div>
		<div class="col-6 col-m-12">
			<div class="col-12 col-m-12 box">
				<div class="BoxMenu"><a href="/index.php/Home/InventaireInsertion"><img title="Ajouter une nouvelle pièce" class="BoxMenu" src="../../images/icon/add_icon.png"></a><h2>NOUVELLE</h2></div>
				
			</div>
			
		</div>
		<div class="col-6 col-m-12">
			<div class="col-12 col-m-12 box">
				<div class="BoxMenu"><a href="/index.php/Admin/RetourMenu"><img title="Retour" class="BoxMenu" src="../../images/icon/Quitter-icon.png"></a><h2>MENU</h2></div>
			</div>
		</div>
	</div>
		
	</div>
</body>

</html>