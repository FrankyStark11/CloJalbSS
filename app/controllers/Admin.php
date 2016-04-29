<?php
	include_once("../app/models/Home.php");

	class Admin extends Controller
	{
		public function Insertion(){
			$Model = new modHome();
			$Model->InsertionItem();
			parent::view('Home/Insertion');
		}

		public function RetourMenu(){
			parent::view("Home/Menu1");
		}

		public function TerminerSession(){
			$Model = new modHome();
			//ajoute l'action au log
			$ActionString = "Déconnexion du système!";
			$Model->InscriptionLog($ActionString);
			session_unset();
			parent::view("Home/Login");
			header("Refresh:0; ../Home/Login");
		}

		public function RetirerPiece(){
			$Model = new modHome();

			$Param = $_GET["NoId"];

			$Model->RetirerPiece($Param);

			//Ajout au log
			$ActionString = "La piece " . $Param . " à été supprimée.";
			$Model->InscriptionLog($ActionString);

			parent::view('Home/index');
		}

		public function ModifConf(){
			$Model = new modHome();

			$Param = $_POST["TxtParam"];
			$Valeur = $_POST["TxtPourcent"];

			$Model->ModifierConfig($Param,$Valeur);

			//Ajout au log
			$ActionString = "Configuration ".$Param." à été modifié pour " . $Valeur;
			$Model->InscriptionLog($ActionString);

			parent::view('Home/Config');
		}

		public function EnregistrerDossier(){
			
			$Model = new modHome();

			$NoDossier = date("Y") . date("m") . date("d");//generer selon la date
			$NoDossier = $NoDossier . "-" . $Model->GetNbDossierFromDate($NoDossier);

			$prenom =  $_POST["TxtClientPrenomSR"];
			$nom = $_POST["TxtClientNomSR"];
			$ville = $_POST["TxtVilleProjetSR"];
			$type = $_POST["TypeDossier"];
			$status = "Ouvert";
			$pied = $_POST["PiedLineaireHidden"];
			$poteau = $_POST["PoteauTotalHidden"];
			$valeur = $_POST["ValeurTotal"];
			$lstpieces = $_POST["LstPieces"];
			$DateProjet = $_POST["TxtDateProjetSR"];


			$Model->InsertionDossier($NoDossier,$prenom,$nom,$ville,$type,$status,$pied,$poteau,$valeur,$lstpieces,$DateProjet);

			//Ajout au log
			$ActionString = "Le dossier de ".$prenom . " ". $nom . " à été ajouté. Le numero de dossier est le " . $NoDossier . ".";
			$Model->InscriptionLog($ActionString);

			$_SESSION["NoConfirmation"] = $NoDossier;
			parent::view('Home/ConfirmationEnregistrementDossier');
		}

		public function AnnulerDossierConserver(){
			$Model = new modHome();
			$Model->AnnulerDossier($_GET["NoDossier"]);
			parent::view('Home/ConfirmationAnnulationDossier');
		}

		public function AnnulerDossierEffacer(){
			$Model = new modHome();
			$Model->AnnulerDossierEffacer($_GET["NoDossier"]);
			parent::view('Home/ConfirmationAnnulationDossier');
		}

		public function ModifMdp(){
			$Model = new modHome();

			$Param = $_POST["TxtID"];
			$Nom = $_POST["Nom"];
			$Valeur = $_POST["TxtMdp"];

			$Model->ModifierMdpUtilisateur($Param,$Valeur);

			//Ajout au log
			$ActionString = "Le mot de passe de ".$Nom." à été modifié.";
			$Model->InscriptionLog($ActionString);

			parent::view('Home/Menu5');
		}

		public function GetProfils(){
			$Model = new modHome();
			$Str = $_POST["Recherche"];

			$result = $Model->GetAllUserRecherche($Str);
			echo json_encode($result);
		}

		public function FermetureDossier(){

			$Arr = json_decode($_POST["LstPieces"]);
			$Model = new modHome();

			foreach($Arr as $e){
				$Model->RetirerQteInv($e[0],$e[1],$_POST["NoDossier"]);
			}

			$Model->FermerDossier($_POST["NoDossier"]);
			parent::view('Home/ConfirmationFermetureDossier');
		}

		public function InsertionUtilisateur(){
			$Model = new modHome();

			$Nom = $_POST["TxtNomAjoutUtilisateur"];
			$Prenom = $_POST["TxtPrenomAjoutUtilisateur"];
			$User = $_POST["txtUsernameAjoutUtilisateur"];
			$Mdp = $_POST["txtmdpAjoutUtilisateur"];
			$Type = intval($_POST["SelectTypeAjoutUtilisateur"]);

			$Model->InsertionUtilisateur($Nom,$Prenom,$User,$Mdp,$Type);

			//Ajout au log
			$ActionString = "Création de l'utilisateur de type ".$Type.", " . $Nom . " sous le Username ". $User;
			$Model->InscriptionLog($ActionString);

			parent::view('Home/Menu5');

		}

		public function RetirerUtilisateur(){
			$Model = new modHome();

			$ID = $_GET['ID'];
			$Nom = $_GET['Nom'];

			$Model->RetirerUtilisateur($ID);

			//Ajout au LOG
			$ActionString = "Retrait de l'utilisateur " . $Nom ;
			$Model->InscriptionLog($ActionString);

			parent::view('Home/Menu5');
		}

		public function Login(){
			$Model = new modHome();
			$U = $_POST["User"];
			$M = $_POST["MDP"];

			$utilisateur = $Model->Connextion($U,$M);

			$_SESSION["NomUtilisateur"] = $utilisateur["UtilisateurPrenom"];
			$_SESSION["TypeCompte"] = $utilisateur["UtilisateurType"];

			//ajoute l'action au log
			$ActionString = "Connexion au système!";
			$Model->InscriptionLog($ActionString);

			if(isset($_SESSION["NomUtilisateur"])){parent::view('Home/Menu1');}else{parent::view('Home/Login');}
		}

		public function Modification(){

			$Model = new modHome();
			$Model->ModificationItem();
			parent::view('Home/Index');
		}

		public function ResetCompteur(){
			$Model = new modHome();
			$Model->ResetComteurVisite();
			//ajoute l'action au log
			$ActionString = "Les compteurs de page d'aide sont remit à 0.";
			$Model->InscriptionLog($ActionString);

			parent::view('Home/ConfigGeneral');
		}

		public function ReceptionUpdate(){
			//prepare le model
			$model = new modHome();
			//recois le JSON en param
			$JSONString = $_GET["JSONParam"];
			//transforme le JSON en array pour le traitement
			$JSONParam = json_decode($JSONString);

			//fonction pour generer un ID unique
			function generateRandomString($length = 10) {
			    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $randomString = '';
			    for ($i = 0; $i < $length; $i++) {
			        $randomString .= $characters[rand(0, $charactersLength - 1)];
			    }
			    return $randomString;
			}

			//genere le numero de PO
			$POGenere = generateRandomString(15);

			//creation du fichier excel
			require_once 'ExcelPHP/PHPExcel.php';
			$objPHPExcel = new PHPExcel();

			$styleArrayHead = array(
		    	'font'  => array(
		        'bold'  => false,
		        'color' => array('rgb' => '000000'),
		        'size'  => 12,
		        'name'  => 'Verdana'
		    ));

		    //propriété du fichier excel
			$objPHPExcel->getProperties()->setCreator("Clôture Jalbert")
						->setLastModifiedBy("Auteur")
						->setTitle("PO reception")
						->setSubject("PO")
						->setDescription("Confirmation generer par systeme")
						->setKeywords("php")
						->setCategory("Reception");

			//Ajout du titre au fichier excel
			$TitleStr = 'Confirmation de reception PO';
			$objPHPExcel->getActiveSheet()->setTitle($TitleStr);

			//mise en place template entete document 
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1','Date');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2','PO');

			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1',date("Y/m/d"));
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B2',$POGenere);

			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1','CONFIRMATION');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D2','DE RÉCEPTION');

			//style pour date et #po
			$objPHPExcel->getActiveSheet()->getStyle('A1:B1')->applyFromArray($styleArrayHead);
			$objPHPExcel->getActiveSheet()->getStyle('A2:B2')->applyFromArray($styleArrayHead);

			//applique les couleurs sur lentete
			$objPHPExcel->getActiveSheet()->getStyle('A3:D4')->getFill()->applyFromArray(array(
	        'type' => PHPExcel_Style_Fill::FILL_SOLID,
	        'startcolor' => array(
		    'rgb' => '808080')
	   	 	));

			//entete de colonne 
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A4',"");
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B4', "# de piece ");
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C4', " Description ");
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D4'," Quantité ");

			//remplir linformation du PO pour tous les elements	
			for ($i=1; $i <= count($JSONParam) ; $i++)
			{ 
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i+4) , $i." ->");
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.($i+4) , $JSONParam[$i-1]->ID);
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.($i+4) , $JSONParam[$i-1]->Description);
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.($i+4) , $JSONParam[$i-1]->Qte);
			}

			//ajustement de largeur de colonne
			foreach (range(0, 3) as $col)
			{
			    $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn($col)->setAutoSize(true);                
			}

			//Écriture du fichier
			require_once 'ExcelPHP/PHPExcel/IOFactory.php';
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			$NameStr = $POGenere.'.xls';
			utf8_encode($NameStr);
			$objWriter->save('ConfirmationPO/'.$NameStr);

			//update dans le model
			foreach ($JSONParam as $value) {
			    $model->ReceptionItem($value->ID,$value->Qte);
			}
			
			$_SESSION["No"] = $POGenere;
			parent::view('Home/ConfirmationReception');
		}

		public function RetraitUpdate(){
			//prepare le model
			$model = new modHome();
			//recois le JSON en param
			$JSONString = $_GET["JSONParam"];
			//transforme le JSON en array pour le traitement
			$JSONParam = json_decode($JSONString);

			//fonction pour generer un ID unique
			function generateRandomString($length = 10) {
			    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $randomString = '';
			    for ($i = 0; $i < $length; $i++) {
			        $randomString .= $characters[rand(0, $charactersLength - 1)];
			    }
			    return $randomString;
			}

			//genere le numero de PO
			$POGenere = generateRandomString(15);

			//creation du fichier excel
			require_once 'ExcelPHP/PHPExcel.php';
			$objPHPExcel = new PHPExcel();

			$styleArrayHead = array(
		    	'font'  => array(
		        'bold'  => false,
		        'color' => array('rgb' => '000000'),
		        'size'  => 12,
		        'name'  => 'Verdana'
		    ));

		    //propriété du fichier excel
			$objPHPExcel->getProperties()->setCreator("Clôture Jalbert")
						->setLastModifiedBy("Auteur")
						->setTitle("PO reception")
						->setSubject("PO")
						->setDescription("Confirmation generer par systeme")
						->setKeywords("php")
						->setCategory("Reception");

			//Ajout du titre au fichier excel
			$TitleStr = 'Confirmation de reception PO';
			$objPHPExcel->getActiveSheet()->setTitle($TitleStr);

			//mise en place template entete document 
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1','Date');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2','PO');

			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1',date("Y/m/d"));
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B2',$POGenere);

			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1','CONFIRMATION');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D2','DE RETRAIT');

			//style pour date et #po
			$objPHPExcel->getActiveSheet()->getStyle('A1:B1')->applyFromArray($styleArrayHead);
			$objPHPExcel->getActiveSheet()->getStyle('A2:B2')->applyFromArray($styleArrayHead);

			//applique les couleurs sur lentete
			$objPHPExcel->getActiveSheet()->getStyle('A3:D4')->getFill()->applyFromArray(array(
	        'type' => PHPExcel_Style_Fill::FILL_SOLID,
	        'startcolor' => array(
		    'rgb' => '808080')
	   	 	));

			//entete de colonne 
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A4',"");
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B4', "# de piece ");
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C4', " Description ");
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D4'," Quantité ");

			//remplir linformation du PO pour tous les elements	
			for ($i=1; $i <= count($JSONParam) ; $i++)
			{ 
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i+4) , $i." ->");
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.($i+4) , $JSONParam[$i-1]->ID);
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.($i+4) , $JSONParam[$i-1]->Description);
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.($i+4) , $JSONParam[$i-1]->Qte);
			}

			//ajustement de largeur de colonne
			foreach (range(0, 3) as $col)
			{
			    $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn($col)->setAutoSize(true);                
			}

			//Écriture du fichier
			require_once 'ExcelPHP/PHPExcel/IOFactory.php';
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			$NameStr = $POGenere.'.xls';
			utf8_encode($NameStr);
			$objWriter->save('ConfirmationRetrait/'.$NameStr);

			//update dans le model
			foreach ($JSONParam as $value) {
			    $model->RetraitItem($value->ID,$value->Qte);
			}
			
			$_SESSION["No"] = $POGenere;
			parent::view('Home/ConfirmationRetrait');
		}
	}
	
?>