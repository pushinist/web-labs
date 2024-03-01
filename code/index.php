<?php
echo "\n";
echo "<br>";
echo "<hr> Task 1 <hr>";

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order =& $very_bad_unclear_name;
$order .= " and let's praise the Kotyonok Ra!";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name";

echo "\n";
echo "<br>";
echo "<hr> Task 2 <hr>";

// Today is 1'st of March, so let's make our integer variable like this date!
$NumberOfThisDay = 1;
echo $NumberOfThisDay;
/* Actually, the Task 1 asked me to use "\n" to jump on a next line,
but if I get everything right, it only works in console output, so I would like to add <br> HTML tag to make it
look like the same in browser too.
*/

echo "\n";
echo "<br>";


// TBH I'm really sorry for this name, but it seemed to me really, funny and cool despite the fact it's not.
$NumberThatWasGoingToBeThePiNumberButWeHadToChangeItToAnotherToMakeTwelveGreatAgain = 6.5;
echo $NumberThatWasGoingToBeThePiNumberButWeHadToChangeItToAnotherToMakeTwelveGreatAgain;

echo "\n";
echo "<br>";


echo $NumberThatWasGoingToBeThePiNumberButWeHadToChangeItToAnotherToMakeTwelveGreatAgain +
    $NumberThatWasGoingToBeThePiNumberButWeHadToChangeItToAnotherToMakeTwelveGreatAgain -
    $NumberOfThisDay;

echo "\n";
echo "<br>";

$last_month = 1187.23;
$this_month = 1089.98;
$difference = $last_month - $this_month;
// Базированная жизнь студента, кстати :)
echo "Я потратил в этом месяце на $difference рубля меньше, чем в предыдущем.";

echo "\n";
echo "<br>";
echo "<hr> Task 11 <hr>";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "$days_per_language - примерно столько дней Мэг тратила для изучения каждого из 4 языков программирования, среди
которых, по какой-то причине, не оказалось самого awesome - PHP.";

echo "\n";
echo "<br>";
echo "<hr> Task 12 <hr>";


echo 8 ** 2 . " - именно такая разрядность используется в абсолютном большинстве персональных компьютеров.";

echo "\n";
echo "<br>";
echo "<hr> Task 13 <hr>";

$my_num = 2024;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . " - это переменная answer. Если она равна единице, то все прошло успешно и я молодец, ведь справился
с тем, чтобы не ошибиться в выполнении последовательного сложения, умножения, вычитания и деления на 2.";

echo "\n";
echo "<br>";
echo "<hr> Task 14 <hr>";

$a = 10;
$b = 3;
echo $a % $b . " - остаток от деления $a на $b";

echo "\n";
echo "<br>";

echo "Делится ли $a на $b без остатка? ";
if ($a % $b == 0) {
    echo "Делится, " . $a / $b;
} else {
    echo "Делится с остатком, остаток от деления $a на $b будет равен " . $a % $b;
}

echo "\n";
echo "<br>";

$st = pow(2, 10);
echo "Квадратный корень из 245 равен " . sqrt(245);

echo "\n";
echo "<br>";

$Summa = 0;
$RandomArray = array(4, 2, 5, 19, 13, 0, 10);
foreach ($RandomArray as &$value) {
    $Summa += pow($value, 2);
}
echo sqrt($Summa) . " - это квадратный корень из суммы квадратов элементов массива (4, 2, 5, 19, 13, 0, 10)";

echo "\n";
echo "<br>";

echo round(sqrt(379)) . " - квадратный корень из 379, округленный до целого значения. ";
echo round(sqrt(379), 1) . " - квадратный корень из 379, округленный до десятков. ";
echo round(sqrt(379), 2) . " - квадратный корень из 379, округленный до сотых. ";

echo "\n";
echo "<br>";
$ArrayToCheckWorkOfFloorAndCeilFunction = array("round" => round(sqrt(587)), "ceil" => ceil(sqrt(587)));
echo $ArrayToCheckWorkOfFloorAndCeilFunction["round"] . " < " . $ArrayToCheckWorkOfFloorAndCeilFunction["ceil"];

echo "\n";
echo "<br>";

$YetAnotherRandomArray = array(4, -2, 5, 19, -130, 0, 10);
$MinMaxArray = array("min" => min($YetAnotherRandomArray), "max" => max($YetAnotherRandomArray));
echo $MinMaxArray["min"] . " - min, " . $MinMaxArray["max"] . " - max.";

echo "\n";
echo "<br>";

echo rand(1, 100);
$RandomNumbersArray = array();

for ($i = 0; $i < 10; $i++) {
    $RandomNumbersArray[] = rand();
}

// Цикл для проверки работы цикла выше.
//foreach ($RandomNumbersArray as &$value) {
//    echo $value . " ";
//}

echo "\n";
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    $a = rand(1, 100);
    $b = rand(1, 100);
    echo abs($a - $b) . " - модуль разности случайных a = $a и b = $b, итерация $i";
    echo "\n";
    echo "<br>";
}

$NotOnlyPositiveArray = array(1, 2, -1, -2, 3, -3);
echo "Изначальный массив - ";
foreach ($NotOnlyPositiveArray as &$value) {
    echo $value . " ";
}

foreach ($NotOnlyPositiveArray as &$value) {
    $value = abs($value);
}
unset($value); // разрываем ссылку на $value, чтобы потом не произошлой какой-то гадости

echo "\n";
echo "<br>";

echo "Изначальный массив - ";
foreach ($NotOnlyPositiveArray as &$value) {
    echo $value . " ";
}

echo "\n";
echo "<br>";

$RandomNumber = rand();
$DividersOfRandomNumber = array();
for ($i = 1; $i <= ceil(sqrt($RandomNumber)); $i++) {
    if ($RandomNumber % $i == 0) {
        $DividersOfRandomNumber[] = $i;
        $DividersOfRandomNumber[] = $RandomNumber / $i;
    }
}

echo "Делители числа $RandomNumber - ";
foreach ($DividersOfRandomNumber as &$value) {
    echo $value . ", ";
}

echo "\n";
echo "<br>";


$YetAnotherArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$DesiredNumber = $YetAnotherArray[0];
$i = 1;
while ($DesiredNumber <= 10) {
    $DesiredNumber += $YetAnotherArray[$i];
    $i++;
}
echo $i . " - именно столько первых элементов массива нужно сложить, чтобы получить число, больше 10.";
echo "\n";
echo "<br>";

echo "\n";
echo "<br>";
echo "<hr> Task 15 <hr>";

