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
	<h1>Bienvenue <?php echo $_SESSION["NomUtilisateur"]; ?> !</h1>
		<div class="BoxMenu"><a href="/index.php/Home/SR"><img title="Soumission résidentiel" class="BoxMenu" src="../../images/icon/Residentiel-icon.png"></a><h2>RÉSIDENTIEL</h2></div>
		<div class="BoxMenu"><a href="/index.php/Home/SC"><img title="Soumission commercial" class="BoxMenu" src="../../images/icon/Commercial-icon.png"></a><h2>COMMERCIAL</h2></div>
		<div class="BoxMenu"><a href="/index.php/Admin/RetourMenu"><img title="Retour" class="BoxMenu" src="../../images/icon/Quitter-icon.png"></a><h2>MENU</h2></div>
	</div>
</body>

</html>