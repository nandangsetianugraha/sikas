<?php 

require_once '../../function/db_connect.php';
//if form is submitted
if($_GET) {	

	$validator = array('success' => false, 'messages' => array());
	if($query1 === TRUE) {			
	
	// close the database connection
	$connect->close();

	echo json_encode($validator);

}