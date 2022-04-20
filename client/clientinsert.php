<?php

$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['insertdata']))
{
$idup = $_POST['update_id'];
$id=$_POST['id'];      
$PROJECT_NAME=$_POST['Project_name'];
$Client_Full_Name = $_POST['Client_Full_Name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$Woreda = $_POST['Woreda'];
$Zone = $_POST['Zone'];
$Subcity = $_POST['Subcity'];
$House = $_POST['House'];
$Special = $_POST['Special'];
$email = $_POST['email'];
$Status = $_POST['Status'];


    $query = "INSERT INTO form5 (`id`,`Project_name`,`Client_Full_Name`,`phone`,`city`,`Woreda`,`Zone`,
	`Subcity`,`House`,`Special`,`email`,`Status`) 
	VALUES ('$id','$PROJECT_NAME','$Client_Full_Name','$phone','$city','$Woreda','$Zone','$Subcity','$House','$Special','$email','$Status' )";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
       $_SESSION['SUCCESS']= "congradulation";
	   header('Location:client.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
