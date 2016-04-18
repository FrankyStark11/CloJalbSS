<?php
	//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == ""){
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

<body onload="">

	<a href="/index.php/Home/MenuInventaire">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
<div class="row">
	<div class="col-12 col-m-12">
		<div class="col-12 col-m-12 box">
			<h1>JOHN DOE : 20160414-01</h1>
		</div>
	</div>
	<div class="col-6 col-m-12">
	<h4 class="CLorange">Pièces nécésaire pour le travail</h4><hr>
		<div id="Main" class="col-12 col-m-12 overflowAll box" style="height: 600px;" align="center">

			<div class="col-12 InfoBox" title="Ajout d'une piece non prévue">
				<table class="InfoPiece">
					<tr>
						<td>NON PRÉVU</td>
						<td><input class="StyleInput" placeholder="No pièce"></td>
						<td><input class="StyleInput" placeholder="Quantité"></input></td>
						<td><button class="BGOrange StyleBtn">Confirmer</button></td>
					</tr>
				</table>
			</div>
			<div class="col-12 InfoBox" title="Poteau de 4ft 2 3/8 6 et 6">
				<table class="InfoPiece">
					<tr>
						<td>POTP-04238-NO</td>
						<td>Prévu : 120</td>
						<td><input class="StyleInput" placeholder="Quantité réel"></input></td>
						<td><button class="BGOrange StyleBtn">Confirmer</button></td>
					</tr>
				</table>
			</div>

			<div class="col-12 InfoBox" title="Poteau de 4ft 2 3/8 6 et 6">
				<table class="InfoPiece">
					<tr>
						<td>POTP-04238-BR</td>
						<td>Prévu : 100</td>
						<td><input class="StyleInput" placeholder="Quantité réel"></input></td>
						<td><button class="BGOrange StyleBtn">Confirmer</button></td>
					</tr>
				</table>
			</div>

		</div>
	</div>
	<div class="col-6 col-m-12">	
	<h4 class="CLorange">Résumé</h4><hr>
		<div id="" class="col-12 col-m-12 overflowAll box" style="height: 600px;" align="center">
			<div class="col-12 InfoBox"> 
				<table class="InfoPiece">
					<tr>
						<td>POTP-04238-BL</td>
						<td>Quantité retirée : 23</td>
						<td><button class="BGOrange StyleBtn">Retirer</button></td>
					</tr>
				</table> 
			</div>
		</div>
	<hr><button class="BGOrange StyleBtn" style="width: 100%;"> Confirmer </button><hr>
	</div>
</div>
</body>

</html>