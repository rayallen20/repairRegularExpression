<?php
$subject1 = 'index1.txt';
$subject2 = 'index2.txt';
$subject3 = 'index 1.exe';
$subject4 = 'index11.php';

$pattern = '#index1?#';

preg_match_all($pattern, $subject1,$matches1);
var_dump($subject1);
var_dump($matches1);
echo '<hr/>';

preg_match_all($pattern, $subject2, $matches2);
var_dump($subject2);
var_dump($matches2);
echo '<hr/>';

preg_match_all($pattern, $subject3, $matches3);
var_dump($subject3);
var_dump($matches3);
echo '<hr/>';

preg_match_all($pattern, $subject4, $matches4);
var_dump($subject4);
var_dump($matches4);
echo '<hr/>';