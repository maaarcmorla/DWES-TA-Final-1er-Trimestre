<!-- Arxiu amb la connexió a la base de dades -->
<?php require "conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Link arxiu CSS amb els estils -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Benvingut</title>
</head>

<body>
    <!-- Codi per determinar l'hora del dia -->
    <?php
    $hoy = getdate();
    $hora = $hoy['hours'];

        // Si l'hora d'avui es igual o major a 6 i menor o igual a 12 imprimira Bon dia
    if ($hora >= 6 && $hora <= 12) {
        $bDias = "Bon dia, ";
        // Si l'hora d'avui es igual o major a 13 i menor o igual a 18 imprimira Bones tardes
    } else if ($hora >= 13 && $hora <= 18) {
        $bTardes = "Bones tardes, ";
        // Si l'hora d'avui es major a 18 i menor a 6 imprimira Bona Nit
    } else {
        $bNit = "Bona nit, ";
    }


    ?>

    <h1 class="titol"><?php if (isset($bDias)) {
                            echo $bDias;
                        } else if (isset($bTardes)) {
                            echo $bTardes;
                        } else {
                            echo $bNit;
                        }
                        // Variable de sessió amb el nom de l'usuari logat en aquest moment
                        echo $_SESSION['nombre']; ?>!</h1>
                        
    <!-- Enllaç per poder redireccionar al arxiu logout per poder deslogar l'usuari -->
    <div class="logout">
        <a href="logout.php">Sortir de la sessió</a>
    </div>
</body>

</html>