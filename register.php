<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
</head>

<body>
    <form action="register.php" method="post">
        <input type="text" name="nom" id="nom" placeholder="Nom" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="pass" id="pass" placeholder="Contrasenya" required>
        <input type="password" name="pass2" id="pass2" placeholder="Contrasenya" required>
        <input type="submit" value="Envia">
    </form>

    <?php

    require "conn.php";

    if (isset($_POST["nom"])) {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["pass2"];

        if ($pass != $pass2) {
            echo "Les contrasenyes no coincideixen";
        } else {
            $hPass = password_hash($pass, PASSWORD_DEFAULT);

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
    <p>Ja tens un compte creat? <a href="index.php">Inicia Sessió!</a></p>

</body>

</html>