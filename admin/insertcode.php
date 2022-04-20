<?php

$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['insertdata']))
{   $id = $_POST['id'];
    $Project_name = $_POST['Project_name'];
    $Client_name = $_POST['Client_name'];
    $Description_of_project = $_POST['Description_of_project']; 
	$status = $_POST['status'];

    $query = "INSERT INTO form1 (`id`,`Project_name`,`Client_name`,`Description_of_project`,`status`) VALUES ('$id','$Project_name','$Client_name','$Description_of_project','$status')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: project_view.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved Please Try Again"); </script>';
    }
}

?>