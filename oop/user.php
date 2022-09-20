<?php 
class User
{
    protected $email;
    public $name;
    public $role = "user";
    public function __construct($email, $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function add_friend()
    {
        return $this->email. " is your new frined";
    }
    //Getter
    public function getEmail()
    {
        return $this->email;
    }
    //Setter
    public function setEmail($email)
    {
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }

    }
    public function message()
    {
        return "$this->email from user send a message";
    }

    //Descruct method

    public function __destruct()
    {
        echo "$this->name should removed";
    }
    
}

class AdminUser extends User
{
    public $level;
    public $role = "admin";

    public function __construct($email, $name, $level)
    {
        $this->level = $level;
        parent:: __construct($email, $name);
    }

    public function message()
    {
        return "$this->email from user send a message";
    }

}

$userOne = new User("utpal.uoda@gmail.com", "Utpal Biswas");
$userTwo = new User("cbb.cybridge@gmail.com", "Riaft Chowdhory");

$adminUser = new AdminUser("cbb.ub@gmail.com", "UB", 5);

//echo $userTwo->add_friend();
//$userOne->setEmail('ub@yopmail.com');
//echo $userOne->getEmail();
//echo $adminUser->add_friend();

// echo $userOne->message()."<br>";
// echo $adminUser->getEmail()."<br>";
// echo $adminUser->message()."<br>";


//Static Property and methods

class Weather 
{
    public static $tempconditoin = ['cold', 'mild','hot'];

    public static function tempConvertInToCelcias($c)
    {
        return $c * 6/7 * 32;
    }

}
print_r(Weather::$tempconditoin);



?>