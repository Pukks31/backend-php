<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Pesos Colombianos</title>
</head>
<body>
    <h1>Conversor de Pesos Colombianos</h1>

    <form method="post" action="">
        <label for="amount">Monto en Pesos Colombianos:</label>
        <input type="number" name="amount" id="amount" required>
        <br>

        <label for="currency">Selecciona la moneda de conversión:</label>
        <select name="currency" id="currency" required>
            <option value="usd">Dólares (USD)</option>
            <option value="eur">Euros (EUR)</option>
            <option value="inr">Rupia India (INR)</option>
        </select>
        <br>

        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $amount = $_POST["amount"];
        $currency = $_POST["currency"];

        $exchange_rates = [
            "usd" => 0.00024,  
            "eur" => 0.00022,   
            "inr" => 0.020,    
        ];

        if (array_key_exists($currency, $exchange_rates)) {
            $converted_amount = $amount * $exchange_rates[$currency];
            echo "<p>$amount COP equivale a aproximadamente $converted_amount $currency.</p>";
        } else {
            echo "<p>Moneda no válida.</p>";
        }
    }
    ?>
</body>
</html>