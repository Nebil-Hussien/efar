<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
$Project_name=$_POST['Project_name'];
$First_Name = $_POST['First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name = $_POST['Last_Name'];
$Department = $_POST['Department'];
$phone = $_POST['phone'];
$email = $_POST['email'];


        $query = "UPDATE form4 SET Project_name='$Project_name',First_Name='$First_Name',Middle_Name='$Middle_Name',Last_Name='$Last_Name',Department='$Department', phone='$phone', 
		email='$email' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:User_view.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
			 header("Location:User_view.php");
        }
    }
?>