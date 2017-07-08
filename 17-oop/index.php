<?php
  class Person{
    public $nickname;
    private $name;
    public $email;
    public $gender;

    // เก็บค่าไว้ใน class
    // เรียกผ่านClass::/static function:: เท่านั้น
    public static $numberOfClass = 0;

    public function __construct($name, $email, $gender='male') {
      self::$numberOfClass++;
      $this->name = $name;
      $this->email = $email;
      $this->gender = $gender;
      echo __CLASS__.' created <br />';
    }
    public function __destruct() {
      echo __CLASS__.' destroyed <br />';
    }

    public static function getnumberOfClass() {
      echo self::$numberOfClass . "<br />";
    }

    public static function readableObject($obj) {
      echo "<pre>"; var_dump($obj); echo "</pre>";
    }

    public function setName($name) {
      $this->name = $name;
    }
    public function getName() {
      return $this->name;
    }
  }

  $person1 = new Person('Bank', 'abc@gmail.com');
  $person1->nickname = 'Teddy';
  echo $person1->nickname . "<br />";
  echo $person1->gender . "<br />";
  // $person1->name = 'Teddy'; //error ห้ามเรียก private โดยตรง
  // echo $person1->name; //

  $person1->setName('wanderer');
  echo $person1->getName() . "<br />";

  // Static Funciton
  // เรียกผ่าน Class/Instance ได้
  Person::getnumberOfClass();
  $person2 = new Person('mine', 'abc@gmail.com', 'female');
  Person::getnumberOfClass();
  $person2::getnumberOfClass();
  Person::readableObject($person2);

  class Customer extends Person{
  private $wealth;

    public function __construct($name, $email, $gender, $wealth) {
      parent::__construct($name, $email, $gender);
      $this->wealth = $wealth;
      echo __CLASS__.' created <br />';
    }

    public function getWealth() {
      return $this->wealth;
    }
  }

  $customer1 = new Customer('Ken','ken@gmail.com','male','rich');
  echo $customer1->getName() . "<br />";
  echo $customer1->getWealth() . "<br />";
  Customer::getnumberOfClass(); // 3
  echo Customer::$numberOfClass . "<br />"; // 3
