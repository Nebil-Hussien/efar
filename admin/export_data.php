<?php 
$connection = mysqli_connect("localhost","efar","123","efar");

$id=$_POST['id'];      
$Project_name=$_POST['Project_name'];
$Client_Full_Name = $_POST['Client_Full_Name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$Woreda = $_POST['Woreda'];
$Zone = $_POST['Zone'];
$Subcity = $_POST['Subcity'];
$House = $_POST['House'];
$Special = $_POST['Special'];
$email = $_POST['email'];
$Status = $_POST['Status'];


$sql_query = "SELECT  id, Project_name, Client_Full_Name, phone,city,Woreda,Zone,Subcity,House,Special,email,Status FROM form5 LIMIT 10";
$resultset = mysqli_query($connection, $sql_query) or die("database error:". mysqli_error($conn));
$developer_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
	$developer_records[] = $rows;
}
if(isset($_POST["export_data"])) {	
	$filename = "EFAR_".date('Y/m/d') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	$show_coloumn = false;
	if(!empty($developer_records)) {
	  foreach($developer_records as $record) {
		if(!$show_coloumn) {
		  // display field/column names in first row
		  echo implode("\t", array_keys($record)) . "\n";
		  $show_coloumn = true;
		}
		echo implode("\t", array_values($record)) . "\n";
	  }
	}
	exit;  
}

?>