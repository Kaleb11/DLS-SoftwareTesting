<?php
$username =$_POST['user'];
$password =$_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);

//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

$conn = new mysqli("localhost","root","","loginpage");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from users where username = '$username' and password='$password'";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 // Handle the form:
 if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) {

 if ( (strtolower($_POST['username']) == 'Enter username')&& ($_POST['password'] =='testpass') ) { // Correct!
// Do session stuff:
session_start();
$_SESSION['username'] =$_POST['username'];
$_SESSION['loggedin'] =time();

 // Redirect the user to the  welcome page!
ob_end_clean();
// Destroy the buffer!
header ('Location: home.php');
exit();

} 
else { // Incorrect!

print '<p>The submitted username and password do not match those on file!<br />Go back and try again.</p>';
}

} else { // Forgot a field.

print '<p>Please make sure you enter both an username and a password!<br />Go back and try again.</p>';

 }

//else { // Display the form.
//print'login.php'
//}





if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
     	echo "login success!!! welcome ".$row['username'];
     	header("Location: http://localhost/DLMS/pages/home.php?username=".$row['username']);
		die();
	}

} else {
	//echo "<h5>The submitted email address and password do not match those on file!<br />Go back and try again.</h5>";
 	
 	$para='<p style="color: red;"><b>The submitted user name and password do not match those on file!!!<br />Go back and try again.</p>';
 	header("Location: http://localhost/DLMS/index.php?message=$para");
	die();
}
}
?>