<?php
error_reporting(0);
$username = $_POST['username'];
$password = $_POST['password'];
echo $username;

$responce = array();
$responce['Status'] = "NOT-CONNECTED";
try{
	$connectionObject = new mysqli('localhost',$username,$password);
	if($connectionObject->connect_error){
		$responce["Status"] = "ERR";
	}
	else {
		$responce["Status"] = "WHAT?";
	}
}
catch(Exception $e){
	$responce["Status"] = "UNN-ERR";

}

echo json_encode($responce);
?>