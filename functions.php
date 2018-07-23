<?php
/**
 * @param $arraySort non sorted array
 */
function bubbleSort($arraySort, callable $callback = NULL)
{
    $count = sizeof($arraySort) - 1;
    foreach ($arraySort as $key => $value) {
        $end = true;
        foreach ($arraySort as $keySecond => $valueSecond) {
            if ($keySecond == $count) break;
            if ($arraySort[$keySecond] > $arraySort[$keySecond + 1]) {
                list($arraySort[$keySecond], $arraySort[$keySecond + 1]) = [$arraySort[$keySecond + 1], $arraySort[$keySecond]];
                $end = false;
            }
        }
        if ($end) break;
        $count--;
    }
    if ($callback) {
        $arraySort = call_user_func($callback, $arraySort);
    }
    return $arraySort;
}

?>