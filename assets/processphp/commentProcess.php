<!DOCTYPE html>
<?php
    $namnet = "";
    if(isset($_GET["namn"])){
        $namnet = $_GET['namn'];

        //vi lägger in det i databasen
        addToDatabase($namnet);
    }
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Tack för ditt namn - du skrev <?= $namnet; ?></h1>

    </body>
</html>

<?php
function addToDatabase($namn){
    $dbServer = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "testdatabas";

    // skapa anslutning
    $conn = new mysqli($dbServer, $username, $password, $dbname);
    // kolla anslutningen
    if ($conn->connect_error) {
        die("något gick fel: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Person (firstname) VALUES ($namn)";

    if ($conn->query($sql) === TRUE) {
        echo "Personen inlagd";
    } else {
        echo "Något gick fel i sqlanropet: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
