<?php
  $host="dbtrain.im.uu.se";
  $dbusername="dbtrain_1044";
  $password="gkpdxr";
  $dbname="dbtrain_1044";
  $con=new mysqli($host,$dbusername,$password,$dbname);

  if($con->connect_error)
  {die("Connection failed: " .$con.connect_error);}

  $search= $_POST['sökruta'];
  $sql="SELECT Name,url FROM Restaurang WHERE Name='$search'";
  $save=mysqli_query($con,$sql);

  if(mysqli_num_rows($save)>0){
    while($save = mysqli_fetch_assoc($save))
    {
      echo '<div id="sökresultat"';
      echo '<h1>'.$save['Name'].'</h1>';
      echo '<tr><td>'.$save['url'].'</td>';
      //echo '<a href="'.$save['url'].'"Klicka här!</a>';
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
