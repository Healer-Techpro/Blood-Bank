<?php
$host= "localhost";
$username = "root";
$password = "";
$database_name = "blood_bank_ms";
 
// Create connection
$conn = mysqli_connect($host, $username, $password,$database_name);
 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
	echo 'Connected successfully';
}
    if(isset($_REQUEST['submit'])) //when clicked on the Register button
    {
		$user_name = $_REQUEST['Fname'];
		$user_Email = $_REQUEST['Email'];
		$user_Password = $_REQUEST['Password'];
		$user_Phone = $_REQUEST['Phone'];
		$user_address = $_REQUEST['Location'];
		$blood_type = $_POST["Blood_Type"];
		
		echo $blood_type;
		
		
        $SQL = "INSERT INTO user (user_id,user_name, user_email, user_password,user_mobile,user_address,blood_type,user_username) 
		VALUES ('','$user_name','$user_Email','$user_Password','$user_Phone','$user_address','$blood_type','$user_Email')";

        $result =  mysqli_query($conn,$SQL);
		if(!$result){
        echo "connection Error".mysqli_connect_errno();
		}
		else{
		
		include 'user.php';}
		
    }
?>