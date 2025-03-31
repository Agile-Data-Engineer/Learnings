<?php

class User1
{
    public $name1;
    public $email1;

    public function __construct()
    {
        echo 'Constructor ran...</br>';
    }

    public function login()
    {
        echo 'You are logged in.</br>';
    }
}

$user1 = new User1();

$user1->name1  = 'John Doe';
$user1->email1 = 'john@email.com';
$user1->login();
var_dump($user1);





class User2
{
    public $name2;
    public $email2;

    public function __construct($name2, $email2)
    {
        $this->name2  = $name2;
        $this->email2 = $email2;

        echo "Constructor ran for $name2" . '</br>';
    }

    public function login()
    {
        echo ' You are logged in';
    }
}

$user2 = new User2('Jane Doe', 'jane@email.com');
$user2->login();
var_dump($user2);
