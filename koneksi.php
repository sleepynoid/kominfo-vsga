<?php

	$koneksi = mysqli_connect("my-pod-mariadb-container","root","my-secret-pw","vsga");
	$db = mysqli_select_db($koneksi, "vsga");

	if (mysqli_connect_error()){
		echo "Konksi ke database gagal : " .mysqli_connect_error();
	}

?>