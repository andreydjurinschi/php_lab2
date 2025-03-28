﻿# Лабораторная работа №2
### Выполнил Джуринский Андрей I2302

## Часть 1:

![Uslovie](https://i.imgur.com/sk3StES.png)

#### Таблица должна быть создана с использованием условных конструкций:

```php
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Lab02</title>
</head>
<body>
   <table>
      <tr>
         <th>
            №
         </th>
         <th>
            Имя
         </th>
         <th>
            График работы
         </th> 
      </tr>
      <?php $dayOfWeek = date("l"); ?>
      <tr>
         <td>
         1
         </td>
         <td>
         John Styles
         </td>
         <td>
            <?php
            switch ($dayOfWeek) {
               case 'Monday':
                  echo "8:00 - 12:00";
                  break;
               case 'Wednesday':
                     echo "8:00 - 12:00";
                  break;
               case 'Friday':
                     echo "8:00 - 12:00";
                  break;
               default:
                     echo "Не рабочий день";
                  break;
            }
            ?>
         </td>
      </tr>
      <tr>
         <td>
         2   
         </td>
         <td>
            Jane Doe
         </td>
         <td>
         <?php
            switch ($dayOfWeek) {
               case 'Tuesday':
                     echo "12:00 - 16:00";
               break;
               case 'Thursday':
                     echo "12:00 - 16:00";
               break;
               case 'Saturday':
                  echo "12:00 - 16:00";;
               break;
               default:
                     echo "Не рабочий день";
                  break;
            }
            ?>
         </td>
      </tr>
   </table>
</body>
</html>
```

При реализации данного задания я использовал `switch-case`, где switch - проверяет условие, a case - проверяет, если значение совпадает с одним из возможных вариантов, а затем подбирает исполняемый блок кода. В случае, когда условие в `switch` - не совпадает ни с одним знаением из `case`, в работу вступает блок кода `default`.
### Код:
```php <?php $dayOfWeek = date("l"); ?> ``` - инициализация переменной с присвоением значения результата функции `date(l)` (день недели в строковом формате)

другие варианты функции [date()](https://www.w3schools.com/php/func_date_date.asp)

`table`, `tr`, `th`, `td` - html теги для создания таблицы

```php
         <?php
            switch ($dayOfWeek) {
               case 'Tuesday':
                     echo "12:00 - 16:00";
               break;
               case 'Thursday':
                     echo "12:00 - 16:00";
               break;
               case 'Saturday':
                  echo "12:00 - 16:00";;
               break;
               default:
                     echo "Не рабочий день";
                  break;
            }
            ?>
```

## Часть 2:

![Uslovie 2](https://i.imgur.com/XyZ1D27.png)

1. Вывод промежуточный значений на каждом шаге цикла:
```php
<?php
$a = 0;
$b = 0;
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Values on " . $i+1 . " step: a = $a, b = $b<br>"; 
}

echo "End of the loop: a = $a, b = $b<hr>";
```
2. Цикл с оператором `while`:
```php
$a = 0;
$b = 0;
$count = 0;
while($count <= 5){
    $a += 10;
    $b += 5;
    echo "Values on " . $count + 1 . " step: a = $a, b = $b<br>";
    $count++;
}   
echo "End of the loop: a = $a, b = $b<hr>";
```
Использую переменную `count` для подсчета циклов, в конце каждого цикла увеличиваю его на 1, когда `count` станет больше 5, то цикл прервет свою работу

3. Цикл с оператором `do-while`:
```php
$a = 0;
$b = 0;
$count = 0;
do {
    $a += 10;
    $b += 5;
    echo "Values on " . $count + 1 . " step: a = $a, b = $b<br>";
    $count++;
} while ($count <= 5);
echo "End of the loop: a = $a, b = $b<hr>";
```

> В чем разница между циклами for, while и do-while? В каких случаях лучше использовать каждый из них?

Цикл for используется, когда кол-вом итераций нужно манипулировать, либо мы имеем фиксированное кол-во итераций. For используется, когда у нас есть четкий план на каждую итерацию. Условие цикла for проверяется до выполнения цикла.
Пример: перебор массива

Цикл while подходит для случаев, когда кол-во итераций зараннее не известно, условие выполняется до того момента, пока условие остается истинным, как и в цикле for, сначала проверяется условие, потом выполняется сам блок кода
Пример: проект калькулятор, где при вводе строки `выход`, программа завершается

Цикл do-while гарантирует, что блок кода будет выполнен хотя бы один раз, даже если условие будет ложным. Он рекомендуем в случаях, когда сначала цикл должен исполнить свое тело, а уже потом проверить условие

> Как работает тернарный оператор ? : в PHP?
Тернарный оператор аналогичен конструкции `if-else`:
Его шаблон: `<условие> ? <условие если true> : <условие если false>`
Пример: функиця flipFlop(), которая принимает на вход строку и, если эта строка равна 'flip', возвращает строку 'flop'. В противном случае функция должна вернуть 'flip'.
```php
function flipflop($str){
    return ($str === "flip") ? "flop" : "flip";
}
```

> Что произойдет, если в do-while поставить условие, которое изначально ложно?

Цикл сработает только 1 раз

