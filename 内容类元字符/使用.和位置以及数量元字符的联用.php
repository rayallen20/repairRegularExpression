<?php
$subject1 = <<<STR
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>待匹配标题</title>
</head>
<body>

</body>
</html>
STR;

$pattern = '#<title>.*</title>#';

preg_match_all($pattern, $subject1,$matches1);
var_dump($subject1);
var_dump($matches1);
echo '<hr/>';
