<?php
// ************************** Цикл **************

for ($i = 0; $i <= 10; $i ++ ) {
    echo $i.' ';
}

echo "\n\n";

for ($i = 20; $i >= 0; $i --){
    echo $i.' ' ;
}

echo "\n\n";

for ($col = 'A'; $col != 'AA'; $col ++){
    echo $col.' ' ;
}
echo "\n\n";

for ($i = 50; $i <= 100; $i = $i + 10){
    if ($i === 80){
        break; // ПОЛНОСЬЮ ОСТАНОВИТЬСЯ НА ЭТОМ
    }
    echo $i.' ' ;
}
echo "\n\n";

$out = ' ';
for ($i = 50; $i <= 100; $i = $i + 10){
    if ($i === 80){
        continue; // ПРОПУСТИТЬ КОМАНДУ ТЕКУЩЕЙ ИТЕРАЦИИ ЦИКЛА 
    }
    echo $out = $i.' ' ;
}

echo $out;

// накопление 

echo "\n\n";




