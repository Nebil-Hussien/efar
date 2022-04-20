<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['insertdata']))
{
$Project_name=$_POST['Project_name'];
$User_Full_Name=$_POST['User_Full_Name'];
$Department = $_POST['Department'];
$phone = $_POST['phone'];
$email = $_POST['email'];


    $query = "INSERT INTO form4 (`Project_name`,`User_Full_Name`,`Department`,`phone`,`email`) 
	VALUES ('$Project_name','$User_Full_Name','$Department','$phone','$email' )";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: User_Full_Name_registration.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
