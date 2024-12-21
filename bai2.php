<?php 
    class Rectangle {
        private float $width;
        private float $height;

        public function __construct(float $width, float $height) {
            $this -> width = $width;
            $this -> height = $height;
        }

        public function getWidth() : float {
            return $this->width;
        }

        public function getHeight() : float {
            return $this->height;
        }

        public function setWidth(float $width) : void {
            if ($width <= 0) {
                throw new Exception('Width is invalid');
            }
            $this->width = $width;
        }

        public function setHeight(float $height) : void {
            if ($height <= 0) {
                throw new Exception('Height is invalid');
            }
            $this->height = $height;
        }

        public function getArea() : float {
            return $this->width * $this->height;
        }
    }

    $rectangle = new Rectangle(5.2, 10.2);
    echo sprintf("Area rectangle: %s", $rectangle->getArea());
?>