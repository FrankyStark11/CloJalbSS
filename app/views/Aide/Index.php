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
	<link rel="stylesheet" type="text/css" href="/css/w3Model.css">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	<script src="https://use.fontawesome.com/bf0a763563.js"></script>
</head>

<body onload="ShowArticles()">

	<div id="Main" class="Main" >
		<div class="row">
			<div class="col-12 col-m-12">
				<div class="col-12 col-m-12 box headBox bgorange">
					<div class="col-m-10">
						<h1 class="NavBar">Bienvenue sur la page d'aide !</h1>
					</div>
					<div class="col-m-2">
						<a class="NavBar" href="/index.php/Admin/RetourMenu"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<div class="col-12 col-m-12 ">
				<div class="col-12  col-m-12 box">
					<input onkeyup="ShowArticles()" placeholder="RECHERCHE ..." id="ChampsRecherche" class="styleinput" style="border-width: 0px; text-align: left; width: 100%;height: 50px; font-size: 30px;"></input>
				</div>
			</div>

			<div class="col-12 col-m-12">
				<h4 class="CLorange">Tous les sujets</h4><hr>
				<div class="col-12 col-m-12 box " align="center" id="ArticlesTous">	
				</div>
			</div>
			
				<div class="col-12  col-m-12">
					<div class="col-12 col-m-12 box" >
						<p>Le système d'aide pour l'intranet de clôture Jalbert permet de fournir de l'aide en cas de pépin. Elle regroupe toute l'information nécéssaire au bon fonctionnement du système. La page d'aide est sous divisé par sujet.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>