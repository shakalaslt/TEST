<?php


class Person {
	public $name;
	public $surname;
	public $age;



	public function __construct($n1,$s1,$a1){
		$this->name = $n1;
		$this->$surname = $s1;
		$this->$age = $a1;
		echo "Vardas". $this->name ."pavarde". $this->surname ."amzius". $this->age . "<br>";
	}
}

class Staff extends Person {

}



class Client extends Person {
	
}
