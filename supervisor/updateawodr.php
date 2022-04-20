<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['updatedata']))
    { 

$id= $_POST['update_id'];  
$sid = $_POST['sid'];    
$Project_name='awodr';
$First_Name = $_POST['First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name = $_POST['Last_Name'];
$phone = $_POST['phone'];
$age= $_POST['age'];
$gender = $_POST['gender'];
$familySize= $_POST['familySize'];
$numberofFamily= $_POST['numberofFamily'];
$city = $_POST['city'];
$Woreda = $_POST['Woreda'];
$Zone = $_POST['Zone'];
$Subcity = $_POST['Subcity'];
$House = $_POST['House'];
$address = $_POST['address'];
$email = $_POST['email'];
$bookingDate = $_POST['bookingDate'];
$bookingTime= $_POST['bookingTime'];
$Status= $_POST['Status'];


        $query = "UPDATE form7 SET id='$id',sid='$sid',Project_name='$Project_name',First_Name='$First_Name',
		Middle_Name='$Middle_Name',Last_Name='$Last_Name',phone='$phone',age='$age',gender='$gender',
		familySize='$familySize',numberofFamily='$numberofFamily',city='$city'
		,Woreda='$Woreda',Zone='$Zone',Subcity='$Subcity',House='$House',address='$address',
		email='$email',bookingDate='$bookingDate',bookingTime='$bookingTime',Status='$Status' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:awoview.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
			 header("Location:awoview.php");
        }
    }
?>