<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 10;
        $y = 7;

        $optellen = $x + $y;
        $aftrekken = $x - $y;
        $vermenigvuldigen = $x * $y;
        $delen = $x / $y;
        $rest = $x % $y;

        echo 'optellen: ' . $optellen . ' ' . 'aftrekken: ' . $aftrekken . ' ' .'vermenigvuldigen: ' .  $vermenigvuldigen . ' ' . 'delen: ' . $delen  . ' ' . 'rest: ' . $rest;
    ?>
</body>
</html>