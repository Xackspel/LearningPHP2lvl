<?

    class Car{
        private $carColor;
        private $carBrand;
        private $carProducet;

        public function __construct($color, $brand, $producet){
            $this->carColor=$color;
            $this->carBrand=$brand;
            $this->carProducet=$producet;
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
            var_dump($tempVarr);
        }
    }

    $Lanos = new Car("red","Daewoo", 2004);
    $Lanos->changeColor("blue");
    echo "<br>".$Lanos->carDetails("Color");
    echo "<br>".$Lanos->carDetails("Brand");
    echo "<br>".$Lanos->carDetails("Producet");
    
    

?>