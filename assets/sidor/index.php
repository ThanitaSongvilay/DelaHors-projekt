<html>
  <head>
    <meta charset= "utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script type"text/javascript" src="assets/js/functions.js"></script>
  </head>


  <nav>

    <?php
include 'navbar.php';
     ?>
    <!--<p> T-Photography </p>
    <div class="dropDown">
      <ul>
        <li><a href="index.php">Hem</a>
            </li>
            <li><a href="#">Kommentera</a>
              </li>
              <li><a href="#">Bilder</a>
                <ul>
                  <li><a href="#">Mina bilder</a></ul>
                  </li>
                </ul>-->
              </nav>

              <h2> Om mig: </h2>
              <img  src="assets/img/ommig.jpg" alt="Thanita"class="img1">
              <p> Hej och välkommen!
              </br>
                Thanita Songvilay är mitt namn och du är nu inne på min foto-blog.
              </br>
                I mitt forum postar jag bilder jag har tagit på min fritid. <br>Logga in för att se och för att lämna en kommentar.
              </br>Tack för att du tittade :)</p>


              <form id="form" name="form" method="POST" action="login-process.php"onsubmit="return( Check())">
                <div id="Namn">
                  <input type="text" placeholder="Användarnamn..." name="user"/>
                </div>
                <div id="Losen">
                  <input type="password" placeholder="Lösenord..." name="password"/>
                </div>
              </br>
            </br>
            <div id="Knapp">
              <button type="submit" id="inBtn">LOGGA IN</button>
            </div>
          </form>
        </div>
      </br>
      <a href="register.php" id="createAcc"> Jag vill skapa ett konto!</a></br></br></br></br>
      <div class="footer">
        <p>Copyright © 2019 Thanita Songvilay - All Rights Reserved </p>
      </div>
      </html>
