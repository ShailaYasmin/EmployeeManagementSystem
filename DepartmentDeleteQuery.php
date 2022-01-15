<?php
$conn =new mysqli('localhost','root','','test');


$Dep_ID = $_POST['DepID'];
  

$query =  "DELETE FROM department WHERE Dep_Id='".$Dep_ID."' "; 
  if (mysqli_query($conn, $query)) {
    echo json_encode(array("statusCode"=>200));
  
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);



?>        