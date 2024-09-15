   # task1 

 ## Technologies
  <ul>
    <li>PHP 8.2 / 8.3</li>
    <li>phpunit/phpunit 10</li>
  </ul>

 ## Structure the script:

    task1/
    ├── src/
    │   ├── Animal.php
    │   ├── Carnivore.php
    │   ├── Herbivore.php
    │   ├── Omnivore.php
    │   ├── HasFur.php
    │   ├── Tiger.php
    │   ├── Elephant.php
    │   ├── Fox.php
    │   ├── Rabbit.php
    │   └── Zoo.php            
    ├── tests/
    │   └── ZooTest.php
    ├── public/
    │   └── index.php
    ├── composer.json
    └── vendor/

 ## Run script by cli and browser:

    $ composer dump-autoload
    $ php public/index.php

    and browser: 

    localhost:<path-to-script>/task1/public/

 ## Run tests:

    ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/ZooTest.php
