<?php
$connection=NEW MySQLi('localhost','efar','123','efar');
$resultset=$connection->query("SELECT Project_name from form1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>client_registration</title>
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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notifications</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
	
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

  <?php
       $find_notifications = "Select * from inf where active = 1";
       $result = mysqli_query($connection,$find_notifications);
       $count_active = '';
       $notifications_data = array(); 
       $deactive_notifications_dump = array();
        while($rows = mysqli_fetch_assoc($result)){
                $count_active = mysqli_num_rows($result);
                $notifications_data[] = array(
                            "n_id" => $rows['n_id'],
                            "notifications_name"=>$rows['notifications_name'],
                            "message"=>$rows['message']
                );
        }
        //only five specific posts
        $deactive_notifications = "Select * from inf where active = 0 ORDER BY n_id DESC LIMIT 0,5";
        $result = mysqli_query($connection,$deactive_notifications);
        while($rows = mysqli_fetch_assoc($result)){
          $deactive_notifications_dump[] = array(
                      "n_id" => $rows['n_id'],
                      "notifications_name"=>$rows['notifications_name'],
                      "message"=>$rows['message']
          );
        }

     ?>

     <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                
				  <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
				
                    <a class="navbar-brand" href="#">Notifications</a>
                  
                  <ul class="nav navbar-nav navbar-right">
                    <li><i class="fa fa-bell"   id="over" data-value ="<?php echo $count_active;?>" style="z-index:-99 !important;font-size:32px;color:white;margin:0.5rem 0.4rem !important;"></i></li>
                    <?php if(!empty($count_active)){?>
                    <div class="round" id="bell-count" data-value ="<?php echo $count_active;?>"><span><?php echo $count_active; ?></span></div>
                    <?php }?>
                     
                    <?php if(!empty($count_active)){?>
                      <div id="list">
                       <?php
                          foreach($notifications_data as $list_rows){?>
                            <li id="message_items">
                            <div class="message alert alert-warning" data-id=<?php echo $list_rows['n_id'];?>>
                              <span><?php echo $list_rows['notifications_name'];?></span>
                              <div class="msg">
                                <p><?php 
                                  echo $list_rows['message'];
                                ?></p>
                              </div>
                            </div>
                            </li>
                         <?php }
                       ?> 
                       </div> 
                     <?php }else{?>
                        <!--old Messages-->
                        <div id="list">
                        <?php
                          foreach($deactive_notifications_dump as $list_rows){?>
                            <li id="message_items">
                            <div class="message alert alert-danger" data-id=<?php echo $list_rows['n_id'];?>>
                              <span><?php echo $list_rows['notifications_name'];?></span>
                              <div class="msg">
                                <p><?php 
                                  echo $list_rows['message'];
                                ?></p>
                              </div>
                            </div>
                            </li>
                         <?php }
                       ?>
                        <!--old Messages-->
                     
                     <?php } ?>
                     
                     </div>
                  </ul>
                  </nav>
                </div>
              </nav>
			 
        </div>
		 
        <!-- Spinner End -->
<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

 </div>
 </nav>
        <!-- Sidebar Start -->
		
 <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
			
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
<img src="img\E-far logo.png" alt="E-Far logo" width="200" height="100"/>  </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    </div>
                   
                </div>
				
				<br><br><br>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                  <div class="nav-item dropdown">
                      
 
                    <a href="project_register.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>project</a>

                    <a href="client_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Client</a>
					
					<a href="field_officer_register.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Field Teams </a>

                    <a href="Supervisor_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Supervisor </a>

					<a href="User_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User </a>

					
                          
                        </div>                
					<div class="navbar-nav w-100">
					<a href="logout.php">
					<div style="float:right"></a>
                    <button>Logout</button>
                </div></div>
            </nav>
        </div>
		 </div>
        <!-- Sidebar End -->

                    
        <!-- Content Start -->
        <div class="content">
		
            <!-- Navbar Start -->
            <!-- Navbar End -->



            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="row g-4">
                   
                    <div class="col-sm-12 col-xl">
                        <div class="bg-light rounded h-100 p-4">
						
                            

						
                                       <form action="client_insertion.php" method="POST">

                    <div class="modal-body">
                   
                            
                        <div class="modal-body">
                     <div class="modal-body">
                   
                            <h2 class="mb-4">Client Data</h2>
							 <div class="form-group">
                            <label> Project Name  </label>
                            <input type="text" name="Project_name" class="form-control" placeholder="Enter Project name" required>
                        </div>
                          
						<br>
                        <div class="form-group">
                            <label> Client First Name  </label>
                            <input type="text" name="Client_First_Name" class="form-control" placeholder="Enter Client First Name" pattern="[A-Za-z]{1,32}" required>
                        </div>
						
						<div class="form-group">
                            <label> Client Middle Name </label>
                            <input type="text" name="Client_Middle_Name" class="form-control" placeholder="Enter Client Middle Name" pattern="[A-Za-z]{1,32}" required >
                        </div>
						
						
						 <div class="form-group">
                            <label> Client Last Name </label>
                            <input type="text" name="Client_Last_Name" class="form-control" placeholder="Enter Client Last Name" pattern="[A-Za-z]{1,32}" required >
                        </div>
						<br>
						  <div class="form-group">
                      <label for="gender">Gender:</label>
                      <input type="radio" name="gender" value="male"> Male
                      <input type="radio" name="gender" value="female"> Female
                          </div>
						  <br>
						  <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" name="dob" id="dob" class="form-control"
                                placeholder="Enter Date Of Birth">
                        </div>
						 
						  <div class="form-group">
                            <label> Education </label>
                            <input type="text" name="Education" class="form-control" placeholder="Enter Education">
                        </div>
						
						
						  <div class="form-group">
                            <label> Work Field </label>
                            <input type="text" name="Work" class="form-control" placeholder="Enter Work Field">
                        </div>
						
						
                        <div class="form-group">
                            <label> phone  </label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone No" pattern="[0-9]{10}" required>
                        </div>
						
                        <div class="form-group">
                            <label> City </label>
                            <input type="text" name="city" class="form-control" placeholder="Enter City" required >
                        </div>
						<br>
						 <div class="form-group">
                             <label for="Subcity">Subcity:</label>
                             <select name="Subcity" id="Subcity">
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
                            <label> Zone </label>
                            <input type="text" name="Zone" class="form-control" placeholder="Enter Zone">
                        </div>
						<div class="form-group">
                            <label> Woreda </label>
                            <input type="text" name="Woreda" class="form-control" placeholder="Enter Woreda"  required>
                        </div>
						<div class="form-group">
                            <label> House Number </label>
                            <input type="text" name="House" class="form-control" placeholder="Enter House">
                        </div>
						<div class="form-group">
                            <label> Special Name </label>
                            <input type="text" name="Special" class="form-control" placeholder="Enter City">
                        </div>
                    <br>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                           <input type="email"  name="email" placeholder="sophie@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
						<br>
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
    <a href="client_view.php">  <button type="button" class="btn btn-secondary" data-dismiss="modal">View Data</button> </a>
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
                            &copy; <a href="#">ELEBAT SOLUTION</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By  ELEBAT SOLUTION</a>
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


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>