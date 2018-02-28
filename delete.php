<?php 
	$con=mysqli_connect("localhost", "admin", "123456", "angularjs");
	$data=json_decode(file_get_contents("php://input"));
	var_dump($data->id);
	$id=$data->id;
	$query="DELETE FROM tbuser WHERE id=$id";
	if(mysqli_query($con, $query)){
		echo "Delete Complete";
	}else{
		echo "Can not delete data";
	}
?>