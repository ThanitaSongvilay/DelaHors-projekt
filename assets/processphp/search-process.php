<?php
  $host="dbtrain.im.uu.se";
  $dbusername="dbtrain_1044";
  $password="gkpdxr";
  $dbname="dbtrain_1044";
  $con=new mysqli($host,$dbusername,$password,$dbname);

  if($con->connect_error)
  {die("Connection failed: " .$con.connect_error);}

  $search= $_POST['sökruta'];
  $sql="SELECT Name,url FROM Restaurang WHERE Name LIKE '$search'";

  $save=mysqli_query($con,$sql);


  if(mysqli_num_rows($save)>0){

	  while($row=$save-> fetch_assoc()){
      echo '<div id="sökresultat"';
      echo '<h1>'.$row['Name'].'</h1>';
	  echo "<br>";
	  echo "<a href='".$row['url']."'>clicka här!</a>";
      echo '</div>';
      echo "<br>";
    }
  }
  else if(mysqli_num_rows($save)==0){
    echo "Hittade inga resultat!";
  }
  else{
    echo("Felmeddelande: ".mysqli_error($con));
  }
  $con->close();
  //header('Location: Index.html');
?>
