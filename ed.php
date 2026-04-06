<?php
include "db.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM crud WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "ID não fornecido.";
    exit;
}
?>



<div class="container">
    <h2>Editar Produto</h2>

    <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <div class="campo">
        <br>
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $row["nome"]; ?>">
    </div>

    <div class="campo">
        <label>Descrição</label>
        <input type="text" name="descricao" value="<?php echo $row["descricao"]; ?>">
    </div>

    <div class="campo">
        <label>Preço</label>
        <input type="text" name="preco" value="<?php echo $row["preco"]; ?>">
    </div>

    <button type="submit">Atualizar</button>
</form>



    <style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center; /* centraliza horizontal */
        align-items: center;     /* centraliza vertical */
        background-color: #04995ba6;
        font-family: Arial, sans-serif;
    }

    .container {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        width: 300px;
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button {
        margin-top: 15px;
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #04995b;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #797979;
    }


    form {
    text-align: left;
}

.campo {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}
</style>