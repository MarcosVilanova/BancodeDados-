
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Banco de Gastos</title>
    <style>
#titulo{
    font-family: sans-serif;
    color: #D3D3D3;
    margin-left: 7%
}
#subtitulo{
    font-family: sans-serif;
    margin-left: 7%
}
body{
    background-color: #2C2C2C;
    font-size: 1em;
    color: #D3D3D3;
    margin-left: 36%;
    margin-top: 2%;  
}
input, textarea, button {
    border-radius: 5px;
}
.campo{
    margin-bottom: 1em;
}
.campo label{
    margin-bottom: 0.2em;
    color: #D3D3D3;
    display:block;
}
.campo input[type="text"],input[type="number"], .campo textarea {
    padding: 0.2em;
    display:block;
    border: 1px solid #D3D3D3;
}
fieldset .campo .grupo {
    float: left;
    margin-left: 1em;
}
*{
    margin: 0;
    padding:0;
}     
fieldset{
    border:0;
}
button {
    font-size: 1em;
    background-color: #FFA500;
    border: 0;
    position: absolute;
    padding: 10px;
}
</style>
</head>
<body>
    <div>
        <h1 id="titulo">Banco de Gastos</h1>
        <p  id="subtitulo">Cadastro de Gastos Pessoais em um Banco de Dados</p>
    </div>
 <div>
    <form action="listagem.php" class="w3-container" method='post'>
       <fieldset class="grupo">

    <div class="campo" >
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor">
    </div>

    <div class="campo">
        <label for="data">Data</label>
        <input type="date" name="data" id="data">
    </div>

    <div class="campo">
        <label for="descricao"> Descrição </label>
        <textarea rows="3" style="width:26em" id="descricao" name="descricao"></textarea>
    </div>

        <button type="submit">Cadastrar</button>

        </fieldset>
    </form>
</div>
</body>
</html>