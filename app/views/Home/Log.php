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
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	

</head>

<body>
	<a href="/index.php/Admin/RetourMenu">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
	<div id="Main" class="Main">
		<div class="row">
			<div class="col-3 col-m-12"></div>
			<div class="col-6 col-m-12">
			<h4 class="CLOrange">Log</h4><hr>
				<div class="col-12 box" style="height: 700px;overflow: auto;" align="center">
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
			</div>
			<div class="col-3 col-m-12"></div>
		</div>
	</div>
</body>

</html>