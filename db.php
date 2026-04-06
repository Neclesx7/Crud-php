<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "prova_php";

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("Erro de conexão");
    }
?>