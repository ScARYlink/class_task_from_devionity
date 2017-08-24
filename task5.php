<?php
/*
    В класс Car из предыдущих заданий добавить методы showBrand(), showModel()
которые выводят на экран значения свойств brand, model соответственно.
    В класс User из предыдущих заданий добавить свойство isLogged,
которое принимает true, если пользователь успешно авторизировался, и false при выходе из системы.
Задать значения для этого свойства в методах login(), logout().
 */

class User
{
    public $login = "";
    protected $password;
    public $email;
    public $rating = 0;
    public $isLogged = false;

    public function login() {
        $this->isLogged=true;
        echo "<br>"."success login my lord "."$this->login"."<br>";
    }

    public function logout() {
        $this->isLogged=false;
        echo "bye for now";
    }
}

class Car {
    public $brand;
    public $model;
    public $year;
    public $driver;
    public function showBrand() {
        echo $this->brand;
    }
    public function showModel() {
        echo $this->model;
    }
}
$car1 = new Car;
$car1->brand = 'Toyota';
$car1->model = 'Corolla';
$car1->year = 2000;
$car1->showBrand();
$car1->showModel();

$user1 = new User;
$user1->login = 'Andrew';
$user1->email = 'andrew@re.re';
$user1->login();


