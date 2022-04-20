<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `form7` WHERE CONCAT('userid','username','email','user_type','password')LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `form7`";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EFAR</title>
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
                      
 
                     <a href="project_register.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Project</a>

                    <a href="client_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Client</a>
					
					<a href="field_officer_register.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Field Teams </a>

                    <a href="Supervisor_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Supervisor </a>

					<a href="User_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User </a>

                    <a href="signupform.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i> Sign up</a>
					
					<a href="signup_view.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i> Account Managment</a>
					
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

               <form action="updateawodr.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        
                          <div class="form-group">
                                 <label> Sales ID  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                    <input type="text" name="sid" id="sid" class="form-control" required>
                                
                        </div>
						
                        <div class="form-group">
                            <label> Project Name  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                    <input type="text" name="Project_name" id="Project_name" class="form-control"
                                        required>
                        </div> <div class="form-group">
                            <label> Client First Name  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                    <input type="text" name="First_Name" id="First_Name"
                                        class="form-control" required>
								
                        </div> 
						<div class="form-group">
                           <label> Client Middle Name  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                    <input type="text" name="Middle_Name" id="Middle_Name"
                                        class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Client Last Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                    <input type="text" name="Last_Name" id="Last_Name"
                                        class="form-control" required>
                        </div>
                      
                        <div class="form-group">
                            <label> Phone  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Enter phone " required>
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                            <input type="text" name="age" id="age" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Gender  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="gender" id="gender" class="form-control"
                                 required>
                        </div>
                        <div class="form-group">
                            <label> Family Size  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                             <input type="text" name="familySize" id="familySize" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Number of Family Subscribing </label>
                                    <input type="text" name="numberofFamily" id="numberofFamily" class="form-control" >
                                
                        </div>
                        <div class="form-group">
                            <label> City  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                    <input type="text" name="city" id="city" class="form-control"
                                        placeholder="Enter City" required>
                        </div>
                        <div class="form-group">
                           <label> Woreda  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                    <input type="text" name="Woreda" id="Woreda" class="form-control"
                                        placeholder="Enter Woreda" required>
                        </div>
                        
                        <div class="form-group">
                           <label> Zone </label>
                                    <input type="text" name="Zone" id="Zone" class="form-control"
                                        placeholder="Enter Zone" >
                        </div>
                        <div class="form-group">
                            <label> Subcity City  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                    <input type="text" name="Subcity" id="Subcity" class="form-control"
                                        placeholder="Enter Subcity" required>
                        </div>
                        <div class="form-group">
                             <label> House Number  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                    <input type="text" name="House" id="House" class="form-control"
                                        placeholder="Enter House" required>
                        </div>
                        <div class="form-group">
                            <label> Specific Location   <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Enter City" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" placeholder="sophie@example.com">
                        </div>
                        <div class="form-group">
                            <label for="text">Booking Date</label>
                                    <input type="bookingDate" name="bookingDate" id="bookingDate">
                        </div>
                        <div class="form-group">
                            <label for="text">Booking Time</label>
                                    <input type="bookingTime" name="bookingTime" id="bookingTime">
                        </div>
                        <div class="form-group">
                             <label for="Status">Status  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label><br>
                                     <select name="Status" id="Status" required>
                                            <option value="">Select Status</option>
                                            <option value="job_seeker">Job seeker</option>
                                            <option value="interested">Interested</option>
                                            <option value="committed">Committed</option>
                                            <option value="in_progress">In progress</option>
                                            <option value="rejected">Rejected</option>
                                        </select>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
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

               <form action="deletedr.php" method="POST">

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
<a href="client_registrationAwodr.php"> <button> Add User Account</button> </a>
</div>
		
					  
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">

                            <div class="table-responsive">
		    <form action="#" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search">
            <input type="submit" name="search" value="Filter">
			 <br> <br>
									

                    <?php
                $connection = mysqli_connect("localhost","efar","123");
                $db = mysqli_select_db($connection, 'efar');

                $query = "SELECT * FROM form7 ORDER BY id DESC";
                $query_run = mysqli_query($connection, $query);
            ?>
          
              <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>            <th scope="col">ID</th>
                                            <th scope="col">Sales ID</th>
                                            <th scope="col">Project</th>
                                            <th scope="col"> Client First Name </th>
                                            <th scope="col"> Client Middle Name </th>
                                            <th scope="col"> Client Last Name </th>
											<th scope="col"> phone </th>
											<th scope="col"> Date Of Birth </th>
                                            <th scope="col"> Gender </th>
                                            <th scope="col"> Family Size </th>
                                            <th scope="col"> Number Of Family </th>
                                            <th scope="col"> City </th>
                                            <th scope="col"> Woreda </th>
                                            <th scope="col"> Zone </th>
                                            <th scope="col"> Subcity </th>
                                            <th scope="col"> House Number </th>
                                            <th scope="col"> Address </th>
                                            <th scope="col"> email</th>
											<th scope="col"> Booking Date </th>
                                            <th scope="col"> Booking Time</th>
                                            <th scope="col"> Status </th>
                                            <th scope="col">Registration Time </th>
	                           

                               
                                <th scope="col"> EDIT </th>
								<th scope="col">Delete </th>
                             </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                            <td> <?php echo $row['id']; ?> </td>
                                            <td> <?php echo $row['sid']; ?> </td>
                                            <td> <?php echo $row['Project_name']; ?> </td>
                                            <td> <?php echo $row['First_Name']; ?> </td>
                                            <td> <?php echo $row['Middle_Name']; ?> </td>
                                            <td> <?php echo $row['Last_Name']; ?> </td>
											<td> <?php echo $row['phone']; ?> </td>
											<td> <?php echo $row['age']; ?> </td>
                                            <td> <?php echo $row['gender']; ?> </td>
                                            <td> <?php echo $row['familySize']; ?> </td>
                                            <td> <?php echo $row['numberofFamily']; ?> </td>
                                            <td> <?php echo $row['city']; ?> </td>
                                            <td> <?php echo $row['Woreda']; ?> </td>
                                            <td> <?php echo $row['Zone']; ?> </td>
                                            <td> <?php echo $row['Subcity']; ?> </td>
                                            <td> <?php echo $row['House']; ?> </td>
                                            <td> <?php echo $row['address']; ?> </td>
                                            <td> <?php echo $row['email']; ?> </td>
											<td> <?php echo $row['bookingDate']; ?> </td>
                                            <td> <?php echo $row['bookingTime']; ?> </td>
                                            <td> <?php echo $row['Status']; ?> </td>
                                            <td> <?php echo $row['time']; ?> </td>


                                <td>
                                     <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                
                                  <td>
                                    <button type="button" class="btn btn-danger deletebtn"> Delete </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
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
            $('#sid').val(data[1]);
            $('#Project_name').val(data[2]);
            $('#First_Name').val(data[3]);
            $('#Middle_Name').val(data[4]);
            $('#Last_Name').val(data[5]);
			$('#phone').val(data[6]);
			$('#age').val(data[7]);
            $('#gender').val(data[8]);
            $('#familySize').val(data[9]);
            $('#numberofFamily').val(data[10]);
            $('#city').val(data[11]);
            $('#Woreda').val(data[12]);
            $('#Zone').val(data[13]);
            $('#Subcity').val(data[14]);
            $('#House').val(data[15]);
            $('#address').val(data[16]);
            $('#email').val(data[17]);
            $('#bookingDate').val(data[18]);
            $('#bookingTime').val(data[19]);
            $('#Status').val(data[20]);
				
            });
        });
    </script>

</body>

</html>
