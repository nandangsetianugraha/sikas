<?php 

require_once '../../function/db_connect.php';
//if form is submitted
if($_POST) {	
		$validator['success'] = false;
		$validator['messages'] = "Tidak Boleh Kosong Datanya!";
	}else{
			$sql = "INSERT INTO tunggakan_lain(peserta_didik_id,tapel,jenis,tarif) VALUES('$idr','$tapel','$jenis','$tarif')";
			$validator['success'] = true;
			$validator['messages'] = "Tarif berhasil ditambah!";		
	};
	
	// close the database connection
	$connect->close();

	echo json_encode($validator);

}