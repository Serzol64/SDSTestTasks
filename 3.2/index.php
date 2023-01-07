<?php

class Worker{
	public $name;
	public $age;
	public $salary;
}

$workerObj = [ new Worker(), new Worker() ];

$workerObj[0]->name = 'Иван';
$workerObj[1]->name = 'Вася';

$workerObj[0]->age = 25;
$workerObj[1]->age = 26;

$workerObj[0]->salary = 1000;
$workerObj[1]->salary = 2000;

$response = 'Сумма возрастов Ивана и Васи составляет: ' . $workerObj[0]->age + $workerObj[1]->age + '\n';
$response .= 'Сумма зарплат Ивана и Васи составляет: ' . $workerObj[0]->salary + $workerObj[1]->salary + '\n';

echo $response;

?>
