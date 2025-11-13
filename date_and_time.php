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

?>