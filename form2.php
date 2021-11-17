<?php
session_start();
	if(isset($_POST['csrf']) && $_POST ['csrf'] === $_SESSION['csrf']){
		echo "berhasil, ".$_POST["data"];
	}
	else{
		echo "gagal";
	}
?>