<?php
// Arxiu per poder fer Log Out tancant les sessions de l'usuari
session_start();

unset($_SESSION['nombre']);

header("location:index.php");
