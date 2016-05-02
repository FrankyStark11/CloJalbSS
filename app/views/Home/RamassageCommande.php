<?php
	//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == ""){
		header("Refresh:0; ../Home/Login");
	}
?>
<html>
<head>
	<title>Inventaire Clôture Jalbert</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="/css/w3Model.css">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>

<body onload="ShowCommandeNonRammase()">
<div class="row main">

	<div class="col-12 col-m-12">
		<div class="col-10 col-m-10 box headBox bgorange">
			<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Commande /Ramassage</h1>
		</div>
		<div class="col-2 col-m-2 box headBox" align="center">
			<a href="/index.php/Home/MenuCommande"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
		</div>
	</div>
	<div class="col-2 col-m-12"></div>
	<div class="col-8 col-m-12">
	<h4 class="CLorange">Liste des commandes préparées</h4><hr>
		<div id="LstCommande" class="col-12 col-m-12 overflowAll box" style="height: 600px;" align="center">

			<div class="infobox boxarticle" align="center"><a href="/index.php/Home/JobEnCours"><img src="../../images/icon/commandePrete-icon.png"></a><h3>20160502-00</h3></div>

		</div>
	</div>
	<div class="col-2 col-m-12"></div>
</div>

</body>

</html>