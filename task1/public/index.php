<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Tworzenie zoo i dodawanie zwierząt
$zoo = new Zoo();
$zoo->addAnimal(new Tiger("Duke"));
$zoo->addAnimal(new Fox("Reynard"));
$zoo->addAnimal(new Elephant("Dumbo"));
$zoo->addAnimal(new Rabbit("Bunny"));

// Wypisywanie informacji o zwierzętach
echo "=== Witaj w Zoo ===\n";

// Karmienie wszystkich zwierząt
echo "\n--- Karmienie zwierząt ---\n";
$zoo->feedAllAnimals();

// Czesanie zwierząt z futrem
echo "\n--- Czesanie zwierząt z futrem ---\n";
$zoo->groomAllFurredAnimals();
