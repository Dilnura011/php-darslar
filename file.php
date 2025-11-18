<?php
//Fayldan ma'lumotlarni o'qish.
if(file_exists("test.txt")){
    $file = fopen("test.txt","r");
    $content = fread($file, filesize('test.txt'));
    fclose($file);
    echo $content;
} else {
    echo "Fayl mavjud emas!<br>";
}
//Faylga ma'lumot yozish.
$file = fopen("data.txt","w");
fwrite($file, "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
fclose($file);
//Faylga ma'lumot qo'shib yozish
$file = fopen("data.txt","a");
fwrite($file, "\nYangi ma'lumot qo'shish");
fclose($file);
//Faylni o'chirish
//unlink('test.txt');
//Fayl bor yoki yo'qligini tekshirish
if(file_exists("data.txt")){
    echo "Fayl mavjud!";
} else {
    echo "Fayl mavjud emas!";
}
echo "<br>";
//Fayldan ma'lumotlarni o'qish.
$content = file_get_contents("data.txt");
echo $content;
echo "<br>";
//Faylga yozish
file_put_contents("data.txt", "Hello world!");
echo "<br>";
//Faylga ma'lumot qo'shib yozish
file_put_contents("data.txt", "Hello world!", FILE_APPEND);
?>