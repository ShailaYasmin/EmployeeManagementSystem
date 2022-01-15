
<?php
$conn =new mysqli('localhost','root','','test');


$Div_ID = $_POST['DivID'];
  

$query =  "DELETE FROM division WHERE Div_Id='".$Div_ID."' "; 
  if (mysqli_query($conn, $query)) {
    echo json_encode(array("statusCode"=>200));
  
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);



?>        