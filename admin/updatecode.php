<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

    if(isset($_POST['updatedata']))
    {   
$idup = $_POST['update_id'];
$id=$_POST['id'];      
$Project_name=$_POST['Project_name'];
$Client_name = $_POST['Client_name'];
$Description_of_project = $_POST['Description_of_project'];
$status = $_POST['status'];


        $query = "UPDATE form1 SET id='$id',Project_name='$Project_name',Client_name='$Client_name',Description_of_project='$Description_of_project'
		,status='$status' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:project_view.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
		    header("Location:project_view.php");
        }
    }
?>