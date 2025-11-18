<?php
$talabalar = [
    ["ism" => "Dilnura", "familiya" => "Jumaniyozova", "yoshi" => 15, "bahosi" => 5],
    ["ism" => "Dilnura", "familiya" => "Jumaniyozova", "yoshi" => 15, "bahosi" => 5],
    ["ism" => "Dilnura", "familiya" => "Jumaniyozova", "yoshi" => 15, "bahosi" => 5],
    ["ism" => "Dilnura", "familiya" => "Jumaniyozova", "yoshi" => 15, "bahosi" => 5],
    ["ism" => "Dilnura", "familiya" => "Jumaniyozova", "yoshi" => 15, "bahosi" => 5],
    ["ism" => "Dilnura", "familiya" => "Jumaniyozova", "yoshi" => 15, "bahosi" => 5],
    ["ism" => "Dilnura", "familiya" => "Jumaniyozova", "yoshi" => 15, "bahosi" => 5],
    ["ism" => "Dilnura", "familiya" => "Jumaniyozova", "yoshi" => 15, "bahosi" => 5],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiroyli jadval</title>
</head>
<style>
table, th, td {
    border: 1px solid white;
    border-collapse: collapse;
}
</style>
<body>
    <table>
        <tr>
            <th>#</th>
            <th>Ism</th>
            <th>Familiya</th>
            <th>Yosh</th>
            <th>Bahosi</th>
        </tr>
        <?php foreach($talabalar as $key => $item): ?>
        <tr>
            <td><?= ++$key ?></td>
            <td><?= $item['ism'] ?></td>
            <td><?= $item['familiya'] ?></td>
            <td><?= $item['yoshi'] ?></td>
            <td><?= $item['bahosi'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>