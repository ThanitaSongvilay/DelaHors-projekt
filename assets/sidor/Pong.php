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
  <title>Pong</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../css/main.css">
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
<script type="text/javascript" src="../js/index.js"></script>
    </head>
    <body id="Pongbody">
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
          <br><h2>Välkommen till pong</h2>
          <br>
          <br><br><br><br><br><br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div>
          <p>Lokaliserad vid Uppsala Centralstation.<br>
            Nedan hittar ni Pongs olika menyer och kontaktuppgifter.
          </p>
        </div>
        <div class="restLänk">
          <a href="https://ponguppsala.se/brunch-3/" target="_blank">Brunchmeny</a><br>
          <br>
          <a href="https://ponguppsala.se/lunch-3/" target="_blank">Lunchmeny</a><br>
          <br>
          <a href="https://ponguppsala.se/middag/" target="_blank">Middagsmeny</a><br>
          <br>
          <a href="https://ponguppsala.se/kontakt/" target="_blank">Kontakt</a><br>
          <br>
        </div>

        <p> Hitta hit!</p>

    <div id ="map"></div>
  <script>
  function initMap()
  {
    //Map options
    var options = {
      zoom: 15,
      center: {lat: 59.86027, lng:17.64575}
    }
    //New map
    var map = new google.maps.Map(document.getElementById('map'), options);

    //Add marker
    var marker = new google.maps.Marker({
      position:{lat:59.86027, lng:17.64575},
      map:map
    });

    var infoWindow = new google.maps.InfoWindow({
      content:'<h3>Pong</h3><tt>Storgatan 27</tt>'
    });

    marker.addListener('click', function(){
      infoWindow.open(map, marker);
    });
  }
</script>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrRyzQ557WJLJOFj6qpceKnANh4Szwcjw&callback=initMap">
  </script>
<div>
    <?php
    include	'../processphp/pong-process.php';
    ?>
  </div>
        <p><b>Lämna gärna en kommentar här om vad du tycker om Pong!</b><p>

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
        		    include	'../processphp/pong-process.php';
        	       ?>
              </p>
            </div>
            </form>
    </body>
</html>
