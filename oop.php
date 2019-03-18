<?

    class Car{
        private $carColor;
        private $carBrand;
        private $carProducet;
        private $carEngine;

        # Construction of object with checking of type Engine;
        # If $ngine is't class of Eninge program will stop running;
        public function __construct($color, $brand, $producet, anotherEngine $engine){
            $this->carColor=$color;
            $this->carBrand=$brand;
            $this->carProducet=$producet;
            $this->carEngine=$engine;
        }

        # Start Engine;
        public function StartEngine(){
            $this->carEngine->on();
        }

        # Stop Engine;
        public function StopEngine(){
            $this->carEngine->off();
        }

        # Calculate range in km;
        public function range($distance_km){

        }

        # Change car color;
        public function changeColor($newColor){
            $this->carColor=$newColor;
        }

        # Show car details;
        public function carDetails($tempVarr){
            if($tempVarr == "Color"){
                return $this->carColor;
            }
            if($tempVarr == "Brand"){
                return $this->carBrand;
            }
            if($tempVarr == "Producet"){
                return $this->carProducet;
            }
            #unset($tempVarr);
            #var_dump($tempVarr);
        }
    }

    class Engine{
        public function on(){

        }

        public function off(){
            
        }
    }

    class anotherEngine{
        public function on(){

        }

        public function off(){
            
        }
    }
    
    $Engine = new Engine;

    $Passat = new Car("black","VolksWagen", 2002, $Engine);
    $Passat->StartEngine();
    

    $Lanos = new Car("red","Daewoo", 2004);
    var_dump($Lanos);
    $Lanos->changeColor("blue");
    echo "<br>".$Lanos->carDetails("Color");
    echo "<br>".$Lanos->carDetails("Brand");
    echo "<br>".$Lanos->carDetails("Producet");

    class Animal{
        public $name;
        private $color;
        protected $weight;

        public function makeSound(){
            
        }

        public function move(){

        }
    }

    class Cat extends Animal{

    }
    
    $myCat = new Cat;
    $myCat->move();
    
    trait Greetings{
        
        public function sayHi(){
            $this;
            echo "Hi";
        }
        public function greetPerson(){
            $personName = $this->personName;
            echo "Wellcome".'&nbsp'.$personName;
        }
    }

    class Person{
        public $personName;
        public $personAge;
        use Greetings;

        public function __construct($name, $age){
            $this->personName=$name;
            $this->personAge=$age;
        }
    }

    $Oleksii = new Person("Oleksii", 34);
    var_dump($Oleksii);
    $Oleksii->greetPerson();
?>