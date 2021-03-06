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

			$sql = $db->prepare("SELECT ID,UtilisateurUsername,UtilisateurPrenom,UtilisateurNom,UtilisateurType,UtilisateurInscription FROM Utilisateur ORDER BY UtilisateurNom ASC;");
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function GetAllUserRecherche($str=""){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT ID,UtilisateurUsername,UtilisateurPrenom,UtilisateurNom,UtilisateurType,UtilisateurInscription FROM Utilisateur WHERE UtilisateurPrenom LIKE '%' || :str || '%' OR UtilisateurNom LIKE '%' || :str || '%' ORDER BY UtilisateurNom ASC;");

			$sql->bindValue(":str",$str);

			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		//retourne l'intégralité de l'inventaire pour lafficher
		function GetLog(){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Log ORDER BY LogDate DESC LIMIT 100;");
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
		function InsertionUtilisateur($Nom,$Prenom,$Username,$Mdp,$Type){
			$db = $this->connectDB();

			$sql = $db->prepare("INSERT INTO Utilisateur (UtilisateurNom,UtilisateurPrenom,UtilisateurUsername,UtilisateurMdp,UtilisateurType,UtilisateurInscription) VALUES (:Nom,:Prenom,:User,:Mdp,:Type,DATETIME('now','localtime'))");

			$sql->bindValue(":Nom",$Nom);
			$sql->bindValue(":Prenom",$Prenom);
			$sql->bindValue(":User",$Username);
			$sql->bindValue(":Mdp",crypt($Mdp, 'CL'));
			$sql->bindValue(":Type",$Type);

			$sql->execute();

			$db = null;
			$sql = null;
		}

		function RetirerUtilisateur($ID){
			$db = $this->connectDB();

			$sql = $db->prepare("DELETE FROM Utilisateur WHERE ID = :ID");

			$sql->bindValue(":ID",$ID);

			$sql->execute();

			$db = null;
			$sql = null;
		}

		function GetNbDossierFromDate($ID){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Dossier WHERE DossNumeroId LIKE '%' || :ID || '%';");
			$sql->bindValue(":ID",$ID);
			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);
			$count = strval(count($result));
			

			$db = null;
			$sql = null;

			if($count <= "9"){ $count = "0" . strval($count);}

			return $count;
		}

		function GetNbCommandeFromDate($ID){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Commande WHERE ComId LIKE '%' || :ID || '%';");
			$sql->bindValue(":ID",$ID);
			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);
			$count = strval(count($result));
			

			$db = null;
			$sql = null;

			if($count <= "9"){ $count = "0" . strval($count);}

			return $count;
		}

		//ajout dun nouvelle utilisateur dans le systeme selon les params
		function InsertionDossier($NoDossier,$prenom,$nom,$ville,$type,$status,$pied,$poteau,$valeur,$lstpieces,$DateProjet){

			$db = $this->connectDB();

			if ($prenom == "" ){ $prenom = "N/A"; }
			if ($nom == "" ){ $nom = "N/A"; }
			if ($ville == "" ){ $ville = "N/A"; }
			if ($DateProjet == "" ){ $DateProjet = DATETIME('now','localtime'); }

			$sql = $db->prepare("INSERT INTO Dossier (DossNumeroId,DossNomClient,DossPrenomClient,DossVille,DossType,DossStatus,DossPiedLineaire,DossPoteau,DossValeur,DossLstMateriaux,DossDateTravaux) VALUES (:NumeroId,:NomClient,:PrenomClient,:Ville,:Type,:Status,:PiedLineaire,:Poteau,:Valeur,:LstMateriaux,:DateTravaux)");

			$sql->bindValue(":NumeroId",$NoDossier);
			$sql->bindValue(":NomClient",$nom);
			$sql->bindValue(":PrenomClient",$prenom);
			$sql->bindValue(":Ville",$ville);
			$sql->bindValue(":Type",$type);
			$sql->bindValue(":Status",$status);
			$sql->bindValue(":PiedLineaire",$pied);
			$sql->bindValue(":Poteau",$poteau);
			$sql->bindValue(":Valeur",$valeur);
			$sql->bindValue(":LstMateriaux",$lstpieces);
			$sql->bindValue(":DateTravaux",$DateProjet);

			$sql->execute();

			$db = null;
			$sql = null;
		}

		function Connextion($Username,$Mdp){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT UtilisateurType,UtilisateurNom,UtilisateurPrenom FROM Utilisateur WHERE UtilisateurUsername = :Username AND UtilisateurMdp = :Mdp");
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

		function GetLstPiecesDossier($No){

			$db = $this->connectDB();

			$sql = $db->prepare("SELECT DossLstMateriaux FROM Dossier WHERE DossNumeroId = :No ");
			$sql->bindValue(":No", $No);
			$sql->execute();

			$result = $sql->fetch(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function GetDossier($DataId){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Dossier WHERE DossStatus = :Status ORDER BY DossVille ASC");

			$sql->bindValue(":Status", $DataId);
			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function GetAllDossier(){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Dossier ORDER BY DossVille ASC");

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		//recherche
		function GetAllDossierRecherche($No,$Ville,$Prenom,$Nom,$DateDebut,$DateFin,$Status){
			
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Dossier WHERE DossNumeroId LIKE '%' || :NoId || '%' AND DossVille LIKE '%' || :Ville || '%' AND DossPrenomClient LIKE '%' || :Prenom || '%' AND DossNomClient LIKE '%' || :Nom || '%' AND DossStatus LIKE '%' || :Status || '%' AND ( DossDateTravaux BETWEEN :DateDebut AND :DateFin ) ORDER BY DossVille ASC");

			$sql->bindValue(":NoId", $No);
			$sql->bindValue(":Ville", $Ville);
			$sql->bindValue(":Prenom", $Prenom);
			$sql->bindValue(":Nom", $Nom);
			$sql->bindValue(":DateDebut", $DateDebut);
			$sql->bindValue(":DateFin", $DateFin);
			$sql->bindValue(":Status", $Status);

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function FermerDossier($NumeroDossier){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Dossier SET DossStatus = :status WHERE DossNumeroId = :NoId");

			$sql->bindValue(":NoId", $NumeroDossier);
			$sql->bindValue(":status", "Fermé");

			$sql->execute();

			$ActionString = "Fermeture du dossier " . $NumeroDossier . ".";
			$this->InscriptionLog($ActionString);

			$db = null;
			$sql = null;
		}

		function AnnulerDossierEffacer($NumeroDossier){
			$db = $this->connectDB();

			$sql = $db->prepare("DELETE FROM Dossier WHERE DossNumeroId = :NoId");

			$sql->bindValue(":NoId", $NumeroDossier);

			$sql->execute();

			$ActionString = "Annulation du dossier " . $NumeroDossier . ".";
			$this->InscriptionLog($ActionString);

			$db = null;
			$sql = null;
		}

		function AnnulerDossier($NumeroDossier){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Dossier SET DossStatus = :status WHERE DossNumeroId = :NoId");

			$sql->bindValue(":NoId", $NumeroDossier);
			$sql->bindValue(":status", "Annulé");

			$sql->execute();

			$ActionString = "Annulation du dossier " . $NumeroDossier . ".";
			$this->InscriptionLog($ActionString);

			$db = null;
			$sql = null;
		}

		function RetirerQteInv($ID,$Qte,$NoDossier){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Inventaire SET InvQte = InvQte - :Qte WHERE InvNoId = :NoId");

			$sql->bindValue(":NoId", $ID);
			$sql->bindValue(":Qte", $Qte);

			$sql->execute();

			$ActionString = "Sortie de " . $Qte . " " . $ID . " dans le dossier " . $NoDossier . ".";
			$this->InscriptionLog($ActionString);

			$db = null;
			$sql = null;

		}

		function RetraitInv($ID,$Qte){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Inventaire SET InvQte = InvQte - :Qte WHERE InvNoId = :NoId");

			$sql->bindValue(":NoId", $ID);
			$sql->bindValue(":Qte", $Qte);

			$sql->execute();

			$ActionString =  $Qte . " " . $ID . " ont été retiré(s) de l'inventaire.";
			$this->InscriptionLog($ActionString);

			$db = null;
			$sql = null;
		}

		function GetInvConfirmer($DataId = ""){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Inventaire WHERE InvNoId LIKE '%' || :NoId || '%'  ORDER BY InvNoId ASC ");

			$sql->bindValue(":NoId", $DataId);

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

			$sql = $db->prepare("SELECT InvDesc,InvQte,InvPrixCoutant FROM Inventaire WHERE InvNoId = :ID");
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

		function RetirerPiece($ID){
			$db = $this->connectDB();

			$sql = $db->prepare("DELETE FROM Inventaire WHERE InvNoId = :NoId");

			$sql->bindValue(":NoId", $ID);

			$sql->execute();

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

		function RetraitItem($ID,$Qte){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Inventaire SET InvQte = InvQte - :Qte WHERE InvNoId = :NoId");

			$sql->bindValue(":NoId", $ID);
			$sql->bindValue(":Qte", $Qte);

			$sql->execute();

			$ActionString = "Retrait de " . $Qte . " " . $ID . ".";
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

			$sql = $db->prepare("UPDATE Utilisateur SET UtilisateurMdp = :data WHERE ID = :Param");
			$sql->bindValue(":data",crypt($Valeur, 'CL'));
			$sql->bindValue(":Param",$ID);
			$sql->execute();

			$db = null;
			$sql = null;
		}

		//fonction de la page aide
		function AjouterConsultation($ID){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE PagesAides SET PageConsultation = PageConsultation + 1 WHERE ID = :NoId");

			$sql->bindValue(":NoId", $ID);

			$sql->execute();

			$db = null;
			$sql = null;
		}

		function RecevoirNomPage($ID){

			$db = $this->connectDB();

			$sql = $db->prepare("SELECT PageNomPage FROM PagesAides WHERE ID = :NoId");

			$sql->bindValue(":NoId", $ID);

			$sql->execute();
			$result = $sql->fetch(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result["PageNomPage"];
		}

		function GetArticlesFromStr($Data = ""){

			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM PagesAides WHERE PageSujet LIKE '%' || :Data || '%' OR PageDesc LIKE '%' || :Data || '%'  ORDER BY PageConsultation DESC ");

			$sql->bindValue(":Data", $Data);

			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function ResetComteurVisite(){

			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE PagesAides SET PageConsultation = :QTE");

			$sql->bindValue(":QTE", 0);

			$sql->execute();

			$db = null;
			$sql = null;
		}

		function GetLstPieceCommande($NoId){
			$db = $this->connectDB();

			$sql = $db->prepare("SELECT ComLstPiece FROM Commande WHERE ComId = :NoId ");

			$sql->bindValue(":NoId",$NoId);

			$sql->execute();

			$result = $sql->fetch(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return json_decode($result["ComLstPiece"]);
		}

		function AjouterCommande($NoCommande,$Nom,$Tel,$LstPieces){
			$db = $this->connectDB();

			$sql = $db->prepare("INSERT INTO Commande (ComId,ComNom,ComTel,ComLstPiece,ComRamasse) VALUES (:NoId,:Nom,:Tel,:LstPiece,:Ramasse)");

			
			$sql->bindValue(":Tel", $Tel);
			$sql->bindValue(":LstPiece", $LstPieces);
			$sql->bindValue(":Ramasse", "NON");
			$sql->bindValue(":NoId", $NoCommande);
			$sql->bindValue(":Nom", $Nom);

			$sql->execute();

			$db = null;
			$sql = null;
		}

		function GetAllCommande(){

			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Commande ORDER BY ComId ASC ");

			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function GetCommandeFromId($ID){

			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Commande WHERE ComId = :ID ORDER BY ComId ASC ");

			$sql->bindValue(":ID", $ID);

			$sql->execute();
			$result = $sql->fetch(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function GetAllCommandeNonRamasse(){

			$db = $this->connectDB();

			$sql = $db->prepare("SELECT * FROM Commande WHERE ComRamasse = :Data ORDER BY ComId ASC ");

			$sql->bindValue(":Data", "NON");

			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			$db = null;
			$sql = null;

			return $result;
		}

		function FermerCommande($NoId){
			$db = $this->connectDB();

			$sql = $db->prepare("UPDATE Commande SET ComRamasse = :Statue WHERE ComId = :NoId");

			$sql->bindValue(":Statue","OUI");
			$sql->bindValue(":NoId",$NoId);

			$sql->execute();
			$db = null;
			$sql = null;
		}

	}
?>