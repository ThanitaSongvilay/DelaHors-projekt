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

	$sql="SELECT Kommentar,Namn,KomId FROM Kommentarer WHERE RestId = 1 ";
	if(isset($_SESSION['loggedIn'])&&($_SESSION['loggedIn']==true) && ($_SESSION['Value']==1)){
		$save=$con->query($sql);
		while($row=$save->fetch_assoc()){
		echo'<div class="kommentarer">';
		echo ' <p> '.$row["Namn"].'</p>';
		echo ' <p>'.$row["Kommentar"].'</p>';
		echo "<a href=http://localhost/grupp11_2019/assets/processphp/delete-process.php?KomId=".$row['KomId'].">Delete</a>";
		echo'</div>';
		echo"<hr>";
	}
	}

	else if(isset($_SESSION['loggedIn'])&&($_SESSION['loggedIn']==true) && ($_SESSION['Value']==0)){
		$save=$con->query($sql);
		while($row=$save->fetch_assoc()){
		echo'<div class="kommentarer">';
		echo ' <p> '.$row["Namn"].'</p>';
		echo ' <p>'.$row["Kommentar"].'</p>';
		echo'</div>';
		echo"<hr>";
	}
	}

	else{
		echo"Logga in för att se kommentarer och kommentera!";
	}

$con->close();
?>
