<?
    class Car {
        public $color = "white";
        public $wheel = "16";
        public $brand = "BMW";
        public $speed = 160;
        public $fuel = "gas";

        public function test(){
            echo 'Test function';
        }
    }

    $car1 = new Car;
    $car1->color="red";
    $car1->wheel="17";
    $car1->brand="Lanos";
    $car1->speed=220;
    $car1->fuel="Electric";
    $car1->test();


    $car2 = new Car;
    $car2->color="blue";
    $car2->wheel="21";
    $car2->brand="Audi";
    $car2->fuel="Electric";
    $car2->test();

    $car3 = new Car;
    echo '<pre>';
    var_dump($car1);
    var_dump($car2);
    
    
?>