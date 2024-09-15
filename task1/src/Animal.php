<?php

abstract class Animal {

    protected $name;
    protected $species;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function __toString(): string {
        return $this->species . " " . $this->name;
    }
}
