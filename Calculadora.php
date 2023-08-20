<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <label for="operation">Operación:</label>
        <select name="operation" id="operation">
            <option value="add">Suma</option>
            <option value="subtract">Resta</option>
            <option value="multiply">Multiplicación</option>
            <option value="divide">División</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Error: No se puede dividir por cero.</p>";
                }
                break;
        }

        echo "<h2>Resultado: $result</h2>";
    }
    ?>
</body>
</html>