<?php
$subject1 = '1a1';
$subject2 = ' 11a1';
$subject3 = '11 a1';
$subject4 = '111a11';
$subject5 = '1221a11';
$subject6 = 'a111';

$pattern = '#1{0,}#';

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