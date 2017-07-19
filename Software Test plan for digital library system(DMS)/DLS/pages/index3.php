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
<?php
$conn = mysqli_connect('localhost','root',"");
//mysql_connect('localhost','root',"");
$selected_db = mysqli_select_db($conn, "book_insert");
//mysql_select_db("book_insert");
$query="select * from insertbook";
$query1 = mysqli_query($conn,$query);

while ($row=mysqli_fetch_array($query1)) {

  # code...
              $id=$row['id'];
              $filename=$row['filename'];
              $path=$row['path'];
              
             





            }
            /*if (is_array($filename)) {

  foreach ($filename as $itemname) {
   //do something
    echo "$itemname";
  }
}*/

             // $post_content=$row['post_content'];
/*$path = $ros['path'];
$id=$ros['id'];
echo'<img src="'.$path.'"width="200px" height="200px" />';
echo'<file src="'.$path.'"width="200px" height="200px" />';
}*/
?>

		<style type="text/css">
body {
    width: 100%;
    height: 672px;
    background-image: url('../images/db.png');
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
      padding: 7px;
      
      width: 55%;

    }
    
    img{
      margin-right:10px; 
      opacity: 100%;
    }
.modal fade{
  opacity: 0.7;
}


  </style>
  
<form class="search" style="margin-top:%">
  <input type="text" name="search" placeholder="Search..">
</form>
 
  


 <br>

  <div class="cont-fluid">
  <div class="row">

<div class="   col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">

     <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
       <?php

?>
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
      </div>



<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php  
           if (is_array($filename)) {

  foreach ($filename as $itemname) {
   //do something
    echo "$itemname";
  }
}    echo "$filename";?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename['id']; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>




<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>



<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>

<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>


<div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" align="center">
  <div class="card" style="max-width:170px">
       <img src="../images/Adobe.png" style="height: 181px;max-width:130px;" class="card-img-top">
       <file src="../images/<?php echo $path; ?>" style="max-width:130px;" class="card-img-top"  > 
       <div class="card blocks" >
         <h4 class="title"><?php echo $filename; ?></h4>
         <div class="info" style="margin-top:-8%">
         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK TITLE</h4>
        </div>
        <div class="modal-body" align="left">
       <div id="book name"> <h7 class="title"><?php echo $filename; ?></h7> </div>
          <img src="../images/Adobe.png" style="height: 181px;max-width:150px; " class="card-img-top" alt="card img">
        </div>
        <div class="modal-footer">
       <a href="../pages/Read.php"<button type="button" class="btn btn-info">Read</button> </a>

       <a href="../images/<?php echo $path; ?>" download <button type="button" class="btn btn-success" >Download</button> </a>
        <button type="button" class="btn btn-primary" >Borrow</button>
        <button type="button" class="btn btn-warning" >Buy</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  

       </div>
      </div>
</div>



</div>
</div>

<ul class="pager"  style="margin-top:1%">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>


  </body>
</html>
