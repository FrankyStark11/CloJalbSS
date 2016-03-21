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

		public function ReceptionUpdate(){
			$model = new modHome();
			$JSONString = $_GET["JSONParam"];
			$JSONParam = json_decode($JSONString);

			function generateRandomString($length = 10) {
			    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $randomString = '';
			    for ($i = 0; $i < $length; $i++) {
			        $randomString .= $characters[rand(0, $charactersLength - 1)];
			    }
			    return $randomString;
			}

			$POGenere = generateRandomString(15);

			//echo $JSONParam[0]->ID;

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

			parent::view('Home/Reception');
		}
	}
	
?>