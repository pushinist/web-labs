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
foreach ($RandomArray as $value) {
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
$PositiveOnlyArray = array();
echo "Изначальный массив - ( ";
foreach ($NotOnlyPositiveArray as $value) {
    echo $value . " ";
}
echo ").";

foreach ($NotOnlyPositiveArray as $value) {
    $PositiveOnlyArray[] = abs($value);
}
unset($value); // разрываем ссылку на $value, чтобы потом не произошлой какой-то гадости

echo "\n";
echo "<br>";

echo "Массив с положительными числами изначального массива - ( ";
foreach ($PositiveOnlyArray as &$value) {
    echo $value . " ";
}
echo ").";

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
foreach ($DividersOfRandomNumber as $value) {
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

function printStringReturnNumber(): int
{
    echo "Если вы видите эту строчку, значит, где-то сработала одинокая функция, которая должна была вернуть какое-то числовое значение";
    return 15;
}

// don't forget to rename all vars according to lowerCamelCase
$myNum = printStringReturnNumber();
echo "\n";
echo "<br>";
echo $myNum;

echo "\n";
echo "<br>";
echo "<hr> Task 16 <hr>";

function increaseEnthusiasm(string $string): string
{
    return $string . "!";
}

echo increaseEnthusiasm('Praise the Ra');

echo "\n";
echo "<br>";

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
echo "<br>";

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
echo "<br>";

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
echo "<br>";

function printTheArray(array $array, int $length, int $i = 0)
{
    if ($i == $length) {
        echo "\n";
        echo "<br>";
        return;
    }
    echo $array[$i] . " ";
    $i++;
    printTheArray($array, $length, $i);
}

printTheArray($yetAnotherRandomArray, count($yetAnotherRandomArray));

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
echo "<br>";
echo "<hr> Task 17 <hr>";

function fillArrayByX(array &$array, int $numberOfX)
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
echo "<br>";

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
echo "<br>";

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
echo "<br>";

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
echo "<br>";

$arrayWithSomeNumbers = array(2, 5, 3, 9);

$firstNumber = $arrayWithSomeNumbers[0] * $arrayWithSomeNumbers[1];
$secondNumber = $arrayWithSomeNumbers[2] * $arrayWithSomeNumbers[3];
$result = $firstNumber + $secondNumber;
echo $result;

echo "\n";
echo "<br>";

$user = array('name' => 'Maxim', 'surname' => 'Tsvetkov', 'patronymic' => 'Alexandrovich');
//foreach ($user as $value) {
//    echo $value . ' ';
//}
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];

echo "\n";
echo "<br>";

$date = array('year' => 2024, 'month' => 3, 'day' => 1);
$res = '';
foreach ($date as $value) {
    $res .= $value . '-';
}
echo rtrim($res, '-');

echo "\n";
echo "<br>";

$arr = ['a', 'b', 'c', 'd', 'e']; // Полагая, что встроенными функциями пользоваться не стоит:
$count = 0;
foreach ($arr as $item) {
    $count++;
}
echo "Количество символов в массиве - $count, последний - ";
echo $arr[$count - 1] . ', предпоследий - ';
echo $arr[$count - 2];

echo "\n";
echo "<br>";


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

echo "<br>";

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
echo "<br>";

$test = 0;

echo(($test == 0) ? 'верно' : '');

echo "\n";
echo "<br>";


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
echo "<br>";

$arr = array();
$numberOfElementsInArray = rand(1, 5);

for ($i = 0; $i < $numberOfElementsInArray; $i++) {
    $arr[] = rand(1, 100);
}

foreach ($arr as $item) {
    echo $item . ' ';
}

echo "\n";
echo "<br>";

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


