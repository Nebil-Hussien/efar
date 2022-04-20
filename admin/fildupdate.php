<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];

$Project_name=$_POST['Project_name'];
$oid=$_POST['oid'];
$First_Name = $_POST['First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name = $_POST['Last_Name'];
$gender = $_POST['gender'];
$dob= $_POST['dob'];
$Residential_address = $_POST['Residential_address'];
$phone = $_POST['phone'];
$Qualification = $_POST['Qualification'];
$Experience = $_POST['Experience'];



        $query = "UPDATE form2 SET id='$id',Project_name='$Project_name',oid='$oid',First_Name='$First_Name',Middle_Name='$Middle_Name',Last_Name='$Last_Name',gender='$gender',dob='$dob',Residential_address='$Residential_address',phone='$phone', Qualification='$Qualification', 
		Experience='$Experience' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:field_officer_view.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated Try Again"); </script>';
			header("Location:field_officer_view.php");
        }
    }
?>