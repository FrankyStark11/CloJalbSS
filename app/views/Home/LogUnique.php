<?php
//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == "" || $_SESSION["TypeCompte"] == 2){
		//header("Refresh:0; ../Home/Login");
	}

	$Element = json_decode($_GET["JSONParam"]);
?>
<html>
<head>

	<title>Inventaire Clôture Jalbert</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body>
	<a href="/index.php/Home/Accueil">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
	<div id="Main" class="Main" align="center">
			<h2>LOG</h2>

			<table class="LogData">
				<tr>
					<th> DATE </th>
					<th> ACTION </th>
					<th> UTILISATEUR </th>
				</tr>

				<?php 
				foreach ($Element as $value) {
				    echo "<tr>";
				    echo "<td>". $value->LogDate ."</td><td>". $value->LogAction ."</td><td>". $value->LogUtilisateur ."</td>";
				    echo "</tr>";
				}
				?>

			</table>
	</div>
	<div class="FeetBar" align="center"> Connecté en tant que : <?php echo $_SESSION["NomUtilisateur"]; ?></div>
</body>

</html>