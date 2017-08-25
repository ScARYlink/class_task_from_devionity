<?php
/*
Изменить область видимости свойств класса User на protected.
Унаследовать от класса User классы Manager, Admin.
Создать объекты менеджера и админа, задать значения для свойств объектов.
 */

class User
{
    protected $login = "";
    protected $password;
    protected $email;
    protected $rating = 0;
    protected $isLogged = false;

    public function login() {
        $this->isLogged=true;
        echo "<br>"."success login my lord "."$this->login"."<br>";
    }

    public function logout() {
        $this->isLogged=false;
        echo "bye for now";
    }
}
class Manager extends User {

}
class Admin extends User {

}
$manager = new Manager;
$admin = new Admin;
//$manager->login = 'Carlson';