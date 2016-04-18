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
	<div id="Main" class="Main">
		<div class="row">
			<div class="col-12 col-m-12">
				<div class="col-12 col-m-12 box ">
					<h1>Bonjour <?php echo $_SESSION["NomUtilisateur"]; ?>.</h1>
				</div>
			</div>
			<div class="col-6 col-m-12">
				<h4 class="CLOrange"> Création feuille de travail</h4><hr>
				<div class="col-12 col-m-12 box ">
					<div class="BoxMenu" align="center"><a href="/index.php/Home/SR"><img title="Soumission résidentiel" class="BoxMenu" src="../../images/icon/Residentiel-icon.png"></a><h2>RÉSIDENTIEL</h2></div>

					<div class="BoxMenu" align="center"><a href="/index.php/Home/SC"><img title="Soumission commercial" class="BoxMenu" src="../../images/icon/Commercial-icon.png"></a><h2>COMMERCIAL</h2></div>

					
				</div>
			</div>
			<div class="col-6 col-m-12">
				<h4 class="CLOrange"> Gestion des feuilles de travaux </h4><hr>
				<div class="col-12 col-m-12 box ">
					<div class="BoxMenu" align="center"><a href="/index.php/Home/JobEnCours"><img title="Consulter les feuilles de travaux en cours" class="BoxMenu" src="../../images/icon/Job-icon.png"></a><h2>EN COURS</h2></div>
					<div class="BoxMenu" align="center"><a href="/index.php/Home/ToutesJobs"><img title="Consulter toutes les feuilles de travaux" class="BoxMenu" src="../../images/icon/AllJob-icon.png"></a><h2>CONSULTER</h2></div>
				</div>
			</div>
			<div class="col-6 col-m-12">
				<h4 class="CLOrange"> Menu</h4><hr>
				<div class="col-12 col-m-12 box ">
					<div class="BoxMenu" align="center"><a href="/index.php/Admin/RetourMenu"><img title="Retour" class="BoxMenu" src="../../images/icon/Quitter-icon.png"></a><h2>RETOUR</h2></div>
				</div>
			</div>
			
			
		</div>
	</div>
</body>

</html>