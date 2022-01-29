<?php
// Include the database connection file
$user = new User;
$connection = new mysqli("localhost","root","","test");
 
$Div_Id = $_POST["Div_Id"]; 
 
 // Fetch state name base on country id
 $query = "SELECT Dep_Id,Dep_Name FROM department WHERE Div_Id = $Div_Id";
 $result = $connection->query($query);
 ?>
 <option value="">Select Department</option>
 <?php
 while($row=mysqli_fetch_assoc($result))
 {
    $DepName= $row['Dep_Name']; 
    $Dep_ID=$row['Dep_Id'];
 
 ?>    
    
 <option Value="<?php echo  $Dep_ID ?>"><?php echo $DepName ?></option>
 <?php
}
?> 
 