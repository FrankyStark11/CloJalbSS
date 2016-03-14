
<?php
session_start();
	include_once("../app/models/Home.php");
	class Home extends Controller
	{
		public function Accueil(){
			parent::view('Home/Index');
		}	
	}
?>