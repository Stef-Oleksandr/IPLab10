<?php
require_once "Function/func.php"; // Підключаємо файл з функціями
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обчислення значень</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        h2 {
            color: #4a90e2;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4a90e2;
            color: white;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Обчислення значень</h2>
    <form method="POST">
        <label for="x">Введіть значення X:</label>
        <input type="number" step="0.01" id="x" name="x" required>
        <label for="y">Введіть значення Y:</label>
        <input type="number" step="0.01" id="y" name="y" required>
        <button type="submit">Обчислити</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];

        // Обчислення значень
        $sin = calculate_sin($x);
        $cos = calculate_cos($x);
        $tg = my_tg($x);
        $power = calculate_power($x, $y);
        $factorial = factorial($x);

        // Додаткові обчислення
        $sum = $x + $y;                  // Сума
        $difference = $x - $y;           // Різниця
        $product = $x * $y;              // Множення
        $quotient = ($y != 0) ? $x / $y : "Ділення на 0"; // Ділення
        $average = ($x + $y) / 2;        // Середнє арифметичне

        // Виведення таблиці
        echo "<h3>Результати обчислень</h3>";
        echo "<table>";
        echo "<tr>
                <th>Обчислення</th>
                <th>Результат</th>
            </tr>";
        echo "<tr><td>sin(x)</td><td>$sin</td></tr>";
        echo "<tr><td>cos(x)</td><td>$cos</td></tr>";
        echo "<tr><td>tg(x)</td><td>$tg</td></tr>";
        echo "<tr><td>x<sup>y</sup></td><td>$power</td></tr>";
        echo "<tr><td>x!</td><td>$factorial</td></tr>";
        echo "<tr><td>Сума (x + y)</td><td>$sum</td></tr>";
        echo "<tr><td>Різниця (x - y)</td><td>$difference</td></tr>";
        echo "<tr><td>Множення (x * y)</td><td>$product</td></tr>";
        echo "<tr><td>Ділення (x / y)</td><td>$quotient</td></tr>";
        echo "<tr><td>Середнє арифметичне</td><td>$average</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>