<?php
    class Person{
        private $name;
        private $email;
        private static $ageLimit = 30;


        public function __construct($name,$email){
            $this->name= $name;
            $this->email= $email;
            echo "<br>".__CLASS__.' created<br>';        //gives name of the class
        }

        public function __destruct(){
            echo "<br>".__CLASS__.' destroyed<br>';        //gives name of the class
        }

        public function getName(){
            return $this->name;
        }

        // public function setName($name){
        //     $this->name= $name;
        // }

        public function getEmail(){
            return $this->email;
        }


        //for static methods and variables
        public static function getage(){
            return self::$ageLimit;
        }

        // public function setEmail($email){
        //     $this->email= $email;
        // }
    } 

    echo Person :: getage();

    // $person1 = new Person;
    // $person1->name = "Myron";
    // $person1->email = "myron.c@somaiya.edu";

    // $person1->setName("MyronCarvalho");
    // echo $person1->getName();
    //instead of using get set all time use a constructor and add all these functions there

    $person1 = new Person("myron","myron@xyz.com");
    echo "<br>". $person1->getName();
    echo "<br>". $person1->getEmail();

    class Customer extends Person{
        private $balance;

        public function __construct($name, $email,$balance){
                parent :: __construct($name,$email,$balance);
                $this->balance= $balance;
                echo 'A new '.__CLASS__." is created.";
        }

        public function getBalance(){
            return $this->balance;
        }

        public function setBalance($balance){
            $this->balance= $balance;
        }
    }

    $customer1 = new Customer("customerhu","we@ppl.com",300);
    echo "<br>". $customer1->getBalance();




?>