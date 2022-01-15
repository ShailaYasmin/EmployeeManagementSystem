<?php
$conn =new mysqli('localhost','root','','test');

// $ProductID = isset($_GET['GetId']) ? $_GET['GetId'] : '';
     $Div_ID = $_POST['DivID'];
     $Div_name = $_POST['DivName'];
     $DivStatus = $_POST ['DivStatus'];

	 
 
     $query= "UPDATE division SET Div_Name='".$Div_name."', status='".$DivStatus."' WHERE Div_Id='".$Div_ID."'"; 
      
	if (mysqli_query($conn, $query)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
 
     
     ?>