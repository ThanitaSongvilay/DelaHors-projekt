<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
        <script type="text/javascript" src="assets/js/index.js"></script> <!-- koppla till js-->
    </head>
    <body class="reg">
      <nav>
        <h>RestauRank</h>
        <div class="dropDown">
          <ul>
            <li><a href="Index.php">Hem</a>
          </ul>
          <ul>
            <li><a href="#">Restauranger</a>
          <ul>
            <li><a href="assets/sidor/italienskt.php">Italienskt</a>
            <li><a href="assets/sidor/asiatiskt.php">Asiatiskt</a>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <div id="textAdmin">
        <ff> Här kan du registrera dig för att se användares kommentarer om restaurangerna samt själv kunna kommentera</ff>
      </div>
      <br>
      <br>
      <div>
        <form name="RegisForm" action="assets/processphp/reg.php" method="post" onsubmit="return validateForm()">
            <UserName>Användarnamn:</UserName>
            <br>
            <input type="text" name="regUname" id="regUname" placeholder="Namn" required>
            <br>
            <br>
            <UserEmail>Email:</UserEmail>
            <br>
            <input type="text" name="regUemail" id="regUemail" placeholder="Email" required>
            <br>
            <br>
            <UserPassword>Lösenord:</UserPassword>
            <br>
            <input type="password" name="regUpassword" id="regUpassword" placeholder="Lösenord" required>
            <br>
            <br>
            <button id="regButton" type="sumbit" class="regButton">Register</button>
        </form>
        </div>
        <div>
          <br>
          <h4>Har du redan ett konto?</h4>
          <a href="Index.html">Logga in här</a>
        </div>
    </body>
</html>
