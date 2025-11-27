<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cursos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include "menu.php" ?>

    <div class="conteudo">
    <h1>Cadastro de Cursos </h1>

    <form name="Enviar" method="POST" action="curso_cadastro1.php">
        <p>Informe o nome do curso:
        <input type="text" name="curso"></p>

        <p>Informe o nome do coordenador:
        <input type="text" name="coordenador"></p>

        <input type="submit" value="Cadastrar curso" class="enviar" name="enviar">
    </form>
</div>
</body>
</html>