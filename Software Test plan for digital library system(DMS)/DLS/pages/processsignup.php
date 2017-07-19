
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



//$sql = "INSERT INTO users (username,password) VALUES('$username','$password')";
//$result = $conn->query($sql);


//$username = mysqli_real_escape_string($conn,$_POST['user']);
//$password = mysqli_real_escape_string($conn,$_POST['pass']);


/*if (!(empty($_POST['username']))) {
	# code...
	header("Location: http://localhost/DLMS/pages/signup.php?message=Failed to register!");
	die();
}
else{

	echo"true new";
}
*/
$fields = array('username','password' );

$error =false;
 if (empty($username) && empty($password)) {
    	# code...
 	$error=true;
 	$message='<p style="color: red; font-size: 18px;"  ><b>You missed username <br>  You missed password!!!</b>
 	</p>';
    header("Location: http://localhost/DLMS/pages/signup.php?message=$message");

   die();


    }    
else if (empty($username)) {
	# code...

	$error=true;

	$message='<p style="color: red; font-size: 18px;"  ><b>You missed username !!!</b>
 	</p>';
    header("Location: http://localhost/DLMS/pages/signup.php?message=$message");

   die();

}
else if(empty($password)){
  
   $error=true;
   $message='<p style="color: red; font-size: 18px;"  ><b>You missed password !!!</b>
 	</p>';
    header("Location: http://localhost/DLMS/pages/signup.php?message=$message");

   die();

}

 else if(($username) ||  ($password)){

 	$sql = "INSERT INTO users (username,password) VALUES('$username','$password')";
    $result = $conn->query($sql);
	$hey="<embed src='$path' hidden='true' loop='true'  autostart=true></embed>";
 	$message='<p style="color: yellow; font-size: 15px;"  ><b>Account successfully created,now Login your account!!!</b>
 	</p>';
 	echo '$hey';
 	header("Location: http://localhost/DLMS/index.php?message=$message && $hey");
	die(); 
   

	
	# code...


}
/*

if (empty($username) ||  empty($password)) {
	echo "one or more required fields were left blank.\n'.
	 'Please fill them in and try again.";
	// header("Location: http://localhost/DLMS/pages/signup.php?");
	// die();
	

}
*/



/*if($result) {
	 $path=exec('demonstrative.mp3' );
 	 $hey="<embed src='$path' hidden='true' loop='true'  autostart=true></embed>";
 	$message='<p style="color: yellow; font-size: 18px;"  ><b>Account successfully created,Now Login your account!!!</b>
 	</p>';
 	echo '$hey';
 	header("Location: http://localhost/DLMS/index.php?message=$message && $hey");
	die();

} else {
 	header("Location: http://localhost/DLMS/pages/signup.php?message=Failed to register!");
	die();
}
*/
?>
<script src="../assets/js/champion.js"></script>