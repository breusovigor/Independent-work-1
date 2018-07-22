<?php
/*Задача 6:
 Используя куки выводите информацию о количестве посещений и дате последнего посещения.*/
setcookie('lastVisit', date('Y-m-d H:i:s'), time()+3600*24*31);
if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'];
} else {
    $counter = 0;
}
setcookie('counter', ++$counter);


/*Задача 1:
 Создайте переменную $name и присвойте ей строковое значение содержащее ваше имя
 Создайте переменную $age и присвойте ей числовое значение
 Выведите: Меня зовут: "ваше имя"
 Выведите: Мой "ваш возраст" лет*/

$name = 'Igor';
$age = 25;

echo "My name is $name" . '</br>';
echo "My age $age" . '</br>';

/*Задача 2:
 Создайте константу и присвойте ей значение
 Проверьте существует ли константа.
 Выведите значение константы
 Попытайтесь изменить ее значение.*/

const FIRST = 20;
if (defined('FIRST')) {
    echo FIRST . '</br>';
}
const FIRST = 'Twenty';
echo FIRST . '</br>';

/*Задача 3:
 Создайте переменную $age и присвойте ей значение
 - Напишите конструкцию if, которая выводит фразу:
 "Вам еще работать и работать" при условии что $age попадает в диапазон чисел от 18 до 59 (включительно)
 - Расширьте конструкцию if, выводя фразу: "Вам пора на пенсию" при условии, что $age больше 59
 - Если $age от 1 до 17 то выводите вам еще рано работать*/
// Так как $age определена выше используем её

if ($age >= 18 && $age <= 59) {
    echo 'You still work and work' . '</br>';
} elseif ($age > 59) {
    echo 'Time for you to retire' . '</br>';
} else {
    echo 'You still early work' . '</br>';
}

/*Задача 4:
 Создайте переменную $day и присвойте ей числовое значение
 С помощью конструкции switch выведите фразу "Это рабочий день если $day от 1-5
 Если 6-7 "Это выходной день"
 Если переменная $day не попадает в диапазон выводить неизвестный день*/

$day = 7;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Working day' . '</br>';
        break;
    case 6:
    case 7:
        echo 'Weekend' . '</br>';
        break;
    default:
        echo 'Unknown day' . '</br>';
        break;
}

/*Задача 5:
 Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5*/

$array = range(1, 10000);
foreach ($array as $value) {
    if ($value < 10000 && strpos($value, '3') && $value % 5) {
        echo $value . '</br>';
    }
}

/*Задача 6:
 Используя куки выводите информацию о количестве посещений и дате последнего посещения.*/
if(isset($_COOKIE['lastVisit'])) {
    echo 'Last visit ' . $_COOKIE['lastVisit'] . '</br>';
} else {
    echo 'This is first visit ' . '</br>';
}
echo "Number of your visit $counter" . '</br>';
?>