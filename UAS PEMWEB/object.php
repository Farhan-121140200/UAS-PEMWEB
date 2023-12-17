<!--Farhan Rizky Gunawan-->
<!--121140200-->
<!--Pemrograman web RB-->
<?php
class Person {
  private $name;
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

$person = new Person("John", 30);
echo "Name: " . $person->getName() . "<br>";
echo "Age: " . $person->getAge();
?>
