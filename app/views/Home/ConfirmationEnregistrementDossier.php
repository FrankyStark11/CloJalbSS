<?php
//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == "" || $_SESSION["TypeCompte"] == 2){
		header("Refresh:0; ../Home/Login");
	}
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

<body>
	<a href="/index.php/Home/MenuSoumission">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
	<div id="Main" class="Main">
	<div class="row">
		<div class="col-3 col-m-12"></div>
		<div class="col-6 col-m-12">
			<h4 class="CLOrange">Confirmation</h4><hr>
			<div class="col-12 col-m-12 box" align="center">
				<h1 class="CLOrange">Votre numero de dossier</h1><br><hr>
				<h2><?php echo $_SESSION["NoConfirmation"]; ?></h2>
			</div>
		</div>
		<div class="col-3 col-m-12"></div>
	</div>
	</div>
</body>

</html>