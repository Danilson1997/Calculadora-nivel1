<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="./style.css" rel="stylesheet">
</head>

<body class="gradiente">
    <h1>Calculadora 4x1</h1>
    <div class="calculadora">
        <form method="post">
            <label for="n1"><b> 1º Número: </b></label><br>
            <input type="text" id="n1" name="n1" required><br><br>

            <label for="n2"><b> 2º Número: </b></label><br>
            <input type="text" id="n2" name="n2" required><br><br>

            <input class="btn btn-dark" type="submit" value="Calcular">
        </form>
        <?php
        if (isset($_POST['n1']) && isset($_POST['n2'])) {

            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            $som = $n1 + $n2;
            $div = $n1 / $n2;
            $sub = $n1 - $n2;
            $mul = $n1 * $n2;

            echo "<h3>1º Valor " . $n1 . "</h3>";
            echo "<h3>2º Valor " . $n2 . "</h3>";

            echo "<h3>Valor somado " . $som . "</h3>";
            echo "<h3>Valor dividido " . $div . "</h3>";
            echo "<h3>Valor Subtraido " . $sub . "</h3>";
            echo "<h3>Valor multiplicado " . $mul . "</h3>";
        }
        ?>
    </div>
</body>

</html>