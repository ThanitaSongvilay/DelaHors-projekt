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

session_start();

function Salt(){
	$all = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $saltLength = 15;
    $randomSalt ="";

	for($i=0; $i<$saltLength; $i++){
		$randomSalt .= $all[mt_rand(0, strlen($all))];
	}

	return $randomSalt;
}

$uname="";
$email="";
$pword="";
$SHpword="";
$randomSalt=Salt();


if(isset($_POST['regUname'])){
	$uname=$_POST["regUname"]; }

if(isset($_POST['regUemail'])){
	$email = $_POST["regUemail"]; }

if(isset($_POST['regUpassword'])){
	$pword = $_POST["regUpassword"].$randomSalt;
	$SHpword=sha1($pword);
	}

	$sql_u="SELECT * FROM Users WHERE Username='$uname'";
	$sql_e="SELECT * FROM Users WHERE Email='$email'";
	$res_u=mysqli_query($con,$sql_u);
	$res_e=mysqli_query($con,$sql_e);
	if(mysqli_num_rows($res_u)> 0){
		echo" Följande namn $uname används redan!";
		header("Refresh: 5; URL=reg.php");
	}
	else if(mysqli_num_rows($res_e) >0){
		echo"Epost adressen används redan!";
	}

	else{
		AddToDb($SHpword,$email,$uname,$randomSalt);
	}


function AddToDb($pword,$email,$uname,$randomSalt){

        $host="dbtrain.im.uu.se";
		$dbusername="dbtrain_1044";
		$password="gkpdxr";
		$dbname="dbtrain_1044";
		$con=new mysqli($host,$dbusername,$password,$dbname);

		if($con->connect_error)
		{
			die("Connection failed: " .$con.connect_error);
		}

	$sql = "INSERT INTO Users (Username,Email,Password,Salt) VALUES ('$uname','$email','$pword','$randomSalt')";

	if($con->query($sql)=== TRUE){
			echo "$sql"; /* ändra sen till sidan för inloggade*/

		}
		else{
			 echo "ERROR $sql";
			}
	$con->close();

}

  ?>
