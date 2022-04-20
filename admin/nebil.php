<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `form5` WHERE CONCAT(`Project_name`,`Client_First_Name`,`Client_Middle_Name`,`Client_Last_Name`,`gender`,`dob`,`Education`,`Work`,`phone`,`city`,`Woreda`,`Zone`,
	`Subcity`,`House`,`Special`,`email`,`Status`) LIKE '%".$valueToSearch."%'";

    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `form5`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost","efar","123","efar");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<?php
$connection=NEW MySQLi('localhost','efar','123','efar');
$resultset=$connection->query("SELECT Project_name from form1");
$color1="lightblue";
$color="teal";
$color=$color1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>client_view</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
			<br><br><br>
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
<img src="img\E-far logo.png" alt="E-Far logo" width="200" height="100"/>  </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    </div>
                   
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                  <div class="nav-item dropdown">
                      
 
                    
                    <a href="project.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>project</a>

                    <a href="Client_Full_Name_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Client</a>
					
					<a href="Field_teams_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Field Teams </a>

                    <a href="Supervisor_name_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Supervisor </a>

					<a href="User_Full_Name_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User </a>
					
                          </div>
					<div class="navbar-nav w-100">
					<a href="logout.php"><div style="float:right">
                    <button>Logout</button>
                </div></div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            
                        </a>
                       
                        </div>
                    </div>
                </div>
            </nav>
          <!-- Navbar End -->
			 <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="clientupdate.php" method="POST">

                    <div class="modal-body">
    <input type="hidden" name="update_id" id="update_id">

                         <div class="form-group">
                            <label> Project_name </label>
                            <input type="text" name="Project_name" id="Project_name" class="form-control" required>
                        </div>
							
						<div class="form-group">
                            <label> Client First Name </label>
                            <input type="text" name="Client_First_Name" id="Client_First_Name" class="form-control" required>
                        </div>
							
                            <div class="form-group">
                            <label> Client Middle Name </label>
                            <input type="text" name="Client_Middle_Name" id="Client_Middle_Name" class="form-control" required>
                        </div>	
						
						<div class="form-group">
                            <label> Client Last Name </label>
                            <input type="text" name="Client_Last_Name" id="Client_Last_Name" class="form-control" required>
                        </div>
						
						
						<div class="form-group">
                            <label> Gender </label>
                            <input type="text" name="gender" id="gender" class="form-control" required>
                        </div>
						
						
						<div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="text" name="dob" id="dob" class="form-control" required>
                        </div>
						
						
						<div class="form-group">
                            <label> Education  </label>
                            <input type="text" name="Education" id="Education" class="form-control" required>
                        </div>
						
						<div class="form-group">
                            <label> Work  </label>
                            <input type="text" name="Work" id="Work" class="form-control" required>
                        </div>
						
						<div class="form-group">
                            <label> phone  </label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                placeholder="Enter phone " required>
                        </div>
						
						<div class="form-group">
                            <label> City </label>
                            <input type="text" name="city" id="city"    class="form-control" placeholder="Enter City" required>
                        </div>
							
						<div class="form-group">
                            <label> Subcity City </label>
                            <input type="text" name="Subcity" id="Subcity"    class="form-control" placeholder="Enter Subcity" required>
                        </div>
						
						<div class="form-group">
                            <label> Zone </label>
                            <input type="text"   name="Zone"  id="Zone"  class="form-control" placeholder="Enter Zone" required>
                        </div>
						<div class="form-group">
                            <label> Subcity </label>
                            <input type="text" name="Woreda"  id="Woreda"   class="form-control" placeholder="Enter Woreda" required>
                        </div>
						<div class="form-group">
                            <label> House Number </label>
                            <input type="text" name="House"  id="House"       class="form-control" placeholder="Enter House" required>
                        </div>
						<div class="form-group">
                            <label> Special Name </label>
                            <input type="text" name="Special"  id="Special"     class="form-control" placeholder="Enter City" required>
                        </div>
                    
						
                        <div class="form-group">
                            <label for="email">Email address:</label>
                           <input type="email"  name="email"   id="email"  placeholder="sophie@example.com" required>
                        </div>
						
                       <div class="form-group">
                             <label for="Status">Status:</label>
                             <select name="Status" id="Status">
                             <option value="interested">Interested</option>
                             <option value="committed">Committed</option>
                             <option value="in_progress">In progress</option>
                             <option value="rejected">Rejected</option>
                             </select>
                             </div>
						
					
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="clientdelete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>




            <!-- Sale & Revenue Start -->
           <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="bg-light rounded h-100 p-4">
<a href=" client_registration.php"> <button> Add User Data</button> </a>
</div>
		
					  
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">

                            <div class="table-responsive">
							 <form action=" export_data.php" method="post">					
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
			</form>  
          
                   
              
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                              
                                <th scope="col">ID</th>
								<th scope="col">Project</th>
                                <th scope="col"> Client First Name </th>
								<th scope="col"> Client Middle Name </th>
								<th scope="col"> Client Last Name </th>
                                <th scope="col"> Gender </th>
                                <th scope="col"> Date Of Birth </th>
                                <th scope="col"> Education </th>
                                <th scope="col"> Work Field </th>
                                <th scope="col"> phone  </th>
                                <th scope="col"> City </th>
								<th scope="col"> Woreda </th>
								<th scope="col"> Zone </th>
								<th scope="col"> Subcity </th>
								<th scope="col"> House Number </th>
								<th scope="col"> Special Name </th>
								<th scope="col"> email</th>
                                <th scope="col"> Status </th>
								<th scope="col">Registration Time </th>
								
								
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                               
                                
                            </tr>
                        </thead>
               
                        <tbody>
						 <?php while($row = mysqli_fetch_array($search_result)):?>
                            <tr>
                               <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['Project_name']; ?> </td>
                                <td> <?php echo $row['Client_First_Name']; ?> </td>
								<td> <?php echo $row['Client_Middle_Name']; ?> </td>
								<td> <?php echo $row['Client_Last_Name']; ?> </td>
                                <td> <?php echo $row['gender']; ?> </td>
                                <td> <?php echo $row['dob']; ?> </td>
                                <td> <?php echo $row['Education']; ?> </td>
                                <td> <?php echo $row['Work']; ?> </td>
                                <td> <?php echo $row['phone']; ?> </td>
                                <td> <?php echo $row['city']; ?> </td>
								<td> <?php echo $row['Woreda']; ?> </td>
								<td> <?php echo $row['Zone']; ?> </td>
								<td> <?php echo $row['Subcity']; ?> </td>
								<td> <?php echo $row['House']; ?> </td>
								<td> <?php echo $row['Special']; ?> </td>
								<td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['Status']; ?> </td>
                                <td> <?php echo $row['time']; ?> </td>

                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                                
                            </tr>
							<?php endwhile;?>
                        </tbody>
            	   
                    </table>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- Sale & Revenue End -->
 
            
                
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#"> Elebat Solutions</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By Elebat Solutions</a>
                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	 <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


    <script>
       
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

              
              $('#update_id').val(data[0]);
				$('#id').val(data[0]);
				$('#Project_name').val(data[2]);
                $('#Client_First_Name').val(data[3]);
                $('#Client_Middle_Name').val(data[4]);
                $('#Client_Last_Name').val(data[5]);
                $('#gender').val(data[6]);
                $('#dob').val(data[7]);
                $('#Education').val(data[8]);
                $('#Work').val(data[9]);
                $('#phone').val(data[10]);
				$('#city').val(data[11]);
				$('#Woreda').val(data[12]);
				$('#Zone').val(data[13]);
				$('#Subcity').val(data[14]);
				$('#House').val(data[15]);
                $('#Special').val(data[16]);
				$('#email').val(data[17]);
				$('#Status').val(data[18]);

            });
        });
    </script>

</body>

</html>
