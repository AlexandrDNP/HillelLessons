<?php
$arr = array(1, 2, 3, 7, 31, 4, 1, 8, 6);
//посчитать длину массива
echo count($arr);
echo '<br>';
//переместить первые 4 элемента массива в конец
$arr01 = array_splice($arr,4,5);
$arr02 = array_splice($arr,0,4);
$moving = array_merge($arr01, $arr02);
var_dump($moving);
echo '<br>';
//получить сумму 4,5,6 элемента
$arr = array(1, 2, 3, 7, 31, 4, 1, 8, 6);
print_r(array_sum(array_slice($arr, 4,-2)));
echo '<br>';

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
$result1 = array_diff_assoc($secondArr,$firstArr);
print_r($result1);
//найти все элементы которые присутствую в первом и отсутствуют во втором
$result2 = array_diff_assoc($firstArr,$secondArr);
print_r($result2);
//найти все элементы значения которых совпадают
$result3 = array_intersect($firstArr, $secondArr);
print_r($result3);
//найти все элементы значения которых отличается


//получить все вторые элементы вложенных массивов
$firstArr1 = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];
//получить общее количество элементов в массиве
print_r(count($firstArr1,COUNT_RECURSIVE));
//получить сумму всех значений в массиве
?>
