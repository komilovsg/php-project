<?php

$a = 1000;


//== проверка на равенство - не строгое
//=== проверка на равенство - строгое
//!= не равно
if ($a != 100) {
    echo "Переменная а больше чем 100", "\n";
    echo "=== строгое равенство", "\n";
}

echo $a, "\n";

if ($a != 100) echo "Переменная а больше чем 100", "\n";
if ( $a % 2 === 0 ) echo " Переменная а четная", "\n";
// ------------------------------------------------------------------------------------------

$n = 44;

if ($n % 2 === 0 ){
    echo "true", "\n";
} else {
    echo "false", "\n";
}

$password = "asdfghjkl";
$email = "postgress@google.com";

if (strlen($password) > 8 and strripos($email, '@') !== false) {
    echo "password is OK", "\n";
    echo "email is OK", "\n";
} else {
    echo "password is NOT OK", "\n";
    echo "email in NOT OK", "\n";
}
// ------------------------------ ЕСЛИ ВАРИАНТОВ НЕСКОЛЬКО -------------------------------------
$s = 284;

if ($s < 45) echo "bronze", "\n"; 
elseif ($s < 75) echo "silver", "\n"; 
elseif ($s < 175) echo "gold", "\n"; 
else echo "VIP", "\n"; 