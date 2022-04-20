<?php
if (isset($_POST['submit'])) {
    if (isset ($_POST['userid'])&&($_POST['username'])&& isset($_POST['email'])&& isset($_POST['user_type']) && isset($_POST['password'])&& isset($_POST['user_status']) ) {
         $userid = $_POST['userid'];
        $username = $_POST['username'];
		$email = $_POST['email'];
		$user_type=$_POST['user_type'];
        $password = $_POST['password'];
		$user_status = $_POST['user_status'];
		if(!empty($userid)||!empty($username)||!empty($password)||!empty($email)||!empty($user_type)||!empty($password)||!empty($user_status)){
        $host = "localhost";
        $dbUsername = "efar";
        $dbPassword = "";
        $dbName = "efar";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT userid FROM register WHERE userid = ? LIMIT 1";
            $Insert = "INSERT INTO register(userid,username,email,user_type,password,user_status) values(?,?,?,?,?,?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $userid);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssss",$userid,$username,$email,$user_type, $password, $user_status);
                if ($stmt->execute()) {
					
                   header('Location:signup_view.php');
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this userid.";
				header("Location:signupform.php");

            }
            $stmt->close();
            $conn->close();
        }}
    }
    else {
		 echo "All field are required.";
		header("Location:signupform.php");

        die();
    }
}
else {
    echo "Submit button is not set";
	header("Location:signupform.php");
}
?>