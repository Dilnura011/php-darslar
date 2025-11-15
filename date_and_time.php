<?php
date_default_timezone_set("Asia/Tashkent");
echo date("Y.m.d")."<br>";
echo date("Y/m/d")."<br>";
echo date("d.m.Y")."<br>";
echo date("d/m/Y")."<br>";
echo date("d.m.Y H:i:s")."<br>";
echo date("d.m.Y h:i")."<br>";
echo date("l")."<br>";
echo date("d F Y")."<br>";
//time()
echo time()."<br>";
echo date("d.m.Y")."<br>";
echo date("d.m.Y,",strtotime("2025-11-23"))."<br>";
//Unix time
echo "Unix time: ".time()."<br>";
echo "Unix time: ".strtotime("2025-11-14")."<br>";
// 15.11.2025
echo strtotime("+7 days"). "<br>";
echo date("d.m.Y H:i",strtotime("+7 days")). "<br>";
echo date("Y.m.d",strtotime("last Monday")). "<br>";
echo date("Y.m.d",strtotime("next Year")). "<br>";
echo date("Y.m.d",strtotime("2024-11-14")). "<br>";
echo date("d.m.Y H:i",strtotime("-10 days")). "<br>";
?>