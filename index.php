<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Link arxiu CSS amb els estils -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">

    <title>DWES 1er Trimestre</title>
</head>

<body>
    <!-- Titol i formulari d'inici de sessió -->
    <h1 class="titol">Inicia Sessió</h1>
    <form action="" method="post">
        <input type="text" name="nom" id="nom" placeholder="Nom" required>
        <br><br><input type="password" name="pass" id="pass" placeholder="Contrasenya" required>
        <br><br><br><input type="submit" name="envia" value="Envia">
    </form>
    <!-- Codi PHP amb la validació de la informació del formulari amb el metode post -->
    <?php
    // Arxiu amb la connexió a la base de dades
    require "conn.php";

    if (isset($_POST["envia"])) {
        $nom = $_POST["nom"];
        $pass = $_POST["pass"];
        
        // Sentencia SELECT per treure les dades de la base de dades
        $query = "SELECT * FROM users WHERE nom = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $nom);
        $stmt->execute();
        $result = $stmt->fetch();

        // Verficació de la contrasenya
        if (password_verify($pass, $result["pass"])) {
            echo "Accés permès";
            $_SESSION['nombre'] = $nom;
            header("location:perfil.php");
        } else {
            echo "Accés denegat";
        }
    }
    ?>

    <p class="pagRegistre">No tens un compte creat? <a href="register.php">Registret!</a></p>

</body>

</html>