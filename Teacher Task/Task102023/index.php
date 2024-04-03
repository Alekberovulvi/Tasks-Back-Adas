<?php

// class Person{
//     private $name;
//     private $age;
//     private $email;

//     public function __construct($name, $age, $email) {
//         $this->name = $name;
//         $this->age = $age;
//         $this->email = $email;
//     }

    
// function getInfo(){
//    return "Name: " . $this->name . ", Age: " . $this->age . ", Email: " . $this->email;
//     }
// };


// $person1 = new Person("Ulvi",25,"test@gmail.com");

// echo $person1->getInfo();


// class Car{
//     private $make;
//     private $model;
//     private $year;


//     public function __construct($make,$model,$year){
//         $this->make = $make;
//         $this->model = $model;
//         $this->year = $year;
//     }

//     function getDetails(){
//        return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year;
//     }

//     function calculateAge($currentyear){
//         return $currentyear - $this->year;
//     }
// }

// $car = new Car("Vaz","2107",1982);
// echo $car->calculateAge().date_format("Y");


class BankAccount{
    private $balance;
    private $person;

    public function __construct($person){
        $this->person = $person;
        $this->depositbalance = 0;
    }

    public function addDeposit(){
        $this->balance +=$price;
    }

    public function Balance(){
        return $this->balance;
    }

    public function getFromDeposit($amount){
        $this->balance+=$amount;
        echo "Depozit $amount hesaba yatirildi $this->price. Yeni balans: $this->balance</br>";
    }

    public function checkBalance($amount){
       if($this->balance>=$amount){
        $this->balance-=$amount;
        echo "Hesabdan $amount bu qeder pul cixarildi $this->price. Yeni balans: $this->balance</br>"
       }
       else{
        echo "Hesabdan bu qeder pul cixarmaq isteyirsiz $amount?</br>"
        echo "Hesabda kifayet qeder vesait yoxdur $this->price. Cari balans $this->balance</br>"
       }
    }
}

$account = new BankAccount ("Ulvi");

echo $account->price(). "<br>";
echo $account->getBalance()."<br>";
$account->getFromDeposit(1000);
$account->checkBalance(600);
$account->checkBalance(700);