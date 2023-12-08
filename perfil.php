<?php require "conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut</title>
</head>

<body>
    <h1>Benvingut, <?php echo $_SESSION['nombre']; ?>!</h1>

    <a href="logout.php">Sortir de la sessió</a>
</body>

</html>