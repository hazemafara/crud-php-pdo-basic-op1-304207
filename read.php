<?php

/**
 * Maak een verbinding met de mysql-server en database
 */
require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "De verbinding is gelukt";
    } else {
        echo "Interne server-error";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

/**
 * Maak een select query die alle records uit de tabel Persoon haalt
 */
$sql = "SELECT * FROM Persoon";

// Maak de sql-query gereed om te worden uitgevoerd op de database
$statement = $pdo->prepare($sql);

// Voer de sql-query uit op de database
$statement->execute();

// Zet het resultaat in een array met daarin de objecten (records uit de tabel Persoon)
$result = $statement->fetchAll(PDO::FETCH_OBJ);

// Even checken wat we terugkrijgen
//    var_dump($result);

$rows = "";
foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->id</td>
                <td>$info->voornaam</td>
                <td>$info->tussencoegsel</td>
                <td>$info->achternaam</td>
                <td>$info->haarkleur</td>
                <td>$info->telefoonnummer</td>
                <td>$info->straatnaam</td>
                <td>$info->huisnummer</td>
                <td>$info->woonplaats</td>
                <td>$info->postcode</td>
                <td>$info->landnaam</td>
                <td>
                    <a href='delete.php?Id=$info->id'>
                        <img src='img/b_drop.png' alt='kruis'>
                    </a>
                </td>
                <td>
                <a href='update.php?Id=$info->id'>
                    <img src='img/b_edit.png' alt='potlood'>
                </td>
              </tr>";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Persoonsgegevens</h3>

    <a href="index.php">
        <input type="button" value="Nieuw record">
    </a>
    <br>
    <br>
    <table border='1'>
        <thead>
            <th>Id</th>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Haarkleur</th>
            <th>telefoonnummer</th>
            <th>straatnaam</th>
            <th>huisnummer</th>
            <th>woonplaats</th>
            <th>postcode</th>
            <th>landnaam</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?= $rows; ?>
        </tbody>
    </table>
</body>

</html>