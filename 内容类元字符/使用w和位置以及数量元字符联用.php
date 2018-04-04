<?php
$subject1 = 'action';
$subject2 = 'act-tion';
$subject3 = 'act`ion';
$subject4 = 'act-aon';
$subject5 = 'bction';
$subject6 = ' action';
$subject7 = 'a';
$subject8 = ' a';

$pattern = '#^a\w*#';

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
var_dump($matches5);
echo '<hr/>';

preg_match_all($pattern, $subject6, $matches6);
var_dump($matches6);
echo '<hr/>';

preg_match_all($pattern, $subject7, $matches7);
var_dump($matches7);
echo '<hr/>';

preg_match_all($pattern, $subject8, $matches8);
var_dump($matches8);
echo '<hr/>';