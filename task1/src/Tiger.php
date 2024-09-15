<?php

class Tiger extends Animal implements Carnivore, HasFur {

    protected $species = "Tygrys";

    public function eatMeat() {
        echo $this->name . " je mięso.\n";
    }

    public function groom() {
        echo $this->name . " jest czesany.\n";
    }
}
