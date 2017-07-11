<?php
/**
 * Created by PhpStorm.
 * User: Dasha
 * Date: 11.07.2017
 * Time: 22:38
 */
// Задание №1
$name = 'Дарья';
$age = "37";
echo "<h1>Домашнее задание №1</h1><h2>Задание #1</h2>";
echo 'Меня зовут: ', $name, '<br>';
echo 'Мне ', $age, ' лет<br>';
echo '"!|\\/\'"\\';

// Задание №2
echo "<h2>Задание #2</h2>";
$pictures = 80;
$marker_pictures = 23;
$pen_pictures = 40;
$paints_pictures =  $pictures - ($marker_pictures + $pen_pictures);
echo "<strong>Дано:</strong><br>";
echo "На школьной выставке ", $pictures, " рисунков. ",$marker_pictures ," из них выполнены фломастерами, "
, $pen_pictures," карандашами, а остальные - красками.<br>";
echo "
    <strong>Найти:</strong>
    <br>Сколько рисунков, выполненные красками, на школьной выставке?<br>
    <strong>Решение:</strong>
    <br>Всего красками на школьной выставке выполнено ",$paints_pictures," рисунков 
    <br><br><strong>Ответ:</strong> всего красками на школьной выставке выполнено",$paints_pictures," рисунков" ;

// Задание №3
echo "<h2>Задание #3</h2>";
define('G', 9.8);
if (defined('G') == true) {
    echo "Константа G объявлена!<br>";
}
echo "Константа G равна ", G;
define('G', 10.8);
echo "<br>Константа G равна - попытка переопределения ", G;


// Задание №4
echo "<h2>Задание #4</h2>";
$age = 100;
if ($age>=18 and $age<=65) {
    echo "Вам еще работать и работать!";
} elseif ($age>65) {
    echo "Вам пора на пенсию";
} elseif ($age>=1 and $age<=17) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}

// Задание №5
echo "<h2>Задание #5</h2>";
$day = 7;
switch (true) {
    case ($day >= 1) and ($day <= 5):
        echo "Это рабочий день";
        break;
    case ($day == 6) or ($day == 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

// Задание №6
echo "<h2>Задание #6</h2>";
$bmv["model"] = "X5";
$bmv["speed"] = 120;
$bmv["doors"] = 5;
$bmv["year"] = 2015;
$toyota["model"] = "Corolla";
$toyota["speed"] = 120;
$toyota["doors"] = 4;
$toyota["year"] = 2016;
$opel["model"] = "Astra";
$opel["speed"] = 100;
$opel["doors"] = 4;
$opel["year"] = 2012;
$cars["bmv"] = $bmv;
$cars["toyota"] = $toyota;
$cars["opel"] = $opel;
foreach ($cars as $key => $vol) {
    echo "CAR ", $key, "<br>";
    echo $cars[$key]['model'], "-";
    echo $cars[$key]['speed'], "-";
    echo $cars[$key]['doors'], "-";
    echo $cars[$key]['year'], "<br><br>";
}

// Задание №7
echo "<h2>Задание #7</h2>";
echo "<h3>Таблица умножения 10*10</h3>";
echo "<table border=\"1\">";
for ($i = 0; $i<10; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++) {
        $multiple = ($i+1)*($j+1);
        $mod_i = $i % 2;
        $mod_j = $j % 2;
        if ($mod_i==0 and  $mod_j==0) {
            echo "<td>(",$multiple, ")</td>";
        } elseif ($mod_i<>0 and  $mod_j<>0) {
            echo "<td>[",$multiple, "]</td>";
        } else {
            echo "<td>",$multiple, "</td>";
        }
    }
    echo "</tr>";
}
echo "<table>";

// Задание №8
echo "<h2>Задание #8</h2>";
$str = "Привет меня зовут Дарья и я уже долго делаю эту домашнюю работу эту";
echo $str,"<br>";
$pieces = explode(" ", $str);
$pieces_length = count($pieces);
print_r($pieces);
echo "<br>";
$iterator = $pieces_length - 1;
do {
    echo $pieces[$iterator];
    if ($iterator > 0) {
        echo "<-->";
    }
} while ($iterator-- > 0);