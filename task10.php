<?php
/*Задача 10:
 Написать функцию сортировки пузырьком, с возможностью доп. фильтрации результатов с помощью callback функции*/
include 'functions.php';
$arraySort = [2, 4, -1, -4, -7, 6, 12, 15, 9, 11];
echo 'Array sorted without callback' . '</br>';
foreach (bubbleSort($arraySort) as $value) {
    echo $value . '</br>';
}

$arraySortWithCallback = (bubbleSort($arraySort, function ($arrayCallback) {
    $array = [];
    foreach ($arrayCallback as $value) {
        if (!($value % 2)) {
            $array[] = $value;
        }
    }
    return $array;
}));
echo 'Array sorted with callback' . '<br>';
foreach ($arraySortWithCallback as $value) {
    echo $value . '</br>';
}
?>

