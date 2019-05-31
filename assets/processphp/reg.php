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
		$randomSalt .= $all[rand(0, strlen($all-1))];
	}

	return $randomSalt;
}
$uname="";
$email="";
$pword="";
$Uvalue=0;
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
		$varning="Användar namnet är redan taget!";
		echo("<script type ='text/javascript'> alert('$varning');</script>");
		header("Refresh:0;  url=../../registrera.php");
	}
	else if(mysqli_num_rows($res_e) >0){
		$message = "Emailadressen är redan registrerad";
        echo("<script type ='text/javascript'> alert('$message');</script>");
        header("Refresh: 0; url=../../registrera.php"); 	}
	else{
		AddToDb($SHpword,$email,$uname,$randomSalt,$Uvalue);
	}

function AddToDb($pword,$email,$uname,$randomSalt,$Uvalue){

		$host="dbtrain.im.uu.se";
		$dbusername="dbtrain_1044";
		$password="gkpdxr";
		$dbname="dbtrain_1044";
		$con=new mysqli($host,$dbusername,$password,$dbname);

		if($con->connect_error)
		{
			die("Connection failed: " .$con.connect_error);
		}

	$sql = "INSERT INTO Users (Username,Email,Password,Salt,Value) VALUES ('$uname','$email','$pword','$randomSalt','$Uvalue')";

	if($con->query($sql)=== TRUE){
			header("Location:../../index.php");
		}
		else{
			 echo "ERROR $sql";
			}
	$con->close();
}
  ?>
