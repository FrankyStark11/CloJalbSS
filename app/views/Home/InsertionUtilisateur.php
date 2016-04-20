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
			<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Configuration /Utilisateurs /Nouvel</h1>
		</div>
		<div class="col-2 col-m-2 box headBox" align="center">
			<a href="/index.php/Home/MenuUtilisateur"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
		</div>
	</div>
		<div class="col-3 col-m-12"></div>
		<div class="col-6 col-m-12">
			<h4 class="CLOrange">Insertion d'un nouvel utilisateur</h4><hr>
			<div class="col-12 col-m-12 box">
				<form onsubmit="return validateFormAjoutUtilisateur()" method="post" action="/index.php/Admin/InsertionUtilisateur">
						<table class="InfoPiece">
							<tr>
								<td>Nom</td>
								<td>
									<input type="text" class="StyleInput col-12" id="txtNomAjoutUtilisateur" name="TxtNomAjoutUtilisateur" placeholder="Nom"></input>
								</td>
							</tr>
							<tr>
								<td>Username</td>
								<td>
									<input type="text" class="StyleInput col-12" id="txtUsernameAjoutUtilisateur" name="txtUsernameAjoutUtilisateur" placeholder="Username"></input>
								</td>
							</tr>
							<tr>
								<td>Mot de passe</td>
								<td>
									<input type="password" class="StyleInput col-12" id="txtmdpAjoutUtilisateur" name="txtmdpAjoutUtilisateur" placeholder="Mot de passe"></input>
								</td>
							</tr>
							<tr>
								<td>Confirmation mot de passe</td>
								<td>
									<input type="password" class="StyleInput col-12" id="txtmdpCCAjoutUtilisateur" name="txtmdpCCAjoutUtilisateur" placeholder="mot de passe "></input>
								</td>
							</tr>
							<tr>
								<td>Type</td>
								<td>
									<select class="StyleInput col-12" name="SelectTypeAjoutUtilisateur">
										<option disabled >Choix</option>
										<option value="1">Administrateur</option>
										<option value="2">Visiteur</option>
									</select>
								</td>
							</tr>
						</table>
						<button class="StyleBtn BGOrange" title="Ajouter l'utilisateur"style="width: 100%;"type="submit"> Ajouter </button>	
					</form>
			</div>
		</div>
		<div class="col-3 col-m-12"></div>
	</div>
	</div>
</body>

</html>