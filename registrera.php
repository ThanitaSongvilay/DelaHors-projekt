<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <script type="text/javascript" src="assets/js/index.js"></script> <!-- koppla till js-->
    </head>
    <body>
      <nav>
        <p>RestauRank - Registrering</p>
        <div class="dropDown">
          <ul>
          <li><a href="index.html">Hem</a>
          </ul>
          <ul>
          <li><a href="#">Restauranger</a>
          <ul>
          <li><a href="assets/sidor/italienskt.php">Italienskt</a>
          <li><a href="assets/sidor/asiatiskt.php">Asiatiskt</a>
          </ul>
        </div>
      </nav>
      <div>
        <form name="RegisForm" action="assets/processphp/reg.php" method="post" onsubmit="return validateForm()">
            <UserName>Användarnamn:</UserName>
            <br>
            <input type="text" name="regUname" id="regUname" required>
            <br>
            <br>
            <UserEmail>Email:</UserEmail>
            <br>
            <input type="text" name="regUemail" id="regUemail" required>
            <br>
            <br>
            <UserPassword>Password:</UserPassword>
            <br>
            <input type="password" name="regUpassword" id="regUpassword" required>
            <br>
            <br>
            <button id="regButton" type="sumbit" class="regButton">Register</button>
        </form>
        </div>
        <div>
          <hr>
          <h4>Have an account?</h4>
          <a href="Login.html">Logga in här</a>
        </div>
    </body>
</html>
