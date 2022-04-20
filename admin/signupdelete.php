<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:signup_view.php");
    }
    else
    {
		header("Location:signup_view.php");
        echo '<script> alert("Data Not Deleted Try Again"); </script>';
    }
}

?>