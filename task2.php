<?php
/*
Создать класс Car. Записать в этот класс свойства brand, model, year, driver.
Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) .
В рамках предыдущего задания со здать экземпляры класса User для нескольких пользователей системы.
В свойство driver объектов класса Car записать объекты класса User.
Вывести объекты класса Car на экран при помощи var_dump(), print_r()
 */

class Car {
    public $brand;
    public $model;
    public $year;
    public $driver;
}
$car1 = new Car;
$car2 = new Car;
$car3 = new Car;

$car1->brand = 'Toyota';
$car1->model = 'Corolla';
$car1->year = 2000;

$car2->brand = 'Mazda';
$car2->model = 6;
$car2->year = 2015;

$car3->brand = 'Ford';
$car3->model = 'Taurus';
$car3->year = 1995;

var_dump($car1);