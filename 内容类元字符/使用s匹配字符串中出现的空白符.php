<?php
$subject1 = "my qq is 40486453\n";
$subject2 = " \n";
$subject3 = "a \n";
$subject4 = " a b\n";

$pattern = "#\s#";

preg_match_all($pattern, $subject1,$matches1);
var_dump($subject1);
var_dump($matches1);
echo "<hr/>";

preg_match_all($pattern, $subject2, $matches2);
var_dump($subject2);
var_dump($matches2);
echo "<hr/>";

preg_match_all($pattern, $subject3, $matches3);
var_dump($subject3);
var_dump($matches3);
echo "<hr/>";

preg_match_all($pattern, $subject4, $matches4);
var_dump($subject4);
var_dump($matches4);
echo '<hr/>';