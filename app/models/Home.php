<?php
	require_once '../app/models/connectDB.php';
	class modHome extends connectDB
	{
		//retourne l'intégralité de l'inventaire pour lafficher
		function GetInv(){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Inventaire ORDER BY InvNoId ASC;");
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		//retourne tous les utilisateurs Nom et username
		function GetAllUser(){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT UtilisateurUsername,UtilisateurNom,UtilisateurType FROM Utilisateur ORDER BY UtilisateurNom ASC;");
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		//retourne l'intégralité de l'inventaire pour lafficher
		function GetLog(){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Log ORDER BY LogDate DESC;");
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		//retourne l'intégralité de l'inventaire pour lafficher
		function GetLogElement($ID){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Log WHERE LogAction LIKE '%' || :ID || '%' ORDER BY LogDate DESC;");
			$sql->bindValue(":ID",$ID);
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		//retourne une valeur de param specifier sinon les retournes tous
		function GetConfiguration($param = "Default"){

			$db = $this->connectDB();

			//si aucun parametre a été demandé, le systeme les renvoies tous
			if($param == "Default"){

				$sql = $db->prepare("SELECT ConfParam,ConfValeur FROM Configuration;");
				$sql->execute();
				$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			}
			//sinon revoie seulement la valeur de celui demander
			else{

				$sql = $db->prepare("SELECT ConfValeur FROM Configuration WHERE ConfParam = :Param;");
				$sql->bindValue(":Param",$param);
				$sql->execute();
				$result = $sql->fetch(PDO::FETCH_ASSOC);
				$result = $result["ConfValeur"];

			}

			$db = null;
			$sql = null;

			return $result;
		}

		function InscriptionLog($Action = "Sans action"){
			$db = $this->connectDB();

			$sql = $db->prepare("INSERT INTO Log (LogAction,LogUtilisateur,LogDate) VALUES (:Action,:Utilisateur,DATETIME('now','localtime'))");
			$sql->bindValue(":Action",$Action);
			$sql->bindValue(":Utilisateur",$_SESSION["NomUtilisateur"]);
			$sql->execute();

			$db = null;
			$sql = null;
		}

		//ajout dun nouvelle utilisateur dans le systeme selon les params
		function InsertionUtilisateur($Nom,$Username,$Mdp,$Type){
			$db = $this->connectDB();

			$sql = $db->prepare("INSERT INTO Utilisateur (UtilisateurNom,UtilisateurUsername,UtilisateurMdp,UtilisateurType) VALUES (:Nom,:User,:Mdp,:Type)");

			$sql->bindValue(":Nom",$Nom);
			$sql->bindValue(":User",$Username);
			$sql->bindValue(":Mdp",crypt($Mdp, 'CL'));
			$sql->bindValue(":Type",$Type);

			$sql->execute();

			$db = null;
			$sql = null;
		}

		function Connextion($Username,$Mdp){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT UtilisateurType,UtilisateurNom FROM Utilisateur WHERE UtilisateurUsername = :Username AND UtilisateurMdp = :Mdp");
			$sql->bindValue(":Username",$Username);
			$sql->bindValue(":Mdp",crypt($Mdp, 'CL'));

			$sql->execute();
			$result = $sql->fetch(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
			
		}

		function GetElementInvParamStr($No){
			$db = $this->connectDB();
			$sql = $db->prepare("SELECT * FROM Inventaire WHERE InvNoId LIKE '%' || :NoId || '%' ");
			$sql->bindValue(":NoId", $No);
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);
			$db = null;
			$sql = null;
			return $result;
		}

		function GetInvParamStr($DataId = "",$DataCouleur = "",$DataGrosseur = "",$DataHauteur = "",$DataLongeur = "",$DataCategorie = ""){

			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Inventaire WHERE InvNoId LIKE '%' || :NoId || '%' AND InvCouleur LIKE '%' || :Cl || '%' AND InvGrosseur LIKE '%' || :Grosseur || '%' AND InvHauteur LIKE '%' || :Hauteur || '%' AND InvLongeur LIKE '%' || :Longeur || '%' AND InvCategorie LIKE '%' || :Categorie || '%' ORDER BY InvNoId ASC ");

			$sql->bindValue(":NoId", $DataId);
			$sql->bindValue(":Cl", $DataCouleur);
			$sql->bindValue(":Grosseur", $DataGrosseur);
			$sql->bindValue(":Hauteur", $DataHauteur);
			$sql->bindValue(":Longeur", $DataLongeur);
			$sql->bindValue(":Categorie", $DataCategorie);

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function GetItemDesc($dataId){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT InvDesc,InvQte,InvPrixContracteur FROM Inventaire WHERE InvNoId = :ID");
			$sql->bindValue(":ID",$dataId);

			$sql->execute();
			$result = $sql->fetch(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function InsertionItem(){
			$db = $this->connectDB();

			$DataNoId =  strtoupper($_GET["txtNoId"]);
			$DataDesc = $_GET["txtDesc"];
			$DataCouleur = $_GET["txtCouleur"];

			if (isset($_GET["txtPrixCoutant"])){ $DataPrixCoutant = $_GET["txtPrixCoutant"]; }else{ $DataPrixCoutant = "0"; }
			$PrixClientCalcule = ((floatval($this->GetConfiguration("Pourcentage Client"))/100)+1) * $DataPrixCoutant;
			$DataPrixClient = strval($PrixClientCalcule);

			$PrixContracteurCalcule = ((floatval($this->GetConfiguration("Pourcentage Contracteur"))/100)+1) * $DataPrixCoutant;
			$DataPrixContracteur = strval($PrixContracteurCalcule);

			if (isset($_GET["txtQte"])){ $DataQte = $_GET["txtQte"]; }else{ $DataQte = "0"; }
			if (isset($_GET["txtLongeur"])){ $DataLongeur = $_GET["txtLongeur"]; }else{ $DataLongeur = "N/A"; }
			if (isset($_GET["txtHauteur"])){ $DataHauteur = $_GET["txtHauteur"]; }else{ $DataHauteur = "N/A"; }
			if (isset($_GET["txtGrosseur"])){ $DataGrosseur = $_GET["txtGrosseur"]; }else{ $DataGrosseur = "N/A"; }
			if (isset($_GET["txtCategorie"])){ $DataCategorie = $_GET["txtCategorie"]; }else{ $DataCategorie = "N/A"; }

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

			//ajoute l'action au log
			$ActionString = "Ajout de " . $DataNoId . " dans l'inventaire avec une quantitée de " . $DataQte.".";
			$this->InscriptionLog($ActionString);

			$db = null;
			$sql = null;
		}

		function ReceptionItem($ID,$Qte){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Inventaire SET InvQte = InvQte + :Qte WHERE InvNoId = :NoId");

			$sql->bindValue(":NoId", $ID);
			$sql->bindValue(":Qte", $Qte);

			$sql->execute();

			$ActionString = "Reception de " . $Qte . " " . $ID . ".";
			$this->InscriptionLog($ActionString);

			$db = null;
			$sql = null;
		}

		function ModificationItem(){
			$db = $this->connectDB();

			$DataNoId = strtoupper($_GET["txtNoId"]);
			$DataDesc = $_GET["txtDesc"];
			$DataCouleur = $_GET["txtCouleur"];
			$DataPrixCoutant = $_GET["txtPrixCoutant"];
			$PrixClientCalcule = ((floatval($this->GetConfiguration("Pourcentage Client"))/100)+1) * $DataPrixCoutant;
			$DataPrixClient = strval($PrixClientCalcule);

			$PrixContracteurCalcule = ((floatval($this->GetConfiguration("Pourcentage Contracteur"))/100)+1) * $DataPrixCoutant;
			$DataPrixContracteur = strval($PrixContracteurCalcule);
			$DataQte = intval($_GET["txtQte"]);
			$DataHauteur = $_GET["txtHauteur"];
			$DataLongeur = $_GET["txtLongeur"];
			$DataGrosseur = $_GET["txtGrosseur"];
			$DataCategorie = $_GET["txtCategorie"];

			$sql = $db->prepare("UPDATE Inventaire SET InvNoId = :NoId, InvDesc = :Description, InvCouleur = :Couleur, InvPrixCoutant = :PrixCoutant, InvPrixClient = :PrixClient, InvPrixContracteur = :PrixContracteur, InvQte = :Qte, InvHauteur = :Hauteur, InvLongeur = :Longeur, InvGrosseur = :Grosseur, InvCategorie = :Categorie WHERE InvNoId = :NoId ");

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

			//ajoute l'action au log
			$ActionString = "Modification de  " . $DataNoId . ". La quantité actuel est de ".$DataQte.".";
			$this->InscriptionLog($ActionString);

			$db = null;
			$sql = null;
		}

		//Modification de configuration selon un param specifié
		function ModifierConfig($Param,$Valeur){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Configuration SET ConfValeur = :data WHERE ConfParam = :Param");
			$sql->bindValue(":data",$Valeur);
			$sql->bindValue(":Param",$Param);
			$sql->execute();

			$db = null;
			$sql = null;
		}

		//Modification de configuration selon un param specifié
		function ModifierMdpUtilisateur($ID,$Valeur){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Utilisateur SET UtilisateurMdp = :data WHERE UtilisateurUsername = :Param");
			$sql->bindValue(":data",crypt($Valeur, 'CL'));
			$sql->bindValue(":Param",$ID);
			$sql->execute();

			$db = null;
			$sql = null;
		}

	}
?>