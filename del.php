<?php 
    include "db.php";

    $id = $_GET["id"];

    $sql = "DELETE FROM crud WHERE id=$id";

    mysqli_query($conn, $sql);

    header("Location: index.php");
?>
<h2>O usuario foi EXCLUIDO!</h2>
<a href="index.php">Voltar</a>