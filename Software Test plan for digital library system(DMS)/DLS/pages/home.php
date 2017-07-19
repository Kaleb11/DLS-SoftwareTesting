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
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
    
    
</head>
<body>
		<style type="text/css">
body {
    width: 100%;
    height: 672px;
    background-image: url(../images/db.png);
    background-repeat: no-repeat;
    background-size: 100% 100%;   
}


  .card {

    box-shadow: 0 4px 8px 0 rgba(f,f,f,0.2);
    transition: 0.3s;
    width: 130px;
    border-radius: 5px;
    background-color: white;
    margin-top: 10px;



}

.card:hover {
    box-shadow: 0 8px 16px 0 green;
}

img {
    border-radius: 5px 5px 0 0;
}

  .cont-fluid{
  margin-top: -25px;
    margin-left:10%;
    width: 80%;
    padding: 10px;
    background: rgba(0,0,0,0.5);
    border-radius: 5px;
 
}

.input[type=text] {
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    
}

/* When the input field gets focus, change its width to 100% */
.input[type=text]:focus {
    width: 100%;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('../images/searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
    }
    .search{
      padding: 20px;
      margin-left: 115px;
      width: 55%;

    }
    .pager{
      margin-left: 65%;
      margin-top: -60px;

    }
    img{
      margin-right:10px; 
      opacity: 100%;
    }
.modal fade{
  opacity: 0.7;
}


  </style>
 
<form class="search" style="margin-top:%" algin="center">
  <input type="text" name="search" placeholder="Search..">
</form>
 


<ul class="pager" style="margin-left: 65%;
      margin-top: -50px;" align="right">
 
<img src="../images/149071.svg" data-toggle="modal" data-target="#myModal"  height="7%" width="7%">

 

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">USER NAME</h4>
        </div>
        <div class="modal-body" align="left" width="50%">
          <img src="../images/149071.svg" class="img-circle" alt="Cinque Terre" width="200" height="150" align="center">

<div class="" style=" margin-left:50%; margin-top:-25%">
<h5><label for="usr">Name:</label></h5>
<h5><label for="usr">ID:</label></h5>
<h5><label for="usr">Phone Number:</label></h5>
<h5><label for="usr">:</label></h5>
<h5><label for="usr">Name:</label></h5>
</div>

          <div class="form-group" >
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr" width="100%">
</div>
  <div class="form-group">
  <label for="usr">ID:</label>
  <input type="text" class="form-control" id="usr">
</div>  <div class="form-group">
  <label for="usr">Phone Number:</label>
  <input type="text" class="form-control" id="usr">
</div>  <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>



        </div>
        <div class="modal-footer">
       <button type="button" class="btn btn-success" >Update</button>


<a href="contact.html"><button type="button" class="btn btn-info " data-toggle="modal" data-target="#myMdl">info</button></a>



          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


        </div>
      </div>
      
    </div>
  </div>
</div>

 <li><a href="../pages/logout.php">LOGOUT</a></li>
 
</ul>


 <br>

  <div class="cont-fluid">
  <div class="row">

<div class="   col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">

<a href="index3.php" style="text-decoration:none">
     <div class="card" style="max-width:170px">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Software Engineering</h4>
         
         <p> what's up</p>
       </div>
      </div>
      </div> </a>



<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Mechanical Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>




<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Civil Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>



<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Biomedical Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Chemical Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Electrical Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Information Technology</h4>
         <p> what's up</p>
       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Fiction Book vvvvvv 
         </h4>
         <p> what's up</p>
       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Software Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Software Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Software Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>


<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
 <div class="card" style="max-width:170px; ">
       <img src="../images/23.jpg"  style="max-width:130px; " class="card-img-top" alt="card img">
       <div class="card blocks" >
         <h4 class="title"> Software Engineering</h4>
         <p> what's up</p>
       </div>
      </div>
</div>



</div>
</div>




  </body>
</html>