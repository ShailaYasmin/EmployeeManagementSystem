
<?php
$conn =new mysqli('localhost','root','','test');


$eID = $_POST['eID'];
  

$query =  "DELETE FROM events WHERE ID='".$eID."' "; 
  if (mysqli_query($conn, $query)) {
    echo json_encode(array("statusCode"=>200));
  
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);



?>        