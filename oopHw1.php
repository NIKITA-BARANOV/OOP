<?php


class Animal{
	public $weight, $colour;

	public function info($age, $breed, $colour, $weight){
		$this->breed = $breed;
		$this->colour = $colour;
		$this->age = $age;
		$this->weight = $weight;
	}
}

class Mammals extends Animal{
 	public $age, $breed;
}

class Cat extends Mammals{

	public function show(){
		echo $this->breed.PHP_EOL;
		echo $this->colour.PHP_EOL;
		echo $this->age.PHP_EOL;
		echo $this->weight.PHP_EOL;
	}

}


$barsik = new Cat();
$barsik->breed = 'Scotland';
$barsik->age = '3 year';
$barsik->colour = 'Grey';
$barsik->weight = '5 kg';
$barsik->show();