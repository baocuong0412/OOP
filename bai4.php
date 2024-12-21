<?php 
    abstract class Person {
        public int $id;
        public string $name;
        public int $age;
        public string $gender;

        public function __construct(int $id, string $name, int $age, string $gender) {
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function getId() : int {
            return $this->id;
        }

        public function getName() : string {
            return $this->name;
        }

        public function getAge() : int {
            return $this->age;
        }

        public function getGender() : string {
            return $this->gender;
        }

        public function setId(int $id) : void {
            if ($id <= 0) {
                throw new Exception("ID is invalid");
            }
            $this->id = $id;
        }

        public function setName(string $name) : void {
            if (empty($name)) {
                throw new Exception("Name is invalid");
            }
            $this->name = $name;
        }

        public function setAge(int $age) : void {
            if ($age <= 0) {
                throw new Exception("Age is invalid") ;
            }
            $this->age = $age;
        }

        public function setGender(string $gender) : void {
            if (!in_array($gender, ['Male', 'Female'])) {
                throw new Exception('Gender is invalid');
            }
            $this -> gender = $gender;
        }
    }

    final class Students extends Person {};

    final class Teacher extends Person {};

    class Course {
        public string $name;
        public Teacher $teacher;
        public array $students = [];

        public function __construct(string $name, Teacher $teacher) {
            $this->name = $name;
            $this->teacher = $teacher;
        }

        public function enrollStudent(Students $student) {
            $this->students[] = $student;
        }

        public function getStudents() : array {
            return $this->students;
        }

        public function getCourseName() : string {
            return $this->name;
        }

        public function getTeacher() : Teacher {
            return $this->teacher;
        }
    }

    $teacher = new Teacher(1, 'Nguyen Van A', 35, "Male");

    $course = new Course("Math 101", $teacher);

    $student1 = new Students(1, 'Ha', 20, "Female");
    $student2 = new Students(2, 'Bao', 22, "Male");
    $student3 = new Students(3, 'Ngan', 19, "Female");
    $student4 = new Students(4, 'Trung', 20, "Male");

    $course->enrollStudent($student1);
    $course->enrollStudent($student2);
    $course->enrollStudent($student3);
    $course->enrollStudent($student4);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 4</title>
</head>
<body>
    <h1>Bang Thong Tin</h1>
    <table border="1">
        <tr>
            <th>Course</th>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= $course->getCourseName() ?></td>
        </tr>
        <tr>
            <th>Teacher</th>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= $teacher-> getName() ?></td>
        </tr>
        <tr>
            <th>ID</th>
            <td><?= $teacher-> getId() ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?= $teacher-> getAge() ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?= $teacher-> getGender() ?></td>
        </tr>
        <tr>
            <th>Students</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        <?php foreach ($course-> getStudents() as $student) : ?>
        <tr>
            <td><?= $student-> getId() ?></td>
            <td><?= $student-> getName() ?></td>
            <td><?= $student-> getAge() ?></td>
            <td><?= $student-> getGender() ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>