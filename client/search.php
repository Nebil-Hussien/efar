<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
    <title>EFAR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
	
	
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	 <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
       <link href="css/style.css" rel="stylesheet">

	
</head>
<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-60 vh-60 top-50 start-50 d-flex align-items-center justify-content-center">
            
        </div>
        <!-- Spinner End -->

 <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
<img src="img\E-far logo.png" alt="E-Far logo" width="200"
         height="80"/>                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    </div>
                   
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                   
                    <div class="nav-item dropdown">
                      
 
                    <a href="project.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>project</a>

                    <a href="Client_Full_Name_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Sales Teams</a>
					
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
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"></span>
                        </a>
                       
                        </div>
                    </div>
                </div>
            </nav>
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="searchinsert.php" method="POST">

                    <div class="modal-body">

						  <div class="form-group">
                            <label> User Id </label>
                            <input type="text" name="id" class="form-control" placeholder="id">
                        </div>
						
                        <div class="form-group">
                            <label> Project Name </label>
                            <input type="text" name="Project_name" class="form-control" placeholder="Project name">
                        </div>

                        <div class="form-group">
                            <label> Client Name </label>
                            <input type="text" name="Client_name" class="form-control" placeholder="Enter Client name">
                        </div>

                        <div class="form-group">
                            <label> Description of project </label>
                            <input type="text" name="Description_of_project" class="form-control" placeholder="Description of project">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

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

                <form action="searchupdate.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

						
						  <div class="form-group">
                            <label> User Id </label>
                            <input type="text" name="id" id="id" class="form-control"
                                placeholder="Enter Project name">
                        </div>

                        <div class="form-group">
                            <label> Project Name </label>
                            <input type="text" name="Project_name" id="Project_name" class="form-control"
                                placeholder="Enter Project name">
                        </div>

                        <div class="form-group">
                            <label> Client Name </label>
                            <input type="text" name="Client_name" id="Client_name" class="form-control"
                                placeholder="Enter Client name">
                        </div>

                        <div class="form-group">
                            <label> Description of Project </label>
                            <input type="text" name="Description_of_project" id="Description_of_project" class="form-control"
                                placeholder="Description of project">
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

                <form action="searchdelete.php" method="POST">

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




    <div class="container">
        <div class="jumbotron">
            <div class="card">
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD PROJECTS
                    </button> 
					<br>
					<br>
					<form action="" method="POST">
					
                            <input type="text" name="id" placeholder="SEARCH BY YOUR ID"> 
							<input type="submit" name="search" value="Search">
							</form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","efar","123");
                $db = mysqli_select_db($connection, 'efar');

                $query = "SELECT * FROM form1 ORDER BY id DESC";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">Project Name </th>
                                <th scope="col"> Client Name </th>
                                <th scope="col"> Description of Project </th>
                               
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <?php
               
               $connection = mysqli_connect("localhost","efar","123","efar");
               if(isset($_POST['search']))
               {
				 $id=$_POST['id'];
				 $query="SELECT * FROM form1 where id='$id'";
				 $query_run=mysqli_query($connection,$query);
				 
				  while($row=mysqli_fetch_array($query_run))
				  {
					  ?>
					  <tbody>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['Project_name']; ?> </td>
                                <td> <?php echo $row['Client_name']; ?> </td>
                                <td> <?php echo $row['Description_of_project']; ?> </td>
                               
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody> 
					 



					 
				<?php	  
				  }
				   
			   }
				
				
				?>
            
                       
    
               
                    </table>
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

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

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: ,
                language: {
                    search: "",
                    searchPlaceholder: "",
                }
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
				$('#id').val(data[1]);
                $('#Project_name').val(data[2]);
                $('#Client_name').val(data[3]);
                $('#Description_of_project').val(data[4]);
            });
        });
    </script>


</body>
</html>