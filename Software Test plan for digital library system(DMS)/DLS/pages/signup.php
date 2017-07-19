<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="bootstrap-style" href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="..//simple-sidebar.css" rel="stylesheet">
    
</head>
<body>
		<style type="text/css">
body {
    width: 100%;
    height: 672px;
    background-image: url(../images/db.jpg);
    
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
     
<form action="processsignup.php" method="POST">
  <div class="form-group">
  <div class="login" style="color:white; margin-left:15% ">
  <h2> SIGNUP FORM</h2></div>
  <?php if(isset($_GET['message'])) { ?>
            <p><?php echo $_GET['message']; ?></p>
            <?php } ?>

            <?php if(isset($_GET['username'])) { ?>
            <p>Sucess Welcome <?php echo $_GET['username']; ?></p>
            <?php } ?>
  <div class="text color" style="color:white">
    <label for="email">Username</label>
    <input type="text" id="user" name="user" class="form-control" >
  </div>
   </div>
  <div class="form-group" style="color:white">
    <label for="pwd">Password</label>
    <input type="password" id="pass" name="pass" class="form-control" >
  </div>

 <input type="submit" id="signupbtn" class="btn btn-primary"  value="SIGNUP">


</form>
  </div>
      
  </div>
      
  
      
  </div>
  </body>
</html>