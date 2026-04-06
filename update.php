<?php
include "db.php";

$id = $_POST["id"] ?? null;
$nome = $_POST["nome"] ?? "";
$descricao = $_POST["descricao"] ?? "";
$preco = $_POST["preco"] ?? "";

if (!$id) {
    die("ID inválido");
}

$stmt = $conn->prepare("UPDATE crud SET nome=?, descricao=?, preco=? WHERE id=?");
$stmt->bind_param("ssdi", $nome, $descricao, $preco, $id);
$stmt->execute();

header("Location: index.php");
exit;
?>