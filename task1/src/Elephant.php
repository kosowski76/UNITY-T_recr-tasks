<?php

class Elephant extends Animal implements Herbivore {

    protected $species = "Słoń";

    public function eatPlants() {
        echo $this->name . " je rośliny.\n";
    }
}
