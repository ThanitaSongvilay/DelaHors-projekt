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

		$sql= "DELETE FROM Kommentarer WHERE KomId=$_GET[KomId]";
		if(mysqli_query($con,$sql)){
			header('Location:'.$_SERVER["HTTP_REFERER"]); /*hoppar till sidan innan!*/
			exit;
		}else{
			echo"Opps error!";
		}

?>
