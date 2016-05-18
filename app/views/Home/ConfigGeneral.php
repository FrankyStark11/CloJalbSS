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
	

</head>

<body>
	<div id="Main" class="Main">
	<div class="row">
	<div class="col-12 col-m-12">
			<div class="col-10 col-m-10 box headBox bgorange">
				<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Configuration /Général</h1>
			</div>
			<div class="col-2 col-m-2 box headBox" align="center">
				<a href="/index.php/Home/MenuConfig"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
			</div>
	</div>
		<div class="col-12 col-m-12">
			<h4 class="CLOrange">Configuration</h4><hr>
			<div class="col-12 col-m-12 box">
				<h4 class="CLOrange">Importation / Exportation</h4><hr>
				<table class="tabplein datasplit-2">
					<tr>
						<td>
							Faire une Sauvegarde de la base de donnée
						</td>
						<td>
							<a href="../app/bd/Clojalb.sqlite" download> <button class="StyleBtn bgorange">Télécharger</button></a>
						</td>
					</tr>
					<tr>
						<td>
							Importer la base de donnée 
						</td>
						<td>
							<form action="/index.php/Home/uploadFile" method="post" enctype="multipart/form-data">
							    <input type="file" class="stylebtn bgorange" name="fileToUpload" id="fileToUpload">
							    <input type="submit" class="stylebtn bgorange" value="Charger" name="submit">
							</form>
						</td>
					</tr>
				</table>
				<h4 class="CLOrange">Entretien </h4><hr>
				<table class="tabplein datasplit-2">
					<tr>
						<td>
							Remettre les consultations des pages d'aide à 0
						</td>
						<td>
							<a href="/index.php/Admin/ResetCompteur"><button class="StyleBtn bgorange">Réinitialiser</button></a>
						</td>
					</tr>
				</table>

			</div>
		</div>
	</div>
	</div>
</body>

</html>