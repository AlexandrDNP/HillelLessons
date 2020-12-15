<?php
//1.    Создать родительский (главный класс)+
//2.    Класс должен содержать 2 свойства+
//3.    Каждое свойство должно иметь геттеры и сеттеры+
Class ParentGen
{
    protected int $one = 100;
    protected int $two = 200;
    public function setOne($one)
    {
        $this->one = $one;
    }
    public function setTwo($two)
    {
        $this->two = $two;
    }
       public function getOne()
    {
        return $this->one;
    }
    public function getTwo()
    {
        return $this->two;
    }
}
$ParentGen = New ParentGen;

//1.    Создать 3 наследника родительского класса +
//2.    Каждый наследник должен содержать одно свойство   +
//3.    Каждое свойство должно иметь геттер и сеттер  +
//4.    Наследники должны реализовать по одному методу который выполняет
//      одно математическое действие с данными родителя и своими данными    +
//5.    Один наследник не должен быть наследуемым +
//6.    Один из наследников должен содержать абстрактную функцию возведения в степень   +
abstract class Heir1 extends ParentGen
{
    public int $h1 = 20;
    public function getPg1()
    {
        return $this->h1;
    }
    public function setPg1(int $h1)
    {
        $this->h1 = $h1;
    }
    abstract function mathH1ParentGen();
    abstract function power();
}
////$heir1->New Heir1;
echo '<br>';
//$heir1->mathH1ParentGen();

Class Heir2 extends ParentGen
{
    public int $h2 = 30;
    public function getPg2()
    {
        return $this->h2;
    }
    public function setPg2(int $h2)
    {
        $this->h2 = $h2;
    }
    public function mathH2ParentGen()
    {
        echo $this->one * $this->h2;
    }
}
$heir2 = New Heir2();
echo '<br>';
$heir2->mathH2ParentGen();

Final Class Heir3 extends ParentGen
{
    public int $h3 = 50;
    public function getPg3(): int
    {
        return $this->h3;
    }
    public function setPg3(int $h3)
    {
        $this->pg3 = $h3;
    }
    public function mathH3ParentGen()
    {
        echo $this->one + $this->h3;
    }
}
$heir3 = New Heir3();
echo '<br>';
$heir3->mathH3ParentGen();

//1.    Создать по 2 наследника от наследников первого уровня   +
//2.    Каждое свойство должно иметь геттер и сеттер    +
//3.    Наследники должны реализовать по одному методу который выполняет
//      одно математическое действие с данными родителя и своими данными +
//4.    И по одному методу который выполняет любое математическое действие со свойством
//      корневого класса и своим свойством  +
//5.    В случае если реализован наследник класса содержащего абстрактную функцию то
//      класс должен содержать реализацию абстракции    +

Class Heir11 extends Heir1
{
    public int $h11 = 10;
    public function getH11()
    {
        return $this->h11;
    }
    public function setH11(int $h11)
    {
        $this->h11 = $h11;
    }
    public function mathH11H1()
    {
        echo $this->h1 + $this->h11;
    }
    public function mathH11PG()
    {
        echo $this->one + $this->h11;
    }
    public function mathH1ParentGen()
    {
        echo $this->one + $this->h1;
    }
    function power()
    {
        echo pow($this->h1,$this->h11);
    }
}
$heir11 = New Heir11();
echo '<br>';
$heir11->mathH11H1();
echo '<br>';
$heir11->mathH11PG();
echo '<br>';
$heir11->power();
echo '<br>';
$heir11->mathH1ParentGen();
Class Heir111 extends Heir1
{
    public int $h111 = 20;
    /*
     * @return int
     */
    public function getH111()
    {
        return $this->h111;
    }
    public function setH111(int $h111)
    {
        $this->h111 = $h111;
    }
    public function mathH111H1()
    {
        echo $this->h1 * $this->h111;
    }
    public function mathH111PG()
    {
        echo $this->one / $this->h111;
    }
    public function mathH1ParentGen()
    {
        echo $this->one / $this->h1;
    }
    function power()
    {
        echo pow($this->h1,$this->h111);
    }
}
$heir111 = New Heir111();
echo '<br>';
$heir111->mathH111H1();
echo '<br>';
$heir111->mathH111PG();
echo '<br>';
$heir111->power();
echo '<br>';
$heir111->mathH1ParentGen();
Class Heir21 extends Heir2
{
    public int $h21 = 15;

    public function getH21()
    {
        return $this->h21;
    }

    public function setH21(int $h21)
    {
        $this->h21 = $h21;
    }
    public function mathH21H1()
    {
        echo $this->h2 / $this->h21;
    }
    public function mathH21PG()
    {
        echo $this->one * $this->h21;
    }
}

$heir21 = New Heir21();
echo '<br>';
$heir21->mathH21H1();
echo '<br>';
$heir21->mathH21PG();
Class Heir211 extends Heir2
{
    public int $h211 = 25;

    public function getH211()
    {
        return $this->h211;
    }

    public function setH211(int $h211)
    {
        $this->h211 = $h211;
    }
    public function mathH211H1()
    {
        echo $this->h2 * $this->h211;
    }
    public function mathH211PG()
    {
        echo $this->one * $this->h211;
    }
}
$heir211 = New Heir211();
echo '<br>';
$heir211->mathH211H1();
echo '<br>';
$heir211->mathH211PG();