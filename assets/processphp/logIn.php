<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
session_start();
		$host="dbtrain.im.uu.se";
		$dbusername="dbtrain_1044";
		$password="gkpdxr";
		$dbname="dbtrain_1044";
		$con=new mysqli($host,$dbusername,$password,$dbname);

		if($con->connect_error)
		{
			die("Connection failed: " .$con.connect_error);
		}



	$uname="";
	$pword="";
	$uname=$con->real_escape_string($uname);
	$pword=$con->real_escape_string($pword);


	if(isset($_POST['username'])){
	if(empty($_POST["username"])){
	 echo "username missing";
	}
	else{
		$uname=$_POST["username"]; }
	}

	if(isset($_POST['pword'])){
	if(empty($_POST["pword"])){
		echo"Fyll i din lösenord!";
	}else{
		$pword = $_POST["pword"]; }
	}
$sql_test="SELECT * FROM Users WHERE Username='$uname'";
$res_test=mysqli_query($con,$sql_test);

if(mysqli_num_rows($res_test) == 0){
	echo("'<script> alert('Användaren finns inte!');</script>'");
	header("Refresh: 1;URL=../../index.html");
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
		$_SESSION['loggedIn']=true;
		$_SESSION['Username']=$uname;

	}
	else{
		echo "Ditt lösenord eller användarnamn är fel, vänligen prova igen" ;
		header("Refresh:2; URL=../../index.html");
	}

}
$con->close();
?>


</body>
</html>
