<?php
/**
Создать класс User со свойствами login, password, email, rating. По умолчанию значение рейтинга задать нулевым.
 */
class User
{
    public $login;
    protected $password;
    public $email;
    public $rating = 0;
}