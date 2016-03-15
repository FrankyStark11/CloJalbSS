<?php
//session_start();
	//si une fausse accès à la page, on le kick
	//if($_SESSION["NomUser"] != "Administrateur"){
		//header("Refresh:0; ../Tools/AccesRefuse");
	//}
	//$Inv = $data['LstInventaire'];
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
			<li class="NavBar"><a class="Selected" href="/index.php/Home/Accueil">Inventaire</a></li>
			<li class="NavBar"><a class="NavBar" href="/index.php/Home/Accueil">Insertion</a></li>
			<li class="NavBar" ><a class="NavBar" href="/index.php/Home/Login">Connexion</a></li>
		</ul>	
	</div>

	<div id="OptionAvance" align="center"> Option de recherche </div>

	<div id="SearchBox" class="SearchBoxPiece" align="center">
		<table>
			<tr>
				<td>
					No Piece
				</td>
				<td>
					<input class="ChampsRecherche" type="text" placeholder="No de piece"></input>
				</td>
				<td>
					Nom Piece
				</td>
				<td>
					<input class="ChampsRecherche" type="text" placeholder="Nom de piece"></input>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td>
					Couleur
				</td>
				<td>
					<select class="ChampsRecherche">
						<option>Choix</option>
						<option>Brun</option>
						<option>Noir</option>
						<option>Blanc</option>
					</select>
				</td>
				<td>
					Dimention
				</td>
				<td>
					<select class="ChampsRecherche">
						<option selected> Choix </option>
						<option>4"</option>
						<option>5"</option>
						<option>6"</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Grosseur
				</td>
				<td>
					<select class="ChampsRecherche">
						<option selected> Choix </option>
						<option>2 3/8</option>
						<option>2 7/8</option>
						<option>3 1/2</option>
					</select>
				</td>
				<td>
					Longeur
				</td>
				<td>
					<select class="ChampsRecherche">
						<option selected> Choix </option>
						<option>10'3"</option>
						<option>21'0"</option>
						<option>24'0"</option>
					</select>
				</td>
			</tr>
		</table>
		<button class="BtnRecherche" value="Rechercher"> Rechercher </input>
	</div>
	<div id="Main" class="Main" align="center">
	<?php

		$Inv = $_SESSION["LstInventaire"];

		
		for ($i = 0; $i < count($Inv); $i++) {	

			$ID = json_encode($Inv[$i]);
			echo "<script> AddInvElement('".$ID."'); </script>";
		}
	 ?>
	</div>
</body>

</html>