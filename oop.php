<?

    class Car{
        public $carColor;
        public $carBrand;
        public $carProducet;

        public function __construct($color, $brand, $producet){
            $this->carColor=$color;
            $this->carBrand=$brand;
            $this->carProducet=$producet;
        }
    }

    $Lanos = new Car("red","Daewoo", 2004);

    $test=['alfa','beta', 'gamma'];
    var_dump($Lanos, $test);

    echo $Lanos->carColor;

?>