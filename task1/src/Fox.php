<?php

class Fox extends Animal implements Omnivore, HasFur {

    protected $species = "Lis";

    public function eatMeat() {
        echo $this->name . " je mięso.\n";
    }

    public function eatPlants() {
        echo $this->name . " je rośliny.\n";
    }

    public function groom() {
        echo $this->name . " jest czesany.\n";
    }
}
