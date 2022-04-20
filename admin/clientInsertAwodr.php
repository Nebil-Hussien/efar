<?php

$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['insertdata']))
{

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

    $query = "INSERT INTO form7 (`sid`,`Project_name`,`First_Name`,`Middle_Name`,`Last_Name`,`phone`,`age`,`gender`,
	`familySize`,`numberofFamily`,`city`,`Woreda`,`Zone`,
	`Subcity`,`House`,`address`,`email`,`bookingDate`,`bookingTime`,`Status`) 
	VALUES ('$sid','$Project_name','$First_Name','$Middle_Name','$Last_Name','$phone','$age','$gender','$familySize',
	'$numberofFamily','$city','$Woreda','$Zone','$Subcity','$House','$address','$email','$bookingDate', '$bookingTime', '$Status' )";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
       
echo '<script> alert("Congratulation Data Successfuly Registered"); </script>';
        header("Location:client_registrationAwodr.php");
 
    }
    else
    {
     echo '<script> alert("Data Not Saved Try Again Please"); </script>';
        header("Location:client_registrationAwodr.php");
    }
}

?>