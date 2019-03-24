<?
    # Car class;
    class Car{
        private $carBrand;
        private $carModel;
        private $carType;
        private $carColor;
        private $carYear;

        public function __construct($brand, $model, $type, $color, $year){
            $this->updateCarBrand($brand);
            $this->carType=$type;
            $this->carColor=$color;
            $this->carYear=$year;
        }

        public function ShowCarDetails(){
            echo "Brand:"."&nbsp".$this->carBrand."<br>";
            echo "Model:"."&nbsp".$this->carModel."<br>";
            echo "Type:"."&nbsp".$this->carType."<br>";
            echo "Color:"."&nbsp".$this->carColor."<br>";
            echo "Year:"."&nbsp".$this->carYear."<br>";
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
    }

    # New object of car class;
    $myCar = new Car("Daewoo", "Lanos", "Sedan", "Red", 2004);
    $myCar->ShowCarDetails();
    $myCar->UpdateCarBrand("Chevrolet");
    $myCar->ShowCarDetails();


?>