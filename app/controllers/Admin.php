<?php
session_start();
	include_once("../app/models/Home.php");

	class Admin extends Controller
	{
		public function Insertion(){

			$Model = new modHome();
			$Model->InsertionItem();
			parent::view('Home/Insertion');
		}
		public function Modification(){

			$Model = new modHome();
			$Model->ModificationItem();
			parent::view('Home/Index');
		}
	}
	
?>