<?php
$subject1 = 'he';
$subject2 = 'hehe';
$subject3 = 'her';
$subject4 = 'heet';
$subject5 = ' he';
$subject6 = ' ahea';
$subject7 = 'ahe';
$subject8 = 'he ';
$subject9 = '2he';

$pattern = '#^he#';

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

preg_match_all($pattern, $subject8, $matches8);
var_dump($subject8);
var_dump($matches8);
echo '<hr/>';

preg_match_all($pattern, $subject9, $matches9);
var_dump($subject9);
var_dump($matches9);
echo '<hr/>';
