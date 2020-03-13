<?php
if($_SERVER ['REQUEST_METHOD']=='POST'){
	$RESPONSES = array();
	$npm = $_POST ['npm'];
	$nama= $_POST ['nama'];
	$kelas = $_POST ['kelas'];
	$sesi= $_POST ['sesi'];

	requre_once ('dbConnect.php')
	$sql = "SELECT * FROM tabel WHERE NPM ='$npm'";
	$check = mysql_fect_array(mysql_query($con,$sql));
	if (isset ($check)){
	$response["value"] = 0;
	$response["message"]="oops!NMP sudah daftar!";
	echo json_encode(response);
	}else{
	$sql = "INSERT INTO tabel (npm,nama,kelas,sesi)VALUES('$npm','$nama','$kelas','$sesi') ";
	if (mysqli_query($con,$sql)){
	$response["value"] = 1;
	$response["message"]="sukses mendaftar";
	echo json_encode(response);
	}else{
	$response["value"] = 0;
	$response["message"]="oops!coba lagi";
	echo json_encode(response);

	}
	

}
mysqli_close($con);
}else{
$response["value"] = 0;
	$response["message"]="oops!coba lagi";
	echo json_encode(response);

	
}