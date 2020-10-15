<?php

require __DIR__ . "/../vendor/autoload.php";

use pablovf\model\tests\Person;
use pablovf\model\tests\PersonDAO;
use pablovf\model\Connection;

$conn = new Connection("mysql", [
    "host"=>"localhost",
    "dbname"=>"julius",
    "user"=>"julius",
    "password"=>"123"
    ]);

var_dump($conn->getConnection());

$person = new Person(["nome"=>"pablo", "email"=>"vazsk8@gmail.com"]);
$personDAO = new PersonDAO();

echo $person->toJSON();