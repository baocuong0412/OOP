<?php 
    class Person {
        private string $name;
        private int $age;
        private string $gender;

        public function __construct(string $name, int $age, string $gender) {
            $this -> name = $name;
            $this -> age = $age;
            $this -> gender = $gender;
        }

        public function setName(string $name) : void {
            if (empty($name)) {
                throw new Exception('Name is required');
            }
            $this -> name = $name;
        }

        public function getName() : string {
            return $this -> name;
        }

        public function setAge(int $age) : void {
            if ($age <= 0) {
                throw new Exception('Age is invalid');
            }
            $this -> age = $age;
        }

        public function getAge() : int {
            return $this -> age;
        }

        public function setGender(string $gender) : void {
            if (!in_array($gender, ['Male', 'Female'])) {
                throw new Exception('Gender is invalid');
            }
            $this -> gender = $gender;
        }

        public function getGender() : string {
            return $this -> gender;
        }

        public function showInformation() : string {
            return sprintf("Name: %s<br>Age: %s<br>Gender: %s", $this ->name, $this->age, $this->gender);
        }
    }

    $person = new Person('Nguyen Van A', 19, 'Male');
    echo $person->showInformation();
?>