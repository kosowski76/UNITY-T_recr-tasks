<?php

class Zoo {

    private $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function feedAllAnimals() {
        foreach ($this->animals as $animal) {
            if ($animal instanceof Carnivore) {
                $animal->eatMeat();
            }
            if ($animal instanceof Herbivore) {
                $animal->eatPlants();
            }
        }
    }

    public function groomAllFurredAnimals() {
        foreach ($this->animals as $animal) {
            if ($animal instanceof HasFur) {
                $animal->groom();
            }
        }
    }
}
