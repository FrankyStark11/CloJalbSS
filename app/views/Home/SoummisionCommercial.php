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
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body>
	<a class="NavBar" href="/index.php/Home/MenuSoumission"><img style="float: right; width: 50px;height: 50px;" title="Retour au menu" class="ConfigImage" src="/images/icon/exit-icon.png"></a>
	<div id="Main" class="Main" align="center">
		Soummission Commercial !!!
	</div>
</body>

</html>