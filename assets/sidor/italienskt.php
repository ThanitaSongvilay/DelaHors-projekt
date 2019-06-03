<!DOCTYPE html>
<html>
<?php session_start();
if(isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn']==true)){
}
else{
  $_SESSION['Value']=Null;

}
?>

    <head>
        <title>Italienska restauranger</title>
        <link rel="stylesheet" href="../css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
        <script type="text/javascript" src="../js/index.js"></script> <!-- koppla till js-->
        <meta charset="UTF-8">
    </head>
    <body class="iSidan">
      <nav>
        <h>RestauRank </h>
        <div class="dropDown">
          <ul>
          <li><a href="../../Index.php">Hem</a>
          </ul>
          <ul>
          <li><a href="#">Restauranger</a>
          <ul>
          <li><a href="italienskt.php">Italienskt</a>
          <li><a href="asiatiskt.php">Asiatiskt</a>
          </ul>
        </div>
      </nav>
    <br>
            <h1>Italienska restauranger</h1>
            <p><i>Här kan du hitta ett urval bland italienska restauranger</i></p><br>
        </div>
        <div class="grid-container">

          <div class="grid-item"><a href="basilico.php"><p>Basilico</p><img id="basilicoBild" src="../img/basilico.jpg"></a></div>
          <div class="grid-item"><a href="Ilforno.php"><p>Il forno Italiano</p><img id="IlFIBild" src="../img/ilforno-italiano.jpg"></a></div>

        </div>
    </body>
</html>
