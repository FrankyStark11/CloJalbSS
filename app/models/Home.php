<?php
	require_once '../app/models/connectDB.php';
	class modHome extends connectDB
	{
		//retourne l'intégralité de l'inventaire pour lafficher
		function GetInv(){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Inventaire");
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

	}
?>