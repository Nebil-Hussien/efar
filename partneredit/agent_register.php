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
	
	<style>
        body {
             margin:0 !important;
             padding:0 !important;
             box-sizing: border-box;
             font-family: 'Roboto', sans-serif;
        }
        .round{
          width:20px;
          height:20px;
          border-radius:50%;
          position:relative;
          background:red;
          display:inline-block;
          padding:0.3rem 0.2rem !important;
          margin:0.3rem 0.2rem !important;
          left:-18px;
          top:10px;
          z-index: 99 !important;
        }
        .round > span {
          color:white;
          display:block;
          text-align:center;
          font-size:1rem !important;
          padding:0 !important;
        }
        #list{
         
          display: none;
          top: 33px;
          position: absolute;
          right: 2%;
          background:#ffffff;
  z-index:100 !important;
    width: 25vw;
    margin-left: -37px;
   
    padding:0 !important;
    margin:0 auto !important;
    
          
        }
        .message > span {
           width:100%;
           display:block;
           color:red;
           text-align:justify;
           margin:0.2rem 0.3rem !important;
           padding:0.3rem !important;
           line-height:1rem !important;
           font-weight:bold;
           border-bottom:1px solid white;
           font-size:1.8rem !important;

        }
        .message{
          /* background:#ff7f50;
          margin:0.3rem 0.2rem !important;
          padding:0.2rem 0 !important;
          width:100%;
          display:block; */
          
        }
        .message > .msg {
           width:90%;
           margin:0.2rem 0.3rem !important;
           padding:0.2rem 0.2rem !important;
           text-align:justify;
           font-weight:bold;
           display:block;
           word-wrap: break-word;
         
          
        }
       
    </style>
	
	
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <br><br><br><br><br><br><br><br>
                <img src="img\E-far logo.png" alt="E-Far logo" width="200" height="100" /> </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    </div>

                </div>
                <div class="navbar-nav w-100">


                    <a href="partner_view.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Client
                       Data</a>

  <a href="agent_view.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Agent
                        Data</a>





                </div>

                <div class="navbar-nav w-100">
                    <a href="logout.php">
                        <div style="float:right">
                            <button>Logout</button>
                        </div>
                </div>
            </nav>
        </div> <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
          
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
						
						
					<div class="navbar-nav align-items-center ms-auto">	
						
                    
				 </nav>
                 
                
              
			 
     
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="row g-4">
                   
                    <div class="col-sm-12 col-xl">
                     <div class="bg-light rounded h-100 p-4">
					 <img src="img\elebat.jpg" alt="E-Far logo" width="180" height="120"/>  </a>
					 <form action="clientinsert.php" method="POST">

                    <div class="modal-body">
                   
                    

                                    <div class="form-group">
                                     <label> Project Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                        <select name="Project_name" id="Project_name" required>
                                            <?php
							 while($rows=$resultset->fetch_assoc())
							 {
							 $color==$$color1 ? $color=$color2 : $color = $color1; 
						     $Project_name=$rows['Project_name'];
						     echo"<option value='$Project_name'>$Project_name</option>";
							 }
							 ?>
                                        </select>
                                    </div>


                                    <br>
                                    <div class="form-group">
                                        <label> Agent First Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                        <input type="text" name="Client_First_Name" class="form-control"
                                            placeholder="Enter Agent First Name" pattern="[A-Za-z]{1,32}"
                                            title="Please enter with prorper name format " required>
                                    </div>

                                    <div class="form-group">
                                        <label> Agent Middle Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                        <input type="text" name="Client_Middle_Name" class="form-control"
                                            placeholder="Enter Agent Middle Name" pattern="[A-Za-z]{1,32}" required>
                                    </div>


                                    <div class="form-group">
                                        <label> Agent Last Name <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                        <input type="text" name="Client_Last_Name" class="form-control"
                                            placeholder="Enter Agent Last Name" pattern="[A-Za-z]{1,32}" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="gender">Gender <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                        <input type="radio" name="gender" value="male" required> Male
                                        <input type="radio" name="gender" value="female" required> Female
                                    </div>
                                    <br>
                                    <div class="form-group">
                                     <label>Date Of Birth <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                        <input type="date" name="dob" id="dob" class="form-control"
                                            placeholder="Enter Date Of Birth" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label> Education  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                        <select name="Education" id="Education" required>
                                            <option value="">Select Education level</option>
                                            <option value="can't_Read_and_Write">Can't Read and Write</option>
                                            <option value="Read_and_Write">Read and Write</option>
                                            <option value="High_School">High School</option>
                                            <option value="college">College/Tvet</option>
                                            <option value="bsc">Degree or Above...</option>

                                        </select>
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        <label> Work Field <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                        <input type="text" name="Work" class="form-control"
                                            placeholder="Enter Work Field" required>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label> Phone <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
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

                                    <div class="form-group">
                                        <label> City <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                        <input type="text" name="city" class="form-control" placeholder="Enter City"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label> Woreda <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                        <input type="text" name="Woreda" class="form-control" placeholder="Enter Woreda"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label> Zone </label>
                                        <input type="text" name="Zone" class="form-control" placeholder="Enter Zone">
                                    </div>


                                    <br>
                                    <div class="form-group">
                                        <label for="Subcity">Subcity <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                        <select name="Subcity" id="Subcity" required>
                                            <option value="">Select Subcity</option>
                                            <option value="Akaki_Kaliti">Akaki Kaliti</option>
                                            <option value="Nefas_Silk_Lafto">Nefas Silk-Lafto</option>
                                            <option value="Kolfe_Keraniyo">Kolfe Keraniyo</option>
                                            <option value="Gulele">Gulele</option>
                                            <option value="Lideta">Lideta</option>
                                            <option value="Kirkos">Kirkos</option>
                                            <option value="Arada">Arada</option>
                                            <option value="Addis_Ketema">Addis Ketema</option>
                                            <option value="Yeka">Yeka</option>
                                            <option value="Bole">Bole</option>
                                            <option value="lemi_kura">lemi kura</option>
                                        </select>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label> House Number <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                        <input type="text" name="House" class="form-control" placeholder="Enter House"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label> Special Location <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                                        <input type="text" name="Special" class="form-control" placeholder="Enter City"
                                            required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="email">Email address:</label>
                                        <input type="email" name="email" placeholder="sophie@example.com">
                                    </div>
                                    <br>
                                    <div class="form-group">

                                        <label for="Status">Status <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
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
                                    <a href="agent_view.php"> <button type="button"
                                            class="btn btn-secondary">View Data</button></a>
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
$(document).ready(function(){
    var ids = new Array();
    $('#over').on('click',function(){
           $('#list').toggle();  
       });

   //Message with Ellipsis
   $('div.msg').each(function(){
       var len =$(this).text().trim(" ").split(" ");
      if(len.length > 12){
         var add_elip =  $(this).text().trim().substring(0, 65) + "…";
         $(this).text(add_elip);
      }
     
}); 


   $("#bell-count").on('click',function(e){
        e.preventDefault();

        let belvalue = $('#bell-count').attr('data-value');
        
        if(belvalue == ''){
         
          console.log("inactive");
        }else{
          $(".round").css('display','none');
          $("#list").css('display','block');
          
          // $('.message').each(function(){
          // var i = $(this).attr("data-id");
          // ids.push(i);
          
          // });
          //Ajax
          $('.message').click(function(e){
            e.preventDefault();
              $.ajax({
                url:'./connection/deactive.php',
                type:'POST',
                data:{"id":$(this).attr('data-id')},
                success:function(data){
                 
                    console.log(data);
                    location.reload();
                }
            });
        });
     }
   });

   $('#notify').on('click',function(e){
        e.preventDefault();
        var name = $('#notifications_name').val();
        var ins_msg = $('#message').val();
        if($.trim(name).length > 0 && $.trim(ins_msg).length > 0){
          var form_data = $('#frm_data').serialize();
        $.ajax({
          url:'./connection/insert.php',
                type:'POST',
                data:form_data,
                success:function(data){
                    location.reload();
                }
        });
        }else{
          alert("Please Fill All the fields");
        }
      
       
   });
});
</script>

</body>

</html>