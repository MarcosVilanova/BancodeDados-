<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Cadastro - MYSQLI</title>
 <style>
   body {
    background-color: #2C2C2C;
    font-size: 1em;
    color: #D3D3D3;
    margin: 0;
    margin-top: 2%;  
    padding: 20px;
    
}

table {
    width: 80%;
    border-collapse: collapse;
  
    font-size: 1em;
    background-color: rgba(0, 0, 0, 0.3); 
    
}

th, td {
    padding: 12px;
    border-bottom: 1px solid #dddddd; /* Borda das células */
}

th {
    background-color: rgba(0, 0, 0, 0.4); 
    color: #F3C300;
    font-weight: bold;
    font-size: 1.1em;
}

tr:nth-child(even) {
    background-color: rgba(0, 0, 0, 0.4); /* Cor de fundo das linhas pares */
}

 </style>
</head>
<body>

<div>
    <h1>Banco de Gastos</h1>
    <p class="w3-text-yellow">Valor Salvo!</p>
</div>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "bdgastos";       
    $conexao = new mysqli($servername, $username, $password, $dbname);




    $sql = "INSERT INTO gastos (data, descricao, valor) 
            VALUES ('".$_POST['data']."', '".$_POST['descricao']."', '".$_POST['valor']."')";

if (!$conexao->query($sql)) {
    echo "<p class='w3-text-red'>Erro ao salvar: " . $conexao->error . "</p>";
}

   
    $sql = "SELECT * FROM gastos";
    $result = $conexao->query($sql);
?>

<div class="w3-center w3-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['valor'] . "</td>";
                echo "<td>" . $user_data['data'] . "</td>";
                echo "<td>" . $user_data['descricao'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
    $conexao->close();
?>
</body>
</html>
