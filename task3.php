<?php
/*
Для класса User из предыдущего занятия создать методы login(), logout(),
которые просто выводят на экран соответствующее сообщение.
Создать экземпляр класса, вызвать созданные методы.
 */

class User
{
    public $login;
    protected $password;
    public $email;
    public $rating = 0;
    public function login(){
        echo "success login!"."<br>";
    }
    public function logout(){
        echo "bye for now";
    }
}
$andrew = new User;
$andrew->login();
$andrew->logout();