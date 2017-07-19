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

 <a href="insert.php"><h5 style="
    margin-left: 1061px;">Admin Books control page</h5> </a>


<form name="form1" action="" method="post" style="margin-left: 139px;">
<h2 ><b>Admin user control page </h2> 


 <?php if(isset($_GET['message'])) { ?>
            <p><?php echo $_GET['message']; ?></p>
            <?php } ?>

            <?php if(isset($_GET['username'])) { ?>
            <p>Sucess Welcome <?php echo $_GET['username']; ?></p>
            <?php } ?>

  <div class="text color" style="color:white">
    <label for="email" style="
    color: rebeccapurple;
" >Enter Username</label>
    <input type="text" id="user" name="user" class="form-control" style="width: 419px;">
  </div>
   </div>
  <div class="form-group" style="color:white">
    <label for="pwd" style="
    color: rebeccapurple;
" > Enter Password</label>
    <input type="password" id="pass" name="pass" class="form-control" style="
    width: 419px;
" >
  </div>

 <input type="submit" id="insert" name="submit1" class="btn btn-primary"  value="Add">
<input type="submit" id="delete" name="submit2" class="btn btn-primary"  value="Delete">
<input type="submit" id="dispaly"   name="submit3" class="btn btn-primary"  value="Display">

</form>

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

//ini_set('max_execution_time', 0); 
//set_time_limit(0); 
if (isset($_POST["submit2"])) {

	 
       
	# code...
   mysqli_query($conn,"delete from users where username='$_POST[user]'");

  

}/*
 while (isset($_POST["submit2"])) {
 	# code...
    
 	$submit2 =$_POST['user'];
	if (empty($submit2)) {
		# code...
	
	
   $error=true;
   $message='<p style="color: red; font-size: 18px;"  ><b>You missed field!!!</b>
 	</p>';
    header("Location: http://localhost/DLMS/Admin/admincontrol.php?message=$message");

   die();
}
 }
*/

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