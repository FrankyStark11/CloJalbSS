
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

		public function SR(){
			//offre le choix du type de soumision
			parent::view('Home/SoummisionResidentiel');
		}

		public function SC(){
			//offre le choix du type de soumision
			parent::view('Home/SoummisionCommercial');
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

		public function InventaireInsertion(){
			parent::view('Home/Insertion');
		}
	}
?>