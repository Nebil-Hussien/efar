<?php 

$conn = mysqli_connect("localhost","efar", "123", "efar");
session_start();
if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
 $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";    
 $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)==1)
	{
      
     while($row=mysqli_fetch_assoc($result))
	 {
	if($row["user_type"]=="admin")
	{
		if($row["user_status"]=="active"){
		$_SESSION['LoginUser']=$row["Username"];	
		$_SESSION['user_type']=$row["user_type"];	
		header('Location:admin\dashboard.php');
		}
		else
		{
		    echo	'<script> alert("your account is de activated"); </script>';

		}
	} 	
     elseif($row["user_type"]=="supervisor")
	 {
		if($row["user_status"]=="active") 
		 {
	$_SESSION['LoginSupervisor']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:supervisor\client_registration.php');
		 }
		
		else
		{
				echo    	'<script> alert("your account is de activated"); </script>';

		
		}
			
	}
	 elseif($row["user_type"]=="sales")
	 {
		 if($row["user_status"]=="active") 
		 {
	$_SESSION['LoginSales']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:sales\client_registration.php');
		 }
		else
		{
		    echo	'<script> alert("your account is de activated"); </script>';
		
		}
	}
	
	elseif($row["user_type"]=="partnerclientagentedit")
	 {
		 if($row["user_status"]=="active") 
		 {
	$_SESSION['LoginPartnerclientagentedit']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:partneredit\agent_view.php');
		 }
		else
		{
		   echo 	'<script> alert("your account is de activated"); </script>';
		
		}
	}
	
		elseif($row["user_type"]=="client")
	 {
		 if($row["user_status"]=="active") 
		 {
	$_SESSION['LoginClient']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:client/client.php');
		 }
		else
		{
		    	echo '<script> alert("your account is de activated"); </script>';
		
		}
	}
	
	elseif($row["user_type"]=="userclientedit")
	 {
		 if($row["user_status"]=="active") 
		 {
	$_SESSION['LoginUuserclientedit']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:userclientedit\client_view.php');
		 }
		else
		{
		    echo	'<script> alert("your account is de activated"); </script>';
		
		}
	}
	
	elseif($row["user_type"]=="useragentedit")
	 {
		 if($row["user_status"]=="active") 
		 {
	$_SESSION['LoginUseragentedit']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:useragentedit\agent_view.php');
		 }
		else
		{
		    echo	'<script> alert("your account is de activated"); </script>';
		
		}
	}
	
	elseif($row["user_type"]=="partnerclientagentview")
	 {
		 if($row["user_status"]=="active") 
		 {
	$_SESSION['LoginPartnerclientagentview']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:partnerview\partner_view.php');
		 }
		else
		{
		    echo	'<script> alert("your account is de activated"); </script>';
		
		}
	}
	
	
	
	
	
	 elseif($row["user_type"]=="usersalessuperedit")
	 {
		  if($row["user_status"]=="active") 
		 {
		 
	$_SESSION['LoginUsersalessuperedit']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:usersalessuperedit\field_officer_register.php');
		 }
		else
		{
		echo " your account is deactivated";
		
		}
		
	}
	
	elseif($row["user_type"]=="useragentview")
	 {
		  if($row["user_status"]=="active") 
		 {
		 
	$_SESSION['LoginUseragentview']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:useragentsee\field_officer_register.php');
		 }
		else
		{
		echo " your account is deactivated";
		
		}
		
	}
	
	
	elseif($row["user_type"]=="usersalessuperview")
	 {
		  if($row["user_status"]=="active") 
		 {
		 
	$_SESSION['LoginUsersalessuperview']=$row["Username"];
	$_SESSION['user_type']=$row["user_type"];
		header('Location:usersalessuperview\Supervisor_view.php');
		 }
		else
		{
		echo " your account is deactivated";
		
		}
		
	}
	
	
	
	
	
	
	 else
	 {
		  if($row["user_status"]=="active") 
		 {
		 
		$_SESSION['LoginUserclientview']=$row["Username"];
		header('Location:userclientsee\sales_client_view.php');
		 }
		else
		{
		echo " your account is deactivated";
		
		}

}		
		 
	} 	}

     else{
		    header("Location:index.html");
           $message="Invalid Username or Password";
	 	 
	 }
        
} 

else {
    echo "Error";
}


?>