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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body>
	<div id="Main" class="Main" align="center">
	<h1>Bienvenue <?php echo $_SESSION["NomUtilisateur"]; ?> !</h1>
	<h2>Menu principal</h2>
		<div class="BoxMenu"><a href="/index.php/Home/Accueil"><img title="Inventaire" class="BoxMenu" src="../../images/icon/MenuInventaire-icon.png"></a></div>
		<div class="BoxMenu"><a href="/index.php/Home/MenuSoumission"><img title="Soumission" class="BoxMenu" src="../../images/icon/Soumission-icon.png"></a></div>
		<div class="BoxMenu"><a href="/index.php/Home/Log"><img title="Log" class="BoxMenu" src="../../images/icon/Backlog-icon.png"></a></div>
		<div class="BoxMenu"><a href="/index.php/Home/Configuration"><img title="Configuration" class="BoxMenu" src="../../images/icon/settings-icon.png"></a></div>
		<div class="BoxMenu"><a href="/index.php/Admin/TerminerSession"><img title="Déconnexion" class="BoxMenu" src="../../images/icon/logout-icon.png"></a></div>
	</div>
</body>

</html>