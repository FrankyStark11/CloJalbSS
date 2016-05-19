<?php
	//si une fausse accès à la page, on le kick
	if($_SESSION["TypeCompte"] == ""){
		header("Refresh:0; ../Home/Login");
	}
?>
<html>

<head>

	<title>Soumission Clôture Jalbert</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
	<script src="https://use.fontawesome.com/bf0a763563.js"></script>
	
</head>

<body>
	<div id="Main" class="Main" >
	<div class="row">
		<div class="col-12 col-m-12">
			<div class="col-12 col-m-12 box headBox bgorange">
				<div class="col-m-10">
					<h1 class="NavBar"><?php echo $_SESSION["NomUtilisateur"]; ?> /Configuration /Inventaire</h1>
				</div>
				<div class="col-m-2">
					<a class="NavBar" href="/index.php/Home/MenuConfig"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<div class="col-2 col-m-12"></div>
		<div class="col-8 col-m-12">
			<h4 class="CLOrange"> <i class="fa clOrange fa-archive fa-5x fa-fw" aria-hidden="true"></i></h4><hr>
			<div class="col-12 col-m-12 box">
				<div class="row">

					<a href="/index.php/Home/InventaireInsertion">
						<div class="col-l-4 col-6 col-m-12 infobox BtnMenu" align="center">
							<i class="fa clOrange fa-cart-plus fa-5x fa-fw" aria-hidden="true"></i>
							<h2>AJOUTER</h2>
						</div>
					</a>
					
					<a href="/index.php/Home/Configuration">
						<div class="col-l-4 col-6 col-m-12 infobox BtnMenu" align="center">
							<i class="fa clOrange fa-sliders fa-5x fa-fw" aria-hidden="true"></i>
							<h2>MODIFIER</h2>
						</div>
					</a>

				</div>
			</div>
		</div>
		<div class="col-2 col-m-12"></div>
	</div>
		
	</div>
</body>

</html>