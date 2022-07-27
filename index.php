<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>cadastrar</h3>
    <form method="POST" action="processa.php">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome" id="nome"><br><br>
    
        <label>email:</label>
        <input type="text" name="email" placeholder="email" id="email"><br><br>
            <h3>Endereço:</h3><br><br>
        <label>logradouro:</label>
        <input type="text" name="logradouro" placeholder="logradouro" id="logradouro"><br><br>
    
        <label>numero:</label>
        <input type="text" name="numero" placeholder="numero" id="numero"><br><br>
    
        <input type="submit" value="Cadastrar" name="CadUsuario">
    </form>
    
</body>
</html>