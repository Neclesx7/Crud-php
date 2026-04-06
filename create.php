<div class="container">
    <h2>Criar Produto</h2>

    <form action="store.php" method="post">
    <div class="campo">
        <br>
        <label>Nome:</label>
        <input type="text" name="nome"
        placeholder="Digite o nome">
    </div>

    <div class="campo">
        <label>Descrição</label>
        <input type="text" name="descricao"
        placeholder="Insira a descrição">
    </div>

    <div class="campo">
        <label>Preço</label>
        <input type="text" name="preco"
        placeholder="Insira o valor">
    </div>

    <button type="submit">Salvar</button>
</form>




    <style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center; /* centraliza horizontal */
        align-items: center;     /* centraliza vertical */
        background-color: #649dad;
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
        background-color: #0928c2;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #717171;
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