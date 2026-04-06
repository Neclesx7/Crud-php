<?php
    include "db.php";

    $sql = "SELECT * FROM crud";
    
    $resultado = mysqli_query($conn, $sql);
?>

<h2>Editar Produtos</h2>

<link rel="stylesheet" href="edit.css">

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Idade</th>
        <th>Ações</th>
    </tr>
    
    <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
    <tr>
        <td> <?php echo $row["id"]?> </td>
        <td> <?php echo $row["nome"]?> </td>
        <td> <?php echo $row["descricao"]?> </td>
        <td> <?php echo $row["preco"]?> </td>
        <td> 

           <a href="ed.php?id=<?php echo $row ["id"]; ?>">Editar</a>
        </td>
    </tr>
    
    <?php } ?>
</table>
<br>
