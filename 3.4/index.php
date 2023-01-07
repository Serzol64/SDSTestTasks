<?php

file_put_contents(__DIR__ . '/1.txt', 'Привет из Саратова!');
echo 'Запись в первый файл - УСПЕШНО!<br />';

rename(__DIR__ . '/2.txt', __DIR__ . 'test.txt');
echo 'Переименование второго файла - УСПЕШНО!<br />';


unlink(__DIR__ . '/3.txt');
echo 'Удаление третьего файла - УСПЕШНО!<br />';

if(mkdir(__DIR__ . 'test', 0777, true) && rename(__DIR__ . '/4.txt', __DIR__ . '/test/4.txt')){ $state  = 'УСПЕШНО!'; }
else{ $state = 'ОШИБКА!!!'; }
echo 'Создание каталога и перемещение туда четвёртого файла - ' . $state;

if(file_exists(__DIR__ . '/5.txt')){ $state = 'УСПЕШНО!'; }
else{ $state = 'ОШИБКА!!!'; }

echo 'Проверка существования пятого файла - ' . $state;
?>
