<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PHP PDO CRUD</title>
</head>

<body>
    <h1>PHP PDO CRUD</h1>

    <form action="create.php" method="post">

        <label for="firstname">Voornaam:</label><br>
        <input type="text" name="firstname" id="firstname"><br>
        <br>
        <label for="infix">Tussenvoegsel:</label><br>
        <input type="text" name="infix" id="infix"><br>
        <br>
        <label for="lastname">Achternaam:</label><br>
        <input type="text" name="lastname" id="lastname"><br>
        <br>
        <label for="haircolor">Haarkleur:</label><br>
        <input type="text" name="haircolor" id="haircolor"><br>
        <br>

        <label for="telefoonnummer">telefoonnummer</label><br>
        <input type="text" name="telefoonnummer" id="telefoonnummer"><br>
        <br>

        <label for="telefoonnummer">straatnaam</label><br>
        <input type="text" name="straatnaam" id="straatnaam"><br>
        <br>

        <label for="telefoonnummer">huisnummer</label><br>
        <input type="text" name="huisnummer" id="huisnummer"><br>
        <br>

        <label for="telefoonnummer">woonplaats</label><br>
        <input type="text" name="woonplaats" id="woonplaats"><br>
        <br>

        <label for="telefoonnummer">postcode</label><br>
        <input type="text" name="postcode" id="postcode"><br>
        <br>

        <label for="telefoonnummer">landnaam</label><br>
        <input type="text" name="landnaam" id="landnaam"><br>
        <input type="submit" value="Verstuur!">

    </form>



</body>

</html>