<?php 
	$con=mysqli_connect("localhost", "admin", "123456", "angularjs");
	$data=json_decode(file_get_contents("php://input"));
	if(count($data)>0){
		$fName=mysqli_real_escape_string($con, $data->fName);
		$lName=mysqli_real_escape_string($con, $data->lName);
		$id=$data->id;
		$btnName=$data->btnName; //button status
		/* cluck insert button */
		if($btnName=="Insert"){
			$query="INSERT INTO tbuser(fname, lname) values ('$fName', '$lName')";
			if(mysqli_query($con, $query)){
				echo "Data Inserted";
			}else{
				echo "Can not insert data";
			}
		}
		/* click update button */
		if($btnName=="Update"){
			$query="UPDATE tbuser SET fname='$fName', lname='$lName' WHERE id=$id";
			if(mysqli_query($con, $query)){
				echo "Updated Complete";
			}else{
				echo "Can not update data";
			}
		}
	}
?>