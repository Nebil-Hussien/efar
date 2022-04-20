<?php

$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['insertdata']))
{
$Project_name=$_POST['Project_name'];
$First_Name = $_POST['First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name = $_POST['Last_Name'];
$Department = $_POST['Department'];
$phone = $_POST['phone'];
$email = $_POST['email'];


    $query = "INSERT INTO form4 (`Project_name`,`First_Name`,`Middle_Name`,`Last_Name`,`Department`,`phone`,`email`) 
	VALUES ('$Project_name','$First_Name','$Middle_Name','$Last_Name','$Department','$phone','$email' )";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: User_registration.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
		header('Location: User_registration.php');
    }
}

?>
