<?php
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $nationality = $_POST["loves"];
    $userData = ['name'=>$name, 'age'=>$age, 'surname'=>$surname, 'salary'=>$salary, 'loves'=>$nationality];
    $_SESSION['userData'] = $userData;
    header("Location: show.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Form
    </title>
</head>
<body>
<form method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name"><br>
    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname"><br>
    <label for="age">Возраст:</label>
    <input type="text" id="age" name="age"><br>
    <label for="salary">Зарплата:</label>
    <input type="text" id="salary" name="salary"><br>
    <label for="loves">Предпочтения:</label>
    <input type="text" id="loves" name="loves"><br>
    <input type="submit" value="Отправить данные">
</form>
</body>
</html>