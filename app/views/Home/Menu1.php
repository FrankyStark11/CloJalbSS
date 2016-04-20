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
				<div class="col-10 col-m-10 box headBox">
					<h1><?php echo $_SESSION["NomUtilisateur"]; ?></h1>
				</div>
				<div class="col-2 col-m-2 box headBox" align="center">
					<a href="/index.php/Admin/TerminerSession"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/logout-icon.png"></a>
				</div>
			</div>
			<div class="col-6 col-m-12">
				<h4 class="CLOrange"> Application</h4><hr>
				<div class="col-12 col-m-12 box">
					<div class="BoxMenu" align="center"><a href="/index.php/Home/MenuInventaire"><img title="Inventaire" class="BoxMenu" src="../../images/icon/MenuInventaire-icon.png"></a><h2>INVENTAIRE</h2></div>

					<div class="BoxMenu" align="center"><a href="/index.php/Home/MenuSoumission"><img title="Feuille de travaux" class="BoxMenu" src="../../images/icon/Soumission-icon.png"></a><h2>TRAVAUX</h2></div>
				</div>
			</div>
			<div class="col-6 col-m-12">
				<h4 class="CLOrange"> Configuration</h4><hr>
				<div class="col-12 col-m-12 box">
					<div class="BoxMenu" align="center"><a href="/index.php/Home/Log"><img title="Log" class="BoxMenu" src="../../images/icon/Backlog-icon.png"></a><h2>LOG</h2></div>

					<div class="BoxMenu" align="center"><a href="/index.php/Home/MenuConfig"><img title="Configuration" class="BoxMenu" src="../../images/icon/settings-icon.png"></a><h2>CONFIG</h2></div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>