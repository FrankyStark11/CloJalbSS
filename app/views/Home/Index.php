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
	<script src="https://use.fontawesome.com/bf0a763563.js"></script>
</head>

<body onload="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)">
<div class="row Main">

	<div class="col-12 col-m-12">
			<div class="col-12 col-m-12 box headBox bgorange">
				<div class="col-m-10">
					<h1 class="NavBar"><?php echo $_SESSION["NomUtilisateur"]; ?> /Inventaire /Consulter</h1>
				</div>
				<div class="col-m-2">
					<a class="NavBar" href="/index.php/Home/MenuInventaire"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
				</div>
				
			</div>
		</div>

	<div class="col-3 col-m-12">
	<h4 class="CLorange">Recherche</h4><hr>
		<div class="col-12 col-m-12 box" style="height: 600px;">
			<div id="SearchBox" class="SearchBoxPiece" align="center">
				<form onreset="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)">
					<table class="RechercheBox">
						<tr>
							<td>
								<input class="StyleInput col-12" onkeyup="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxNoPiece" type="text" placeholder="No de piece"></input>
							</td>
						</tr>
						<tr>
							<td>
								<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxCategorie" class="StyleInput col-12">
									<option selected value=""> Catégorie </option>
									<optgroup label="oz">
										<option>1,2oz</option>
									</optgroup>
									<optgroup label="Grad">
										<option>.100</option>
										<option>.120</option>
										<option>.125</option>
										<option>.134</option>
										<option>.145</option>
										<option>.154</option>
										<option>.203</option>
										<option>.216</option>
										<option>.237</option>
										<option>.280</option>
									</optgroup>
									<optgroup label="%">
										<option>0,24</option>
										<option>12</option>
										<option>12.5</option>
										<option>15.5</option>
									</optgroup>
									<optgroup label="Degré">
										<option>45°</option>
										<option>90°</option>
									</optgroup>
									<optgroup label="Grillage">
										<option>Aucun Grillage</option>
										<option>Grillage 2X#9</option>
									</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxCouleur" class="StyleInput col-12">
									<option value="">Couleur</option>
									<optgroup label="Résidentiel">
											<option>Noir</option>
											<option>Blanc</option>
											<option>Brun</option>
											<option>Taupe</option>
											<option>Vert</option>
										</optgroup>
										<optgroup label="Commercial">
										<option>Galvanisé</option>
										<option>Aluminium</option>
										<option>Nylon</option>
										<option>Acier</option>
										</optgroup>
										<optgroup label="Autre">
										<option>Beton</option>
										</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxHauteur" class="StyleInput col-12">
									<option value="" selected> Hauteur </option>
									<option>3ft</option>
									<option>4ft</option>
									<option>5ft</option>
									<option>6ft</option>
									<option>7ft</option>
									<option>8ft</option>
									<option>9ft</option>
									<option>10ft</option>
									<option>12ft</option>
									<option>14ft</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxGrosseur" class="StyleInput col-12">
									<option value="" selected> Grosseur </option>
									<optgroup label="Numéro">
											<option>#9</option>
											<option>#6</option>
										</optgroup>	
										<optgroup label=" Pouce fraction">
											<option>1 11/16</option>
											<option>1 7/8</option>
											<option>2 3/8</option>
											<option>2 7/8</option>
											<option>3 1/2</option>
											<option>4 1/2</option>
											<option>6 5/8</option>
											<option>1 5/16</option>
										</optgroup>
										<optgroup label="Moins d'un pouce">	
											<option>1/4</option>
											<option>3/8</option>
											<option>3/4</option>
											<option>1/2</option>
											<option>5/16</option>
										</optgroup>
										<optgroup label="Pouce plein">
											<option>6po</option>
											<option>8po</option>
											<option>12po</option>
										</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<select onchange="showHint(<?php echo $_SESSION["TypeCompte"]; ?>)" id="SearchBoxLongeur" class="StyleInput col-12">
									<option value="" selected> Longueur </option>
									<optgroup label="Pied/pouce">
											<option>6ft 6po</option>
											<option>7ft 6po</option>
											<option>8ft 6po</option>
											<option>9ft 6po</option>
											<option>10ft 6po</option>
											<option>11ft 6po</option>
											<option>12ft 6po</option>
											<option>14ft 6po</option>
										</optgroup>
										<optgroup label="Pouce">
											<option>6po</option>
										</optgroup>
										<optgroup label="Pied">
											<option>4ft</option>
											<option>5ft</option>
											<option>6ft</option>
											<option>7ft</option>
											<option>8ft</option>
											<option>9ft</option>
											<option>10ft</option>
											<option>12ft</option>
											<option>17ft</option>
											<option>21ft</option>
											<option>24ft</option>
										</optgroup>
								</select>
							</td>
						</tr>
					</table>
					<button type="reset" class="BGOrange StyleBtn" style="width: 100%;">Reset</button>
				</form>	
			</div>
		</div>
	</div>
	<div class="col-9 col-m-12">
		<h4 class="CLorange">Inventaire</h4><hr>		
		<div  class="col-12 col-m-12 overflowAll box" style="height: 800px" align="center">
			<div id="Main" class="row">
				
			</div>
		</div>
	</div>
</div>
</body>

</html>