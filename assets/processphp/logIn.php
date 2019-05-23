<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
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

$uname="";
$pword="";

if(isset($_POST['username'])){
	$uname=$_POST["username"]; }

if(isset($_POST['pword'])){
	$pword = $_POST["pword"]; }

$sql_test="SELECT * FROM Users WHERE Username='$uname'";
$res_test=mysqli_query($con,$sql_test);

if(mysqli_num_rows($res_test) == 0){
	echo("'<script> alert('User not found!');</script>'");
	header("Refresh: 1;URL=../../index.php");
}

else if(mysqli_num_rows($res_test)>0){
	$sql_saltQuery="SELECT Salt,Password FROM Users WHERE Username='$uname'";
  $res=$con->query($sql_saltQuery);
	$res=$res->fetch_assoc();
	$Salt=$res['Salt'];
	$hash=sha1($pword.$Salt);
	$password=$res['Password'];
	if($hash == $password){
		echo "Välkommen $uname";
		header("Refresh: 2; URL=../../form.html");
		$_SESSION['Username']=$uname;

	}
	else{
		echo "Ditt lösenord eller användarnamn är fel, vänligen prova igen" ;
		header("Refresh:2; URL=../../index.php");
	}

}
$con->close();
?>


</body>
</html>
