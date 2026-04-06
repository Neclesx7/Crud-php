<?php
include "db.php";

$nome = $_POST["nome"] ?? "";
$descricao = $_POST["descricao"] ?? "";
$preco = $_POST["preco"] ?? "";

$sql = "INSERT INTO crud (nome, descricao, preco)
        VALUES ('$nome','$descricao','$preco')";

mysqli_query($conn, $sql);

header("Location: index.php");
?>