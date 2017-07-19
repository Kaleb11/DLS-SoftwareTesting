<!DOCTYPE html>
<html>
<head>
	<title></title>
	
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
	<object data="../images/<?php echo "$path";   header('Content-type: application/pdf');   header('Content-Disposition:inline ; path =$path');header('Content-Transfer-Encoding; binary'); header('Accept-Rannges: bytes'); @readfile($path) ?>" width="100%" height="650px"></object>
</body>
</html>