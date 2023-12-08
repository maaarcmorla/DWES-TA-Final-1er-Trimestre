<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES 1er Trimestre</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="nom" id="nom" placeholder="Nom" required>
        <input type="password" name="pass" id="pass" placeholder="Contrasenya" required>
        <input type="submit" name="envia" value="Envia">
    </form>

    <?php

    require "conn.php";

    if(isset($_POST["envia"])) {
        $nom = $_POST["nom"];
        $pass = $_POST["pass"];
        
        $query = "SELECT * FROM users WHERE nom = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $nom);
        $stmt->execute();
        $result = $stmt->fetch();

        if(password_verify($pass, $result["pass"])) {
            echo "Accés permès";
            $_SESSION['nombre'] = $nom;
            header("location:perfil.php");
        } else {
            echo "Accés denegat";
        }
    }
    ?>

    <p>No tens un compte creat? <a href="register.php">Registret!</a></p>

</body>

</html>