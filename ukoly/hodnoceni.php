<?php

// 1. Údaje o studentovi
$studentName = "Jan Novák";

$test1 = 75;
$test2 = 90;
$test3 = 60;

// 2. Výpočty
$totalPoints = $test1 + $test2 + $test3;

$averagePoints = $totalPoints / 3;

$successRate = ($totalPoints / 300) * 100;

// 3. Výpočet výsledné známky
if ($successRate >= 90) {
    $grade = 1;
} elseif ($successRate >= 75) {
    $grade = 2;
} elseif ($successRate >= 60) {
    $grade = 3;
} elseif ($successRate >= 40) {
    $grade = 4;
} else {
    $grade = 5;
}

// 4. Kontrola, zda student prospěl
if ($grade <= 4) {
    $result = "Student prospěl.";
} else {
    $result = "Student neprospěl.";
}

?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <title>Hodnocení studenta</title>
</head>

<body>

    <h1>Hodnocení studenta</h1>

    <h2><?php echo $studentName; ?></h2>

    <h3>Výsledky testů</h3>

    <p>Test 1: <?php echo $test1; ?> bodů</p>
    <p>Test 2: <?php echo $test2; ?> bodů</p>
    <p>Test 3: <?php echo $test3; ?> bodů</p>

    <hr>

    <p>
        Celkový počet bodů:
        <?php echo $totalPoints; ?> / 300
    </p>

    <p>
        Průměrný počet bodů:
        <?php echo round($averagePoints, 2); ?>
    </p>

    <p>
        Procentuální úspěšnost:
        <?php echo round($successRate, 2); ?> %
    </p>

    <h2>
        Výsledná známka:
        <?php echo $grade; ?>
    </h2>

    <p><?php echo $result; ?></p>

</body>

</html>