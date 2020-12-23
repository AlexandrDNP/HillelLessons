<?php
/*
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

function myCounter(array $firstArr1)
{
    $counter = 1;
    foreach ($firstArr1 as $key => $value) {
        if (is_array($value)) {
            myCounter($value);
        } else {
            if ($counter == 2) {
                var_export($value);
                echo "</br>";
            }
        }
        $counter++;
    }
}

myCounter($firstArr1);


$arr = [
    '1' => 10,
    '2' => [
        '1' => 20,
        '2' => 30,
        '3' => 10,
    ],
    '3' => 20,
];

function arSumm(array $arr): int
{
    return array_sum($arr);
}

echo arSumm($arr);

function arSumRec (array $arr): int
{
    $sum = arSumm($arr);
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $sum += arSumRec($value);
        }
        $sum = function ($value)
    }
    return $sum;
}


function test($a = 10)
{
    return $a;
}

function test1($b)
{
    echo test($b);
}
test1('world');


class A
{
    public $str = 'свойство';
    protected $int = 10;
    private $private = 'Don`t touch';
    public function getPrivate()
    {
        return $this->private;
    }
    public function setPrivate($str)
    {
        $this->private = $str;
    }

}

$objA = new A;
$objB = new A;
var_export (new A);
echo'<br>';
var_export ($objA->str);
echo'<br>';
var_export ($objA->str);
echo'<br>';
var_export ($objA->getPrivate());
$objA->setPrivate('New str');
echo'<br>';
var_export ($objA->getPrivate());
echo'<br>';
var_export ($objB->getPrivate());
echo'<br>';

class B extends A
{

}

class C extends A
{
    public function getInt()
    {
    return $this->int;
    }
    protected $private = 20;
    public function getPrivate()
    {
        return $this->private;
    }

}
$objC = new C;
var_export ($objC->str);
echo'<br>';
var_export ($objC->getPrivate());
echo'<br>';
var_export ($objC->getInt());
echo'<br>';
var_export ($objC->getPrivate());
echo'<br>';
Class D extends C
{
    public function getPrivate()
    {
        return $this->private;
    }
}
$objD = New D;
var_export ($objD->getPrivate());

Class Parents
{
    private $b = 15;
    private $a = 20;
    public function getPrivate()
    {
        $this->$a;
        $this->$b;
    }
    public function setPrivate()
    {
        $this->$a;
        $this->$b;
    }
}

Class Childe extends Parents
{

}
$objC 
echo'<br>';
echo $c = $a*$b;

*/

