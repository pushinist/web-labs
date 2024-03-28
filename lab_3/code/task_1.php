<?php
echo "Task 1 (a) <br />";
$regular_expression = "/a..b/";
$str = "ahb acb aeb aeeb adcb axeb aboba";

preg_match_all($regular_expression, $str, $matches);
echo "Даны слова $str, регулярному выражению соответствуют следующие: ";
foreach ($matches[0] as $match) {
    echo $match . " ";
}

echo "<br /> Task 1 (b) <br />";

function powToCube($arr): string
{
    return $arr[0] ** 3;
}

$pattern = '/(\d+)/';
$str = 'a1b2c3d4e5';

$stringWithCube = preg_replace_callback($pattern, 'powToCube', $str);

echo "Новая строка с кубами: " . $stringWithCube;
