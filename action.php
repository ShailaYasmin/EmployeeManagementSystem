<?php
// Include the database connection file
$user = new User;
$connection = new mysqli("localhost","root","","test");
 
if (isset($_POST['Div_ID']) && !empty($_POST['Div_ID'])) {
 
 // Fetch state name base on country id
 $query = "SELECT Dep_Id,Dep_Name FROM department WHERE Div_Id = ".$_POST['Div_ID'];
 $result = $connection->query($query);
 
 while($row=mysqli_fetch_assoc($result))
 {
     
     $DepName= $row['Dep_Name']; 
     $Dep_ID=$row['Dep_Id'];
?>   
 <option Value="<?php echo  $Dep_ID ?>"><?php echo $DepName ?></option>
<?php}?>
 }