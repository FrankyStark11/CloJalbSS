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
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body>
	<a class="NavBar" href="/index.php/Admin/RetourMenu"><img style="float: right; width: 50px;height: 50px;" title="Retour au menu" class="ConfigImage" src="/images/icon/exit-icon.png"></a>
	<div id="Main" class="Main" align="center">
			<h2 style="width: 750px;text-align: center;">LOG</h2>

			<table class="LogData">
				<tr>
					<th> DATE </th>
					<th> ACTION </th>
					<th> UTILISATEUR </th>
				</tr>

				<?php 
				foreach ($_SESSION["LstLog"] as $value) {
				    echo "<tr>";
				    echo "<td>". $value["LogDate"] ."</td><td>". $value["LogAction"] ."</td><td>". $value["LogUtilisateur"] ."</td>";
				    echo "</tr>";
				}
				?>

			</table>
	</div>
	<div class="FeetBar" align="center"> Connecté en tant que : <?php echo $_SESSION["NomUtilisateur"]; ?></div>
</body>

</html>