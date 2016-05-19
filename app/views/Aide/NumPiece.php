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
	<link rel="stylesheet" type="text/css" href="/css/w3Model.css">
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
						<h1 class="NavBar">IDENTIFICATION D'UNE PIÈCE</h1>
					</div>
					<div class="col-m-2">
						<a class="NavBar" href="/index.php/Aide/Accueil"><i class="fa fa-chevron-left fa-4x fa-fw" aria-hidden="true"></i></a>
					</div>
					
				</div>
			</div>
			<div class="col-12 col-m-12">
				<h4 class="CLorange">Comment faire ?</h4><hr>
					<div class="col-12 col-m-12 box" align="left">
					<h4 class="CLorange">Où est cette fonction ?</h4><hr>

					<p>N/A</p>

					<h4 class="CLorange">Comment utiliser cette fonction ?</h4><hr>

					<p> Une piece dans l'inventaire est généré de la façons suivante : 

					<b>AAAA-00000-CC</b><br><br>
					Les 4 premiers caractere sont un racouri de la piece par exemple : 

						<ul style="list-style-type:square">
							<li>POTP = Poteau principal</li>
							<li>CAPP = capuchon de poteau principal</li>
							<li>LATT = Sac de latte intimité</li>
							<li>BRTE = Bride de tention</li>
							<li>BATE = Barre de tention</li>
						</ul>
						<br>
					les 5 ou 6 chiffres suivant sont un résumé des dimentions de la piece par exemple:
						<ul style="list-style-type:square">
							<li>04238 = 4 pieds de haut avec un diametre de 2 3/8</li>
							<li>00238 = posede un diametre de 2 3/8</li>
							<li>04042 = 4 pieds de haut avec 42 pouces de large</li>
							<li>11418 = 1 1/4 de long par 18 pouces</li>
						</ul>
						<br>
					les 2 derniers caracteres désigne la couleur par exemple :
						<ul style="list-style-type:square">
							<li>BL = Blanc</li>
							<li>NO = Noir</li>
							<li>TA = Taupe</li>
							<li>GA = Galvanisé</li>
						</ul>
						<br>
					Cette structure permet d'avoir un numéro unique pour chaque piece et ainsi facilité la lecture et la gestion des pièces.
					</p>

					<h4 class="CLorange">Lien rapide !</h4><hr>

					<a href="/index.php/Home/Accueil"><button class="stylebtn bgorange">Y allez !</button></a>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>