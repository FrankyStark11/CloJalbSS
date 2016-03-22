<?php
//session_start();
	//si une fausse accès à la page, on le kick
	//if($_SESSION["NomUser"] != "Administrateur"){
		//header("Refresh:0; ../Home/Login");
	//}
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
	<div class="Header" align="center">
		<ul class="NavBar">
			<?php
		
			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Accueil">Inventaire</a></li>';}

			if(isset($_SESSION["TypeCompte"]) && $_SESSION["TypeCompte"] == 1){
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/InventaireInsertion">Insertion</a></li>';
				echo '<li class="NavBar"><a class="NavBar" href="/index.php/Home/Reception">Réception</a></li>';
				echo '<li class="NavBar"><a class="Selected"  href="/index.php/Home/Configuration"><img class="ConfigImage" src="/images/icon/Gear-icon.png"></a></li>';
			}


			if(isset($_SESSION["NomUtilisateur"]) ){echo '<li class="NavBar" ><a href="/index.php/Admin/TerminerSession"><img class="ConfigImage" src="/images/icon/exit-icon.png"></a></li>';}
				else{ echo '<li class="NavBar" ><a href="/index.php/Home/Login">Connexion</a></li>';}
			 ?>
		</ul>	
	</div>
	<div id="Main" class="Main" align="center">
		<div class="ConfigBox">
			<h2>LOG</h2>

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
</body>

</html>