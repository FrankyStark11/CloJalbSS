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

		function GetInvParamStr($No){

			//$StrSearch = "%".$No."%";

			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Inventaire WHERE InvNoId LIKE '%' || :NoId || '%' ");
			$sql->bindValue(":NoId", $No);
			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function InsertionItem(){
			$db = $this->connectDB();

			$DataNoId = $_GET["txtNoId"];
			$DataDesc = $_GET["txtDesc"];
			$DataCouleur = $_GET["txtCouleur"];
			$DataPrixCoutant = $_GET["txtPrixCoutant"];
			$DataPrixClient = $_GET["txtPrixClient"];
			$DataPrixContracteur = $_GET["txtPrixContracteur"];
			$DataQte = intval($_GET["txtQte"]);
			$DataHauteur = $_GET["txtHauteur"];
			$DataLongeur = $_GET["txtLongeur"];
			$DataGrosseur = $_GET["txtGrosseur"];
			$DataCategorie = $_GET["txtCategorie"];

			$sql = $db->prepare("INSERT INTO Inventaire (InvNoId,InvDesc,InvCouleur,InvPrixCoutant,InvPrixClient,InvPrixContracteur,InvQte,InvHauteur,InvLongeur,InvGrosseur,InvCategorie) VALUES (:NoId,:Description,:Couleur,:PrixCoutant,:PrixClient,:PrixContracteur,:Qte,:Hauteur,:Longeur,:Grosseur,:Categorie)");

			$sql->bindValue(":NoId", $DataNoId);
			$sql->bindValue(":Description", $DataDesc);
			$sql->bindValue(":Couleur", $DataCouleur);
			$sql->bindValue(":PrixCoutant", $DataPrixCoutant);
			$sql->bindValue(":PrixClient", $DataPrixClient);
			$sql->bindValue(":PrixContracteur", $DataPrixContracteur);
			$sql->bindValue(":Qte", $DataQte);
			$sql->bindValue(":Hauteur", $DataHauteur);
			$sql->bindValue(":Longeur", $DataLongeur);
			$sql->bindValue(":Grosseur", $DataGrosseur);
			$sql->bindValue(":Categorie", $DataCategorie);

			$sql->execute();

			$db = null;
			$sql = null;
		}

		function ModificationItem(){
			$db = $this->connectDB();

			$DataNoId = $_GET["txtNoId"];
			$DataDesc = $_GET["txtDesc"];
			$DataCouleur = $_GET["txtCouleur"];
			$DataPrixCoutant = $_GET["txtPrixCoutant"];
			$DataPrixClient = $_GET["txtPrixClient"];
			$DataPrixContracteur = $_GET["txtPrixContracteur"];
			$DataQte = intval($_GET["txtQte"]);
			$DataHauteur = $_GET["txtHauteur"];
			$DataLongeur = $_GET["txtLongeur"];
			$DataGrosseur = $_GET["txtGrosseur"];
			$DataCategorie = $_GET["txtCategorie"];

			$sql = $db->prepare("UPDATE Inventaire SET InvDesc = :Description, InvCouleur = :Couleur, InvPrixCoutant = :PrixCoutant, InvPrixClient = :PrixClient, InvPrixContracteur = :PrixContracteur, InvQte = :Qte, InvHauteur = :Hauteur, InvLongeur = :Longeur, InvGrosseur = :Grosseur, InvCategorie = :Categorie WHERE InvNoId = :NoId ");

			$sql->bindValue(":NoId", $DataNoId);
			$sql->bindValue(":Description", $DataDesc);
			$sql->bindValue(":Couleur", $DataCouleur);
			$sql->bindValue(":PrixCoutant", $DataPrixCoutant);
			$sql->bindValue(":PrixClient", $DataPrixClient);
			$sql->bindValue(":PrixContracteur", $DataPrixContracteur);
			$sql->bindValue(":Qte", $DataQte);
			$sql->bindValue(":Hauteur", $DataHauteur);
			$sql->bindValue(":Longeur", $DataLongeur);
			$sql->bindValue(":Grosseur", $DataGrosseur);
			$sql->bindValue(":Categorie", $DataCategorie);

			$sql->execute();

			$db = null;
			$sql = null;
		}

	}
?>