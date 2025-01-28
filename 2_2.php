<?php
// Масив зі складами для генерації імені
$syllables = ["Са", "Кс", "Мур", "Пуш", "Ок", "Ла", "Са", "Рик", "Ши", "Бу", "Гро", "Та", "Фи"];

// Функція для створення випадкового імені
function generateName($type, $syllables, $length = 3) {
    $name = "";

    for ($i = 0; $i < $length; $i++) {
        // Вибір випадкового складу з масиву
        $randomSyllable = $syllables[array_rand($syllables)];
        $name .= $randomSyllable;
    }

    // Повертаємо ім'я з першою великою літерою
    return ucfirst($name);
}

// Генерація імен для кожного типу
$catName = generateName("кішки", $syllables);
$dogName = generateName("собаки", $syllables);
$brotherName = generateName("брата", $syllables);
$sisterName = generateName("сестри", $syllables);

// Виведення результатів з оформленням
echo "<!DOCTYPE html>";
echo "<html lang='uk'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Генератор випадкових імен</title>";
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        color: #333;
        padding: 20px;
        line-height: 1.6;
    }
    h2 {
        color: #4a90e2;
    }
    .name-box {
        background: #fff;
        border: 2px solid #4a90e2;
        border-radius: 10px;
        padding: 15px;
        margin: 10px 0;
        box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
    }
    .name-box p {
        margin: 0;
        font-size: 18px;
    }
    strong {
        color: #e94e77;
    }
</style>";
echo "</head>";
echo "<body>";
echo "<h2>Генератор випадкових імен</h2>";

echo "<div class='name-box'><p><strong>Ім'я для кішки:</strong> $catName</p></div>";
echo "<div class='name-box'><p><strong>Ім'я для собаки:</strong> $dogName</p></div>";
echo "<div class='name-box'><p><strong>Ім'я для брата:</strong> $brotherName</p></div>";
echo "<div class='name-box'><p><strong>Ім'я для сестри:</strong> $sisterName</p></div>";

echo "</body>";
echo "</html>";
?>