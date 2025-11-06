<?php
//brinchi usul
$sonlar = array(2,4,48,57,26,258,147,12, "Test", 'Qiymat');
//ikkinchi usul
$sonlar1 = [5,21,48,35,456,75,29,256];

echo $sonlar[4];
echo "\n";
echo $sonlar[4];
echo "\n";
$sonlar[4] = 70;
echo $sonlar[4];
print_r($sonlar);
//massivga yangi element qo'shish ohiriga
array_push($sonlar, 133,45);
$sonlar[] = 444;
print_r($sonlar);
// Associative Arrays
$car = ["model" => "Cobalt", "brand" => "Chevrolet", "year" => 2025];
//print_r($car);
echo $car['model'];
$car['model'] = 'Onix';
echo "\n";
echo $car['model'];
echo "\n";
$cars = [
    0 => "Cobalt",
    1 => "Test",
];
//bo'sh massiv
$massiv = [];
$massiv[0] = "Ali";
$massiv[1] = "Sarvar";
print_r($massiv);
$massiv1 = [];
$massiv1["ism"] = "Kamol";
$massiv1["familiya"] = "Rustamov";
$massiv1[0] = "Test";
print_r($massiv1);
$sonlar = [456,5,6,2,35,65,7,56,4,1];
print_r($sonlar);
$juft = [];

//foreach
$users = ["ism" => "Ali", "familiya" => "Ozodov", "year" => 1986];
foreach ($users as $key => $value) {
    echo $key.": ".$value.", ";
}
echo "\n";
foreach ($users as $value) {
    echo $value.", ";
}
$users += ["manzil" => "Xonqa", "yosh" => 24];
print_r($users);
array_splice($sonlar, 5, 2,);
unset($sonlar[2]);
print_r($sonlar);
print_r(array_diff($users,["Ozodov"]));
//Sorting
$sonlar = [456,5,6,2,35,65,7,56,4,1];
sort($sonlar);
print_r($sonlar);
rsort($sonlar);
print_r($sonlar);
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age);
ksort($age);
print_r($age);
arsort($age);
print_r($age);
krsort($age);
print_r($age);

// Multidimensional Arrays

$users = [
    ["ism" => "Ali", "familiya" => "Ozodov", "year" => 1986],
    ["ism" => "Sarvar", "familiya" => "Masharipov", "year" => 1985],
];
print_r($users);
echo $users[0]['ism']."\n";
echo $users[0]['familiya']."\n";

$sonlar = [
    [3,4,56,7,36,[4,6,[3,23,45,7,8,9],12,34,5]],
    [43,54,6,2,5,11],
    [47,8,11,10,21,32]
];
print_r($sonlar);
echo $sonlar[0][5][2][3];


?>
