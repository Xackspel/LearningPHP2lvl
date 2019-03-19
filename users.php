<?
    interface ShowUserDetails{
        function showUserName();
        function showUserAge();
        function showUserCar();
    }
    abstract class Users{
        private $userName;
        private $userAge;
        private $userCar;

        public function __construct($name, $age, $car){
            $this->userName=$name;
            $this->userAge=$age;
            $this->userCar=$car;
        }

        abstract public function showUserName();
        abstract public function showUserAge();
        abstract public function showUserCar();
    }
?>