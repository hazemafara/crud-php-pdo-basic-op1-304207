<?php


require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new Pdo($dsn, $dbUser, $dbPass);

    if ($pdo) {
        echo " ";
    } else {
        echo "Interne server-error";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // var_dump($_POST);
    $sql = "UPDATE Persoon
        SET   Voornaam = :firstname
            ,Tussencoegsel = :infix
            ,Achternaam = :lastname
            ,Haarkleur = :haircolor
            ,telefoonnummer = :telefoonnummer
            ,straatnaam = :straatnaam
            ,huisnummer = :huisnummer
            ,woonplaats = :woonplaats
            ,postcode = :postcode
            ,landnaam = :landnaam

    WHERE Id = :id";

    $statement = $pdo->prepare($sql);

    $statement->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindValue(':infix', $_POST['infix'], PDO::PARAM_STR);
    $statement->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindValue(':haircolor', $_POST['haircolour'], PDO::PARAM_STR);
    $statement->bindValue(':telefoonnummer', $_POST['telefoonnummer'], PDO::PARAM_STR);
    $statement->bindValue(':straatnaam', $_POST['straatnaam'], PDO::PARAM_STR);
    $statement->bindValue(':huisnummer', $_POST['huisnummer'], PDO::PARAM_STR);
    $statement->bindValue(':woonplaats', $_POST['woonplaats'], PDO::PARAM_STR);
    $statement->bindValue(':postcode', $_POST['postcode'], PDO::PARAM_STR);
    $statement->bindValue(':landnaam', $_POST['landnaam'], PDO::PARAM_STR);
    $statement->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
    $statement->execute();

    echo "Het updaten is gelukt";
    header('Refresh:3; url=read.php');

    //Maak een sql-query voor de database

    exit();
}

$sql = "SELECT * FROM Persoon WHERE Id = :Id";

// Maak de sql-query klaar om de $_GET['Id'] waade te kopplen aan de placeholder :Id
$statement = $pdo->prepare($sql);
// Koppel de waarde $_GET['Id'] aan de placeholder :Id
$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);



//Voer de query uit

$statement->execute();
//Haal het resultaat op met fetch en stop het object in de variabal $result
$result = $statement->fetch(PDO::FETCH_OBJ);
//var_dump($result);  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PHP PDO CRUD</title>
</head>

<body>
    <H1>PHP PDO CRUD</H1>

    <form action="update.php" method="post">

        <label for="firstname">Voornaam</label><br>
        <input type="text" name="firstname" id="firstname" value="<?= $result->voornaam; ?>"><br>
        <br>

        <label for="infix">Tussenvoegsel</label><br>
        <input type="text" name="infix" id="infix" value="<?= $result->tussencoegsel; ?>"><br>
        <br>

        <label for="lastname">Achternaam</><br>
            <input type="text" name="lastname" id="lastname" value="<?= $result->achternaam; ?>"><br>
            <br>
            <label for="haircolour">Haarkleur <br>
                <input type="text" name="haircolour" id="haircolour" value="<?= $result->haarkleur; ?>"><br>
                <br>

                <label for="telefoonnummer">telefoonnummer <br>
                    <input type="text" name="telefoonnummer" id="telefoonnummer" value="<?= $result->telefoonnummer; ?>"><br>

                    <label for="straatnaam">straatnaam</label><br>
                    <input type="text" name="straatnaam" id="straatnaam" value="<?= $result->straatnaam; ?>"><br>
                    <br>

                    <label for="huisnummer">Tussenvoegsel</label><br>
                    <input type="text" name="huisnummer" id="huisnummer" value="<?= $result->huisnummer; ?>"><br>
                    <br>

                    <label for="lastname">woonplaats</><br>
                        <input type="text" name="woonplaats" id="woonplaats" value="<?= $result->woonplaats; ?>"><br>
                        <br>
                        <label for="haircolour">postcode <br>
                            <input type="text" name="postcode" id="postcode" value="<?= $result->postcode; ?>"><br>
                            <br>

                            <label for="telefoonnummer">landnaam<br>
                                <input type="text" name="landnaam" id="landnaam" value="<?= $result->landnaam; ?>"><br>
                                <input type="hidden" name="id" value="<?php echo $_GET["Id"]; ?>">

                                <input type="submit" value="verstuur!">
    </form>
</body>

</html>