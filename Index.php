<!DOCTYPE html>
  <html>
  <?php
    session_start();
    if(isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn']==true)){
  	}
  	else{
  		$_SESSION['Value']=Null;

  	}

  ?>
  <head>
  <meta charset= "utf-8">
  <title> Hem | Restaurank </title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300&display=swap" rel="stylesheet">
  <script type="text/javascript" src="assets/js/index.js"></script>
  </head>

<body class="fSidan">
    <nav>
      <div class="dropDown">
        <h>RestauRank </h>
        <ul>
        <li><a href="index.php">Hem</a>
        </ul>
        <ul>
        <li><a href="#">Restauranger</a>
        <ul>
        <li><a href="assets/sidor/italienskt.php">Italienskt</a>
        <li><a href="assets/sidor/asiatiskt.php">Asiatiskt</a>
        </ul>
      </div><br>
      <div class= "logInContainer">
        <form id="form" name="form" method="POST" action="assets/processphp/logIn.php"onsubmit= "return (kolla())" >
          <div>
            <input type="text" placeholder="Användarnamn" name="Namn" id="Namn"/>
          </div>
          <div>
            <input type="password" placeholder="Lösenord" name="password" id="Losen"/>
          </div>
          <div id="Knapp">
            <button type="submit">Logga in</button>
            </div>
            <div id="konto">
            <tt> Jag vill skapa ett konto! <tt><br>
              <input class="skapaKnapp" onclick="window.location.href='registrera.php'" type="button" value="Skapa Konto"/>
            </div>
            <!--<a href="registrera.html"> Registrera dig här</a></h5>-->
        </form>
      </div>
      </nav>
    <!--<br>
      <div class="admin">
        <p> Logga in som administratör *vi ska inte ha den här* <a href="admin.html">Logga in</a></p>
        <br>
        <br>
        <br>
      </div>
          <div id="searchbar">
              <form id="ruta" name="sökForm" method="post" action = "assets/processphp/search-process.php" onsubmit="return kollaSök()">
                <br>
                <input type="text" name="sökruta" id="sökruta" placeholder="Sök...">
                <button id="sökknapp" type="submit">Sök</button>
              </form>
            </div>-->
    <br>
      <div class="omOss">
        <h1> Om oss </h1>
          <p> Hej och välkommen till RestauRank!
            <br> Här kan du som användare logga in och kommentera vad ni tycker om olika restauranger.<br>
            <br>Som fyra studenter vet vi hur tråkigt det är att slösa pengar på dåliga mat-upplevelser när man väl bestämmer
            sig att dra pengar från studentkontot. Därför har vi skapat detta forum som tillåter dig välja restaurang eller eller tipsa andra om
            bra restauranger!
          </p>
      </div>

    <div>
        <form id="ruta" name="sökForm" method="post" action ="assets/processphp/search-process.php" onsubmit="return kollaSök()">
          <div id="sökruta">
          <input type="text" name="sökruta" placeholder="Sök...">
        </div>
          <div id="">
          <button id="sökknapp" type="submit">Sök</button>
          <div>
        </form>
      </div>

      <div>
        <?php
        include 'search-process.php';
        ?>
      </div>

</body>
</html>
