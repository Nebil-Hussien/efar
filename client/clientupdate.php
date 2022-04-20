<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

    if(isset($_POST['updatedata']))
    {   
$idup = $_POST['update_id'];
$id=$_POST['id'];      
$PROJECT_NAME=$_POST['PROJECT_NAME'];
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


        $query = "UPDATE form5 SET id='$id',PROJECT_NAME='$PROJECT_NAME',Client_Full_Name='$Client_Full_Name',phone='$phone'
		,city='$city',Woreda='$Woreda',Zone='$Zone',Subcity='$Subcity',House='$House',Special='$Special',email='$email',Status='$Status' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:Client_Full_Name_registration.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>