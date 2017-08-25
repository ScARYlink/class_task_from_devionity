<?php
/*
    В класс Car из предыдущих заданий добавить private свойство price, а также публичные геттер и сеттер для него.
Геттер должен зависеть от одного параметра.
    В зависимости от того, было ли в функцию геттера передано true, выводить отформатированную цену,
либо же в обычном виде (использовать функцию number_format).
Сеттер должен приводить входящий параметр к числу, у которого не более 2 знаков после запятой (использовать round).
 */

class Car {
    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;

    public function showBrand() {
        echo $this->brand;
    }
    public function showModel() {
        echo $this->model;
    }

    public function set($price) {
        switch ($price) {
            case (is_integer($price)):
                $this->price = $price;
                break;
            case (is_float($price)):
                $this->price = $price;
                echo round($price, 2);
                break;
            default: echo "stupid!";
        }
    }

    public function get() {
        return $this->price;

    }
}
$car1 = new Car;
$car1->brand = 'Toyota';
$car1->model = 'Corolla';
$car1->year = 2000;
$car1->showBrand();
$car1->showModel();

$car1->set(234.345);

