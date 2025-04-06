<?php

class User
{

    public $name;
    public $email;
    public $status;

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
        echo 'CONSTRUCTOR  ' . $this->name . ' ' . $this->email . ' ' . $this->status . ' ' . $this->level;
    }
}
$admin2 = new Admin('Jane Doe', 'jane.doe@email.com', 'active', 5);
