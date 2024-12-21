<?php 
    class Circle {
        // Dung trong class
        //private const MY_PI = 3.14; 

        // Dung ngoai class
        public const MY_PI = 3.14;

        private float $radius;

        public function __construct(float $radius) {
            $this -> radius = $radius;
        }

        public function getArea() : float {
            // return round(pi() * $this->radius * $this->radius, 2);
            return self::MY_PI * $this->radius * $this->radius; // Dung trong class
        }

        public function setRadius(float $radius) : void {
            if ($radius <= 0) {
                throw new Exception("Radius is invalid");
            }
            $this -> radius = $radius;
        }
    }

    $circle = new Circle(5.2);
    echo sprintf("Area circle: %s<br>", $circle->getArea());
    echo Circle::MY_PI; // Dung ngoai class
?>