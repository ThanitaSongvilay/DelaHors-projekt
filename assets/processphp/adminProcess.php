<?php
$host="dbtrain.im.uu.se";
$dbusername="dbtrain_1044";
$password="gkpdxr";
$dbname="dbtrain_1044";
$con=new mysqli($host,$dbusername,$password,$dbname);

if($con->connect_error)
{
  die("Connection failed: " .$con.connect_error);
}

$sql= "DELETE  Namn, Kommentar FROM Kommentarer ";
$save = $conn->query($sql);



 ?>
