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
				<div class="col-10 col-m-10 box headBox bgorange">
					<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Travaux</h1>
				</div>
				<div class="col-2 col-m-2 box headBox" align="center">
					<a href="/index.php/Admin/RetourMenu"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
				</div>
			</div>
			<div class="col-2 col-m-12"></div>
			<div class="col-8 col-m-12">
				<h4 class="CLOrange"> Feuille de travail</h4><hr>
				<div class="col-12 col-m-12 box ">
					<div class="infobox boxarticle" align="center"><a href="/index.php/Home/SR"><img title="Résidentiel" src="../../images/icon/Residentiel-icon.png"></a><h2>SR</h2></div>
					
					<div class="infobox boxarticle" align="center"><a href="/index.php/Home/JobEnCours"><img title="Consulter les feuilles de travaux en cours" src="../../images/icon/Job-icon.png"></a><h2>EN COURS</h2></div>

					<div class="infobox boxarticle" align="center"><a href="/index.php/Home/ToutesJobs"><img title="Consulter toutes les feuilles de travaux" src="../../images/icon/AllJob-icon.png"></a><h2>CONSULTER</h2></div>
				</div>
			</div>
			<div class="col-2 col-m-12"></div>
		</div>
	</div>
</body>

</html>