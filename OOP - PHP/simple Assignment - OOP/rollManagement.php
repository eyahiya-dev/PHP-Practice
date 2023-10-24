<?php
// Roll Managment

class User{
    private $name;
    private $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function getUserInfo(){
        return "Name: " . $this->name . PHP_EOL . "Email: " . $this->email . PHP_EOL ;
    }
    
}

class Admin extends User{
    private $roll;
    public function __construct($name, $email, $roll){
        parent::__construct($name, $email);
        $this->roll = $roll;
    }

    public function getAdmin(){
        return "Roll : " . $this->roll;
    }
}

class Editor extends User{
    private $roll;
    public function __construct($name, $email, $roll){
        parent::__construct($name, $email);
        $this->roll = $roll;
    }
    public function getEditor(){
        return "Roll : " . $this->roll;
    }
}





$roll = new Admin('Yahya Mahmud','mahmud@gmail.com','admin');
$editor = new Editor('Hasan Mahmud','hasan@yahoo.com','editor');
echo $roll->getUserInfo();
echo $roll->getAdmin() . PHP_EOL;
echo $editor->getUserInfo();
echo $editor->getEditor();
