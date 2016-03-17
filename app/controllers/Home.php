
<?php
session_start();
	include_once("../app/models/Home.php");
	class Home extends Controller
	{
		public function Accueil(){

			$Model = new modHome();
			$result = $Model->GetInv();
			$_SESSION["LstInventaire"] = $result;
			parent::view('Home/Index');
		}

		public function GetInvParamStr(){

			$Model = new modHome();
			$Str = $_POST["dataStr"];
			$result = $Model->GetInvParamStr($Str);
			echo json_encode($result);
		}

		public function Login(){
			parent::view('Home/Login');
		}

		public function Modifier(){
			parent::view('Home/Modifier');
		}

		public function Reception(){
			parent::view('Home/Reception');
		}

		public function InventaireInsertion(){
			parent::view('Home/Insertion');
		}
	}
?>