<?php
/*
Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями.
Привести массив к объекту. Проанализировать результат при помощи var_dump.
 */

$arr = ['name'=>'Andrew','email'=>'andy@an.an','message'=>'Hi people'];
$obj = (object)$arr;
var_dump($obj);