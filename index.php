<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 1 - Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
// Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.

$a = [1,3,-3,null,true,'','0'];
for ($i = 0; $i < count($a); $i++) {
    $var = 'task1result'.($i+1);
    if (!empty($a[$i])) {
        $$var = "a = {$a[$i]} - Верно";
    } else {
        $$var = "a = {$a[$i]} - Неверно";
    }
}


///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 2 - Дано трехзначное число. Поменяйте среднюю цифру на ноль.

$task2num =  $_GET['task2'] ?? 123;
$digit1 = $task2num / 100;
$digit1 = (int) $digit1;
$digit3 = $task2num % 10;
$task2result = $digit1 * 100 + $digit3;

///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 3 - Если переменная $a равна или меньше 1, а переменная $b больше или
// равна 3, то выведите сумму этих переменных, иначе выведите их разность
// (результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0
// и 6, 3 и 5.

$a = [1,3,0];
$b = [6,3,5];
for ($i = 0; $i < count($a); $i++) {
    $var = 'task3result_'.($i+1);
    if ($a[$i] <= 1 && $b[$i] >= 3) {
        $$var = "a = {$a[$i]}, b = {$b[$i]}. Их сумма " . ($a[$i] + $b[$i]);
    } else {
        $$var = "a = {$a[$i]}, b = {$b[$i]}. Их разность " . ($a[$i] - $b[$i]);
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 4 - Дана строка с символами, например, 'abcde'. Проверьте, что первым
// символом этой строки является буква 'a'. Если это так - выведите 'да', в
// противном случае выведите 'нет'.


$task4str = $_GET['task4'] ?? 'abcde';
if ($task4str[0] == 'a') {
    $task4result = "да";
} else {
    $task4result = "нет";
}


///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 5 - Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр
// равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном
// случае выведите 'нет'.

$task5str = $_GET['task5'] ?? 123321;
$task5str = (string) $task5str;
if ($task5str[0]+$task5str[1]+$task5str[2] == $task5str[3]+$task5str[4]+$task5str[5]) {
    $task5result = "да";
} else {
    $task5result = "нет";
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 6 - Разработайте программу, которая определяла количество прошедших
// часов по введенным пользователем градусах. Введенное число может быть от
// 0 до 360.

$task6degrees = $_GET["task6"] ?? 80;
$task6hours = $task6degrees / 30;
$task6hours = (int) $task6hours;
$task6minutes = ($task6degrees % 30) * 2;


///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 7 - Разработайте программу, которая из чисел 20 .. 45 находила те, которые
// делятся на 5 и найдите сумму этих чисел.

$task7result = 0;

for ($i = 20; $i <= 45; $i++) {
    if ($i % 5 == 0) $task7result += $i;
}


///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 8 - Дано пятизначное число. Цифры на четных позициях «занулить».
// Например, из 12345 получается число 10305.

$task8num = $_GET['task8'] ?? 12345;
$digit1 = $task8num / 10000;
$digit1 = (int) $digit1;
$digit3 = $task8num / 100;
$digit3 = (int) $digit3;
$digit3 %= 10;
$digit5 = $task8num % 10;
$task8result = $digit1 * 10000 + $digit3 * 100 + $digit5;

///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 9 - Дано число $num=1000. Делите его на 2 столько раз, пока результат
// деления не станет меньше 50. Какое число получится? Посчитайте
// количество итераций, необходимых для этого (итерация - это проход цикла).
// Решите задачу сначала через цикл while, а потом через цикл for.

$task9resultNum = 1000;
$task9resultIteration = 0;
for (;$task9resultNum >= 50;) {
    $task9resultIteration++;
    $task9resultNum /= 2;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
// ЗАДАНИЕ 10 - Квадрат из символов "*" размерностью n*n

$task10num = $_GET['task10'] ?? 5;
$task10result = '';
for ($i = 0; $i < $task10num; $i++) {
    for ($j = 0; $j < $task10num; $j++) {
        $task10result .= '*';
    }
    $task10result .= '<br />';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second homework</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="site">
        <div class="task task1">
            <h3 class="task-header">ЗАДАНИЕ 1</h3>
            <p class="task-description">
                Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
                Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.
            </p>
            <p class="task-decision">
                <p><?= $task1result1 ?></p>
                <p><?= $task1result2 ?></p>
                <p><?= $task1result3 ?></p>
                <p><?= $task1result4 ?> (тут null)</p>
                <p><?= $task1result5 ?></p>
                <p><?= $task1result6 ?> (тут пустая строка)</p>
                <p><?= $task1result7 ?></p>
            </p>
        </div>
        <div class="task task2">
            <h3 class="task-header">ЗАДАНИЕ 2</h3>
            <p class="task-description">Дано трехзначное число. Поменяйте среднюю цифру на ноль.</p>
            <form action="/" method="GET">
                <input type="number" name='task2' value="<?= $task2num ?>" min="100" max="999"/>
                <button>Получить результат</button>
            </form>
            <p class="task-decision">Число - <?= $task2num ?>, Результат(средняя цифра изменена на ноль) - <?= $task2result ?></p>
        </div>
        <div class="task task3">
            <h3 class="task-header">ЗАДАНИЕ 3</h3>
            <p class="task-description">
                Если переменная $a равна или меньше 1, а переменная $b больше или
                равна 3, то выведите сумму этих переменных, иначе выведите их разность
                (результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0
                и 6, 3 и 5.
            </p>
            <p class="task-decision">
                <p><?= $task3result_1 ?></p>
                <p><?= $task3result_2 ?></p>
                <p><?= $task3result_3 ?></p>
            </p>
        </div>
        <div class="task task4">
            <h3 class="task-header">ЗАДАНИЕ 4</h3>
            <p class="task-description">
                Дана строка с символами, например, 'abcde'. Проверьте, что первым
                символом этой строки является буква 'a'. Если это так - выведите 'да', в
                противном случае выведите 'нет'.
            </p>
            <form action="/" method="GET">
                <input type="text" name='task4' value="<?= $task4str?>" />
                <button>Получить результат</button>
            </form>
            <p class="task-decision">Ответ - <?= $task4result ?>.</p>
        </div>
        <div class="task task5">
            <h3 class="task-header">ЗАДАНИЕ 5</h3>
            <p class="task-description">
                Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр
                равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном
                случае выведите 'нет'.
            </p>
            <form action="/" method="GET">
                <input type="number" name='task5' value="<?= (int) $task5str?>" min="100000" max="999999"/>
                <button>Получить результат</button>
            </form>
            <p class="task-decision">Ответ - <?= $task5result ?>.</p>
        </div>
        <div class="task task6">
            <h3 class="task-header">ЗАДАНИЕ 6</h3>
            <p class="task-description">
                Разработайте программу, которая определяла количество прошедших
                часов по введенным пользователем градусах. Введенное число может быть от
                0 до 360.
            </p>
            <form action="/" method="GET">
                <input type="number" name='task6' value="<?= $task6degrees?>" min="0" max="360"/>
                <button>Получить результат</button>
            </form>
            <p class="task-decision"><?= "Прошло {$task6hours} час(а/ов) {$task6minutes} минут(ы)." ?></p>
        </div>
        <div class="task task7">
            <h3 class="task-header">ЗАДАНИЕ 7</h3>
            <p class="task-description">
                Разработайте программу, которая из чисел 20 .. 45 находила те, которые
                делятся на 5 и найдите сумму этих чисел.
            </p>
            <p class="task-decision">Cумма таких чисел равна <?= $task7result ?>.</p>
        </div>
        <div class="task task8">
            <h3 class="task-header">ЗАДАНИЕ 8</h3>
            <p class="task-description">
                Дано пятизначное число. Цифры на четных позициях «занулить».
                Например, из 12345 получается число 10305.
            </p>
            <form action="/" method="GET">
                <input type="number" name='task8' value="<?= (int) $task8num?>" min="10000" max="99999"/>
                <button>Получить результат</button>
            </form>
            <p class="task-decision">Полученное число <?= $task8result ?></p>
        </div>
        <div class="task task9">
            <h3 class="task-header">ЗАДАНИЕ 9</h3>
            <p class="task-description">
                Дано число $num=1000. Делите его на 2 столько раз, пока результат
                деления не станет меньше 50. Какое число получится? Посчитайте
                количество итераций, необходимых для этого (итерация - это проход цикла).
                Решите задачу сначала через цикл while, а потом через цикл for.
            </p>
            <p class="task-decision"><?= "В итоге получится {$task9resultNum}. Всего итераций {$task9resultIteration}."?></p>
        </div>
        <div class="task task10">
            <h3 class="task-header">ЗАДАНИЕ 10</h3>
            <p class="task-description">Квадрат из символов "*" размерностью n*n</p>
            <form action="/" method="GET">
                <input type="number" name='task10' value="<?= (int) $task10num?>" min="0" max="100"/>
                <button>Получить результат</button>
            </form>
            <p class="task-decision"> <?= $task10result ?> </p>
        </div>
    </div>
    
</body>
</html>