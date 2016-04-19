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

<body onload="AfficherLstPiecesRetrait('<?php echo$_GET["NoDossier"]; ?>');">

	<a href="/index.php/Home/MenuSoumission">
		<div id="RetourMenu" title="Retour menu" align="center"> <img style="width: 20px;height: 20px;" src="/images/icon/home.png"> </div>
	</a>
<div class="row">
	<div class="col-12 col-m-12">
		<div class="col-12 col-m-12 box">
			<h1><?php echo ($_GET["NoDossier"] . " : " . $_GET["Nom"] . ", " . $_GET["Prenom"]); ?></h1>
		</div>
	</div>
	<div class="col-6 col-m-12">
	<h4 class="CLorange">Pièces nécésaire pour le travail</h4><hr>
		<div id="DataPiece" class="col-12 col-m-12 overflowAll box" style="height: 600px;" align="center">

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
		</div>
	</div>
	<div class="col-6 col-m-12">	
	<h4 class="CLorange">Résumé</h4><hr>
		<div id="pieceResume" class="col-12 col-m-12 overflowAll box" style="height: 600px;" align="center">
		</div>
	<hr>
		<form method="post" action="/index.php/Admin/FermetureDossier">
			<input type="hidden" name="LstPieces" id="HiddenArrayPiece" value="[]"></input>
			<input type="hidden" name="NoDossier" id="HiddenArrayPiece" value="<?php echo $_GET["NoDossier"]; ?>"></input>
			<button id="btnFermerDossier" type="submit" class="BGOrange StyleBtn" style="width: 100%;"> Confirmer </button>
		</form>
	<hr>
	</div>
</div>
</body>

</html>