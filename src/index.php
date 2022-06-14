<?php

    //task 1

    $a = 19;
    $b = 19;
    $c = -3;

    if ($a >= $b && $a >= $c){
        echo $a;
    }else if ($b >= $a && $b >= $c){
        echo $b;
    } else {
        echo $c;
    }

    echo "<br>";

    //task 2

    if ($a == $b || $a == $c || $b == $c){
        echo 'Ошибка';
    } else{
        echo ($a + $b + $c) / 3;
    }

    echo "<br>";

    //task 3

    $x = -5;
    $y = 3;

    if ($x == 0 || $y == 0){
        echo "Не лежит в какой-либо четверти";
    } else if ($x > 0){
        if ($y > 0){
            echo "Лежит в I четверти";
        } else {
            echo "Лежит в IV четверти";
        }
    } else{
        if ($y > 0){
            echo "Лежит в II четверти";
        } else {
            echo "Лежит в III четверти";
        }
    }