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
        <title>Asiatiska restauranger</title>
        <link rel="stylesheet" href="../css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
        <script type="text/javascript" src="../js/index.js"></script> <!-- koppla till js-->
        <meta charset="UTF-8">
    </head>
    <body class="aSidan">
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
        <div>
            <h3>Asiatiska restauranger</h3>
            <p><i>Här kan du hitta ett urval bland asiatiska restauranger</i></p><br>
        </div>
        <div class="grid-container">
            <div class="grid-item"><a href="pong.php"><p>Pong</p><br><img id="pongBild" src="../img/pong.jpg"></a></div>

            <div class="grid-item"><a href="sushiYama.php"><p>Sushi yama</p><br><img id="sushiYamaBild" src="../img/sushi.jpg"></a></div>
        </div>
    </body>
</html>
