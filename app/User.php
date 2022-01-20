<?php


	/**
 	* 
	 */
	class user
	{
		public $connection;

		function __construct()
		{
			// $user ='fundbox';
			// $pass='oracle';
			// $db='localhost/XE';
			// $connection = oci_connect($user, $pass, $db);
		}
		/**
		* USer registration System 
		*/
		public function userRegistraion($name, $email, $pass1)
		{	//echo "Here";

			 $connection = new mysqli("localhost","root","","test");

			$sql = "SELECT MAX(ID) FROM report";
			$data =mysqli_query($connection, $sql);
			
			$row = mysqli_fetch_array($data, MYSQLI_ASSOC);
			$id = $row['MAX(ID)'];
			// echo " id is ";
			// echo $id ;
			$id = $id + 1 ;
			$sql1 = "INSERT INTO report (ID,NAME, EMAIL, PASSWORD) VALUES ($id,'$name','$email','$pass1')";
			$data1 = mysqli_query($connection, $sql1);
			
			if($data1){
				return true;
			}else{
			return false;
			}
		}
		public function createEvent($name, $email, $LocalIp, $HostName, $MacAddress, $PabxIp, $Extension,$Department,$Division)
		{	//echo "Here";

			$connection = new mysqli("localhost","root","","test");

			$sql1 = "INSERT INTO events (NAME, EMAIL, LOCAL_IP , HOST_NAME, MAC_ADDRESS, PABX_IP, EXTENSION,DEPARTMENT,DIVISION) VALUES ('$name', '$email', '$LocalIp', '$HostName', '$MacAddress', '$PabxIp', '$Extension', '$Department', '$Division')";
			$data1 =  mysqli_query($connection, $sql1);
		    
	
			if($data1){
				return true;
			}else{
			return false;
			}
		}
             

		public function EventUpdate($eID,$eName,$email,$LocalIp,$HostName,$MacAddress,$PabxIp,$Extension,$Department,$Division)
		{	//echo "Here";

			$connection = new mysqli("localhost","root","","test");

			$sql1 = "UPDATE `events` SET `NAME`='$eName',`EMAIL`='$email',`LOCAL_IP`='$LocalIp',`HOST_NAME`='$HostName',`MAC_ADDRESS`='$MacAddress',`PABX_IP`='$PabxIp',`EXTENSION`='$Extension',`DEPARTMENT`='$Department',`DIVISION`='$Division' WHERE ID=$eID";
			$data1 =  mysqli_query($connection, $sql1);
		    
	
			if($data1){
				return true;
			}else{
			return false;
			}
		}

		public function Division($Div_name, $DivStatus)
          {
			$connection = new mysqli("localhost","root","","test");
			$sql1 = "INSERT INTO division (Div_Name, status)VALUES ('$Div_name', '$DivStatus')";
			$data1 =  mysqli_query($connection, $sql1);
		    
	
			if($data1){
				return true;
			}else{
			return false;
			}
		}
		public function DivisionUpdate($Div_ID,$Div_name, $DivStatus)

{ //echo "Here";



$connection = new mysqli("localhost","root","","test");



//$sql = "SELECT MAX(ID) FROM events";

//$data = mysqli_query($connection, $sql);

//$row = mysqli_fetch_array($data, MYSQLI_ASSOC);

//$id = $row['MAX(ID)'];

// echo " id is ";

//echo $id ;

//$id = $id + 1 ;

//$sql1= "UPDATE division SET Div_Name='".$Div_name."', status='".$DivStatus."' WHERE Div_Id="$Div_ID;

//$sql1 = "UPDATE division SET Div_Name='$Div_name' WHERE Div_Id=$Div_ID";

$sql1 = "UPDATE `division` SET `Div_Name`='$Div_name',`status`='$DivStatus' WHERE Div_Id = $Div_ID";

//$sql1 = "INSERT INTO division (Div_Name, status)VALUES ('$Div_name', '$Div_ID')";

$data1 = mysqli_query($connection, $sql1);

if($data1){

return true;

}else{

return false;

}

}

public function DepartmentUpdate( $Dep_ID, $Dep_Name,  $Div_ID)

{ //echo "Here";



$connection = new mysqli("localhost","root","","test");



//$sql = "SELECT MAX(ID) FROM events";

//$data = mysqli_query($connection, $sql);

//$row = mysqli_fetch_array($data, MYSQLI_ASSOC);

//$id = $row['MAX(ID)'];

// echo " id is ";

//echo $id ;

//$id = $id + 1 ;

//$sql1= "UPDATE division SET Div_Name='".$Div_name."', status='".$DivStatus."' WHERE Div_Id="$Div_ID;

//$sql1 = "UPDATE division SET Div_Name='$Div_name' WHERE Div_Id=$Div_ID";

$sql1 = "UPDATE `department` SET `Dep_Name`='$Dep_Name',`Div_Id`='$Div_ID' WHERE Dep_Id = $Dep_ID";

//$sql1 = "INSERT INTO division (Div_Name, status)VALUES ('$Div_name', '$Div_ID')";

$data1 = mysqli_query($connection, $sql1);

if($data1){

return true;

}else{

return false;

}

}


		public function Department($DepName, $DivId )
		{	//echo "Here";

			$connection = new mysqli("localhost","root","","test");

			//$sql = "SELECT MAX(ID) FROM events";
			//$data =  mysqli_query($connection, $sql);
			
			//$row = mysqli_fetch_array($data, MYSQLI_ASSOC);
			//$id = $row['MAX(ID)'];
			// echo " id is ";
			 //echo $id ;
			//$id = $id + 1 ;
			$sql1 = "INSERT INTO department (Dep_Name,Div_Id)VALUES ('$DepName', '$DivId')";
			$data1 =  mysqli_query($connection, $sql1);
		    
	
			if($data1){
				return true;
			}else{
			return false;
			}
		}

		/**
		* Email check 
		*/
		public function emailCheck($email)
		{

			$connection = new mysqli("localhost","root","","test");
			$sql = "SELECT * FROM report WHERE EMAIL = '$email'";
			$data = mysqli_query($connection, $sql);
			
			$count =0;
			while (($res =mysqli_fetch_array($data, MYSQLI_ASSOC)) != false) {
				//echo htmlentities($res['EMAIL']) . "<br>";
				$count = $count+1;
				//echo $count;
   			}

			if( $count == 1 ){
				return false;
			}else{
				return true;
			}

		}
		public function allUser()
		{
			
			$connection = new mysqli("localhost","root","","test");
			$sql = "SELECT * FROM report WHERE STATUS=0";
			$data =  mysqli_query($connection, $sql);
			mysqli_execute($data);
			
			// while (($res = oci_fetch_array($data, OCI_ASSOC)) != false) {
			// 	//echo htmlentities($res['EMAIL']) . "<br>";
			// 	$count = $count+1;
			// 	//echo $count;
			// $single_user_data = array(oci_fetch_array($data));
			// echo $single_user_data;
   			
			return mysqli_fetch_array($data, MYSQLI_ASSOC);

		
			

		}


		/**
		 * User Login System 
		 */

		public function userLoginSystem($email, $pass)
		{

			$connection = new mysqli("localhost","root","","test");
			$sql = "SELECT * FROM report WHERE email = '$email'";
			$data = mysqli_query($connection, $sql);
			

			$single_user_data = mysqli_fetch_array($data);


				if($single_user_data){
					if( $single_user_data['STATUS']== 0 ){
						//if( password_verify( $pass , $single_user_data['pass'] ) == true ){
						if( $pass == $single_user_data['PASSWORD'] ){

								header("location:UserDashboard.php");
		
						}else{
							header("location:login.php");
		
							return "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'> Wrong Password !</p>";
		
		
						}
		
					}else {
						return "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'> Wrong email address !</p>";
					}
				}
				else{
					return "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'> Wrong email address !</p>";
				}

		}

		// public function allAdminCount()
		// {
			
		// 	$connection = new mysqli("localhost","root","","test");
		// 	//SELECT COUNT(*) FROM EVENTS;
		// 	$sql = "SELECT COUNT(*) FROM events";
		// 	$data = mysqli_query($connection, $sql);
			
		// 	$single_user_data = mysqli_fetch_array($data);
		// 	$id = $single_user_data['COUNT(*)'];
		// 	// $data = mysqli_query($connection, "BEGIN
		// 	// 								:returnValue := totalAdmin();
		//  	// 								END;");
		// 	// 								 mysqli_bind_by_name($data,":returnValue",$returnValue);

		// 	return $id;
		// }
		
		public function allUserCount()
		{
			
			$connection = new mysqli("localhost","root","","test");
			$sql = "SELECT COUNT(*) FROM events";
			$single_user_data = mysqli_fetch_array($data);
			$id = $single_user_data['COUNT(*)'];
			// $data =  mysqli_query($connection, "BEGIN
			// 								:returnValue := totalUser();
		 	// 								END;");
			// 								 mysqli_bind_by_name($data,":returnValue",$returnValue);
											

			return $id;
			
		}


}




?>