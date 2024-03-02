<?php

$flag = 0; // !!! CHANGE THIS FLAG TO 0 IF YOU ARE RUNNING THIS FILE IN A TERMINAL OTHERWISE LEAVE IT 1 IN CASE YOU ARE RUNNING THIS FILE FROM BROWSER!!!


function br($flag): void
{
    if ($flag == 1) {
        echo "<br>";
    }
}

function Task($number,$flag): void
{
    if ($flag == 1) {
        echo "<hr> Task $number <hr/>";
    } else {
        echo "\nTask $number\n";
    }
}

echo "\n";
br($flag);
Task(1, $flag);

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order =& $very_bad_unclear_name;
$order .= " and let's praise the Kotyonok Ra!";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name";

echo "\n";
br($flag);
Task(2, $flag);

// Today is 1'st of March, so let's make our integer variable like this date!
$numberOfThisDay = 1;
echo $numberOfThisDay;
/* Actually, the Task 1 asked me to use "\n" to jump on a next line,
but if I get everything right, it only works in console output, so I would like to add <br> HTML tag to make it
look like the same in browser too.
*/

echo "\n";
br($flag);


// TBH I'm really sorry for this name, but it seemed to me really, funny and cool despite the fact it's not.
$numberThatWasGoingToBeThePiNumberButWeHadToChangeItToAnotherToMakeTwelveGreatAgain = 6.5;
echo $numberThatWasGoingToBeThePiNumberButWeHadToChangeItToAnotherToMakeTwelveGreatAgain;

echo "\n";
br($flag);


echo $numberThatWasGoingToBeThePiNumberButWeHadToChangeItToAnotherToMakeTwelveGreatAgain +
    $numberThatWasGoingToBeThePiNumberButWeHadToChangeItToAnotherToMakeTwelveGreatAgain -
    $numberOfThisDay;

echo "\n";
br($flag);

$lastMonth = 1187.23;
$thisMonth = 1089.98;
$difference = $lastMonth - $thisMonth;
// Базированная жизнь студента, кстати :)
echo "Я потратил в этом месяце на $difference рубля меньше, чем в предыдущем.";

echo "\n";
br($flag);
Task(11, $flag);

$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "$daysPerLanguage - примерно столько дней Мэг тратила для изучения каждого из 4 языков программирования, среди
которых, по какой-то причине, не оказалось самого awesome - PHP.";

echo "\n";
br($flag);
Task(12, $flag);


echo 8 ** 2 . " - именно такая разрядность используется в абсолютном большинстве персональных компьютеров.";

echo "\n";
br($flag);
Task(13, $flag);
$myNum = 2024;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer . " - это переменная answer. Если она равна единице, то все прошло успешно и я молодец, ведь справился
с тем, чтобы не ошибиться в выполнении последовательного сложения, умножения, вычитания и деления на 2.";

echo "\n";
br($flag);
Task(14, $flag);

$a = 10;
$b = 3;
echo $a % $b . " - остаток от деления $a на $b";

echo "\n";
br($flag);

echo "Делится ли $a на $b без остатка? ";
if ($a % $b == 0) {
    echo "Делится, " . $a / $b;
} else {
    echo "Делится с остатком, остаток от деления $a на $b будет равен " . $a % $b;
}

echo "\n";
br($flag);

$st = pow(2, 10);
echo "Квадратный корень из 245 равен " . sqrt(245);

echo "\n";
br($flag);

$summa = 0;
$randomArray = array(4, 2, 5, 19, 13, 0, 10);
foreach ($randomArray as $value) {
    $summa += pow($value, 2);
}
echo sqrt($summa) . " - это квадратный корень из суммы квадратов элементов массива (4, 2, 5, 19, 13, 0, 10)";

echo "\n";
br($flag);

echo round(sqrt(379)) . " - квадратный корень из 379, округленный до целого значения. ";
echo round(sqrt(379), 1) . " - квадратный корень из 379, округленный до десятков. ";
echo round(sqrt(379), 2) . " - квадратный корень из 379, округленный до сотых. ";

echo "\n";
br($flag);
$arrayToCheckWorkOfFloorAndCeilFunction = array("round" => round(sqrt(587)), "ceil" => ceil(sqrt(587)));
echo $arrayToCheckWorkOfFloorAndCeilFunction["round"] . " < " . $arrayToCheckWorkOfFloorAndCeilFunction["ceil"];

echo "\n";
br($flag);

$yetAnotherRandomArray = array(4, -2, 5, 19, -130, 0, 10);
$minMaxArray = array("min" => min($yetAnotherRandomArray), "max" => max($yetAnotherRandomArray));
echo $minMaxArray["min"] . " - min, " . $minMaxArray["max"] . " - max.";

echo "\n";
br($flag);

echo rand(1, 100);
$randomNumbersArray = array();

for ($i = 0; $i < 10; $i++) {
    $randomNumbersArray[] = rand();
}

// Цикл для проверки работы цикла выше.
//foreach ($RandomNumbersArray as &$value) {
//    echo $value . " ";
//}

echo "\n";
br($flag);

for ($i = 1; $i <= 10; $i++) {
    $a = rand(1, 100);
    $b = rand(1, 100);
    echo abs($a - $b) . " - модуль разности случайных a = $a и b = $b, итерация $i";
    echo "\n";
    br($flag);
}

$notOnlyPositiveArray = array(1, 2, -1, -2, 3, -3);
$positiveOnlyArray = array();
echo "Изначальный массив - ( ";
foreach ($notOnlyPositiveArray as $value) {
    echo $value . " ";
}
echo ").";

foreach ($notOnlyPositiveArray as $value) {
    $positiveOnlyArray[] = abs($value);
}
unset($value); // разрываем ссылку на $value, чтобы потом не произошлой какой-то гадости

echo "\n";
br($flag);

echo "Массив с положительными числами изначального массива - ( ";
foreach ($positiveOnlyArray as &$value) {
    echo $value . " ";
}
echo ").";

echo "\n";
br($flag);

$randomNumber = rand();
$dividersOfRandomNumber = array();
for ($i = 1; $i <= ceil(sqrt($randomNumber)); $i++) {
    if ($randomNumber % $i == 0) {
        $dividersOfRandomNumber[] = $i;
        $dividersOfRandomNumber[] = $randomNumber / $i;
    }
}

echo "Делители числа $randomNumber - ";
foreach ($dividersOfRandomNumber as $value) {
    echo $value . ", ";
}

echo "\n";
br($flag);


$yetAnotherArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$desiredNumber = $yetAnotherArray[0];
$i = 1;
while ($desiredNumber <= 10) {
    $desiredNumber += $yetAnotherArray[$i];
    $i++;
}
echo $i . " - именно столько первых элементов массива нужно сложить, чтобы получить число, больше 10.";
echo "\n";
br($flag);

echo "\n";
br($flag);
Task(15, $flag);

function printStringReturnNumber(): int
{
    echo "Если вы видите эту строчку, значит, где-то сработала одинокая функция, которая должна была вернуть какое-то числовое значение";
    return 15;
}

// don't forget to rename all vars according to lowerCamelCase upd. i didn't.
$myNum = printStringReturnNumber();
echo "\n";
br($flag);
echo $myNum;

echo "\n";
br($flag);
Task(16, $flag);

function increaseEnthusiasm(string $string): string
{
    return $string . "!";
}

echo increaseEnthusiasm('Praise the Ra');

echo "\n";
br($flag);

function repeatThreeTimes(string $string): string
{
    // return str_repeat($string, 3); это был первый вариант, но, мне что-то подсказывает, что это все-таки нужно сделать через цикл
    $resultString = '';
    for ($i = 0; $i < 3; $i++) { // забавно, что пхпшторм сам предлагаем мне заменить цикл на функцию....
        $resultString .= $string;
    }
    return $resultString;
}

echo repeatThreeTimes(increaseEnthusiasm('Praise the Ra'));

echo "\n";
br($flag);

function cut(string $string, int $number = 10): string
{
    /*
     * // На случай, если длина строки окажется меньше,
     * чем задаваемое число
     * (иначе посыпятся ошибки,
     * т.к. пытаемся обраться за границы итерируемого объекта)
     */

    if (strlen($string) <= $number) {
        return $string;
    } else {
        $cutString = '';
        for ($i = 0; $i < $number; $i++) {
            $cutString .= $string[$i];
        }
        return $cutString;
    }

}

echo cut('Praise the Ra', 20);

echo "\n";
br($flag);

$yetAnotherRandomArray = array();
for ($i = 0; $i < 10; $i++) {
    $yetAnotherRandomArray[] = rand();
}
echo "Случайный массив - ( ";
foreach ($yetAnotherRandomArray as $value) {
    echo $value . " ";
}
echo ")";

echo "\n";
br($flag);

function printTheArray(array $array, int $length, $flag, int $i = 0): void
{
    if ($i == $length) {
        echo "\n";
        br($flag);
        return;
    }
    echo $array[$i] . " ";
    $i++;
    printTheArray($array, $length, $flag, $i);
}

printTheArray($yetAnotherRandomArray, count($yetAnotherRandomArray), $flag);

function digitsCounter(int $number): int
{

    if ($number < 0) {
        $number = abs($number);
    }

    if ($number < 10) {
        return $number;
    }

    $stringNumber = $number . '';
    $sum = intval($stringNumber[0]);

    for ($i = 1; $i < strlen($stringNumber); $i++) {
        $sum += intval($stringNumber[$i]);
    }
    return digitsCounter($sum);
}

echo digitsCounter(123456);

echo "\n";
br($flag);
Task(17, $flag);

function fillArrayByX(array &$array, int $numberOfX): void
{
    for ($i = 1; $i <= $numberOfX; $i++) {
        $array[] = str_repeat('x', $i);
    }
}

$anotherOneArrayWhichImTiredToCount = array();
fillArrayByX($anotherOneArrayWhichImTiredToCount, 10);
foreach ($anotherOneArrayWhichImTiredToCount as $value) {
    echo $value . ' ';
}
echo "\n";
br($flag);

function arrayFill($value, int $count): array
{
    $array = array();
    for ($i = 0; $i < $count; $i++) {
        $array[] = $value;
    }
    return $array;
}

$yetAnotherArrayWeHaveToFill = arrayFill('x', 5);
foreach ($yetAnotherArrayWeHaveToFill as $item) {
    echo $item . ' ';
}

echo "\n";
br($flag);

$_2DArray = array(
    array(1, 2, 3),
    array(4, 5),
    array(6)
);

function countSumOfElementsIn2DArray(array $_2DArray): int
{
    $sum = 0;
    foreach ($_2DArray as $array) {
        foreach ($array as $item) {
            $sum += $item;
        }
    }
    return $sum;
}

echo countSumOfElementsIn2DArray($_2DArray);

echo "\n";
br($flag);

$counter = 1;
$arrayWhichIsSupposedToBe2D = array();
for ($i = 0; $i < 3; $i++) {
    $arrayWhichIsSupposedToBe2D[] = array();
    for ($j = &$counter; $j < 10; $j++) {
        $arrayWhichIsSupposedToBe2D[$i][] = $j;
    }
}

foreach ($arrayWhichIsSupposedToBe2D as $array) {
    foreach ($array as $item) {
        echo $item . ', ';
    }
}

echo "\n";
br($flag);

$arrayWithSomeNumbers = array(2, 5, 3, 9);

$firstNumber = $arrayWithSomeNumbers[0] * $arrayWithSomeNumbers[1];
$secondNumber = $arrayWithSomeNumbers[2] * $arrayWithSomeNumbers[3];
$result = $firstNumber + $secondNumber;
echo $result;

echo "\n";
br($flag);

$user = array('name' => 'Maxim', 'surname' => 'Tsvetkov', 'patronymic' => 'Alexandrovich');
//foreach ($user as $value) {
//    echo $value . ' ';
//}
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];

echo "\n";
br($flag);

$date = array('year' => 2024, 'month' => 3, 'day' => 1);
$res = '';
foreach ($date as $value) {
    $res .= $value . '-';
}
echo rtrim($res, '-');

echo "\n";
br($flag);

$arr = ['a', 'b', 'c', 'd', 'e']; // Полагая, что встроенными функциями пользоваться не стоит:
$count = 0;
foreach ($arr as $item) {
    $count++;
}
echo "Количество символов в массиве - $count, последний - ";
echo $arr[$count - 1] . ', предпоследий - ';
echo $arr[$count - 2];

echo "\n";
br($flag);


echo "\n";
br($flag);
Task(18, $flag);

// тут я сдаюсь. очень странно, что в этом языке true интерпретируется как 1, а false - как пустая строка.
// еще более странно, что (по крайней мере, как я искал) скастить эти 1 или пустую строку в полноценные true или false - нельзя.
// простите, что оставил вывод именно как 1 или 0, а не как true ли false :(
function moreThanTen(int|float $a, int|float $b): bool
{
    if (($a + $b) > 10) {
        return true;
    } else {
        return false;
    }
}

if (moreThanTen(6, 5)) {
    echo 'true';
}
echo "\n";

br($flag);

function isEqual(int|float $a, int|float $b): bool
{
    if ($a == $b) {
        return true;
    } else {
        return false;
    }
}

if (isEqual(5, 5)) {
    echo 'true';
}

echo "\n";
br($flag);

$test = 0;

echo(($test == 0) ? 'верно' : '');

echo "\n";
br($flag);


function sumOfDigits(int $number): int
{
    if ($number < 0) {
        $number = abs($number);
    }
    $stringNumber = $number . '';
    $sum = intval($stringNumber[0]);

    for ($i = 1; $i < strlen($stringNumber); $i++) {
        $sum += intval($stringNumber[$i]);
    }
    return $sum;
}


$age = rand(1, 1000);
if (($age < 10) or ($age > 99)) {
    echo "Число $age меньше 10 или больше 99";
} else {
    if (sumOfDigits($age) <= 9) {
        echo 'Сумма цифр однозначна, ' . $age;
    } else {
        echo 'Сумма цифр двузначна ' . $age;
    }
}

echo "\n";
br($flag);

$arr = array();
$numberOfElementsInArray = rand(1, 5);

for ($i = 0; $i < $numberOfElementsInArray; $i++) {
    $arr[] = rand(1, 100);
}

foreach ($arr as $item) {
    echo $item . ' ';
}

echo "\n";
br($flag);

$i = 0;
$sum = 0;

foreach ($arr as $item) {
    $i += 1;
    if ($i == 4) {
        break;
    }
    $sum += $item;
}
if ($i == 3) {
    echo 'Сработало условие: кол-во элементов в массиве равно 3, их сумма - ' . $sum;
}


echo "\n";
br($flag);
Task(19, $flag);

for ($i = 1; $i < 21; $i++) {
    echo str_repeat('x', $i);
    echo "\n";
    br($flag);
}

echo "\n";
br($flag);
Task(20, $flag);

$arr = array();
$numberOfElementsInArray = rand(1, 5);

for ($i = 0; $i < $numberOfElementsInArray; $i++) {
    $arr[] = rand(1, 100);
}

foreach ($arr as $item) {
    echo $item . ' ';
}

echo "\n";
br($flag);


$arithmeticMean = array_sum($arr) / count($arr);
echo $arithmeticMean;

echo "\n";
br($flag);

// Первый способ посчитать от 1 до 100 - через рекурсию
function calculateNumbersFrom1ToX(int $x): int
{
    if ($x == 1) {
        return 1;
    }
    else {
        return ($x + calculateNumbersFrom1ToX($x - 1));
    }
}

// Второй - по формуле

function anotherWayToCalculateNumbersFrom1ToX(int $x): int
{
    return $x*($x + 1) / 2;
}

// Сравним их оба, используя функцию, написанную ранее

if (isEqual(calculateNumbersFrom1ToX(100), anotherWayToCalculateNumbersFrom1ToX(100))) {
    echo 'Подсчеты оказались верны!';
}

echo "\n";
br($flag);

$arr = array();
$numberOfElementsInArray = rand(1, 5);

for ($i = 0; $i < $numberOfElementsInArray; $i++) {
    $arr[] = rand(1, 100);
}

foreach ($arr as $item) {
    echo $item . ' ';
}

echo "\n";
br($flag);

$sqrtArray = array_map('sqrt', $arr);

foreach ($sqrtArray as $item) {
    echo $item . ' ';
}

echo "\n";
br($flag);

$keys = range('a', 'z');
$values = range(1, 26);
$combinedAssociativeArray = array_combine($keys, $values);

foreach ($combinedAssociativeArray as $key => $value) {
    echo "Key: $key; Value: $value <br>";
}


// Рекурсия же ведь за циклы не считается, верно? верно?....
function countSumOfPairOfNumbers(string $number, $i = 0, $sum = 0): int
{
    $sum += intval(substr($number, 0, 2));
    if (strlen($number) == 0) {
        return $sum;
    } else {
        return countSumOfPairOfNumbers(substr($number, 2), 2, $sum);
    }
}

echo "\n";
br($flag);

echo countSumOfPairOfNumbers('1234567890');

