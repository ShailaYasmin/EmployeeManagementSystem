<?php  include_once "app/autoload.php"; ?>
<?php  
  
  $user = new User;
  $connection = new mysqli("localhost","root","","test");
  //$query = "SELECT * FROM department";
  //$result = mysqli_query($connection, $query);
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard | User</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
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
                            <a class="nav-link" href="./UserDashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            <a class="nav-link" href="./allUser.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-ninja"></i></i></div>
                                All User
                            </a>
                            <div class="sb-sidenav-menu-heading">Events</div>

                            <a class="nav-link" href="./createEvent.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Create Event
                            </a>
                           
                            <a class="nav-link" href="./allEvents.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                All Events
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
                            <div class="sb-sidenav-menu-heading">Addons</div>
                           
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
                        <h1 class="mt-4">Showing All Departments</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Departments  Info</li>
                        </ol>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Department List
                            </div>
                            <div class="card-body">
                            <table class="table caption-top table-bordered">


                            <thead>
                            <tr>
                                <th scope="col">Department ID</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Division ID</th>
                                <th scope="col">Division Name</th>
                                <th scope="col">Division Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $query1="SELECT department.Dep_Id, department.Dep_Name,division.Div_Id,division.Div_Name,division.status FROM department LEFT JOIN division ON department.Div_Id = division.Div_Id";
                            $result1 = mysqli_query($connection,$query1);    
                            //$row1=mysqli_fetch_assoc($result1);
                                while($row1=mysqli_fetch_assoc($result1))
                                {
                                    
                                    
                                    $DepID = $row1['Dep_Id'];
                                    $DepName= $row1['Dep_Name']; 
                                    $DivId= $row1['Div_Id']; 
                                    $DivName= $row1['Div_Name']; 
                                    $DivStatus= $row1['status']; 
                                    
                            ?>

                                            <tr ID="<?php echo $DepID; ?>">
                                                <td><?php echo $DepID?></td>
                                                <td><?php echo  $DepName ?></td>
                                                <td><?php echo $DivId ?></td>
                                                <td><?php echo $DivName ?></td>
                                                <td><?php echo $DivStatus ?></td>
                                                <td><button type="button"id="Edit" class="btn btn-primary "><a href="DepartmentUpdate.php?GetId=<?php echo $DepID?>"class= "text-light" >Edit</a></td></button>
                                                <td><button type="submit" class="btn btn-danger remove"> Delete</button></td>
                                            </tr>  
                                                            <?php
                                                                }
                                                                ?>
                                                                </tbody>
                                                                </table>
                                                                </div>
                               


<script type="text/javascript">  
$(".remove").click(function(){
 
 var DEPID = $(this).parents("tr").attr("ID");
 console.log( DEPID);
 swal({
      title: "Are you sure?",
      text: "You will not be able to recover this file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: " Delete it!",
      cancelButtonClass: "btn-warning",
      cancelButtonText: "cancel !",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
        $.ajax({
           url: 'DepartmentDeleteQuery.php',
           type: 'POST',
           data:{
       
           DepID: DEPID
          },
          cache: false,
           error: function() {
              alert(' Something is wrong');
           },
           success: function(data) {
                $("#"+DEPID).remove();
                swal("Deleted!", "Your Data has been deleted.", "success");
           }
        });
      } else {
        swal("Cancelled", "Your Data is safe :)", "error");
      }
    });
   
  });

  
</script>
</body>
                                        

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
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
        <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
                        </div>
                    </div>
                </main>
                        
       
    
</html>
