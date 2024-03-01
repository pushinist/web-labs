<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order =& $very_bad_unclear_name;
$order .= " and let's praise the Kotyonok Ra!";

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

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "$days_per_language - примерно столько дней Мэг тратила для изучения каждого из 4 языков программирования, среди
которых, по какой-то причине, не оказалось самого awesome - PHP.";

echo "\n";
echo "<br>";

echo 8 ** 2 . " - именно такая разрядность используется в абсолютном большинстве персональных компьютеров.";

echo "\n";
echo "<br>";

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

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name";
