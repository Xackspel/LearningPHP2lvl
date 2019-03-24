<?
    # Car class;
    class Car{
        private $carBrand;
        private $carModel;
        private $carType;
        private $carColor;
        private $carYear;

        public function __construct($brand, $model, $type, $color, $year, Engine $engine){
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

    # Create Engine
    class Engine{
        public $engineValue;
        public $enginePower;

        public function __construct($value, $power){
            $this->engineValue=$value;
            $this->enginePower=$power;
        }

        public function On(){
            echo "The engine have been started<br>";
        }
        public function Off(){
            echo "The engine have been stoped<br>";
        }

        public function ShowEngineDetails(){
            $value = $this->engineValue;
            $power = $this->enginePower;
            echo "Engine Valuse is: $value<br>Engine Power is: $power";
        }
    }

    $A16DMS = new Engine(1.6, 106);

    # New object of car class;
    $myCar = new Car("Daewoo", "Lanos", "Sedan", "Red", 2004, $A16DMS);
    $myCar->ShowCarDetails();
    $myCar->UpdateCarBrand("Chevrolet");
    $myCar->ShowCarDetails();
    $myCar->StartEngine();
    $myCar->StopEngine();
    


?>