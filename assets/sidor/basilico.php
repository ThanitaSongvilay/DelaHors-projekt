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
    <title>Basilico</title> <!--det här syns i webbläsartabben-->
    <link rel="stylesheet" href="../css/main.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../js/index.js"></script> <!-- koppla till js-->
    <meta charset="UTF-8">
  </head>
  <body id="BasilicoBody">
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
      <h2>Välkommen till Basilico</h2>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div>
          <p>Lokaliserad vid Linnéträdgården.<br>
            Nedan hittar ni Basilicos meny och kontaktuppgifter.
          </p>
        </div>
        <div class="restLänk">
          <a href="http://www.basilico.se/meny.html">Meny</a><br>
          <br>
          <a href="http://www.basilico.se/kontakt.html">Kontakt</a><br>
          <br>
        </div>
        <div>
          <p>Hitta hit!</p>
        </div>

        <!--Kartan-->
        <div id="map"></div>
        <script>
          function initMap()
          {
            //Map options
            var options = {
              zoom: 15,
              center: {lat: 59.86170, lng:17.63334}
            }
            //New map
            var map = new google.maps.Map(document.getElementById('map'), options);

            //Add marker
            var marker = new google.maps.Marker({
              position:{lat:59.86170, lng:17.63334},
              map:map
            });

            var infoWindow = new google.maps.InfoWindow({
              content:'<h1>Basilico</h1><p>Svartbäcksgatan 24</p>'
            });

            marker.addListener('click', function(){
              infoWindow.open(map, marker);
            });
          }
        </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrRyzQ557WJLJOFj6qpceKnANh4Szwcjw&callback=initMap"
    async defer></script>
    <br>


    <?php
      //include 'basilico-process.php';
      ?>

    <!--<div>
      <?php
		    //include	'../processphp/basilico-process.php';
	  ?>
  </div>-->

    <!--Form så att användare ska kunna kommentera-->
    <p><b>Lämna gärna en kommentar här om vad du tycker om Basilico!</b></p>
      <br>
        <form class="kommentarForm" name="kommentarForm" method="post" action="../processphp/insert-basilico.php" onsubmit="return kollaKommentar()">
        Användarnamn: <br/>
        <br>
        <input type="text" name="användarNamn" id="användarNamn" placeholder="Användarnamn"><br>
        <br>
        Kommentar: <br/>
        <br>
        <textarea type="text" name="kommentar" id="kommentar" placeholder="Kommentar..."></textarea><br/>
        <br>
        <button id="skicka" type="submit">Skicka in</button>
        <br>
        <br>
        <p> Kommentarsfällt: </p>
        <div name="kommentarsfallt" id="kommentarsfallt">
          <p>
            <?php
    		    include	'../processphp/basilico-process.php';
    	       ?>
          </p>
        </div>
        </form>
  </body>
</html>
