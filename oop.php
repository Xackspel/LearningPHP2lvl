<?
    class Car {
        public $color = "white"; #default parameters;
        public $wheel = "16"; #default parameters;
        public $brand = "BMW"; #default parameters;
        public $speed = 160; #default parameters;
        public $fuel = "gas"; #default parameters;

        # This function receive distance and calculate time trip;
        public function range($km){
            
            $range = $km / $this->speed;
            return $range;
        }
    }

    # Distance
    $distance = 300;

    $car1 = new Car;
    $car1->color="red";
    $car1->wheel="17";
    $car1->brand="Lanos";
    $car1->speed=220;
    $car1->fuel="Electric";
    


    $car2 = new Car;
    $car2->color="blue";
    $car2->wheel="21";
    $car2->brand="Audi";
    $car2->fuel="Electric";
    

    $car3 = new Car;
    $car3->color="black";
    $car3->wheel="15";
    $car3->brand="Mercedes";
    $car3->fuel="Gybrid";
    

    echo '<pre>';
    echo "<br>car1 :".$car1->range($distance);
    echo "<br>car2 :".$car2->range($distance);
    echo "<br>car3 :".$car3->range($distance);
    
    
?>