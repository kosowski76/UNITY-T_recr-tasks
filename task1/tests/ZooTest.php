<?php

use PHPUnit\Framework\TestCase;

class ZooTest extends TestCase
{
    public function testAnimalToString()
    {
        $tiger = new Tiger("Duke");
        $this->assertEquals("Tygrys Duke", (string)$tiger);

        $elephant = new Elephant("Dumbo");
        $this->assertEquals("Słoń Dumbo", (string)$elephant);
    }

    public function testCarnivoreEatingMeat()
    {
        $tiger = new Tiger("Duke");

        $this->expectOutputString("Duke je mięso.\n");
        $tiger->eatMeat();
    }

    public function testHerbivoreEatingPlants()
    {
        $elephant = new Elephant("Dumbo");

        $this->expectOutputString("Dumbo je rośliny.\n");
        $elephant->eatPlants();
    }

    public function testOmnivoreEatingBoth()
    {
        $fox = new Fox("Reynard");

        $this->expectOutputString("Reynard je mięso.\nReynard je rośliny.\n");
        $fox->eatMeat();
        $fox->eatPlants();
    }

    public function testHasFurGrooming()
    {
        $tiger = new Tiger("Duke");

        $this->expectOutputString("Duke jest czesany.\n");
        $tiger->groom();
    }

    public function testZooFeedingAnimals()
    {
        $zoo = new Zoo();
        $tiger = new Tiger("Duke");
        $elephant = new Elephant("Dumbo");

        $zoo->addAnimal($tiger);
        $zoo->addAnimal($elephant);

        $this->expectOutputString("Duke je mięso.\nDumbo je rośliny.\n");
        $zoo->feedAllAnimals();
    }

    public function testZooGroomingFurredAnimals()
    {
        $zoo = new Zoo();
        $tiger = new Tiger("Duke");
        $fox = new Fox("Reynard");

        $zoo->addAnimal($tiger);
        $zoo->addAnimal($fox);

        $this->expectOutputString("Duke jest czesany.\nReynard jest czesany.\n");
        $zoo->groomAllFurredAnimals();
    }
}

