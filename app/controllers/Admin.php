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
	}
	
?>