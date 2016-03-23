<?php
	include_once("../app/models/Home.php");

	class Admin extends Controller
	{
		public function Insertion(){

			$Model = new modHome();
			$Model->InsertionItem();
			parent::view('Home/Insertion');
		}

		public function TerminerSession(){
			$Model = new modHome();
			//ajoute l'action au log
			$ActionString = "Déconnexion du système!";
			$Model->InscriptionLog($ActionString);
			session_unset();
			parent::view("Home/Login");
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

		public function ModifMdp(){
			$Model = new modHome();

			$Param = $_POST["TxtUser"];
			$Valeur = $_POST["TxtMdp"];

			$Model->ModifierMdpUtilisateur($Param,$Valeur);

			//Ajout au log
			$ActionString = "Le mot de passe de ".$Param." à été modifié.";
			$Model->InscriptionLog($ActionString);

			parent::view('Home/Config');
		}

		public function InsertionUtilisateur(){
			$Model = new modHome();

			$Nom = $_POST["TxtNomAjoutUtilisateur"];
			$User = $_POST["txtUsernameAjoutUtilisateur"];
			$Mdp = $_POST["txtmdpAjoutUtilisateur"];
			$Type = intval($_POST["SelectTypeAjoutUtilisateur"]);

			$Model->InsertionUtilisateur($Nom,$User,$Mdp,$Type);

			//Ajout au log
			$ActionString = "Création de l'utilisateur de type ".$Type.", " . $Nom . " sous le Username ". $User;
			$Model->InscriptionLog($ActionString);

			parent::view('Home/Config');

		}

		public function Login(){
			$Model = new modHome();
			$U = $_POST["User"];
			$M = $_POST["MDP"];

			$utilisateur = $Model->Connextion($U,$M);

			print_r($utilisateur);

			if($utilisateur["UtilisateurType"] == 1 || $utilisateur["UtilisateurType"] == 2 || $utilisateur["UtilisateurType"] == 0){

				$_SESSION["NomUtilisateur"] = $utilisateur["UtilisateurNom"];
				$_SESSION["TypeCompte"] = $utilisateur["UtilisateurType"];

				//ajoute l'action au log
				$ActionString = "Connexion au système!";
				$Model->InscriptionLog($ActionString);

				parent::view('Home/Index');
			}
			else
			{
				echo "pas connecter";
				//parent::view("Home/Login");
			}
			

		}

		public function Modification(){

			$Model = new modHome();
			$Model->ModificationItem();
			parent::view('Home/Index');
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
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i+4) , $i."->");
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
			

			parent::view('Home/Reception');
		}
	}
	
?>