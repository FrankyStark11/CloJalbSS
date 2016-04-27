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
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>

<body onload="AfficherLstPiecesRetrait('<?php echo$_GET["NoDossier"]; ?>');">
<div class="row Main">
	<div class="col-12 col-m-12">
		<div class="col-10 col-m-10 box headBox bgorange">
			<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Travaux /EnCours /Fermeture <?php echo ($_GET["NoDossier"] . ":" . $_GET["Nom"] . "," . $_GET["Prenom"]); ?></h1>
		</div>
		<div class="col-2 col-m-2 box headBox" align="center">
			<a href="/index.php/Home/MenuSoumission"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
		</div>
	</div>
	<div class="col-6 col-m-12">
	<h4 class="CLorange">Pièces non prévu</h4><hr>
	<div class="col-12  col-m-12 box">
		<input onkeyup="" placeholder="RECHERCHE ..." id="ChampsRecherche" class="styleinput" style="border-width: 0px; text-align: left; width: 100%;height: 50px; font-size: 30px;"></input>
	</div>
		<div class="col-12 col-m-12 overflowAll box" style="height: 490px;" align="center">

			<div class="col-12 InfoBox" title="Ajout d'une piece non prévue">
				<table class="tabplein datasplit-3">
					<tr>
						<td>POTP-04238-NO</td>
						<td><input class="StyleInput" placeholder="Quantité"></input></td>
						<td><button class="BGOrange StyleBtn">Ajouter</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-6 col-m-12">
	<h4 class="CLorange">Pièces nécésaire pour le travail</h4><hr>
		<div id="DataPiece" class="col-12 col-m-12 overflowAll box" style="height: 600px;" align="center">

		</div>
	</div>
	<div class="col-12 col-m-12">	
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