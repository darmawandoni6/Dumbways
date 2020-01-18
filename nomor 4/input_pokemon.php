<?php
	include 'koneksi.php';

	$nama = $_POST['txtNama'];
	$str = $_POST['txtSTR'];
	$def = $_POST['txtDEF'];
	$pic = $_POST['txtPIC'];

	$result =mysqli_query($con,"insert into pokemon_tb values('','$nama','$str','$def',$pic)");
	if(!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($con)." - ".mysqli_error($con));
}
                      else
                      {
header("location:4.php");
                      }
?>