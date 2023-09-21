<?php

// ************* Типы данных в PHP ***********//

// 1 tip dannih - celoe chislo
// $a = 5555 == 1 ;
// var_dump($a); // int - целое число


// $q = true;
// var_dump($q);
// echo $q;

// echo("\n\n\n");

// $w = 'choose your power';
// // var_dump($w);
// // echo $w;

// //Функция получения длины строки
// $t = strlen($w); // strlen - показывает сколько символлов с приложении, в слове. 
// echo $t;

// //Concotenation - слепливание двух строк 
// echo ' Bazuem '.$w;

// //************************* Проверить тип данных *********** */
// echo "\n\n\n ======================    Проверить тип данных   ========================= \n\n\n";

// //gettype - возвращает полное название а для дробей возврящает ДАБЛ


// $z = 5;
// echo gettype($z); // integer
// echo "\n";

// $x = 4.5;
// echo gettype($x);//double
// echo"\n";

// $xx = false;
// echo gettype($xx);//boolean
// echo"\n";

// $xxx = 'str123456';
// echo gettype($xxx);//string
// echo"\n";

var_dump(gettype(5.5) === 'double');

$a = 5.0;
echo gettype($a);
echo "\n";

$b = $a **2;
echo $b;
var_dump($b);

echo gettype($b);

// ================= Округление =================
echo "\n\n\n ====================== Округление ========================= \n\n\n";


$a = 5.55;
echo gettype($a);
echo "\n";
$b = round($a);
echo $b;
echo "\n";
echo gettype($b);


// ================= Проверка на тип =================
echo "\n\n\n ====================== Проверка на тип ========================= \n\n\n";
$a = 'true';

var_dump(is_int($a));
// echo(is_int($a)); 1 
var_dump(is_float($a));
var_dump(is_bool($a));
var_dump(is_string($a));