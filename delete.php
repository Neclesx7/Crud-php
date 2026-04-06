<?php
    include "db.php";

    $sql = "SELECT * FROM crud";
    
    $resultado = mysqli_query($conn, $sql);
?>

<link rel="stylesheet" href="delete.css">

<h2>Deletar Produtos</h2>



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

            <a href="del.php?id=<?php echo $row ["id"]; ?>">Excluir</a>
        </td>
    </tr>
    
    <?php } ?>
</table>
<br>
