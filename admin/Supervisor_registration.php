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

					<a href="User_registration.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User</a>

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

						 <form action="superinsert.php" method="POST">
                    <div class="modal-body">
                    <div class="modal-body">
                     <div class="modal-body">
                   
                            <h2 class="mb-4">Supervisor Data</h2>

                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label> Project Name  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
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
						
<BR>
                        <div class="form-group">
                            <label> Supervisor First Name  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="First_Name" class="form-control" placeholder="Enter First Name" pattern="[A-Za-z]{1,32}" title="Please enter with prorper name format " required>
                        </div>
						
                     <div class="form-group">
                            <label> Supervisor Middle Name  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="Middle_Name" class="form-control" placeholder="Enter Supervisor Middle Name" pattern="[A-Za-z]{1,32}" title="Please enter with prorper name format " required>
                        </div>
						
                       <div class="form-group">
                            <label> Supervisor Last Name  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="Last_Name" class="form-control" placeholder="Enter Supervisor Last Name" pattern="[A-Za-z]{1,32}" title="Please enter with prorper name format " required>
                        </div>


                     <div class="form-group">
                                        <label for="gender">Gender<i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                        <input type="radio" name="gender" value="male"required> Male
                                        <input type="radio" name="gender" value="female"required> Female
                                    </div>
                                    <br>
						  
                        <div class="form-group">
                            <label>Date Of Birth  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                            <input type="date" name="dob" id="dob" class="form-control"
                                placeholder="Enter Date Of Birth" required>
                        </div>
						  <div class="form-group">
                                         <label class="focus-label">Address <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                                         <input type="text" class="form-control floating" name="Residential_address" rows="4"
                                                id="pac-input" required>
                                         <div id="map">

                                         </div>
                                         <div id="infowindow-content">
                                             <span id="place-name" class="title"></span><br />
                                             <span id="place-address"></span>
                                         </div>
                                         <input name="lng" id="pac-role" type="hidden">
                                         <input name="lat" id="pac-lan" type="hidden">

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
                            <label> Qualification   <i class="fa fa-asterisk" style="font-size:12px;color:red"></i></label>
                            <input type="text" name="Qualification" class="form-control" placeholder="Enter Qualification" required>
                        </div>
						
                        <div class="form-group">
                            <label> Experience  <i class="fa fa-asterisk" style="font-size:12px;color:red"></i> </label>
                            <input type="text" name="Experience" class="form-control" placeholder="Enter Experience" required>
                        </div>
                    </div>
               
                    <div class="modal-footer">
                      <a href="Supervisor_view.php">  <button type="button" class="btn btn-secondary" >View Data</button></a>
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
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
<script src="js/address.js"></script>		
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
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
 <script src="{{asset('theme/js/jquery-3.6.0.min.js')}}"></script>

   <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>

   <script src="{{asset('theme/js/slick.js')}}"></script>

   <script src="{{asset('theme/js/script.js')}}"></script>
   <script src="{{asset('assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
   <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6FjTNtaiuf3PGaAVvVFHYgc6M_tdM24k&callback=initMap&libraries=places&v=weekly"
      async></script>
   <script>
      function initMap() {
         const map = new google.maps.Map(document.getElementById("map"), {
           center: { lat: 40.749933, lng: -73.98633 },
           zoom: 13,
           mapTypeControl: false,
         });
         const card = document.getElementById("pac-card");
         const input = document.getElementById("pac-input");
         const input1 = document.getElementById("pac-role");
         const biasInputElement = document.getElementById("use-location-bias");
         const strictBoundsInputElement = document.getElementById("use-strict-bounds");

         const options = {
           fields: ["formatted_address", "geometry", "name"],
           strictBounds: false,
           types: ["establishment"],
         };

         map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

         const autocomplete = new google.maps.places.Autocomplete(input, options);


         autocomplete.bindTo("bounds", map);

         const infowindow = new google.maps.InfoWindow();
         const infowindowContent = document.getElementById("infowindow-content");

         infowindow.setContent(infowindowContent);

         const marker = new google.maps.Marker({
           map,
           anchorPoint: new google.maps.Point(0, -29),
         });

         autocomplete.addListener("place_changed", () => {
           infowindow.close();
           marker.setVisible(false);

           const place = autocomplete.getPlace();

           if (!place.geometry || !place.geometry.location) {

             window.alert("No details available for input: '" + place.name + "'");
             return;
           }

           // If the place has a geometry, then present it on a map.
           if (place.geometry.viewport) {
             map.fitBounds(place.geometry.viewport);
           } else {
             map.setCenter(place.geometry.location);
             map.setZoom(17);
           }





            $('#pac-role').val(place.geometry.location.lng());
            $('#pac-lan').val(place.geometry.location.lat());

           marker.setPosition(place.geometry.location);
           marker.setVisible(true);
           infowindowContent.children["place-name"].textContent = place.name;
           infowindowContent.children["place-address"].textContent =
             place.formatted_address;
           infowindow.open(map, marker);
         });



       }

   </script>

</body>

</html>