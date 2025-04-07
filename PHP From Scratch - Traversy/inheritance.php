<?php

class User
{

    public $name;
    public $email;
    protected $status;

    public function __construct($name, $email, $status)
    {
        $this->name   = $name;
        $this->email  = $email;
        $this->status = $status;

        echo 'CONSTRUCTOR  ' . $this->name . ' ' . $this->email . ' ' . $this->status . '</br>';
    }
}

class Admin extends User
{
    public $level;

    public function __construct($name, $email, $status, $level)
    {
        $this->level = $level;
        parent::__construct($name, $email, $status);
        echo 'CONSTRUCTOR  ' . $this->name . ' ' . $this->email . ' ' . $this->status . ' ' . $this->level . '</br>';
    }

    public function getStatus()
    {
        return $this->status;
    }
}
$admin2 = new Admin('Jane Doe', 'jane.doe@email.com', 'active', 5);
$retStatus = $admin2->getStatus();
echo $retStatus . '</br>';
$user3 = new User('John Doe', 'john.doe@email.com', 'inactive');
$admin3 = new Admin('John Doe', 'john.doe@email.com', 'active', 4);
var_dump($admin3);
