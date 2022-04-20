<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM form5 WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:sales_client_view.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
		header("Location:sales_client_view.php");

		
    }
}

?>