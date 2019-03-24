<?
    # Here I have realized my knowledge of OOP.
    # Car class;

    class Car{
        private $carBrand;
        private $carModel;
        private $carType;
        private $carColor;
        private $carYear;

        public function __construct($brand, $model, $type, $color, $year, EngineInterface $engine){
            $this->updateCarBrand($brand);
            $this->carType=$type;
            $this->carColor=$color;
            $this->carYear=$year;
            $this->carEngine=$engine;
        }

        public function ShowCarDetails(){
            echo "Brand:"."&nbsp".$this->carBrand."<br>";
            echo "Model:"."&nbsp".$this->carModel."<br>";
            echo "Type:"."&nbsp".$this->carType."<br>";
            echo "Color:"."&nbsp".$this->carColor."<br>";
            echo "Year:"."&nbsp".$this->carYear."<br>";
            echo "Engine value:"."&nbsp".$this->carEngine->engineValue."<br>";            
            echo "Engine power:"."&nbsp".$this->carEngine->enginePower."<br>";
            echo "Engine type:"."&nbsp".$this->carEngine->typeEngine."<br>";
        }

        public function UpdateCarBrand($brand){
            if(is_string($brand)){
                $this->carBrand=$brand;
                echo "Car brand have been updated<br>";
            }
            else{
                die("Please enter car color in string format!"); 
            }
        }
        
        public function StartEngine(){
            $this->carEngine->On();
        }
        public function StopEngine(){
            $this->carEngine->Off();
        }
    }

    # Create Engine Interface for different engines
    interface EngineInterface{
        public function On();
        public function Off();
    }

    # Create Engine
    # Class Engine implements interface of class EngineInterface
    abstract class Engine{
        public $engineValue;
        public $enginePower;

        public function __construct($value, $power){
            $this->engineValue=$value;
            $this->enginePower=$power;
        }
        public function ShowEngineDetails(){
            $value = $this->engineValue;
            $power = $this->enginePower;
            echo "Engine Type is: $typeofengine<br>Engine Valuse is: $value<br>Engine Power is: $power";
        }
    }

    class GasEngine extends Engine implements EngineInterface{
        public $typeEngine = "Gas";

        public function On(){
            echo "The Gsas engine have been started<br>";
        }
        public function Off(){
            echo "The Gas engine have been stoped<br>";
        }
    }

    class DieselEngine extends Engine implements EngineInterface{
        public $typeEngine = "Diesel";

        public function On(){
            echo "The Diesel engine have been started<br>";
        }
        public function Off(){
            echo "The Diesel engine have been stoped<br>";
        }
    }


    $A16DMS = new DieselEngine(1.6, 106);

    # New object of car class;
    $myCar = new Car("Daewoo", "Lanos", "Sedan", "Red", 2004, $A16DMS);
    
    $myCar->ShowCarDetails();
    $myCar->UpdateCarBrand("Chevrolet");
    $myCar->ShowCarDetails();
    $myCar->StartEngine();
    $myCar->StopEngine();
    


?>