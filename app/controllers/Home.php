
<?php
	include_once("../app/models/Home.php");
	class Home extends Controller
	{
		public function Accueil(){

			$Model = new modHome();
			
			$result = $Model->GetInv();

			$_SESSION["LstInventaire"] = $result;

			parent::view('Home/Index');
		}

		public function Configuration(){
			$Model = new modHome();

			$Usager = $Model->GetAllUser();
			$Configuration = $Model->GetConfiguration();

			$_SESSION["LstUtilisateur"] = $Usager;
			$_SESSION["LstConfiguration"] = $Configuration;

			parent::view('Home/Config');
		}

		public function MenuSoumission(){
			//offre le choix du type de soumision
			parent::view('Home/Menu2');
		}

		public function MenuInventaire(){
			//offre le choix du type de soumision
			parent::view('Home/Menu3');
		}

		public function MenuConfig(){
			//offre le choix du type de soumision
			parent::view('Home/Menu4');
		}

		public function MenuUtilisateur(){
			//offre le choix du type de soumision
			parent::view('Home/Menu5');
		}

		public function MenuConfigInventaire(){
			//offre le choix du type de soumision
			parent::view('Home/Menu6');
		}

		public function MenuCommande(){
			//offre le choix du type de soumision
			parent::view('Home/Menu7');
		}

		public function ConfigUtilisateur(){
			parent::view('Home/ConfigUtilisateurs');
		}

		public function InsertionUtilisateur(){
			parent::view('Home/InsertionUtilisateur');
		}

		public function RetraitManuel(){
			parent::view('Home/RetraitManuel');
		}

		public function RetirerUtilisateur(){
			parent::view('Home/RetirerUtilisateur');
		}

		public function RetirerPiece(){
			parent::view('Home/RetirerPiece');
		}

		public function PreparationCommande(){
			parent::view('Home/PreparationCommande');
		}

		public function RamassageCommande(){
			parent::view('Home/RamassageCommande');
		}

		public function ConfigGeneral(){
			parent::view('Home/ConfigGeneral');
		}

		public function SR(){
			//offre le choix du type de soumision
			parent::view('Home/SoummisionResidentiel');
		}

		public function SC(){
			//offre le choix du type de soumision
			parent::view('Home/SoummisionCommercial');
		}

		public function SP(){
			//affiche la soumission de pieces
			parent::view('Home/SoumissionPieces');
		}

		public function Log(){
			$Model = new modHome();
			$result = $Model->GetLog();
			$_SESSION["LstLog"] = $result;
			parent::view('Home/Log');
		}

		public function LogElement(){
			$Model = new modHome();
			$Str = $_POST["dataID"];
			$result = $Model->GetLogElement($Str);
			echo json_encode($result);
		}

		public function GetElementInvParamStr(){
			$Model = new modHome();
			$Str = $_POST["dataID"];
			$result = $Model->GetInvParamStr($Str);
			echo json_encode($result);
		}

		public function GetItemDesc(){
			$Model = new modHome();
			$Str = $_POST["dataID"];
			$result = $Model->GetItemDesc($Str);
			echo json_encode($result);
		}

		public function GetDossier(){

			$Model = new modHome();
			if(is_null($_POST["status"])){ $dataID = ""; }else{ $dataID = $_POST["status"];}

			$result = $Model->GetDossier($dataID);
			echo json_encode($result);
		}

		public function GetAllDossier(){

			$Model = new modHome();

			$result = $Model->GetAllDossier();
			echo json_encode($result);
		}

		public function GetCommandeFromId(){

			$Model = new modHome();

			$result = $Model->GetCommandeFromId($_POST["ID"]);
			echo json_encode($result);
		}

		public function RamasserCommande(){

			parent::view('Home/RamasserCommande');
		}

		public function GetAllCommande(){

			$Model = new modHome();

			$result = $Model->GetAllCommande();
			echo json_encode($result);
		}

		public function GetAllCommandeNonRamasse(){

			$Model = new modHome();

			$result = $Model->GetAllCommandeNonRamasse();
			echo json_encode($result);
		}

		public function GetAllDossierRecherche(){

			$Model = new modHome();

			$No = $_POST['NO'];
			$Ville = $_POST['VILLE'];
			$Prenom = $_POST['PRENOM'];
			$Nom = $_POST['NOM'];
			$DateDebut = $_POST['DATEDEBUT'];
			$DateFin = $_POST['DATEFIN'];
			$Status = $_POST['STATUS'];

			$result = $Model->GetAllDossierRecherche($No,$Ville,$Prenom,$Nom,$DateDebut,$DateFin,$Status);

			echo json_encode($result);
		}

		public function GetLstPiecesDossier(){
			$Model = new modHome();
			if(is_null($_POST["no"])){ $dataID = ""; }else{ $dataID = $_POST["no"];}
			$result = $Model->GetLstPiecesDossier($dataID);
			echo json_encode($result);
		}

		public function GetInvParamStr(){

			$Model = new modHome();

			
			if(is_null($_POST["dataID"])){ $dataID = ""; }else{ $dataID = $_POST["dataID"];}
			if(is_null($_POST["dataCouleur"])){ $dataCouleur = ""; }else{ $dataCouleur = $_POST["dataCouleur"];}
			if(is_null($_POST["dataGrosseur"])){ $dataGrosseur = ""; }else{ $dataGrosseur = $_POST["dataGrosseur"];}
			if(is_null($_POST["dataHauteur"])){ $dataHauteur = ""; }else{ $dataHauteur = $_POST["dataHauteur"];}
			if(is_null($_POST["dataLongeur"])){ $dataLongeur = ""; }else{ $dataLongeur = $_POST["dataLongeur"];}
			if(is_null($_POST["dataCategorie"])){ $dataCategorie = ""; }else{ $dataCategorie = $_POST["dataCategorie"];}

			$result = $Model->GetInvParamStr($dataID,$dataCouleur,$dataGrosseur,$dataHauteur,$dataLongeur,$dataCategorie);

			echo json_encode($result);
		}

		public function GetInvConfirmer(){
			$Model = new modHome();
		
			if(is_null($_POST["dataID"])){ $dataID = ""; }else{ $dataID = $_POST["dataID"];}

			$result = $Model->GetInvConfirmer($dataID);

			echo json_encode($result);
		}

		public function Login(){
			parent::view('Home/Login');
		}

		public function Modifier(){
			parent::view('Home/Modifier');
		}

		public function LogUnique(){
			parent::view('Home/LogUnique');
		}

		public function Reception(){
			parent::view('Home/Reception');
		}

		public function Ajustement(){
			parent::view('Home/AjusterInv');
		}

		public function Retrait(){
			parent::view('Home/Retrait');
		}

		public function JobEnCours(){
			parent::view('Home/JobEnCours');
		}

		public function ToutesJobs(){
			parent::view('Home/ToutesJobs');
		}

		public function InventaireInsertion(){
			parent::view('Home/Insertion');
		}
	}
?>