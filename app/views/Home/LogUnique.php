<?php
//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == "" || $_SESSION["TypeCompte"] == 2){
		//header("Refresh:0; ../Home/Login");
	}
	$ID = $_GET["dataID"];
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

<body onload="showLogElement('MainLog','<?php echo $ID ?>')">
	<div id="Main" class="Main">
		<div class="row">
			<div class="col-12 col-m-12">
				<div class="col-10 col-m-10 box headBox bgorange">
					<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Log</h1>
				</div>
				<div class="col-2 col-m-2 box headBox" align="center">
					<a href="/index.php/Home/Accueil"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
				</div>
			</div>
			<div class="col-3 col-m-12"></div>
			<div class="col-6 col-m-12">
			<h4 class="CLOrange">Log</h4><hr>
				<div class="col-12 box" id="MainLog" style="height: 700px;overflow: auto;" align="center">

				</div>
			</div>
			<div class="col-3 col-m-12"></div>
		</div>
	</div>
</body>

</html>