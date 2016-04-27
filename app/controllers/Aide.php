<?php
	include_once("../app/models/Home.php");

	class Aide extends Controller
	{
		public function Accueil(){

			parent::view("Aide/Index");
		}

		public function ConsulterAide(){
			$Model = new modHome();
			$Page = $_GET["ID"];

			$Model->AjouterConsultation($Page);
			$NomPage = $Model->RecevoirNomPage($Page);

			parent::view('Aide/'. $NomPage );
		}

		public function GetArticlesFromStr(){
			$Model = new modHome();
			$Recherche = $_POST['Recherche'];
			$result = $Model->GetArticlesFromStr($Recherche);
			echo json_encode($result);
		}
		
	}
	
?>