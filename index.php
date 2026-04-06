<?php
    include "db.php";

    $sql = "SELECT * FROM crud";
    
    $resultado = mysqli_query($conn, $sql);
?>

  <link rel="stylesheet" href="index.css">

<h2>Lista de Produtos</h2>
<div class="table">
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
    </tr>
    
    <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
    <tr>
        <td> <?php echo $row["id"]?> </td>
        <td> <?php echo $row["nome"]?> </td>
        <td> <?php echo $row["descricao"]?> </td>
        <td> <?php echo $row["preco"]?> </td>

    </tr>
    <?php } ?>
</table>
<div class="table">
<br>
  <div class="menu">
<a href="create.php">Criar novo produto</a>
<br>
<br>
<a href="edit.php">Editar Produto</a>
<br>
<br>
<a href="delete.php">Deletar Produto</a>
<br>
<br>
<a href="index.html">🠔 Voltar</a>
</div>