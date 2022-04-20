<?php
$connection = mysqli_connect("localhost","efar","123");
$db = mysqli_select_db($connection, 'efar');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];

        $userid = $_POST['userid'];
        $username = $_POST['username'];
		$email = $_POST['email'];
		$user_type=$_POST['user_type'];
        $password = $_POST['password'];
        $user_status = $_POST['user_status'];



        $query = "UPDATE register SET id='$id',userid='$userid',username='$username',email='$email',user_type='$user_type',password='$password',user_status='$user_status' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:signup_view.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
			header("Location:signup_view.php");

        }
    }
?>