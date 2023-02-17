<?php
class Person {
    protected $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

class Profession extends Person {
    protected $title;
    private $salary;
    private $profiles = [];

    public function __construct($name, $age, $title, $salary) {
        parent::__construct($name, $age);
        $this->title = $title;
        $this->salary = $salary;
        $this->profiles = [
            'profile1' => ['name' => 'Davit Davitadze', 'age' => 35, 'title' => 'Doctor'],
            'profile2' => ['name' => 'Gogi Gogadze', 'age' => 28, 'title' => 'Journalist'],
            'profile3' => ['name' => 'Nona Nonadze', 'age' => 42, 'title' => 'Artist'],
            'profile4' => ['name' => 'Ani Anidze', 'age' => 39, 'title' => 'Doctor'],
            'profile5' => ['name' => 'Nika Nikashvili', 'age' => 27, 'title' => 'Journalist'],
            'profile6' => ['name' => 'Soso Sosoia', 'age' => 30, 'title' => 'Artist'],
            'profile7' => ['name' => 'Machu Piqchu', 'age' => 45, 'title' => 'Doctor'],
            'profile8' => ['name' => 'Zura Zurabishvili', 'age' => 32, 'title' => 'Journalist'],
            'profile9' => ['name' => 'Robo Robinzonadze', 'age' => 29, 'title' => 'Artist'],
            'profile10' => ['name' => 'Eka Ekadze', 'age' => 36, 'title' => 'Doctor'],
        ];
    }

    public function getTitle() {
        return $this->title;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getProfiles() {
        return $this->profiles;
    }

    public function getProtectedAge() {
        return $this->getAge(); // accessing protected property through public method
    }

    private function isSalaryHigh() {
        return $this->salary > 100000;
    }

    public function testIsSalaryHigh() {
        if ($this->isSalaryHigh()) {
            echo 'Salary is high';
        } else {
            echo 'Salary is not high';
        }
    }
}

function getProfession() {
    $data = file_get_contents('data.txt');
    $dataArr = explode(',', $data);
    $name = $dataArr[0];
    $age = $dataArr[1];
    $title = $dataArr[2];
    $salary = $dataArr[3];
    return new Profession($name, $age, $title, $salary);
}