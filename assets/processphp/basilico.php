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

	$sql="SELECT Kommentar FROM Kommentarer WHERE RestId == 5 ";
	$res=mysqli_query($con,$sql);

	if(mysqli_num_rows($res) > 0){
		while($row = mysqli_fetch_assoc($res)){
			echo '<tr><td>'.$row['Kommentar'].'</td>';
			echo "<br>";

		}
	}

	else if(mysqli_num_rows($res) == 0){
		echo "No results found!";
	}

	else{
          echo("Error description: ". mysqli_error($con));
	}




?>