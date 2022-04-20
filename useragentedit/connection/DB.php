<?php
   $connection = mysqli_connect("localhost", "root", "", "efar");
   if($connection){
       return $connection;
	   
   }else{
       echo "Connect problem".mysqli_connect_error();
   }

?>