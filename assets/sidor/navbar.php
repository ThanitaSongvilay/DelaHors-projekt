<?php
  echo
  '
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
        <input type="text" placeholder="Lösenord" name="password" id="Losen"/>
      </div>
      <div id="Knapp">
        <button type="submit">Logga in</button>
        <h4> Jag vill skapa ett konto! <br>  <a href="../../registrera.html"> Registrera dig här</a></h4>
      </div>
      </nav>';

      ?>
