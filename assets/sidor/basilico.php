<!DOCTYPE html>
<html>
  <head>
    <title>Basilico</title> <!--det här syns i webbläsartabben-->
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script type="text/javascript" src="../js/index.js"></script> <!-- koppla till js-->
    <meta charset="UTF-8">
  </head>
  <body>
    <nav>
      <p>RestauRank </p>
      <div class="dropDown">
        <ul>
        <li><a href="../../Index.html">Hem</a>
        </ul>
        <ul>
        <li><a href="#">Restauranger</a>
        <ul>
        <li><a href="italienskt.html">Italienskt</a>
        <li><a href="asiatiskt.html">Asiatiskt</a>
        </ul>
      </div>
      <br>
      <div id= "logInContainer">
        <form id="form" name="form" method="POST" action="assets/processphp/logIn.html"onsubmit= "return (kolla())">
          <div>
            <input type="text" placeholder="Användarnamn" name="Namn" id="Namn"/>
          </div>
          <div>
            <input type="password" placeholder="Lösenord" name="password" id="Losen"/>
          </div>
          <div id="Knapp">
            <button type="submit">Logga in</button>
            <h5> Jag vill skapa ett konto! <br> <a href="../../registrera.html"> Registrera dig här</a></h5>
          </div>
        </form>
        <div>
          <h1>Basilico</h1>
        </div>

        <div id="img">
          <img src="../img/basilico.jpg">
        </div>
        <br>
        <div>
          <h3><i>Lokaliserad vid Linnéträdgården.<br>
            Nedan hittar ni deras meny och kontaktuppgifter till restaurangen.
          </i></h3>
        </div>
        <div class="restLänk">
          <a href="http://www.basilico.se/meny.html">Meny</a><br>
          <a href="http://www.basilico.se/kontakt.html">Kontakt</a>
        </div>
        <div>
          <h4><i>Hitta hit!</i></h4>
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

    <div>
      <?php
		include	'../processphp/basilico-process.php';
	  ?>
    </div>



    <!--Form så att användare ska kunna kommentera-->
    <h2><b>Lämna gärna en kommentar här om vad du tycker om Il Forno Italiano!</b><h2>
        <form method="POST" action="../processphp/insert-basilico.php" onsubmit"">
            <br>
            <input type="text" name="användarNamn" id="användarNamn">
            <br>
            <p>Namn:</p>
            <br>

            <input type="text" name="kommentar" id="kommentar">
            <br>
            <p>Kommentar</p>
            <br>

            <button id="skicka" type="submit" class="skicka">Skicka in</button>
            <br>
        </form>
  </body>
</html>