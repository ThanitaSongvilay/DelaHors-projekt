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
	$Uvalue=0;
	$uname=$con->real_escape_string($uname);
	$pword=$con->real_escape_string($pword);

	if(isset($_POST['Namn'])){
	if(empty($_POST["Namn"])){
	 echo "Fyll i ett användarnamn";
	}
	else{
		$uname=$_POST["Namn"]; }
	}

	if(isset($_POST['password'])){
	if(empty($_POST["password"])){
		echo"Fyll i ditt lösenord!";
	}else
		{
			$pword = $_POST["password"];
		}
	}

$sql_test="SELECT * FROM Users WHERE Username='$uname'";
$res_test=mysqli_query($con,$sql_test);

if(mysqli_num_rows($res_test) == 0){

	$sql_admin="SELECT * FROM Admins WHERE AdminNamn='$uname'";
	$res_admin=mysqli_query($con,$sql_admin);

	if(mysqli_num_rows($res_admin) == 0){
		echo("'<script> alert('Användaren finns inte!');</script>'");
		header("Refresh: 1;URL=../../index.php");

	}

		$result=$res_admin->fetch_assoc();
		if((mysqli_num_rows($res_admin)>0) && ($result['Lösenord']=$pword)){
		$_SESSION['loggedIn']=true;
		$_SESSION['Username']=$uname;
		$_SESSION['Value']=$Uvalue;
		echo("'<script> alert('Välkommen $uname!');</script>'");
		header("Refresh: 0; URL=../../Index.php");
		}

}

else if(mysqli_num_rows($res_test)>0){
	$sql_saltQuery="SELECT Salt,Password,Value FROM Users WHERE Username='$uname'";
    $res=$con->query($sql_saltQuery);
	$res=$res->fetch_assoc();
	$Salt=$res['Salt'];
	$hash=sha1($pword.$Salt);
	$password=$res['Password'];
	$Uvalue=$res['Value'];
	if($hash == $password){
		$_SESSION['loggedIn']=true;
		$_SESSION['Username']=$uname;
		$_SESSION['Value']=$Uvalue;
		echo("'<script> alert('Välkommen $uname!');</script>'");
		header("Refresh: 0; URL=../../Index.php");

	}
	else{
		echo "Ditt lösenord eller användarnamn är fel, vänligen prova igen" ;
		header("Refresh:1; URL=../../index.php");
	}
}
	$con->close();
	?>
	</body>
	</html>
