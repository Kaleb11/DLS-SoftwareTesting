<html>
<head>
<title></title>

    <meta charset="utf-8">

    
    

    <!-- Custom CSS -->
    
</head>

<body>
<h1 style="
    margin-left: 432px;
"><u>Admin Books Control Page</u></h1>
<a href="admincontrol.php"><h3>Admin user control page</h3></a>
<form method="post" action="insert.php" enctype="multipart/form-data">
<table width="600" align="center" border="10">
<tr>
  <td align="center" bgcolor="yellow" colspan="6" ><h1>Insert Software Engineering Books</h1></td>	
</tr>
<tr>

	<td align="right" size="30" id="filename">Post Book Title:</td>
    <td><input type="text" name="title"></td>
</tr>
<!--<tr>
    <td align="right" size="30">Post Date:</td>
    <td><input type="text" name="date"></td>
</tr>-->
<tr>

    <td align="right" size="30">Post Book </td>
    <td><input type="file" name="f"></td>
</tr>
<tr>
	
    <td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
</tr>
</table>
</form>
</body>
<?php
$conn = mysqli_connect('localhost','root',"");
//mysql_connect('localhost','root',"");
$selected_db = mysqli_select_db($conn, "book_insert");
$filename = false;
if(isset($_POST['title'])){
    $filename = $_POST['title'];
 } 
    echo $filename;
//$filename=$_POST['title'];
if (isset($_POST["submit"])) {
     $fnm = $_FILES["f"]["name"];
     $dst="../images/".$fnm;
     move_uploaded_file($_FILES["f"]["tmp_name"], $dst);
     $query= "insert into insertbook(filename,name,path) VALUES('$filename','$fnm','$dst')";
     $query1 = mysqli_query($conn,$query) ;
      if ($query1== true) {
       
         echo "Sucessfully inserted";
         # code...
     }

}

?>

<form action="" method="post">


<table width="600" align="center" border="10" style="
    margin-top: 108px;"
    
>
<tr>
  <td align="center" bgcolor="green" colspan="6"><h1>Admin Control Software Engineering Books</h1></td>   
</tr>
<tr>

    <td align="right" size="30">Enter Book Title:</td>
    <td><input type="text" name="title"></td>
</tr>
<!--<tr>
    <td align="right" size="30">Post Date:</td>
    <td><input type="text" name="date"></td>
</tr>-->
    
   <td align="left" colspan=""> 
   <input type="submit" id="insert" name="submit1" class="btn btn-primary"  value="Display">
    <td align="right" colspan="">
   <input type="submit" id="delete" name="submit2" class="btn btn-primary"  value="Delete">
</tr>
</table>
</form>



<?php
$conn = mysqli_connect('localhost','root',"");
//mysql_connect('localhost','root',"");
$selected_db = mysqli_select_db($conn, "book_insert");
if (isset($_POST["submit1"])) {


    # code...

$res=mysqli_query($conn,"select * from insertbook ");

echo "<table>";
echo "<tr>";
echo "<th>";echo "filename";echo "</th>";
echo "<th>";echo "name";echo "</th>";
echo "</tr>";
while ($row=mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>";echo $row["filename"];echo "</td>";
      echo "<td>";echo $row["name"];echo "</td>";
      echo "</tr>";
    # code...
}


}


?>
<style>
table, th, td {

    margin-left: 367px;


    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>

<?php
$conn = mysqli_connect('localhost','root',"");
//mysql_connect('localhost','root',"");
$selected_db = mysqli_select_db($conn, "book_insert");
if (isset($_POST["submit2"])) {
    # code...
 mysqli_query($conn,"delete from insertbook where filename='$_POST[title]'");}


?>

<table width="600" align="center" border="10" style="
    margin-top: 108px;"">
<tr>
  <td align="center" bgcolor="yellow" colspan="6"><h1>Insert Civil Engineering Books</h1></td>   
</tr>
<tr>

    <td align="right" size="30">Post Book Title:</td>
    <td><input type="text" name="title"></td>
</tr>
<!--<tr>
    <td align="right" size="30">Post Date:</td>
    <td><input type="text" name="date"></td>
</tr>-->
<tr>

    <td align="right" size="30">Post Book </td>
    <td><input type="file" name="f"></td>
</tr>
<tr>
    
    <td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
</tr>
</table>
<form action="" method="post">


<table width="600" align="center" border="10" style="
    margin-top: 108px;"
    
>
<tr>
  <td align="center" bgcolor="green" colspan="6"><h1>Admin Control Civil Engineering Books</h1></td>   
</tr>
<tr>

    <td align="right" size="30">Enter Book Title:</td>
    <td><input type="text" name="title"></td>
</tr>
<!--<tr>
    <td align="right" size="30">Post Date:</td>
    <td><input type="text" name="date"></td>
</tr>-->
    
   <td align="left" colspan=""> 
   <input type="submit" id="insert" name="submit1" class="btn btn-primary"  value="Display">
    <td align="right" colspan="">
   <input type="submit" id="delete" name="submit2" class="btn btn-primary"  value="Delete">
</tr>
</table>
</form>

<table width="600" align="center" border="10" style="
    margin-top: 108px;"">
<tr>
  <td align="center" bgcolor="yellow" colspan="6"><h1>Mechanical Enginerring Books</h1></td>   
</tr>
<tr>

    <td align="right" size="30">post Book Title:</td>
    <td><input type="text" name="title"></td>
</tr>
<!--<tr>
    <td align="right" size="30">Post Date:</td>
    <td><input type="text" name="date"></td>
</tr>-->
<tr>

    <td align="right" size="30">Post Book </td>
    <td><input type="file" name="f"></td>
</tr>
<tr>
    
    <td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
</tr>
</table>
<form action="" method="post">


<table width="600" align="center" border="10" style="
    margin-top: 108px;"
    
>
<tr>
  <td align="center" bgcolor="green" colspan="6"><h1>Admin Control Mechanical Engineering Books</h1></td>   
</tr>
<tr>

    <td align="right" size="30">Enter Book Title:</td>
    <td><input type="text" name="title"></td>
</tr>
<!--<tr>
    <td align="right" size="30">Post Date:</td>
    <td><input type="text" name="date"></td>
</tr>-->
    
   <td align="left" colspan=""> 
   <input type="submit" id="insert" name="submit1" class="btn btn-primary"  value="Display">
    <td align="right" colspan="">
   <input type="submit" id="delete" name="submit2" class="btn btn-primary"  value="Delete">
</tr>
</table>
</form>

</html>

