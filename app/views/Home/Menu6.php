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
	<div id="Main" class="Main" >
	
	<div class="row">
		<div class="col-12 col-m-12">
			<div class="col-10 col-m-10 box headBox bgorange">
				<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Configuration /Inventaire</h1>
			</div>
			<div class="col-2 col-m-2 box headBox" align="center">
				<a href="/index.php/Home/MenuConfig"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
			</div>
		</div>
		<div class="col-6 col-m-12">
			<h4 class="CLOrange"> Configuration des utilisateurs</h4><hr>
			<div class="col-12 col-m-12 box">
				<div class="BoxMenu" align="center"><a href="/index.php/Home/InventaireInsertion"><img title="Ajouter un nouvel pièce" class="BoxMenu" src="../../images/icon/add_icon.png"></a><h2>AJOUTER</h2></div>
				
				<div class="BoxMenu" align="center"><a href="/index.php/Home/RetirerPiece"><img title="Retirer une pièce" class="BoxMenu" src="../../images/icon/retrait-icon.png"></a><h2>RETIRER</h2></div>
				
				<div class="BoxMenu" align="center"><a href="/index.php/Home/Configuration"><img title="Modifier les utilisateurs" class="BoxMenu" src="../../images/icon/ConfigInventaireMenu-icon.png"></a><h2>MODIFIER</h2></div>
			</div>
		</div>
	</div>
		
	</div>
</body>

</html>