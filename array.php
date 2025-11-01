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
?>