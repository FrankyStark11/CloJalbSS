<?php
class topDB {

	/*var $user = 'root';
	var $pass ='';
	var $host = 'localhost';
	var $db = 'jalbert';	
	var $link_id;
	var $result;
	var $rows;
	var $data = array();*/

	
    var $user = 'dbo362228705';
	var $pass ='selma11';
	var $host = 'db2888.perfora.net';
	var $db = 'db362228705';
	var $link_id;
	var $result;
	var $rows;
	var $data = array();


	function connect() {

		$this->link_id = mysql_connect( $this->host, $this->user, $this->pass );

		mysql_select_db( $this->db, $this->link_id );

				}

	
	function disconnect() {

		mysql_close( $this->link_id );

			}	


	function execute($sql) {

		$this->result = mysql_query( $sql, $this->link_id ) or die(mysql_error());

		$this->rows = mysql_affected_rows( $this->link_id );

		
		switch(substr($sql, 0, 6)) {
		
			case "SELECT" :

				while ( $data_row = mysql_fetch_array ( $this->result ) ) {

					$this->data[] = $data_row;

				}

			
			if ( !empty($topdb->data) ) {

					return $this->data;

					return $this->rows;

				}
			

			break;


			default :

			
					return $this->rows;

			
			break;			

		}	

	}

}

$topdb = new topdb();
$topdb->connect();

$MAIL=$_POST['email'];

$sql = "INSERT INTO TabEmailLancement (Courriel) VALUES ('$MAIL')";
$topdb->execute($sql);

header('Location: http://www.cloturejalbert.com/');
?>