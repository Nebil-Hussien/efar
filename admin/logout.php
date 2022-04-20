<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
 echo '<script> alert("You Successfuly Logged out"); </script>';
header("location:\index.html");
exit;
?>