<?php
  class Person {
    var $name;
    var $age;
    var $birthday = false;

    function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
    
    public function getName() {
      return $this->name;
    }

    public function getAge() {
      return $this->age;
    }

    public function setName( $name) {
      $this->name = $name;
    }

    public function setAge( $age) {
      $this->age = $age;
    }
  
    public function setBirthday( $birthday) {
      $this->birthday = $birthday;
      $this->updateAge();
    }

    private function updateAge(){
      $this->age = ($this->birthday) ? ++$this->age : $this ->age;
    }
  }

  $joe = new Person( 'Joe', 35);
  $rob = new Person('Rob', 30);

  echo $joe->getName();
  echo $rob->getName();

  $joe->setBirthday(true);
  echo $joe->getAge();


?>