<?php 

require_once '../../function/db_connect.php';
//if form is submitted
if($_POST) {	
		$validator['success'] = false;
		$validator['messages'] = "Tidak Boleh Kosong Datanya!";
	}else{
			$sql = "INSERT INTO tarif_spp(peserta_didik_id,tarif) VALUES('$idr','$tarif')";
			$query = $connect->query($sql);
			$validator['success'] = true;
			$validator['messages'] = "Tarif berhasil ditambah";	
	};
	
	// close the database connection
	$connect->close();

	echo json_encode($validator);

}