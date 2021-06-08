<?php 

// class Cars {

// public $wheel_count;


// }


// $bmw = new Cars();

// $bmw->wheel_count = 4;

// $honda = $bmw;

// $honda->wheel_count = 23;

// echo $bmw->wheel_count;


// echo "<br>";
// $a = $bmw;
// echo $a->wheel_count;
// echo "<br>";
// $b = $a;
// echo $b->wheel_count;
// echo "<br>";

// $c = $bmw;
// echo $c->wheel_count;
// echo "<br>";
// $d = $bmw;
// echo $d->wheel_count;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


// $x = clone $bmw;
// // $x2 = $bmw;
// $x2 = clone $bmw;
// echo $x->wheel_count;
// echo "<br>";
// echo $x->wheel_count = 20;
// echo "<br>";
// echo $x2->wheel_count;
// echo "<br>";
// echo $x2->wheel_count= 34;
// $ferrari = clone $bmw;

// echo $ferrari->wheel_count;

// echo "<br>";


// $ferrari->wheel_count = 10;

// echo $bmw->wheel_count;
// echo "<br>";

// echo $ferrari->wheel_count;





class myclass
{
    public function test() { return 'level 1'; }
}
class myclass2 extends myclass
{
    public function test() { return parent::test() . '-level 2'; }
}
class myclass3 extends myclass2
{
    public function test() { return myclass::test() . '-level 3'; }
}
$example = new myclass3();
echo $example->test();



 ?>