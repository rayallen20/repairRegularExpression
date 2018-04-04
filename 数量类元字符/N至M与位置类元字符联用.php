<?php
$subject1 = '111';
$subject2 = '1111';
$subject3 = 'a111';
$subject4 = ' 111';
$subject5 = '111 ';
$subject6 = 'a1b1c1';
$subject7 = '1a1b1c';

$pattern = '#^1{1,3}#';

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

preg_match_all($pattern, $subject5, $matches5);
var_dump($subject5);
var_dump($matches5);
echo '<hr/>';

preg_match_all($pattern, $subject6, $matches6);
var_dump($subject6);
var_dump($matches6);
echo '<hr/>';

preg_match_all($pattern, $subject7, $matches7);
var_dump($subject7);
var_dump($matches7);
echo '<hr/>';