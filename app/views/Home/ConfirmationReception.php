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
	<div id="Main" class="Main">
	<div class="row">
		<div class="col-3 col-m-12"></div>
		<div class="col-6 col-m-12">
			<h4 class="CLOrange">Confirmation</h4><hr>
			<div class="col-12 col-m-12 box" align="center">
				<h1 class="CLOrange">Confirmation de la réception</h1><br><hr>
				<h2>Numero de confirmation PO : <?php echo $_SESSION["No"]; ?></h2>
				<a  href="/ConfirmationPO/<?php echo $_SESSION["No"]; ?>.xls" target="_blank">
				<button class="StyleBtn BGOrange">télécharger le rapport</button></a>
				<a href="/index.php/Home/MenuInventaire"><button id="btnQuitter"  class="StyleBtn BGOrange">Retour au menu</button></a>
			</div>
		</div>
		<div class="col-3 col-m-12"></div>
	</div>
	</div>
</body>

</html>