<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício de PHP</h1>

    <form action="" method="post">

        <p>
            Digite o nome do cliente <br>
            <input type="text" name="cliente">
        </p>

        <p>
            Escolha o sexo do cliente <br>
            <input type="radio" name="sexo" value="F">Feminino <br>
            <input type="radio" name="sexo" value="M">Masculino <br>
        </p>

        <p>
            Digite o valor da compra <br>
            <input type="text" name="valorcompra">
        </p>

        <p>
            <input type="submit" value="calcular">
        </p>
    </form>

    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['calcular'])) {
                $nome = $_POST['nome'];
                $sexo = $_POST['sexo'];
                $valorcompra = $_POST['valorcompra'];
                
                if ($sexo = "F"){
                    $desconto = $valorcompra * 20 / 100;  
                };

                if ($sexo = "M"){
                    $desconto = $valorcompra * 5 / 100;
                };

                $valorfinal = $valorcompra - $desconto;

                echo "Nome:$nome <br>Sexo: $sexo <br>Valor da compra: $valorcompra <br>Desconto: $desconto <br>Valor final: $valorfinal";

            }
        }
    ?>


</body>
</html>