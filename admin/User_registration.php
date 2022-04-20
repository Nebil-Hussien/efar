<?php
$connection=NEW MySQLi('localhost','efar','123','efar');
$resultset=$connection->query("SELECT Project_name from form1");
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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	 <link type="image/x-icon" href="{{asset('theme/img/favicon.png')}}" rel="icon">

   <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">

   <link rel="stylesheet" href="{{asset('theme/plugins/fontawesome/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/plugins/fontawesome/css/all.min.css')}}">

   <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('assets/bundles/izitoast/css/iziToast.min.css')}}">
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
                      
 
                     <a href="project_register.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>project</a>

                    <a href="client_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Client</a>
					
					<a href="field_officer_register.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Field Teams </a>

                    <a href="Supervisor_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Supervisor </a>

					<a href="User_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User </a>

<a href="signupform.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i> Sign Up</a>
					
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



            <!-- Form Start -->
			<div class="container-fluid pt-4 px-4">

                <div class="row g-4">
                   
                    <div class="col-sm-12 col-xl">
                        <div class="bg-light rounded h-100 p-4">
											 <img src="img\elebat.jpg" alt="E-Far logo" width="180" height="120"/>

						 <form action="userinsert.php" method="POST">
                    <div class="modal-body">
                    <div class="modal-body">
                     <div class="modal-body">
                   <h2 class="mb-4">User Data</h2>
                        
                        <div class="form-group">
                            <label> Project Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <select name="Project_name" id="Project_name" required>
							 <?php
							 while($rows=$resultset->fetch_assoc())
							 {
						     $Project_name=$rows['Project_name'];
						     echo"<option value='$Project_name'>$Project_name</option>";
							 }
							 ?>
							</select>                      
							</div>
						<br>

                        <div class="form-group">
                            <label> User First Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="First_Name" class="form-control" placeholder="Enter User First Name"  pattern="[A-Za-z]{1,32}" title="Please enter with prorper name format " required>
                        </div>

						
                        <div class="form-group">
                            <label> User Middle Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="Middle_Name" class="form-control" placeholder="Enter User Middle Name" pattern="[A-Za-z]{1,32}" title="Please enter with prorper name format " required>
                        </div>

						
                        <div class="form-group">
                            <label> User Last Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="Last_Name" class="form-control" placeholder="Enter User Last Name" pattern="[A-Za-z]{1,32}" title="Please enter with prorper name format " required>
                        </div>

						
                        <div class="form-group">
                            <label> Department <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="Department" class="form-control" placeholder="Enter Department" required>
                        </div>
						
                       		<br>
						<div class="form-group">
                                        <label> Phone  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                        <input name="phone" type="text" id="phone" placeholder="Enter phone No"
                                            pattern="[0-9]{9,10}" required>
                                        <script>
                                        var input = document.querySelector("#phone");
                                        window.intlTelInput(input, {
                                            separateDialCode: true,
                                            initialCountry: "et",
                                        });
                                        </script>
                                    </div>
						<br>
                         <div class="form-group">
                            <label for="email">Email Address</label>
                           <input type="email"  name="email" placeholder="sophie@example.com" >
                        </div>
				
                    </div>
               
                    <div class="modal-footer">
 <a href="user_view.php">  <button type="button" class="btn btn-secondary" >View Data</button></a>
 <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>


                        </div>
                    </div>
                   
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">ELEBATSOLUTION</a>, All Right Reserved. 
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
</body>

</html>