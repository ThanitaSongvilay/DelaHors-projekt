<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn']==true)){
	}
	else{
		$_SESSION['Value']=Null;

	}
 ?>
<hmtl>
    <head>
        <title>Il Forno Italiano</title>
        <link rel="stylesheet" href="../css/main.css">
      <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
        <script type="text/javascript" src="../js/index.js"></script> <!-- koppla till js-->
        <meta charset="UTF-8">
    </head>
    <body id="IlfornoBody">
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
        <div>
            <h2>Välkommen till Il forno Italiano</h2>
        </div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div>
            <p>På Il Forno Italiano kan du hitta italienska rätter som bland annat vedugnsgräddade pizzor, färsk pasta och antipasti.
						<br>Utöver detta har restaurangen även ett sortiment av vin.
						<br>Nedan hittar ni Il Forno Italianos meny.</p>
        </div>

        <br>
        <div class="restLänk">
          <a href="https://ilfornoitaliano.se/uppsala/wp-content/uploads/2019/05/SommarMeny100Final.pdf" target="_blank">Meny</a>
        </div>
        <div>
            <h4><i>Hitta hit!</i></h4>
        </div>

        <!--Kartan-->
        <div id="map"></div>
        <script>
            function initMap(){
                var options = {
                    zoom : 15,
                    center : {lat: 59.8578 , lng: 17.6281 }
                }

                var map = new google.maps.Map(document.getElementById('map'), options);

                var marker = new google.maps.Marker({
                    position: {lat: 59.8578, lng: 17.6281},
                    map: map
                });

                var infoWindow = new google.maps.InfoWindow({
                  content:'<h1>Il Forno Italiano</h1><tt>S:t Olofsgatan 8</tt>'
                });

                marker.addListener('click', function(){
                  infoWindow.open(map, marker);
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrRyzQ557WJLJOFj6qpceKnANh4Szwcjw&callback=initMap"
        async defer>
        </script>

        <!--Form så att användare ska kunna kommentera-->
        <p>Lämna gärna en kommentar här om vad du tycker om Il Forno Italiano!<p>
          <br>
            <form class="kommentarForm" name="kommentarForm" method="post" action="../processphp/insert-Ilforno.php" onsubmit="return kollaKommentar()">
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
        		    include	'../processphp/Ilforno-process.php';
        	       ?>
              </p>
            </div>
            </form>
    </body>
</hmtl>
