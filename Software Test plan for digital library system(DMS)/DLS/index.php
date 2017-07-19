
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>DLMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>
<body>


		<style type="text/css">
body {
    width: 100%;
    height: 672px;
    background-image: url('images/db.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;   
}

form {
        background: rgba(0,0,0,0.5);
     padding: 30px;
        border-radius: 5px;
        margin-top: 160px;
         background-repeat: no-repeat;
        width:280px;
}
 


  </style>

  <div class="container">
  
  <div class="row">

  <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 " align="center">
     
<form action="pages/process.php" method="POST">
  <div class="form-group">
  <div class="login" style="color:white; margin-left:15% ">

  <h2> LOGIN FORM</h2></div>
  <?php if(isset($_GET['message'])) { ?>
            <p><?php echo $_GET['message']; ?></p>
            <?php } ?>

            <?php if(isset($_GET['username'])) { ?>
            <p>Sucess Welcome <?php echo $_GET['username']; ?></p>
            <?php } ?>
  <div class="text color" style="color:white">
    
    <label>Username</label>
    <input type="text" name="user" class="form-control" id="user">
  </div>
   </div>
  <div class="form-group" style="color:white">
    <label>Password</label>
    <input type="password" id="pass" name="pass" class="form-control">
  </div>
<div class="btn" style="margin-left:5%">
<input type="submit" id="btn" value="LOGIN" class="btn btn-primary">

 <a href="pages/signup.php" <button type="submit" class="btn btn-primary" >SIGNUP</button> </a>
</div>


</form>
  </div>
      
  </div>
      
  
      
  </div>
  </body>
</html>
