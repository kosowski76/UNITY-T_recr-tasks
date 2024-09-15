<?php

class Rabbit extends Animal implements Herbivore, HasFur {

    protected $species = "Królik";

    public function eatPlants() {
        echo $this->name . " je rośliny.\n";
    }

    public function groom() {
        echo $this->name . " jest czesany.\n";
    }
}
