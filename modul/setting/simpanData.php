<?php 

require_once '../../function/db_connect.php';
//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());
	$namasekolah=$connect->real_escape_string($_POST['nama_sekolah']);
	$alamatsekolah=$connect->real_escape_string($_POST['alamat_sekolah']);
	$versi=$connect->real_escape_string($_POST['versi']);
		$sql = "UPDATE konfigurasi SET tapel='$tapel', semester='$smt', maintenis='$maintenis', nama_sekolah='$namasekolah', alamat_sekolah='$alamatsekolah', versi='$versi' WHERE id_conf='1'";
	if($query === TRUE) {			
	
	// close the database connection
	$connect->close();

	echo json_encode($validator);

}