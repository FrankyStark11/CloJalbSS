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
	<script src="https://use.fontawesome.com/bf0a763563.js"></script>

</head>

<body>
	<div class="row Main">
		<div class="col-12 col-m-12">
			<div class="col-12 col-m-12 box headBox bgorange">
				<div class="col-m-10">
					<h1 class="NavBar"><?php echo $_SESSION["NomUtilisateur"]; ?> /Configuration /Inventaire /Système</h1>
				</div>
				<div class="col-m-2">
					<a class="NavBar" href="/index.php/Home/MenuConfigInventaire"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
				</div>
				
			</div>
		</div>
		<div class="col-3 col-m-12"></div>
		<div class="col-6  col-m-12">
			<div class="col-12 col-m-12 " >
			<h4 class="CLorange">Configuration</h4><hr>
			<div class="col-12  col-m-12 box">
				<div>
					<table class="LogData">
						<tr>
							<th>
								Élément
							</th>
							<th>
								Valeur actuel
							</th>
							<th>
								Modification
							</th>
						</tr>

						<?php 
						foreach ($_SESSION["LstConfiguration"] as $value) {
						    echo "<tr>";
							    echo "<form method='post' action='/index.php/Admin/ModifConf'>";
							    echo "<input type='hidden' name='TxtParam' value='".$value["ConfParam"]."'>";

								    echo "<td>". $value["ConfParam"] ."</td><td>". $value["ConfValeur"] ."</td>";
								    echo '<td><input type="text" name="TxtPourcent" placeholder="Nouveau" align="center"></input><button type="submit" >Modifier</button></td>';

							    echo "</form>";
						    echo "</tr>";
						}
						?>
					</table>
				</div> 
			</div>
		</div>
		</div>
		<div class="col-3 col-m-12"></div>
	</div>
</body>

</html>