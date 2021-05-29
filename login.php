<?php
session_start();




//Assign veriables for database connection
$host= "localhost";
$username = "root";
$password = "";
$database_name = "blood_bank_ms";
 
// Create connection between php and mysql
$conn = mysqli_connect($host, $username, $password,$database_name);
 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
	//echo 'Connected successfully  <br>';
}
    if(isset($_REQUEST['signin'])) //when clicked on the sign in button on html form
    {
		// Read values from HTML sign in form
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];
		
		// read the values of the user from the database
        $SQL = "SELECT user_name,user_email,user_address, user_mobile, user_id, user_username, blood_type
		FROM `user` WHERE user_email = '$Email' and user_password='$Password'";
		
		
		
		// run the sql command
        $result =  mysqli_query($conn,$SQL);
		if(!$result){
        echo "connection Error".mysqli_connect_errno();
		}
		else{
			while ($row = $result->fetch_assoc()) {
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['user_Email'] = $row['user_email'];
				$_SESSION['user_address'] = $row['user_address'];
				$_SESSION['user_mobile'] = $row['user_mobile'];
				$_SESSION['user_username'] = $row['user_username'];
				$_SESSION['blood_type'] = $row['blood_type'];
				}
				
				
		$user_address = $_SESSION['user_address'];
		$blood_type = $_SESSION['blood_type'];
			
		
        $SQL = "SELECT banks_address, banks_name, banks_phone 
		FROM `blood_banks` WHERE banks_address = '$user_address'";

        $result =  mysqli_query($conn,$SQL);
		if(!$result){
        echo "connection Error".mysqli_connect_errno();
		}
		else{
			while ($row = $result->fetch_assoc()) {
				$banks_address = $row['banks_address'];
				$banks_name = $row['banks_name'];
				$banks_phone = $row['banks_phone'];
				
				}
			
		}
		
			 include 'user.php';
			 
		}
		
	
		
    }
	
?>