<?php  include_once "app/autoload.php"; ?>
<?php  
  $user = new User;
  $connection = new mysqli("localhost","root","","test");
  $Div_ID = isset($_GET['GetId']) ? $_GET['GetId'] : '';
  $query = "SELECT * FROM division where Div_Id='".$Div_ID."'";
  $data = mysqli_fetch_array($connection,$query);
   
   
   if(isset($_POST['update'])) // when click on Update button
{
    $Div_ID = $_POST['$DivID'];
    $Div_name = $_POST['$DivName'];
	$DivStatus = $_POST['$DivStatus'];
   
	
    if( empty($Div_name ) || empty($DivStatus))
            
		 	 {
				$mess1 = "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'>All fields are required !</p>";
              }
            else {
				$data = $user ->DivisionUpdate($Div_name, $DivStatus);
				if(  $data  == true ){
				  $mess1 = "<p style='color:green;text-align:center; font-size:14px; font-weight:normal;'> Create successfull </p>";
				}
                header("location:AllDivisions.php");
		   }
  
  
  
		 }

?>       
            
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard | Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">



 
     
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Employee Management System</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="./login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="./adminDashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <a class="nav-link" href="./allUser.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-ninja"></i></i></div>
                                All User
                            </a>
                          
                            <div class="sb-sidenav-menu-heading">Events</div>
                            <a class="nav-link" href="./allEvents.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                All Events
                            </a>
                            <a class="nav-link" href="./createEvent.php"?>
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Create Event
                            </a>
                            <a class="nav-link" href="./Division.php"?>
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Division
                            </a>
                            <a class="nav-link" href="./AllDivisions.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-ninja"></i></i></div>
                                All Divisions
                            </a>
                            <a class="nav-link" href="./Department.php"?>
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Department
                            </a>
                            <a class="nav-link" href="./AllDepartments.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-ninja"></i></i></div>
                                All Departments
                            </a>


                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Division</h1>
                        <ol class="breadcrumb mb-4">
                           
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Event
                            </div>
                           
                            <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
    <!-- <label>Product ID</label> -->
    <input type="hidden" class="form-control" id="DivID" placeholder="Enter Division Name" name="DivID"value="<?php echo  $DivID; ?>" >
</div>


                                            <div class="form-group">
                                        
                                            <label for="exampleInputEmail1" class="form-label"><b>Division Name</b></label>
                                            <input type="text" class="form-control"id=DivName name="DivName"value="<?php echo $DivName; ?>">
                                            
                                        </div>
                                       
                                        <label for="exampleInputEmail1" class="form-label"><b>Status</b></label>
                                        
                                            <select name="DivStatus" class ="form-control"id=DivStatus value="<?php echo $DivStatus;?>">
                                            <option Value="select">----Choose One-----</option>
                                                <option Value="Active">Active</option>
                                                <option Value="Inactive">Inactive</option>
                                        </div>


                                        </div>
   
                                       
                         
                                    
                                    <!-- <button type="submit" class="btn btn-primary mt-4">Submit</button> -->
                                    <input id="update" class="btn btn-primary mt-4" type="submit"  value="Update">
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
               
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {
	$('#update').on('click', function() {
        var DivID = $('#Div_ID').val();            
		var DivName = $('#DivName').val();
		var DivStatus = $('#DivStatus').val();
         console.log(DivName);
    

		if(DivName!="" && DivStatus!="" ){
			$.ajax({
				url: "DivisionUpdateQuery.php",
				type: "POST",
       
				data:{
         
                    DivID: DivID,
                    DivName: DivName,
                    DivStatus: DivStatus,

          

        },
         
        
				cache: false,
				success: function(dataResult){
          
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          swal({
            title: "Updated!",
            text: "Update The Data!",
            icon: "success",
            type: "success"}).then(okay => {
              if (okay) {
                window.location.assign("AllDivisions.php")
              }
            });
                      

        }
					
				}
      
			});
      
		 }
		else{
      swal({
            title: "Empty Fields!",
            text: "Please Fill It Up!",
            icon: "warning",
            type: "warning"})
			// alert('Please fill all the field !');
		}
	});
});

</script> -->

  
  
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
       
    
        </body>               
</html>
