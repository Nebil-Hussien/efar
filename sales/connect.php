s<?php
$PROJECT_NAME=$_POST['PROJECT_NAME'];
$OFFICER_NAME=$_POST['OFFICER_NAME'];
$Gender=$_POST['Gender'];
$DOB=$_POST['DOB'];
$Residential_address=$_POST['Residential_address'];
$Qualification=$_POST['Qualification'];
$Experience=$_POST['Experience'];

// Database connection
	$conn = new mysqli('localhost','efar','123','efar');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(PROJECT_NAME, OFFICER_NAME, Gender, DOB, Residential_address,Qualification, Experience) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $PROJECT_NAME, $OFFICER_NAME, $Gender, $DOB,$Residential_address, $Qualification, $Experience);
		$stmt->$execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>

