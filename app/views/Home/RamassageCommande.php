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
	<link rel="stylesheet" type="text/css" href="/css/w3Model.css">
	<link rel="stylesheet" type="text/css" href="/css/style2.css" />
	<script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="/js/javascript.js"></script>
</head>

<body onload="">
<div class="row main">

	<div class="col-12 col-m-12">
		<div class="col-10 col-m-10 box headBox bgorange">
			<h1><?php echo $_SESSION["NomUtilisateur"]; ?> /Commande /Ramassage</h1>
		</div>
		<div class="col-2 col-m-2 box headBox" align="center">
			<a href="/index.php/Home/MenuCommande"><img title="Retour" style="width: 78px;height: 78px;" src="../../images/icon/Quitter-icon.png"></a>
		</div>
	</div>

	<div class="col-6 col-m-12">
	<h4 class="CLorange">Liste des commandes préparées</h4><hr>
		<div id="Main" class="col-12 col-m-12 overflowAll box" style="height: 600px;" align="center">
			
		</div>
	</div>
	<div class="col-6 col-m-12">	
	<h4 class="CLorange">Détails</h4><hr>
		<div id="zone01" style="display: block;" class="col-12 col-m-12 overflowAll box" >
			<h4 class="CLOrange"> Information commande</h4>
			<table class="InfoPiece tabLastColumAlignRight">
				<tr>
					<td>
						Numero commande
					</td>
					<td>
						<label id="PrenomDossierDetail"> 20160427-00 </label>
					</td>
				</tr>
			</table>
			<hr>
			<h4 class="CLOrange" style="cursor: pointer;" onclick="$('#tb01').slideToggle(1);"> Résumé des pieces</h4>
				<table id="tb01" class="tabplein datasplit-3">
					<tr>
						<th>
							No piece 
						</th>
						<th>
							Quantité requis
						</th>
						<th>
							Description
						</th>
					</tr>
				</table>

				<hr>

				<button  onclick="document.getElementById('id01').style.display='block'" class="BGgreen StyleBtn" style="margin-bottom:10px;width: 100%;"> Confirmer </button>

				<button  onclick="document.getElementById('id02').style.display='block'" class="BGred StyleBtn" style="width: 100%;"> Annuler </button>
				
		</div>
	</div>
</div>

<!-- Message confirmation Fermer dossier -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-8">
    <header class="w3-container bggreen"> 
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-closebtn">&times;</span>
      <h2 id="headbox1"> La commande est ramassée </h2>
    </header>
    <div class="w3-container" align="center">
      <p>Vous êtes sur le point de fermer la commande</p>
      <p>Si le client n'a pas ramassé sa commande, il est préférable de ne pas fermer la commande car les quantités seront déduites.</p>
    </div>
    <footer class="w3-container" style="padding-bottom: 10px;" align="center">
     <a id="lienRetrait" ><button class="StyleBtn bgGreen">Confirmer</button></a>
    </footer>
  </div>
</div>

<!-- Message confirmation Annuler dossier -->
<div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-8">
    <header class="w3-container bgred"> 
      <span onclick="document.getElementById('id02').style.display='none'" 
      class="w3-closebtn">&times;</span>
      <h2 id="headbox2"> Annulation de la commande </h2>
    </header>
    <div class="w3-container" align="center">
      <p>Vous êtes sur le point d'annuler la commande.</p>
      <p>!! ATTENTION !! </p>
      <p> Cette action est irréversible</p>
    </div>
    <footer class="w3-container" style="padding-bottom: 10px;" align="center">
     <a id="lienAnnulerEffacer"> <button class="StyleBtn bgred">Annuler et effacer</button></a>
    </footer>
  </div>
</div>

</body>

</html>