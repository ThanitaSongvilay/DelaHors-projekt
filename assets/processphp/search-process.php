<?php
  $host="dbtrain.im.uu.se";
  $dbusername="dbtrain_1044";
  $password="gkpdxr";
  $dbname="dbtrain_1044";
  $con=new mysqli($host,$dbusername,$password,$dbname);

  if($con->connect_error)
  {die("Connection failed: " .$con.connect_error);}

  $search= $_POST['sök'];
  $sql="SELECT url FROM Restaurang WHERE Name='$search'";
  $save=mysqli_query($con,$sql);

  if(mysqli_num_rows($save)>0){
    while($save = mysqli_fetch_assoc($save)){
      echo'<tr><td>'.$save['url'].'</td>';
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
?>
