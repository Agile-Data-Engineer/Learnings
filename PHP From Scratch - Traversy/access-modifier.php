<?php


class User
{

    public $name;
    public $email;
    private $status;

    public function __construct($name, $email, $status)
    {
        $this->name   = $name;
        $this->email  = $email;
        $this->status = $status;

        echo 'ECHO => ' . $this->name . ' ' . $this->email . ' ' . $this->status . '</br>';
    }

    public function login()
    {
        echo $this->name . " is logged in";
    }

    public function getStatus()
    {
        return $this->status;
    }
}


$user1 = new User('Jane Doe', 'jane.doe@email.com', 'active');
echo 'User 1 => ' . $user1->getStatus() . '</br>';

$user2 = new User('John Dow', 'john.dow@yahoo.com', 'inactive');
echo 'User 2 => ' . $user2->getStatus() . ' ' . '</br>';

//echo $user1->status.' '.$user2->status.'</br>';
//echo $user1->getStatus().' '.$user2->getStatus();

//$user1 = new User('Jane Doe', 'jane.doe@email.com', 'active');
//$user2 = new User('John Dow', 'john.dow@yahoo.com', 'inactive');
