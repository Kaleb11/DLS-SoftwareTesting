<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="bootstrap-style" href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="..//simple-sidebar.css" rel="stylesheet">
  <?php



//$username = stripcslashes($username);
//$password = stripcslashes($password);

//$username = mysqli_real_escape_string($conn,$username);
//$password = mysqli_real_escape_string($conn,$password);

$conn = new mysqli("localhost","root","","loginpage");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$selected_db = mysqli_select_db($conn, "loginpage");
$query="select * from users";
$query1 = mysqli_query($conn,$query);

//$sql = "select * from users where username = '$username' and password='$password'";
//$sql = "select * from users where username = '$username' and password='$password'";
//$result = $conn->query($sql);


?>
<body>

   


<?php
if (isset($_POST["submit1"])) {
	# code...
   $username =$_POST['user'];
$password =$_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);


$conn = new mysqli("localhost","root","","loginpage");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$fields = array('username','password' );

$error =false;
 if (empty($username) && empty($password)) {
    	# code...
 	$error=true;
 	$message='<p style="color: red; font-size: 18px;"  ><b>You missed username <br>  You missed password!!!</b>
 	</p>';
    header("Location: http://localhost/DLMS/Admin/admincontrol.php?message=$message");

   die();


    }    
else if (empty($username)) {
	# code...

	$error=true;

	$message='<p style="color: red; font-size: 18px;"  ><b>You missed username !!!</b>
 	</p>';
    header("Location:http://localhost/DLMS/Admin/admincontrol.php?message=$message");

   die();

}
else if(empty($password)){
  
   $error=true;
   $message='<p style="color: red; font-size: 18px;"  ><b>You missed password !!!</b>
 	</p>';
    header("Location: http://localhost/DLMS/Admin/admincontrol.php?message=$message");

   die();

}

 else if(($username) ||  ($password)){

 	$sql = "INSERT INTO users (username,password) VALUES('$username','$password')";
    $result = $conn->query($sql);
	$hey="<embed src='$path' hidden='true' loop='true'  autostart=true></embed>";
 	$message='<p style="color: green; font-size: 15px;"  ><b>Account successfully created!!!</b>
 	</p>';
 	echo '$hey';
 	header("Location: http://localhost/DLMS/Admin/admincontrol.php?message=$message && $hey");
	die(); 
   

	
	# code...


}
}

?>
<?php
if (isset($_POST["submit2"])) {
	# code...
mysqli_query($conn,"delete from users where username='$_POST[user]'");



}


?>


<?php
if (isset($_POST["submit3"])) {


	# code...

$res=mysqli_query($conn,"select * from users ");
echo "<table >";
echo "<tr>";
echo "<th>";echo "username";echo "</th>";
echo "<th>";echo "password";echo "</th>";
echo "</tr>";
while ($row=mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>";echo $row["username"];echo "</td>";
      echo "<td>";echo $row["password"];echo "</td>";
      echo "</tr>";
	# code...
}


}


?>
<style>
table, th, td {

    margin-top: 46px;

    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>





</body>
</html>