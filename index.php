<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES 1er Trimestre</title>
</head>

<body>
    <form action="perfil.php" method="post">
        <input type="text" name="nom" id="nom" placeholder="Nom" required>
        <input type="password" name="pass" id="pass" placeholder="Contrasenya" required>
        <input type="submit" value="Envia">
    </form>

    <?php

    require "conn.php";

    if(isset($_POST["nom"])) {
        $nom = $_POST["nom"];
        $pass = $_POST["pass"];

        $sql = "SELECT * FROM users WHERE nom = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $nom);
        $stmt->execute();
        $result = $stmt->fetch();

        if(password_verify($pass, $result["pass"])) {
            echo "Accés permès";
            header("Location: perfil.php");
        } else {
            echo "Accés denegat";
        }

    }



    ?>

    <p>No tens un compte creat? <a href="register.php">Registret!</a></p>

</body>

</html>