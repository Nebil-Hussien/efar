<?php

$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['insertdata']))
{

$sid = $_POST['sid'];    
$PROJECT_NAME=$_POST['Project_name'];
$Client_First_Name = $_POST['Client_First_Name'];
$Client_Middle_Name = $_POST['Client_Middle_Name'];
$Client_Last_Name = $_POST['Client_Last_Name'];
$gender = $_POST['gender'];
$dob= $_POST['dob'];
$Education= $_POST['Education'];
$Work= $_POST['Work'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$Woreda = $_POST['Woreda'];
$Zone = $_POST['Zone'];
$Subcity = $_POST['Subcity'];
$House = $_POST['House'];
$address = $_POST['address'];
$email = $_POST['email'];
$Status = $_POST['Status'];


    $query = "INSERT INTO form5 (`sid`,`Project_name`,`Client_First_Name`,`Client_Middle_Name`,`Client_Last_Name`,`gender`,
	`dob`,`Education`,`Work`,`phone`,`city`,`Woreda`,`Zone`,`Subcity`,`House`,`address`,`email`,`Status`) 
	VALUES ('$sid','$PROJECT_NAME','$Client_First_Name','$Client_Middle_Name','$Client_Last_Name','$gender','$dob',
	'$Education','$Work','$phone','$city','$Woreda','$Zone','$Subcity','$House','$address','$email','$Status' )";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
       echo '<script> alert("Data Successfuly Registered"); </script>';
        header("Location:client_registration.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
        header("Location:client_registration.php");
    }
}

?>
