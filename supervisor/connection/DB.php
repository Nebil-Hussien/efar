<?php
   $connection = mysqli_connect("localhost", "efar", "123", "efar");
   if($connection){
       return $connection;
	   
   }else{
       echo "Connect problem".mysqli_connect_error();
   }

?>