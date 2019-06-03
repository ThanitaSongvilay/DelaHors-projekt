<?php
    $namnet = "";
    $kommentar ="";
    $restID= 1;
    if(isset($_POST["användarNamn"])){
        $namnet = $_POST['användarNamn'];

		if(isset($_POST["kommentar"])){
          $kommentar = $_POST['kommentar'];
        }

    if(isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn']==true)){

      addToDatabase($namnet,$kommentar,$restID);
      }
    }

    echo("'<script> alert('Du måste vara inloggad för att kommentera!');</script>'");
    header("Refresh:0; URL=../sidor/IlForno.php");



function addToDatabase($namnet,$kommentar,$restID){
  $host="dbtrain.im.uu.se";
  $dbusername="dbtrain_1044";
  $password="gkpdxr";
  $dbname="dbtrain_1044";
  $con=new mysqli($host,$dbusername,$password,$dbname);

    if ($con->connect_error) {
        die("något gick fel: " . $con->connect_error);
    }

    $sql = "INSERT INTO Kommentarer (Namn, Kommentar, RestId) VALUES ('$namnet','$kommentar','$restID')";

    if ($con->query($sql) === TRUE) {
    } else {
        echo "Något gick fel i sqlanropet: " . $sql . "<br>" . $con->error;
    }

    $con->close();
	header("Location:../sidor/pong.php");
}
?>
