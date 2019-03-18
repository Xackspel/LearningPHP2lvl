<?

    class Car{
        private $carColor;
        private $carBrand;
        private $carProducet;
        private $carEngine;

        # Construction of object with checking of type Engine;
        # If $ngine is't class of Eninge program will stop running;
        public function __construct($color, $brand, $producet, EngineInterFace $engine){
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

    interface EngineInterFace{
        public function on();
        public function off();
    }

    class Engine implements EngineInterFace{
        public function on(){

        }

        public function off(){
            
        }
    }

    class anotherEngine implements EngineInterFace{
        public function on(){

        }

        public function off(){
            
        }
    }
    
    $engine = new Engine;
    $anotherEngine = new anotherEngine;

    $Passat = new Car("black","VolksWagen", 2002, $engine);
    $Passat->StartEngine();
    #var_dump($Passat);

    $Lanos = new Car("red","Daewoo", 2004, $anotherEngine);
    #var_dump($Lanos);
    $Lanos->changeColor("blue");
    echo "<br>".$Lanos->carDetails("Color");
    echo "<br>".$Lanos->carDetails("Brand");
    echo "<br>".$Lanos->carDetails("Producet")."<br>";



    abstract class Animal{
        public $animalName;
        public $animalColor;
        public $animalWeight;
        public $animalSound;

        public  function __construct($name, $color, $weight, $sound){
            $this->animalName=$name;
            $this->animalColor=$color;
            $this->animalWeight=$weight;
            $this->animalSound=$sound;
        }

        public abstract function makeSound();
    }

    class Cat extends Animal{
        # some code;
        public  function makeSound(){
            echo $this->$animalSound."<br>";
        }
    }
    
    $myCat = new Cat("murchik", "black", 8, "meow");
    $myCat->makeSound();
    #var_dump($myCat);
    
    trait Greetings{
        
        public function sayHi(){
            $this;
            echo "Hi";
        }
        public function greetPerson(){
            $personName = $this->personName;
            echo "Wellcome".'&nbsp'.$personName."<br>";
        }
        
        public function makeSound(){
            $animalSound = $this->$animalSound;
            echo $animalSound."<br>";
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
    #var_dump($Oleksii);
    $Oleksii->greetPerson();
    $Oleksii->sayHi();
?>