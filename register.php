<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Link arxiu CSS amb els estils -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Registre</title>
</head>

<body>
    <!-- Titol i formulari de registre d'usuaris -->
    <h1 class="titol">Registre</h1>
    <form action="register.php" method="post">
        <input type="text" name="nom" id="nom" placeholder="Nom" required>
        <br><br><input type="email" name="email" id="email" placeholder="Email" required>
        <br><br><input type="password" name="pass" id="pass" placeholder="Contrasenya" required>
        <p class="re-contrasenya">Repeteix la contrasenya</p>
        <input type="password" name="pass2" id="pass2" placeholder="Contrasenya" required>
        <br><br><br><input type="submit" value="Envia">
    </form>

    <!-- Codi PHP amb la validació de la informació del formulari amb el metode post -->
    <?php
    // Arxiu amb la connexió a la base de dades
    require "conn.php";

    if (isset($_POST["nom"])) {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["pass2"];

        // Valida que pass i pass2 siguin la mateixa contrasenya
        if ($pass != $pass2) {
            echo "Les contrasenyes no coincideixen";
        } else {
            // Si pass i pass2 son la mateixa contrasenya, pass s'encripta amb un hash
            $hPass = password_hash($pass, PASSWORD_DEFAULT);

            // Sentencia INSERT per poder introduir les dades a la base de dades
            try {
                $query = "INSERT INTO users (nom, email, pass) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->execute(array($nom, $email, $hPass));
                echo "Usuari creat exitosament";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
    ?>
    <p class="pagLogin">Ja tens un compte creat? <a href="index.php">Inicia Sessió!</a></p>

</body>

</html>