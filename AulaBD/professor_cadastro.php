<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professores</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include "menu.php" ?>
    <div class="conteudo">
    <h3>Cadastro de Professores</h3>
    <form action="#" method="POST">
        <p>
            Digite o nome <br>
            <input type="text" name="nome">
        </p>

        <p>
            Digite a área de formação <br>
            <input type="text" name="formacao">
        </p>

        <p>
            Digite a graduação <br>
            <input type="text" name="graduacao">
        </p>

        <p>
            <input type="submit" class="enviar" name="enviar" value="Cadastrar">
        </p>
    </form>
</div>
</body>
</html>