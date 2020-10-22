<?php
$str = "hello hung hung";
$subject = "/hello/";
if (preg_match($subject, $str, $matches))
    echo "<pre>";
print_r($matches);
echo "<br>";
echo "<hr>";
$string = 9;
$pattern = '/[0-9]/';
if (preg_match($pattern, $string, $matches))
    echo "<pre>";
print_r($matches);
echo "<br>";
echo "<hr>";

$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';
preg_match_all($pattern, $subject, $matches);
print('<pre>');
print_r($matches);
echo "<br>";
echo "<hr>";

$ip = "hello.world.i.am.VietHung";
$iparr = preg_split("/\./", $ip);
print "$iparr[0] <br />";
print "$iparr[1] <br />";
print "$iparr[2] <br />";
print "$iparr[3] <br />";
print "$iparr[4] <br />";
echo "<br>";
echo "<hr>";

$str = "Vi du ve ham preg_replace 21321 878";
$str = preg_replace("/[0-9]+/", "200", $str);
print $str;


