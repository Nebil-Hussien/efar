<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

    if(isset($_POST['updatedata']))
    { 
$id = $_POST['update_id'];
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
$Special = $_POST['Special'];
$email = $_POST['email'];
$Status = $_POST['Status'];


        $query = "UPDATE form5 SET id='$id',sid='$sid',Project_name='$Project_name',Client_First_Name='$Client_First_Name',Client_Middle_Name='$Client_Middle_Name',Client_Last_Name='$Client_Last_Name',gender='$gender',dob='$dob',Education='$Education',Work='$Work',phone='$phone'
		,city='$city',Woreda='$Woreda',Zone='$Zone',Subcity='$Subcity',House='$House',Special='$Special',email='$email',Status='$Status' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:client_view.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
			header("Location:client_view.php");

        }
    }
?>