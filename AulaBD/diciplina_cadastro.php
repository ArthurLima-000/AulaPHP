<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Diciplina</h1>
    <form name="Enviar" method="POST" action="curso_cadastro.php">
    
        <p>Informe o nome da Diciplina</p>
        <input type="text" name="coordenador"><br>

        <p>Escolha o curso:</p> 
            <select name="tipoCurso">
                <option name="tipoCurso" value="Informatica">Informatica</option>
                <option name="tipoCurso" value="Quimica">Quimica</option>
            <br>

        <p><input type="submit" name="Enviar" value="Cadastrar Curso"></p>
    </form>

</body>
</html>