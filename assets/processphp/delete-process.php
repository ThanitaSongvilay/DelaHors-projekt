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


		$sql= "DELETE FROM Kommentarer WHERE KomId=$_GET[KomId]"; /*fixa injection :D!!!!*/
		if(mysqli_query($con,$sql)){
			echo"Kommentaren är nu borttagen!";
			header('Location:'.$_SERVER["HTTP_REFERER"]); /*hoppar till sidan innan!*/
			exit;
		}else{
			echo"Opps error!";
		}

?>
