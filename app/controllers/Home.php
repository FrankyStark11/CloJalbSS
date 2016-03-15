
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

		public function Login(){
			parent::view('Home/Login');
		}
	}
?>