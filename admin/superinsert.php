<?php

$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['insertdata']))
{
$Project_name=$_POST['Project_name'];
$First_Name = $_POST['First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name = $_POST['Last_Name'];
$gender = $_POST['gender'];
$dob= $_POST['dob'];
$Residential_address = $_POST['Residential_address'];
$phone = $_POST['phone'];
$Qualification = $_POST['Qualification'];
$Experience = $_POST['Experience'];


    $query = "INSERT INTO form3 (`Project_name`,`First_Name`,`Middle_Name`,`Last_Name`,`gender`,`dob`,`Residential_address`,
`phone`,`Qualification`,`Experience`) 
	VALUES ('$Project_name','$First_Name','$Middle_Name','$Last_Name','$gender','$dob','$Residential_address','$phone','$Qualification','$Experience' )";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: Supervisor_registration.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
