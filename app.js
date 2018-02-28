var app=angular.module("myApp", []);
app.controller("usercontroller", function($scope, $http){
	$scope.btnName="Insert"; //button status

	/* Insert data */
	$scope.insertData=function(){
		if($scope.fName==null){
			sweetAlert("FirstName Require", "Error", "warning");
			return false;
		}
		if($scope.lName==null){
			sweetAlert("LastName Require", "Error", "warning");
			return false;			
		}else{
			$http.post("insert.php", 
				{'fName':$scope.fName, 'lName':$scope.lName, 'btnName':$scope.btnName, 'id':$scope.id}
			).then(function(data){	
				sweetAlert("Data Complete", "Insert Complete Form", "success");
				/*after click save button*/
				$scope.fName=null;
				$scope.lName=null;
				$scope.btnName="Insert";
				/* refresh page */
				$scope.disPlayData();
			});
		}
	}

	/* Delete data by row */
	$scope.deleteData=function(id){
		$scope.id = id;
		swal({
		  title: "Are you sure?",
		  text: "Confirm Delete Record!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		}).then((willDelete) => {
		  if (willDelete) {
			$http.post('delete.php', {'id':$scope.id}).then(function(data){
				swal("Deleted!", "Your record has been deleted", { icon: "success"});
			});			
			/* redirect to all list page */ 
			$scope.disPlayData();
		  }else{
		    swal("Your file is safe!");
		  }
		});	
	}

	/* Update data by row */
	$scope.updateData=function(id, fname, lname){
		$scope.id=id;
		$scope.fName=fname;
		$scope.lName=lname;
		$scope.btnName="Update";
	}

	/* Shoe all row*/
	$scope.disPlayData=function(){
		$http.get("select.php").then(function(response){
			$scope.names=response.data.records;
		});
	}

});