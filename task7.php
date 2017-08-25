<?php
/*Унаследовать от класса Car из предыдущих занятий класс WaterCar со свойством waterSpeed.
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

class WaterCar extends Car {
    public $waterSpeed;
}